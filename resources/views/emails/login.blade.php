@component('mail::message')
Hi {{$name}}

You have successfully signed in to 

https://elshadaigtinvestment.org

from {{$server}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
