<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 * Time: 9:39 PM
 */

class Site extends CI_Controller {
    
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
}

?>
