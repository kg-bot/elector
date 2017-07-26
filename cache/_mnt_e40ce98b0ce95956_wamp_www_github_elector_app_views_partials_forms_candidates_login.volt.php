<?php $candidateLogin = $this->forms->get('candidateLogin'); ?>

<?= $this->tag->form([$this->config->application->urls->candidates->login, 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $candidateLogin->renderDecorated('candidateEmail') ?>
        <?= $candidateLogin->renderDecorated('candidatePassword') ?>
        <?= $candidateLogin->renderDecorated('Login') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->register, 'Don\'t have an account yet?']) ?>
    </fieldset>
<?= $this->tag->endForm() ?>
