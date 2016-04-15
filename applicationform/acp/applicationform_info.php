<?php
/**
*
* @package Application Form
* @copyright (c) 2016 Ather
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace ather\applicationform\acp;

class applicationform_info
{
	function module()
	{
		return array(
			'filename'	=> '\ather\applicationform\acp\applicationform_module',
			'title'	=> 'ACP_APP_FORM',
			'version'	=> '1.0.0',
			'modes'	=> array(
				'settings'	=> array('title' => 'ACP_APP_FORM', 'auth' => 'ext_ather/applicationform && acl_a_board', 'cat' => array('ACP_APP_FORM')),
			),
		);
	}
}
