<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\RegionRepository")
 */
class Region
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

   * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Pays", inversedBy="regions")

   */
    private $pays;

     /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Tournois", mappedBy="regions")
    *@var $tournois []
   */

    private $tournois;

    /**
     * @var string
     *
     * @ORM\Column(name="nomregion", type="string", length=255)
     */
    private $nomregion;


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
     * Set nomregion
     *
     * @param string $nomregion
     *
     * @return Region
     */
    public function setNomregion($nomregion)
    {
        $this->nomregion = $nomregion;

        return $this;
    }

    /**
     * Get nomregion
     *
     * @return string
     */
    public function getNomregion()
    {
        return $this->nomregion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pays = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tournois = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pay
     *
     * @param \Nano\FifaBundle\Entity\Pays $pay
     *
     * @return Region
     */
    public function addPay(\Nano\FifaBundle\Entity\Pays $pay)
    {
        $this->pays[] = $pay;

        return $this;
    }

    /**
     * Remove pay
     *
     * @param \Nano\FifaBundle\Entity\Pays $pay
     */
    public function removePay(\Nano\FifaBundle\Entity\Pays $pay)
    {
        $this->pays->removeElement($pay);
    }

    /**
     * Get pays
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add tournois
     *
     * @param \Nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Region
     */
    public function addTournois(\Nano\FifaBundle\Entity\Tournois $tournois)
    {
        $this->tournois[] = $tournois;

        return $this;
    }

    /**
     * Remove tournois
     *
     * @param \Nano\FifaBundle\Entity\Tournois $tournois
     */
    public function removeTournois(\Nano\FifaBundle\Entity\Tournois $tournois)
    {
        $this->tournois->removeElement($tournois);
    }

    /**
     * Get tournois
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTournois()
    {
        return $this->tournois;
    }

    /**
     * Set pays
     *
     * @param \Nano\FifaBundle\Entity\Pays $pays
     *
     * @return Region
     */
    public function setPays(\Nano\FifaBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }
}
