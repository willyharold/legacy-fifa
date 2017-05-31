<?php

namespace nano\fifaBundle\Entity;

/**
 * Discussion
 */
class Discussion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $sujet;


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
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Discussion
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }
}

