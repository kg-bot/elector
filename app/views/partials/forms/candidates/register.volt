{% set candidateRegister = forms.get('candidateRegister') %}

{{ form(config.application.urls.candidates.register, 'method': 'post', 'class': 'form-horizontal') }}
    <fieldset>
    
        {{ candidateRegister.renderDecorated('candidateEmail') }}

        {{ candidateRegister.renderDecorated('candidatePassword') }}
        {{ candidateRegister.renderDecorated('candidatePasswordConfirm') }}

        {{ candidateRegister.renderDecorated('candidateFirstName') }}
        {{ candidateRegister.renderDecorated('candidateLastName') }}

        {{ candidateRegister.renderFileChooser('candidateProfileImage', 'Upload profile image...') }}
        {{ candidateRegister.renderFileChooser('candidateIdImage', 'Upload your ID card image...') }}

        {{ candidateRegister.renderDecorated('candidateSelectCountry') }}
        {{ candidateRegister.renderDecorated('candidateSelectRegion') }}
        {{ candidateRegister.renderDecorated('candidateSelectCity') }}

        {{ candidateRegister.renderDecorated('Register') }}

        {{ link_to(config.application.urls.login, "Already have an account?")}}
    </fieldset>
{{ end_form() }}
