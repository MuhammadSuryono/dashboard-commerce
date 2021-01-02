<?php

class My_Controller extends CI_Controller
{
    public $BASE_URL;
    function __construct()
    {
        parent::__construct();
        $this->set_base_url('development');
    }

    public $parseData = [
        'navbar' => 'parts/navbar',
        'sidebar' => 'parts/sidebar',
        'modal' => 'parts/modal',
        'content' => 'errors/error',
        'footer' => 'parts/footer',
        'javascript' => array(),
        'css' => array(),
        'isLogin' => true,

        'title_budge' => 'Not Found!',
        'title_tab' => 'Not Found!'
    ];

    /***
     * @param array $body
     * @param $url
     * @param array $header
     * @return mixed
     */
    public function http_request_post($url, $body = [], $header = []) {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];


        if(!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        curl_close($crl);

        return json_decode($result);
    }

    /***
     * @param array $body
     * @param $url
     * @param array $header
     * @return mixed
     */
    public function http_request_get($url, $body = [], $header = []) {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];


        if(!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        curl_close($crl);

        return json_decode($result);
    }

    private function base_url(string $environment)
    {
        switch ($environment)
        {
            case 'development':
                return 'http://localhost:7000/api/v1/';
            default :
                return '';
        }
    }
    
    private function set_base_url(string $environment)
    {
        $this->BASE_URL = $this->base_url($environment);
    }
}
