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

	class AboutDetail extends CI_Model
	{

		public
			$table = 'abouts';

		public function getDetail( $limit = 0, $offset = 0 )
		{
			return $this->db->get( 'abouts', $limit, $offset );
		}


		public function updateDetail($id) 
		{
			$data=array(
				'time' => time(),
				'content'=> $this->input->post('txtDescription')
			);
			if($id==0){
				return $this->db->insert('abouts',$data);
			}else{
				$this->db->where('id',$id);
				return $this->db->update('abouts',$data);
			}        
		}
	}
