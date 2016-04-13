<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="Respuesta", indexes={@ORM\Index(name="fk_Respuesta_Consulta1_idx", columns={"Consulta_ID"})})
 * @ORM\Entity
 */
class Respuesta
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
     * @ORM\Column(name="Texto", type="text", length=65535, nullable=true)
     */
    private $texto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \Consulta
     *
     * @ORM\ManyToOne(targetEntity="Consulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Consulta_ID", referencedColumnName="ID")
     * })
     */
    private $consulta;



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
     * Set texto
     *
     * @param string $texto
     *
     * @return Respuesta
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Respuesta
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set consulta
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Consulta $consulta
     *
     * @return Respuesta
     */
    public function setConsulta(\GuiasDocentes\FAQBundle\Entity\Consulta $consulta = null)
    {
        $this->consulta = $consulta;

        return $this;
    }

    /**
     * Get consulta
     *
     * @return \GuiasDocentes\FAQBundle\Entity\Consulta
     */
    public function getConsulta()
    {
        return $this->consulta;
    }
}
