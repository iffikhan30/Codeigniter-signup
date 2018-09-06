public function Insert_record_bytablename($tablename,$data){
		if($this->db->insert($tablename, $data)){
			return true;
		}else{
			return false;
		}
	}
