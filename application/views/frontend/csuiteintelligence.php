<?php require(APPPATH . 'views/frontend/header.php'); ?>

<div class="category-archives">
    <div class="archive-page-without-headerimage pb-5">
        <div class="archive-page-header mb-5 bg-navydarklight-700 py-5">
            <div class="archive-page-header__wrap container">
                <div class="archive-page-header__content">
                    <h1 class="archive-page-header__title text-white fs-heading-1 fw-300">The C-Suite Intelligence</h1>
                    <div class=" text-center text-white d-flex flex-column justify-content-center align-items-center" style="max-width: 53rem; margin:0 auto;">
                        <hr class="wp-block-separator is-style-short" style="opacity: 1;">
                        <p class="text-white text-center">Analyzing the forces shaping global financial markets, from geopolitics to macroeconomics</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="parent-Container__wrapper">
            <?php require(APPPATH . 'views/frontend/categoryitems.php'); ?>
        </div>
    </div>
    <div class="blog-newsletter-signup"></div>
</div>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>