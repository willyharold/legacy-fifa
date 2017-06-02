<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\ResultatRepository")
 */
class Resultat
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
     * @ORM\Column(name="nbre_but", type="integer")
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

