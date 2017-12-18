<?php

/**
* 
*/
class sendMessage extends CI_Controller{
    
   public function send()
    {
        
        $this->form_validation->set_rules('name','Your Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('mno','Mobile No','required|min_length[10]');
        $this->form_validation->set_rules('message','Message','required');
        

            if ($this->form_validation->run() == FALSE)
                {
                        $_SESSION['sendMessage'] = false;
                        $this->load->view('contacts');
                }
                else
                {       
                        
                        $this->load->model('Auth_model');
                        $response=$this->Auth_model->send_message();
                        

                        if ($response>0) {
                            
                            $this->session->set_flashdata('msg','message send successfuly');
                            $this->load->view('contacts');
                             $this->session->set_flashdata('msg','');

                            //redirect('Auth/home');
                        }
                        

                }
    }

}
 ?>