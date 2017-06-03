<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Championat
 *
 * @ORM\Table(name="championat")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\ChampionatRepository")
 */
class Championat
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

   * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\PointChampionat", cascade={"persist"})

   */

  private $pointchampionat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

