@component('mail::message')
Hi {{$username}}

Your Withdrawal of {{$amount}} from {{$source}} to {{$destination}} was successful.



Thanks,<br>
{{ config('app.name') }}
@endcomponent
