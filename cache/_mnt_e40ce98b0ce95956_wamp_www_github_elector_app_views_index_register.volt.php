<div class="col-xs-12 col-sm-6 col-sm-offset-3 margin-top-5-percent">
    <div class="well">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="panel-group" id="registerAccordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingVotersRegister">
                            <h1 class="panel-title text-center">
                                <a role="button" data-toggle="collapse" data-parent="#registerAccordion" href="#collapseVotersRegister" aria-expanded="true" aria-controls="collapseVotersRegister">
                                  Register as Voter
                                </a>
                            </h1>
                        </div>
                        <div id="collapseVotersRegister" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingVotersRegister">
                            <div class="panel-body padding-50">
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

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingCandidatesRegister">
                            <h1 class="panel-title text-center">
                                <a role="button" data-toggle="collapse" data-parent="#registerAccordion" href="#collapseCandidatesRegister" aria-expanded="true" aria-controls="collapseCandidatesRegister">
                                  Register as Candidate
                                </a>
                            </h1>
                        </div>
                        <div id="collapseCandidatesRegister" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCandidatesRegister">
                            <div class="panel-body padding-50">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>