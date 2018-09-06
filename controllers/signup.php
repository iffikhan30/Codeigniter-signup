defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public $sessionid	=	null;
	
	public function __construct()
    {
		parent::__construct();
    }
  public function addemployee($success=null,$error=null){
      $data['success']	=	$success;
      if(isset($_GET['error'])){
        $data['error']	=	$_GET['error'];
      }
      $data['departs']	=	$this->Select->selectrecords_bytablename("departments");
      $this->load->view('admin/addemployee',$data);
      $this->load->view('common/footer');
    }
		 public function adminaddemployee(){
		$data['name']				=	$this->input->post('name');
		$data['email']				=	$this->input->post('email');
		$data['password']			=	$this->input->post('password');
		$data['phonenumber']		=	$this->input->post('phonenumber');
		$data['beneficiary']		=	$this->input->post('beneficiary');
		$data['emergency']			=	$this->input->post('emergency');
		$data['designation']		=	$this->input->post('designation');
		$data['cnic']				=	$this->input->post('cnic');
		$data['shift']				=	$this->input->post('shift');
		$data['jobdescription']		=	$this->input->post('jobdescription');
		$data['fathername']			=	$this->input->post('fathername');
		$data['dob']				=	$this->input->post('dob');
		$data['maritialstatus']		=	$this->input->post('maritialstatus');
		$data['address']			=	$this->input->post('address');
		$data['city']				=	$this->input->post('city');
		$data['state']				=	$this->input->post('state');
		$data['employeetype']		=	$this->input->post('employeetype');
		$data['reportingauthority']	=	$this->input->post('reportingauthority');
		$data['lunchbreak']			=	$this->input->post('lunchbreak');
		$data['namazbreak']			=	$this->input->post('namazbreak');
		$data['startdate']			=	$this->input->post('startdate');
		$data['enddate']			=	$this->input->post('enddate');
		$current					=	$this->input->post('current');
		if($current == "on"){
			$data['current']		=	1;
		}else{
			$data['current']		=	0;
		}
		$data['role']				=	$this->input->post('role');
		$data['departid']			=	$this->input->post('departid');
		$data['datetime']			=	date("Y-m-d g:i:s");
		$this->Insert->Insert_record_bytablename("users",$data);
		redirect('Home/addemployee/success');
	}
  }
		 
