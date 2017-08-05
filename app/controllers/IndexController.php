<?php

use Elector\Forms\Voters\VoterLogin;
use Elector\Forms\Candidates\CandidateLogin;

// Register form
use Elector\Forms\Register;

use Rinvex\Country\CountryLoader;

use Elector\library\Cities\Cities;
use Elector\library\Regions\Regions;

use Phalcon\Validation;
use Phalcon\Validation\Validator\File;
use Phalcon\Validation\Validator\PresenceOf;
use Elector\Validation\FaceDetection;

class IndexController extends ControllerBase
{
    public function initialize()
    {
        // We need to show voter and candidate login forms
        $this->forms->set('login', new VoterLogin());
        // We need to set register form in FormsManager
        $this->forms->set('register', new Register());
    }

    public function indexAction()
    {
        
    }

    public function loginAction()
    {
        
    }

    public function registerAction()
    {
        // If method is POST we need to try and register user
        if($this->request->isPost()) {

            $register_form = $this->forms->get('register');

            if($register_form->isValid(array_merge($this->request->getPost(), $_FILES))) {
                // TODO: Implement register new user and adding it to database logic
                var_dump('Valid');
                die();
            }
        }
        // If method is GET we need to show register form
        elseif(!$this->request->isGet()) {
            throw new Exception("Error Processing Request", 1);
            
        }
    }

    /**
     * Method used to list all cities in provided region
     * @return [type] [description]
     */
    public function regionCitiesAction()
    {
        $this->view->disable();
        if($this->request->isGet()) {
            if($this->request->isAjax()) {
                $request_region = $this->request->get('regionID');

                $cities = Cities::getRegionCities($request_region);

                if(!empty($cities)) {
                    // Now we need to populate <option> elements for city <select>
                    $options = Cities::getCityOptions($cities);

                    echo $options;
                }
            }
        }
    }

}

