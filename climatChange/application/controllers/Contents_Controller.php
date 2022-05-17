<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contents_Controller extends CI_Controller {


   public $itemCRUD;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Contents_Model');


      $this->itemCRUD = new Contents_Model;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $this->load->model('Contents_Model');
       $data['data'] = $this->Contents_Model->get_itemCRUD();
        //var_dump($data);
       $this->load->view('Front-Office/index',$data);
             
       //$this->load->view('contents/list',$data);
       
   }

   public function hehe()
   {
       //$data['data'] = $this->itemCRUD->get_itemCRUD();


             
       $this->load->view('list');
       
   }

   public function administrateurLogin()
   {
    $this->load->model('Contents_Model');
    $data['data'] = $this->Contents_Model->get_itemCRUD();
    $this->load->view('Back-Office/index',$data);
       
   }
   public function contact()
   {
             
       $this->load->view('Front-Office/contact');
       
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $item = $this->itemCRUD->find_item($id);


      
      $this->load->view('Front-Office/articles',array('item'=>$item));
      
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function creation()
   {
      
      $this->load->view('Back-Office/create');
        
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('Title', 'Title', 'required');
        $this->form_validation->set_rules('Content', 'Content', 'required');
        $this->form_validation->set_rules('IdContent', 'IdContent', 'required');
        $this->form_validation->set_rules('Auteur', 'Auteur', 'required');
        $this->form_validation->set_rules('DatePublication', 'DatePublication', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('rechauffement-climatique/ajouts'));
        }else{
           $this->itemCRUD->insert_item();
           redirect(base_url('rechauffement-climatique/Home'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->itemCRUD->find_item($id);


       
       $this->load->view('Back-Office/edit',array('item'=>$item));
       
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
    $this->form_validation->set_rules('Title', 'Title', 'required');
    $this->form_validation->set_rules('Content', 'Content', 'required');
    $this->form_validation->set_rules('IdContent', 'IdContent', 'required');
    $this->form_validation->set_rules('Auteur', 'Auteur', 'required');
    $this->form_validation->set_rules('Description', 'Description', 'required');
    $this->form_validation->set_rules('DatePublication', 'DatePublication', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('rechauffement-climatique/edit/'.$id));
        }else{ 
          $this->itemCRUD->update_item($id);
          redirect(base_url('rechauffement-climatique/Home'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       var_dump($id);
       $item = $this->itemCRUD->delete_item($id);
       redirect(base_url('rechauffement-climatique/Home'));
   }

   public function goLien(){
    $this->load->view('Test');
   }





   /*eto */
public function addnew(){
    $this->load->view('Back-Office/create');
}

public function insert(){
    $user['username'] = $this->input->post('username');
    $user['password'] = $this->input->post('password');
    $user['fname'] = $this->input->post('fname');
    $user['username'] = $this->input->post('username');
    $user['password'] = $this->input->post('password');
    $user['fname'] = $this->input->post('fname');
    
    $query = $this->users_model->insertuser($user);

    if($query){
        header('location:'.base_url().$this->index());
    }

}

public function edits($id){
    $data['user'] = $this->users_model->getUser($id);
    $this->load->view('editform', $data);
}

public function updates($id){
    $user['username'] = $this->input->post('username');
    $user['password'] = $this->input->post('password');
    $user['fname'] = $this->input->post('fname');

    $query = $this->users_model->updateuser($user, $id);

    if($query){
        header('location:'.base_url().$this->index());
    }
}

public function deletes($id){
    $query = $this->users_model->deleteuser($id);

    if($query){
        header('location:'.base_url().$this->index());
    }
} 
}