<?php
  class Pages extends MY_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('url');
      if( ! ini_get('date.timezone') )
      {
         date_default_timezone_set('GMT');
      } 

    }
    public function view($page='home')
    {
      if(!file_exists('application/views/pages/'.$page.'.php'))
      {
        echo "Sorry, file does not exist";
      }
      else
      {

        $data['title']=ucfirst($page);
        $this->load->helper('url');
        $this->load->helper('html');
        $this->content = $page;
        $this->layout();
      }
    }
    public function sendemail() {

      $data = $this->input->post();
      // print_r($data);

      $this->load->library('email');
      $config = array();
      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'mail.quickredcargo.com';
      $config['smtp_user'] = 'admin@quickredcargo.com';
      $config['smtp_pass'] = 'P@$$w0rd1';
      $config['smtp_port'] = '25';
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");

      $this->email->from('admin@quickredcargo.com');
      $this->email->to($data['email']);
      $this->email->subject($data['subject']);
      $this->email->message($data['message']);
      if($this->email->send()){
        $this->session->set_flashdata('success', 'Email Sent Successfully');
        redirect(site_url() . "contact");
      }
      else {
        echo "failed";
      }
    }
  }
?>