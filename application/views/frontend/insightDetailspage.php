<!-- insightDetailspage -->
<?php require(APPPATH . 'views/frontend/header.php'); ?>
<style>
    .article-header__category-link {
        color: var(--c-navy-bg);
        font-size: 0.9375rem;
        font-weight: 600;
        text-decoration: none;
        text-transform: uppercase;
        margin-bottom: 0.75rem;
    }

    .article-header--is-visible .article-header__title {
        transform: translateY(0);
        opacity: 1;
    }

    .article-header--is-visible .article-header__meta,
    .article-header--is-visible .article-header__top {
        opacity: 1;
    }

    .article-header__meta {
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
    }

    .article-header__title {
        transform: translateY(10px);
        line-height: 1.25;
        font-size: 1.75rem;
        margin-bottom: 1.25rem;
        opacity: 0;
        transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    }

    .article-header--is-visible .article-header__title::after {
        transform: scaleX(1);
    }


    .article-header__meta,
    .article-header__top {
        opacity: 0;
        transition: opacity 0.3s ease-out 0.3s;
    }

    .article-header__title::after {
        transform-origin: left;
        transition: transform 0.3s ease-out;
        transition-delay: 0.15s;
    }

    @media (min-width: 51.25em) {
        .article-header__title::after {
            border-bottom: .375rem solid #ff9505;
            width: 4.375rem;
        }
    }

    .article-header__title::after {
        border-bottom: .25rem solid #ff9505;
        content: "";
        display: block;
        margin: 1rem 0;
        width: 3.75rem;
    }

    .article-header {
        color: var(--c-navy-bg);
    }

    .article-header__meta {
        margin-bottom: 1.25rem;
    }



    @media (min-width:1024px) {
        .article-hero--single .article-hero__image-contain {
            aspect-ratio: unset;
            border-bottom-right-radius: 6.25rem;
            height: calc(100% + 2.5rem);
            width: 100%;
        }

        .article-header__meta {
            font-size: 1rem !important;
        }

        .article-header__title {
            font-size: 2.875rem;
        }

        .article__top {
            height: 100%;
            margin-bottom: 2.75rem;
        }

        .article-content {
            margin-bottom: 4rem;
            position: relative;
        }
    }

    .article-content {
        margin-bottom: 2.5rem;
        margin-left: auto;
        margin-right: auto;
        width: min(calc(100% - 4rem), 66.75rem);

    }



    .article-hero--single .article-hero__image-contain {
        aspect-ratio: 593/475;
        border-bottom-right-radius: 5rem;
        margin: 0;
        overflow: hidden;
        position: relative;
    }

    .article-hero--single .article-hero__image {
        display: block;
        margin: 0;
        object-fit: cover;
        object-position: center;
        padding: 0;
    }



    .article__top {
        margin-bottom: 6.5rem;

    }

    .article__top::before {
        background-color: #f7f8fa;
        content: "";
        height: calc(100% - 9pc);
        left: calc(-50vw + 50% + 17px/2);
        position: absolute;
        top: 79px;
        width: calc(100vw - 17px);
        z-index: -1;
    }

    .article-content>p,
    .article_contained {
        margin-left: auto;
        margin-right: auto;
        max-width: 53rem;
    }

    .article-content>*+* {
        margin-top: 2rem;
    }
</style>

<div class="parent-Container__wrapper">
    <article class="article" style="min-height: 100vh; height:auto">
        <div class="article__top">
            <div class="row">
                <div class="col-md-7">
                    <div class="article-header animate__animated animate__backInLeft pt-sm-4 pb-sm-2 w-100 h-100 ">
                        <div class="article-header__content">
                            <p class="article-header__top">
                                <a href="<?= base_url() ?>wideangleview" class="article-header__category-link">
                                    The Wide-Angle View
                                </a>
                            </p>
                            <h1 class="article-header__title animate__backInLeft">
                                Mid-Year Review: A Record-Breaking 1H of 2024 for the Secondary Market
                            </h1>
                            <div class="article-header__meta">
                                <span class="article-header__author d-inline-flex align-items-center flex-wrap">
                                    By&nbsp;
                                    <span>
                                        <span>Equity Capital Markets Team</span>
                                    </span>
                                </span>
                                <div class="mt-1">
                                    <time class="article-header__date" datetime="2023-10-02T06:36:03">October 2, 2023</time>
                                    <span class="article-header__separator mx-2">•</span>
                                    <span class="time-to-read">1 min read</span>
                                </div>
                            </div>
                            <div class=" d-block">
                                <div class="d-flex align-items-center gap-5">
                                    <span class="fw-600">Share</span>
                                    <ul class="d-flex align-items-center m-0 ps-0 list-style-none gap-3 text-left">
                                        <li class="social-share__item">
                                            <a href="" class="text-decoration-none fs-20">
                                                <i class="icofont-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="social-share__item">
                                            <a href="" class="text-decoration-none fs-20">
                                                <i class="icofont-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="article-hero w-100 h-100 article-hero--single 
                    ">
                        <figure class="m-0 article-hero__image-contain animate__animated animate__bounce ">
                            <img
                                class="article-hero__image"
                                src="https://insights-api.jefferies.com/wp-content/uploads/2023/09/Convertible-Debt-High-Low.jpg?w=3840&q=75"
                                style="height:100%;width:100%;color:transparent"
                                alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-content content">
            <p>The convertible debt new issue market in 2023 has been frequented by companies seeking a lower cash interest alternative to what is being offered in the high yield and investment grade debt markets. Historically, convertible debt has been a common financing tool for high-growth businesses because it offers an attractive cost of capital relative to debt or equity, no financial covenants and an investor base supportive of general corporate purpose use of proceeds. About two-thirds of convertible transactions annually from 2020 to 2022 used proceeds for general corporate purposes or for M&A financing.</p>
            <p>
                This report follows Jefferies’ H2 2023 secondary market review, which predicted near-record secondary volume, higher LP pricing, and a sustained capital overhang for fiscal year 2024. The latest findings show the first half of the year largely met these expectations.
            </p>
            <p>
                Here, Jefferies Insights shares high-level takeaways from the Private Capital Advisory team.
            </p>



            <div class="article_contained">
                <a class="wp-block-button__link" href="">Read Full Report</a>
            </div>


        </div>
    </article>
</div>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>