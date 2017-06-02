<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion_match
 *
 * @ORM\Table(name="discussion_match")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\Discussion_matchRepository")
 */
class Discussion_match
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

