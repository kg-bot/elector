<?php

class ValidateController extends ControllerBase
{
    /**
     * Used to validate email presence in database
     * @return [type] [description]
     */
    public function emailAction()
    {
        $this->view->disable();
        if($this->request->isPost()) {
            if($this->request->isAjax()) {
                $email = $this->request->get('email');

                $em = $this->doctrineEM;

                $user = $em->getRepository('User')->findOneBy(['email' => $email]);
                if($user) {
                    echo json_encode('This email is already in use.');
                } else {
                    echo json_encode('true');
                }
            }
        }
    }

}

