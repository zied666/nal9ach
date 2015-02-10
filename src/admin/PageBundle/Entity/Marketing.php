<?php

namespace admin\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Marketing
 *
 * @ORM\Table(name="ser_marketing")
 * @ORM\Entity
 */
class Marketing
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
     * @ORM\Column(name="banniere", type="string", length=255, nullable=true)
     * @Assert\File(maxSize="6000000")
     */
    private $banniere;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=255, nullable=true)
     * @Assert\File(maxSize="6000000")
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=255, nullable=true)
     * @Assert\File(maxSize="6000000")
     */
    private $photo2;


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
     * Set banniere
     *
     * @param string $banniere
     * @return Marketing
     */
    public function setBanniere($banniere)
    {
        $this->banniere = $banniere;

        return $this;
    }

    /**
     * Get banniere
     *
     * @return string 
     */
    public function getBanniere()
    {
        return $this->banniere;
    }

    /**
     * Set photo1
     *
     * @param string $photo1
     * @return Marketing
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
     * @return Marketing
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
    
    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        return 'uploads/marketing';
    }
    
    public function Upload($im1,$im2,$im3)
    {
        if($this->banniere!='')
        {
            if($this->banniere!='') {if(file_exists($this->getUploadRootDir ().'/'.$this->banniere)) unlink ($this->getUploadRootDir ().'/'.$this->banniere);}
            $name=date("His-").$this->banniere->getClientOriginalName();
            $this->banniere->move($this->getUploadRootDir(),$name );
            $this->banniere = $name;
        }
        else
            $this->banniere=$im1;
        
        if($this->photo1!='')
        {
            if($this->photo1!='') {if(file_exists($this->getUploadRootDir ().'/'.$this->photo1)) unlink ($this->getUploadRootDir ().'/'.$this->photo1);}
            $name=date("His-").$this->photo1->getClientOriginalName();
            $this->photo1->move($this->getUploadRootDir(),$name);
            $this->photo1 = $name;
        }
        else
            $this->photo1=$im2;
        
        if($this->photo2!='')
        {
            if($this->photo2!='') {if(file_exists($this->getUploadRootDir ().'/'.$this->photo2)) unlink ($this->getUploadRootDir ().'/'.$this->photo2);}
            $name=date("His-").$this->photo2->getClientOriginalName();
            $this->photo2->move($this->getUploadRootDir(), $name);
            $this->photo2 = $name;
        }
        else
            $this->photo2=$im3;
    }
    
}
