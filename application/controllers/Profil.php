<?php
    class Profil extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('model_profil');
            $this->load->helper('url');
        }
        public function traitementEdit(){
            $designation = $this->input->post('designation');
            $valeur = $this->input->post('valeur');
            $idProfil = $this->input->post('idProfil');
            $data = array(
                "designation" => $designation,
                "valeur" => $valeur
            );
            $this->model_profil->update($data, $idProfil);
            redirect('profil');
        }
        public function edit($idProfil){
            $data['idProfil'] = $idProfil;
            $profil = $this->model_profil->selectById($idProfil);
            $data["designation"] = $profil[0]->DESIGNATION;
            $data["valeur"] = $profil[0]->VALEUR;
            $this->load->view('profil/update',$data);
        }
        public function index()
	    {
            $profils = $this->model_profil->liste();
            $data['profils'] = $profils;
		    $this->load->view('profil/liste',$data);
        }
        
        public function delete($idProfil){
            $this->model_profil->delete($idProfil);
            redirect("profil");
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
            redirect('profil');
        }
    }