<?php


namespace Joomla\Component\Timona\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Application\CmsApplication;

use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;
use Joomla\Utilities\ArrayHelper;
use Joomla\CMS\Factory;


class HocvienController extends BaseController

{
    public function hocvienCreat()

    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $NgayTao = date('Y-m-d H:i:s');

        $data = json_decode(file_get_contents("php://input"));

        $db = Factory::getDbo();

        $query = $db->getQuery(true);

        $columns = array(
            'iduser',
            'TenHV',
            'SDT',
            'LinkBaiViet',
			'LoaiKH',
            'NgayTao'
        );

        $values = array(
            $db->quote($data->iduser) ,
            $db->quote($data->name) ,
            $db->quote($data->sdt) ,
            $db->quote($data->LinkBaiViet) ,
			$db->quote($data->LoaiKH) ,
            $db->quote($NgayTao)
        );

        $query
->insert($db->quoteName('#__timona_hocvien'))

            ->columns($db->quoteName($columns))
->values(implode(',', $values));

        $db->setQuery($query);

        $db->execute();
		echo $data->name;
    }
	
	
	public function Formdangky()
		{
		$db = Factory::getDbo();			
		$query = $db->getQuery(true);
		$query->select(array('id','idUser','TenHV','SDT','idGT','LinkBaiViet','LoaiKH','Ngaytao'))->from($db->quoteName('#__timona_hocvien'))->order('id DESC');				
		$db->setQuery($query);
		$row = $db->loadObjectList();
		echo json_encode((array)$row);
		}
	
	
	
	
	

}

