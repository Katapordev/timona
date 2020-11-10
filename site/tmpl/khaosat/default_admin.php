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

<div class="p-5 container-fluid bg-primary text-center">
<?php if ($params->get('show_page_heading')) : ?>
		<h1 class="mt-5 display-sm-3 font-avobold">
			<?php echo $this->escape($params->get('page_heading')); ?>
		</h1>
<?php endif; ?>
</div>
<div class="p-5"><button class="btn btn-success my-2" data-toggle="collapse" data-target="#demo">Ẩn/Hiện</button>

<div id="demo" class="collapse">
<div class="p-5 font-avobold text-primary" ng-if="result!=0">Thêm Thành Công</div>
<div class="container py-3 text-black" ng-if="result==0">
	<div class="form-group">
	Tên Khảo Sát : <input class="form-control" ng-model="dulieu.TenKS" placeholder="Tên Khảo Sát"/>
	</div>
	<?php 
	for($i=1;$i<=20;$i++)
	{
	echo '<div class="form-group">
	Field'.$i.' <input class="form-control" ng-model="dulieu.Field'.$i.'" placeholder="Field'.$i.'"/>
	</div>';	
	}

 ?>
	<div class="form-group">
	<button class="btn btn-primary" ng-click="NoidungKSCreate(dulieu)">Tạo Mới
		</button>
	</div>
</div>

</div>
<div class="table-responsive KQKS">
<table class="table table-bordered" ng-init="TitleKhaoSatRead(<?php echo $this->escape($params->get('idKS')); ?>)">
    <thead>
      <tr ng-repeat="tit in Titles">
        <th>#</th>
		  
        <th ng-if="tit.Field1!=0">{{tit.Field1}}</th>
		<th ng-if="tit.Field2!=0">{{tit.Field2}}</th>	
		<th ng-if="tit.Field3!=0">{{tit.Field3}}</th>
		<th ng-if="tit.Field4!=0">{{tit.Field4}}</th>
        <th ng-if="tit.Field5!=0">{{tit.Field5}}</th>
		<th ng-if="tit.Field6!=0">{{tit.Field6}}</th>	
		<th ng-if="tit.Field7!=0">{{tit.Field7}}</th>
		<th ng-if="tit.Field8!=0">{{tit.Field8}}</th>  
        <th ng-if="tit.Field9!=0">{{tit.Field9}}</th>
		<th ng-if="tit.Field10!=0">{{tit.Field10}}</th>	
		<th ng-if="tit.Field11!=0">{{tit.Field11}}</th>
		<th ng-if="tit.Field12!=0">{{tit.Field12}}</th>
        <th ng-if="tit.Field13!=0">{{tit.Field13}}</th>
		<th ng-if="tit.Field14!=0">{{tit.Field14}}</th>	
		<th ng-if="tit.Field15!=0">{{tit.Field15}}</th>
		<th ng-if="tit.Field16!=0">{{tit.Field16}}</th>	
		<th ng-if="tit.Field17!=0">{{tit.Field17}}</th>
        <th ng-if="tit.Field18!=0">{{tit.Field18}}</th>
		<th ng-if="tit.Field19!=0">{{tit.Field19}}</th>	
		<th ng-if="tit.Field20!=0">{{tit.Field20}}</th>		  
      </tr>
    </thead>
    <tbody ng-init="KQKhaoSatRead(<?php echo $this->escape($params->get('idKS')); ?>)">
       <tr ng-repeat="kq in KQKS">
        <td>{{$index+1}}</td>
		  
        <td ng-if="kq.Field1!=0">{{kq.Field1}}</td>
		<td ng-if="kq.Field2!=0">{{kq.Field2}}</td>	
		<td ng-if="kq.Field3!=0">{{kq.Field3}}</td>
		<td ng-if="kq.Field4!=0">{{kq.Field4}}</td>
        <td ng-if="kq.Field5!=0">{{kq.Field5}}</td>
		<td ng-if="kq.Field6!=0">{{kq.Field6}}</td>	
		<td ng-if="kq.Field7!=0">{{kq.Field7}}</td>
		<td ng-if="kq.Field8!=0">{{kq.Field8}}</td>  
        <td ng-if="kq.Field9!=0">{{kq.Field9}}</td>
		<td ng-if="kq.Field10!=0">{{kq.Field10}}</td>	
		<td ng-if="kq.Field11!=0">{{kq.Field11}}</td>
		<td ng-if="kq.Field12!=0">{{kq.Field12}}</td>
        <td ng-if="kq.Field13!=0">{{kq.Field13}}</td>
		<td ng-if="kq.Field14!=0">{{kq.Field14}}</td>	
		<td ng-if="kq.Field15!=0">{{kq.Field15}}</td>
		<td ng-if="kq.Field16!=0">{{kq.Field16}}</td>	
		<td ng-if="kq.Field17!=0">{{kq.Field17}}</td>
        <td ng-if="kq.Field18!=0">{{kq.Field18}}</td>
		<td ng-if="kq.Field19!=0">{{kq.Field19}}</td>	
		<td ng-if="kq.Field20!=0">{{kq.Field20}}</td>		  
      </tr>
    </tbody>
  </table>
</div>
</div>




