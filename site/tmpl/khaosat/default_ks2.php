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
<div class="text-primary font-avobold"><h2>2. Chương trình đào tạo của Timona có đáp ứng tốt những mong đợi cá nhân của bạn không?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field2.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field2.name" value="Không"><span class="ml-3">Không</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field2.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field2.name1" value="Khác">
</div>	
				</div>
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>3. Kiến thức, kỹ năng học được từ chương trình đào tạo có giúp cho bạn tự tin về khả năng làm việc sau khi ra trường không?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field3.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field3.name" value="Không"><span class="ml-3">Không</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field3.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field3.name1" value="Khác">
</div>	
				</div>	
	

<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>4. Giảng viên có truyền đạt tốt, dễ hiểu không?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field4.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field4.name" value="Không"><span class="ml-3">Không</span>
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
<div class="text-primary font-avobold"><h2>5. Giảng viên có thái độ gần gũi và thân thiện với bạn hay không?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field5.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field5.name" value="Không"><span class="ml-3">Không</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field5.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field5.name1" value="Khác">
</div>	
				</div>
	
	
	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>6. Giảng viên có sẵn sàng chia sẻ kiến thức và kinh nghiệm với học viên không?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field6.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field6.name" value="Không"><span class="ml-3">Không</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field6.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field6.name1" value="Khác">
</div>	
				</div>	

	
<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>7. Giáo trình/ tài liệu học tập của mỗi môn học có được cung cấp đầy đủ không?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field7.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field7.name" value="Không"><span class="ml-3">Không</span>
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
<div class="text-primary font-avobold"><h2>8. Cơ sở vật chất có đáp ứng đủ nhu cầu học tập?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field8.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field8.name" value="Không"><span class="ml-3">Không</span>
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
<div class="text-primary font-avobold"><h2>9. Bạn sẵn sàng giới thiệu Timona Academy cho bạn bè không?</h2></div> 
	<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field9.name" value="Có"><span class="ml-3">Có</span>
  </label>
</div>
<div class="form-check py-3">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field9.name" value="Không"><span class="ml-3">Không</span>
  </label>
</div>
<div class="form-check form-inline p-sm-0">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" ng-model="khaosat.Field9.name" value="Khác"><span class="ml-3">Khác</span>
  </label>
	<input type="text" class="w-75 form-control ml-2" ng-model="khaosat.Field9.name1" value="Khác">
</div>	
				</div>	
	
	<div class="border px-5 py-3 shadow my-3">
<div class="text-primary font-avobold"><h2>10. Mong muốn của bạn sau khi ra trường sẽ làm gì?</h2></div> 
	<div class="form-group">
    <textarea class="form-control" ng-model="khaosat.Field10.name" placeholder="Nội DUng">
	  </textarea>
</div>
				</div>
	
	
    <button class="btn btn-primary btn-lg" ng-click="KhaosatCreate(khaosat)">Gửi</button>	
	
  </div>	

</div>
</div>	




