<?php
   defined('_JEXEC') or die;
   
   use Joomla\CMS\Factory;
   
   use Joomla\CMS\HTML\HTMLHelper;
   
   use Joomla\CMS\Language\Multilanguage;
   
   use Joomla\CMS\Language\Text;
   
   use Joomla\CMS\Layout\LayoutHelper;
   
   use Joomla\CMS\Router\Route;
   
   use Joomla\CMS\Session\Session;
   
   JHtml::_('script', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js', array(
    'version' => 'auto'
   ) , array(
    'defer' => 'true'
   ));
   
   HTMLHelper::_('script', 'administrator/components/com_timona/js/main.js', array(
    'version' => 'auto'
   ) , array(
    'defer' => 'true'
   ));
   
   ?>
<div ng-app="timonaapp" ng-controller="timona">
   <div ng-init="HocVienShow()">
      <table class="table table-dark table-hover text-center">
         <thead>
            <tr>
               <th>#</th>
               <th>Tên Học Viên</th>
               <th>Số Điện Thoại</th>
               <th>Bài Viết</th>
			   <th>Loại KH</th>
               <th>Ngày Đăng Ký</th>
            </tr>
         </thead>
         <tbody>
            <tr ng-repeat="fdk in FDKs">
               <td>{{$index+1}}</td>
               <td>{{fdk.TenHV}}</td>
               <td>{{fdk.SDT}}</td>
               <td>{{fdk.LinkBaiViet}}</td>
			   <td>{{fdk.LoaiKH}}</td>
               <td>{{fdk.NgayTao|date:'dd/MM/yy'}}</td>
            </tr>
         </tbody>
      </table>
   </div>
</div>