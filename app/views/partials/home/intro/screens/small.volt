<div class="row visible-xs intro-blocks">
    <ul class="nav nav-tabs nav-tabs-danger">
        <li class="active col-xs-6 text-center" role="presentation">
            <a aria-controls="voters" data-toggle="tab" href="#voters" role="tab">
                Voters
            </a>
        </li>
        <li class="col-xs-6 text-center" role="presentation">
            <a aria-controls="candidates" data-toggle="tab" href="#candidates" role="tab">
                Candidates
            </a>
        </li>
    </ul>
    <div class="intro tab-content">
        <div class="tab-pane active fade in" id="voters" role="tabpanel">
            {% include 'partials/home/intro/panels/voters.volt' %}
        </div>
        <div class="tab-pane" id="candidates" role="tabpanel">
            {% include 'partials/home/intro/panels/candidates.volt' %}
        </div>
    </div>
</div>