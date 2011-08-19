<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.modellist');

class DonationGaugeModelGauges extends JModelList
{

	public function getListQuery()
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id, title, description, button_id, progress, cost, enabled');
		$query->from('#__donationgauge_gauges');
		return $query;
	}
	
	public function populateState($ordering=null, $direction=null)
	{
		$app = JFactory::getApplication();
		$context = $this->context;
		
		$search = $this->getUserStateFromRequest($context.'.search', 'filter_search');
		$this->setState('filter.search', $search);
		
		$published = $this->getUserStateFromRequest($context . '.filter.published', 'filter_published', '');
		$this->setState('filter.published', $published);
		
		parent::populateState($ordering, $direction);
	}
}