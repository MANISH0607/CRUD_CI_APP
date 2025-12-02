<?php


class Crud extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
    }

    // DISPLAY ALL ITEMS ///////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
        $data['item'] = $this->Crud_model->get_all_items();

        // $data['shops'] = $this->Crud_model->get_all_shops();
        $this->load->view('crud_view', $data);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   

///////INSERT ITEM FUNCTION/////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function addItem()
    {

        $this->form_validation->set_rules('name', 'Item Name', 'trim|required');
        $this->form_validation->set_rules('price', 'Item Price', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Item Quantity', 'trim|required');


        if ($this->form_validation->run() == false){


            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } 
        
        else {

            $result = $this->Crud_model->insertItem([

                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity')
            ]);

            if ($result){

                $this->session->set_flashdata('success', 'Your item has been successfully added!');
            }
        }
        redirect('crud');
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////EDIT ITEM FUNCTION/////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   public function editItem($id){
     // echo "edit item called".$id;
     
    $data['singleItem'] = $this->Crud_model->getSingleItem($id);

    $this->load->view('edit_item', $data);

}

    public function update($id){
   // echo "update item called".$id;

        $this->form_validation->set_rules('name', 'Item Name', 'trim|required');
        $this->form_validation->set_rules('price', 'Item Price', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Item Quantity', 'trim|required');


        if ($this->form_validation->run() == false){


            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } 
        
        else {

            $result = $this->Crud_model->updateItem([

                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity')

            ], $id);

            if($result){

                $this->session->set_flashdata('updated', 'Your item has been successfully updated!');
            }
        }
        redirect('crud');
}

////////////DELETE ITEM FUNCTION/////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function deleteItem($id){

    // echo "delete item called".$id;

    $result = $this->Crud_model->deleteItem($id);
    if($result){

        $this->session->set_flashdata('deleted', 'The item has been deleted!');
    }
    redirect('crud');

}
}
?>
