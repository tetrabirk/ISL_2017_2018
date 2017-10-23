<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Prestataire
 *
 * @ORM\Table(name="prestataire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrestataireRepository")
 *
 */
class Prestataire extends Utilisateur
{

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="site_internet", type="string", length=255, nullable=true)
     */
    private $siteInternet;

    /**
     * @var string
     *
     * @ORM\Column(name="email_de_contact", type="string", length=255, nullable=true)
     */
    private $emailContact;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tva", type="string", length=255, nullable=true)
     */
    private $numTVA;

    /**
     * bcp de prestataires ont bcp de categories
     * @ORM\ManyToMany(targetEntity="CategorieDeServices", inversedBy="prestataires")
     * @ORM\JoinTable(name="categories_des_prestataires")
     */
    private $categories;

    public function addCategorie(CategorieDeServices $categ)
    {
        $categ->addPrestataires($this);
        $this->categories[]= $categ;
    }

    /**
     * @ORM\OneToMany(targetEntity="Stage",mappedBy="prestataire")
     */

    private $stages;

    /**
     * Bcp de Prestataire ont bcp d'utilisateur qui les ont ajouté dans leurs favoris
     * @ORM\ManyToMAny(targetEntity="Internaute", mappedBy="favoris")
     */

    private $internautesFavoris;

    public function addInternauteFavoris(Internaute $IntFav)
    {
        $this->internautesFavoris[]=$IntFav;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Prestataire
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
     * Set siteInternet
     *
     * @param string $siteInternet
     *
     * @return Prestataire
     */
    public function setSiteInternet($siteInternet)
    {
        $this->siteInternet = $siteInternet;

        return $this;
    }

    /**
     * Get siteInternet
     *
     * @return string
     */
    public function getSiteInternet()
    {
        return $this->siteInternet;
    }

    /**
     * Set emailContact
     *
     * @param string $emailContact
     *
     * @return Prestataire
     */
    public function setEmailContact($emailContact)
    {
        $this->emailContact = $emailContact;

        return $this;
    }

    /**
     * Get emailContact
     *
     * @return string
     */
    public function getEmailContact()
    {
        return $this->emailContact;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Prestataire
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set numTVA
     *
     * @param string $numTVA
     *
     * @return Prestataire
     */
    public function setNumTVA($numTVA)
    {
        $this->numTVA = $numTVA;

        return $this;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get numTVA
     *
     * @return string
     */
    public function getNumTVA()
    {
        return $this->numTVA;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stages = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->internautesFavoris = new ArrayCollection();
    }

    /**
     * Add stage
     *
     * @param \AppBundle\Entity\Stage $stage
     *
     * @return Prestataire
     */
    public function addStage(\AppBundle\Entity\Stage $stage)
    {
        $this->stages[] = $stage;

        return $this;
    }

    /**
     * Remove stage
     *
     * @param \AppBundle\Entity\Stage $stage
     */
    public function removeStage(\AppBundle\Entity\Stage $stage)
    {
        $this->stages->removeElement($stage);
    }

    /**
     * Get stages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStages()
    {
        return $this->stages;
    }
}
