<?php

namespace admin\RefBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table()
 * @ORM\Table(name="ser_service")
 * @ORM\Entity(repositoryClass="admin\RefBundle\Entity\ServiceRepository")
 */
class Service
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
     * @ORM\ManyToOne(targetEntity="admin\RefBundle\Entity\Categorie", inversedBy="Service")
     * @ORM\JoinColumn(name="Categorie_id", referencedColumnName="id")
     */
    private $Categorie;
    
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * Set Categorie
     *
     * @param \admin\RefBundle\Entity\Categorie $categorie
     * @return Service
     */
    public function setCategorie(\admin\RefBundle\Entity\Categorie $categorie = null)
    {
        $this->Categorie = $categorie;

        return $this;
    }

    /**
     * Get Categorie
     *
     * @return \admin\RefBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->Categorie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sousServices = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->libelle;
    }
}
