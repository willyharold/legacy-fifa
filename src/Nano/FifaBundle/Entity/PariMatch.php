<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PariMatch
 *
 * @ORM\Table(name="pari_match")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PariMatchRepository")
 */
class PariMatch
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
     * @ORM\Column(name="somme", type="integer")
     */
    private $somme;


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
     * @return PariMatch
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
}

