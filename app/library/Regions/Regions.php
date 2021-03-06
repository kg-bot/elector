<?php

namespace Elector\library\Regions;

use Phalcon\DI;
use Doctrine\Common\Collections\Selectable;

class Regions
{
    public static function getAllRegions(): Selectable
    {
        $em = DI::getDefault()->get('doctrineEM');
        
        return $em->getRepository('Regions')->findAll();
    }

    /**
     * Method fatchs all cities inside a region
     * @param  int $regionID 
     * @return Selectable Selectable of all cities
     */
    public static function getRegionCities($regionID)
    {
        $em = DI::getDefault()->get('doctrineEM');

        return $em->find('Regions', $regionID)->getCities();
    }

    /**
     * This method is used only to populate <option> elements for region <select> from AJAX call
     *
     * @param  Selectable Selectable of regions
     * @return string Generated html of <option> elements
     */
    public static function getRegionOptions(Selectable $regions)
    {
        $html = '';
        foreach($regions as $region) {
            // We need to check if region name is same as country name and remove it if it's same
            if($region->getRegion() != $region->getCountry()->getCountry()) {
                $html .= '<option value="' . $region->getRegionid() . '">' . $region->getRegion() . '</option>';
            }
        }

        return $html;
    }
}