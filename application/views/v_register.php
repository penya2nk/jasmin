<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jasmin - Daftar</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/coloshop/images/favicon.ico'); ?>">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/sbadmin2/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/sbadmin2/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/sbadmin2/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/coloshop/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/datetime/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" media="screen">

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

    <!-- Header -->

    <header class="header trans_300">

        <!-- Main Navigation -->

        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="logo_container">
                            <a href="#">Jas<span>min</span></a>
                        </div>
                        <nav class="navbar">
                            
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
            </ul>
        </div>
    </div>

    <div class="container contact_container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar akun baru</h3>
                    </div>
                    <div class="panel-body">
                        <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Alamat email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Kata Sandi</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Kata Sandi">
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="exampleInputPassword2" type="password" placeholder="Konfirmasi Kata Sandi">
                          </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                          <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" id="nama" type="text" aria-describedby="nama" placeholder="Nama Lengkap">
                          </div>                          
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <div class="input-group date form_datetime" data-date="" data-date-format="dd mm yyyy" data-link-field="tgl_lahir">
                                    <input class="form-control" size="16" type="text" value="" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                </div>
                            </div>
                          <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" class="form-control" id="jk">
                                <option value="1" selected="true">Pria</option>
                                <option value="0">Wanita</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nomor Telepon/HP</label>
                            <input class="form-control" id="notel" type="text" aria-describedby="notel" placeholder="Nomor Telepon/HP">
                          </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">                        
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
                          <a class="btn btn-primary btn-block" href="<?php echo site_url('welcome/landing');?>">Daftar</a>
                        </form>
                        <div class="text-center">
                            <br>
                          <p>
                            Sudah punya akun? <a href="<?php echo site_url('welcome/login');?>">Login disini</a>                            
                          </p>
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
