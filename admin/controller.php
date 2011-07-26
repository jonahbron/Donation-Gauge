<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.controller');

class DonationGaugeController extends JController
{

	public function display($cachable=false)
	{
		JRequest::setVar('view', JRequest::getCmd('view', 'DonationGauge'));
		parent::display($cachable);
	}

}
