<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.modellist');

class DonationGaugeModelGauges extends JModelList
{

	public function __construct($config=array())
	{
		if (empty($config['filter_fields'])) {
			$config['filter_fields'] = array(
				'id', 'a.id',
				'title', 'a.title',
				'description', 'a.description',
				'button_id', 'a.button_id',
				'progress', 'a.progress',
				'cost', 'a.cost',
				'published', 'a.published'
			);
		}
		parent::__construct($config);
	}
	
	public function getListQuery()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('a.id, a.title, a.description, a.button_id, a.progress, a.cost, a.published');
		$query->from('#__donationgauge_gauges AS a');
		
		// filter by published state
		$published = $this->getState('filter.published');
		if (is_numeric($published)) {
			$query->where('a.published = ' . (int) $published);
		} elseif ($published === '') {
			$query->where('(a.published IN (0, 1))');
		}
		
		// filter by search in title
		$search = $this->getState('filter.search');
		if (!empty($search)) {
			if (stripos($search, 'id:') === 0) {
				$query->where('a.id = ' . (int) ltrim(substr($search, 3)));
			} elseif (stripos($search, 'author:') === 0) {
				$search = $db->Quote('%' . $db->getEscaped($search, true) . '%');
				$query->where('(a.title LIKE ' . $search . ' OR a.alias LIKE ' . $search . ' OR a.description LIKE ' . $search . ')');
			}
		}
		
		// sort list
		$query->order($db->getEscaped($this->getState('list.ordering', 'a.title')) . ' ' . $db->getEscaped($this->getState('list.direction', 'ASC')));
		
		# echo nl2br(str_replace('#__', 'jmla_', $query));
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
		
		$listOrder = JRequest::getCmd('filter_order', 'a.id');
		$this->setState('list.ordering', $listOrder);
		
		$listDirection = JRequest::getCmd('filter_order_Dir', 'ASC');
		$this->setState('list.direction', $listDirection);
		
		parent::populateState($ordering, $direction);
	}
	
	public function getStoreId($id='')
	{
		$id .= ':' . $this->getState('filter.search');
		$id .= ':' . $this->getState('filter.published');
		
		return parent::getStoreId($id);
	}
}