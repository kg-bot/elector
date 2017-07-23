{% set candidateLogin = forms.get('candidateLogin') %}

{{ form(config.application.urls.candidates.login, 'method': 'post', 'class': 'form-horizontal') }}
    <fieldset>
    
        {{ candidateLogin.renderDecorated('candidateEmail') }}
        {{ candidateLogin.renderDecorated('candidatePassword') }}
        {{ candidateLogin.renderDecorated('Login') }}

        {{ link_to(config.application.urls.candidates.register, "Don't have an account yet?")}}
    </fieldset>
{{ end_form() }}
