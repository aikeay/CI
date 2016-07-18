<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 * Time: 9:39 PM
 */

class Site extends CI_Controller {

    //function __construct()
   // {
     //   parent::CI_Controller('');
     //   $this->is_logged_in();
    //}
    function display($year = null, $month = null){

        $this->load->model('mycal_model');
        $cal['calendar'] = $this->mycal_model->generate($year, $month);

        $data['main_content'] = 'mycal';
        $this->load->view('mycal', $cal);
    }

    function members_area()
    {
        
        $data['main_content'] = 'members_area';
        $this->load->view('includes/template', $data);

    }




    
    //function is_logged_in()
    //{
      //  $is_logged_in = $this->session->userdate('is_logged_in');

        //if(!isset($is_logged_in) || $is_logged_in != true)
       // {
        //    echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
         //   die();
       // }
    //}
}

?>
