<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DPMPTSPD Tomohon</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="index2.html" class="logo">
                <span class="logo-mini"><b>W</b>P</span>
                <span class="logo-lg"><h4>DPMPTSP ADMIN PANEL</h4></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url();?>assets/img/user.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">USER DPMPTSP</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?php echo base_url();?>assets/img/user.png" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $this->session->userdata('nama');?>
                                        <small><?php echo $this->session->userdata('akses');?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('Web_admin/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree" style="display:none;">
                    <li class="header">PANEL ADMIN</li>
                    <li><a href="<?php echo site_url('Back_o/berita');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li><a href="<?php echo site_url('Back_o/berita');?>"><i class="fa fa-user-o"></i> <span>User</span></a></li>
                </ul> 
                <ul class="sidebar-menu" data-widget="tree" id="adminweb">
                    <li class="header">WEB CONTENT</li>
                    <li><a href="<?php echo site_url('Back_o/beranda');?>"><i class="fa fa-th-large"></i> <span>Beranda</span></a></li>
                    <li><a href="<?php echo site_url('Back_o/info_syarat');?>"><i class="fa fa-sort-alpha-asc"></i> <span>Informasi Persyaratan</span></a></li>
                    <li><a href="<?php echo site_url('Back_o/berita');?>"><i class="fa fa-check-square-o"></i> <span>Berita</span></a></li>
                    <li><a href="<?php echo site_url('Back_o/galeri');?>"><i class="fa fa-file-image-o"></i> <span>Galeri</span></a></li>
                    <li><a href="<?php echo site_url('Back_o/publikasi');?>"><i class="fa fa-clone"></i> <span>Publikasi</span></a></li>
                    <li><a href="<?php echo site_url('Back_o/dokumen');?>"><i class="fa fa-file-pdf-o"></i> <span>Dokumen Kedinasan</span></a></li>
                </ul>
                <ul class="sidebar-menu" data-widget="tree" id="adminbid">
                    <li class="header">FEEDBACK</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-television"></i> <span>SKM</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('Back_o/skm_total');?>"><i class="fa fa-bookmark-o"></i> <span>Total</span></a></li>
                            <li><a href="<?php echo site_url('Back_o/skm_detil');?>"><i class="fa fa-bookmark-o"></i> <span>Detil</span></a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Forms</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo site_url('Back_o/saran');?>"><i class="fa fa-bookmark-o"></i> <span>Saran</span></a></li>
                            <li><a href="<?php echo site_url('Back_o/pengaduan');?>"><i class="fa fa-bookmark-o"></i> <span>Pengaduan</span></a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
  
        <div class="content-wrapper">
            <?php $this->load->view($isi);?>
        </div>
  
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>dpmptsp.tomohonkota@gmail.com</b>
            </div>
            <strong>Copyright &copy; Agustus 2023</strong>
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>
    
    <script type="text/javascript">
        function setmenu()
        {
            let t = <?php echo json_encode($this->session->userdata('tipe'))?>;
            var menuweb = document.getElementById('adminweb');
            var menubid = document.getElementById('adminbid');
            if (t == 2){
                menubid.style.display = 'none';
            }
            else if(t==3){
                menuweb.style.display = 'none';
            }
        }
        window.onload= setmenu();
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/morris.js/morris.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url();?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#tabel').DataTable();
            $('#tabel1').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'scrollX':        true,
                'scrollCollapse': true,
                'autoWidth'   : false
            });
        });
    </script>
    <script>
        $(function () {
            $('#tabel3').DataTable();
            $('#tabel2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'scrollX':        true,
                'scrollCollapse': true,
                'autoWidth'   : false
            });
      });
    </script>
    <script src="<?php echo base_url();?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo base_url();?>dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/pages/dashboard.js"></script>
    <script src="<?php echo base_url();?>dist/js/demo.js"></script>
    <script src="<?php echo base_url();?>bower_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace('editor1');
            $('.textarea').wysihtml5();
        });
    </script>
</body>
</html>
