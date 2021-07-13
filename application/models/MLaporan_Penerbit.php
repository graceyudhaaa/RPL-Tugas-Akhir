<?php

class MLaporan_Penerbit extends CI_Model{
    public function getAllData(){
        return $this->db->get('laporan_penerbit')->result_array();
    }

    public function Insert($table,$data){
        $res = $this->db->insert($table, $data);
        return $res;
    }

    function delete($id){
		return $this->db->delete('laporan_penerbit', ["ID" => $id]);
	}
}