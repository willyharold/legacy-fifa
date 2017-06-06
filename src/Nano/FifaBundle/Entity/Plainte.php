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

   * @ORM\ManyToOne(targetEntity="Nano\FifaBundle\Entity\Users", inversedBy="plaintes")

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
     * @param \Nano\FifaBundle\Entity\Users $users
     *
     * @return Plainte
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
}
