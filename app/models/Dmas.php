<?php

/**
 * Dmas
 *
 * @Table(name="Dmas")
 * @Entity
 */
class Dmas
{
    /**
     * @var integer
     *
     * @Column(name="CountryId", type="smallint", nullable=true)
     */
    private $countryid;

    /**
     * @var string
     *
     * @Column(name="DMA", type="string", length=3, nullable=true)
     */
    private $dma;

    /**
     * @var string
     *
     * @Column(name="Market", type="string", length=50, nullable=true)
     */
    private $market;

    /**
     * @var integer
     *
     * @Column(name="DmaId", type="smallint")
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $dmaid;


    /**
     * Set countryid
     *
     * @param integer $countryid
     *
     * @return Dmas
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
     * Set dma
     *
     * @param string $dma
     *
     * @return Dmas
     */
    public function setDma($dma)
    {
        $this->dma = $dma;

        return $this;
    }

    /**
     * Get dma
     *
     * @return string
     */
    public function getDma()
    {
        return $this->dma;
    }

    /**
     * Set market
     *
     * @param string $market
     *
     * @return Dmas
     */
    public function setMarket($market)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Get market
     *
     * @return string
     */
    public function getMarket()
    {
        return $this->market;
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
}
