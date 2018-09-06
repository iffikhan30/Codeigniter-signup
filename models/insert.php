public function Insert_record_bytablename($tablename,$data){
		if($this->db->insert($tablename, $data)){
			return true;
		}else{
			return false;
		}
	}
public function Insert_Update_options($tablename,$data){
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where('metakey', $data['metakey']);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
			$this->db->where('metakey', $data['metakey']);
			if($this->db->update($tablename, $data)){
				return true;
			}else{
				return false;
			}
		}else{
			if($this->db->insert($tablename, $data)){
				return true;
			}else{
				return false;
			}
		}
	}
