<?php

use Elector\Forms\Voters\VoterLogin;
use Elector\Forms\Candidates\CandidateLogin;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        
    }

    public function loginAction()
    {
        // We need to show voter and candidate login forms
        $this->forms->set('voterLogin', new VoterLogin());
        $this->forms->set('candidateLogin', new CandidateLogin());
    }

}

