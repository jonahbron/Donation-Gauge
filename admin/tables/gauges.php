<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.table');

class DonationGaugeTableGauges extends JTable
{

	function __construct(&$db)
	{
		parent::__construct('#__donationgauge_gauges', 'id', $db);
	}

}
