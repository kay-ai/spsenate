@component('mail::message')
{{$details['title']}}
<br>
<br>
{{$details['message']}}
<br>
<br>
When: <b>{{$details['time']}}</b>
<br>
Role: <b>{{$details['role']}}</b>
<br>
@component('mail::button', ['url' => $details['url']])
Verify Email!
@endcomponent

Thank you,<br>
{{ config('app.name') }}
@endcomponent
