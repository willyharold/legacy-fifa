<?php

namespace nano\fifaBundle\Entity;

/**
 * Resultat
 */
class Resultat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \stdClass
     */
    private $idVainqueur;

    /**
     * @var \stdClass
     */
    private $idPerdant;

    /**
     * @var int
     */
    private $nbreBut;


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
     * Set idVainqueur
     *
     * @param \stdClass $idVainqueur
     *
     * @return Resultat
     */
    public function setIdVainqueur($idVainqueur)
    {
        $this->idVainqueur = $idVainqueur;

        return $this;
    }

    /**
     * Get idVainqueur
     *
     * @return \stdClass
     */
    public function getIdVainqueur()
    {
        return $this->idVainqueur;
    }

    /**
     * Set idPerdant
     *
     * @param \stdClass $idPerdant
     *
     * @return Resultat
     */
    public function setIdPerdant($idPerdant)
    {
        $this->idPerdant = $idPerdant;

        return $this;
    }

    /**
     * Get idPerdant
     *
     * @return \stdClass
     */
    public function getIdPerdant()
    {
        return $this->idPerdant;
    }

    /**
     * Set nbreBut
     *
     * @param integer $nbreBut
     *
     * @return Resultat
     */
    public function setNbreBut($nbreBut)
    {
        $this->nbreBut = $nbreBut;

        return $this;
    }

    /**
     * Get nbreBut
     *
     * @return int
     */
    public function getNbreBut()
    {
        return $this->nbreBut;
    }
}

