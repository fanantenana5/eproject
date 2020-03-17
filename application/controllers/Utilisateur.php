<?php
    class Utilisateur extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('model_profil');
            $this->load->model('model_utilisateur');
            $this->load->helper('url');
        }
        public function index()
	    {
            $utilisateurs = $this->model_utilisateur->liste();
            $data['utilisateurs'] = $utilisateurs;
		    $this->load->view('utilisateur/liste',$data);
        }
        public function traitementEdit(){
            $data = $this->input->post();
            $data["password"] = password_hash($data["password"], PASSWORD_BCRYPT);
            $this->model_utilisateur->update($data, $this->input->post("idUtilisateur"));
            redirect("utilisateur");
        }
        public function traitementAjout(){
            $data = $this->input->post();
            $data["password"] = password_hash($data["password"], PASSWORD_BCRYPT);
            $this->model_utilisateur->ajouter($data);
            redirect('utilisateur');
        }
        public function ajout(){
            $data["profils"] = $this->model_profil->liste();
            $this->load->view('utilisateur/ajout',$data);
        }
        public function delete($idUtilisateur){
            $this->model_utilisateur->delete($idUtilisateur);
            redirect('utilisateur');
        }
        public function edit($idUtilisateur){
            $data["utilisateur"] = $this->model_utilisateur->selectById($idUtilisateur)[0];
            $data["profils"] = $this->model_profil->liste();
            $this->load->view('utilisateur/edit',$data);
        }
    }