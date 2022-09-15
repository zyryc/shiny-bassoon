<?php

class UserModel extends CI_Model {
    //get all users
    public function getAll() {
        $this->db->select('*');
        $this->db->from('users');
        // $this->db->join('user_profiles', 'users.id = user_profiles.user_id');
        $this->db->order_by('users.id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    //get user by id
    public function getDataById($id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    //insert user
    public function insert($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
    //update user
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }
    //delete user
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return true;
    }
    //change status of user
    public function changeStatus($id) {
        $this->db->where('id', $id);
        $this->db->update('users', array('status' => 'activated'));
        return true;
    }
    // change role of user
    public function changeRole($id,$role) {
        $this->db->where('id', $id);
        $this->db->update('users', array('role' => $role));
        return true;
    }


}
