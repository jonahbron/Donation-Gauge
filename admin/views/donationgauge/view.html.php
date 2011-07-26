<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.view');

class DonationGaugeViewDonationGauge extends JView
{

	public function display($tmpl=null)
	{
		$gauges = $this->get('Items');
		$pagination = $this->get('Pagination');
		
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$this->items = $gauges;
		$this->pagination = $pagination;
		
		parent::display($tmpl);
	}

}
