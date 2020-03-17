<?php
    class model_profil extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function ajouter($data){
            $this->db->insert("profil",$data);
        }

        public function selectById($idProfil){
            $this->db->where("idProfil",$idProfil);
            return $this->db->get("profil")->result();
        }

        public function liste(){
            $data = $this->db->get("profil")->result();
            return $data;
        }

        public function delete($id){
            return $this->db->delete("profil", "idprofil = ".$id);
        }

        public function update($data,$idProfil) { 
            $this->db->set($data); 
            $this->db->where("idProfil", $idProfil); 
            $this->db->update("profil", $data); 
        } 
    }
?>