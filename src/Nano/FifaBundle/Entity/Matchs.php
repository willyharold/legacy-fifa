<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchs
 *
 * @ORM\Table(name="matchs")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\MatchsRepository")
 */
class Matchs
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

   * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Charge", cascade={"persist"})

   */

  private $charge;

     /**

   * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Resultat", cascade={"persist"})

   */

  private $resultat;

     /**

     * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\PariMatch", mappedBy="matchs")

     */

  private $parimatchs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


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
     * @return Matchs
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
     * Set etat
     *
     * @param string $etat
     *
     * @return Matchs
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parimatchs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add parimatch
     *
     * @param \Nano\FifaBundle\Entity\PariMatch $parimatch
     *
     * @return Matchs
     */
    public function addParimatch(\Nano\FifaBundle\Entity\PariMatch $parimatch)
    {
        $this->parimatchs[] = $parimatch;

        return $this;
    }

    /**
     * Remove parimatch
     *
     * @param \Nano\FifaBundle\Entity\PariMatch $parimatch
     */
    public function removeParimatch(\Nano\FifaBundle\Entity\PariMatch $parimatch)
    {
        $this->parimatchs->removeElement($parimatch);
    }

    /**
     * Get parimatchs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParimatchs()
    {
        return $this->parimatchs;
    }

    /**
     * Add match
     *
     * @param \Nano\FifaBundle\Entity\Resultat $match
     *
     * @return Matchs
     */
    public function addMatch(\Nano\FifaBundle\Entity\Resultat $match)
    {
        $this->matchs[] = $match;

        return $this;
    }

    /**
     * Remove match
     *
     * @param \Nano\FifaBundle\Entity\Resultat $match
     */
    public function removeMatch(\Nano\FifaBundle\Entity\Resultat $match)
    {
        $this->matchs->removeElement($match);
    }

    /**
     * Get matchs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatchs()
    {
        return $this->matchs;
    }

    /**
     * Set matchs
     *
     * @param \Nano\FifaBundle\Entity\Resultat $matchs
     *
     * @return Matchs
     */
    public function setMatchs(\Nano\FifaBundle\Entity\Resultat $matchs = null)
    {
        $this->matchs = $matchs;

        return $this;
    }

    /**
     * Set resultat
     *
     * @param \Nano\FifaBundle\Entity\Resultat $resultat
     *
     * @return Matchs
     */
    public function setResultat(\Nano\FifaBundle\Entity\Resultat $resultat = null)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return \Nano\FifaBundle\Entity\Resultat
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set charge
     *
     * @param \Nano\FifaBundle\Entity\Charge $charge
     *
     * @return Matchs
     */
    public function setCharge(\Nano\FifaBundle\Entity\Charge $charge = null)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return \Nano\FifaBundle\Entity\Charge
     */
    public function getCharge()
    {
        return $this->charge;
    }
}
