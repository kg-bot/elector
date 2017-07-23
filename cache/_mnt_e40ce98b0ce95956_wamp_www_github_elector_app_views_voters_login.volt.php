<div class="col-xs-6 col-xs-offset-3">
    <div class="well padding-50">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h1 class="panel-title text-center">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Login as Voter
                                </a>
                            </h1>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body padding-50">
                                <?php $voterLogin = $this->forms->get('voterLogin'); ?>

<?= $this->tag->form(['/voters/login', 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $voterLogin->renderDecorated('voterEmail') ?>
        <?= $voterLogin->renderDecorated('voterPassword') ?>
        <?= $voterLogin->renderDecorated('Login') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->voters->register, 'Don\'t have account yet?']) ?>
    </fieldset>
<?= $this->tag->endForm() ?>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h1 class="panel-title text-center">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Login as Candidate
                                </a>
                            </h1>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body padding-50">
                                <?php $candidateLogin = $this->forms->get('candidateLogin'); ?>

<?= $this->tag->form([$this->config->application->urls->voters->login, 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $voterLogin->renderDecorated('voterEmail') ?>
        <?= $voterLogin->renderDecorated('voterPassword') ?>
        <?= $voterLogin->renderDecorated('Login') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->voters->register, 'Don\'t have account yet?']) ?>
    </fieldset>
<?= $this->tag->endForm() ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>