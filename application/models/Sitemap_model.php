<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sitemap_model extends CI_Model
{
    public $id = 'id';
    public $order = 'DESC';
    function __construct()
    {
        parent::__construct();
    }

    function get_all_another()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get('tbl_another')->result();
    }
}
