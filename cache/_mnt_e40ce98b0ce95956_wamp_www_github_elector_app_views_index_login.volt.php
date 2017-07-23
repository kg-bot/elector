<div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <div class="well">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="panel-group" id="loginAccordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingVotersLogin">
                            <h1 class="panel-title text-center">
                                <a role="button" data-toggle="collapse" data-parent="#loginAccordion" href="#collapseVotersLogin" aria-expanded="true" aria-controls="collapseVotersLogin">
                                  Login as Voter
                                </a>
                            </h1>
                        </div>
                        <div id="collapseVotersLogin" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingVotersLogin">
                            <div class="panel-body padding-50">
                                <?php $voterLogin = $this->forms->get('voterLogin'); ?>

<?= $this->tag->form(['/voters/login', 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $voterLogin->renderDecorated('voterEmail') ?>
        <?= $voterLogin->renderDecorated('voterPassword') ?>
        <?= $voterLogin->renderDecorated('Login') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->voters->register, 'Don\'t have an account yet?']) ?>
    </fieldset>
<?= $this->tag->endForm() ?>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingCandidatesLogin">
                            <h1 class="panel-title text-center">
                                <a role="button" data-toggle="collapse" data-parent="#loginAccordion" href="#collapseCandidatesLogin" aria-expanded="true" aria-controls="collapseCandidatesLogin">
                                  Login as Candidate
                                </a>
                            </h1>
                        </div>
                        <div id="collapseCandidatesLogin" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCandidatesLogin">
                            <div class="panel-body padding-50">
                                <?php $candidateLogin = $this->forms->get('candidateLogin'); ?>

<?= $this->tag->form([$this->config->application->urls->candidates->login, 'method' => 'post', 'class' => 'form-horizontal']) ?>
    <fieldset>
    
        <?= $candidateLogin->renderDecorated('candidateEmail') ?>
        <?= $candidateLogin->renderDecorated('candidatePassword') ?>
        <?= $candidateLogin->renderDecorated('Login') ?>

        <?= $this->tag->linkTo([$this->config->application->urls->candidates->register, 'Don\'t have an account yet?']) ?>
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