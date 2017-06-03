<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PaysRepository")
 */
class Pays
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
     * @var string
     *
     * @ORM\Column(name="nompays", type="string", length=255, unique=true)
     */
    private $nompays;


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
     * Set nompays
     *
     * @param string $nompays
     *
     * @return Pays
     */
    public function setNompays($nompays)
    {
        $this->nompays = $nompays;

        return $this;
    }

    /**
     * Get nompays
     *
     * @return string
     */
    public function getNompays()
    {
        return $this->nompays;
    }
}

