<style>
    .form-input input {
        padding: 0.75rem;
        font-size: 1rem;
        border-radius: 0;
        background-color: #fff;
        color: #0a1c3c;
        width: 100%;
        border: 1px solid #123d68;
    }
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h3>
                    Join the Insights Mailing List
                </h3>
                <form action="" class="d-flex flex-column gap-3">
                    <input type="hidden" id="newsletter_signup_nonce" name="newsletter_signup_nonce" value="8f1eaf9986">
                    <div class="form-input">
                        <input id="manual-newsletter-signup_firstname" name="firstname" placeholder="First Name" required="" type="text" aria-describedby="manual-newsletter-signup-first_name-error">
                    </div>
                    <div class="form-input">
                        <input id="manual-newsletter-signup_lastname" name="lastname" placeholder="Last Name" required="" type="text" aria-describedby="manual-newsletter-signup-last_name-error">
                    </div>
                    <div class="form-input">
                        <input id="manual-newsletter-signup_email" name="email" placeholder="Enter Your Email…" required="" type="email" aria-describedby="manual-newsletter-signup-email-error" data-gtm-form-interact-field-id="2">
                    </div>
                    <div class="form-input">
                        <input id="manual-newsletter-signup_company" name="company" placeholder="Company" required="" type="text" aria-describedby="manual-newsletter-signup-company-error" data-gtm-form-interact-field-id="3">
                    </div>
                    <div class="form-actions">
                        <button class="form-action button wp-block-button__link" data-bs-dismiss="modal" type="submit">
                            Sign up now </button>
                    </div>
                    <div id="manual-newsletter-signup-messages" class="form-messages" aria-live="polite"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="blog-newsletter-signup">

    <div class="block-newsletter-signup__text parent-Container__wrapper">
        <h3 class="block-newsletter-signup__title h1">
            Stay Current With Updates
        </h3>
        <p class="block-newsletter-signup__subtitle">Subscribe to our email for all our latest insights and timely content.</p>
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="block-newsletter-signup__cta button is-style-alt">
            Sign Up
        </button>
    </div>
</div>
<footer class="footer bg-navydarklight-700">

    <div class="footer__top">
        <div class="parent-Container__wrapper">
            <div class="footer__content row align-items-center justify-content-between row-gap-4">
                <div class="col-md-6">
                    <ul class="footer__menu justify-content-sm-center justify-content-md-start w-100 justify-content-sm-center">
                        <li><a href="#" class="footer__menu-link fw-700 text-white">Services</a></li>
                        <li><a href="#" class="footer__menu-link fw-700 text-white">Locations</a></li>
                        <li><a href="#" class="footer__menu-link fw-700 text-white">Notice & Policies</a></li>
                        <li><a href="#" class="footer__menu-link fw-700 text-white">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul class="footer-social ps-0 justify-content-md-end justify-content-sm-center">
                        <li>
                            <a href="" class="footer__social-link">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="none" aria-hidden="true" focusable="false" class="footer__social-share__icon-linkedin">
                                    <path fill="currentColor" d="M4 11.885h5.833v19.15H4v-19.15Zm2.9-2.253h-.034C5.127 9.632 4 8.38 4 6.815 4 5.217 5.16 4 6.933 4c1.774 0 2.868 1.217 2.9 2.815 0 1.563-1.126 2.817-2.934 2.817ZM32 31.035h-5.833v-10.25c0-2.476-1.43-4.166-3.724-4.166-1.752 0-2.699 1.14-3.159 2.242-.168.394-.117 1.485-.117 2.036v10.138h-5.834v-19.15h5.834v2.947c.84-1.257 2.158-2.947 5.527-2.947C28.87 11.885 32 14.42 32 20.08L32 31.035Z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="parent-Container__wrapper">
            <div class="footer__content row align-items-start">
                <div class="col-md-5">
                    <p class="footer__company-info d-flex text-start justify-content-md-start mb-md-0">Eninrac Consulting Private Limited, 2nd Floor, B-130, B-Block, Sector 65, Noida - 201301, Uttar Pradesh</p>
                </div>
                <div class="col-md-7">
                    <div class="footer__disclosures d-flex flex-wrap justify-content-md-end justify-content-sm-center align-items-center">
                        <p class="footer__copyright mb-md-0">© 2024 Jefferies Financial Group Inc.</p>
                        <ul class="footer__disclosures-menu d-flex flex-wrap ms-md-2 mb-md-0 ps-0 list-style-none gap-3">
                            <li>
                                <a href="" class="footer__disclosure-link">
                                    Privacy Notice
                                </a>
                            </li>
                            <li>
                                <a href="" class="footer__disclosure-link">
                                    Privacy Notice
                                </a>
                            </li>
                            <li>
                                <a href="" class="footer__disclosure-link">
                                    Privacy Notice
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugins/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugins/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugins/daterangepicker.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugins/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/plugins/popper.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/app.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script>
    function activeLoader() {
        let preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.classList.add('active')
        }
    }

    function deactiveLoader() {
        let preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.classList.remove('active')
        }
    }
</script>
</body>

</html>