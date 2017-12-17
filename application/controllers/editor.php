<?php

class editor extends CI_Controller{

    public function my_profile(){

        $this->load->view('editor.php');
    }
    public function add_item(){
        $this->load->view('add_item');
    }
    public function search_user(){
        $this->load->model('editor_model');
        $result = $this->editor_model->find_all_users();
        $data['user_list'] = null;
        if ($result){
            $data['user_list'] = $result;
            $this->load->view('editor_search_user',$data);
        }
        else{
            echo "Page Not Found";
        }
    }
    public function update_user(){
        $this->load->view('update_user');
    }
    public function add_item_details(){
        $id=$_POST['id'];
        $itemname=$_POST['itemname'];
        $colour=$_POST['colour'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        $in_stock=$_POST['in_stock'];
        $description=$_POST['description'];
        $image="images/sales/".$id;
        //create an array and pass data
        $data = array(
            'item_id' => $id,
            'item_name' => $itemname,
            'category' => $category,
            'price' => $price,
            'colour' => $colour,
            'in_stock' => $in_stock,
            'description' => $description,
            'image' =>$image
        );
        //upload image

        $config['upload_path']   = 'http://localhost/pcsite/index.php';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 100;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
        }

        else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }

        $this->load->model('editor_model');
        $this->editor_model->add_item($data);
        $data['message'] = 'Item Added Successfully';
//Loading View
        $this->load->view('add_item', $data);

    }
    public function delete($id){
        $this->load->model('manager_model');
        $result = $this->manager_model->delete($id);
        if($result){
            $this->search_user();
        }
        else{
            $this->search_user();
        }





    }

    public function logout(){

        unset($_SESSION);
        session_destroy();
        redirect("auth/login","refresh");

    }
}

