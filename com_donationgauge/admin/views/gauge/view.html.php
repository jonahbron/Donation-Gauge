<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.view');

class DonationGaugeViewGauge extends JView
{

	protected $form;
	protected $item;
	protected $state;

	public function display($tmpl=null)
	{
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$this->addToolbar();

		JRequest::setVar('hidemainmenu', true);	
		parent::display($tmpl);
	}
	
	public function addToolBar()
	{
		$isNew = $this->item->id == 0;
		$user = JFactory::getUser();
		$userId = $user->get('id');
		
		JToolBarHelper::title($isNew ? JText::_('COM_DONATIONGAUGE_ADMIN_GAUGE_NEW') : JText::_('COM_DONATIONGAUGE_ADMIN_GAUGE_EDIT'));
		
		JToolBarHelper::apply('gauge.apply');
		JToolBarHelper::save('gauge.save');
		JToolBarHelper::save2new('gauge.save2new');
		
		if (!$isNew) {
			JToolBarHelper::save2copy('gauge.save2copy');
		}
		
		JToolBarHelper::cancel('gauge.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');

	}

}
