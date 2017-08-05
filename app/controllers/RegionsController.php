<?php

use Elector\library\Cities\Cities;
use Elector\library\Regions\Regions;

class RegionsController extends ControllerBase
{

    public function indexAction()
    {
        
    }

    /**
     * Method used to list all cities in provided region
     * @return [type] [description]
     */
    public function getCitiesAction()
    {
        $this->view->disable();
        if($this->request->isGet()) {
            if($this->request->isAjax()) {
                $request_region = $this->request->get('regionID');
                
                $cities = Regions::getRegionCities($request_region);

                if(!empty($cities)) {
                    // Now we need to populate <option> elements for city <select>
                    $options = Cities::getCityOptions($cities);

                    echo $options;
                }
            }
        }
    }

}

