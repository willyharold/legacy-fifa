<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligue
 *
 * @ORM\Table(name="ligue")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\LigueRepository")
 */
class Ligue
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau1", type="integer")
     */
    private $niveau1;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau2", type="integer")
     */
    private $niveau2;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau3", type="integer")
     */
    private $niveau3;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau4", type="integer")
     */
    private $niveau4;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau5", type="integer")
     */
    private $niveau5;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


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
     * Set type
     *
     * @param string $type
     *
     * @return Ligue
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

    /**
     * Set niveau1
     *
     * @param integer $niveau1
     *
     * @return Ligue
     */
    public function setNiveau1($niveau1)
    {
        $this->niveau1 = $niveau1;

        return $this;
    }

    /**
     * Get niveau1
     *
     * @return int
     */
    public function getNiveau1()
    {
        return $this->niveau1;
    }

    /**
     * Set niveau2
     *
     * @param integer $niveau2
     *
     * @return Ligue
     */
    public function setNiveau2($niveau2)
    {
        $this->niveau2 = $niveau2;

        return $this;
    }

    /**
     * Get niveau2
     *
     * @return int
     */
    public function getNiveau2()
    {
        return $this->niveau2;
    }

    /**
     * Set niveau3
     *
     * @param integer $niveau3
     *
     * @return Ligue
     */
    public function setNiveau3($niveau3)
    {
        $this->niveau3 = $niveau3;

        return $this;
    }

    /**
     * Get niveau3
     *
     * @return int
     */
    public function getNiveau3()
    {
        return $this->niveau3;
    }

    /**
     * Set niveau4
     *
     * @param integer $niveau4
     *
     * @return Ligue
     */
    public function setNiveau4($niveau4)
    {
        $this->niveau4 = $niveau4;

        return $this;
    }

    /**
     * Get niveau4
     *
     * @return int
     */
    public function getNiveau4()
    {
        return $this->niveau4;
    }

    /**
     * Set niveau5
     *
     * @param integer $niveau5
     *
     * @return Ligue
     */
    public function setNiveau5($niveau5)
    {
        $this->niveau5 = $niveau5;

        return $this;
    }

    /**
     * Get niveau5
     *
     * @return int
     */
    public function getNiveau5()
    {
        return $this->niveau5;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Ligue
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}

