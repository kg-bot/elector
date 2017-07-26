{% set voterLogin = forms.get('voterLogin') %}

{{ form(config.application.urls.voters.login, 'method': 'post', 'class': 'form-horizontal') }}
    <fieldset>
    
        {{ voterLogin.renderDecorated('voterEmail') }}
        {{ voterLogin.renderDecorated('voterPassword') }}
        {{ voterLogin.renderDecorated('Login') }}

        {{ link_to(config.application.urls.register, "Don't have an account yet?")}}
    </fieldset>
{{ end_form() }}
