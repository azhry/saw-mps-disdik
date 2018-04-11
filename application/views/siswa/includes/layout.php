<?php

	$this->load->view($module . '/includes/header', array('title' => $title));
	$this->load->view($module . '/includes/navbar');
	$this->load->view($module . '/includes/sidebar');
	$this->load->view($content);

	if (!isset($page_script)) $page_script = '';

	$this->load->view($module . '/includes/footer', array('page_script' => $page_script));
?>
