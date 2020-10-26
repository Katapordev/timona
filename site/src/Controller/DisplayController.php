<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_timona
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Timona\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

use Joomla\CMS\Language\Text;

use Joomla\CMS\MVC\Controller\BaseController;

use Joomla\CMS\Router\Route;

use Joomla\Component\Timona\Administrator\Helper\TimonaHelper;

class DisplayController extends BaseController

{

    protected $default_view = 'timona';

    public function display($cachable = false, $urlparams = array())

    {

        $view = $this

            ->input

            ->get('view', 'timona');

        $layout = $this

            ->input

            ->get('layout', 'default');

        $id = $this

            ->input

            ->getInt('id');

        if ($view == 'timona' && $layout == 'edit' && !$this->checkEditId('com_timona.edit.timona', $id))

        {

            // Somehow the person just went to the form - we don't allow that.
            

            $this->setMessage(Text::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id) , 'error');

            $this->setRedirect(Route::_('index.php?option=com_timona&view=timona', false));

            return false;

        }

        elseif ($view == 'main' && $layout == 'edit' && !$this->checkEditId('com_taza.edit.main', $id))

        {

            // Somehow the person just went to the form - we don't allow that.
            

            $this->setMessage(Text::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id) , 'error');

            $this->setRedirect(Route::_('index.php?option=com_taza&view=main', false));

            return false;

        }

        return parent::display();

    }

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
            'NgayTao'
        );

        $values = array(
            $db->quote($data->iduser) ,
            $db->quote($data->name) ,
            $db->quote($data->sdt) ,
            $db->quote($data->LinkBaiViet) ,
            $db->quote($NgayTao)
        );

        $query
->insert($db->quoteName('#__timona_hocvien'))

            ->columns($db->quoteName($columns))
->values(implode(',', $values));

        $db->setQuery($query);

        $db->execute();

    }

}

