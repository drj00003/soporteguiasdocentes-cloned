<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="Perfil")
 * @ORM\Entity
 */
class Perfil
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GrupoSoporte", mappedBy="perfilNombre")
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
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add grupoSoporte
     *
     * @param \GuiasDocentes\FAQBundle\Entity\GrupoSoporte $grupoSoporte
     *
     * @return Perfil
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
