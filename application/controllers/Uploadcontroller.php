<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadcontroller extends CI_Controller {

	public function upload_summernote()
	{
		$config['upload_path']          = './assets/img/summernote/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['max_size']             = 25600;
		// $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = md5(rand(100, 200)) . '.' . end($temp);
		$config['file_name']            = $newfilename;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')) {
			echo base_url('assets/img/summernote/') .$newfilename;
		}
	}

	public function delete_summernote(){
		$src = $this->input->post('src'); // $src = $_POST['src'];
  		$file_name = str_replace(base_url(), '', $src); // striping host to get relative path
        if(unlink($file_name))
        {
			echo 'File Delete Successfully';
        }
	}
}
