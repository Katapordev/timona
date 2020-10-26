<?php

namespace Joomla\Component\Timona\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

use Joomla\CMS\Router\Route;

use Joomla\Utilities\ArrayHelper;

use Joomla\CMS\Factory;

class HocvienController extends BaseController

{

 public function Show()

 {

  $db = Factory::getDbo();

  $query = $db->getQuery(true)

   ->select($db->quoteName(array(
   'id',
   'iduser',
   'TenKH',
   'SDT',
   'LinkBaiViet',
   'NgayTao'
  )))

   ->from($db->quoteName('#__timona_hocvien'))

   ->order('id DESC');

  $db->setQuery($query);

  $row = $db->loadObjectList();

  $outp = "";

  foreach ($row as $row)

  {

   if ($outp != "")
   {
    $outp .= ",";
   }

   $outp .= '{"id":"' . $row->id . '",';

   $outp .= '"iduser":"' . $row->iduser . '",';

   $outp .= '"TenKH":"' . $row->TenKH . '",';

   $outp .= '"SDT":"' . $row->SDT . '",';

   $outp .= '"LinkBaiViet":"' . $row->LinkBaiViet . '",';

   $outp .= '"NgayTao":"' . $row->NgayTao . '"}';

  }

  $outp = '{"details":[' . $outp . ']}';

  echo ($outp);

 }

}

