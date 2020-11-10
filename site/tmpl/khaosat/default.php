<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_finder
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;

use Joomla\CMS\Language\Text;

use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\Factory;
HTMLHelper::_('behavior.core');
$user = Factory::getUser();
$app = Factory::getApplication();
$params = $app->getParams();
$manager = $user->authorise('core.manage');
HTMLHelper::_('script','https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js', array('version' =>'auto'),array('defer' => 'true'));
HTMLHelper::_('script','components/com_timona/js/khaosat.js', array('version' =>'auto'),array('defer' => 'true'));
?>
<div ng-controller="Khaosat">
<?php
	if($manager==1)
{
echo $this->loadTemplate('admin');
}
else {
	echo $this->loadTemplate('ks'.$params->get('KhaoSat'));
}
	
?>

</div>	




