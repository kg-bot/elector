<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Regions
 *
 * @Table(name="Regions")
 * @Entity
 */
class Regions
{
    /**
     * @var integer
     *
     * @Column(name="CountryID", type="smallint", nullable=false)
     */
    private $countryid;

    /**
     * @var string
     *
     * @Column(name="Region", type="string", length=45, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @Column(name="Code", type="string", length=8, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @Column(name="ADM1Code", type="string", length=4, nullable=false)
     */
    private $adm1code;

    /**
     * @var integer
     *
     * @Column(name="RegionID", type="smallint")
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $regionid;

    /**
     * Many Regions have one Country
     * @ManyToOne(targetEntity="Countries", inversedBy="regions")
     * @JoinColumn(name="CountryID", referencedColumnName="CountryId", onDelete="CASCADE")
     */
    private $country;

    /**
     * One Region has many Cities
     * @OneToMany(targetEntity="Cities", mappedBy="region")
     */
    private $cities;

    public function __construct()
    {
        $this->cities = new ArrayCollection();
    }


    /**
     * Set countryid
     *
     * @param integer $countryid
     *
     * @return Regions
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
     * Set region
     *
     * @param string $region
     *
     * @return Regions
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Regions
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
     * Set adm1code
     *
     * @param string $adm1code
     *
     * @return Regions
     */
    public function setAdm1code($adm1code)
    {
        $this->adm1code = $adm1code;

        return $this;
    }

    /**
     * Get adm1code
     *
     * @return string
     */
    public function getAdm1code()
    {
        return $this->adm1code;
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
     * Set country
     *
     * @param \Countries $country
     *
     * @return Regions
     */
    public function setCountry(\Countries $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Countries
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add city
     *
     * @param \Cities $city
     *
     * @return Regions
     */
    public function addCity(\Cities $city)
    {
        $this->cities[] = $city;

        return $this;
    }

    /**
     * Remove city
     *
     * @param \Cities $city
     */
    public function removeCity(\Cities $city)
    {
        $this->cities->removeElement($city);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCities()
    {
        return $this->cities;
    }
}
