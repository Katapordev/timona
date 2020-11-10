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
HTMLHelper::_('stylesheet','https://haubek.github.io/dist/css/component-chosen.min.css', array('version' =>'auto'),array('defer' => 'true'));
HTMLHelper::_('stylesheet','components/com_timona/css/usertimona.css', array('version' =>'auto'),array('defer' => 'true'));
HTMLHelper::_('script','https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js', array('version' =>'auto'),array('defer' => 'true'));
HTMLHelper::_('script','components/com_timona/js/usertimona.js', array('version' =>'auto'),array('defer' => 'true'));
HTMLHelper::_('script','https://haubek.github.io/dist/js/chosen.jquery.js', array('version' =>'auto'),array('defer' => 'true'));

?>
<div class="p-5 bg-timona"></div>
<div class="container-fluid text-dark" ng-controller="TimonaUser">
	<div class="row pt-5" ng-init="InfoRead(<?php echo $user->id; ?>)">
		<div class="col-sm-3">
			
			<div class="card shadow mb-4">
										
                <div class="card-header bg-light py-3 text-center border-bottom">

					<div class="d-flex">
						<img ng-if="Users.Hinhanh!=0" ng-src="{{Users.Hinhanh}}" class="rounded-circle m-auto p-2 avatar"/>
						<i ng-if="Users.Hinhanh==0" class="fas fa-user rounded-circle m-auto p-2 avatar text-white bg-timona-orange"></i>
					</div>
			         <h1 class="m-0 font-weight-bold text-primary">
					  {{Users.name}}
					</h1>		
					Mã Giới Thiệu : <span class="text-white bg-timona-orange" ng-if="Users.codeGT!=0">{{Users.codeGT}}</span><span ng-if="Users.codeGT==0">Chưa Có </span><a href="#" data-toggle="popover" title="Điều Kiện" data-placement="right" data-trigger="focus" data-content="Hoàn thành học phí khóa học đầu tiên để nhận code"><i class="fas fa-question-circle text-timona-orange"></i></a>
                </div>
                <div class="card-body p-0">
				  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link text-timona-orange p-3" data-toggle="pill" href="#menu1">Khóa Học Của Tôi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-timona-orange p-3" data-toggle="pill" href="#menu2">Người Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-timona-orange p-3" data-toggle="pill" href="#menu3">Doanh Số</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-timona-orange p-3" data-toggle="pill" href="#menu4">Hoa Hồng</a>
    </li>
  </ul>	
                </div>
              </div>
			
			
			
		</div>
		<div class="col-sm-9 text-center">
<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Số Người Đăng Ký</div>
                      <div class="h5 mb-0 font-weight-bold text-primary "><h1>0</h1></div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">

                      <div class="text-xs font-weight-bold text-uppercase mb-1">Số Người Active</div>
                      <div class="h5 mb-0 font-weight-bold text-success"><h1>0</h1></div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Tiền Trong Tháng</div>
                          <div class="h5 mb-0 mr-3 font-weight-bold text-info"><h1>0</h1></div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                         <div class="text-xs font-weight-bold text-uppercase mb-1">Tổng Tiền</div>
                      <div class="h5 mb-0 font-weight-bold text-warning"><h1>0</h1></div>
                </div>
              </div>
            </div>
          </div>
			
	<div class="card shadow mb-4">
   <div class="card-body">
      <div class="tab-content">
  <div class="tab-pane container active" id="menu1">
	 <div class="card-header py-3">
<!--
     <fieldset class="border p-3" ng-if="dkstatus!=1">
    <legend class="w-auto text-left">Đăng Ký Khóa Học Mới</legend>
			<div ng-init="KhoahocRead()" class="py-3 form-inline">
				  <select class="custom-select w-sm-25" ng-model="chonkh">
				 <option selected value>Chọn Khóa Học</option>
				  <option ng-repeat="kh in KHS" value="{{kh.id}}">{{kh.TenKH}} - {{kh.GiaKH}}
					  </option>
				  </select>	 <button class="ml-3 btn btn-success" ng-click="DangkyKH(chonkh)">Đăng Ký</button>
				</div>
  </fieldset>
-->
		 
<div class="table-responsive" ng-init="UserKHRead()">
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Tên Khóa Học</th>
        <th>Giá Tiền</th>
		<th>Giảm Giá</th>
		<th>Thành Tiền</th>
		<th>Trạng Thái</th>  
		<th>Ngày Tạo</th>  
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="user in UserKH">
        <td>{{$index+1}}</td>
        <td>{{user.TenKH}}</td>
        <td>{{user.Giatien}}</td>
		<td>{{user.Giamgia}}</td>  
		<td>{{user.Thanhtien}}</td>	  
		<td>{{user.Trangthai}}</td>	  	  
        <td>{{user.Ngaytao}}</td>
      </tr>
    </tbody>
  </table></div>		 
		 
   </div>
	</div>		  
  <div class="tab-pane container fade" id="menu2">Menu 1</div>
  <div class="tab-pane container fade" id="menu3">Menu 2</div>
  <div class="tab-pane container fade" id="menu4">Menu 3</div>		  
</div>

   </div>
</div>		
			
			
		</div>
	</div>
</div>