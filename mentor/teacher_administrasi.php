

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
        <title>Administrasi</title>
        <link rel="icon" href="../assets/images/Logo FIM (high).png">

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

                    <!-- Navbar -->

                    <div class="navbar navbar-expand pr-0 navbar-dark-pickled-bluewood navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        
                         <!-- Navbar toggler -->
                         <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                            type="button"
                            data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>


                        <!-- // END Navbar Toggler -->

                        <!-- Navbar Brand -->

                        <a href="../beranda/mentor.php"
                           class="navbar-brand mr-16pt">

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                         alt="logo"
                                         class="img-fluid" /></span>

                            </span>

                            <span class="d-none d-lg-block">Administrasi</span>
                        </a>

                        <!-- // END Navbar Brand -->


                        <div class="flex"></div>

                     
                    </div>

                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">
                <div class="jumbotron">
                    <div class = "container-lg">
                        <div class = "container-sm">
                        <label for="formGroupExampleInput">kabupaten/kota</label>
                        <select name="uskabkot" id="uskabkot" class="form-control">
                            <option>-Kabupaten/Kota-</option>
                        <?php
								//mengambil nama-nama propinsi yang ada di database
							$uskabkot = mysqli_query($koneksi, "SELECT * FROM link_mentor ORDER BY nama_uskabkot");
							while($p=mysqli_fetch_array($uskabkot)){
							echo "<option value=\"$p[id_uskabkot]\">$p[nama_uskabkot]</option>\n";}
						?>
                        </select>
                        <label for="formGroupExampleInput">kelas</label>
                        <select name= "uskelas" id= "uskelas" class="form-control">
                            <option>--Pilih kelas--</option>
                        </select>
                        </select>
                        <label for="formGroupExampleInput">Pertemuan</label>
                        <select name= "pertemuan" id="pertemuan" class="form-control">
                            <option>--Pilih Pertemuan--</option>
                        </select>
                        <label for="formGroupExampleInput">Link Daftar Hadir</label>
                        <label name= "absen" id="absen" class="form-control">
                                kirim
                        </label>
                        <label for="formGroupExampleInput">Link Pengumpulan Tugas Mentor</label>
                        <label name= "doc" id="doc" class="form-control">
                                kirim
                        </label>
                    </div>
                </div>
            </div>

           
            <!-- // END Header Layout Content -->

            <!-- Footer -->

            <div class="bg-white border-top-2 mt-auto">
                    <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
                </div>
            </div>

            <!-- // END Footer -->

        </div>
        <!-- // END Header Layout -->
 <!-- Drawer -->

 <div class="mdk-drawer js-mdk-drawer"
             id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
                     data-perfect-scrollbar>

                    <!-- Sidebar Content -->

                    <a href="../beranda/mentor.php"
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

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                            href="../beranda/mentor.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
                    </ul>

                    <div class="sidebar-heading">Peserta WLG</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="../lesson/course.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                <span class="sidebar-menu-text">Video Pembelajaran</span>
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar-heading">Mentor WLG</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="teacher_profil.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people</span>
                                <span class="sidebar-menu-text">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button"
                               href="teacher_administrasi.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                <span class="sidebar-menu-text">Administrasi</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="teacher_course.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people</span>
                                <span class="sidebar-menu-text">Video Pembelajaran</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="teacher_isbn.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                                <span class="sidebar-menu-text">ISBN</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="teacher_toc.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                                <span class="sidebar-menu-text">TOC</span>
                            </a>
                        </li>
                    </ul>

                    
                    <!-- // END Sidebar Content -->

                </div>
            </div>
        </div>

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
        <!-- page script -->
        <script src="../js/jquery.min.js"></script>
	<script type="text/javascript">
var htmlobjek;
$(document).ready(function(){
//apabila terjadi event onchange terhadap object <select id=propinsi>
$("#uskabkot").change(function(){
var uskabkot = $("#uskabkot").val();
$.ajax({
url: "../get_data_user/get_user_uskelas.php",
data: "uskabkot="+uskabkot,
cache: false,
success: function(msg){
//jika data sukses diambil dari server kita tampilkan
//di <select id=kota>
$("#uskelas").html(msg);
}
});
});

$("#uskelas").change(function(){
var uskelas = $("#uskelas").val();
$.ajax({
url: "../get_data_user/get_user_pertemuan.php",
data: "uskelas="+uskelas,
cache: false,
success: function(msg){
$("#pertemuan").html(msg);
}
});
});

$("#pertemuan").change(function(){
var pertemuan = $("#pertemuan").val();
$.ajax({
url: "../get_data_user/get_user_absen.php",
data: "pertemuan="+pertemuan,
cache: false,
success: function(msg){
$("#absen").html(msg);
}
});
});

$("#kelas").change(function(){
var kelas = $("#kelas").val();
$.ajax({
url: "../get_data_user/get_user_doc.php",
data: "kelas="+kelas,
cache: false,
success: function(msg){
$("#doc").html(msg);
}
});
});

});
</script>
    </body>

</html>