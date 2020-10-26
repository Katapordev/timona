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
HTMLHelper::_('script','components/com_timona/js/usertimona.js', array('version' =>'auto'),array('defer' => 'true'));
?>
<div class="p-5 bg-timona"></div>
<div class="container-fluid text-dark" ng-app="TimonaUser" ng-controller="TimonaUser">
	<div class="row pt-5" ng-init="TimonaUserRead()">
		<div class="col-sm-3">
			
			<div class="card shadow mb-4">
										
                <div class="card-header bg-light py-3 text-center">
                  <h1 class="m-0 font-weight-bold text-primary"><?php echo $user->name; ?></h1>
					<div class="d-flex"><img ng-src="{{Users.Hinhanh}}" class="rounded-circle m-auto p-2"/></div>
					Mã Giới Thiệu <div class="btn btn-primary" ng-if="Users.codeGT">{{Users.codeGT}}</div><div class="btn btn-primary" ng-if="!Users.codeGT">Nhận Code</div>
                </div>
                <div class="card-body">
				  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="pill" href="#home">Người Đăng Ký</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="pill" href="#menu1">Người Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="pill" href="#menu2">Doanh Số</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-primary" data-toggle="pill" href="#menu3">Hoa Hồng</a>
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
  <div class="tab-pane container active" id="home">
	     <div class="card-header py-3">
       Trang Chu
   </div>
	</div>
  <div class="tab-pane container fade" id="menu1">Menu 1</div>
  <div class="tab-pane container fade" id="menu2">Menu 2</div>
  <div class="tab-pane container fade" id="menu2">Menu 3</div>		  
</div>

   </div>
</div>		
			
			
		</div>
	</div>
</div>