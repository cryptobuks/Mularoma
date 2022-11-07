@component('mail::message')
Hi {{$username}}


{{$message}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
