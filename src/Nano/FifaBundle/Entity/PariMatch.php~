<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PariMatch
 *
 * @ORM\Table(name="pari_match")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PariMatchRepository")
 */
class PariMatch
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

   * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Users", inversedBy="parimatchs")

   * @ORM\JoinColumn(nullable=false)

   */

  private $users;


  /**

   * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Matchs", inversedBy="parimatchs")

   * @ORM\JoinColumn(nullable=false)

   */

  private $matchs;

    /**
     * @var int
     *
     * @ORM\Column(name="somme", type="integer")
     */
    private $somme;


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
     * Set somme
     *
     * @param integer $somme
     *
     * @return PariMatch
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return int
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * Set users
     *
     * @param \Nano\FifaBundle\Entity\Users $users
     *
     * @return PariMatch
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
     * Set matchs
     *
     * @param \Nano\FifaBundle\Entity\Matchs $matchs
     *
     * @return PariMatch
     */
    public function setMatchs(\Nano\FifaBundle\Entity\Matchs $matchs)
    {
        $this->matchs = $matchs;

        return $this;
    }

    /**
     * Get matchs
     *
     * @return \Nano\FifaBundle\Entity\Matchs
     */
    public function getMatchs()
    {
        return $this->matchs;
    }
}
