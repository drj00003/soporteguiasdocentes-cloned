<?php

namespace GuiasDocentes\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rf
 *
 * @ORM\Table(name="RF", indexes={@ORM\Index(name="fk_RF_Personal1_idx", columns={"Personal_Email"})})
 * @ORM\Entity
 */
class Rf
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
     * @ORM\Column(name="Texto", type="text", length=65535, nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="Keywords", type="string", length=25, nullable=true)
     */
    private $keywords;

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
     * @return Rf
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
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Rf
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set personalEmail
     *
     * @param \GuiasDocentes\FAQBundle\Entity\Personal $personalEmail
     *
     * @return Rf
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
}
