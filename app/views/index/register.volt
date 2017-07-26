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
                                {% include 'partials/forms/voters/register.volt' %}
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
                                {% include 'partials/forms/candidates/register.volt' %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>