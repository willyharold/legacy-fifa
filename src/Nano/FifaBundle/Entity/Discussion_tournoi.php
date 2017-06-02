<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion_tournoi
 *
 * @ORM\Table(name="discussion_tournoi")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\Discussion_tournoiRepository")
 */
class Discussion_tournoi
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

