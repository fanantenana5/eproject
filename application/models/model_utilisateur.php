<?php
    class model_utilisateur extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function ajouter($data){
            $this->db->insert("utilisateur",$data);
        }

        public function selectById($idUtilisateur){
            $this->db->where("idUtilisateur",$idUtilisateur);
            return $this->db->get("UtilisateurProfil")->result();
        }

        public function liste(){
            $data = $this->db->get("UtilisateurProfil")->result();
            return $data;
        }

        public function delete($id){
            return $this->db->delete("Utilisateur", "idUtilisateur = ".$id);
        }

        public function update($data,$idUtilisateur) { 
            $this->db->set($data); 
            $this->db->where("idUtilisateur", $idUtilisateur); 
            $this->db->update("Utilisateur", $data); 
        } 
    }
?>