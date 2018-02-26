<?php 
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Admin_dinas extends MY_Controller {

	public function __construct() {

		parent::__construct();

	}

	public function index() {

		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin/dashboard';
		$this->template( $this->data );

	}

	public function monster_lite() {

		redirect( base_url( 'assets/monster-lite' ) );

	}

}