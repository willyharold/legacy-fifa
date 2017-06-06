<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tchat
 *
 * @ORM\Table(name="tchat")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\TchatRepository")
 */
class Tchat
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
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**

     * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="tchat")

     * @ORM\JoinColumn(nullable=false)

     */

    private $users_exp;

    /**

     * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="tchat")

     * @ORM\JoinColumn(nullable=false)

     */

    private $users_rec;

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Tchat
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tchat
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
     * Set usersExp
     *
     * @param \nano\FifaBundle\Entity\Users $usersExp
     *
     * @return Tchat
     */
    public function setUsersExp(\nano\FifaBundle\Entity\Users $usersExp)
    {
        $this->users_exp = $usersExp;

        return $this;
    }

    /**
     * Get usersExp
     *
     * @return \nano\FifaBundle\Entity\Users
     */
    public function getUsersExp()
    {
        return $this->users_exp;
    }

    /**
     * Set usersRec
     *
     * @param \nano\FifaBundle\Entity\Users $usersRec
     *
     * @return Tchat
     */
    public function setUsersRec(\nano\FifaBundle\Entity\Users $usersRec)
    {
        $this->users_rec = $usersRec;

        return $this;
    }

    /**
     * Get usersRec
     *
     * @return \nano\FifaBundle\Entity\Users
     */
    public function getUsersRec()
    {
        return $this->users_rec;
    }
}
