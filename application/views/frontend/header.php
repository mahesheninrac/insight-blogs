<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />

</head>

<body>
    <div class="progress-indicator">
        <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="40" stroke="url(#progress_gradient)" stroke-width="20"></circle>
            <defs>
                <linearGradient id="progress_gradient" x1="57" y1="91" x2="19" y2="20" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#14355B"></stop>
                    <stop offset="1" stop-color="#3878CD"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>
    <header>
        <div class="parent-Container__wrapper">
            <div class="site-header__sticky">
                <div class="site-header h-100">
                    <div class=" h-100">
                        <div class="site-header__content d-flex justify-content-between h-100 align-items-center">
                            <div class="site-header__title">
                                <a href="<?= base_url() ?>" class="site-header__logo text-decoration-none">
                                    <h5 class="fw-700">
                                        Insights
                                    </h5>
                                </a>
                            </div>
                            <div class="site-header__menus d-flex align-items-center">
                                <nav class="d-sm-none d-none d-md-block d-lg-block">
                                    <ul class="site-header__menu m-0 p-0 list-style-none d-flex align-items-center">
                                        <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>the-wide-angle-view" class="menu__link" role="menuitem">The Wide-Angle View</a></li>
                                        <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>c-suite-intelligence" class="menu__link" role="menuitem">The C-Suite Intelligence</a></li>
                                        <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>new-energies" class="menu__link" role="menuitem">New Energies & Sustainability</a></li>
                                        <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>insights" class="menu__link" role="menuitem">Sector Insights</a></li>
                                        <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>search" class="menu__link" role="menuitem">
                                                <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="25" height="25">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.867 15.723h-1.129l-.4-.386a9.25 9.25 0 0 0 2.244-6.046A9.29 9.29 0 0 0 9.291 0 9.29 9.29 0 0 0 0 9.291a9.29 9.29 0 0 0 9.291 9.291 9.25 9.25 0 0 0 6.046-2.244l.386.4v1.13L22.87 25 25 22.87l-7.133-7.147Zm-8.576 0a6.424 6.424 0 0 1-6.432-6.432A6.424 6.424 0 0 1 9.29 2.859a6.424 6.424 0 0 1 6.432 6.432 6.424 6.424 0 0 1-6.432 6.432Z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <button class="site-header__menu-button d-md-none d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="icofont-navigation-menu"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offcanvas w-100 offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title fw-700" id="offcanvasWithBothOptionsLabel ">Insights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="w-100 h-100 ">
                            <ul class="site-header__menu m-0 p-0 list-style-none d-flex flex-column row-gap-4 justify-content-center align-items-center">
                                <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>the-wide-angle-view" class="menu__link" role="menuitem">The Wide-Angle View</a></li>
                                <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>c-suite-intelligence" class="menu__link" role="menuitem">The C-Suite Intelligence</a></li>
                                <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>new-energies" class="menu__link" role="menuitem">New Energies & Sustainability</a></li>
                                <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>insights" class="menu__link" role="menuitem">Sector Insights</a></li>
                                <li class="menu__item d-flex" role="presentation"><a href="<?= base_url() ?>search" class="menu__link" role="menuitem">
                                        <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="25" height="25">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.867 15.723h-1.129l-.4-.386a9.25 9.25 0 0 0 2.244-6.046A9.29 9.29 0 0 0 9.291 0 9.29 9.29 0 0 0 0 9.291a9.29 9.29 0 0 0 9.291 9.291 9.25 9.25 0 0 0 6.046-2.244l.386.4v1.13L22.87 25 25 22.87l-7.133-7.147Zm-8.576 0a6.424 6.424 0 0 1-6.432-6.432A6.424 6.424 0 0 1 9.29 2.859a6.424 6.424 0 0 1 6.432 6.432 6.424 6.424 0 0 1-6.432 6.432Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </li>
                        </nav>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        let loader = document.querySelector(".progress-indicator")


        function showSpinner() {
            loader.classList.add("is-animating")
        }


        function hideSpinner() {
            loader.classList.remove("is-animating")
        }
        window.addEventListener('load', function() {
            let link = document.querySelectorAll('.menu__item a')
            let currenturl = window.location.href;
            link.forEach(function(item) {
                let currentPage = item.getAttribute('href');
                if (currenturl == currentPage) {
                    item.style.color = " #0067c6";
                    item.style.textDecoration = "underline"
                    console.log(currentPage)
                } else {
                    item.classList.remove('menu__link-cms');
                }
            })
        })
    </script>