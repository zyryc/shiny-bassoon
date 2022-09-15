<?php

class PostModel extends CI_Model {

    /*
    return all Posts.
    created by your name
    created at 18-03-22.
    */
    public function getAll() {
        return $this->db->get('post')->result();
    }
    /*
    function for create Post.
    return Post inserted id.
    created by your name
    created at 18-03-22.
    */
    public function insert($data) {
        $this->db->insert('post', $data);
        return $this->db->insert_id();
    }
    /*
    return Post by id.
    created by your name
    created at 18-03-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('post')->result();
    }
    /*
    function for update Post.
    return true.
    created by your name
    created at 18-03-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('post', $data);
        return true;
    }
    /*
    function for delete Post.
    return true.
    created by your name
    created at 18-03-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('post');
        return true;
    }
    /*
    function for change status of Post.
    return activated of deactivated.
    created by your name
    created at 18-03-22.
    */
    public function changeStatus($id) {
        $table=$this->getDataById($id);
             if($table[0]->status==0)
             {
                $this->update($id,array('status' => '1'));
                return "Activated";
             }else{
                $this->update($id,array('status' => '0'));
                return "Deactivated";
             }
    }

}