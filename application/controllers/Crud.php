<?php


class Crud extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['item'] = $this->Crud_model->get_all_items();

        // $data['shops'] = $this->Crud_model->get_all_shops();
        $this->load->view('crud_view', $data);
    }

    public function addItem()
    {

        $this->form_validation->set_rules('name', 'Item Name', 'trim|required');
        $this->form_validation->set_rules('price', 'Item Price', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Item Quantity', 'trim|required');


        if ($this->form_validation->run() == false) {


            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } else {

            $data = [

                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity')
            ];

            $this->Crud_model->insertItem($data);
        }
        redirect('crud');
    }
}
