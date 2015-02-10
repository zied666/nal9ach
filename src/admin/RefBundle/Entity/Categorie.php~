<?php

namespace admin\RefBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Table(name="ser_categorie")
 * @ORM\Entity(repositoryClass="admin\RefBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;
    
    /**
     * @ORM\OneToMany(targetEntity="admin\RefBundle\Entity\Service", mappedBy="Categorie")
     */
    private $Services;

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
     * @return Categorie
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
     * Set description
     *
     * @param string $description
     * @return Categorie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return Categorie
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Categorie
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Services
     *
     * @param \admin\RefBundle\Entity\Service $services
     * @return Categorie
     */
    public function addService(\admin\RefBundle\Entity\Service $services)
    {
        $this->Services[] = $services;

        return $this;
    }

    /**
     * Remove Services
     *
     * @param \admin\RefBundle\Entity\Service $services
     */
    public function removeService(\admin\RefBundle\Entity\Service $services)
    {
        $this->Services->removeElement($services);
    }

    /**
     * Get Services
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServices()
    {
        return $this->Services;
    }
    
    public function hasService($service)
    {
        $b = false;
        foreach ($this->Services as $ser)
        {
            if($ser->getId()==$service)
                $b=true;
        }
        return $b;
    }


    public function __toString() {
        return $this->libelle  ;
    }
}
