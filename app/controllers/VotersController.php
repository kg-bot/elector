<?php

use Elector\Forms\Voters\VoterLogin;

class VotersController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function loginAction()
    {
        // If this is post we need to try and login user
        if($this->request->isPost()) {
            return;
        } else {
            // Other HTTP methods are not available here, we redirect user to home page
            $this->response->redirect();
        }
    }

}

