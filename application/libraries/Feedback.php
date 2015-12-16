<?php

/*
 * TODO: More than one feedback
 */
class Feedback
{
    function set($message)
    {
        $CI =& get_instance();
        $CI->session->set_flashdata('output', $message);
        return true;
    }

    function get()
    {
        $CI =& get_instance();
        $output = $CI->session->flashdata('output');
        if (isset($output)) {
            return $output;
        } else {
            return false;
        }
    }
}