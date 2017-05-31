<?php

namespace nano\fifaBundle\Entity;

/**
 * HistoriqueCredit
 */
class HistoriqueCredit
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $somme;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $details;

    /**
     * @var string
     */
    private $type;


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
     * Set somme
     *
     * @param integer $somme
     *
     * @return HistoriqueCredit
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return int
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return HistoriqueCredit
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return HistoriqueCredit
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return HistoriqueCredit
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

