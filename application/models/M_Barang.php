<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Barang extends CI_Model
{
	public function get_databarang()
	{
		$sql = "SELECT * FROM `tbl_barang` ORDER BY id ASC";
		$query = $this->db->query($sql);
		$data = $query->result();
		$data_list=array();
		
		$i=1;
		foreach($data as $dt){
			$data_list[$i]=array(
				"id" => $dt->id,
				"nm_brg" => $dt->nm_brg,
				"jml" => $dt->jml,
				"merk" => $dt->merk
			);
			$i++;
		}
		return $data_list;
	}

}

?>