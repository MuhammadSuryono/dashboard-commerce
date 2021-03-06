<?php


class Category extends My_Controller
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
        array_push($this->js, base_url().'assets/js/category.js');

        array_push($this->css, base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');
        array_push($this->css, base_url().'assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');
        array_push($this->css, base_url().'assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');

    }

    public function index()
    {
        $data = $this->http_request_get($this->BASE_URL.'category');
        $this->parseData['title_budge'] = 'Category';
        $this->parseData['title_tab'] = 'Category';
        $this->parseData['content'] = 'content/category/index';
        $this->parseData['javascript'] = $this->js;
        $this->parseData['css'] = $this->css;
        $this->parseData['categories'] = $data;
        $this->load->view('index', $this->parseData);
    }

    public function create()
    {
        $category_name = $this->input->post('category_name');
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
		
		
        $body = ["category_name" => $category_name, "category_image" => $filename];
        $reqPost = $this->http_request_post($this->BASE_URL.'category', $body);
        if ($reqPost->status)
        {
            redirect('category');
        }else{
			var_dump($reqPost);
		}
    }

    public function update()
    {
        $category_name = $this->input->post('category_name');
        $id = $this->input->post('category_id');
        $filename = "";

        $configUpload['upload_path']    = './assets/images_product/';                 #the folder placed in the root of project
        $configUpload['allowed_types']  = 'gif|jpg|png|bmp|jpeg';       #allowed types description
        $configUpload['max_size']       = '0';                          #max size
        $configUpload['max_width']      = '0';                          #max width
        $configUpload['max_height']     = '0';                          #max height
        $configUpload['encrypt_name']   = true;                         #encrypt name of the uploaded file
        $this->load->library('upload', $configUpload);
        if(!$this->upload->do_upload('images')){
            $body = ["category_name" => $category_name, "id" => $id];
            $reqPost = $this->http_request_post($this->BASE_URL.'category/update', $body);
            if ($reqPost->status)
            {
                redirect('category');
            }else{
                var_dump($reqPost);
            }
        }else{
            $uploadedDetails    = $this->upload->data();
            $filename = $uploadedDetails['file_name'];
            $body = ["category_name" => $category_name, "category_image" => $filename, "id" => $id];
            $reqPost = $this->http_request_post($this->BASE_URL.'category', $body);
            if ($reqPost->status)
            {
                redirect('category');
            }else{
                var_dump($reqPost);
            }
        }
    }

    public function list()
    {
        $data = $this->http_request_get($this->BASE_URL.'category');
        echo json_encode($data);
    }
}