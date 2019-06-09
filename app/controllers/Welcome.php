<?php
	/**
	 *
	 * Description
	 *
	 * @package        Melio
	 * @category       Source
	 * @author         Michael Akanji <matscode@gmail.com>
	 * @date           2017-07-05
	 * @copyright (c)  2016 - 2017, TECRUM (http://www.tecrum.com)
	 *
	 */
	defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

	class Welcome extends CI_Controller
	{

		public function index()
		{
			// $data = array('content'=>$this->UsersModel->getUserDetail());
			// $data = array('content'=>'intro');
			// $views = [
			// 	'Welcome.Index'
			// ];

			// $this
			// 	->Template
			// 	->setTitle( "Home" )
			// 	->render( $views, $data );

			$data = array('content'=>'intro');
			$this->load->view('Template/default.tpl.php',$data);
		}

		public function Intro()
		{
			$data = array('content'=>'intro');
			$this->load->view('Welcome/Intro',$data);
		}

		public function About()
		{
			$data = array('content'=>'about');
			$this->load->view('Welcome/About',$data);
		}

		public function Awards()
		{
			$data = array('content'=>'Awards');
			$this->load->view('Welcome/Awards',$data);
		}

		public function Contact()
		{
			$data = array('content'=>'Contact');
			$this->load->view('Welcome/Contact',$data);
		}

		public function Education()
		{
			$data = array('content'=>'Education');
			$this->load->view('Welcome/Education',$data);
		}

		public function Experience()
		{
			$data = array('content'=>'Experience');
			$this->load->view('Welcome/Experience',$data);
		}

		public function Projects()
		{
			$data = array('content'=>'Projects');
			$this->load->view('Welcome/Projects',$data);
		}

		public function Skills()
		{
			$data = array('content'=>'Skills');
			$this->load->view('Welcome/Skills',$data);
		}
	}
