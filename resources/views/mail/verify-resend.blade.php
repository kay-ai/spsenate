@component('mail::message')
{{$details['title']}}
<br>
<br>
{{$details['message']}}
<br>
<br>
@component('mail::button', ['url' => $details['url']])
Verify Email!
@endcomponent

Thank you,<br>
{{ config('app.name') }}
@endcomponent
