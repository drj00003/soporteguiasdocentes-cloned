<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hilo
 *
 * @ORM\Table(name="Hilo", indexes={@ORM\Index(name="fk_Hilo_Personal1_idx", columns={"Personal_Email"}), @ORM\Index(name="fk_Hilo_Consultante1_idx", columns={"Consultante_Email"})})
 * @ORM\Entity
 */
class Hilo
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
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Personal_Email", referencedColumnName="Email")
     * })
     */
    private $personalEmail;

    /**
     * @var \Consultante
     *
     * @ORM\ManyToOne(targetEntity="Consultante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Consultante_Email", referencedColumnName="Email")
     * })
     */
    private $consultanteEmail;



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
     * Set personalEmail
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Personal $personalEmail
     *
     * @return Hilo
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
     * Set consultanteEmail
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Consultante $consultanteEmail
     *
     * @return Hilo
     */
    public function setConsultanteEmail(\GuiasDocentes\FAQBundle\Entity\Consultante $consultanteEmail = null)
    {
        $this->consultanteEmail = $consultanteEmail;

        return $this;
    }

    /**
     * Get consultanteEmail
     *
     * @return \GuiasDocentes\FAQBundle\Entity\Consultante
     */
    public function getConsultanteEmail()
    {
        return $this->consultanteEmail;
    }
}
