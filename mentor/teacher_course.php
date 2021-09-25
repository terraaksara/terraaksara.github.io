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
        <title>Video Pembelajaran</title>
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

                            <span class="d-none d-lg-block">Video Pembelajaran</span>
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

                <div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Courses</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="../beranda/mentor.php">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Courses

                                    </li>

                                </ol>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="container page__container page-section">

                    <div class="row">

                        <div class="col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                                 data-force-reveal
                                 data-partial-height="44"
                                 data-toggle="popover"
                                 data-trigger="click">
                                <a href="teacher_lesson.php"
                                   class="js-image"
                                   data-position="">
                                    <img src="../../public/images/paths/angular_430x168.png"
                                         alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">caret-right-square</i>
                                            <span class="card-title text-white">caret-right-square
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title mb-4pt"
                                                   href="teacher_lesson.php">Pertemuan Pertama</a>
                                            </div>
                                            <a href="teacher_lesson.php"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/angular_40x40@2x.png"
                                             width="40"
                                             height="40"
                                             alt="Angular"
                                             class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Pertemuan Pertama</div>
                                        <p class="lh-1">
                                            <span class="text-50 small">with</span>
                                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="teacher_lesson.php"
                                           class="btn btn-primary">Lihat Video</a>
                                    </div>
                                </div>

                            </div>
                            

                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                                 data-force-reveal
                                 data-partial-height="44"
                                 data-toggle="popover"
                                 data-trigger="click">
                                <a href="teacher_lesson.php"
                                   class="js-image"
                                   data-position="">
                                    <img src="../../public/images/paths/angular_430x168.png"
                                         alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">caret-right-square</i>
                                            <span class="card-title text-white">caret-right-square
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title mb-4pt"
                                                   href="teacher_lesson.php">Pertemuan Kedua</a>
                                            </div>
                                            <a href="teacher_lesson.php"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/angular_40x40@2x.png"
                                             width="40"
                                             height="40"
                                             alt="Angular"
                                             class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Pertemuan Kedua</div>
                                        <p class="lh-1">
                                            <span class="text-50 small">with</span>
                                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="teacher_lesson.php"
                                           class="btn btn-primary">Lihat Video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                                 data-force-reveal
                                 data-partial-height="44"
                                 data-toggle="popover"
                                 data-trigger="click">
                                <a href="teacher_lesson.php"
                                   class="js-image"
                                   data-position="">
                                    <img src="../../public/images/paths/angular_430x168.png"
                                         alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">caret-right-square</i>
                                            <span class="card-title text-white">caret-right-square
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title mb-4pt"
                                                   href="teacher_lesson.php">Pertemuan Ketiga</a>
                                            </div>
                                            <a href="teacher_lesson.php"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/angular_40x40@2x.png"
                                             width="40"
                                             height="40"
                                             alt="Angular"
                                             class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Pertemuan Ketiga</div>
                                        <p class="lh-1">
                                            <span class="text-50 small">with</span>
                                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="teacher_lesson.php"
                                           class="btn btn-primary">Lihat Video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">

                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                                 data-force-reveal
                                 data-partial-height="44"
                                 data-toggle="popover"
                                 data-trigger="click">
                                <a href="teacher_lesson.php"
                                   class="js-image"
                                   data-position="">
                                    <img src="../../public/images/paths/angular_430x168.png"
                                         alt="course">
                                    <span class="overlay__content align-items-start justify-content-start">
                                        <span class="overlay__action card-body d-flex align-items-center">
                                            <i class="material-icons mr-4pt">caret-right-square</i>
                                            <span class="card-title text-white">caret-right-square
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <div class="mdk-reveal__content">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title mb-4pt"
                                                   href="teacher_lesson.php">Pertemuan Keempat</a>
                                            </div>
                                            <a href="teacher_lesson.php"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <img src="../../public/images/paths/angular_40x40@2x.png"
                                             width="40"
                                             height="40"
                                             alt="Angular"
                                             class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title mb-0">Pertemuan Keempat</div>
                                        <p class="lh-1">
                                            <span class="text-50 small">with</span>
                                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                                <div class="mb-16pt">
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                        </div>
                                        <div class="d-flex align-items-center mb-4pt">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <a href="teacher_lesson.php"
                                           class="btn btn-primary">Lihat Video</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    

                        <!-- <ul class="pagination justify-content-center pagination-sm">
  <li class="page-item disabled">
    <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true" class="material-icons">chevron_left</span>
      <span>Prev</span>
    </a>
  </li>
  <li class="page-item active">
    <a class="page-link" href="#" aria-label="1">
      <span>1</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="1">
      <span>2</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
      <span>Next</span>
      <span aria-hidden="true" class="material-icons">chevron_right</span>
    </a>
  </li>
