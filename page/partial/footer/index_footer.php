<!-- ...::: Start Footer Section :::... -->
<footer id="contact" class="footer-section section-bg overflow-hidden pos-relative">
    <div class="footer-inner-shape-top-left"></div>
    <div class="footer-inner-shape-top-right"></div>
    <div class="footer-section-top section-gap-t-165">
        <div class="container">

            <div class="footer-top-wrapper text-center">
                <div class="row">
                    <div class="col-12">
                        <div action="#" class="footer-newsletter">
                            <span class="section-tag">Get in touch...</span>
                            <h2 class="section-title">Prepared to grow?</h2>
                            <button data-cal-namespace="30min" data-cal-config='{"layout":"month_view"}' data-cal-link="divine-daniel/30min" class="submit-btn">Let's talk</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-center section-gap-tb-165">
        <div class="container">
            <div class="row justify-content-between align-items-center mb-n5">
                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <a href="tel:+7019643318" class="info-box">
                            <span class="icon"><i class="icofont-phone"></i></span>
                            <span class="text">+23407019643318</span>
                        </a>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>

                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-single-info">
                        <a href="mailto:divinedaniel1305@gmail.com" class="info-box">
                            <span class="icon"><i class="icofont-envelope-open"></i></span>
                            <span class="text">divinedaniel1305@gmail.com</span>
                        </a>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>

                <div class="col-auto mb-5">
                    <!-- Start Single Footer Info -->
                    <div class="footer-singProjectsle-info">
                        <ul class="social-link">
                            <li><a href="https://www.example.com/" target="_blank"><i class="icofont-facebook"></i></a></li>
                            <li><a href="https://www.example.com/" target="_blank"><i class="icofont-dribbble"></i></a></li>
                            <li><a href="https://www.example.com/" target="_blank"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Start Single Footer Info -->
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center flex-column-reverse flex-md-row">
                <div class="col-auto">
                    <div class="footer-copyright">
                        <p class="copyright-text">&copy; 2025 <a href="index.php">Divine Daniel.</a> All rights reserved.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="index.php" class="footer-logo">
                        <div class="logo">
                            <img src="assets/images/logo/logo.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ...::: End Footer Section :::... -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>
</main>

<!-- Global Vendor, plugins JS -->

<!-- JS Files
    ============================================ -->
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->

<!--Plugins JS-->
<!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.appear.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/images-loaded.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/counter.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script> -->

<!-- Minify Version -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script>

<!--Main JS (Common Activation Codes)-->
<script src="assets/js/main.js"></script>


<!-- Cal element-click embed code begins -->
<script type="text/javascript">
    (function(C, A, L) {
        let p = function(a, ar) {
            a.q.push(ar);
        };
        let d = C.document;
        C.Cal = C.Cal || function() {
            let cal = C.Cal;
            let ar = arguments;
            if (!cal.loaded) {
                cal.ns = {};
                cal.q = cal.q || [];
                d.head.appendChild(d.createElement("script")).src = A;
                cal.loaded = true;
            }
            if (ar[0] === L) {
                const api = function() {
                    p(api, arguments);
                };
                const namespace = ar[1];
                api.q = api.q || [];
                if (typeof namespace === "string") {
                    cal.ns[namespace] = cal.ns[namespace] || api;
                    p(cal.ns[namespace], ar);
                    p(cal, ["initNamespace", namespace]);
                } else p(cal, ar);
                return;
            }
            p(cal, ar);
        };
    })(window, "https://app.cal.com/embed/embed.js", "init");
    Cal("init", "30min", {
        origin: "https://app.cal.com"
    });


    // Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
    // `data-cal-link="divine-daniel/30min"`
    // data-cal-namespace="30min"
    // `data-cal-config='{"layout":"month_view"}'`

    Cal.ns["30min"]("ui", {
        "hideEventTypeDetails": false,
        "layout": "month_view"
    });
</script>
<!-- Cal element-click embed code ends -->

</body>


<!-- Mirrored from phpdemo.net/lendex/lendex/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Aug 2025 14:11:45 GMT -->
</php>