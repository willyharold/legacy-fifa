<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointChampionat
 *
 * @ORM\Table(name="point_championat")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PointChampionatRepository")
 */
class PointChampionat
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

    * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="pointchampionats")

    * @ORM\JoinColumn(nullable=false)

    */

  private $users;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_points", type="integer")
     */
    private $nbrePoints;


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
     * Set nbrePoints
     *
     * @param integer $nbrePoints
     *
     * @return PointChampionat
     */
    public function setNbrePoints($nbrePoints)
    {
        $this->nbrePoints = $nbrePoints;

        return $this;
    }

    /**
     * Get nbrePoints
     *
     * @return int
     */
    public function getNbrePoints()
    {
        return $this->nbrePoints;
    }

    /**
     * Set users
     *
     * @param \nano\FifaBundle\Entity\Users $users
     *
     * @return PointChampionat
     */
    public function setUsers(\nano\FifaBundle\Entity\Users $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \nano\FifaBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }
}
