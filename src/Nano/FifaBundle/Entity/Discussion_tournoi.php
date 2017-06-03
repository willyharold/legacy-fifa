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

   * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Tournois", inversedBy="discussion_tournoi")

   * @ORM\JoinColumn(nullable=false)

   */

  private $tournois;

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
     * Set tournois
     *
     * @param \Nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Discussion_tournoi
     */
    public function setTournois(\Nano\FifaBundle\Entity\Tournois $tournois)
    {
        $this->tournois = $tournois;

        return $this;
    }

    /**
     * Get tournois
     *
     * @return \Nano\FifaBundle\Entity\Tournois
     */
    public function getTournois()
    {
        return $this->tournois;
    }
}
