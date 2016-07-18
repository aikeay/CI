<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 * Date: 7/17/16
 * Time: 10:19 AM
 */

class Site2 extends CI_Controller
{

    function index()
    {

        $data = array();

        if ($query = $this->site_model->get_records()) {
            $data['records'] = $query;
        }
        $this->load->view('options_view', $data);
    }

    function create()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('author'),
        );

        $this->site_model->add_record($data);
        $this->index();
    }

    function update()
    {
        $data = array(
            'title' => "My Freshly UPDATED Title",
            'content' => "Content should go here; it is updated.",
            'author' => 'Cory Keay',
        );

        $this->site_model->update_record($data);
        $this->index();
    }

    function delete()
    {
        $this->site_model->delete_row();
        $this->index();
    }

}