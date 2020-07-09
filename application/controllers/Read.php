<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Read extends CI_Controller{
		public function index(){
			$this->load->model('Read_Model');
			$results=$this->Read_Model->getdata();
			$this->load->view('read',['result'=>$results]);
		}
			
		public function getdetails($uid) {
			$this->load->model('Read_Model');
			$reslt=$this->Read_Model->getuserdetail($uid);
			$this->load->view('update',['row'=>$reslt]);
		}
	}
?>