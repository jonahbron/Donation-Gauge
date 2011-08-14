<?php
defined('_JEXEC') or die; // no direct access allowed
?>
<tr>
	<th width="5">
		<?php echo JText::_('COM_DONATIONGAUGE_ADMIN_GAUGES_HEADING_ID'); ?>
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>
	<th>
		<?php echo JText::_('COM_DONATIONGAUGE_ADMIN_GAUGES_HEADING_TITLE'); ?>
	</th>
	<th width="90">
		<?php echo JText::_('COM_DONATIONGAUGE_ADMIN_GAUGES_HEADING_PROGRESS'); ?>
	</th>
	<th width="90">
		<?php echo JText::_('COM_DONATIONGAUGE_ADMIN_GAUGES_HEADING_TOTAL'); ?>
	</th>
	<th width="80">
		<?php echo JText::_('JSTATUS'); ?>
	</th>
	
</tr>