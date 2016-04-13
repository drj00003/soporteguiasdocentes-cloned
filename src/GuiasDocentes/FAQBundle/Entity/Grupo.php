<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="Grupo", indexes={@ORM\Index(name="fk_Grupo_Perfil1_idx", columns={"Perfil_Nombre"})})
 * @ORM\Entity
 */
class Grupo
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
     * @ORM\Column(name="Nombre", type="text", length=65535, nullable=true)
     */
    private $nombre;

    /**
     * @var \Perfil
     *
     * @ORM\ManyToOne(targetEntity="Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Perfil_Nombre", referencedColumnName="Nombre")
     * })
     */
    private $perfilNombre;



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
     * @return Grupo
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
     * Set perfilNombre
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Perfil $perfilNombre
     *
     * @return Grupo
     */
    public function setPerfilNombre(\GuiasDocentes\FAQBundle\Entity\Perfil $perfilNombre = null)
    {
        $this->perfilNombre = $perfilNombre;

        return $this;
    }

    /**
     * Get perfilNombre
     *
     * @return \GuiasDocentes\FAQBundle\Entity\Perfil
     */
    public function getPerfilNombre()
    {
        return $this->perfilNombre;
    }
}
