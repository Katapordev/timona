<?php

defined('_JEXEC') or die;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Factory;
use Joomla\CMS\Helper\ContentHelper;
HTMLHelper::_('behavior.core');

$app = Factory::getApplication();
$params = $app->getParams();
HTMLHelper::_('script','components/com_timona/js/hocvien.js', array('version' =>'auto'),array('defer' => 'true'));
?>

<div ng-controller="Formdangky">
	<div class="p-5 container-fluid bg-primary text-center">
<?php if ($params->get('show_page_heading')) : ?>
		<h1 class="mt-5 display-sm-3 font-avobold">
			<?php echo $this->escape($params->get('page_heading')); ?>
		</h1>
<?php endif; ?>
</div>
<div class="container py-5" ng-init="HocvienDKRead()">
	<table class="table table-bordered">
    <thead>
      <tr >
        <th>#</th>
        <th>Tên Học Viên</th>
        <th>Số Điện Thoại</th>
		<th>Nguồn Link</th>
		 <th>Loại Khóa Học</th> 
		<th>Ngày Đăng Ký</th>     
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="x in HVDKS">
        <td>{{$index+1}}</td>
        <td>{{x.TenHV}}</td>
		 <td>{{x.SDT}}</td>  
		<td>{{x.LinkBaiViet}}</td> 
		<td>{{x.LoaiKH}}</td>  		  
        <td>{{x.Ngaytao}}</td>
      </tr>
    </tbody>
  </table>

</div>



</div>