<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temática
 *
 * @ORM\Table(name="Temática", indexes={@ORM\Index(name="fk_Temática_Personal1_idx", columns={"Personal_Email"})})
 * @ORM\Entity
 */
class Temática
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Enunciado", type="string", length=45, nullable=true)
     */
    private $enunciado;

    /**
     * @var string
     *
     * @ORM\Column(name="Tematica", type="string", length=45, nullable=true)
     */
    private $tematica;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Personal_Email", referencedColumnName="Email")
     * })
     */
    private $personalEmail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GrupoSoporte", mappedBy="temática")
     */
    private $grupoSoporte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grupoSoporte = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set enunciado
     *
     * @param string $enunciado
     *
     * @return Temática
     */
    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;

        return $this;
    }

    /**
     * Get enunciado
     *
     * @return string
     */
    public function getEnunciado()
    {
        return $this->enunciado;
    }

    /**
     * Set tematica
     *
     * @param string $tematica
     *
     * @return Temática
     */
    public function setTematica($tematica)
    {
        $this->tematica = $tematica;

        return $this;
    }

    /**
     * Get tematica
     *
     * @return string
     */
    public function getTematica()
    {
        return $this->tematica;
    }

    /**
     * Set personalEmail
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Personal $personalEmail
     *
     * @return Temática
     */
    public function setPersonalEmail(\GuiasDocentes\FAQBundle\Entity\Personal $personalEmail = null)
    {
        $this->personalEmail = $personalEmail;

        return $this;
    }

    /**
     * Get personalEmail
     *
     * @return \GuiasDocentes\FAQBundle\Entity\Personal
     */
    public function getPersonalEmail()
    {
        return $this->personalEmail;
    }

    /**
     * Add grupoSoporte
     *
     * @param \GuiasDocentes\FAQBundle\Entity\GrupoSoporte $grupoSoporte
     *
     * @return Temática
     */
    public function addGrupoSoporte(\GuiasDocentes\FAQBundle\Entity\GrupoSoporte $grupoSoporte)
    {
        $this->grupoSoporte[] = $grupoSoporte;

        return $this;
    }

    /**
     * Remove grupoSoporte
     *
     * @param \GuiasDocentes\FAQBundle\Entity\GrupoSoporte $grupoSoporte
     */
    public function removeGrupoSoporte(\GuiasDocentes\FAQBundle\Entity\GrupoSoporte $grupoSoporte)
    {
        $this->grupoSoporte->removeElement($grupoSoporte);
    }

    /**
     * Get grupoSoporte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrupoSoporte()
    {
        return $this->grupoSoporte;
    }
}
