<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion
 *
 * @ORM\Table(name="discussion")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\DiscussionRepository")
 */
class Discussion
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

     * @ORM\OneToMany(targetEntity="Nano\FifaBundle\Entity\Message", mappedBy="discussion")

     */

     private $messages;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255)
     */
    private $sujet;

    /**
     * @ORM\OneToOne(targetEntity="Nano\FifaBundle\Entity\Tournois")
     *@ORM\JoinColumn(nullable=true)
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
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Discussion
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add message
     *
     * @param \Nano\FifaBundle\Entity\Message $message
     *
     * @return Discussion
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
     * Set tournois
     *
     * @param \Nano\FifaBundle\Entity\Tournois $tournois
     *
     * @return Discussion
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
