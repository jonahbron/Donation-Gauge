<?php
defined('_JEXEC') or die; // no direct access allowed

JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_donationgauge'); ?>" method="post" name="adminForm">
	<table class="adminlist">
		<thead><?php echo $this->loadTemplate('head'); ?></thead>
		<tbody><?php echo $this->loadTemplate('body'); ?></tbody>
		<tfoot><?php echo $this->loadTemplate('foot'); ?></tfoot>
	</table>
	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>