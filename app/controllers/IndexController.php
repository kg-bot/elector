<?php

use Elector\Forms\Voters\VoterLogin;
use Elector\Forms\Candidates\CandidateLogin;

use Elector\Forms\Voters\VoterRegister;
use Elector\Forms\Candidates\CandidateRegister;

use Rinvex\Country\CountryLoader;

use Elector\library\Cities\Cities;
use Elector\library\Regions\Regions;

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

    public function registerAction()
    {
        // We need to show voter and candidate register forms
        $this->forms->set('voterRegister', new VoterRegister());
        $this->forms->set('candidateRegister', new CandidateRegister());
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

