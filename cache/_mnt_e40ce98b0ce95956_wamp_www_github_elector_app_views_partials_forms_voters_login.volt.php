<?php $voterLogin = $this->forms->get('voterLogin'); ?>

<?= $this->tag->form([$this->config->application->urls->voters->login, 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $voterLogin->renderDecorated('voterEmail') ?>
        <?= $voterLogin->renderDecorated('voterPassword') ?>
        <?= $voterLogin->renderDecorated('Login') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->register, 'Don\'t have an account yet?']) ?>
    </fieldset>
<?= $this->tag->endForm() ?>
