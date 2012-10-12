<?php

defined('_JEXEC') or die;
?>
<div id="submenu-box">
	<div class="submenu-box">
		<div class="submenu-pad">
			<ul id="submenu" class="configuration">
				<li><a href="#" onclick="return false;" id="site" class="active"><?php echo JText::_('JSITE'); ?></a></li>
				<li><a href="#" onclick="return false;" id="system"><?php echo JText::_('COM_CONFIG_SYSTEM'); ?></a></li>
				<li><a href="#" onclick="return false;" id="server"><?php echo JText::_('COM_CONFIG_SERVER'); ?></a></li>
				<li><a href="#" onclick="return false;" id="permissions"><?php echo JText::_('COM_CONFIG_PERMISSIONS'); ?></a></li>
				<li><a href="#" onclick="return false;" id="filters"><?php echo JText::_('COM_CONFIG_TEXT_FILTERS')?></a></li>
			</ul>
			<div class="clr"></div>
		</div>
	</div>
	<div class="clr"></div>
</div>