<?php

defined('_JEXEC') or die;

class GaugesHelper
{
	public static function getPermissions()
	{
		$user = JFactory::getUser();
		$result = new JObject;
		
		$actions = array('core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete');
		
		foreach ($actions as $action) {
			$result->set($action, $user->authorize($action, $assetName));
		}
		
		return $result;
	}
}