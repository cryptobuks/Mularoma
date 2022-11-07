@component('mail::message')
Congratulations 🎊🎊 {{$username}}<br>
You have successfully enrolled to {{$package_name}}.

We are excited to have you join this Community.

Use the link below to join the community.

{{$group_link}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
