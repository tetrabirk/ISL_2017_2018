<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StageRepository")
 */
class Stage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="string", length=255, nullable=true)
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="info_complementaire", type="text", nullable=true)
     */
    private $infoComplementaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affichage_de", type="date")
     */
    private $affichageDe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="affichage_jusque", type="date")
     */
    private $affichageJusque;

    /**
     * Bcp de Stage on un Prestataire
     * @ORM\ManyToOne(targetEntity="Prestataire", inversedBy="stages")
     * @ORM\JoinColumn(name="prestataire_id",referencedColumnName="id")
     */
    private $prestataire;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Stage
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
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Stage
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set infoComplementaire
     *
     * @param string $infoComplementaire
     *
     * @return Stage
     */
    public function setInfoComplementaire($infoComplementaire)
    {
        $this->infoComplementaire = $infoComplementaire;

        return $this;
    }

    /**
     * Get infoComplementaire
     *
     * @return string
     */
    public function getInfoComplementaire()
    {
        return $this->infoComplementaire;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Stage
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Stage
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set affichageDe
     *
     * @param \DateTime $affichageDe
     *
     * @return Stage
     */
    public function setAffichageDe($affichageDe)
    {
        $this->affichageDe = $affichageDe;

        return $this;
    }

    /**
     * Get affichageDe
     *
     * @return \DateTime
     */
    public function getAffichageDe()
    {
        return $this->affichageDe;
    }

    /**
     * Set affichageJusque
     *
     * @param \DateTime $affichageJusque
     *
     * @return Stage
     */
    public function setAffichageJusque($affichageJusque)
    {
        $this->affichageJusque = $affichageJusque;

        return $this;
    }

    /**
     * Get affichageJusque
     *
     * @return \DateTime
     */
    public function getAffichageJusque()
    {
        return $this->affichageJusque;
    }

    /**
     * Set prestataire
     *
     * @param \AppBundle\Entity\Prestataire $prestataire
     *
     * @return Stage
     */
    public function setPrestataire(\AppBundle\Entity\Prestataire $prestataire = null)
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \AppBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }
}
