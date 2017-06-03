<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participe
 *
 * @ORM\Table(name="participe")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\ParticipeRepository")
 */
class Participe
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

   * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Users", inversedBy="participes")

   * @ORM\JoinColumn(nullable=false)

   */

  private $users;


  /**

   * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Tournois" , inversedBy="participes")

   * @ORM\JoinColumn(nullable=false)

   */

   private $tournois;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Participe
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set users
     *
     * @param \Nano\FifaBundle\Entity\Users $users
     *
     * @return Participe
     */
    public function setUsers(\Nano\FifaBundle\Entity\Users $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Nano\FifaBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set tournois
     *
     * @param \Nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Participe
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
