<?php

namespace nano\fifaBundle\Entity;

/**
 * Pays
 */
class Pays
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomPays;


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
     * Set nomPays
     *
     * @param string $nomPays
     *
     * @return Pays
     */
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    /**
     * Get nomPays
     *
     * @return string
     */
    public function getNomPays()
    {
        return $this->nomPays;
    }
}

