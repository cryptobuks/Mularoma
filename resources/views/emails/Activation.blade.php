@component('mail::message')
Hi {{$s}}

{{$message}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
