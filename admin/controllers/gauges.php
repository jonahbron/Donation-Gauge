<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.controlleradmin');

class DonationGaugeControllerGauges extends JControllerAdmin
{

	public function getModel($name='Gauge', $prefix='GaugeModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}

}
