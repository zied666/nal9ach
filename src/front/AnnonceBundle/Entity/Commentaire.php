<?php

namespace front\AnnonceBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="ser_annonce_commentaire")
 * @ORM\Entity(repositoryClass="front\AnnonceBundle\Entity\CommentaireRepository")
 */
class Commentaire
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
     * @Assert\NotBlank()
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;
    
    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $date_creation;
    
    /**
     * @ORM\ManyToOne(targetEntity="front\AnnonceBundle\Entity\Annonce", inversedBy="commentaires")
     * @ORM\JoinColumn(name="annonce_id", referencedColumnName="id")
     */
    private $annonce;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lus", type="boolean", nullable=true)
     */
    private $lus;
    
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
     * Set nom
     *
     * @param string $nom
     * @return Commentaire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Commentaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Commentaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set annonce
     *
     * @param \front\AnnonceBundle\Entity\Annonce $annonce
     * @return Commentaire
     */
    public function setAnnonce(\front\AnnonceBundle\Entity\Annonce $annonce = null)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \front\AnnonceBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * Set date_creation
     *
     * @param \DateTime $dateCreation
     * @return Commentaire
     */
    public function setDateCreation($dateCreation)
    {
        $this->date_creation = $dateCreation;

        return $this;
    }

    /**
     * Get date_creation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }



    

    /**
     * Set lus
     *
     * @param boolean $lus
     * @return Commentaire
     */
    public function setLus($lus)
    {
        $this->lus = $lus;

        return $this;
    }

    /**
     * Get lus
     *
     * @return boolean 
     */
    public function getLus()
    {
        return $this->lus;
    }
    
    public function isLus()
    {
        if($this->lus)
            return true;
        else
            return false;
    }
    
    public function showLus()
    {
        if($this->isLus())
            return "Lus";
        else
            return "Non-lus";
    }
}
