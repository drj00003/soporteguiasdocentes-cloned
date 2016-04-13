<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoSoporte
 *
 * @ORM\Table(name="Grupo_Soporte", indexes={@ORM\Index(name="fk_Grupo_Soporte_Administrador1_idx", columns={"Administrador_ID"})})
 * @ORM\Entity
 */
class GrupoSoporte
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
     * @ORM\Column(name="Nombre", type="string", length=20, nullable=true)
     */
    private $nombre;

    /**
     * @var \Administrador
     *
     * @ORM\ManyToOne(targetEntity="Administrador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Administrador_ID", referencedColumnName="ID")
     * })
     */
    private $administrador;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Perfil", inversedBy="grupoSoporte")
     * @ORM\JoinTable(name="grupo_soporte_has_perfil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Grupo_Soporte_ID", referencedColumnName="ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Perfil_Nombre", referencedColumnName="Nombre")
     *   }
     * )
     */
    private $perfilNombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Temática", inversedBy="grupoSoporte")
     * @ORM\JoinTable(name="grupo_soporte_has_temática",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Grupo_Soporte_ID", referencedColumnName="ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Temática_ID", referencedColumnName="ID")
     *   }
     * )
     */
    private $temática;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->perfilNombre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->temática = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return GrupoSoporte
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
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
     * Set administrador
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Administrador $administrador
     *
     * @return GrupoSoporte
     */
    public function setAdministrador(\GuiasDocentes\FAQBundle\Entity\Administrador $administrador = null)
    {
        $this->administrador = $administrador;

        return $this;
    }

    /**
     * Get administrador
     *
     * @return \GuiasDocentes\FAQBundle\Entity\Administrador
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }

    /**
     * Add perfilNombre
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Perfil $perfilNombre
     *
     * @return GrupoSoporte
     */
    public function addPerfilNombre(\GuiasDocentes\FAQBundle\Entity\Perfil $perfilNombre)
    {
        $this->perfilNombre[] = $perfilNombre;

        return $this;
    }

    /**
     * Remove perfilNombre
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Perfil $perfilNombre
     */
    public function removePerfilNombre(\GuiasDocentes\FAQBundle\Entity\Perfil $perfilNombre)
    {
        $this->perfilNombre->removeElement($perfilNombre);
    }

    /**
     * Get perfilNombre
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPerfilNombre()
    {
        return $this->perfilNombre;
    }

    /**
     * Add temática
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Temática $temática
     *
     * @return GrupoSoporte
     */
    public function addTemática(\GuiasDocentes\FAQBundle\Entity\Temática $temática)
    {
        $this->temática[] = $temática;

        return $this;
    }

    /**
     * Remove temática
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Temática $temática
     */
    public function removeTemática(\GuiasDocentes\FAQBundle\Entity\Temática $temática)
    {
        $this->temática->removeElement($temática);
    }

    /**
     * Get temática
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemática()
    {
        return $this->temática;
    }
}
