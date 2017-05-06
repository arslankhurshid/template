﻿<!DOCTYPE html>
<html>
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8" />
<title>Stardom - A Responsive HTML5 Admin UI Template Theme</title>
<meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
<meta name="description" content="Stardom - A Responsive HTML5 Admin UI Template Theme" />
<meta name="author" content="Holladay" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Font CSS  -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" />

<!-- Core CSS  -->
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="fonts/glyphicons_pro/glyphicons.min.css" />

<!-- Plugin CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/vendor/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/vendor/plugins/timepicker/bootstrap-timepicker.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/vendor/plugins/colorpicker/colorpicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/vendor/plugins/datepicker/datepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/vendor/plugins/daterange/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/vendor/plugins/formswitch/css/bootstrap-switch.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/vendor/plugins/tags/tagmanager.css" />

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/theme.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/pages.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/plugins.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/responsive.css" />

<!-- Demonstration CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/demo.css" />

<!-- Your Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/custom.css" />

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>/assets/admin/img/favicon.ico" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="forms-page">
    <?php echo $form; ?>
<!-- Start: Theme Preview Pane -->
<div id="skin-toolbox">
  <div class="skin-toolbox-toggle"> <i class="fa fa-flask"></i> </div>
  <div class="skin-toolbox-panel">
    <h4 class="padding-left-sm">Theme Options</h4>
    <form id="skin-toolbox-form" />
      <div class="form-group">
        <label class="checkbox-inline">
          <input id="header-option" class="checkbox" type="checkbox" checked="" />
          Fixed <b>Header</b> </label>
      </div>
      <div class="form-group">
        <label class="checkbox-inline">
          <input id="sidebar-option" class="checkbox" type="checkbox" />
          Fixed <b>Sidebar</b> </label>
      </div>
      <div class="form-group">
        <label class="checkbox-inline option-disabled">
          <input id="breadcrumb-option" class="checkbox" type="checkbox" disabled="" />
          Fixed <b>Breadcrumbs</b> </label>
      </div>
      <hr class="short" style="margin: 7px 10px;" />
      <div class="form-group">
        <label class="checkbox-inline">
          <input id="breadcrumb-hidden" class="checkbox" type="checkbox" />
          Hide <b>Breadcrumbs</b> </label>
      </div>
      <div class="form-group margin-bottom-lg">
        <label class="checkbox-inline">
          <input id="searchbar-hidden" class="checkbox" type="checkbox" />
          Hide <b>Search Bar</b> </label>
      </div>
      <h4 class="padding-left-sm">Layout Options</h4>
      <div class="form-group">
        <label class="radio-inline">
          <input class="radio" type="radio" name="optionsRadios" id="fullwidth-option" checked="" />
          Fullwidth </label>
      </div>
      <div class="form-group">
        <label class="radio-inline">
          <input class="radio" type="radio" name="optionsRadios" id="boxed-option" />
          Boxed Layout</label>
      </div>
      <hr class="short" />
      <div class="form-group"> <a href="customizer.html" id="customizer-link" class="btn btn-warning btn-gradient btn-block padding-bottom padding-top">CUSTOMIZER</a> </div>
    </form>
  </div>
</div>
<!-- End: Theme Preview Pane --> 

