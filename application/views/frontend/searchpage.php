<?php require(APPPATH . 'views/frontend/header.php'); ?>

<style>
    .search__form {
        border-radius: 0 0 1.25rem 0;
        box-shadow: 0 0 1.25rem rgb(0, 0, 0, 0.05);
        display: flex;
        flex-wrap: wrap;
        margin: 0 auto;
        max-width: 43rem;
        overflow: hidden;
    }

    .search__form .form__button {
        background-color: #fff;
        border-color: #fff;
        border-left: 1px solid rgb(10, 28, 60, 0.2);
        border-radius: 0 0 1.25rem 0;
        color: #0a1c3c;
        font-size: 0.875rem;
        font-weight: 600;
        padding: 0.625rem 1.25rem;
        text-transform: uppercase;
    }

    .search__form .form__button:focus,
    .search__form .form__button:hover {
        background-color: #fff;
        border-color: #0067c6;
        border-left: 2px solid #0067c6;
        color: #0067c6;
    }

    @media (min-width: 51.25em) {

        .search__form .form__button-text {
            display: inline-flex !important;
        }

        .search__form .form__button-icon {
            display: none !important;
        }

        .search__form .form__button {
            text-align: center;
            padding: 0.75rem 1.5rem;
            width: 25%;
        }
    }

    .search__form .form__button-icon {
        display: flex;
    }

    .search__form .form__button-text {
        display: none;
    }
</style>


<div class="search__header">
    <div class="archive-page-header mb-4 bg-navydarklight-700">
        <div class="archive-page-header__wrap container">
            <div class="archive-page-header__content">
                <h1 class="archive-page-header__title text-white fs-heading-1 fw-300">Search</h1>
                <form action="" class="search__form">
                    <input type="text" class="form__text">
                    <button class="button form__button" type="submit">
                        <span class="form__button-text" aria-hidden="true">Search</span>
                        <span class="form__button-icon" aria-hidden="true"><svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="24" height="24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.867 15.723h-1.129l-.4-.386a9.25 9.25 0 0 0 2.244-6.046A9.29 9.29 0 0 0 9.291 0 9.29 9.29 0 0 0 0 9.291a9.29 9.29 0 0 0 9.291 9.291 9.25 9.25 0 0 0 6.046-2.244l.386.4v1.13L22.87 25 25 22.87l-7.133-7.147Zm-8.576 0a6.424 6.424 0 0 1-6.432-6.432A6.424 6.424 0 0 1 9.29 2.859a6.424 6.424 0 0 1 6.432 6.432 6.424 6.424 0 0 1-6.432 6.432Z" fill="currentColor"></path>
                            </svg></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="parent-Container__wrapper">
    <div class="search__result">
        <div class="archive-page-header" style="padding: 2rem 0px !important;">
            <div class="archive-page-header__wrap container">
                <div class="archive-page-header__content">
                    <div class="archive-page-header__description d-flex justify-content-center">
                        <hr class="wp-block-separator is-style-short" style="opacity: 1;">
                    </div>
                </div>
            </div>
        </div>
        <?php require(APPPATH . 'views/frontend/categoryitems.php'); ?>
    </div>
</div>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>