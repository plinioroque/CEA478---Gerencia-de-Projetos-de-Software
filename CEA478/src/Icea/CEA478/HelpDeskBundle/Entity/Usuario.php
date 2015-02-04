<?php

namespace Icea\CEA478\HelpDeskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $telefone;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \Icea\CEA478\HelpDeskBundle\Entity\UsuarioClasse
     */
    private $usuarioClasse;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }
    public function __construct($id=null, $nome=null, $username=null, $telefone=null, $usuarioClasse=null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->username = $username;
        $this->telefone = $telefone;
        $this->usuarioClasse = new \Icea\CEA478\HelpDeskBundle\Entity\UsuarioClasse; 
        $this->usuarioClasse->setDescricao($usuarioClasse);
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Usuario
     */
    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Usuario
     */
    public function setTelefone($telefone) {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone() {
        return $this->telefone;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set usuarioClasse
     *
     * @param \Icea\CEA478\HelpDeskBundle\Entity\UsuarioClasse $usuarioClasse
     * @return Usuario
     */
    public function setUsuarioClasse(\Icea\CEA478\HelpDeskBundle\Entity\UsuarioClasse $usuarioClasse = null) {
        $this->usuarioClasse = $usuarioClasse;

        return $this;
    }

    /**
     * Get usuarioClasse
     *
     * @return \Icea\CEA478\HelpDeskBundle\Entity\UsuarioClasse 
     */
    public function getUsuarioClasse() {
        return $this->usuarioClasse->getDescricao();
    }

    /**
     * sobreescreve toString
     *
     * @return string 
     */
    public function __toString() {
        return $this->nome;
    }

    public function getRoles() {
        if (strcmp($this->getUsuarioClasse(), "Administrador") == 0 or strcmp($this->getUsuarioClasse(), "Bolsista") == 0) {
            return 'ROLE_ADMIN';
        }
        return 'ROLA_USER';
    }

    /**
     * Set nome
     *
     * @param int $id
     * @return Usuario
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

}
