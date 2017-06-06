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

    * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Users", inversedBy="point_tournois")

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

     * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Tournois", inversedBy="point")

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
     * @param \Nano\FifaBundle\Entity\Users $users
     *
     * @return Point
     */
    public function setUsers(\Nano\FifaBundle\Entity\Users $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Nano\FifaBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set tournois
     *
     * @param \Nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Point
     */
    public function setTournois(\Nano\FifaBundle\Entity\Tournois $tournois)
    {
        $this->tournois = $tournois;

        return $this;
    }

    /**
     * Get tournois
     *
     * @return \Nano\FifaBundle\Entity\Tournois
     */
    public function getTournois()
    {
        return $this->tournois;
    }
}
