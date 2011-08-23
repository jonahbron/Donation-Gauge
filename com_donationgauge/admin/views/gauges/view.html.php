<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.view');

class DonationGaugeViewGauges extends JView
{

	public function display($tmpl=null)
	{
		$gauges = $this->get('Items');
		$pagination = $this->get('Pagination');
		$this->state = $this->get('State');
		
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$this->items = $gauges;
		$this->pagination = $pagination;
		$this->sortColumn = $this->escape($this->state->get('list.ordering'));
		$this->sortDirection = $this->escape($this->state->get('list.direction'));
		
		$this->addToolBar();
		
		parent::display($tmpl);
	}
	
	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_('COM_DONATIONGAUGE_ADMIN_GAUGES_TITLE'));
		
		require_once JPATH_COMPONENT . '/helpers/gauges.php';
		$permissions = GaugesHelper::getPermissions();
		
		if ($permissions->get('core.create')) {
			JToolBarHelper::addNew('gauge.add');
		}
		
		if ($permissions->get('core.edit')) {
			JToolBarHelper::editList('gauge.edit');
			JToolBarHelper::divider();
		}
		
		if ($permissions->get('core.edit.state')) {
			JToolBarHelper::publish('gauges.publish', 'JTOOLBAR_PUBLISH', true);
			JToolBarHelper::unpublish('gauges.publish', 'JTOOLBAR_UNPUBLISH', true);
			JToolBarHelper::divider();
		}
		
		if ($permissions->get('core.delete')) {
			JToolBarHelper::deleteList('', 'gauges.delete');
		}
	}

}
