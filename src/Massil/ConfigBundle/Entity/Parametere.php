<?php

namespace Massil\ConfigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Massil\ConfigBundle\Entity\ParametereRepository")
 */
class Parametere
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
     *@ORM\OneToMany(targetEntity="Massil\ConfigBundle\Entity\BilanParameter",mappedBy="parametere") 
     */
    private $bilanParameters;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    
    /**
     * @var string
     * 
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     */
    private $code;
    
    /**
     * @var
     * 
     * @ORM\Column(name="unite", type="string", length=255)
     */
    private $unite;


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
     * @return Parameters
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
     * Constructor
     */
    public function __construct($code,$nom,$unite)
    {
    	$this->setCode($code);
    	$this->setNom($nom);
    	$this->setUnite($unite);
        $this->bilanParameters = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bilanParameters
     *
     * @param \Massil\ConfigBundle\Entity\BilanParameter $bilanParameters
     * @return Parameter
     */
    public function addBilanParameter(\Massil\ConfigBundle\Entity\BilanParameter $bilanParameter)
    {
        $this->bilanParameters[] = $bilanParameter;
        $bilanParameter->setParametere($this);

        return $this;
    }

    /**
     * Remove bilanParameters
     *
     * @param \Massil\ConfigBundle\Entity\BilanParameter $bilanParameters
     */
    public function removeBilanParameter(\Massil\ConfigBundle\Entity\BilanParameter $bilanParameters)
    {
        $this->bilanParameters->removeElement($bilanParameters);
    }

    /**
     * Get bilanParameters
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBilanParameters()
    {
        return $this->bilanParameters;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Parameter
     */
    public function setCode($code)
    {
        $this->code = $code;
		
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set unite
     *
     * @param string $unite
     * @return Parametere
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string 
     */
    public function getUnite()
    {
        return $this->unite;
    }
}
