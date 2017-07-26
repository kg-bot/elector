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
        // Doctrine QueryBuilder
        $qb = DI::getDefault()->get('doctrineQB');

        $countries = $qb
                        ->select('Country, CountryID')
                        ->from('Countries')
                        ->execute()
                        ->fetchAll();
        return $countries;
    }

    /**
     * Method fatches all regions inside a country
     * @param  int $countryID 
     * @return array            Array of regions
     */
    public static function getCountryRegions($countryID)
    {
        $sql = "SELECT r.Region, r.RegionID, r.CountryID FROM Regions r LEFT JOIN Countries c ON r.CountryID = c.CountryID WHERE r.CountryID = ? AND r.Region != c.Country";
        $stmt = DI::getDefault()->get('doctrineDBALConnection')->prepare($sql);
        $stmt->bindValue(1, $countryID);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}