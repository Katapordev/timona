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


HTMLHelper::_('behavior.core');


$canDo = ContentHelper::getActions('com_timona', 'category', $this->item->catid);

?>


<div ng-init="FormDangKyShow()" class="table-responsive">

<table class="table table-dark table-hover text-center">

    <thead>

      <tr>

       <th>#</th>

        <th>Tên Khách Hàng</th>

        <th>Số Điện Thoại</th>

        <th>Bài Viết</th>

        <th>Ngày Đăng Ký</th>

      </tr>

    </thead>

    <tbody>

      <tr ng-repeat="fdk in FDKs">

        <td>{{$index+1}}</td>

        <td>{{fdk.TenKH}}</td>

        <td>{{fdk.SDT}}</td>

        <td>{{fdk.LinkBaiViet}}</td>

        <td>{{fdk.NgayTao|date:'dd/MM/yy'}}</td>

      </tr>

    </tbody>

  </table>

</div>



