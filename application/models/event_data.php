<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_data extends CI_Model {
    
    function addEvent($data)
    { 
        $this->db->insert('event', $data);
    }

    function show($limit, $start)
    {
        return $this->db->get('event', $limit, $start)->result_array();
    }

    function countAllEvent(){
        return $this->db->get('event')->num_rows();
    }

    function deleteData($id){
        return $this->db->delete('event', array('id' => $id));
    }

}