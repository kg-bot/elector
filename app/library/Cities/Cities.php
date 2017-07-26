<?php

namespace Elector\library\Cities;

use Phalcon\DI;

/**
 * Class used to get list of all cities in provided country
 */

class Cities
{
    public static function getCountryCities()
    {

    }

    /**
     * Method fatchs all cities inside a region
     * @param  int $regionID 
     * @return array           Array of all cities
     */
    public static function getRegionCities($regionID)
    {
        $sql = "SELECT c.City, c.RegionID, c.CityID FROM Cities c LEFT JOIN Regions r ON c.RegionID = r.RegionID WHERE c.RegionID = ?";
        $stmt = DI::getDefault()->get('doctrineDBALConnection')->prepare($sql);
        $stmt->bindValue(1, $regionID);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * This method is used only to populate <option> elements for cities <select>
     *
     * @param  array Array of cities
     */
    public static function getCityOptions(array $cities)
    {
        $html = '';
        foreach($cities as $city) {
            $html .= '<option value="' . $city['CityID'] . '">' . $city['City'] . '</option>';
        }

        return $html;
    }
}