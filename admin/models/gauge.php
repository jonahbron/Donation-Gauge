<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.modeladmin');

class DonationGaugeModelGauge extends JModelAdmin
{

	public function getTable($type='Gauges', $prefix='DonationGaugeTable', $config=array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	public function getForm($data=array(), $loadData=true)
	{
		$form = $this->loadForm('com_donationgauge.gauge', 'gauge', array('control' => 'jform', 'load_data' => $loadData));
		if (empty($form)) {
			return false;
		}
		return $form;
	}
	
	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_donationgauge.edit.gauge.data', array());
		if (empty($data)) {
			$data = $this->getItem();
		}
		return $data;
	}

}
