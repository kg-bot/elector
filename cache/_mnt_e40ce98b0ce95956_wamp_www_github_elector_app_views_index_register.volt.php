<div class="col-xs-12 col-sm-6 col-sm-offset-3 margin-top-5-percent">
    <div class="well">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <h2 class="text-primary text-center">Register New User</h2>
                <?php $register = $this->forms->get('register'); ?>

<?= $this->tag->form([$this->config->application->urls->register, 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'userRegisterForm', 'enctype' => 'multipart/form-data']) ?>
    
        <?= $register->renderDecorated('email') ?>

        <?= $register->renderDecorated('password') ?>
        <?= $register->renderDecorated('PasswordConfirm') ?>

        <?= $register->renderDecorated('FirstName') ?>
        <?= $register->renderDecorated('LastName') ?>

        <?= $register->renderFileChooser('ProfileImage', 'Upload profile image...') ?>
        <?= $register->renderFileChooser('IdImage', 'Upload your ID card image...') ?>

        <?= $register->renderDecorated('SelectCountry') ?>
        <?= $register->renderDecorated('SelectRegion') ?>
        <?= $register->renderDecorated('SelectCity') ?>

        <?= $register->renderDecorated('Register') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->login, 'Already have an account?']) ?>
<?= $this->tag->endForm() ?>

            </div>
        </div>
    </div>
</div>