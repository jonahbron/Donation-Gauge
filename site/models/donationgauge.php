<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.modelitem');

class DonationGaugeModelDonationGauge extends JModelItem
{

	protected $msg = 'Hello World';
	
	public function getMsg()
	{
		$this->msg .= ' ' . JRequest::getInt('id');
		return $this->msg;
	}
}