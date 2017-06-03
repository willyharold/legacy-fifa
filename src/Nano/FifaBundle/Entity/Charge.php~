<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Charge
 *
 * @ORM\Table(name="charge")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\ChargeRepository")
 */
class Charge
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
     * @var float
     *
     * @ORM\Column(name="recompense1", type="float")
     */
    private $recompense1;

    /**
     * @var float
     *
     * @ORM\Column(name="recompense2", type="float")
     */
    private $recompense2;

    /**
     * @var float
     *
     * @ORM\Column(name="recompense3", type="float")
     */
    private $recompense3;


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
     * Set recompense1
     *
     * @param float $recompense1
     *
     * @return Charge
     */
    public function setRecompense1($recompense1)
    {
        $this->recompense1 = $recompense1;

        return $this;
    }

    /**
     * Get recompense1
     *
     * @return float
     */
    public function getRecompense1()
    {
        return $this->recompense1;
    }

    /**
     * Set recompense2
     *
     * @param float $recompense2
     *
     * @return Charge
     */
    public function setRecompense2($recompense2)
    {
        $this->recompense2 = $recompense2;

        return $this;
    }

    /**
     * Get recompense2
     *
     * @return float
     */
    public function getRecompense2()
    {
        return $this->recompense2;
    }

    /**
     * Set recompense3
     *
     * @param float $recompense3
     *
     * @return Charge
     */
    public function setRecompense3($recompense3)
    {
        $this->recompense3 = $recompense3;

        return $this;
    }

    /**
     * Get recompense3
     *
     * @return float
     */
    public function getRecompense3()
    {
        return $this->recompense3;
    }


}
