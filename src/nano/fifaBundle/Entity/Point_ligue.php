<?php

namespace nano\fifaBundle\Entity;

/**
 * Point_ligue
 */
class Point_ligue
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
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
     * @return Point_ligue
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

