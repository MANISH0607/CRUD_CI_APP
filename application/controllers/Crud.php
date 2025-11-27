<?php


class Crud extends CI_Controller {

    public function index()
    {
        $data['item'] = $this->Crud_model->get_all_items();
        $this->load->view('crud_view' , $data);
    }
}












?>