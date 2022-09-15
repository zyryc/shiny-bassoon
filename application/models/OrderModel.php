<?php
class OrderModel extends CI_Model
{
    //get all orders
    public function getAll($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                $query = $this->db->get('orders');
                return $query->result_array();
        }

        $query = $this->db->get_where('orders', array('slug' => $slug));
        return $query->row_array();
    }
    public function get_by_id($id = FALSE)
    {

        $query = $this->db->get_where('orders', array('id' => $id));
        return $query->row_array();
    }
    public function create_order($data)
    {
        $save = $this->db->insert('orders', $data);
        return $save;
        
    }
    public function get_orders($user_id)
    {
        $this->db->select('*');
        $this->db->from('orders');
        // $this->db->join('users', 'users.id = orders.user_id');
        $this->db->where('orders.user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function delete_order($slug)
    {
        $this->db->where('slug', $slug);
        $this->db->delete('orders');
    }
    public function update_order($data, $slug)
    {
        $this->db->where('slug', $slug);
        return $this->db->update('orders', $data);
    }
    public function cancel($id)
    {
        $this->db->where('id', $id);
        $this->db->update('orders', array('status' => 'cancelled'));
    }
}
