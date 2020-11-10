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
HTMLHelper::_('script','https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js', array('version' =>'auto'),array('defer' => 'true'));
HTMLHelper::_('script','components/com_timona/js/khaosat.js', array('version' =>'auto'),array('defer' => 'true'));
?>
<div ng-controller="Khaosat">
	
<div class="p-5 container-fluid bg-primary text-center">
<?php if ($params->get('show_page_heading')) : ?>
		<h1 class="mt-5 display-sm-3 font-avobold">
			<?php echo $this->escape($params->get('page_heading')); ?>
		</h1>
<?php endif; ?>
</div>
	<div class="p-5 text-primary font-avobold" ng-if="result!=0"><h1>Cảm Ơn Bạn Đã Hoàn Thành Khảo Sát</h1></div>
<div class="container mt-2 text-black khaosat" ng-if="result==0" ng-init="khaosat.idKS ='<?php echo $this->escape($params->get('idKS')); ?>'">
<div class="form-group col-12">
 <div class="border px-5 py-3 shadow my-3">
	<div class="text-primary font-avobold"><h2>1. Bạn đang ở chi nhánh nào của Timona Academy ?</h2></div>
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field1.name" value="Gò Vấp"><span class="ml-3">Gò Vấp</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field1.name" value="Quận 10"><span class="ml-3">Quận 10</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field1.name" value="Bình Thạnh"><span class="ml-3">Bình Thạnh</span>
  </label>
</div>	
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field1.name" value="Thủ Đức"><span class="ml-3">Thủ Đức</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field1.name" value="Nha Trang"><span class="ml-3">Nha Trang</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field1.name" value="Đà Nẵng"><span class="ml-3">Đà nẵng</span>
  </label>
</div>	   
				</div>
	
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>2. Mong muốn của bạn sau khi ra trường sẽ làm gì?</h2></div> 
	<div class="form-group">
    <textarea class="form-control" rows="1" ng-model="khaosat.Field2.name" placeholder="Nội DUng">
	  </textarea>
</div>
				</div>
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>3. Số điện thoại của bạn là ?</h2></div> 
	<div class="form-group">
    <textarea class="form-control" rows="1" ng-model="khaosat.Field3.name" placeholder="Nội DUng">
	  </textarea>
</div>
				</div>	
	

<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>4. Giới tính</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field4.name" value="Nam"><span class="ml-3">Nam</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field4.name" value="Nữ"><span class="ml-3">Nữ</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field4.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field4.name1" value="Khác">
</div>	
				</div>
	
	
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>5. Bạn nằm trong nhóm tuổi nào ?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field5.name" value="18 -> 25"><span class="ml-3">18 -> 25</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field5.name" value="25 -> 30"><span class="ml-3">25 -> 30</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field5.name" value="30 -> 40"><span class="ml-3">30 -> 40</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field5.name" value="> 40"><span class="ml-3">> 40</span>
  </label>
</div>	
				</div>
	
	
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>6. Nơi ở của bạn ?</h2></div> 
	<div class="form-group">
    <textarea class="form-control" rows="1" ng-model="khaosat.Field6.name" placeholder="Nội DUng">
	  </textarea>
</div>
				</div>	

	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>7. Tình trạng hôn nhân ?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field7.name" value="Độc thân"><span class="ml-3">Độc thân</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field7.name" value="Đã kết hôn"><span class="ml-3">Đã kết hôn</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field7.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field7.name1" value="Khác">
</div>	
				</div>
	
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>8. Nghề nghiệp hiện tại của bạn là gì ?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field8.name" value="Học sinh , sinh viên"><span class="ml-3">Học sinh , sinh viên</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field8.name" value="Cán bộ công nhân , viên chức"><span class="ml-3">Cán bộ công nhân , viên chức</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field8.name" value="Kinh doanh buôn bán"><span class="ml-3">Kinh doanh buôn bán</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field8.name" value="Cấp quản lý"><span class="ml-3">Cấp quản lý</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field8.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field8.name1" value="Khác">
</div>
	
	
	
	
				</div>
	
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>9. Thu nhập hiện nay của bạn ?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field9.name" value="< 5 triệu"><span class="ml-3">< 5 triệu</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field9.name" value="5 triệu -> 10 triệu"><span class="ml-3">5 triệu -> 10 triệu</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field9.name" value="10 triệu -> 20 triệu"><span class="ml-3">10 triệu -> 20 triệu</span>
  </label>
</div>		
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field9.name" value="> 20 triệu"><span class="ml-3">> 20 triệu</span>
  </label>
</div>			

				</div>	
	
	<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>10. Bạn biết tới Timona Academy qua kênh nào ?
</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field10.name" value="Facebook"><span class="ml-3">Facebook</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field10.name" value="Forum , báo chí ...."><span class="ml-3">Forum , báo chí ....</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field10.name" value="Website Timona"><span class="ml-3">Website Timona</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field10.name" value="Bạn bè giới thiệu"><span class="ml-3">Bạn bè giới thiệu</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field10.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field10.name1" value="Khác">
</div>
	
	
	
	
				</div>
	<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>11. Bạn quan tâm điều gì khi đăng kí học tại Timona Academy ?</h2></div> 
	<div class="form-group">
    <textarea class="form-control" rows="1" ng-model="khaosat.Field11.name" placeholder="Nội DUng">
	  </textarea>
</div>
				</div>
	
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>12. Bạn quan tâm khóa học nào ở Timona Academy ?
</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field12.name" value="Khóa Da"><span class="ml-3">Khóa Da</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field12.name" value="Khóa Phun Xăm"><span class="ml-3">Khóa Phun Xăm</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field12.name" value="Khóa Gội Đầu Dưỡng Sinh"><span class="ml-3">Khóa Gội Đầu Dưỡng Sinh</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field12.name" value="Khóa Massage Body"><span class="ml-3">Khóa Massage Body</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field12.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field12.name1" value="Khác">
</div>
	
	
	
	
				</div>	
	
	
	<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>13. Mong muốn của bạn sau khi học là gì?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field13.name" value="Làm Kỹ Thuật Viên Spa"><span class="ml-3">Làm Kỹ Thuật Viên Spa</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field13.name" value="Mở cơ sở kinh doanh"><span class="ml-3">Mở cơ sở kinh doanh</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field13.name" value="Làm đẹp"><span class="ml-3">Làm đẹp</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field13.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field13.name1" value="Khác">
</div>
	
	
	
	
				</div>
	
	<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>14. Điều gì quan trọng nhất khi bạn quyết định đăng ký học tại Timona Academy?
</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field14.name" value="Bằng cấp"><span class="ml-3">Bằng cấp</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field14.name" value="Chất lượng đào tạo tay nghề"><span class="ml-3">Chất lượng đào tạo tay nghề</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field14.name" value="Cam kết việc làm"><span class="ml-3">Cam kết việc làm</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field14.name" value="Hỗ hợ sau khóa học"><span class="ml-3">Hỗ hợ sau khóa học</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field14.name" value="Chi Phí"><span class="ml-3">Chi Phí</span>
  </label>
</div>		
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field14.name" value="Cơ sở vật chất"><span class="ml-3">Cơ sở vật chất</span>
  </label>
</div>	
		
</div>
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>15. Liệt kê 3 sở thích của bạn ?</h2></div> 
	<div class="form-group">
    <textarea class="form-control" rows="1" ng-model="khaosat.Field15.name" placeholder="Nội DUng">
	  </textarea>
</div>
				</div>	
	
	
	
    <button class="btn btn-primary btn-lg" ng-click="KhaosatCreate(khaosat)">Gửi</button>	
	
  </div>	

</div>
</div>	




