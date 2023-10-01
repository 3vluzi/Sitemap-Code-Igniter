<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sitemap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sitemap_model', 'sitemap');
    }
    public function index()
    {

        $this->load->view('sitemap/index', $data);
    }
    public function another()
    {
        $post = $this->sitemap->get_all_another();
        $data = [
            'post'   => $post
        ];
        $this->load->view('sitemap/another', $data);
    }
}
