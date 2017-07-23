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
                                {% include 'partials/forms/voters/login.volt' %}
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
                                {% include 'partials/forms/candidates/login.volt' %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>