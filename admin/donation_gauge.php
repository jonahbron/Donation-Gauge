<?php
defined('_JEXEC') or die; // no direct access allowed

jimport('joomla.application.component.controller');

$controller = JController::getInstance('DonationGauge');

$controller->execute(JRequest::getCmd('task'));

$controller->redirect();