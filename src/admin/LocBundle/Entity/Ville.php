<?php

namespace admin\LocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table()
 * @ORM\Table(name="ser_ville")
 * @ORM\Entity(repositoryClass="admin\LocBundle\Entity\VilleRepository")
 */
class Ville
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;
    
    /**
     * @ORM\ManyToOne(targetEntity="admin\LocBundle\Entity\Region", inversedBy="villes")
     * @ORM\JoinColumn(name="Region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Ville
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set region
     *
     * @param \admin\LocBundle\Entity\Region $region
     * @return Ville
     */
    public function setRegion(\admin\LocBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \admin\LocBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }
    public function __toString()
    {
        return $this->libelle;
    }
}
