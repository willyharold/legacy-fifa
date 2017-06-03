<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Match_tounois
 *
 * @ORM\Table(name="match_tounois")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\Match_tounoisRepository")
 */
class Match_tounois
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

    * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Tournois", inversedBy="match_tournois")

    * @ORM\JoinColumn(nullable=false)

    */

  private $tournois;

    /**
     * @var int
     *
     * @ORM\Column(name="nieme", type="integer")
     */
    private $nieme;


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
     * Set nieme
     *
     * @param integer $nieme
     *
     * @return Match_tounois
     */
    public function setNieme($nieme)
    {
        $this->nieme = $nieme;

        return $this;
    }

    /**
     * Get nieme
     *
     * @return int
     */
    public function getNieme()
    {
        return $this->nieme;
    }

    /**
     * Set tournois
     *
     * @param \nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Match_tounois
     */
    public function setTournois(\nano\FifaBundle\Entity\Tournois $tournois)
    {
        $this->tournois = $tournois;

        return $this;
    }

    /**
     * Get tournois
     *
     * @return \nano\FifaBundle\Entity\Tournois
     */
    public function getTournois()
    {
        return $this->tournois;
    }
}
