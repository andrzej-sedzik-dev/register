@component('mail::message')
# Change password

Click on the button bellow to change password

@component('mail::button', ['url' => 'http://app/response-password-reset?token='.$token])

Reset Password

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
