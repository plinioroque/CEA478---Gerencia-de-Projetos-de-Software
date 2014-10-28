<?php

namespace Icea\CEA478\HelpDeskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relatorios
 */
class Relatorios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $horaData;

    /**
     * @var string
     */
    private $evento;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\Chamadas
     */
    private $chamada;


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
     * Set horaData
     *
     * @param \DateTime $horaData
     * @return Relatorios
     */
    public function setHoraData($horaData)
    {
        $this->horaData = $horaData;

        return $this;
    }

    /**
     * Get horaData
     *
     * @return \DateTime 
     */
    public function getHoraData()
    {
        return $this->horaData;
    }

    /**
     * Set evento
     *
     * @param string $evento
     * @return Relatorios
     */
    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    /**
     * Get evento
     *
     * @return string 
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * Set chamada
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\Chamadas $chamada
     * @return Relatorios
     */
    public function setChamada(\Icea\CEA478\HelpDeskBundle\Entity\Chamadas $chamada = null)
    {
        $this->chamada = $chamada;

        return $this;
    }

    /**
     * Get chamada
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\Chamadas 
     */
    public function getChamada()
    {
        return $this->chamada;
    }
}
