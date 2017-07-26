<?php $candidateRegister = $this->forms->get('candidateRegister'); ?>

<?= $this->tag->form([$this->config->application->urls->candidates->register, 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $candidateRegister->renderDecorated('candidateEmail') ?>

        <?= $candidateRegister->renderDecorated('candidatePassword') ?>
        <?= $candidateRegister->renderDecorated('candidatePasswordConfirm') ?>

        <?= $candidateRegister->renderDecorated('candidateFirstName') ?>
        <?= $candidateRegister->renderDecorated('candidateLastName') ?>

        <?= $candidateRegister->renderFileChooser('candidateProfileImage', 'Upload profile image...') ?>
        <?= $candidateRegister->renderFileChooser('candidateIdImage', 'Upload your ID card image...') ?>

        <?= $candidateRegister->renderDecorated('candidateSelectCountry') ?>
        <?= $candidateRegister->renderDecorated('candidateSelectRegion') ?>
        <?= $candidateRegister->renderDecorated('candidateSelectCity') ?>

        <?= $candidateRegister->renderDecorated('Register') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->login, 'Already have an account?']) ?>
    </fieldset>
<?= $this->tag->endForm() ?>
