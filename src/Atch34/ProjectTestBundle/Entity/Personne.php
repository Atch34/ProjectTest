<?php

namespace Atch34\ProjectTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atch34\ProjectTestBundle\Entity\Personne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Atch34\ProjectTestBundle\Entity\PersonneRepository")
 */
class Personne
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}