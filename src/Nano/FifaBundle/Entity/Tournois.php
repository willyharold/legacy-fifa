<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournois
 *
 * @ORM\Table(name="tournois")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\TournoisRepository")
 */
class Tournois
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

     * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Participe", mappedBy="tournois")
        *@var $participes []
     */

  private $participes;

    /**

    * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Region", inversedBy="tournois")

    * @ORM\JoinColumn(nullable=true)

    */
    private $regions;


  /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Actualite", mappedBy="tournois")
    *@var $actualites []
   */
    private $actualites;


    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_equipe", type="integer")
     */
    private $nbrEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonnees", type="string", length=255)
     */
    private $coordonnees;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="type_tournois", type="string", length=255)
     */
    private $type_tournois;

    /**

     * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Charge", cascade={"persist"})

     */

    private $charge;

    /**
    * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Matchs", mappedBy="tournois")
    * @var $tournois []
    */
    private $tournois;

    /**
     * @var string
     *
     * @ORM\Column(name="type_ligue", type="string", length=255)
     */
    private $type_ligue;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau1", type="integer")
     */
    private $niveau1;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau2", type="integer")
     */
    private $niveau2;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau3", type="integer")
     */
    private $niveau3;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau4", type="integer")
     */
    private $niveau4;

    /**
     * @var int
     *
     * @ORM\Column(name="niveau5", type="integer")
     */
    private $niveau5;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_ligue", type="string", length=255)
     */
    private $etat_ligue;

    /**

    * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Tournois", mappedBy="tournois")

    * @ORM\JoinColumn(nullable=true)

    */
    private $point;
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
     * Set designation
     *
     * @param string $designation
     *
     * @return Tournois
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set nbrEquipe
     *
     * @param integer $nbrEquipe
     *
     * @return Tournois
     */
    public function setNbrEquipe($nbrEquipe)
    {
        $this->nbrEquipe = $nbrEquipe;

        return $this;
    }

    /**
     * Get nbrEquipe
     *
     * @return int
     */
    public function getNbrEquipe()
    {
        return $this->nbrEquipe;
    }

    /**
     * Set coordonnees
     *
     * @param string $coordonnees
     *
     * @return Tournois
     */
    public function setCoordonnees($coordonnees)
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    /**
     * Get coordonnees
     *
     * @return string
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Tournois
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Tournois
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Tournois
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
     * Set type
     *
     * @param string $type
     *
     * @return Tournois
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actualites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->match_tournois = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add participe
     *
     * @param \Nano\FifaBundle\Entity\Participe $participe
     *
     * @return Tournois
     */
    public function addParticipe(\Nano\FifaBundle\Entity\Participe $participe)
    {
        $this->participes[] = $participe;

        return $this;
    }

    /**
     * Remove participe
     *
     * @param \Nano\FifaBundle\Entity\Participe $participe
     */
    public function removeParticipe(\Nano\FifaBundle\Entity\Participe $participe)
    {
        $this->participes->removeElement($participe);
    }

    /**
     * Get participes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipes()
    {
        return $this->participes;
    }

    /**
     * Set regions
     *
     * @param \nano\FifaBundle\Entity\Region $regions
     *
     * @return Tournois
     */
    public function setRegions(\Nano\FifaBundle\Entity\Region $regions)
    {
        $this->regions = $regions;

        return $this;
    }

    /**
     * Get regions
     *
     * @return \nano\FifaBundle\Entity\Region
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Add actualite
     *
     * @param \Nano\FifaBundle\Entity\Actualite $actualite
     *
     * @return Tournois
     */
    public function addActualite(\Nano\FifaBundle\Entity\Actualite $actualite)
    {
        $this->actualites[] = $actualite;

        return $this;
    }

    /**
     * Remove actualite
     *
     * @param \Nano\FifaBundle\Entity\Actualite $actualite
     */
    public function removeActualite(\Nano\FifaBundle\Entity\Actualite $actualite)
    {
        $this->actualites->removeElement($actualite);
    }

    /**
     * Get actualites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActualites()
    {
        return $this->actualites;
    }

    /**
     * Add matchTournois
     *
     * @param \Nano\FifaBundle\Entity\Match_tounois $matchTournois
     *
     * @return Tournois
     */
    public function addMatchTournois(\Nano\FifaBundle\Entity\Match_tounois $matchTournois)
    {
        $this->match_tournois[] = $matchTournois;

        return $this;
    }

    /**
     * Remove matchTournois
     *
     * @param \Nano\FifaBundle\Entity\Match_tounois $matchTournois
     */
    public function removeMatchTournois(\Nano\FifaBundle\Entity\Match_tounois $matchTournois)
    {
        $this->match_tournois->removeElement($matchTournois);
    }

    /**
     * Get matchTournois
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatchTournois()
    {
        return $this->match_tournois;
    }

    /**
     * Set discussionTournoi
     *
     * @param \Nano\FifaBundle\Entity\Discussion_tournoi $discussionTournoi
     *
     * @return Tournois
     */
    public function setDiscussionTournoi(\Nano\FifaBundle\Entity\Discussion_tournoi $discussionTournoi = null)
    {
        $this->discussion_tournoi = $discussionTournoi;

        return $this;
    }

    /**
     * Get discussionTournoi
     *
     * @return \Nano\FifaBundle\Entity\Discussion_tournoi
     */
    public function getDiscussionTournoi()
    {
        return $this->discussion_tournoi;
    }

    /**
     * Set typeTournois
     *
     * @param string $typeTournois
     *
     * @return Tournois
     */
    public function setTypeTournois($typeTournois)
    {
        $this->type_tournois = $typeTournois;

        return $this;
    }

    /**
     * Get typeTournois
     *
     * @return string
     */
    public function getTypeTournois()
    {
        return $this->type_tournois;
    }

    /**
     * Set typeLigue
     *
     * @param string $typeLigue
     *
     * @return Tournois
     */
    public function setTypeLigue($typeLigue)
    {
        $this->type_ligue = $typeLigue;

        return $this;
    }

    /**
     * Get typeLigue
     *
     * @return string
     */
    public function getTypeLigue()
    {
        return $this->type_ligue;
    }

    /**
     * Set niveau1
     *
     * @param integer $niveau1
     *
     * @return Tournois
     */
    public function setNiveau1($niveau1)
    {
        $this->niveau1 = $niveau1;

        return $this;
    }

    /**
     * Get niveau1
     *
     * @return integer
     */
    public function getNiveau1()
    {
        return $this->niveau1;
    }

    /**
     * Set niveau2
     *
     * @param integer $niveau2
     *
     * @return Tournois
     */
    public function setNiveau2($niveau2)
    {
        $this->niveau2 = $niveau2;

        return $this;
    }

    /**
     * Get niveau2
     *
     * @return integer
     */
    public function getNiveau2()
    {
        return $this->niveau2;
    }

    /**
     * Set niveau3
     *
     * @param integer $niveau3
     *
     * @return Tournois
     */
    public function setNiveau3($niveau3)
    {
        $this->niveau3 = $niveau3;

        return $this;
    }

    /**
     * Get niveau3
     *
     * @return integer
     */
    public function getNiveau3()
    {
        return $this->niveau3;
    }

    /**
     * Set niveau4
     *
     * @param integer $niveau4
     *
     * @return Tournois
     */
    public function setNiveau4($niveau4)
    {
        $this->niveau4 = $niveau4;

        return $this;
    }

    /**
     * Get niveau4
     *
     * @return integer
     */
    public function getNiveau4()
    {
        return $this->niveau4;
    }

    /**
     * Set niveau5
     *
     * @param integer $niveau5
     *
     * @return Tournois
     */
    public function setNiveau5($niveau5)
    {
        $this->niveau5 = $niveau5;

        return $this;
    }

    /**
     * Get niveau5
     *
     * @return integer
     */
    public function getNiveau5()
    {
        return $this->niveau5;
    }

    /**
     * Set etatLigue
     *
     * @param string $etatLigue
     *
     * @return Tournois
     */
    public function setEtatLigue($etatLigue)
    {
        $this->etat_ligue = $etatLigue;

        return $this;
    }

    /**
     * Get etatLigue
     *
     * @return string
     */
    public function getEtatLigue()
    {
        return $this->etat_ligue;
    }

    /**
     * Set charge
     *
     * @param \Nano\FifaBundle\Entity\Charge $charge
     *
     * @return Tournois
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
     * Add tournois
     *
     * @param \Nano\FifaBundle\Entity\Matchs $tournois
     *
     * @return Tournois
     */
    public function addTournois(\Nano\FifaBundle\Entity\Matchs $tournois)
    {
        $this->tournois[] = $tournois;

        return $this;
    }

    /**
     * Remove tournois
     *
     * @param \Nano\FifaBundle\Entity\Matchs $tournois
     */
    public function removeTournois(\Nano\FifaBundle\Entity\Matchs $tournois)
    {
        $this->tournois->removeElement($tournois);
    }

    /**
     * Get tournois
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTournois()
    {
        return $this->tournois;
    }

    /**
     * Set point
     *
     * @param \nano\FifaBundle\Entity\Tournois $point
     *
     * @return Tournois
     */
    public function setPoint(\nano\FifaBundle\Entity\Tournois $point = null)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return \nano\FifaBundle\Entity\Tournois
     */
    public function getPoint()
    {
        return $this->point;
    }
}
