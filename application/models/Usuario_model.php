<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
 
    public $id;
    public $nome;
    public $email;
 
    public function __construct() {
        parent::__construct();
    }
 
    public function listar(){
        $query = $this->db->query('SELECT * FROM Usuario');
        return $query->result();
    }
}