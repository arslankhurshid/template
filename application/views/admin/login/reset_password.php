<!DOCTYPE html>
<html>
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8" />
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

        
        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/admin/css/theme.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/admin/css/pages.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/admin/css/plugins.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/admin/css/responsive.css" />

        <!-- Demonstration CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/admin/css/demo.css" />

        <!-- Your Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/admin/css/custom.css" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/admin/img/favicon.ico" />
       
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title"> <i class="fa fa-pencil"></i>Forgot Password </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="resetpassword"/>
                <div class="form-group">
                    <label class="col-lg-2 text-right">Example</label>
                    <div class="col-lg-2">
                        <p class="form-control-static text-muted">email@example.com</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputStandard" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-8">
                        <input type="text" id="inputStandard" class="form-control" name="email" placeholder="Type Here..." />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info btn-gradient btn-sm">Submit</button>
                        
                    </div>
                    
                </div>
                <div> <?php 
        if($this->session->flashdata('errors'))
        {
            echo $this->session->flashdata('errors');
        } ?></div>
            </div>
            </form>
        </div>
    </div>
</div>