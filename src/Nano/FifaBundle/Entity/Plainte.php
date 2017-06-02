<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plainte
 *
 * @ORM\Table(name="plainte")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PlainteRepository")
 */
class Plainte
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

