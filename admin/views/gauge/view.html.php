<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.view');

class DonationGaugeViewGauge extends JView
{

	public function display($tmpl=null)
	{
		$form = $this->get('Form');
		$item = $this->get('Item');
		
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$this->form = $form;
		$this->item = $item;
		
		$this->addToolbar();
		
		parent::display($tmpl);
	}
	
	public function addToolBar()
	{
		JRequest::setVar('hidemainmenu', true);
		$isNew = $this->item->id == 0;
		JToolBarHelper::title($isNew ? JText::_('COM_DONATIONGAUGE_MANAGER_GAUGE_NEW') : JText::_('COM_DONATIONGAUGE_MANAGER_GAUGE_EDIT'));
		JToolBarHelper::save('gauge.save');
		JToolBarHelper::cancel('gauge.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
	}

}
