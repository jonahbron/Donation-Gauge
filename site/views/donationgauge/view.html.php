<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.view');

class DonationGaugeViewDonationGauge extends JView
{

	public function display($tmpl=null)
	{
		$this->msg = $this->get('Msg');
		
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		parent::display($tmpl);
	}

}
