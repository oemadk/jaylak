<?php
class ControlleragentLogout extends Controller {


	public function index() {


		if ($this->agent->isLogged()) {


			$this->agent->logout();





			unset($this->session->data['shipping_address']);


			unset($this->session->data['shipping_method']);


			unset($this->session->data['shipping_methods']);


			unset($this->session->data['payment_address']);


			unset($this->session->data['payment_method']);


			unset($this->session->data['payment_methods']);


			unset($this->session->data['comment']);


			unset($this->session->data['order_id']);


			unset($this->session->data['coupon']);


			unset($this->session->data['reward']);


			unset($this->session->data['voucher']);


			unset($this->session->data['vouchers']);


			$this->response->redirect($this->url->link('agent/logout', '', true));


		}





		$this->load->language('agent/logout');


		$this->document->setTitle($this->language->get('heading_title'));





		$data['breadcrumbs'] = array();





		$data['breadcrumbs'][] = array(


			'text' => $this->language->get('text_home'),


			'href' => $this->url->link('common/home')


		);





		$data['breadcrumbs'][] = array(


			'text' => $this->language->get('text_register'),


			'href' => $this->url->link('agent/agentsignup', '', true)


		);





		$data['heading_title']   = $this->language->get('heading_title');


		$data['text_message']    = $this->language->get('text_message');


		$data['button_continue'] = $this->language->get('button_continue');


		$data['continue']        = $this->url->link('agent/login');


		$data['column_left']     = $this->load->controller('common/column_left');


		$data['column_right']    = $this->load->controller('common/column_right');


		$data['content_top']     = $this->load->controller('common/content_top');


		$data['content_bottom']  = $this->load->controller('common/content_bottom');


		$data['footer']          = $this->load->controller('common/footer');


		$data['header']          = $this->load->controller('common/header');


		$this->response->setOutput($this->load->view('common/success', $data));


	}


}