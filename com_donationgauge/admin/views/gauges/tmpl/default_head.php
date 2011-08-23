<?php
defined('_JEXEC') or die; // no direct access allowed
?>
<tr>
	<th width="20">
		<input type="checkbox" name="toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this);" />
	</th>
	<th>
		<?php echo JHtml::_('grid.sort', 'JGLOBAL_TITLE', 'a.title', $this->sortDirection, $this->sortColumn); ?>
	</th>
	<th width="90">
		<?php echo JHtml::_('grid.sort', 'COM_DONATIONGAUGE_ADMIN_GAUGES_HEADING_PROGRESS', 'a.progress', $this->sortDirection, $this->sortColumn); ?>
	</th>
	<th width="90">
		<?php echo JHtml::_('grid.sort', 'COM_DONATIONGAUGE_ADMIN_GAUGES_HEADING_TOTAL', 'a.cost', $this->sortDirection, $this->sortColumn); ?>
	</th>
	<th width="80">
		<?php echo JHtml::_('grid.sort', 'JSTATUS', 'a.published', $this->sortDirection, $this->sortColumn); ?>
	</th>
	<th width="5">
		<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'a.id', $this->sortDirection, $this->sortColumn); ?>
	</th>
	
</tr>