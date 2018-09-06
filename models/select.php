class Select extends CI_Model {

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
public function selectrecords_bytablename($tablename){
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->order_by("id", "desc");
		$query = $this->db->get();
		return $query->result();
	}
  
  }
