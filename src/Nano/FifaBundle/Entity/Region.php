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

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Pays", mappedBy="regions")

   */

    private $pays;

     /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Tournois", mappedBy="regions")

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
}

