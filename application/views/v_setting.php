<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jasmin - Pengaturan</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/coloshop/images/favicon.ico'); ?>">

    <!-- Bootstrap Core CSS -->

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin2/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/sbadmin2/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/coloshop/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/datetime/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" media="screen">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/bootstrap4/bootstrap.min.css'); ?>">
    <link href="<?php echo base_url('assets/sbadmin2/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/coloshop/plugins/themify-icons/themify-icons.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/plugins/jquery-ui-1.12.1.custom/jquery-ui.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/contact_styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/contact_responsive.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/main_styles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/coloshop/styles/responsive.css'); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .panel{
            margin-top: 10px;
        }
    </style>

</head>

<body>    
<div class="super_container">

    <header class="header trans_300">

        <!-- Top Navigation -->

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="top_nav_right">
                            <ul class="top_nav_menu">
                                <li class="account">
                                    <a href="<?php echo site_url('welcome/profil_2');?>">
                                        Allan Taylor
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="logo_container">
                            <a href="<?php echo site_url('welcome/beranda');?>">Jas<span>min</span></a>
                        </div>
                        <nav class="navbar">
                            <ul class="navbar_user">
                                <li class="checkout">
                                    <a href="<?php echo site_url('welcome/notifikasi');?>">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                        <span id="checkout_items" class="checkout_items">2</span>
                                    </a>
                                </li>
                                <li class="checkout">
                                    <a href="<?php echo site_url('welcome/obrolan');?>">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                        <span id="checkout_items" class="checkout_items">2</span>
                                    </a>
                                </li>
                                <li class="checkout"><a href="<?php echo site_url('welcome/setting');?>"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
                                <li class="checkout"><a href="<?php echo site_url('welcome/landing');?>"><i class="fa fa-remove" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="hamburger_container">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="fs_menu_overlay"></div>

    <!-- Hamburger Menu -->

    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="hamburger_menu_content text-right">
            <ul class="menu_top_nav">               
                <li class="menu_item has-children">
                    <a href="<?php echo site_url('welcome/setting');?>">
                        Pengaturan
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="account_selection">
                        <li><a href="<?php echo site_url('welcome/setting');?>"><i class="fa fa-cog" aria-hidden="true"></i>Akun</a></li>
                        <li><a href="<?php echo site_url('welcome/landing');?>"><i class="fa fa-remove" aria-hidden="true"></i>Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="container contact_container">
        <br>        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pengaturan Akun</h3>
                    </div>
                    <div class="panel-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email : </label>
                            ataylor@kettering.edu
                          </div>
                          <div class="form-group" align="right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalEmail">
                                <i class="fa fa-envelope-o"></i> Ubah Email
                            </button>
                            <button class="btn btn-warning" data-toggle="modal" data-target="#ModalPassword">
                                <i class="fa fa-key"></i> Ubah Password
                            </button>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Pribadi</h3>
                    </div>
                    <div class="panel-body">
                          <div class="form-group">
                            <label for="nama">Nama Lengkap : </label>
                            Allan Taylor
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ModalNama">
                                <i class="fa fa-edit"></i> Ubah
                            </button>
                          </div>                           
                          <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir : 01-12-1986 </label>
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ModalTglLahir">
                                <i class="fa fa-edit"></i> Ubah
                            </button>
                          </div>
                          <div class="form-group">
                            <label for="jk">Jenis Kelamin : </label>
                            Pria
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ModalJK">
                                <i class="fa fa-edit"></i> Ubah
                            </button>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nomor Telepon/HP : </label>
                            08320083912
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#ModalNoHp">
                                <i class="fa fa-edit"></i> Ubah
                            </button>
                          </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alamat</h3>
                    </div>
                    <div class="panel-body"> 
                        Jln. Bukit Cemara no 23, Klojen, Malang, Jawa Timur
                          <div class="form-group" align="right">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#ModalAlamat">
                                <i class="fa fa-edit"></i> Ubah
                            </button>
                          </div>                                                   
                    </div>
                </div>
            </div>
        </div>        

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                        <ul class="footer_nav">
                            <li><a href="#">FAQs</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_nav_container">
                        <div class="cr">©2018 All Rights Reserverd. <a href="#">Politeknik Negeri Malang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<div class="modal fade" id="ModalEmail" tabindex="-1" role="dialog" aria-labelledby="ModalEmailLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalEmailLabel">Ubah Email</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Alamat email">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="ModalPassword" tabindex="-1" role="dialog" aria-labelledby="ModalPasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalPasswordLabel">Ubah Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kata Sandi</label>
                    <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Kata Sandi">
                </div>
                <div class="form-group">
                    <input class="form-control" id="exampleInputPassword2" type="password" placeholder="Konfirmasi Kata Sandi">
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="ModalNama" tabindex="-1" role="dialog" aria-labelledby="ModalNamaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalNamaLabel">Ubah Nama</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" id="nama" type="text" aria-describedby="nama" placeholder="Nama Lengkap">
                          </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="ModalTglLahir" tabindex="-1" role="dialog" aria-labelledby="ModalTglLahirLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalTglLahirLabel">Ubah Tanggal Lahir</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <div class="input-group date form_datetime" data-date="" data-date-format="dd mm yyyy" data-link-field="tgl_lahir">
                                    <input class="form-control" size="16" type="text" value="" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="ModalJK" tabindex="-1" role="dialog" aria-labelledby="ModalJKLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalJKLabel">Ubah Jenis Kelamin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="ModalNoHp" tabindex="-1" role="dialog" aria-labelledby="ModalNoHpLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalNoHpLabel">Ubah No Telepon/HP</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                          <div class="form-group">
                            <label for="nama">Nomor Telepon/HP</label>
                            <input class="form-control" id="notel" type="text" aria-describedby="notel" placeholder="Nomor Telepon/HP">
                          </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="ModalAlamat" tabindex="-1" role="dialog" aria-labelledby="ModalAlamatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ModalAlamatLabel">Ubah Alamat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                        <div class="form-group">
                            <label for="prov">Alamat - Provinsi</label>
                            <select name="prov" class="form-control" id="provinsi">
                                <option>- Select Provinsi -</option>
                                <?php foreach($provinsi as $prov){
                                    echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="kab">Alamat - Kabupaten/Kota</label>
                            <select name="kab" class="form-control" id="kabupaten">
                                <option value=''>Select Kabupaten/Kota</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="kec">Alamat - Kecamatan</label>
                            <select name="kec" class="form-control" id="kecamatan">
                                <option>Select Kecamatan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="des">Alamat - Kelurahan</label>
                            <select name="des" class="form-control" id="desa">
                                <option>Select Kelurahan</option>
                            </select>
                          </div> 
                          <div class="form-group">
                            <label for="des">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3">
                                
                            </textarea>
                          </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/sbadmin2/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin2/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin2/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/sbadmin2/dist/js/sb-admin-2.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/datetime/js/bootstrap-datetimepicker.js'); ?>" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/datetime/js/locales/bootstrap-datetimepicker.id.js'); ?>" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            language:  'id',
            weekStart: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 4,
            minView: 2,
            forceParse: 0
        });
    </script>
    <script>
            $(document).ready(function(){
                $("#provinsi").change(function (){
                    var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+$(this).val();
                    $('#kabupaten').load(url);
                    return false;
                })
                
                $("#kabupaten").change(function (){
                    var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+$(this).val();
                    $('#kecamatan').load(url);
                    return false;
                })
                
                $("#kecamatan").change(function (){
                    var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
                    $('#desa').load(url);
                    return false;
                })
            });
        </script>
</body>

</html>
