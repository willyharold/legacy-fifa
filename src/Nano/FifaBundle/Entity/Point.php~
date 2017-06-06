<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Point
 *
 * @ORM\Table(name="point")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PointLigueRepository")
 */
class Point
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

    * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="point_tournois")

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

     * @ORM\OneToOne(targetEntity="nano\FifaBundle\Entity\Tournois", inversedBy="point")

     * @ORM\JoinColumn(nullable=false)

     */
    private $tournois;
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
     * @return Point
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
     * @return Point
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

    /**
     * Set tournois
     *
     * @param \nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Point
     */
    public function setTournois(\nano\FifaBundle\Entity\Tournois $tournois)
    {
        $this->tournois = $tournois;

        return $this;
    }

    /**
     * Get tournois
     *
     * @return \nano\FifaBundle\Entity\Tournois
     */
    public function getTournois()
    {
        return $this->tournois;
    }
}
