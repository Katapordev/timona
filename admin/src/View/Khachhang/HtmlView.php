<?php

namespace Joomla\Component\Timona\Administrator\View\Khachhang;

defined('_JEXEC') or die;

use Exception;

use Joomla\CMS\Factory;

use Joomla\CMS\Form\Form;

use Joomla\CMS\Helper\ContentHelper;

use Joomla\CMS\Language\Multilanguage;

use Joomla\CMS\Language\Text;

use Joomla\CMS\MVC\View\GenericDataException;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

use Joomla\CMS\Pagination\Pagination;

use Joomla\CMS\Toolbar\Toolbar;

use Joomla\CMS\Toolbar\ToolbarHelper;

use Joomla\Component\Timona\Administrator\Model\KhachhangModel;

use Joomla\Registry\Registry;

class HtmlView extends BaseHtmlView

{

    protected $items = [];

    public function display($tpl = null):
        void

        {
            $user = Factory::getUser();
           // $model = $this->getModel();
            parent::display($tpl);

        }

    }
    
