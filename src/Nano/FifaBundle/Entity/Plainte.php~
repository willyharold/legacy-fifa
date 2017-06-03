<?php

namespace Nano\FifaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plainte
 *
 * @ORM\Table(name="plainte")
 * @ORM\Entity(repositoryClass="Nano\FifaBundle\Repository\PlainteRepository")
 */
class Plainte
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

   * @ORM\ManyToOne(targetEntity="nano\FifaBundle\Entity\Users", inversedBy="plaintes")

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
     * @return Plainte
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
