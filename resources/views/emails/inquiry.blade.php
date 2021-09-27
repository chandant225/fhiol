@component('mail::message')
# Name
{{ $productInquiry->customer_name }}

# Email
{{ $productInquiry->email }}

# Phone
{{ $productInquiry->customer_phone }}

# Message
{{ $productInquiry->message }}

# Product
{{ $productInquiry->product->name ?? null }}
@endcomponent