</ul> -->
            

                    

                    <!-- <ul class="pagination justify-content-center pagination-sm">
  <li class="page-item disabled">
    <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true" class="material-icons">chevron_left</span>
      <span>Prev</span>
    </a>
  </li>
  <li class="page-item active">
    <a class="page-link" href="#" aria-label="1">
      <span>1</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="1">
      <span>2</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
      <span>Next</span>
      <span aria-hidden="true" class="material-icons">chevron_right</span>
    </a>
  </li>
</ul> -->


            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                         data-force-reveal
                         data-partial-height="44"
                         data-toggle="popover"
                         data-trigger="click">
                        <a href="teacher_lesson.php"
                           class="js-image"
                           data-position="">
                            <img src="../../public/images/paths/angular_430x168.png"
                                 alt="course">
                            <span class="overlay__content align-items-start justify-content-start">
                                <span class="overlay__action card-body d-flex align-items-center">
                                    <i class="material-icons mr-4pt">caret-right-square</i>
                                    <span class="card-title text-white">caret-right-square
                                    </span>
                                </span>
                            </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="teacher_lesson.php">Pertemuan Kelima</a>
                                    </div>
                                    <a href="teacher_lesson.php"
                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left mr-12pt">
                                <img src="../../public/images/paths/angular_40x40@2x.png"
                                     width="40"
                                     height="40"
                                     alt="Angular"
                                     class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Pertemuan Kelima</div>
                                <p class="lh-1">
                                    <span class="text-50 small">with</span>
                                    <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="teacher_lesson.php"
                                   class="btn btn-primary">Lihat Video</a>
                            </div>
                        </div>

                    </div>
                    

                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                         data-force-reveal
                         data-partial-height="44"
                         data-toggle="popover"
                         data-trigger="click">
                        <a href="teacher_lesson.php"
                           class="js-image"
                           data-position="">
                            <img src="../../public/images/paths/angular_430x168.png"
                                 alt="course">
                            <span class="overlay__content align-items-start justify-content-start">
                                <span class="overlay__action card-body d-flex align-items-center">
                                    <i class="material-icons mr-4pt">caret-right-square</i>
                                    <span class="card-title text-white">caret-right-square
                                    </span>
                                </span>
                            </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="teacher_lesson.php">Pertemuan Keenam</a>
                                    </div>
                                    <a href="teacher_lesson.php"
                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left mr-12pt">
                                <img src="../../public/images/paths/angular_40x40@2x.png"
                                     width="40"
                                     height="40"
                                     alt="Angular"
                                     class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Pertemuan Keenam</div>
                                <p class="lh-1">
                                    <span class="text-50 small">with</span>
                                    <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="teacher_lesson.php"
                                   class="btn btn-primary">Lihat Video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                         data-force-reveal
                         data-partial-height="44"
                         data-toggle="popover"
                         data-trigger="click">
                        <a href="teacher_lesson.php"
                           class="js-image"
                           data-position="">
                            <img src="../../public/images/paths/angular_430x168.png"
                                 alt="course">
                            <span class="overlay__content align-items-start justify-content-start">
                                <span class="overlay__action card-body d-flex align-items-center">
                                    <i class="material-icons mr-4pt">caret-right-square</i>
                                    <span class="card-title text-white">caret-right-square
                                    </span>
                                </span>
                            </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="teacher_lesson.php">Pertemuan Ketujuh</a>
                                    </div>
                                    <a href="teacher_lesson.php"
                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left mr-12pt">
                                <img src="../../public/images/paths/angular_40x40@2x.png"
                                     width="40"
                                     height="40"
                                     alt="Angular"
                                     class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Pertemuan Ketujuh</div>
                                <p class="lh-1">
                                    <span class="text-50 small">with</span>
                                    <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="teacher_lesson.php"
                                   class="btn btn-primary">Lihat Video</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                         data-force-reveal
                         data-partial-height="44"
                         data-toggle="popover"
                         data-trigger="click">
                        <a href="teacher_lesson.php"
                           class="js-image"
                           data-position="">
                            <img src="../../public/images/paths/angular_430x168.png"
                                 alt="course">
                            <span class="overlay__content align-items-start justify-content-start">
                                <span class="overlay__action card-body d-flex align-items-center">
                                    <i class="material-icons mr-4pt">caret-right-square</i>
                                    <span class="card-title text-white">caret-right-square
                                    </span>
                                </span>
                            </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="teacher_lesson.php">Pertemuan Kedelapan</a>
                                    </div>
                                    <a href="teacher_lesson.php"
                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left mr-12pt">
                                <img src="../../public/images/paths/angular_40x40@2x.png"
                                     width="40"
                                     height="40"
                                     alt="Angular"
                                     class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Pertemuan Kedelapan</div>
                                <p class="lh-1">
                                    <span class="text-50 small">with</span>
                                    <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                    <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="teacher_lesson.php"
                                   class="btn btn-primary">Lihat Video</a>
                            </div>
                        </div>
                    </div>
                </div>

               
            

                <!-- <ul class="pagination justify-content-center pagination-sm">
