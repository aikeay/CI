<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 */

class Mycal_model extends CI_Model{

    function generate($year, $month){

        $conf = array(
            'start_day' => 'monday',
            'show_next_prev' => TRUE,
            'next_prev_url' => base_url() . 'site/display'
        );
       $event = array(
            3  => 'Homework week 1 due',
            7  => 'doctors appointment @ 2',
            10  => 'Homework week 2 ',
            13 => 'Final assignemnt Due',
            20 => 'Homework Due week 3',
            26 => 'Doctors appointment @ 2'

        );

        $this->load->library('calendar', $conf);
        return $this->calendar->generate($year, $month, $event);
    }
}