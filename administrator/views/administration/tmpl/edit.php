<?php
/**
 * @version     0.0.1.0.a.0.0.1.a
 * @package     com_school
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Gnanakeethan Balasubramaniam <gnanakeethan@gmail.com> - 
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_school/assets/css/school.css');
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

<form action="<?php echo JRoute::_('index.php?option=com_school&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="configuration-form" class="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?php echo JText::_('COM_SCHOOL_LEGEND_CONFIGURATION'); ?></legend>
			<ul class="adminformlist">

            
			<li><?php echo $this->form->getLabel('id'); ?>
			<?php echo $this->form->getInput('id'); ?></li>

            
			<li><?php echo $this->form->getLabel('school_name'); ?>
			<?php echo $this->form->getInput('school_name'); ?></li>

            
			<li><?php echo $this->form->getLabel('school_address'); ?>
			<?php echo $this->form->getInput('school_address'); ?></li>

            

            

            </ul>
		</fieldset>
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