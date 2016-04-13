<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultante
 *
 * @ORM\Table(name="Consultante")
 * @ORM\Entity
 */
class Consultante
{
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=30, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=50, nullable=true)
     */
    private $apellidos;



    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Consultante
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Consultante
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }
}
