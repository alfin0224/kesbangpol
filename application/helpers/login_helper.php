<?php

function check_if_role_is($role_id)
{
	$ci =&get_instance(); // mengganti $this dalam function obj kelas boleh pake $This udah dalam function itu tidak boleh.
	if (!is_null($ci->session->userdata('id_role'))) {
		$current_role = $ci->session->userdata('id_role');
		if ($current_role == $role_id) {
			return true;
		}
	}
	return false;
}