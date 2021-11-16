<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BCA Education</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url('/Home/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?= base_url('/Home/css/metisMenu.min.css'); ?>" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="<?= base_url('/Home/css/dataTables/dataTables.bootstrap.css'); ?>" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="<?= base_url('/Home/css/dataTables/dataTables.responsive.css'); ?>" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url('/Home/css/startmin.css'); ?>" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?= base_url('/Home/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body>

 <div id="wrapper">
   <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url('dashboard'); ?>">BCA Education</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> -->

                <ul class="nav navbar-right navbar-top-links">
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?=ucfirst($userInfo['fullname']);?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= base_url('profile');?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="<?= base_url('profile');?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url('logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Online Videos</a>
                            </li>
                             <li>
                                <a href="<?= base_url('bonafied'); ?>"><i class="fa fa-dashboard fa-fw"></i> Apply For Bonafied</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Notes<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('notes'); ?>">FYBCA</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('synotes'); ?>">SYBCA</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('tynotes'); ?>">TYBCA</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('syllabus'); ?>"><i class="fa fa-table fa-fw"></i> Syllabus</a>
                            </li>
                            <li>
                                <a href="<?= base_url('coursestn'); ?>"><i class="fa fa-edit fa-fw"></i> Course Structure</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-edit fa-fw"></i> Ebook<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('ebooks'); ?>">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('ebooks'); ?>">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('ebooks'); ?>">Notifications</a>
                                    </li>
                                  
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                           <li>
                                <a href="<?= base_url('assignments'); ?>"><i class="fa fa-dashboard fa-fw"></i> Assignments</a>
                            </li>
                             <li>
                                <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> MCQ's Test</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-edit fa-fw"></i> Question Paper<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('questionpaper'); ?>">FYBCA</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('questionpaper'); ?>">SYBCA</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('questionpaper'); ?>">TYBCA</a>
                                    </li>
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('referencebook'); ?>"><i class="fa fa-dashboard fa-fw"></i> Reference Books</a>
                            </li>
                             <li>
                                <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Certification</a>
                            </li>
                             <li>
                                <a href="<?= base_url('reportissue'); ?>"><i class="fa fa-dashboard fa-fw"></i> Report Issue</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
             <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                          <?= $this->renderSection('content');?>
                    </div>
                  </div>
            </div>
</div>
	




     <!-- jQuery -->
        <script src="<?= base_url('/Home/js/jquery.min.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('/Home/js/bootstrap.min.js'); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url('/Home/js/metisMenu.min.js'); ?>"></script>

        <!-- DataTables JavaScript -->
        <script src="<?= base_url('/Home/js/metisMenu.min.js'); ?>"></script>
        <script src="<?= base_url('/Home/js/dataTables/dataTables.bootstrap.min.js'); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('/Home/js/startmin.js'); ?>"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?= base_url('/Home/js/raphael.min.js'); ?>"></script>
        <script src="<?= base_url('/Home/js/morris.min.js'); ?>"></script>
        <script src="<?= base_url('/Home/js/morris-data.js'); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('/Home/js/startmin.js'); ?>"></script>


        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>



</body>
</html>