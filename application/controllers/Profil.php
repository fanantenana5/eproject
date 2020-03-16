<?php
    class Profil extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('model_profil');
            $this->load->helper('url');
        }
        public function index()
	    {
            $profils = $this->model_profil->liste();
            $data['profils'] = $profils;
		    $this->load->view('profil/liste',$data);
        }	
        
        public function delete($idProfil){
            $this->model_profil->delete($idProfil);
        }

        public function ajout(){
            $this->load->view('profil/ajout');
        }

        public function traitementAjout(){
            $designation = $this->input->post('designation');
            $valeur = $this->input->post('valeur');
            $data = array(
                "designation" => $designation,
                "valeur" => $valeur
            );
            $this->model_profil->ajouter($data);
            $this->load->view('profil/ajout');
        }
    }