<!-- Start: Header -->
<header class="navbar navbar-fixed-top">
  <div class="pull-left"> <a class="navbar-brand" href="dashboard.html">
    <div class="navbar-logo"><img src="img/logos/logo-red.png" class="img-responsive" alt="logo" /></div>
    </a> </div>
  <div class="pull-right header-btns">
    <div class="messages-menu">
      <button type="button" class="btn btn-default btn-gradient btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-comment"></span> <b>4</b> </button>
      <ul class="dropdown-menu checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Recent Messages <span class="pull-right glyphicons glyphicons-comment"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-avatar"><img src="img/avatars/header/2.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Maggie</b> - <small class="text-muted">12 minutes ago</small><br />
                Great work Yesterday!</div>
            </li>
            <li>
              <div class="item-avatar"><img src="img/avatars/header/3.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Robert</b> - <small class="text-muted">3 hours ago</small><br />
                Is the Titan Project still on?</div>
            </li>
            <li>
              <div class="item-avatar"><img src="img/avatars/header/1.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Cynthia</b> - <small class="text-muted">14 hours ago</small><br />
                Don't forget about the staff meeting tomorrow</div>
            </li>
            <li>
              <div class="item-avatar"><img src="img/avatars/header/4.jpg" class="img-responsive" alt="avatar" /></div>
              <div class="item-message"><b>Matt</b> - <small class="text-muted">2 days ago</small><br />
                Thor Project cancelled, Sorry.</div>
            </li>
          </ul>
        </li>
        <li class="dropdown-footer"><a href="#">View All Messages <i class="fa fa-caret-right"></i> </a></li>
      </ul>
    </div>
    <div class="alerts-menu">
      <button type="button" class="btn btn-default btn-gradient btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicons glyphicons-bell"></span> <b>3</b> </button>
      <ul class="dropdown-menu checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Recent Alerts <span class="pull-right glyphicons glyphicons-bell"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-icon"><i style="color: #0066ad;" class="fa fa-facebook"></i> </div>
              <div class="item-message"><a href="#">Facebook likes reached <b>8,200</b></a></div>
            </li>
            <li>
              <div class="item-icon"><i style="color: #5cb85c;" class="fa fa-check"></i> </div>
              <div class="item-message"><a href="#">Robert <b>completed task</b> - Client SEO Revamp</a></div>
            </li>
            <li>
              <div class="item-icon"><i style="color: #f0ad4e" class="fa fa-user"></i> </div>
              <div class="item-message"><a href="#"><b>Marko</b> logged 12 hours</a></div>
            </li>
          </ul>
        </li>
        <li class="dropdown-footer"><a href="#">View All Alerts <i class="fa fa-caret-right"></i> </a></li>
      </ul>
    </div>
    <div class="tasks-menu">
      <button type="button" class="btn btn-default btn-gradient btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicons glyphicons-tag"></span> <b>7</b> </button>
      <ul class="dropdown-menu dropdown-checklist checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Recent Tasks <span class="pull-right glyphicons glyphicons-tag"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-icon"><i class="fa fa-pencil"></i> </div>
              <div class="item-message text-slash"><a>Try Clicking me!</a></div>
              <div class="item-label"><span class="label label-danger">Urgent</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox" />
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-phone"></i> </div>
              <div class="item-message text-slash"><a>Contact Client and request Approval</a></div>
              <div class="item-label"><span class="label label-info">Normal</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox" />
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-flask"></i> </div>
              <div class="item-message text-slash"><a>Find new Python Developer </a></div>
              <div class="item-label"><span class="label label-success">Completed</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox" />
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-facebook"></i> </div>
              <div class="item-message text-slash"><a>Update Facebook Page with Halloween Pictures</a></div>
              <div class="item-label"><span class="label label-primary">In Progress</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox" />
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-group"></i> </div>
              <div class="item-message text-slash"><a>Organize next Staff Meeting</a></div>
              <div class="item-label"><span class="label label-success">Completed</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox" />
              </div>
            </li>
            <li>
              <div class="item-icon"><i class="fa fa-plane"></i> </div>
              <div class="item-message text-slash"><a>Interview new applicant</a></div>
              <div class="item-label"><span class="label label-warning">Moderate</span></div>
              <div class="item-checkbox">
                <input class="checkbox row-checkbox" type="checkbox" />
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown-footer"><a href="#">View All Tasks <i class="fa fa-caret-right"></i> </a></li>
      </ul>
    </div>
    <div class="btn-group user-menu">
      <button type="button" class="btn btn-default btn-gradient btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicons glyphicons-user"></span> <b>Holladay</b> </button>
      <button type="button" class="btn btn-default btn-gradient btn-sm dropdown-toggle padding-none" data-toggle="dropdown"> <img src="img/avatars/header/header-login.png" alt="user avatar" width="28" height="28" /> </button>
      <ul class="dropdown-menu checkbox-persist" role="menu">
        <li class="menu-arrow">
          <div class="menu-arrow-up"></div>
        </li>
        <li class="dropdown-header">Your Account <span class="pull-right glyphicons glyphicons-user"></span></li>
        <li>
          <ul class="dropdown-items">
            <li>
              <div class="item-icon"><i class="fa fa-envelope-o"></i> </div>
              <a class="item-message" href="messages.html">Messages</a> </li>
            <li>
              <div class="item-icon"><i class="fa fa-calendar"></i> </div>
              <a class="item-message" href="calendar.html">Calendar</a> </li>
            <li class="border-bottom-none">
              <div class="item-icon"><i class="fa fa-cog"></i> </div>
              <a class="item-message" href="customizer.html">Settings</a> </li>
            <li class="padding-none">
              <div class="dropdown-lockout"><i class="fa fa-lock"></i> <a href="screen-lock.html">Screen Lock</a></div>
              <div class="dropdown-signout"><i class="fa fa-sign-out"></i> <a href="login.html">Sign Out</a></div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>
