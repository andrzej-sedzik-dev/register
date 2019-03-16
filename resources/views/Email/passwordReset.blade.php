@component('mail::message')
    # Change password Request

    Click on the button below to change password

    @component('mail::button', ['url' => 'angular-deploy2020.herokuapp.com/response-password-reset?token='.$token])
        Reset Password
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent


@component('mail::button', ['url' => 'angular-deploy2020.herokuapp.com/response-password-reset?token='.$token])
    Reset Password
@endcomponent
