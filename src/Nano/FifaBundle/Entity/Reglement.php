<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table(name="reglement")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\ReglementRepository")
 */
class Reglement
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

