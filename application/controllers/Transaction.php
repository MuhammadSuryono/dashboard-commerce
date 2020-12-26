<?php


class Transaction extends My_Controller
{
    protected $js = array();
    protected $css = array();

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLogin')) redirect(base_url("auth/login"));
        if ($this->session->userdata('scope') != 'admin') {
            $this->session->sess_destroy();
            redirect(base_url("auth/login"));
        }

        array_push($this->js, base_url().'assets/plugins/datatables/jquery.dataTables.min.js');
        array_push($this->js, base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');
        array_push($this->js, base_url().'assets/plugins/datatables-responsive/js/dataTables.responsive.min.js');
        array_push($this->js, base_url().'assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');
        array_push($this->js, base_url().'assets/plugins/datatables-buttons/js/dataTables.buttons.min.js');
        array_push($this->js, base_url().'assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js');
        array_push($this->js, base_url().'assets/plugins/jszip/jszip.min.js');
        array_push($this->js, base_url().'assets/plugins/pdfmake/pdfmake.min.js');
        array_push($this->js, base_url().'assets/plugins/pdfmake/vfs_fonts.js');
        array_push($this->js, base_url().'assets/plugins/datatables-buttons/js/buttons.html5.min.js');
        array_push($this->js, base_url().'assets/plugins/datatables-buttons/js/buttons.print.min.js');
        array_push($this->js, base_url().'assets/plugins/datatables-buttons/js/buttons.colVis.min.js');
        array_push($this->js, base_url().'assets/dist/js/custom_table.js');

        array_push($this->css, base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');
        array_push($this->css, base_url().'assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');
        array_push($this->css, base_url().'assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');
    }

    public function index()
    {
        $data = $this->http_request_get($this->BASE_URL.'transactions');
        $this->parseData['title_budge'] = 'Transactions';
        $this->parseData['title_tab'] = 'Transactions';
        $this->parseData['content'] = 'content/transaction/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['transactions'] = $data->data;
        $this->load->view('index', $this->parseData);
    }
}