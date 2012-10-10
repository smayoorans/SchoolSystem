<?php
/**
 * @package     School Management
 * @subpackage  Admin 
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Gnanakeethan Balasubramaniam <gnanakeethan@gmail.com> - 
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_school')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JController::getInstance('School');

$controller->execute(JRequest::getCmd('task'));

$controller->redirect();
