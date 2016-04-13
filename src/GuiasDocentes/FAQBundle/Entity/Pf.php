<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pf
 *
 * @ORM\Table(name="PF", indexes={@ORM\Index(name="fk_PF_Administrador1_idx", columns={"Administrador_ID"}), @ORM\Index(name="fk_PF_Grupo1_idx", columns={"Grupo_ID"})})
 * @ORM\Entity
 */
class Pf
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
     * @ORM\Column(name="Pregunta", type="text", length=65535, nullable=false)
     */
    private $pregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="Respuesta", type="text", length=65535, nullable=false)
     */
    private $respuesta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Habilitada", type="boolean", nullable=false)
     */
    private $habilitada = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="Creador", type="string", length=30, nullable=true)
     */
    private $creador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_M", type="datetime", nullable=false)
     */
    private $fechaM = 'CURRENT_TIMESTAMP';

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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Grupo_ID", referencedColumnName="ID")
     * })
     */
    private $grupo;



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
     * Set pregunta
     *
     * @param string $pregunta
     *
     * @return Pf
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return string
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     *
     * @return Pf
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set habilitada
     *
     * @param boolean $habilitada
     *
     * @return Pf
     */
    public function setHabilitada($habilitada)
    {
        $this->habilitada = $habilitada;

        return $this;
    }

    /**
     * Get habilitada
     *
     * @return boolean
     */
    public function getHabilitada()
    {
        return $this->habilitada;
    }

    /**
     * Set creador
     *
     * @param string $creador
     *
     * @return Pf
     */
    public function setCreador($creador)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get creador
     *
     * @return string
     */
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * Set fechaM
     *
     * @param \DateTime $fechaM
     *
     * @return Pf
     */
    public function setFechaM($fechaM)
    {
        $this->fechaM = $fechaM;

        return $this;
    }

    /**
     * Get fechaM
     *
     * @return \DateTime
     */
    public function getFechaM()
    {
        return $this->fechaM;
    }

    /**
     * Set administrador
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Administrador $administrador
     *
     * @return Pf
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
     * Set grupo
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Grupo $grupo
     *
     * @return Pf
     */
    public function setGrupo(\GuiasDocentes\FAQBundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \GuiasDocentes\FAQBundle\Entity\Grupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
