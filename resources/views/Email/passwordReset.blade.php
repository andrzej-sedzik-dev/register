@component('mail::message')
# Change password

Click on the button bellow to change password

@component('mail::button', ['url' => 'http://larva-register.herokuapp.com/app'])

Reset Password

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
