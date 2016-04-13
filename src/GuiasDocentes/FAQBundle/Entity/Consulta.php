<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulta
 *
 * @ORM\Table(name="Consulta", indexes={@ORM\Index(name="fk_Consulta_Hilo1_idx", columns={"Hilo_ID"})})
 * @ORM\Entity
 */
class Consulta
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
     * @var boolean
     *
     * @ORM\Column(name="Visto", type="boolean", nullable=true)
     */
    private $visto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \Hilo
     *
     * @ORM\ManyToOne(targetEntity="Hilo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Hilo_ID", referencedColumnName="ID")
     * })
     */
    private $hilo;



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
     * @return Consulta
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
     * Set visto
     *
     * @param boolean $visto
     *
     * @return Consulta
     */
    public function setVisto($visto)
    {
        $this->visto = $visto;

        return $this;
    }

    /**
     * Get visto
     *
     * @return boolean
     */
    public function getVisto()
    {
        return $this->visto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Consulta
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
     * Set hilo
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Hilo $hilo
     *
     * @return Consulta
     */
    public function setHilo(\GuiasDocentes\FAQBundle\Entity\Hilo $hilo = null)
    {
        $this->hilo = $hilo;

        return $this;
    }

    /**
     * Get hilo
     *
     * @return \GuiasDocentes\FAQBundle\Entity\Hilo
     */
    public function getHilo()
    {
        return $this->hilo;
    }
}
