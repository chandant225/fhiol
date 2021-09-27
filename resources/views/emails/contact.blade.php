@component('mail::message')
# Name
{{ $contactUs->name }}

# Email
{{ $contactUs->email }}

# Mobile
{{ $contactUs->mobile }}

# Subject
{{ $contactUs->subject }}

# Message
{{ $contactUs->message }}

@endcomponent
