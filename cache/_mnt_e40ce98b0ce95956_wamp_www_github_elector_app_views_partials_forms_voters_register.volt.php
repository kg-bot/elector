<?php $voterRegister = $this->forms->get('voterRegister'); ?>

<?= $this->tag->form([$this->config->application->urls->voters->register, 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $voterRegister->renderDecorated('voterEmail') ?>

        <?= $voterRegister->renderDecorated('voterPassword') ?>
        <?= $voterRegister->renderDecorated('voterPasswordConfirm') ?>

        <?= $voterRegister->renderDecorated('voterFirstName') ?>
        <?= $voterRegister->renderDecorated('voterLastName') ?>

        <?= $voterRegister->renderFileChooser('voterProfileImage', 'Upload profile image...') ?>
        <?= $voterRegister->renderFileChooser('voterIdImage', 'Upload your ID card image...') ?>

        <?= $voterRegister->renderDecorated('voterSelectCountry') ?>
        <?= $voterRegister->renderDecorated('voterSelectRegion') ?>
        <?= $voterRegister->renderDecorated('voterSelectCity') ?>

        <?= $voterRegister->renderDecorated('Register') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->login, 'Already have an account?']) ?>
    </fieldset>
<?= $this->tag->endForm() ?>
