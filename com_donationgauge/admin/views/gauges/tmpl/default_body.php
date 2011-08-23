<?php
defined('_JEXEC') or die; // no direct access allowed
?>
<?php foreach($this->items as $i => $item): ?>
	<tr class="row<?php echo $i % 2; ?>">
		<td>
			<?php echo JHtml::_('grid.id', $i, $item->id); ?>
		</td>
		<td>
			<a href="<?php echo JRoute::_('index.php?option=com_donationgauge&task=gauge.edit&id=' . $item->id);?>">
				<?php echo $this->escape($item->title); ?>
			</a>
		</td>
		<td class="center">
			$<?php echo $this->escape($item->progress); ?>
		</td>
		<td class="center">
			$<?php echo $this->escape($item->cost); ?>
		</td>
		<td class="center">
			<?php echo JHtml::_('jgrid.published', $item->enabled, $i, 'gauges.', true); ?>
		</td>
		<td>
			<?php echo (int) $item->id; ?>
		</td>
	</tr>
<?php endforeach; ?>