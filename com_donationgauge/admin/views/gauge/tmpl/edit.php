<?php
defined('_JEXEC') or die; // no direct access allowed
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<form action="<?php echo JRoute::_('index.php?option=com_donationgauge&layout=edit&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="gauge-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			
			<legend><?php echo empty($this->item->id) ? JText::_('COM_DONATIONGAUGE_ADMIN_GAUGE_NEW') : JText::_('COM_DONATIONGAUGE_ADMIN_GAUGE_EDIT'); ?></legend>
			
			<ul class="adminformlist">
				<li><?php echo $this->form->getLabel('title'); echo $this->form->getInput('title'); ?></li>
				<li><?php echo $this->form->getLabel('id'); echo $this->form->getInput('id'); ?></li>
			</ul>
			
			<div>
				<?php echo $this->form->getLabel('description'); ?>
				<div class="clr"></div>
				<?php echo $this->form->getInput('description'); ?>
			</div>
			
		</fieldset>
	
	</div>
	
	<div>
		<input type="hidden" name="task" value="gauge.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
