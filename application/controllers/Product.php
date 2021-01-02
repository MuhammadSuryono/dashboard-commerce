<?php


class Product extends My_Controller
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
        array_push($this->js, base_url().'assets/js/product.js');


        array_push($this->css, base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');
        array_push($this->css, base_url().'assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');
        array_push($this->css, base_url().'assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');
    }

    public function index()
    {
        $data = $this->http_request_get($this->BASE_URL.'product');
        $category = $this->http_request_get($this->BASE_URL.'category');
        $this->parseData['title_budge'] = 'Product';
        $this->parseData['title_tab'] = 'Product';
        $this->parseData['content'] = 'content/product/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['products'] = $data;
        $this->parseData['categories'] = $category->data;
        $this->load->view('index', $this->parseData);
    }

    public function create()
    {
        $code = $this->input->post('product_code');
        $name = $this->input->post('product_name');
        $category = $this->input->post('product_category');
        $price = $this->input->post('price');
        $stock = $this->input->post('stock');
        $unit = $this->input->post('unit');
        $weight = $this->input->post('weight');
        $color = $this->input->post('color');
        $description = $this->input->post('description');
        $filename = "";
        
        $configUpload['upload_path']    = './assets/images_product/';                 #the folder placed in the root of project
        $configUpload['allowed_types']  = 'gif|jpg|png|bmp|jpeg';       #allowed types description
        $configUpload['max_size']       = '0';                          #max size
        $configUpload['max_width']      = '0';                          #max width
        $configUpload['max_height']     = '0';                          #max height
        $configUpload['encrypt_name']   = true;                         #encrypt name of the uploaded file
        $this->load->library('upload', $configUpload);
        if(!$this->upload->do_upload('images')){
            $uploadedDetails    = $this->upload->display_errors();
        }else{
            $uploadedDetails    = $this->upload->data();   
            $filename = $uploadedDetails['file_name']; 
        }

        $body = [
            "item_name" => $name,
            "item_code" => $code,
            "category_id" => $category,
            "stock" => $stock,
            "color" => $color,
            "unit" => $unit,
            "price" => $price,
            "weight" => $weight,
            "description" => $description,
            "images" => $filename,
        ];

        $reqPost = $this->http_request_post($this->BASE_URL.'product', $body);

        echo json_encode($reqPost);
    }
}