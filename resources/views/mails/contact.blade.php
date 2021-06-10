@component('mail::message')
Dear Admin,

{{ $message->message }}

Thanks,<br>
{{ $message->name }}
@endcomponent
