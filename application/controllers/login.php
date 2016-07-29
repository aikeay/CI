<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 */

class Login extends CI_Controller{

    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }

    function validate_credentials()
    {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();

        if($query) // if the user's credentials validated...
        {
            $user = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );

            $this->session->set_userdata($user);
            redirect('site/members_area', $user);

        }
        else
        { // not validated
            $this->index();
        }
    }

    function signup()
    {
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
    }

    function create_member()
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules

        $this->form_validation->set_rules('first_name', 'Name' , 'trim|required');
        $this->form_validation->set_rules('last_name', ' Last Name' , 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address' , 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username' , 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password' , 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmatin' , 'trim|required|matches[password]');

        if ($this->form_validation->run() == false)
        {
            $this->signup();
        }
        else
        {
            $this->load->model('membership_model');
            if($query = $this->membership_model->create_member())
            {
                redirect('site/members_area');
            }
            else
            {
                $this->load->view('signup_form');
            }
        }
        function signout()
        {
            $data['main_content'] = 'login_form';
            $this->load->view('includes/template', $data);
        }            

    }
}