<li class="page-item disabled">
<a class="page-link" href="#" aria-label="Previous">
<span aria-hidden="true" class="material-icons">chevron_left</span>
<span>Prev</span>
</a>
</li>
<li class="page-item active">
<a class="page-link" href="#" aria-label="1">
<span>1</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="1">
<span>2</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span>Next</span>
<span aria-hidden="true" class="material-icons">chevron_right</span>
</a>
</li>
</ul> -->
    

            

            <!-- <ul class="pagination justify-content-center pagination-sm">
<li class="page-item disabled">
<a class="page-link" href="#" aria-label="Previous">
<span aria-hidden="true" class="material-icons">chevron_left</span>
<span>Prev</span>
</a>
</li>
<li class="page-item active">
<a class="page-link" href="#" aria-label="1">
<span>1</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="1">
<span>2</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span>Next</span>
<span aria-hidden="true" class="material-icons">chevron_right</span>
</a>
</li>
</ul> -->


    </div>
    <div class="row">

        <div class="col-sm-6 col-md-4 col-xl-3">

            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                 data-force-reveal
                 data-partial-height="44"
                 data-toggle="popover"
                 data-trigger="click">
                <a href="teacher_lesson.php"
                   class="js-image"
                   data-position="">
                    <img src="../../public/images/paths/angular_430x168.png"
                         alt="course">
                    <span class="overlay__content align-items-start justify-content-start">
                        <span class="overlay__action card-body d-flex align-items-center">
                            <i class="material-icons mr-4pt">caret-right-square</i>
                            <span class="card-title text-white">caret-right-square
                            </span>
                        </span>
                    </span>
                </a>
                <div class="mdk-reveal__content">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                   href="teacher_lesson.php">Pertemuan Kesembilan</a>
                            </div>
                            <a href="teacher_lesson.php"
                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="../../public/images/paths/angular_40x40@2x.png"
                             width="40"
                             height="40"
                             alt="Angular"
                             class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title mb-0">Pertemuan Kesembilan</div>
                        <p class="lh-1">
                            <span class="text-50 small">with</span>
                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                        </p>
                    </div>
                </div>

                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                        </div>
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="teacher_lesson.php"
                           class="btn btn-primary">Lihat Video</a>
                    </div>
                </div>

            </div>
            

        </div>
        <div class="col-sm-6 col-md-4 col-xl-3">

            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                 data-force-reveal
                 data-partial-height="44"
                 data-toggle="popover"
                 data-trigger="click">
                <a href="teacher_lesson.php"
                   class="js-image"
                   data-position="">
                    <img src="../../public/images/paths/angular_430x168.png"
                         alt="course">
                    <span class="overlay__content align-items-start justify-content-start">
                        <span class="overlay__action card-body d-flex align-items-center">
                            <i class="material-icons mr-4pt">caret-right-square</i>
                            <span class="card-title text-white">caret-right-square
                            </span>
                        </span>
                    </span>
                </a>
                <div class="mdk-reveal__content">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                   href="teacher_lesson.php">Pertemuan Kesepuluh</a>
                            </div>
                            <a href="teacher_lesson.php"
                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="../../public/images/paths/angular_40x40@2x.png"
                             width="40"
                             height="40"
                             alt="Angular"
                             class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title mb-0">Pertemuan Kesepuluh</div>
                        <p class="lh-1">
                            <span class="text-50 small">with</span>
                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                        </p>
                    </div>
                </div>

                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                        </div>
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="teacher_lesson.php"
                           class="btn btn-primary">Lihat Video</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3">

            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                 data-force-reveal
                 data-partial-height="44"
                 data-toggle="popover"
                 data-trigger="click">
                <a href="teacher_lesson.php"
                   class="js-image"
                   data-position="">
                    <img src="../../public/images/paths/angular_430x168.png"
                         alt="course">
                    <span class="overlay__content align-items-start justify-content-start">
                        <span class="overlay__action card-body d-flex align-items-center">
                            <i class="material-icons mr-4pt">caret-right-square</i>
                            <span class="card-title text-white">caret-right-square
                            </span>
                        </span>
                    </span>
                </a>
                <div class="mdk-reveal__content">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                   href="teacher_lesson.php">Pertemuan Kesebelas</a>
                            </div>
                            <a href="teacher_lesson.php"
                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="../../public/images/paths/angular_40x40@2x.png"
                             width="40"
                             height="40"
                             alt="Angular"
                             class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title mb-0">Pertemuan Kesebelas</div>
                        <p class="lh-1">
                            <span class="text-50 small">with</span>
                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                        </p>
                    </div>
                </div>

                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                        </div>
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="teacher_lesson.php"
                           class="btn btn-primary">Lihat Video</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xl-3">

            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                 data-force-reveal
                 data-partial-height="44"
                 data-toggle="popover"
                 data-trigger="click">
                <a href="teacher_lesson.php"
                   class="js-image"
                   data-position="">
                    <img src="../../public/images/paths/angular_430x168.png"
                         alt="course">
                    <span class="overlay__content align-items-start justify-content-start">
                        <span class="overlay__action card-body d-flex align-items-center">
                            <i class="material-icons mr-4pt">caret-right-square</i>
                            <span class="card-title text-white">caret-right-square
                            </span>
                        </span>
                    </span>
                </a>
                <div class="mdk-reveal__content">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                   href="teacher_lesson.php">Pertemuan Keduabelas</a>
                            </div>
                            <a href="teacher_lesson.php"
                               class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popoverContainer d-none">
                <div class="media">
                    <div class="media-left mr-12pt">
                        <img src="../../public/images/paths/angular_40x40@2x.png"
                             width="40"
                             height="40"
                             alt="Angular"
                             class="rounded">
                    </div>
                    <div class="media-body">
                        <div class="card-title mb-0">Pertemuan Keduabelas</div>
                        <p class="lh-1">
                            <span class="text-50 small">with</span>
                            <span class="text-50 small font-weight-bold">Elijah Murray</span>
                        </p>
                    </div>
                </div>

                <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                        <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                            <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                        </div>
                        <div class="d-flex align-items-center mb-4pt">
                            <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                            <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="teacher_lesson.php"
                           class="btn btn-primary">Lihat Video</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="row">

            <div class="col-sm-6 col-md-4 col-xl-3">

                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                    data-force-reveal
                    data-partial-height="44"
                    data-toggle="popover"
                    data-trigger="click">
                    <a href="teacher_lesson.php"
                    class="js-image"
                    data-position="">
                        <img src="../../public/images/paths/angular_430x168.png"
                            alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">caret-right-square</i>
                                <span class="card-title text-white">caret-right-square
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt"
                                    href="teacher_lesson.php">Pertemuan Ketigabelas</a>
                                </div>
                                <a href="teacher_lesson.php"
                                class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="../../public/images/paths/angular_40x40@2x.png"
                                width="40"
                                height="40"
                                alt="Angular"
                                class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Pertemuan Ketigabelas</div>
                            <p class="lh-1">
                                <span class="text-50 small">with</span>
                                <span class="text-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>

                    <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="teacher_lesson.php"
                            class="btn btn-primary">Lihat Video</a>
                        </div>
                    </div>

                </div>
                

            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">

                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary js-overlay mdk-reveal js-mdk-reveal "
                    data-force-reveal
                    data-partial-height="44"
                    data-toggle="popover"
                    data-trigger="click">
                    <a href="teacher_lesson.php"
                    class="js-image"
                    data-position="">
                        <img src="../../public/images/paths/angular_430x168.png"
                            alt="course">
                        <span class="overlay__content align-items-start justify-content-start">
                            <span class="overlay__action card-body d-flex align-items-center">
                                <i class="material-icons mr-4pt">caret-right-square</i>
                                <span class="card-title text-white">caret-right-square
                                </span>
                            </span>
                        </span>
                    </a>
                    <div class="mdk-reveal__content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex">
                                    <a class="card-title mb-4pt"
                                    href="teacher_lesson.php">Pertemuan Keempatbelas</a>
                                </div>
                                <a href="teacher_lesson.php"
                                class="ml-4pt material-icons text-20 card-course__icon-favorite">caret-right-square</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popoverContainer d-none">
                    <div class="media">
                        <div class="media-left mr-12pt">
                            <img src="../../public/images/paths/angular_40x40@2x.png"
                                width="40"
                                height="40"
                                alt="Angular"
                                class="rounded">
                        </div>
                        <div class="media-body">
                            <div class="card-title mb-0">Pertemuan Keempatbelas</div>
                            <p class="lh-1">
                                <span class="text-50 small">with</span>
                                <span class="text-50 small font-weight-bold">Elijah Murray</span>
                            </p>
                        </div>
                    </div>

                    <p class="my-16pt text-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                    <div class="mb-16pt">
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                            <p class="flex text-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                <p class="flex text-50 lh-1 mb-0"><small>18 Minute</small></p>
                            </div>
                            <div class="d-flex align-items-center mb-4pt">
                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                            </div>
                        </div>
                        <div class="col text-right">
                            <a href="teacher_lesson.php"
                            class="btn btn-primary">Lihat Video</a>
                        </div>
                    </div>
                </div>
            </div>
    
   

   


    <!-- <ul class="pagination justify-content-center pagination-sm">
<li class="page-item disabled">
<a class="page-link" href="#" aria-label="Previous">
<span aria-hidden="true" class="material-icons">chevron_left</span>
<span>Prev</span>
</a>
</li>
<li class="page-item active">
<a class="page-link" href="#" aria-label="1">
<span>1</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="1">
<span>2</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span>Next</span>
<span aria-hidden="true" class="material-icons">chevron_right</span>
</a>
</li>
</ul> -->




<!-- <ul class="pagination justify-content-center pagination-sm">
<li class="page-item disabled">
<a class="page-link" href="#" aria-label="Previous">
<span aria-hidden="true" class="material-icons">chevron_left</span>
<span>Prev</span>
</a>
</li>
<li class="page-item active">
<a class="page-link" href="#" aria-label="1">
<span>1</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="1">
<span>2</span>
</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span>Next</span>
<span aria-hidden="true" class="material-icons">chevron_right</span>
</a>
</li>
</ul> -->


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
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="teacher_administrasi.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                <span class="sidebar-menu-text">Administrasi</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
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

    </body>

</html>