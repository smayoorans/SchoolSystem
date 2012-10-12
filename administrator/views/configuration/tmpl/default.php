<?php
/**
 * @package     School Management
 * @subpackage  Admin Edit Config
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Gnanakeethan Balasubramaniam <gnanakeethan@gmail.com> - 
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.switcher');

$this->document->setBuffer($this->loadTemplate('navigation'), 'modules', 'submenu');
// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_school/assets/css/school.css');

 $new=JSubMenuHelper::addEntry('configuration', 'index.php?option=com_school&view=configuration',true);
 $new2=JSubMenuHelper::addEntry('configuration', 'index.php?option=com_school&view=configuration',true);
 
 echo $new2,$new;
 
 
 
 ?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'configuration.cancel' || document.formvalidator.isValid(document.id('configuration-form'))) {
			Joomla.submitform(task, document.getElementById('configuration-form'));
		}
		else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>
<div id="config-document">
		<div id="page-site" class="tab">
			<div class="noshow">
				<div class="width-60 fltlft">
					help
				</div>
				<div class="width-40 fltrt">
					without 
				</div>
			</div>
		</div>
		<div id="page-system" class="tab">
			<div class="noshow">
				<div class="width-60 fltlft">
					anything
				</div>
				<div class="width-40 fltrt">
					is 
				</div>
			</div>
		</div>
		<div id="page-server" class="tab">
			<div class="noshow">
				<div class="width-60 fltlft">
					nothing
				</div>
				<div class="width-40 fltrt">
					it is always
				</div>
			</div>
		</div>
		<div id="page-permissions" class="tab">
			<div class="noshow">
				is ti alwaysdd
			</div>
		</div>
		<div id="page-filters" class="tab">
			<div class="noshow">
				sdf
			</div>
		</div>
		<input type="hidden" name="task" value="" />
		
		
		
		
		
		
		
	<?php echo JHtml::_('form.token'); ?>
	<div class="clr"></div>

    <style type="text/css">
        /* Temporary fix for drifting editor fields */
        .adminformlist li {
            clear: both;
        }
    </style>
</form>