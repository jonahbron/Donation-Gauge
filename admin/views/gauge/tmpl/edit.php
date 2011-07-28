<?php
defined('_JEXEC') or die; // no direct access allowed
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_donationgauge&layout=edit&id=' . $this->item->id); ?>" method="post" name="adminForm" id="gauge-form">
	<fieldset class="adminform">
		<legend><?php echo JText::_('COM_DONATIONGAUGE_GAUGE_DETAILS'); ?></legend>
		<ul class="adminformlist">
			<?php foreach ($this->form->getFieldset() as $field): ?>
			<li><?php echo $field->label; echo $field->input; ?></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>
	<div>
		<input type="hidden" name="task" value="gauge.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>