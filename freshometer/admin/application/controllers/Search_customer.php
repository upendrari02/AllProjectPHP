<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_customer extends CI_Controller {
    
	function __construct(){

		parent::__construct();

		$this->load->library('session');
        $this->load->helper('form');
        $this->load->model('model_search_customer');
       
		
	}


	public function index(){
        $this->load->helper('form');
		$this->load->view('home', $data);

	}
    
    public function searchbar_card_no(){
        if(isset($_POST["search_by"],$_POST["linked_id"])){
			
			$search_by  =  $_POST["search_by"];
			$linked_id  =   $_POST["linked_id"];
        
			$this->model_search_customer->searchbar_card_no($search_by,$linked_id);
		}else{
			echo "Something Wrong";
			
		}	
        
    }
	
	public function searchbar_like(){
					
		if(isset($_POST["search_by"],$_POST["search_for"])){
			
			$search_by  =  $_POST["search_by"];
			$search_for  =   $_POST["search_for"];
			$this->model_search_customer->searchbar_like_result($search_by,$search_for);
		}else{
			echo "Something Wrong";
			
		}			
		
	}
    
    public function searchbar_like_list(){
					
		if(isset($_POST["search_by"],$_POST["search_for"])){
			
			$search_by  =  $_POST["search_by"];
			$search_for  =   $_POST["search_for"];
			$this->model_search_customer->searchbar_like_list($search_by,$search_for);
		}else{
			echo "Something Wrong";
			
		}			
		
	}
	
    public function searchbar_like_colony(){
					
		if(isset($_POST["search_by"],$_POST["search_for"])){
			
			$search_by  =  'colony_name';
			$search_for  =   $_POST["search_for"];
			$this->model_search_customer->searchbar_like_colony($search_by,$search_for);
		}else{
			echo "Something Wrong";
			
		}			
		
	}
     public function searchbar_like_list_number(){
					
		if(isset($_POST["search_by"],$_POST["search_for"])){
			
			$search_by  =  $_POST["search_by"];
			$search_for  =   $_POST["search_for"];
			$this->model_search_customer->searchbar_like_list_number($search_by,$search_for);
		}else{
			echo "Something Wrong";
			
		}			
		
	}        
        
	public function searchbar_name(){
					
		if(isset($_POST["search_by"])){
			
			$search_by  =  $_POST["search_by"];
			$firstname  =   $_POST["firstname"];
			$lastname  =   $_POST["lastname"];
			
		   
			
			$this->model_search_customer->searchbar_name_result($search_by,$firstname,$lastname);
		}else{
			echo "Something Wrong";
			
		}			
		
	}
    
    public function searchbar_list(){
					
		if(isset($_POST["search_by"])){
			
			$search_by  =  $_POST["search_by"];
			$firstname  =   $_POST["firstname"];
			$lastname  =   $_POST["lastname"];
			
		   
			
			$this->model_search_customer->searchbar_list_name($search_by,$firstname,$lastname);
		}else{
			echo "Something Wrong";
			
		}			
		
	}
	
	public function search_by_date(){
					
		if(isset($_POST["from_date"],$_POST["to_date"])){
			
			$from_date  =  $_POST["from_date"];
			$to_date  =  $_POST["to_date"];
		
			 $this->model_search_customer->search_by_date_result($from_date,$to_date);
		}else{
			echo "Something Wrong";
			
		}			
		
	}

	
}
