<?php


class Crud extends CI_Controller {

    public function index()
    {
        $data['item'] = $this->Crud_model->get_all_items();
        $data['shops'] = $this->Crud_model->get_all_shops();
        $this->load->view('crud_view' , $data);
    }

    

}

// class Crud extends CI_Controller {

//     public function index()
//     {
//         $data['shops'] = $this->Crud_model->get_all_shops();
//         $this->load->view('crud_view' , $data);
//     }
// }











?>