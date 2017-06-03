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

   * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Resultat", cascade={"persist"})
   * @ORM\JoinColumn(nullable=true)

   */

  private $resultat;

     /**
     * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\PariMatch")
     * @ORM\JoinColumn(nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="type_match", type="string", length=255)
     */
    private $type_match;

    /**
     * @var integer
     *
     * @ORM\Column(name="nieme", type="integer", length=255)
     */
    private $nieme;

    /**

     * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="matchs_int")

     * @ORM\JoinColumn(nullable=false)

     */

    private $users_int;

    /**

     * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="matchs_ext")

     * @ORM\JoinColumn(nullable=false)

     */

    private $users_ext;


    /**

     * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Tournois", inversedBy="matchs")

     * @ORM\JoinColumn(nullable=true)

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

    /**
     * Set typeMatch
     *
     * @param string $typeMatch
     *
     * @return Matchs
     */
    public function setTypeMatch($typeMatch)
    {
        $this->type_match = $typeMatch;

        return $this;
    }

    /**
     * Get typeMatch
     *
     * @return string
     */
    public function getTypeMatch()
    {
        return $this->type_match;
    }

    /**
     * Set nieme
     *
     * @param integer $nieme
     *
     * @return Matchs
     */
    public function setNieme($nieme)
    {
        $this->nieme = $nieme;

        return $this;
    }

    /**
     * Get nieme
     *
     * @return integer
     */
    public function getNieme()
    {
        return $this->nieme;
    }

    /**
     * Set parimatchs
     *
     * @param \Nano\FifaBundle\Entity\PariMatch $parimatchs
     *
     * @return Matchs
     */
    public function setParimatchs(\Nano\FifaBundle\Entity\PariMatch $parimatchs = null)
    {
        $this->parimatchs = $parimatchs;

        return $this;
    }

    /**
     * Set usersInt
     *
     * @param \nano\FifaBundle\Entity\Users $usersInt
     *
     * @return Matchs
     */
    public function setUsersInt(\nano\FifaBundle\Entity\Users $usersInt)
    {
        $this->users_int = $usersInt;

        return $this;
    }

    /**
     * Get usersInt
     *
     * @return \nano\FifaBundle\Entity\Users
     */
    public function getUsersInt()
    {
        return $this->users_int;
    }

    /**
     * Set usersExt
     *
     * @param \nano\FifaBundle\Entity\Users $usersExt
     *
     * @return Matchs
     */
    public function setUsersExt(\nano\FifaBundle\Entity\Users $usersExt)
    {
        $this->users_ext = $usersExt;

        return $this;
    }

    /**
     * Get usersExt
     *
     * @return \nano\FifaBundle\Entity\Users
     */
    public function getUsersExt()
    {
        return $this->users_ext;
    }

    /**
     * Set tournois
     *
     * @param \Nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Matchs
     */
    public function setTournois(\Nano\FifaBundle\Entity\Tournois $tournois = null)
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
