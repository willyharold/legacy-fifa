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
}

