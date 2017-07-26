<?php

namespace Elector\library\Regions;

use Phalcon\DI;

class Regions
{

    public static $qb;
    
    // This method must be called before any of other methods
    public static function createQueryBuilder()
    {
        if(is_null(self::$qb)) {
            self::$qb = DI::getDefault()->get('doctrineQB');
        }
    }

    public static function getAllRegions()
    {

        $regions = self::$qb
                        ->select('Region', 'RegionID')
                        ->from('Regions')
                        ->execute()
                        ->fetchAll();
        return $regions;
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
     * This method is used only to populate <option> elements for region <select>
     *
     * @param  array Array of regions
     */
    public static function getRegionOptions(array $regions)
    {
        $html = '';
        foreach($regions as $region) {
            $html .= '<option value="' . $region['RegionID'] . '">' . $region['Region'] . '</option>';
        }

        return $html;
    }
}