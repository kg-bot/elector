<?php

use Elector\library\Countries\Countries;
use Elector\library\Regions\Regions;

class CountryController extends ControllerBase
{
    /**
     * Method used to list all cities in provided region
     * @return [type] [description]
     */
    public function getRegionsAction()
    {
        $this->view->disable();
        if($this->request->isGet()) {
            if($this->request->isAjax()) {
                $request_country = $this->request->get('countryID');

                $regions = Countries::getCountryRegions($request_country);

                if(!empty($regions)) {
                    // Now we need to populate <option> elements for region <select>
                    $options = Regions::getRegionOptions($regions);

                    echo $options;
                }
            }
        }
    }

}

