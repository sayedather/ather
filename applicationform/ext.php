<?php
/**
*
* @package Application Form
* @copyright (c) 2016 Ather
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace ather\applicationform;

/**
* Extension class for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	/**
	 * Enable extension if phpBB version requirement is met
	 *
	 * @return bool
	 * @access public
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.1.3', '>=');
	}
}
