@component('mail::message')
# Royal Experience Contact Feedback

1. Name: {{ $data['name'] }}
2. Email: {{ $data['email'] }}
3. Message: {{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
