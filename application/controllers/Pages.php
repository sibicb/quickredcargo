<?php
  class Pages extends MY_Controller
  {
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
  }
?>