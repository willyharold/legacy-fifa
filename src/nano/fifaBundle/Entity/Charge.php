<?php

namespace nano\fifaBundle\Entity;

/**
 * Charge
 */
class Charge
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $recompense1;

    /**
     * @var string
     */
    private $recompense2;

    /**
     * @var string
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
     * @param string $recompense1
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
     * @return string
     */
    public function getRecompense1()
    {
        return $this->recompense1;
    }

    /**
     * Set recompense2
     *
     * @param string $recompense2
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
     * @return string
     */
    public function getRecompense2()
    {
        return $this->recompense2;
    }

    /**
     * Set recompense3
     *
     * @param string $recompense3
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
     * @return string
     */
    public function getRecompense3()
    {
        return $this->recompense3;
    }
}

