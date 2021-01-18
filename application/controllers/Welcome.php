<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogin')) redirect(base_url("auth/login"));
        if ($this->session->userdata('scope') != 'admin') {
            $this->session->sess_destroy();
            redirect(base_url("auth/login"));
        }
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $data = $this->http_request_get($this->BASE_URL."report", [], [])->data;
        $this->parseData['title_budge'] = 'Dashboard';
        $this->parseData['title_tab'] = 'Dashboard';
        $this->parseData['content'] = 'content/index';
        $this->parseData['product'] = $data->products;
        $this->parseData['order'] = $data->order;
        $this->parseData['category'] = $data->category;
        $this->parseData['transaction'] = $data->transaction;
        $this->load->view('index', $this->parseData);
	}
}
