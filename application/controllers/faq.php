<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	// Deprecated 
	public function index()
	{
		$this->lists();
	}
	
	
	public function lists()
	{
		$this->load->model('Faq_model', 'faq');
		
		$uri_assoc 	= $this->uri->uri_to_assoc();
		$page = empty($uri_assoc['page'])?"1":$uri_assoc['page'];
		
		$page_limit = 10;
		$page = $page - 1;
		
		$faqdata = $this->faq->find_all($page, $page_limit);
		
		$pagination_config['base_url'] 			= base_url() . 'index.php/faq/lists/page/';
		$pagination_config['total_rows'] 		= $this->faq->page_total();
		$pagination_config['per_page'] 			= $page_limit; 
		$pagination_config['uri_segment']		= 4; 
		$pagination_config['use_page_numbers'] 	= TRUE;
		
		$this->load->library('pagination');
		$this->pagination->initialize($pagination_config); 
		
		$this->smarty->assign("pageBar", 		$this->pagination->create_links() );
		
		$this->smarty->assign("faqdata", 		$faqdata );
			
		$this->smarty->view( 'faq_list.html' );
	}
	
	public function edit()
	{
		$this->load->model('Faq_model', 'faq');
		
		$post_data = $this->input->post();
		
		$uri_assoc 	= $this->uri->uri_to_assoc(1);
		$faq_id = isset($uri_assoc['id'])?$uri_assoc['id']:"";
		
		// combie way add, update
		if($post_data) {
			
			$faq_id = $post_data['id'];
			
			if($faq_id) {
				
				$faq_data['faq_title'] 			= $post_data['title'];
				$faq_data['faq_description'] 	= $post_data['description'];
				$faq_data['faq_solution'] 		= $post_data['solution'];
				$faq_data['faq_status'] 		= $post_data['status']; // waiting, closed, cancel
				
				$this->faq->update($faq_id, $faq_data);
				
				redirect(base_url()."index.php/faq/edit/id/".$faq_id); exit;
			} else {
			
				// need validation
				
				$faq_data['faq_title'] 			= $post_data['title'];
				$faq_data['faq_description'] 	= $post_data['description'];
				$faq_data['faq_solution'] 		= $post_data['solution'];
				$faq_data['faq_status'] 		= $post_data['status']; // waiting, closed, cancel

				$faq_id = $this->faq->add($faq_data);
				
				redirect(base_url()."faq/edit/id/".$faq_id); exit;
			}
		}
		
		$faq_data = $this->faq->get($faq_id);
		$this->smarty->assign("faq_data", 		$faq_data );
		
		$this->smarty->assign("faq_id", 		$faq_id );
		
		$this->smarty->view( 'faq_edit.html' );
	}

	// Deprecated 
	public function add()
	{
		$this->load->model('Faq_model', 'faq');
		
		$post_data = $this->input->post();
		
		// need validation
		
		$faq_data['faq_title'] 			= $post_data['title'];
		$faq_data['faq_description'] 	= $post_data['description'];
		$faq_data['faq_solution'] 		= $post_data['solution'];
		$faq_data['faq_status'] 		= $post_data['status']; // waiting, closed, cancel

		$this->faq->add($faq_data);

		redirect(base_url()."index.php"); exit;
	}
	
	public function remove()
	{
		$this->load->model('Faq_model', 'faq');
		
		$this->faq->remove($faq_id);
		
		redirect(base_url()."index.php"); exit;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */