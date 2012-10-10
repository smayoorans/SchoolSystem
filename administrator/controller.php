<?php
/**
 * @package     School Management
 * @subpackage  Admin Controller
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Gnanakeethan Balasubramaniam <gnanakeethan@gmail.com> - 
 */

// No direct access
defined('_JEXEC') or die;

class SchoolController extends JController
{
	/**
	 * Method to display a view.
	 *
	 * @param	boolean			$cachable	If true, the view output will be cached
	 * @param	array			$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return	JController		This object to support chaining.
	 * @since	1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		require_once JPATH_COMPONENT.'/helpers/school.php';

		// Load the submenu.
		SchoolHelper::addSubmenu(JRequest::getCmd('view', 'administration'));

		$view		= JRequest::getCmd('view', 'administration');
        JRequest::setVar('view', $view);

		parent::display();

		return $this;
	}
}
