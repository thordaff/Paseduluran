<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Model {

    function show()
    {
        return $this->db->get('event')->result_array();
    }

}