<?php

namespace Elector\library\Countries;

use Phalcon\Di;

class Countries
{
    /**
     * Method returns list of all countries from database
     * @return array Countries
     */
    public static function getAllCountries()
    {
        // Doctrine EntityManager
        $em = DI::getDefault()->get('doctrineEM');

        return $em->getRepository('Countries')->findAll();
    }

    /**
     * Method fatches all regions inside a country
     * @param  int $countryID 
     * @return array            Array of regions
     */
    public static function getCountryRegions(int $countryID)
    {
        // Doctrine EntityManager
        $em = DI::getDefault()->get('doctrineEM');

        return $em->getRepository('Countries')->find($countryID)->getRegions();
    }
}