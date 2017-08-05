<?php

/**
 * Cities
 * @Entity
 * @Table(name="Cities")
 */
class Cities
{
    /**
     * @var integer
     *
     * @Column(name="CountryID", type="smallint", nullable=false)
     */
    private $countryid;

    /**
     * @var integer
     *
     * @Column(name="RegionID", type="smallint", nullable=false)
     */
    private $regionid;

    /**
     * @var string
     *
     * @Column(name="City", type="string", length=45, nullable=false)
     */
    private $city;

    /**
     * @var float
     *
     * @Column(name="Latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @Column(name="Longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @Column(name="TimeZone", type="string", length=10, nullable=false)
     */
    private $timezone;

    /**
     * @var integer
     *
     * @Column(name="DmaId", type="smallint", nullable=true)
     */
    private $dmaid;

    /**
     * @var string
     *
     * @Column(name="Code", type="string", length=4, nullable=true)
     */
    private $code;

    /**
     * @var integer
     *
     * @Column(name="CityId", type="integer")
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $cityid;

    /**
     * Many Cities have One Country.
     * @ManyToOne(targetEntity="Countries", inversedBy="cities")
     * @JoinColumn(name="CountryID", referencedColumnName="CountryId", onDelete="CASCADE")
     */
    private $country;

    /**
     * Many Cities have One Region.
     * @ManyToOne(targetEntity="Regions", inversedBy="cities")
     * @JoinColumn(name="RegionID", referencedColumnName="RegionID", onDelete="CASCADE")
     */
    private $region;


    /**
     * Set countryid
     *
     * @param integer $countryid
     *
     * @return Cities
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;

        return $this;
    }

    /**
     * Get countryid
     *
     * @return integer
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set regionid
     *
     * @param integer $regionid
     *
     * @return Cities
     */
    public function setRegionid($regionid)
    {
        $this->regionid = $regionid;

        return $this;
    }

    /**
     * Get regionid
     *
     * @return integer
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Cities
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Cities
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Cities
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Cities
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set dmaid
     *
     * @param integer $dmaid
     *
     * @return Cities
     */
    public function setDmaid($dmaid)
    {
        $this->dmaid = $dmaid;

        return $this;
    }

    /**
     * Get dmaid
     *
     * @return integer
     */
    public function getDmaid()
    {
        return $this->dmaid;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Cities
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get cityid
     *
     * @return integer
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set country
     *
     * @param \Country $country
     *
     * @return Cities
     */
    public function setCountry(\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set region
     *
     * @param \Region $region
     *
     * @return Cities
     */
    public function setRegion(\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Region
     */
    public function getRegion()
    {
        return $this->region;
    }
}
