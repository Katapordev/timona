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
$user = Factory::getUser();;
HTMLHelper::_('script','https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js', array('version' =>'auto'),array('defer' => 'true'));
HTMLHelper::_('script','components/com_timona/js/lichhen.js', array('version' =>'auto'),array('defer' => 'true'));
?>
<div class="p-5 bg-timona"></div>

<div class="container-fluid text-dark" ng-controller="Lichhen" ng-init="FieldsRead(boloc)">
	<div class="form-inline p-3">
	<input class="form-control" type="date" ng-model="boloc.tungay" placeholder="Từ Ngày" />
	<input class="form-control mx-3" type="date" ng-model="boloc.denngay" placeholder="Đến Ngày" />
	<input class="form-control" ng-model="boloc.soluong" placeholder="Số Hiển Thị" />
		
	<div class="input-group mx-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" ng-model="boloc.checknv">
    </div>
  </div>
  <input class="form-control" ng-model="boloc.nhanvien" placeholder="Nhân viên" />	
</div>
	
		
   
	<button class="btn btn-success btn-lg mr-3" ng-click="FieldsRead(boloc)">Lọc</button>	
	<button class="btn btn-success btn-lg" ng-click="Updatetime()">Update</button>		
	</div>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th ng-click="sortBy('field1')">SDT <i ng-class="sortClass('field1')"></i></th>
        <th ng-click="sortBy('field2')">Loại Lịch <i ng-class="sortClass('field2')"></i></th>
		<th ng-click="sortBy('field3')">Tình Trạng <i ng-class="sortClass('field3')"></i></th>  
		<th ng-click="sortBy('field4')">Chi Nhánh <i ng-class="sortClass('field4')"></i></th> 
		<th ng-click="sortBy('field5')">Nhân Viên <i ng-class="sortClass('field5')"></i></th> 
	    <th ng-click="sortBy('field6')">Ngày Hẹn <i ng-class="sortClass('field6')"></i></th> 	  
      </tr>
	      <tr>
        <th></th>
        <th><input class="form-control" ng-model="search.field1" placeholder="SDT" /></th>
        <th><input class="form-control" ng-model="search.field2" placeholder="Loại Lịch" /></th>
		<th><input class="form-control" ng-model="search.field3" placeholder="Tình Trạng" /></th>  
		<th><input class="form-control" ng-model="search.field4"  placeholder="Chi Nhánh"/></th> 
		<th><input class="form-control" ng-model="search.field5" placeholder="Nhân Viên" /></th> 
		<th><input class="form-control" ng-model="search.field6" placeholder="Ngày Hẹn" /></th>   	  
      </tr>	
    </thead>
    <tbody>

		
      <tr ng-repeat="fd in Fields | orderBy:Sfield:reverse | filter:search">
        <td>{{$index+1}}</td>
        <td>{{fd.field1}}</td>
        <td class="{{fd.field2 | MLL}}">{{fd.field2}}</td>
		<td class="{{fd.field3 | TTL}}">{{fd.field3}}</td>
		<td>{{fd.field4}}</td>
		<td>{{fd.field5}}</td>
		<td>{{fd.field6}}</td>    
      </tr>
    </tbody>
  </table>
	
</div>