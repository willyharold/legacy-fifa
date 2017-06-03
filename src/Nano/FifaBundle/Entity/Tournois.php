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

     */

  private $participes;

    /**

    * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Region", inversedBy="tournois")

    * @ORM\JoinColumn(nullable=false)

    */

    private $regions;


  /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Actualite", mappedBy="tournois")

   */

    private $actualites;

     /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Match_tounois", mappedBy="tournois")

   */

    private $match_tournois;

     /**

   * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Discussion_tournoi", cascade={"persist"})

   */

  private $discussion_tournoi;

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
    public function setRegions(\nano\FifaBundle\Entity\Region $regions)
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
}
