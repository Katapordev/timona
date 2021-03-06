<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="title" content="Bootstrap Interface Builder | Yanni">
    <meta name="description" content="Yanni is a drag-and-drop interface builder for Bootstrap.">
    <meta name="keywords" content="">
    <meta name="language" content="en">
    <title>Bootstrap Interface Builder | Yanni</title>

    <link href="app.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>

<body class="edit builder" style="min-height: 601px;">
<div class="navbar navbar-inverse navbar-fixed-top navbar-layoutit">
    <div class="navbar-header">
        <button data-target="navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="glyphicon-bar"></span>
            <span class="glyphicon-bar"></span>
            <span class="glyphicon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse">

        <ul class="nav" id="menu-layoutit">
            <li>
                <div class="btn-group" data-toggle="buttons-radio">
                    <button id="edit" class="btn btn-xs btn-primary active"><i class="glyphicon glyphicon-edit "></i>
                        Edit
                    </button>
                    <button class="btn btn-xs btn-primary" id="sourcepreview"><i
                            class="glyphicon-eye-open glyphicon"></i> Preview
                    </button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-xs btn-primary" id="button-download-modal"
                            data-target="#layoutitModal" data-toggle="modal"><i
                            class="glyphicon-chevron-down glyphicon"></i> Get source
                    </button>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="sidebar-nav">

            <ul class="nav nav-list accordion-group">
                <li class="nav-header">
                    <div class="pull-right popover-info"><i class="glyphicon glyphicon-question-sign"></i>
                        <div class="popover fade right">
                            <div class="arrow"></div>
                            <h3 class="popover-title">Help</h3>
                            <div class="popover-content">To change the column configuration you can edit the different
                                values in the input (they should add 12). If you need more info please visit <a
                                        target="_blank" href="http://getbootstrap.com/css/#grid">Bootstrap grid
                                    system.</a></div>
                        </div>
                    </div>
                    <i class="glyphicon-plus glyphicon"></i> Grid system
                </li>
                <li class="rows" id="estRows">

                    <div class="lyrow ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i>
                            remove</a>
                        <span class="drag label label-default  ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <div class="preview"><input type="text" value="12" placeholder="Enter your own"
                                                    class="form-control"></div>
                        <div class="view">
                            <div class="row">
                                <div class="col-xs-12 column"></div>
                            </div>
                        </div>
                    </div>
                    <div class="lyrow ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i>
                            remove</a>
                        <span class="drag label label-default  ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <div class="preview"><input type="text" value="6 6" placeholder="Enter your own"
                                                    class="form-control"></div>
                        <div class="view">
                            <div class="row">
                                <div class="col-xs-6 column"></div>
                                <div class="col-xs-6 column"></div>
                            </div>
                        </div>
                    </div>
                    <div class="lyrow ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i>
                            remove</a>
                        <span class="drag label label-default  ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <div class="preview"><input type="text" value="8 4" placeholder="Enter your own"
                                                    class="form-control"></div>
                        <div class="view">
                            <div class="row">
                                <div class="col-xs-8 column"></div>
                                <div class="col-xs-4 column"></div>
                            </div>
                        </div>
                    </div>
                    <div class="lyrow ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i>
                            remove</a>
                        <span class="drag label label-default  ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <div class="preview"><input type="text" value="4 4 4" placeholder="Enter your own"
                                                    class="form-control"></div>
                        <div class="view">
                            <div class="row">
                                <div class="col-xs-4 column"></div>
                                <div class="col-xs-4 column"></div>
                                <div class="col-xs-4 column"></div>
                            </div>
                        </div>
                    </div>
                    <div class="lyrow ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i>
                            remove</a>
                        <span class="drag label label-default display-none ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <div class="preview"><input type="text" value="" placeholder="Enter your own"
                                                    class="form-control"></div>
                        <div class="view">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="nav nav-list accordion-group">
                <li class="nav-header"><i class="glyphicon glyphicon-plus"></i> Forms
                </li>
                <li class="boxes" id="elmForms">
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <input type="text" value="Header" placeholder="Name of the form"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">Header</div>
                        <div class="view">
                            <div class="page-header">
                                <h1 contenteditable="true" class="yanni-label">Header</h1>
                            </div>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <span class="btn-group btn-group-xs">
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Align <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                                    <li class="active"><a href="#" rel="">Default</a></li>
                                    <li class=""><a href="#" rel="text-left">Left</a></li>
                                    <li class=""><a href="#" rel="text-center">Center</a></li>
                                    <li class=""><a href="#" rel="text-right">Right</a></li>
                                </ul>
                    </span>
                            <span class="btn-group btn-group-xs">
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Emphasis <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                                    <li class="active"><a href="#" rel="">Default</a></li>
                                    <li class=""><a href="#" rel="text-muted">Muted</a></li>
                                    <li class=""><a href="#" rel="text-primary">Primary</a></li>
                                    <li class=""><a href="#" rel="text-success">Success</a></li>
                                    <li class=""><a href="#" rel="text-info">Info</a></li>
                                    <li class=""><a href="#" rel="text-warning">Warning</a></li>
                                    <li class=""><a href="#" rel="text-danger">Danger</a></li>
                                </ul>
                    </span>
                            <input type="text" value="Title" placeholder="Name of the form" class="yanni-control-label">
                        </span>
                        <div class="preview">Title</div>
                        <div class="view">
                            <h2 contenteditable="true" class="yanni-label">Title</h2>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <span class="btn-group btn-group-xs">
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Align <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                                    <li class="active"><a href="#" rel="">Default</a></li>
                                    <li class=""><a href="#" rel="text-left">Left</a></li>
                                    <li class=""><a href="#" rel="text-center">Center</a></li>
                                    <li class=""><a href="#" rel="text-right">Right</a></li>
                                </ul>
                    </span>
                            <span class="btn-group btn-group-xs">
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Emphasis <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                                    <li class="active"><a href="#" rel="">Default</a></li>
                                    <li class=""><a href="#" rel="text-muted">Muted</a></li>
                                    <li class=""><a href="#" rel="text-primary">Primary</a></li>
                                    <li class=""><a href="#" rel="text-success">Success</a></li>
                                    <li class=""><a href="#" rel="text-info">Info</a></li>
                                    <li class=""><a href="#" rel="text-warning">Warning</a></li>
                                    <li class=""><a href="#" rel="text-danger">Danger</a></li>
                                </ul>
                    </span>

                            <a class="btn btn-xs btn-default" href="#" rel="lead">Lead</a>
                            <input type="text" value="Paragraph" placeholder="Name of the form"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">Paragraph</div>
                        <div class="view">
                            <p contenteditable="true" class="yanni-label">Paragraph
                            </p>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <input type="text" value="Text Field" placeholder="Name of the field"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">Text Field</div>
                        <div class="view">
                            <div class="form-group">
                                <label class="col-xs-3 control-label yanni-label">Text Field</label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control yanni-name" placeholder="Text"
                                           name="input_0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <input type="text" value="Check box" placeholder="Name of the field"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">Check Box</div>
                        <div class="view">
                            <div class="form-group">
                                <div class="checkbox col-xs-12">
                                    <label>
                                        <input type="checkbox" class="yanni-name" name="input_0"> <span
                                            class="yanni-label">Check box</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <input type="text" value="File upload" placeholder="Name of the field"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">File Upload</div>
                        <div class="view">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label>
                                        <span class="yanni-label">File upload</span> <input class="yanni-name"
                                                                                            type="file" name="input_0">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <input type="text" value="Text Box" placeholder="Name of the field"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">Text Box</div>
                        <div class="view">
                            <div class="form-group">
                                <label class="col-xs-3 control-label yanni-label">Text Box</label>
                                <div class="col-xs-9">
                                    <textarea class="form-control yanni-name" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <input type="text" value="Config" placeholder="Config to initialise the dropdown with"
                                   class="yanni-control-dropdown">
                            <input type="text" value="Dropdown" placeholder="Name of the field"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">Dropdown</div>
                        <div class="view">
                            <div class="form-group">
                                <label class="col-xs-3 control-label yanni-label">Dropdown</label>
                                <div class="col-xs-9">
                                    <select data-placeholder="Select an option" data-allow-clear="true"
                                            style="width: 100%"></select>
                                    <input type="hidden" class="yanni-config"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box box-element ui-draggable">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i>
                            remove</a>
                        <span class="drag label label-default ui-draggable-handle"><i
                                class="glyphicon glyphicon-move"></i> drag</span>
                        <span class="configuration">
                            <input type="text" value="Config" placeholder="Config to initialise the dropdown with"
                                   class="yanni-control-dropdown">
                            <input type="text" value="Multi-Dropdown" placeholder="Name of the field"
                                   class="yanni-control-label">
                        </span>
                        <div class="preview">Multi-Dropdown</div>
                        <div class="view">
                            <div class="form-group">
                                <label class="col-xs-3 control-label yanni-label">Multi-Dropdown</label>
                                <div class="col-xs-9">
                                    <select data-placeholder="Select an option" data-allow-clear="true"
                                            style="width: 100%" multiple="multiple"></select>
                                    <input type="hidden" class="yanni-config"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="yanni-container">
            <input value="/" type="text" placeholder="form action" class="yanni-form-action">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="">
                <div class="demo ui-sortable" style="min-height: 531px;"></div>
            </form>
        </div>

        <div id="download-layout">
            <div class="container-fluid"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="layoutitModal" tabindex="-1" role="dialog" aria-labelledby="layoutitModal"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"><textarea class="form-control" rows="30"></textarea></div>
    </div>
</div>
</body>
</html>