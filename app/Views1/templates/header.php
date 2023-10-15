<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enveep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/saved_letters.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/topnavbar.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!-- <script src="https://bootstrapmade.com/assets/js/demo-4.2.js"></script>
    <script src="https://bootstrapmade.com/assets/js/demo-4.2.js"></script> -->
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Varela+Round&display=swap"
        rel="stylesheet">
    <style>
        @media only screen and (max-width: 1000px) {
            body {
                background-color: white;
            }
        }

        @media only screen and (max-width: 420px) {
            .banner-image {
                width: 95%;
                top: 100px;
                position: absolute;
            }

            .banner-h3 {
                left: 25px !important;
                top: 230px !important;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar  navbar-expand-lg primary_color fixed-top d-flex justify-content-center">
            <div class=" container-fluid ">
                <a class=" navbar-brand" href="/"><?php echo SITE_NAME; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div>
                            <a class="btn btn-outline nav_cta mx-sm-0 mx-md-2 " href="write-letter">Write a letter</a>
                        </div>

                        <li class="nav-item  dropdown primary_color_d">
                            <a class="nav-link UI_copy dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu primary_color">
                                <?php foreach ($categories_list as &$value) : ?>
                                <li><a class="dropdown-item" href="category/<?php echo $value->slug ? $value->slug : url_title($value->title, '-', true); ?>"><?php echo $value->title; ?></a></li>
                                <?php endforeach; ?>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Trending</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link UI_copy dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                My letters
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="saved-letters">Saved</a></li>
                                <li><a class="dropdown-item" href="#">Published</a></li>
                                <li><a class="dropdown-item" href="#">Drafts</a></li>
                                <li><a class="dropdown-item" href="#">My lists</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link UI_copy dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Ayesha 22
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Account</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>

                    </ul>

                    <form role="search">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>