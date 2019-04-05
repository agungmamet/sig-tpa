<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Admin_model extends CI_Model
{
	public function admin()
    {
        $data=$this->db->query("SELECT * FROM administrator");
        return $data->result();
    }

    public function hitungdata()
    {
		$data= $this->db->query("SELECT count(*) as count FROM administrator");
        return $data->row(); 
    }

    public function tambah_admin($data)
    {
        $this->db->insert('administrator',$data);
    }

    public function create_user($nama, $username, $password, $hakakses) 
    { 
        $data = array( 
            'nama_admin' => $nama,
            'username' => $username,
            'password' => $this->hash_password($password),
            'hak_akses' => $hakakses
        ); 
        return $this->db->insert('administrator', $data); 
    } 

    private function hash_password($password) 
    { 
        return password_hash($password, PASSWORD_BCRYPT); 
    } 

    public function edit_admin($id)
    {       
        $data = $this->db->query("SELECT * FROM administrator where id_admin = $id");
        return $data->result();
    }
    public function update_admin($where,$data,$table)
    {       
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_admin($id)
    {
        $this->db->where('id_admin',$id);
        $this->db->delete('administrator');
    }
}