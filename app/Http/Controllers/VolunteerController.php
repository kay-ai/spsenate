<?php

namespace App\Http\Controllers;

use App\Models\VerifyToken;
use App\Models\Volunteer;
use App\Notifications\VolunteerRegisteration;
use App\Notifications\VolunteerVerification;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VolunteerController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required|unique:volunteers|email|max:50',
            'full_name' => 'string|max:50',
            'follow_campaign' => 'string|max:50'
        ],
        [
            'email.unique' => 'Another Volunteer has registered with this email.',
            'email.required' => 'Please supply a valid email account',
        ]);

        $volunteer = new Volunteer();
        $volunteer->full_name = $request->full_name;
        $volunteer->email = $request->email;
        $volunteer->specialty = $request->specialty;
        if($request->has('follow_campaign')){
            $volunteer->follow_campaign = $request->follow_campaign;
        }else{
            $volunteer->follow_campaign = '0';
        }
        $volunteer->save();

        $token = Str::random(64);
        $email = $request->email;
        DB::table('verify_tokens')->insert(
            ['email' => $email, 'token' => $token, 'created_at' => Carbon::now()]
        );
        $details = [
            'url' => route('email.verify.get', $token),
            'title' => 'Dear '.$volunteer->full_name.',',
            "time"=> Carbon::now(),
            'role'=> $volunteer->specialty,
            'message' => 'Thank you for choosing to Volunteer for Shina Peller on this campaign journey. We take the trust and safety of our volunteers seriously. We just need you to verify your email address by clicking the Verify Email button below. See you soon.'
        ];
        $volunteer->notify(new VolunteerRegisteration($details));
        return redirect()->route('welcome')->with(['email'=> $email, 'volunteer-success'=> 'Thank you for choosing to volunteer with us, Please check '.$volunteer->email.' mailbox and verify your email']);
    }

    // Go to Verification Page
    public function verify_email_page($token){
        $token = VerifyToken::where('token', $token)->first();
        if(!$token){
            return redirect()->back()->with('error', 'Invalid Token');
        }
        return view('verify-email', compact('token'));
    }

    // Verify Email Address
    public function verify_email(Request $request){
        $token = VerifyToken::where('token', $request->token)->first();
        if(!$token){
            return redirect()->back()->with('error', 'Invalid Token');
        }
        $volunteer = Volunteer::where('email', $token->email)->first();
        $volunteer->email_verified_at = Carbon::now()->toDateTimeString();
        $volunteer->save();

        DB::table('verify_tokens')->where('token', $request->token)->delete();

        return redirect()->route('welcome')->with('success', 'Email Verified Successfully');
    }

    // Resend Verification Email
    public function resend_verify_email(Request $request){
        // dd($request->email);
        $token = VerifyToken::where('email', $request->email)->first();
        $volunteer = Volunteer::where('email', $token->email)->first();

        if($token){
            DB::table('verify_tokens')->insert(
                ['email' => $request->email, 'token' => $token->token, 'created_at' => Carbon::now()]
            );

            $details = [
                'url' => route('email.verify.get', $token),
                'title' => 'Dear '.$volunteer->full_name.',',
                'message' => 'We take the trust and safety of our volunteers seriously. We just need you to verify your email address by clicking the Verify Email button below.'
            ];

            $volunteer->notify(new VolunteerVerification($details));
            $data['status'] = 'success';
        }

        return response()->json($data);
    }
}
