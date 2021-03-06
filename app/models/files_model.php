<!--Elimarie Morales Santiago-->
<!--Advanced Server-Side Languages - Online-->
<!--Professor Orcun Tagtekin-->
<?php
class Files_Model extends CI_Model {

    public function insert_file($filename, $title)
    {
        $data = array(
        'filename'      => $filename,
        'title'         => $title
        );
        $this->db->insert('files', $data);
        return $this->db->insert_id();
    }

    public function get_files($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('files');
        return $query->row();

    }
}