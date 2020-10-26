<?php

/**

 * @package     Joomla.Administrator

 * @subpackage  com_banners

 *

 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.

 * @license     GNU General Public License version 2 or later; see LICENSE.txt

 */



defined('_JEXEC') or die;



use Joomla\CMS\Factory;

use Joomla\CMS\HTML\HTMLHelper;

use Joomla\CMS\Language\Multilanguage;

use Joomla\CMS\Language\Text;

use Joomla\CMS\Layout\LayoutHelper;

use Joomla\CMS\Router\Route;

use Joomla\CMS\Session\Session;

HTMLHelper::_('behavior.multiselect');

JHtml::_('script','https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js', array('version' =>''.$time));

$document = Factory::getDocument();
$document->addScriptDeclaration('tinymce.init({selector: "#myeditablediv",inline: true});');

?>
  <script>
      
    </script>
<div class="container-fluid">
<div class="row">
<div class="col-sm-6">Editor
 <h1>TinyMCE Quick Start Guide</h1>
    <form method="post">
      <div id="myeditablediv">Click here to edit!</div>
    </form>
</div>
<div class="col-sm-6">View</div>
</div>
</div>