<!-- End: Header --> 
<!-- Start: Main -->
<div id="main"> 
  <!-- Start: Sidebar -->
  <aside id="sidebar">
    <div id="sidebar-search">
      <form role="search" />
        <input type="text" class="search-bar form-control" placeholder="Search" />
        <i class="fa fa-search field-icon-right"></i>
        <button type="submit" class="btn btn-default hidden"></button>
      </form>
      <div class="sidebar-toggle"> <i class="fa fa-bars"></i> </div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li> <a href="portlets.html"><span class="glyphicons glyphicons-sort"></span><span class="sidebar-title">Portlets</span></a> </li>
        <li> <a href="dashboard.html"><span class="glyphicons glyphicons-star"></span><span class="sidebar-title">Dashboard</span></a> </li>
        <li> <a class="accordion-toggle collapsed" href="#resources"><span class="glyphicons glyphicons-settings"></span><span class="sidebar-title">Resources</span><span class="caret"></span></a>
          <ul id="resources" class="nav sub-nav">
            <li><a href="customizer.html"><span class="glyphicons glyphicons-edit"></span> Theme Customizer</a></li>
            <li><a href="documentation/index.html"><span class="glyphicons glyphicons-book"></span> Documentation </a></li>
          </ul>
        </li>
        <li> <a class="accordion-toggle collapsed" href="#sideOne"><span class="glyphicons glyphicons-adjust_alt"></span><span class="sidebar-title">UI Elements</span><span class="caret"></span></a>
          <ul id="sideOne" class="nav sub-nav">
            <li><a href="buttons.html"><span class="glyphicons glyphicons-macbook"></span> Buttons</a></li>
            <li><a href="typography.html"><span class="glyphicons glyphicons-font"></span> Typography</a></li>
            <li><a href="elements.html"><span class="glyphicons glyphicons-paperclip"></span> Elements</a></li>
            <li><a href="charts.html"><span class="glyphicons glyphicons-stats"></span> Charts</a></li>
            <li><a href="tabs.html"><span class="glyphicons glyphicons-adjust"></span> Tabs</a></li>
            <li><a href="grid.html"><span class="glyphicons glyphicons-show_big_thumbnails"></span> Grid</a></li>
          </ul>
        </li>
        <li class="active"> <a class="accordion-toggle" href="#sideTwo"><span class="glyphicons glyphicons-vcard"></span><span class="sidebar-title">Form Elements</span><span class="caret"></span></a>
          <ul id="sideTwo" class="nav sub-nav menu-open">
            <li class="active"><a href="forms.html"><span class="glyphicons glyphicons-link"></span> Form Elements</a></li>
            <li><a href="validation.html"><span class="glyphicons glyphicons-ok"></span> Form Validation</a></li>
            <li><a href="wizard.html"><span class="glyphicons glyphicons-magic"></span> Form Wizard</a></li>
            <li><a href="editors.html"><span class="glyphicons glyphicons-pencil"></span> Editors</a></li>
            <li><a href="editable.html"><span class="glyphicons glyphicons-edit"></span> Inline Editing</a></li>
            <li><a href="xedit.html"><span class="glyphicons glyphicons-check"></span> X-editable</a></li>
          </ul>
        </li>
        <li> <a class="accordion-toggle collapsed" href="#sideThree"><span class="glyphicons glyphicons-table"></span><span class="sidebar-title">Tables</span><span class="caret"></span></a>
          <ul id="sideThree" class="nav sub-nav">
            <li><a href="tables.html"><span class="glyphicons glyphicons-justify"></span> Tables</a></li>
            <li><a href="datatables.html"><span class="glyphicons glyphicons-list"></span> DataTables</a></li>
            <li><a href="pricing-tables.html"><span class="glyphicons glyphicons-usd"></span> Pricing Tables</a></li>
          </ul>
        </li>
        <li> <a class="accordion-toggle collapsed" href="#sideFour"><span class="glyphicons glyphicons-cargo"></span><span class="sidebar-title">File Managers</span><span class="caret"></span></a>
          <ul id="sideFour" class="nav sub-nav">
            <li><a href="file-manager.html"><span class="glyphicons glyphicons-cloud"></span> File Manager</a></li>
            <li><a href="upload-tools.html"><span class="glyphicons glyphicons-cloud-upload"></span> File Uploaders</a></li>
            <li><a href="dynamic-gallery.html"><span class="glyphicons glyphicons-picture"></span> Dynamic Gallery</a></li>
            <li><a href="image-tools.html"><span class="glyphicons glyphicons-camera"></span> Image Tools</a></li>
          </ul>
        </li>
        <li> <a class="accordion-toggle collapsed" href="#sideFive"><span class="glyphicons glyphicons-magic"></span><span class="sidebar-title">Extras</span><span class="caret"></span></a>
          <ul id="sideFive" class="nav sub-nav">
            <li><a href="icons.html"><span class="glyphicons glyphicons-flash"></span> Icons</a></li>
            <li><a href="animations.html"><span class="glyphicons glyphicons-fire"></span> Animations</a></li>
            <li><a href="sliders.html"><span class="glyphicons glyphicons-retweet"></span> Sliders</a></li>
            <li><a href="sketchpad.html"><span class="glyphicons glyphicons-vector_path_square"></span> Sketchpad</a></li>
          </ul>
        </li>
        <li> <a href="maps.html"><span class="glyphicons glyphicons-globe"></span><span class="sidebar-title">Maps</span></a> </li>
        <li> <a href="widgets.html"><span class="glyphicons glyphicons-restart"></span><span class="sidebar-title">Widgets</span></a> </li>
        <li> <a class="accordion-toggle collapsed" href="#sideSix"><span class="glyphicons glyphicons-book_open"></span><span class="sidebar-title">Pages</span><span class="caret"></span></a>
          <ul id="sideSix" class="nav sub-nav">
            <li><a href="invoice-page.html"><span class="glyphicons glyphicons glyphicons-print"></span> Printable Invoice</a></li>
            <li><a href="timeline.html"><span class="glyphicons glyphicons-film"></span> Timeline</a></li>
            <li><a href="gallery.html"><span class="glyphicons glyphicons-picture"></span> Gallery</a></li>
            <li><a href="calendar.html"><span class="glyphicons glyphicons-calendar"></span> Calendar</a></li>
            <li><a href="messages.html"><span class="glyphicons glyphicons-envelope"></span> Messages</a></li>
            <li><a href="profile.html"><span class="glyphicons glyphicons-user"></span> User Profile</a></li>
          </ul>
        </li>
        <li> <a class="accordion-toggle collapsed" href="#sideSeven"><span class="glyphicons glyphicons-warning_sign"></span><span class="sidebar-title">Utility Pages</span><span class="caret"></span></a>
          <ul id="sideSeven" class="nav sub-nav">
            <li><a href="faq.html"><span class="glyphicons glyphicons-edit"></span> Faq Page</a></li>
            <li><a href="login.html"><span class="glyphicons glyphicons-power"></span> Login Page</a></li>
            <li><a href="screen-lock.html"><span class="glyphicons glyphicons-lock"></span> Screen Lock</a></li>
            <li><a href="coming-soon.html"><span class="glyphicons glyphicons-road"></span> Coming Soon</a></li>
            <li><a href="404-page.html"><span class="glyphicons glyphicons-circle_remove"></span> 404 Page</a></li>
            <li><a href="500-page.html"><span class="glyphicons glyphicons-circle_exclamation_mark"></span> 500 Page</a></li>
            <li><a href="blank.html"><span class="glyphicons glyphicons-unchecked"></span> Blank Page</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End: Sidebar --> 
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar">
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-home"></i></a></li>
        <li><a href="index.html">Home</a></li>
        <li class="active">Form Elements</li>
      </ol>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Picker Fields </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label for="cp" class="col-lg-2 control-label">Color</label>
                      <div class="col-md-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-hand-o-right"></i> </span>
                          <input type="text" class="form-control colorpicker margin-top-none" id="cp" placeholder="#37a8e8" value="#37a8e8" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cp2" class="col-lg-2 control-label">RGBa</label>
                      <div class="col-md-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-hand-o-right"></i> </span>
                          <input type="text" class="form-control rgbapicker" value="rgb(0,194,255,1.00)" id="cp2" data-color-format="rgba" data-colorpicker-guid="2" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="timepicker" class="col-lg-2 control-label">Time</label>
                      <div class="col-md-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar "></i> </span>
                          <input type="text" id="timepicker" class="form-control timepicker" placeholder="9:00 PM" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="datepicker" class="col-lg-2 control-label">Date</label>
                      <div class="col-md-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                          <input type="text" id="datepicker" class="form-control datepicker margin-top-none" placeholder="23/9/2013" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="datepicker_2" class="col-lg-2 control-label">Date Range</label>
                      <div class="col-md-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar "></i> </span>
                          <input type="text" id="datepicker_2" class="form-control margin-top-none" placeholder="10/25/2013 - 10/25/2013" name="daterange" />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Checkboxes and Switches </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label class="col-md-3 col-lg-2 control-label">Radios</label>
                      <div class="col-md-9">
                        <label class="radio-inline">
                          <input class="radio" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />
                          1 </label>
                        <label class="radio-inline">
                          <input class="radio" type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                          2 </label>
                        <label class="radio-inline">
                          <input class="radio" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" />
                          3 </label>
                        <label class="radio-inline">
                          <input class="radio" type="radio" name="optionsRadios" id="optionsRadios4" value="option4" />
                          4 </label>
                        <label class="radio-inline">
                          <input class="radio" type="radio" name="optionsRadios" id="optionsRadios5" value="option5" />
                          5 </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 col-lg-2 control-label">Checkboxes</label>
                      <div class="col-md-9">
                        <label class="checkbox-inline">
                          <input class="checkbox" type="checkbox" id="inlineCheckbox1" value="option1" />
                          1 </label>
                        <label class="checkbox-inline">
                          <input class="checkbox" type="checkbox" id="inlineCheckbox2" value="option2" />
                          2 </label>
                        <label class="checkbox-inline">
                          <input class="checkbox" type="checkbox" id="inlineCheckbox3" value="option3" />
                          3 </label>
                        <label class="checkbox-inline">
                          <input class="checkbox" type="checkbox" id="inlineCheckbox4" value="option4" />
                          4 </label>
                        <label class="checkbox-inline">
                          <input class="checkbox" type="checkbox" id="inlineCheckbox5" value="option5" />
                          5 </label>
                        <label class="checkbox-inline">
                          <input class="checkbox" type="checkbox" id="inlineCheckbox6" value="option6" />
                          6 </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 col-lg-2 control-label">Switches</label>
                      <div class="col-md-9">
                        <div class="make-switch" data-on="info" data-off="success">
                          <input type="checkbox" checked="" />
                        </div>
                        <div class="make-switch" data-on="success" data-off="warning">
                          <input type="checkbox" checked="" />
                        </div>
                        <div class="make-switch" data-on="warning" data-off="danger">
                          <input type="checkbox" checked="" />
                        </div>
                        <div class="make-switch" data-on="danger" data-off="default">
                          <input type="checkbox" checked="" />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Tag manager </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label for="tagmanager" class="col-md-2 control-label">Tag Field</label>
                      <div class="col-md-10">
                        <input type="text" id="tagmanager" class="form-control tm-input" placeholder="Create a new tag.." />
                        <div class="tag-container"> </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Easy Icons </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label class="col-md-2 text-right">With Icons</label>
                      <div class="col-md-10">
                        <div class="input-group margin-bottom"> <span class="input-group-addon"><i class="fa fa-envelope-o"></i> </span>
                          <input class="form-control" type="text" placeholder="Email address" />
                        </div>
                        <div class="input-group margin-bottom"> <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                          <input class="form-control" type="password" placeholder="Password" />
                        </div>
                        <div class="input-group margin-bottom">
                          <input class="form-control" type="text" placeholder="Numbers" />
                          <span class="input-group-addon">00</span> </div>
                        <div class="input-group">
                          <input class="form-control" type="password" placeholder="Money" />
                          <span class="input-group-addon"><i class="fa fa-usd"></i> </span> </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Select Lists </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label for="chosen-list1" class="col-md-3 control-label">Fancy Select</label>
                      <div class="col-md-9">
                        <select class="form-control" id="chosen-list1">
                          <option />1
                          <option />2
                          <option />3
                          <option />4
                          <option />5
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="chosen-list2" class="col-md-3 control-label">Fancy Multiple</label>
                      <div class="col-md-9">
                        <select multiple="" class="form-control" id="chosen-list2">
                          <option />1
                          <option />2
                          <option />3
                          <option />4
                          <option />5
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="standard-list1" class="col-md-3 control-label">Standard Select</label>
                      <div class="col-md-9">
                        <select class="form-control" id="standard-list1">
                          <option />1
                          <option />2
                          <option />3
                          <option />4
                          <option />5
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="standard-list2" class="col-md-3 control-label">Standard Multiple</label>
                      <div class="col-md-9">
                        <select multiple="" class="form-control" id="standard-list2">
                          <option />1
                          <option />2
                          <option />3
                          <option />4
                          <option />5
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Speciality Spinners </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label for="spinner1" class="col-lg-2 control-label">Spinner</label>
                      <div class="col-lg-6">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-level-up"></i> </span>
                          <input id="spinner1" class="form-control ui-spinner-input" name="spinner" value="15" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="spinner2" class="col-lg-2 control-label">Currency Spinner</label>
                      <div class="col-lg-6">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-usd"></i> </span>
                          <input id="spinner2" class="form-control ui-spinner-input" name="spinner" value="35" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="spinner3" class="col-lg-2 control-label">Decimal</label>
                      <div class="col-lg-6">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-signal"></i> </span>
                          <input id="spinner3" class="form-control ui-spinner-input" name="spinner" value="13.5" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="spinner4" class="col-lg-2 control-label">Time</label>
                      <div class="col-lg-6">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-clock-o"></i> </span>
                          <input id="spinner4" class="form-control ui-spinner-input" name="spinner" value="08:30 PM" />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
   
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Masked Input Fields </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label for="maskedDate" class="col-lg-2 control-label">Date</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                          <input type="text" id="maskedDate" class="form-control date" maxlength="10" autocomplete="off" placeholder="11/11/1111" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedTime" class="col-lg-2 control-label">Time</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-clock-o"></i> </span>
                          <input type="text" id="maskedTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="00:00:00" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedMultiple" class="col-lg-2 control-label">Date and Time</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-clock-o"></i> </span>
                          <input type="text" id="maskedMultiple" class="form-control date_time" maxlength="10" autocomplete="off" placeholder="99/99/9999 00:00:00" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedZip" class="col-lg-2 control-label">Zip Code</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-bolt"></i> </span>
                          <input type="text" id="maskedZip" class="form-control zip" maxlength="10" autocomplete="off" placeholder="99999-999" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedPhone" class="col-lg-2 control-label">Phone</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-phone"></i> </span>
                          <input type="text" id="maskedPhone" class="form-control phone" maxlength="10" autocomplete="off" placeholder="(999) 999-9999" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedExt" class="col-lg-2 control-label">Phone + Ext</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-phone"></i> </span>
                          <input type="text" id="maskedExt" class="form-control phoneext" maxlength="10" autocomplete="off" placeholder="9999-9999" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedMoney" class="col-lg-2 control-label">Money</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-usd"></i> </span>
                          <input type="text" id="maskedMoney" class="form-control money" maxlength="10" autocomplete="off" placeholder="000.000.000.000" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedKey" class="col-lg-2 control-label">Product Key</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                          <input type="text" id="maskedKey" class="form-control product" maxlength="10" autocomplete="off" placeholder="000.000.000.000,00" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedID" class="col-lg-2 control-label">Tax ID</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-gavel"></i> </span>
                          <input type="text" id="maskedID" class="form-control tin" maxlength="10" autocomplete="off" placeholder="99999-999" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedSSN" class="col-lg-2 control-label">SSN</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-exclamation"></i> </span>
                          <input type="text" id="maskedSSN" class="form-control ssn" maxlength="10" autocomplete="off" placeholder="999-99-9999" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedScript" class="col-lg-2 control-label">Eye Script</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-eye"></i> </span>
                          <input type="text" id="maskedScript" class="form-control eyescript" maxlength="10" autocomplete="off" placeholder="0ZZ.0ZZ.0ZZ.0ZZ" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="maskedCustom" class="col-lg-2 control-label">Custom</label>
                      <div class="col-lg-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-flask"></i> </span>
                          <input type="text" id="maskedCustom" class="form-control custom" maxlength="10" autocomplete="off" placeholder="1-22-333-4444" />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <i class="fa fa-pencil"></i> Fields Options </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" />
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="inputSmall">Small</label>
                      <div class="col-lg-10">
                        <input id="inputSmall" class="form-control input-sm" type="text" placeholder=".input-sm" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="inputDefault">Default</label>
                      <div class="col-lg-10">
                        <input id="inputDefault" class="form-control" type="text" placeholder="default style" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="inputLarge">Large</label>
                      <div class="col-lg-10">
                        <input id="inputLarge" class="form-control input-lg" type="text" placeholder=".input-lg" />
                      </div>
                    </div>
                    <div class="row form-group">
                      <label class="col-md-2 text-right">Input Lengths</label>
                      <div class="col-xs-2">
                        <input type="text" class="form-control" placeholder=".col-xs-2" />
                      </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" placeholder=".col-xs-3" />
                      </div>
                      <div class="col-xs-5">
                        <input type="text" class="form-control" placeholder=".col-xs-4" />
                      </div>
                    </div>
                    <hr />
                    <div class="form-group">
                      <label for="inputInline" class="col-lg-2 control-label">Inline Help Text</label>
                      <div class="col-lg-5">
                        <input id="inputInline" type="text" class="form-control" placeholder="Text Field" />
                      </div>
                      <div class="col-lg-4 padding-left-sm"><span class="help-block margin-top-sm"><i class="fa fa-bell"></i> A block of help text!</span> </div>
                    </div>
                    <div class="form-group">
                    <label for="inputHelp" class="col-lg-2 control-label">Help Text</label>
                    <div class="col-lg-10">
                      <input id="inputHelp" type="text" class="form-control" placeholder="Text Field" />
                      <span class="help-block margin-top-sm"><i class="fa fa-bell"></i> A block of help text that can help the user</span> </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --> 

