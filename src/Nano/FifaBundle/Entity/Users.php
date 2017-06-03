<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\UsersRepository")
 */
class Users
{
    /**

     * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\historique_credit", cascade={"persist"})

     * @ORM\JoinColumn(nullable=false)

  */

     private $historiquecredit;

   /**

     * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Message", mappedBy="users")

     */

     private $messages;

    /**

     * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Participe", mappedBy="users")

     */

     private $participes;

    /**

     * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\PariMatch", mappedBy="users")

     */

      private $parimatchs;


     /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Plainte", mappedBy="users")

   */

    private $plaintes;

    /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Suggestion", mappedBy="users")

   */

    private $suggestions;

    /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\PointChampionat", mappedBy="users")

   */

    private $pointchampionats;

    /**

   * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\PointLigue", mappedBy="users")

   */

    private $pointligues;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mails", type="string", length=255)
     */
    private $mails;

    /**
     * @var string
     *
     * @ORM\Column(name="credit", type="string", length=255)
     */
    private $credit;

    /**
     * @var int
     *
     * @ORM\Column(name="photo", type="integer", length=255)
     */
    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="point", type="integer")
     */
    private $point;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;


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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Users
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set mails
     *
     * @param string $mails
     *
     * @return Users
     */
    public function setMails($mails)
    {
        $this->mails = $mails;

        return $this;
    }

    /**
     * Get mails
     *
     * @return string
     */
    public function getMails()
    {
        return $this->mails;
    }

    /**
     * Set credit
     *
     * @param string $credit
     *
     * @return Users
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return string
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Users
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set point
     *
     * @param integer $point
     *
     * @return Users
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return int
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->participes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->parimatchs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->plaintes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->suggestions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pointchampionats = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pointligues = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set historiquecredit
     *
     * @param \Nano\FifaBundle\Entity\historique_credit $historiquecredit
     *
     * @return Users
     */
    public function setHistoriquecredit(\Nano\FifaBundle\Entity\historique_credit $historiquecredit)
    {
        $this->historiquecredit = $historiquecredit;

        return $this;
    }

    /**
     * Get historiquecredit
     *
     * @return \Nano\FifaBundle\Entity\historique_credit
     */
    public function getHistoriquecredit()
    {
        return $this->historiquecredit;
    }

    /**
     * Add message
     *
     * @param \Nano\FifaBundle\Entity\Message $message
     *
     * @return Users
     */
    public function addMessage(\Nano\FifaBundle\Entity\Message $message)
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \Nano\FifaBundle\Entity\Message $message
     */
    public function removeMessage(\Nano\FifaBundle\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Add participe
     *
     * @param \Nano\FifaBundle\Entity\Participe $participe
     *
     * @return Users
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
     * Add parimatch
     *
     * @param \Nano\FifaBundle\Entity\PariMatch $parimatch
     *
     * @return Users
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
     * Add plainte
     *
     * @param \Nano\FifaBundle\Entity\Plainte $plainte
     *
     * @return Users
     */
    public function addPlainte(\Nano\FifaBundle\Entity\Plainte $plainte)
    {
        $this->plaintes[] = $plainte;

        return $this;
    }

    /**
     * Remove plainte
     *
     * @param \Nano\FifaBundle\Entity\Plainte $plainte
     */
    public function removePlainte(\Nano\FifaBundle\Entity\Plainte $plainte)
    {
        $this->plaintes->removeElement($plainte);
    }

    /**
     * Get plaintes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaintes()
    {
        return $this->plaintes;
    }

    /**
     * Add suggestion
     *
     * @param \Nano\FifaBundle\Entity\Suggestion $suggestion
     *
     * @return Users
     */
    public function addSuggestion(\Nano\FifaBundle\Entity\Suggestion $suggestion)
    {
        $this->suggestions[] = $suggestion;

        return $this;
    }

    /**
     * Remove suggestion
     *
     * @param \Nano\FifaBundle\Entity\Suggestion $suggestion
     */
    public function removeSuggestion(\Nano\FifaBundle\Entity\Suggestion $suggestion)
    {
        $this->suggestions->removeElement($suggestion);
    }

    /**
     * Get suggestions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * Add pointchampionat
     *
     * @param \Nano\FifaBundle\Entity\PointChampionat $pointchampionat
     *
     * @return Users
     */
    public function addPointchampionat(\Nano\FifaBundle\Entity\PointChampionat $pointchampionat)
    {
        $this->pointchampionats[] = $pointchampionat;

        return $this;
    }

    /**
     * Remove pointchampionat
     *
     * @param \Nano\FifaBundle\Entity\PointChampionat $pointchampionat
     */
    public function removePointchampionat(\Nano\FifaBundle\Entity\PointChampionat $pointchampionat)
    {
        $this->pointchampionats->removeElement($pointchampionat);
    }

    /**
     * Get pointchampionats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPointchampionats()
    {
        return $this->pointchampionats;
    }

    /**
     * Add pointligue
     *
     * @param \Nano\FifaBundle\Entity\PointLigue $pointligue
     *
     * @return Users
     */
    public function addPointligue(\Nano\FifaBundle\Entity\PointLigue $pointligue)
    {
        $this->pointligues[] = $pointligue;

        return $this;
    }

    /**
     * Remove pointligue
     *
     * @param \Nano\FifaBundle\Entity\PointLigue $pointligue
     */
    public function removePointligue(\Nano\FifaBundle\Entity\PointLigue $pointligue)
    {
        $this->pointligues->removeElement($pointligue);
    }

    /**
     * Get pointligues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPointligues()
    {
        return $this->pointligues;
    }
}
