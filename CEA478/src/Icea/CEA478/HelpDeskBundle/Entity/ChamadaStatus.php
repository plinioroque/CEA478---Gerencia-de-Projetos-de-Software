<?php

namespace Icea\CEA478\HelpDeskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChamadaStatus
 */
class ChamadaStatus
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descricao;


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
     * Set descricao
     *
     * @param string $descricao
     * @return ChamadaStatus
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
    
    /**
     * sobreescreve toString
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->descricao;
    }
}
