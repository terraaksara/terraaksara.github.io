<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
    <?php include "../database_connection/connection.php"; ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Daftar Hadir</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="../public/vendor/spinkit.css"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="../public/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="../public/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="../public/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="../public/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="../public/css/app.css"
              rel="stylesheet">

    </head>

    <body class="layout-sticky-subnav layout-default ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header mb-0"
                 data-fixed
                 data-effects="">
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="../beranda/peserta.php"
                           class="navbar-brand mr-16pt">
                            <!-- <img class="navbar-brand-icon" src="../../public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                         alt="logo"
                                         class="img-fluid" /></span>

                            </span>

                            <span class="d-none d-lg-block">Daftar Hadir</span>
                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                            <li class="nav-item">
                                <a href="../beranda_Peserta.html"
                                   class="nav-link">Home</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">
                <div class="jumbotron">
                    <div class = "container-lg">
                        <div class = "container-sm">
                        <label for="formGroupExampleInput">Pertemuan</label>
                        <select name= "pertemuan" id="pertemuan" class="form-control">
                            <option>---Pilih Pertemuan--</option>
                        <?php 
                            $pertemuan = mysqli_query($koneksi, "SELECT * FROM panitia_pertemuan ORDER BY nama_pertemuan");
                            while($p=mysqli_fetch_array($pertemuan)){
                                echo "<option value=\"$p[id_pertemuan]\">$p[nama_pertemuan]</option>\n";
                            }
                        ?>
                        </select>
                        <label for="formGroupExampleInput">Jenjang</label>
                        <select name= "jenjang" id="jenjang" class="form-control">
                            <option>---Pilih Jenjang--</option>
                        </select>
                        <label for="formGroupExampleInput">Link</label>
                        <label name= "link" id="link" class="form-control">
                                kirim
                            </label>
                        <table class="table">
                            <thead>
                             <tr>
                                <th scope="col"></th>
                             </tr>
                    </div>
                </div>
            </div>
            <!-- // END Header Layout Content -->
            <div class="bg-white border-top-2 mt-auto">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                </div>
            </div>
            <!-- Drawer -->

            <div class="mdk-drawer js-mdk-drawer"
             id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left fixed-top"
                     data-perfect-scrollbar>

                    <!-- Sidebar Content -->

                    <a href="../index.php"
                       class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                     class="img-fluid"
                                     alt="logo" /></span>

                        </span>

                        <span>Wisata Literasi<br>Guru</span>
                    </a>
                    <div class="sidebar-heading">Home</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button"
                            href="../index.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                    </ul>

                   
                </div>
            </div>
        </div>

        <!-- // END Drawer -->
            
         
                         

                    <!-- // END Sidebar Content -->

        <!-- // END Drawer -->

        <!-- jQuery -->
        <script src="../public/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="../public/vendor/popper.min.js"></script>
        <script src="../public/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="../public/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="../public/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="../public/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="../public/js/app.js"></script>

        <!-- Preloader -->
        <script src="../public/js/preloader.js"></script>
        <script src="../js/jquery.min.js"></script>
	<script type="text/javascript">
var htmlobjek;
$(document).ready(function(){
//apabila terjadi event onchange terhadap object <select id=propinsi>
$("#pertemuan").change(function(){
var pertemuan = $("#pertemuan").val();
$.ajax({
url: "../get_data_panitia/get_data_jenjang.php",
data: "pertemuan="+pertemuan,
cache: false,
success: function(msg){
$("#jenjang").html(msg);
}
});
});

$("#jenjang").change(function(){
var pertemuan = $("#jenjang").val();
$.ajax({
url: "../get_data_panitia/get_data_link.php",
data: "jenjang="+jenjang,
cache: false,
success: function(msg){
$("#link").html(msg);
}
});
});

});
</script>

    </body>

</html>