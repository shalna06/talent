<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VHub extends CI_Controller { 

function __construct()
 {
parent::__construct();
$this->load->model('VHub_model');
$this->load->helper(array('form', 'url','language'));
$this->load->library('session');

}
	public function index()
	{
		$this->load->view('login');
	} 
	public function login()
	{   
	     $data['message'] = '';
		$this->load->view('login',$data);
	} 
	public function register()
	{
		$this->load->view('register');
	} 
	public function doregister()
	{  
	$data['message'] = ''; 

	    $data = array( 
		'fname'=>$_POST['fname'],
		'lname'=>$_POST['lname'], 
		'address'=>$_POST['address'], 
		'username'=>$_POST['username'],
		'password'=>$_POST['password'], 
		'location'=>$_POST['location']
		
		);
	    $this->VHub_model->addregister($data); 
		     $insert_id = $this->db->insert_id(); 
			
			 $userid =  $insert_id;
			 $this->session->set_userdata('userid', $userid); 
		 
		 redirect('http://localhost/vHub/index.php/VHub/login');
	} 

	public function getLocation(){ 
	  $lat = $_POST['latitude']; 
	 $lng = $_POST['longitude'];
	 $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&key=AIzaSyBzPNfnCLGh5YPweKmNR-sd7hPpf1d5z1o&sensor=false';
     echo $json = @file_get_contents($url);
     $data=json_decode($json);
     $status = $data->status;
     if($status=="OK")
     {
      $data->results[0]->formatted_address;
     }
     else
     {
        echo 'false';
     }
	}
	public function fav() { 
	if($this->session->userdata('login_sess')=='admin') 
				{ 
	$userid = $this->session->userdata('userid'); 
    $this->db->where('userid', $userid);	
    $this->db->order_by("id", "desc");	
	$data['fav'] = $this->db->get('vedio')->result(); 
	
	  	$this->load->view('fav',$data);
	}  
	
	else { 
	$this->load->view('login');
	} 
	} 
	
	public function addvideo() { 
	$url = $_POST['url']; 
    $word = 'www.youtube.com/embed'; 
    $userid = $this->session->userdata('userid');	
	if(strpos($url, $word) !== false){
    $data = array( 
		'title'=>$_POST['title'],
		'userid'=>$userid,
		'description'=>$_POST['description'], 
		'url'=>$_POST['url']
		
		
		);
	    $this->VHub_model->addvideo($data);
		
		
		 redirect('http://localhost/vHub/index.php/VHub/fav');
} else{
    redirect('http://localhost/vHub/index.php/VHub/fav');
}
	
	} 
	
	public function loginin() { 
	
	$username = $_POST['username']; 

	$password = $_POST['password']; 
	$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('register'); 
			
			$num = $query->num_rows(); 
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$qu = $this->db->get('register')->row(); 
			 $userid = $qu->id;
			if ($num) { 
			     $this->session->set_userdata('userid', $userid); 
				$this->session->set_userdata('login_sess','admin'); 
				if($this->session->userdata('login_sess')=='admin')
				{
			redirect('http://localhost/vHub/index.php/VHub/fav'); 
				}
			} 
			else { 
			$this->load->view('login');
			}
}
	 public function delete() { 
$dele=$_GET['videodelet'];
$this->db->where('id', $dele);
$this->db->delete('vedio'); 
redirect('http://localhost/vHub/index.php/VHub/fav');	 
	 }
	public function logout() { 
	$this->session->unset_userdata('login_sess'); 
	$this->session->unset_userdata('userid'); 
	 $this->load->view('login');
	}
	
	
}
