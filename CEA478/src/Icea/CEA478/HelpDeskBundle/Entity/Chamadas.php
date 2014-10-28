<?php

namespace Icea\CEA478\HelpDeskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chamadas
 */
class Chamadas
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
    private $descricaoProblema;

    /**
     * @var string
     */
    private $observacoes;

    /**
     * @var string
     */
    private $contatoAdicional1;

    /**
     * @var string
     */
    private $contatoAdicional2;

    /**
     * @var string
     */
    private $descricaoSolucao;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\ChamadaNivel
     */
    private $chamadaNivel;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\ChamadaStatus
     */
    private $chamadaStatus;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\ChamadaLocal
     */
    private $chamadaLocal;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\ChamadaCategoria
     */
    private $chamadaCategoria;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\Usuario
     */
    private $cliente;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\Usuario
     */
    private $responsavel;


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
     * @return Chamadas
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
     * Set descricaoProblema
     *
     * @param string $descricaoProblema
     * @return Chamadas
     */
    public function setDescricaoProblema($descricaoProblema)
    {
        $this->descricaoProblema = $descricaoProblema;

        return $this;
    }

    /**
     * Get descricaoProblema
     *
     * @return string 
     */
    public function getDescricaoProblema()
    {
        return $this->descricaoProblema;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     * @return Chamadas
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }

    /**
     * Get observacoes
     *
     * @return string 
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set contatoAdicional1
     *
     * @param string $contatoAdicional1
     * @return Chamadas
     */
    public function setContatoAdicional1($contatoAdicional1)
    {
        $this->contatoAdicional1 = $contatoAdicional1;

        return $this;
    }

    /**
     * Get contatoAdicional1
     *
     * @return string 
     */
    public function getContatoAdicional1()
    {
        return $this->contatoAdicional1;
    }

    /**
     * Set contatoAdicional2
     *
     * @param string $contatoAdicional2
     * @return Chamadas
     */
    public function setContatoAdicional2($contatoAdicional2)
    {
        $this->contatoAdicional2 = $contatoAdicional2;

        return $this;
    }

    /**
     * Get contatoAdicional2
     *
     * @return string 
     */
    public function getContatoAdicional2()
    {
        return $this->contatoAdicional2;
    }

    /**
     * Set descricaoSolucao
     *
     * @param string $descricaoSolucao
     * @return Chamadas
     */
    public function setDescricaoSolucao($descricaoSolucao)
    {
        $this->descricaoSolucao = $descricaoSolucao;

        return $this;
    }

    /**
     * Get descricaoSolucao
     *
     * @return string 
     */
    public function getDescricaoSolucao()
    {
        return $this->descricaoSolucao;
    }

    /**
     * Set chamadaNivel
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\ChamadaNivel $chamadaNivel
     * @return Chamadas
     */
    public function setChamadaNivel(\Icea\CEA478\HelpDeskBundle\Entity\ChamadaNivel $chamadaNivel = null)
    {
        $this->chamadaNivel = $chamadaNivel;

        return $this;
    }

    /**
     * Get chamadaNivel
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\ChamadaNivel 
     */
    public function getChamadaNivel()
    {
        return $this->chamadaNivel;
    }

    /**
     * Set chamadaStatus
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\ChamadaStatus $chamadaStatus
     * @return Chamadas
     */
    public function setChamadaStatus(\Icea\CEA478\HelpDeskBundle\Entity\ChamadaStatus $chamadaStatus = null)
    {
        $this->chamadaStatus = $chamadaStatus;

        return $this;
    }

    /**
     * Get chamadaStatus
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\ChamadaStatus 
     */
    public function getChamadaStatus()
    {
        return $this->chamadaStatus;
    }

    /**
     * Set chamadaLocal
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\ChamadaLocal $chamadaLocal
     * @return Chamadas
     */
    public function setChamadaLocal(\Icea\CEA478\HelpDeskBundle\Entity\ChamadaLocal $chamadaLocal = null)
    {
        $this->chamadaLocal = $chamadaLocal;

        return $this;
    }

    /**
     * Get chamadaLocal
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\ChamadaLocal 
     */
    public function getChamadaLocal()
    {
        return $this->chamadaLocal;
    }

    /**
     * Set chamadaCategoria
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\ChamadaCategoria $chamadaCategoria
     * @return Chamadas
     */
    public function setChamadaCategoria(\Icea\CEA478\HelpDeskBundle\Entity\ChamadaCategoria $chamadaCategoria = null)
    {
        $this->chamadaCategoria = $chamadaCategoria;

        return $this;
    }

    /**
     * Get chamadaCategoria
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\ChamadaCategoria 
     */
    public function getChamadaCategoria()
    {
        return $this->chamadaCategoria;
    }

    /**
     * Set cliente
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\Usuario $cliente
     * @return Chamadas
     */
    public function setCliente(\Icea\CEA478\HelpDeskBundle\Entity\Usuario $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\Usuario 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set responsavel
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\Usuario $responsavel
     * @return Chamadas
     */
    public function setResponsavel(\Icea\CEA478\HelpDeskBundle\Entity\Usuario $responsavel = null)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get responsavel
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\Usuario 
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }
    
    /**
     * sobreescreve toString
     *
     * @return string 
     */
    public function __toString()
    {
        /**
         * Temporário , deve ser editado para geração de relatório posteiormente
         */
        return $this->descricao;
    }
}
