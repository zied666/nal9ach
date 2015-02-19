<?php

namespace front\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Annonce
 *
 * @ORM\Table(name="ser_annonce")
 * @ORM\Entity(repositoryClass="front\AnnonceBundle\Entity\AnnonceRepository")
 */
class Annonce
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="integer", options={"default" = 1})
     */
    private $type;
    
    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255,nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=50)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=50,nullable=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50,nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text",nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="date",nullable=true)
     */
    private $dateModification;

    /**
     * @ORM\ManyToOne(targetEntity="admin\LocBundle\Entity\Region")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * @ORM\OrderBy({"libelle" = "asc"})
     */
    private $region;

    /**
     * @ORM\OneToMany(targetEntity="front\AnnonceBundle\Entity\Commentaire", mappedBy="annonce")
     * @ORM\OrderBy({"id" = "desc"})
     */
    private $commentaires;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="admin\LocBundle\Entity\Ville")
     * @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity="admin\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="admin\RefBundle\Entity\Service")
     * @ORM\JoinTable(name="ser_annonce_service",
     *      joinColumns={@ORM\JoinColumn(name="id_annonce", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_service", referencedColumnName="id")}
     * )
     */
    private $services;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=255,nullable=true)
     * @Assert\File(
     *      maxSize="2M",
     *      mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *      mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *      notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *      uploadErrorMessage = "Erreur dans l'upload du fichier"
     * )
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=255,nullable=true)
     * @Assert\File(
     *      maxSize="2M",
     *      mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *      mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *      notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *      uploadErrorMessage = "Erreur dans l'upload du fichier"
     * )
     */
    private $photo2;

    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="string", length=255,nullable=true)
     * @Assert\File(
     *      maxSize="2M",
     *      mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *      mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *      notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *      uploadErrorMessage = "Erreur dans l'upload du fichier"
     * )
     */
    private $photo3;

    /**
     * @var string
     *
     * @ORM\Column(name="photo4", type="string", length=255,nullable=true)
     * @Assert\File(
     *      maxSize="2M",
     *      mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *      mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *      notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *      uploadErrorMessage = "Erreur dans l'upload du fichier"
     * )
     */
    private $photo4;

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
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Annonce
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
     * Set prix
     *
     * @param string $prix
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     * @return Annonce
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     * @return Annonce
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Annonce
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
     * Set adresse
     *
     * @param string $adresse
     * @return Annonce
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Annonce
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Annonce
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Annonce
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set region
     *
     * @param \admin\LocBundle\Entity\Region $region
     * @return Annonce
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

    /**
     * Set ville
     *
     * @param \admin\LocBundle\Entity\Ville $ville
     * @return Annonce
     */
    public function setVille(\admin\LocBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \admin\LocBundle\Entity\Ville 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set user
     *
     * @param \admin\UserBundle\Entity\User $user
     * @return Annonce
     */
    public function setUser(\admin\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \admin\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    public function RemoveAllServices()
    {
        $this->services = array();
        return $this;
    }

    /**
     * Add services
     *
     * @param \admin\RefBundle\Entity\Service $services
     * @return Annonce
     */
    public function addService(\admin\RefBundle\Entity\Service $services)
    {
        $this->services[] = $services;

        return $this;
    }

    /**
     * Remove services
     *
     * @param \admin\RefBundle\Entity\Service $services
     */
    public function removeService(\admin\RefBundle\Entity\Service $services)
    {
        $this->services->removeElement($services);
    }
    
    public function AService(\admin\RefBundle\Entity\Service $service)
    {
        return $this->services->toArray();
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set photo1
     *
     * @param string $photo1
     * @return Annonce
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;

        return $this;
    }

    /**
     * Get photo1
     *
     * @return string 
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * Set photo2
     *
     * @param string $photo2
     * @return Annonce
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;

        return $this;
    }

    /**
     * Get photo2
     *
     * @return string 
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * Set photo3
     *
     * @param string $photo3
     * @return Annonce
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;

        return $this;
    }

    /**
     * Get photo3
     *
     * @return string 
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * Set photo4
     *
     * @param string $photo4
     * @return Annonce
     */
    public function setPhoto4($photo4)
    {
        $this->photo4 = $photo4;

        return $this;
    }

    /**
     * Get photo4
     *
     * @return string 
     */
    public function getPhoto4()
    {
        return $this->photo4;
    }

    public function getUploadRootDir()
    {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    public function getUploadDir()
    {
        return 'uploads/annonces';
    }

    public function upload()
    {
        if ($this->photo1 != NULL)
        {
            $name = date("His-") . $this->photo1->getClientOriginalName();
            $this->photo1->move($this->getUploadRootDir(), $name);
            $this->photo1 = $name;
        }
        if ($this->photo2 != NULL)
        {
            $name = date("His-") . $this->photo2->getClientOriginalName();
            $this->photo2->move($this->getUploadRootDir(), $name);
            $this->photo2 = $name;
        }
        if ($this->photo3 != NULL)
        {
            $name = date("His-") . $this->photo3->getClientOriginalName();
            $this->photo3->move($this->getUploadRootDir(), $name);
            $this->photo3 = $name;
        }
        if ($this->photo4 != NULL)
        {
            $name = date("His-") . $this->photo4->getClientOriginalName();
            $this->photo4->move($this->getUploadRootDir(), $name);
            $this->photo4 = $name;
        }
    }

    public function upload2($ph1, $ph2, $ph3, $ph4)
    {
        if ($this->photo1 != "")
        {
            $name = date("His-") . $this->photo1->getClientOriginalName();
            $this->photo1->move($this->getUploadRootDir(), $name);
            $this->photo1 = $name;
        }
        else
            $this->photo1 = $ph1;


        if ($this->photo2 != "")
        {
            $name = date("His-") . $this->photo2->getClientOriginalName();
            $this->photo2->move($this->getUploadRootDir(), $name);
            $this->photo2 = $name;
        }
        else
            $this->photo2 = $ph2;


        if ($this->photo3 != "")
        {
            $name = date("His-") . $this->photo3->getClientOriginalName();
            $this->photo3->move($this->getUploadRootDir(), $name);
            $this->photo3 = $name;
        }
        else
            $this->photo3 = $ph3;


        if ($this->photo4 != "")
        {
            $name = date("His-") . $this->photo4->getClientOriginalName();
            $this->photo4->move($this->getUploadRootDir(), $name);
            $this->photo4 = $name;
        }
        else
            $this->photo4 = $ph4;
    }

    public function GetUrl()
    {
        $str = preg_replace('#[^\\p{L}\d]+#u', '_', $this->titre);
        $str = trim($str, '-');
        $str = iconv('utf-8', 'us-ascii//TRANSLIT', $str);
        $str = strtolower($str);
        $str = preg_replace('#[^-\w]+#', '', $str);
        return $str;
    }

    public function getPhotos()
    {
        $photos = array();
        if ($this->photo1 != NULL)
            $photos[] = $this->getUploadDir().'/'.$this->photo1;
        if ($this->photo2 != NULL)
            $photos[] = $this->getUploadDir().'/'.$this->photo2;
        if ($this->photo3 != NULL)
            $photos[] = $this->getUploadDir().'/'.$this->photo3;
        if ($this->photo4 != NULL)
            $photos[] = $this->getUploadDir().'/'.$this->photo4;
        return $photos;
    }

    public function getFirstPhoto()
    {
        if ($this->photo1 != NULL)
            return $this->getUploadDir().'/'.$this->photo1;
        else if ($this->photo2 != NULL)
            return $this->getUploadDir().'/'.$this->photo2;
        else if ($this->photo3 != NULL)
            return $this->getUploadDir().'/'.$this->photo3;
        else if ($this->photo4 != NULL)
            return $this->getUploadDir().'/'.$this->photo4;
        else
            return 'img/nopic.jpg';
    }
    
    public function IsAnnule()
    {
        if($this->etat==9)
            return TRUE;
        else
            return FALSE;
    }
    
    public function IsEnregistre()
    {
        if($this->etat==1)
            return TRUE;
        else
            return FALSE;
    }
    public function ShowEtat()
    {
        if($this->etat==1)
            return 'Enregistré';
        if($this->etat==9)
            return 'Expiré';
        
    }


    /**
     * Add commentaires
     *
     * @param \front\AnnonceBundle\Entity\Commentaire $commentaires
     * @return Annonce
     */
    public function addCommentaire(\front\AnnonceBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \front\AnnonceBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\front\AnnonceBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Annonce
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Shows type
     *
     * @return Type 
     */
    public function showType()
    {
        if($this->type==1)
            return "Offre";
        else
            return "Demande";
    }
    
    
    
}