<!-- Core Javascript - via CDN --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> 

<!-- Plugins --> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/globalize/globalize.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/daterange/moment.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/daterange/daterangepicker.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/colorpicker/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/timepicker/bootstrap-timepicker.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/datepicker/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/formswitch/js/bootstrap-switch.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/vendor/plugins/tags/tagmanager.js"></script> 

<!-- Theme Javascript --> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/uniform.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/custom.js"></script> 
<script type="text/javascript">
 jQuery(document).ready(function() {

	 // Init Theme Core
	 Core.init();

	 //Init jquery Date Picker
	 $('.datepicker').datepicker()
	 
	 //Init jquery Date Range Picker
	 $('input[name="daterange"]').daterangepicker();
	 
	 //Init jquery Color Picker
	 $('.colorpicker').colorpicker() 
	 $('.rgbapicker').colorpicker() 
	 
	 //Init jquery Time Picker
	 $('.timepicker').timepicker();
	  
	 //Init jquery Tags Manager 
	 $(".tm-input").tagsManager({
        tagsContainer: '.tag-container',
		prefilled: ["Miley Cyrus", "Apple", "Wow This is a really Long tag", "Na uh"],
		tagClass: 'tm-tag-info',
     });

	 //Init jquery spinner init - default  
	 $(".checkbox").uniform();
 	 $(".radio").uniform();

	//Init jquery spinner init - default
	$("#chosen-list1").chosen();
	$("#chosen-list2").chosen(); 
	  
	//Init jquery spinner init - default
	$("#spinner1").spinner();
	
	//Init jquery spinner init - currency 
	$("#spinner2").spinner({
      min: 5,
      max: 2500,
      step: 25,
      start: 1000,
      //numberFormat: "C"
    });
	
	//Init jquery spinner init - decimal  
	$( "#spinner3" ).spinner({
      step: 0.01,
      numberFormat: "n"
    });
	
	//Init jquery time spinner
    $.widget( "ui.timespinner", $.ui.spinner, {
		options: {
		  // seconds
		  step: 60 * 1000,
		  // hours
		  page: 60
		},
		_parse: function( value ) {
		  if ( typeof value === "string" ) {
			// already a timestamp
			if ( Number( value ) == value ) {
			  return Number( value );
			}
			return +Globalize.parseDate( value );
		  }
		  return value;
		},
	 
		_format: function( value ) {
		  return Globalize.format( new Date(value), "t" );
		}
	  });
    $( "#spinner4" ).timespinner();

	//Init jquery masked inputs
	$('.date').mask('99/99/9999');
	$('.time').mask('99:99:99');
	$('.date_time').mask('99/99/9999 99:99:99');
	$('.zip').mask('99999-999');
	$('.phone').mask('(999) 999-9999');
	$('.phoneext').mask("(999) 999-9999 x99999");
	$(".money").mask("999,999,999.999"); 
	$(".product").mask("999.999.999.999"); 
	$(".tin").mask("99-9999999");
	$(".ssn").mask("999-99-9999");
	$(".ip").mask("9ZZ.9ZZ.9ZZ.9ZZ");
	$(".eyescript").mask("~9.99 ~9.99 999");
	$(".custom").mask("9.99.999.9999");
	
});
</script>
</body>
</html>
