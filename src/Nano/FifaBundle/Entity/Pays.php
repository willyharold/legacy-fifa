<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PaysRepository")
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**

    * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Region", mappedBy="pays")
    * @ORM\JoinColumn(nullable=false)
     * @var $regions []

    */
    private $regions;


    /**
     * @var string
     *
     * @ORM\Column(name="nompays", type="string", length=255, unique=true)
     */
    private $nompays;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nompays
     *
     * @param string $nompays
     *
     * @return Pays
     */
    public function setNompays($nompays)
    {
        $this->nompays = $nompays;

        return $this;
    }

    /**
     * Get nompays
     *
     * @return string
     */
    public function getNompays()
    {
        return $this->nompays;
    }

    /**
     * Set regions
     *
     * @param \Nano\FifaBundle\Entity\Region $regions
     *
     * @return Pays
     */
    public function setRegions(\Nano\FifaBundle\Entity\Region $regions)
    {
        $this->regions = $regions;

        return $this;
    }

    /**
     * Get regions
     *
     * @return \Nano\FifaBundle\Entity\Region
     */
    public function getRegions()
    {
        return $this->regions;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add region
     *
     * @param \Nano\FifaBundle\Entity\Region $region
     *
     * @return Pays
     */
    public function addRegion(\Nano\FifaBundle\Entity\Region $region)
    {
        $this->regions[] = $region;

        return $this;
    }

    /**
     * Remove region
     *
     * @param \Nano\FifaBundle\Entity\Region $region
     */
    public function removeRegion(\Nano\FifaBundle\Entity\Region $region)
    {
        $this->regions->removeElement($region);
    }
}
