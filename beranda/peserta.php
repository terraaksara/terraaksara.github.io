<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='../index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Forum Indonesia Menulis</title>
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

    <body class="layout-app ">

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
                 class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0"
                 data-effects="parallax-background waterfall"
                 data-fixed
                 data-condenses>
                <div class="mdk-header__bg">
                    <div class="mdk-header__bg-front"
                         style="background-image: url(../img/alfons-morales-YLSwjSy7stw-unsplash.jpg);"></div>
                </div>
                <div class="mdk-header__content justify-content-center">

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood bg-transparent will-fade-background"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="../index.php"
                           class="navbar-brand mr-16pt">
                            <!-- <img class="navbar-brand-icon" src="../../public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span class="avatar-title rounded bg-primary"><img src="../../public/images/illustration/student/128/white.svg"
                                         alt="logo"
                                         class="img-fluid" /></span>

                            </span>

                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                            <li class="nav-item active">
                                <a href="../index.php"
                                   class="nav-link">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a href="../lesson/course.php"
                                   class="nav-link">Course</a>
                            </li>
                           
                        </ul>
                            <li class="nav-item">
                            <a class="btn btn-outline-white" href="../logout.php" role="button">Logout</a>
                            </li>
                        </ul>
                    </div>

                    <div class="hero container page__container text-center text-md-left py-112pt">
                        <h1 class="text-white text-shadow">Forum Indonesia Menulis</h1>
                        <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">Wisata Literasi Guru</p>

                        <a href="../lesson/course.php"
                           class="btn btn-lg btn-white btn--raised mb-16pt">Lihat Video Pembelajaran</a>

                    </div>
                </div>
            </div>

            <!-- // END Header -->
            <!-- Footer -->

            <!-- // END Footer -->
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="page-section border-bottom-2">
                    <div class="container page__container">

                        <div class="page-separator">
                            <div class="page-separator__text">Course</div>
                        </div>

                        <div class="row card-group-row">

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="../../public/images/paths/sketch_430x168.png"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="../../public/images/256_luke-porter-261779-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">sketch</small>
                                            <a class="card-title"
                                               href="blog-post.html">Merge Duplicates Inconsistent Symbols</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="../../public/images/paths/invision_430x168.png"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="../../public/images/256_michael-dam-258165-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">invision</small>
                                            <a class="card-title"
                                               href="blog-post.html">Design Systems Essentials</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="../../public/images/paths/photoshop_430x168.png"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="../../public/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">photoshop</small>
                                            <a class="card-title"
                                               href="blog-post.html">Semantic Logo Design</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row card-group-row">

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="../../public/images/paths/sketch_430x168.png"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="../../public/images/256_luke-porter-261779-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">sketch</small>
                                            <a class="card-title"
                                               href="blog-post.html">Merge Duplicates Inconsistent Symbols</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="../../public/images/paths/invision_430x168.png"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="../../public/images/256_michael-dam-258165-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">invision</small>
                                            <a class="card-title"
                                               href="blog-post.html">Design Systems Essentials</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 card-group-row__col">

                                <div class="card card--elevated posts-card-popular overlay card-group-row__card">
                                    <img src="../../public/images/paths/photoshop_430x168.png"
                                         alt=""
                                         class="card-img">
                                    <div class="fullbleed bg-primary"
                                         style="opacity: .5"></div>
                                    <div class="posts-card-popular__content">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="avatar-group flex">
                                                <div class="avatar avatar-xs"
                                                     data-toggle="tooltip"
                                                     data-placement="top"
                                                     title="Janell D.">
                                                    <a href=""><img src="../../public/images/256_rsz_1andy-lee-642320-unsplash.jpg"
                                                             alt="Avatar"
                                                             class="avatar-img rounded-circle"></a>
                                                </div>
                                            </div>
                                            <a style="text-decoration: none;"
                                               class="d-flex align-items-center"
                                               href=""><i class="material-icons mr-1"
                                                   style="font-size: inherit;">remove_red_eye</i> <small>327</small></a>
                                        </div>
                                        <div class="posts-card-popular__title card-body">
                                            <small class="text-muted text-uppercase">photoshop</small>
                                            <a class="card-title"
                                               href="blog-post.html">Semantic Logo Design</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

        </div>
        <!-- // END Header Layout -->

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

                    <div class="sidebar-heading">Video Pembelajaran</div>
                    <ul class="sidebar-menu">

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button js-sidebar-collapse"
                                   data-toggle="collapse"
                                   href="#enterprise_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                    Pertemuan
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="enterprise_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (1)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (2)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (3)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 3</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (4)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 4</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (5)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 5</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (6)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 6</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (7)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 7</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (8)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 8</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (9)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 9</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (10)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 10</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (11)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 11</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (12)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 12</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (13)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 13</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../lesson/lesson_video/Pertemuan (14)/student_lesson.php">
                                            <span class="sidebar-menu-text">Pertemuan 14</span>
                                        </a>
                                    </li>
                                </ul>
                            <div class="sidebar-heading">Tugas</div>
                            <ul class="sidebar-menu">

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button js-sidebar-collapse"
                                   data-toggle="collapse"
                                   href="#enterprise_menu">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                    Pertemuan
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu collapse sm-indent"
                                    id="enterprise_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (1)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (2)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (3)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 3</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (4)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 4</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (5)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 5</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (6)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 6</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (7)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 7</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (8)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 8</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (9)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 9</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (10)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 10</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (11)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 11</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (12)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 12</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (13)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 13</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="../quiz/Pertemuan (14)/quiz.php">
                                            <span class="sidebar-menu-text">Tugas Pertemuan 14</span>
                                        </a>
                                    </li>
                                </ul>
                            
                            <div class="sidebar-heading">Tugas</div>
                            <ul class="sidebar-menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                    href="../../../quiz/Pertemuan (1)/quiz.php">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                        <span class="sidebar-menu-text">Menulis Kata</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="sidebar-heading">Daftar Hadir</div>
                            <ul class="sidebar-menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                    href="../../presention.php">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people</span>
                                        <span class="sidebar-menu-text">Daftar Hadir Peserta</span>
                                    </a>
                                </li>
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

        <script>
            (function() {
                'use strict';
                var headerNode = document.querySelector('.mdk-header')
                var layoutNode = document.querySelector('.mdk-header-layout')
                var componentNode = layoutNode ? layoutNode : headerNode
                componentNode.addEventListener('domfactory-component-upgraded', function() {
                    headerNode.mdkHeader.eventTarget.addEventListener('scroll', function() {
                        var progress = headerNode.mdkHeader.getScrollState().progress
                        var navbarNode = headerNode.querySelector('#default-navbar')
                        navbarNode.classList.toggle('bg-transparent', progress <= 0.2)
                    })
                })
            })()
        </script>

    </body>

</html>