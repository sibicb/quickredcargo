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
      $config['smtp_host'] = 'sg2plcpnl0002.prod.sin2.secureserver.net';
      $config['smtp_user'] = 'quickredcargo';
      $config['smtp_pass'] = 'P@$$w0rd123';
      $config['smtp_port'] = '465';
      $config['charset']    = 'utf-8';
      $config['protocol'] = 'sendmail';
      $config['mailpath'] = '/usr/sbin/sendmail';
      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = TRUE;
      $config['mailtype'] = 'text'; // or html
      $config['validation'] = TRUE; // bool whether to validate email or not
      $this->email->initialize($config);
      $this->email->set_newline("\r\n");

      $this->email->to('admin@quickredcargo.com');
      $this->email->from($data['email'], $data['name']);
      $this->email->subject($data['subject']);
      $this->email->message($data['message']);
      //$this->email->send();
     // echo $this->email->print_debugger();

      if($this->email->send()){
      	//<script>alert('Email sent successfully!');</script>  
        $this->session->set_flashdata('success', 'Email Sent Successfully');
      	//redirect(base_url() . "quickredcargo/contact");
      	$link = base_url() . "quickredcargo/contact";
      	echo "<script>javascript:alert('Email sent successfully!'); window.location = '".$link."'</script>";

      	}
  //    else {
    //    echo "failed";
      //  echo $this->email->print_debugger();
      //}
    }
  }
?>