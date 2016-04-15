<?php
/**
*
* @package Application Form
* @copyright (c) 2016 Ather
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace ather\applicationform\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\auth\auth */
	protected $auth;

	public function __construct(
		\phpbb\controller\helper $helper,
		\phpbb\template\template $template,
		\phpbb\user $user,
		\phpbb\auth\auth $auth)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
		$this->auth = $auth;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'	=> 'page_header',
			'core.user_setup'	=> 'application_lang'
			);
	}

	public function application_lang($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'ather/applicationform',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;

	}

	public function page_header($event)
	{
		$this->template->assign_var('U_APP_FORM', $this->helper->route('ather_applicationform_displayform'));
	}
}
