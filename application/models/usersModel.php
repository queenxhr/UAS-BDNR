<?php defined('BASEPATH') OR exit('No direct script access allowed'); class Usersmodel extends CI_Model { function insertUsers() { $data = array( 'username' => $this->input->post('username'), 
                    'phone'     => $this->input->post('phone'),
                    'unik'        => $this->input->post('unik') 
                    );
 
        $this->mongo_db->insert('users', $data);
        return true; 
 
    }
 
}
 
/* End of file usersmodel.php */
/* Location: ./application/models/usersmodel.php */