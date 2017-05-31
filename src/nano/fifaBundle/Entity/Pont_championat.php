<?php

namespace nano\fifaBundle\Entity;

/**
 * Pont_championat
 */
class Pont_championat
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
     * @return Pont_championat
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

