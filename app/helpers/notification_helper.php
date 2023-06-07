<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

/**
 * Set an alert message on your controller using set_flash_alert() function.
 */
if (!function_exists('set_flash_alert')) {
	function set_flash_alert($alert, $message)
	{
		$LAVA = &lava_instance();
		$LAVA->session->set_flashdata(array('alert' => $alert, 'message' => $message));
	}
}

/**
 * Display the alert message in your view using flash_alert() function.
 */
if (!function_exists('flash_alert')) {
	function flash_alert()
	{
		$LAVA = &lava_instance();
		if ($LAVA->session->flashdata('alert') !== NULL) {
			echo '<div class="alert alert-' . $LAVA->session->flashdata('alert') . ' alert-dismissible fade show mb-2" role="alert">
                            ' . $LAVA->session->flashdata('message') . '
                            <!--a href="event-details.html" class="btn btn-xs btn-success mt-2 mt-md-0 ms-md-4">View event</a-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
		}
	}
}
