<?php

namespace admin\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Footer
 *
 * @ORM\Table(name="ser_footer")
 * @ORM\Entity
 */
class Footer
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
     * @ORM\Column(name="titre", type="string", length=50)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="titre2", type="string", length=50)
     */
    private $titre2;

    /**
     * @var string
     *
     * @ORM\Column(name="text2", type="string", length=255)
     */
    private $text2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=50)
     */
    private $facebook;

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
     * @return Footer
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
     * @return Footer
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
     * Set titre2
     *
     * @param string $titre2
     * @return Footer
     */
    public function setTitre2($titre2)
    {
        $this->titre2 = $titre2;

        return $this;
    }

    /**
     * Get titre2
     *
     * @return string 
     */
    public function getTitre2()
    {
        return $this->titre2;
    }

    /**
     * Set text2
     *
     * @param string $text2
     * @return Footer
     */
    public function setText2($text2)
    {
        $this->text2 = $text2;

        return $this;
    }

    /**
     * Get text2
     *
     * @return string 
     */
    public function getText2()
    {
        return $this->text2;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Footer
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
}
