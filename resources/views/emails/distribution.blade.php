@component('mail::message')
# Name
{{ $distribution->name }}

# Email
{{ $distribution->email }}

# Company Name
{{ $distribution->company_name }}

# Phone
{{ $distribution->contact }}

# Address
@component('mail::panel')
{{ $distribution->street_address }}
<br>
{{ $distribution->city }}
<br>
{{ $distribution->state }}
@endcomponent

# Message
{{ $distribution->message }}

@endcomponent
