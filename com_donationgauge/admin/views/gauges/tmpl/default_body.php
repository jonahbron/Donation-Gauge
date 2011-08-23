<?php
defined('_JEXEC') or die; // no direct access allowed
?>
<?php foreach($this->items as $i => $item): ?>
	<tr class="row<?php echo $i % 2; ?>">
		<td>
			<?php echo JHtml::_('grid.id', $i, $item->id); ?>
		</td>
		<td>
			<?php echo $item->title; ?>
		</td>
		<td class="center">
			$<?php echo $item->progress; ?>
		</td>
		<td class="center">
			$<?php echo $item->cost; ?>
		</td>
		<td class="center">
			<?php echo JHtml::_('jgrid.published', $item->enabled, $i); ?>
		</td>
		<td>
			<?php echo $item->id; ?>
		</td>
	</tr>
<?php endforeach; ?>