<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table(name="reglement")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\ReglementRepository")
 */
class Reglement
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
     * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="reglement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $users;

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
     * Set users
     *
     * @param \nano\FifaBundle\Entity\Users $users
     *
     * @return Reglement
     */
    public function setUsers(\nano\FifaBundle\Entity\Users $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \nano\FifaBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }
}
