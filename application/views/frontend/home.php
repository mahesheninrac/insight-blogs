<?php require(APPPATH . 'views/frontend/header.php'); ?>
<style>
    @media(min-width:1024px) {
        .block-homepage-featured {
            padding-bottom: 5rem;
        }
    }

    .block-homepage-featured {
        padding-bottom: 2rem;
    }

    @media (min-width: 1024px) {
        .block-homepage-featured__featured__image {
            width: 55% !important;
        }

        .block-homepage-featured__featured__text {
            width: 45% !important;
            padding-right: 6.5rem;
        }

        .block-homepage-featured .card-grid {
            margin-top: 4.5rem !important;
        }
    }

    .block-homepage-featured .card-grid {
        margin-top: 3rem;
    }

    .block-homepage-featured__featured__image {
        border-radius: 0 0 75pt 0;
        /* opacity: 0; */
        overflow: hidden;
        position: relative;
        width: 100%;
        z-index: 1;
    }

    .block-homepage-featured__featured__text {
        color: #fff;
        /* opacity: 0; */
        padding-bottom: 2rem;
        padding-top: 3rem;
        position: relative;
        z-index: 1;
    }

    .block-homepage-featured__curve {
        background: linear-gradient(347.38deg, #1a3867 -3.09%, #123d68 132.76%);
        content: "";
        position: absolute;
        display: flex;
        height: calc(100% + 204px);
        justify-content: center;
        margin-left: calc(-50vw + 50% + 16px/2);
        margin-right: calc(-50vw + 50% + 16px/2);
        top: 0;
        width: calc(100vw - 16px);
    }

    @media(min-width:820px) {
        .overline {
            line-height: 1.37;
        }
    }

    .overline a {
        font-size: 0.9375rem;
        letter-spacing: 0.1em;
        font-weight: 500;
        color: white;
        text-decoration: none;
        text-transform: uppercase;
    }



    .overline a:hover,
    .block-homepage-featured__featured__title-link:hover {
        color: white;
        text-decoration: underline;
        text-decoration-thickness: 2px;
    }

    .block-homepage-featured__featured__title-link {
        text-decoration: none;
    }



    .block-homepage-featured__featured {
        padding-top: 3.5rem;
    }

    @media (min-width:48em) {
        h2.h4.hover-card__link {
            line-height: 1.3;
            font-size: 1.75rem
        }
    }

    @media (min-width:64em) {
        h2.h4.hover-card__link {
            line-height: 1;
        }
    }

    h2.h4.hover-card__link {
        line-height: 1.3;
        font-size: clamp(1.5rem, calc(30 / 1200 * 100vw), 1.875rem);
    }

    .wp-block-heading.has-heading-section-font-size {
        font-size: clamp(2.5rem, calc(64 / 1200 * 100vw), 3.375rem);
    }
</style>
<main>
    <div class="parent-Container__wrapper">
        <div class="block-homepage-featured block-homepage-featured--is-visible">
            <div class="w-100 h-100">
                <div class="block-homepage-featured__featured d-flex align-items-md-start flex-md-row-reverse flex-column position-relative">
                    <div class="block-homepage-featured__featured__image">
                        <a href="">
                            <div class="w-100 h-100">
                                <img class="w-100 h-100" src="https://insights-api.jefferies.com/wp-content/uploads/2024/09/f4b912a2-af15-4b4d-b993-67fec2c881d9.jpg?w=828&q=75" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="block-homepage-featured__featured__text">
                        <div class="block-homepage-featured__featured__meta overline mb-2">
                            <a href="">The Big Picture</a>
                        </div>
                        <a href="" class="block-homepage-featured__featured__title-link">
                            <h2 class="h1">What Will Drive India’s Growth for the Next 20 Years?</h2>
                        </a>
                        <hr class="wp-block-separator is-style-short" style="opacity: 1;">
                        <p>According to Aashish Agarwal, the Jefferies country head, the country’s economy has undergone profound changes that are often not discussed or understood.</p>
                        <a href="" class="wp-block-button__link button is-style-alt">Read More</a>
                    </div>
                    <div class="block-homepage-featured__curve">
                        <svg width="1382" height="491" viewBox="0 0 1382 491" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="block-homepage-featured__curve__image">
                            <path d="M52.5987 429.035C87.3262 344.714 138.225 268.098 202.389 203.561C266.555 139.025 342.731 87.831 426.567 52.9044C510.403 17.9777 600.257 4.46086e-05 690.999 5.25416e-05C781.745 6.04748e-05 871.598 17.9777 955.434 52.9044C1039.27 87.8311 1115.45 139.025 1179.61 203.561C1243.78 268.098 1294.67 344.714 1329.4 429.035C1364.13 513.356 1382 603.731 1382 695L961.033 695C961.033 659.333 954.048 624.015 940.478 591.064C926.908 558.112 907.018 528.172 881.942 502.951C856.866 477.733 827.1 457.726 794.336 444.079C761.575 430.429 726.462 423.404 690.999 423.404C655.539 423.404 620.424 430.429 587.663 444.079C554.901 457.726 525.133 477.733 500.059 502.951C474.983 528.172 455.093 558.112 441.523 591.063C427.953 624.015 420.969 659.333 420.969 695L-2.14074e-06 695C5.83822e-06 603.731 17.8736 513.355 52.5987 429.035Z" fill="url(#paint0_radial_1909_2505)" fill-opacity="0.4"></path>
                            <defs>
                                <radialGradient id="paint0_radial_1909_2505" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(997 8.11355e-06) rotate(151.978) scale(1336.71 1619.65)">
                                    <stop stop-color="#113355"></stop>
                                    <stop offset="1" stop-color="#3066AE"></stop>
                                </radialGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="container">
                    <div class="card-grid">
                        <div class="row row-gap-5">
                            <article class="col-md-4  hover-card col-sm-6">
                                <div class="bg-darklight-100 position-relative">
                                    <div class="card-grid-item__image">
                                        <figure class="card-grid-item__image-fit m-0">
                                            <img width="100%" height="100%" loading="lazy" class="lazy" src="https://omnicoreplus.com/assets/om-upload/solar_plant3.JPG" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-grid-item__title-contain fs-20">
                                        <div class="card-grid-item__meta-cat mb-2">
                                            <a href="" class="card-grid-item__meta-cat-text">New Energies & Sustainability</a>
                                        </div>
                                        <a href="" class="card-grid-item__title-link mb-2">
                                            <h2 class="card-grid-item__title fw-500">What Will Drive India’s Growth for the Next 20 Years?</h2>
                                        </a>
                                        <p class="my-0 fs-18">Based on the consent of the parties, the hearing of the petition was adjourned. The parties are directed to complete their pleadings by 25.10.2024, if not done earlier.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="col-md-4 col-sm-6 hover-card">
                                <div class="bg-darklight-100 position-relative ">
                                    <div class="card-grid-item__image">
                                        <figure class="card-grid-item__image-fit m-0">
                                            <img width="100%" height="100%" src="https://omnicoreplus.com/assets/om-upload/Redressal_of_Consumer7.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-grid-item__title-contain fs-20">
                                        <div class="card-grid-item__meta-cat mb-2">
                                            <a href="" class="card-grid-item__meta-cat-text">The Big Picture</a>
                                        </div>
                                        <a href="" class="card-grid-item__title-link mb-2">
                                            <h2 class="card-grid-item__title fw-500">What Will Drive India’s Growth for the Next 20 Years?</h2>
                                        </a>
                                        <p class="my-0 fs-18">According to Aashish Agarwal, the Jefferies country head, the country’s economy has undergone profound changes that are often not discussed or understood.</p>
                                    </div>
                                </div>
                            </article>

                            <article class="col-md-4 col-sm-6 hover-card">
                                <div class="bg-darklight-100 position-relative ">
                                    <div class="card-grid-item__image">
                                        <figure class="card-grid-item__image-fit m-0">
                                            <img width="100%" height="100%" src="https://www.jefferies.com/wp-content/uploads/sites/4/2024/09/6b1be9a0-e07e-450f-b8e9-b6dea6a5ef5e.webp" alt="">
                                        </figure>
                                    </div>
                                    <div class="card-grid-item__title-contain fs-20">
                                        <div class="card-grid-item__meta-cat mb-2">
                                            <a href="" class="card-grid-item__meta-cat-text">The Big Picture</a>
                                        </div>
                                        <a href="" class="card-grid-item__title-link mb-2">
                                            <h2 class="card-grid-item__title fw-500">What Will Drive India’s Growth for the Next 20 Years?</h2>
                                        </a>
                                        <p class="my-0 fs-18">According to Aashish Agarwal, the Jefferies country head, the country’s economy has undergone profound changes that are often not discussed or understood.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="py-5">
                <h2 class="wp-block-heading has-heading-section-font-size mb-3">Featured Content</h2>
                <div class="row row-gap-5 mt-3">
                    <div class="col-md-6">
                        <figure class="h-100">
                            <img loading="lazy"
                                class="wp-image-15663"
                                decoding="async"
                                width="533"
                                height="745"
                                src="https://omnicoreplus.com/assets/om-upload/Redressal_of_Consumer7.jpg">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border-top py-2">
                                    <div class="card-grid-item__title-contain fs-20">
                                        <div class="card-grid-item__meta-cat mb-2">
                                            <a href="#" class="card-grid-item__meta-cat-text">The Big Picture</a>
                                        </div>
                                        <a href="#" class="card-grid-item__title-link mb-2">
                                            <h2 class="card-grid-item__title fw-500">What Will Drive India’s Growth for the Next 20 Years?</h2>
                                        </a>
                                        <p class="my-0 fs-18">According to Aashish Agarwal, the Jefferies country head, the country’s economy has undergone profound changes that are often not discussed or understood.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="border-top py-2">
                                    <div class="card-grid-item__title-contain fs-20">
                                        <div class="card-grid-item__meta-cat mb-2">
                                            <a href="#" class="card-grid-item__meta-cat-text">The Big Picture</a>
                                        </div>
                                        <a href="#" class="card-grid-item__title-link mb-2">
                                            <h2 class="card-grid-item__title fw-500">What Will Drive India’s Growth for the Next 20 Years?</h2>
                                        </a>
                                        <p class="my-0 fs-18">According to Aashish Agarwal, the Jefferies country head, the country’s economy has undergone profound changes that are often not discussed or understood.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="border-top py-2">
                                    <div class="card-grid-item__title-contain fs-20">
                                        <div class="card-grid-item__meta-cat mb-2">
                                            <a href="#" class="card-grid-item__meta-cat-text">The Big Picture</a>
                                        </div>
                                        <a href="#" class="card-grid-item__title-link mb-2">
                                            <h2 class="card-grid-item__title fw-500">What Will Drive India’s Growth for the Next 20 Years?</h2>
                                        </a>
                                        <p class="my-0 fs-18">According to Aashish Agarwal, the Jefferies country head, the country’s economy has undergone profound changes that are often not discussed or understood.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</main>
<?php require(APPPATH . 'views/frontend/footer.php'); ?>