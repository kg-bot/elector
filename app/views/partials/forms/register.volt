{% set register = forms.get('register') %}

{{ form(config.application.urls.register, 'method': 'post', 'class': 'form-horizontal', 'id': 'userRegisterForm', 'enctype': 'multipart/form-data') }}
    
        {{ register.renderDecorated('email') }}

        {{ register.renderDecorated('password') }}
        {{ register.renderDecorated('PasswordConfirm') }}

        {{ register.renderDecorated('FirstName') }}
        {{ register.renderDecorated('LastName') }}

        {{ register.renderFileChooser('ProfileImage', 'Upload profile image...') }}
        {{ register.renderFileChooser('IdImage', 'Upload your ID card image...') }}

        {{ register.renderDecorated('SelectCountry') }}
        {{ register.renderDecorated('SelectRegion') }}
        {{ register.renderDecorated('SelectCity') }}

        {{ register.renderDecorated('Register') }}

        {{ link_to(config.application.urls.login, "Already have an account?")}}
{{ end_form() }}
