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

    function edit(){
        return $this->db->get('event')->result_array();
    }

    function updateEvent($data){
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('event', $data);
    }
    
    function countAllEvent(){
        return $this->db->get('event')->num_rows();
    }

    function deleteData($id){
        return $this->db->delete('event', array('id' => $id));
    }

}