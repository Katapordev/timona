<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

use Joomla\CMS\HTML\HTMLHelper;

use Joomla\CMS\Language\Multilanguage;

use Joomla\CMS\Language\Text;

use Joomla\CMS\Layout\LayoutHelper;

use Joomla\CMS\Router\Route;

use Joomla\CMS\Session\Session;

HTMLHelper::_('behavior.multiselect');

//HTMLHelper::_('script', 'https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js', array('version' => ''));
//HTMLHelper::_('script', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js', array('version' => ''));
//HTMLHelper::_('stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css', array('version' => ''));
//HTMLHelper::_('stylesheet', 'administrator/components/com_timona/css/app.css', array('version' => ''));
//HTMLHelper::_('script', 'administrator/components/com_timona/js/app.js', array('version' => ''));

//$document = Factory::getDocument();
//
//$document->addScriptDeclaration('tinymce.init({selector: "#myeditablediv",inline: true});');

?>
<iframe src="components/com_timona/tmpl/timona/editor/editor.php" width="100%" height="800px"></iframe>

