@component('mail::message')
Hi admin

{{$username}} has requested a withdrawal of {{$amount}} from {{$source}}
to {{$destination}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
