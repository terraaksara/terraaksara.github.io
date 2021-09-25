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
        <title>Tugas</title>
        <link rel="icon" href="assets/images/Logo FIM (high).png">

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

                        <!-- Navbar Toggler -->

                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- // END Navbar Toggler -->

                        <!-- Navbar Brand -->

                        <a href="index.html"
                           class="navbar-brand mr-16pt">

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                         alt="logo"
                                         class="img-fluid" /></span>

                            </span>

                            <span class="d-none d-lg-block">Pengumpulan Tugas</span>
                        </a>

                        <div class="flex"></div>

                        <!-- Navbar Menu -->

                        <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

                            <div class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link d-flex align-items-center dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">

                                </a>
                            </div>
                        </div>

                        <!-- // END Navbar Menu -->

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
                        <select name="kabkot" id="kabkot" class="form-control">
                            <option>-Kabupaten/Kota-</option>
                        <?php
								//mengambil nama-nama propinsi yang ada di database
							$kabkot = mysqli_query($koneksi, "SELECT * FROM kabupaten_kota ORDER BY nama_kabkot");
							while($p=mysqli_fetch_array($kabkot)){
							echo "<option value=\"$p[id_kabkot]\">$p[nama_kabkot]</option>\n";}
						?>
                        </select>
                        <label for="formGroupExampleInput">Mentor</label>
                        <select name= "mentor" id= "mentor" class="form-control">
                            <option>--Pilih Mentor--</option>
                        </select>
                        <label for="formGroupExampleInput">Kelas</label>
                        <select name= "kelas" id="kelas" class="form-control">
                            <option>---Pilih Kelas--</option>
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

            <!-- Footer -->

           

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

               <a href="index.html"
                  class="sidebar-brand ">
                   <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                   <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                       <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                class="img-fluid"
                                alt="logo" /></span>

                   </span>

                   <span>Wisata Literasi<br>Guru</span>
               </a>
               <div class="sidebar-heading">Materi</div>
               <ul class="sidebar-menu">

                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                       href="../lesson/lesson_video/Pertemuan (1)/student_lesson.php">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                           <span class="sidebar-menu-text">Menjadi Guru Istimewa</span>
                       </a>
                   </li>
               </ul>
               <div class="sidebar-heading">Tugas</div>
               <ul class="sidebar-menu">

                   <li class="sidebar-menu-item active">
                       <a class="sidebar-menu-button"
                       href="quiz.php">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                           <span class="sidebar-menu-text">Menulis Kata</span>
                       </a>
                   </li>
               </ul>
               <div class="sidebar-heading">Daftar Hadir</div>
               <ul class="sidebar-menu">

                   <li class="sidebar-menu-item ">
                       <a class="sidebar-menu-button"
                       href="../lesson/presention.php">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people</span>
                           <span class="sidebar-menu-text">Pertemuan 1</span>
                       </a>
                   </li>
               </ul>


               
               <!-- // END Sidebar Content -->
        
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
$("#kabkot").change(function(){
var kabkot = $("#kabkot").val();
$.ajax({
url: "../get_data/get_data_mentor.php",
data: "kabkot="+kabkot,
cache: false,
success: function(msg){
//jika data sukses diambil dari server kita tampilkan
//di <select id=kota>
$("#mentor").html(msg);
}
});
});

$("#mentor").change(function(){
var mentor = $("#mentor").val();
$.ajax({
url: "../get_data/get_data_kelas.php",
data: "mentor="+mentor,
cache: false,
success: function(msg){
$("#kelas").html(msg);
}
});
});

$("#kelas").change(function(){
var kelas = $("#kelas").val();
$.ajax({
url: "../get_data/get_link_linkabsen.php",
data: "kelas="+kelas,
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