<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.modellist');

class DonationGaugeModelDonationGauge extends JModelList
{

	public function getListQuery()
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id, title, description, button_id, progress, cost');
		$query->from('#__donation_gauges');
		return $query;
	}
}