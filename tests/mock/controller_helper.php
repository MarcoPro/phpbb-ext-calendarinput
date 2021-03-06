<?php
/**
*
* phpBB Extension - Acme Demo
* @copyright (c) 2014 - 2016 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace acme\demo\tests\mock;

/**
* Controller helper Mock
* phpBB3
*/
class controller_helper extends \phpbb\controller\helper
{
	public function __construct()
	{
	}

	public function route($route, array $params = [], $is_amp = true, $session_id = false)
	{
		return $route . '#' . serialize($params);
	}

	public function error($message, $code = 500)
	{
		return new \Symfony\Component\HttpFoundation\Response($message, $code);
	}

	public function render($template_file, $page_title = '', $status_code = 200, $display_online_list = false)
	{
		return new \Symfony\Component\HttpFoundation\Response($template_file, $status_code);
	}
}
