@component('mail::message')
# Change password

Click on the button bellow to change password

@component('mail::button', ['url' => 'http://angular-deploy2020.herokuapp.com/response-password-reset?token='.$token])

Reset Password

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
