<footer role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="footer_boxes">
                <div class="col-sm-4">
                    <h5 class="heading heading--h6 heading--punt-road">Armish Digital</h5>
                    <div class="footer-links-menu email_sec">
                        <p>We are your go-to digital and design agency, providing exceptional design solutions. Increase
                            brand
                            awareness, enhance your digital experience, and transform your businesses with Armish Digital. We
                            are your design partners.</p>
                        <a href="mailto:info@armishai.com" style="width: 75%">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            info@armishai.com
                        </a>
                        <a href="tel:+923356909090"><i class="fa fa-phone" aria-hidden="true"></i> For Sales: +92 335 6909090</a>
                        <a><i class="fa fa-map-marker"></i>Pakistan</a>

                    </div>
                </div>
                <div class="col-sm-2">
                    <h5 class="heading heading--h6 heading--punt-road">Services</h5>
                    <div class="footer-links-menu">
                        <ul class="footer-links-menu__items">
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="categories">Logo Design</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="mascot-design">Mascot Design</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="stationery-design">Stationery
                                    Design</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="presentation-folders">Product
                                    Packaging Design</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="online-marketing">Online
                                    Marketing</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link"
                                    href="categories?cat=social_media">Social Media Design</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h5 class="heading heading--h6 heading--punt-road">&nbsp;</h5>
                    <div class="footer-links-menu footer-links-menu-2">
                        <ul class="footer-links-menu__items">
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="portfolio">Portfolio</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="pricing">Pricing</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link" href="ccpa-privacy-notice">Privacy
                                    Notice</a>
                            </li>
                            <li class="footer-links-menu__items__item">
                                <a class="footer-links-menu__items__item__link"
                                    href="ccpa-data-processing-addendum">Data Processing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer_last_col">
                        <img loading="lazy" src="public/images/logo.png" alt="footer Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="container">
    <div class="footer__sub">
        <div class="footer__sub__inner">
            <div class="row">
                <div class="col-sm-4">
                    <div class="site-footer__legal">
                        <span class="site-footer__legal__copyright-message">
                            All Rights Reserved @ Armish Digital.
                        </span>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="site-footer__legal"><span class="site-footer__legal__copyright-message">
                            Armish Digital
                        </span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="site-footer__legal__privacy-links">
                        <ul class="footer-level-nav pull-right">
                            <li class="footer-level-nav__item">
                                <a class="footer-level-nav__item__link" href="terms">Terms And Conditions</a>
                            </li>
                            <li class="footer-level-nav__item">
                                <a class="footer-level-nav__item__link" href="privacy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="public/js/jquery-1.10.2.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/fancybox.js"></script>
<script src="public/js/slick.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/accordian-jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="public/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".contactBtn").click(function () {
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            if (name != "" && email != "" && phone != "") {
                var formdata = $(".contact_form_all").serialize();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '/contact',
                    data: formdata,
                    success: function (resp) {
                        if (resp != "error") {
                            setTimeout(function () {
                                $("#status").text("");
                                // $(".contact_form_all")[0].reset();
                                document.location.href = resp;
                            }, 1500);
                        }
                    }
                });
            } else {
                if (name == "") {
                    $("#status").text("Enter Name");
                } else if (email == "") {
                    $("#status").text("Enter Email");
                } else if (phone == "") {
                    $("#status").text("Enter Phone");
                }
            }
            return false;
        });
        // Show Tawkto
        $(".d_grey_btn").click(function () {
            Tawk_API.toggle();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        //var currentIP;
        var key = '5XpThOAEkfgOvEJ';
        var currentIP = $("meta[name=ip2loc]").attr('content');
        var pgurl = $("meta[name=page_url]").attr('content');
        $.ajax({
            method: 'get',
            url: '//pro.ip-api.com/json/' + currentIP,
            data: {
                key: key
            },
            success: function (data) {
                if (data) {
                    $('input[name=ip2loc_ip]').val(data.query);
                    $('input[name=ip2loc_isp]').val(data.isp);
                    $('input[name=ip2loc_org]').val(data.org);
                    $('input[name=ip2loc_country]').val(data.country);
                    $('input[name=ip2loc_region]').val(data.regionName);
                    $('input[name=ip2loc_city]').val(data.city);
                    $('input[name=pageurl]').val(pgurl);
                }
            }
        });
    });
    $(document).ready(function () {
        $(".drop-icon-st").click(function () {
            $(".drop-icon-st").removeClass("active");
            // $(".tab").addClass("active"); // instead of this do the below
            $(this).addClass("active");
        });
    });
    $(document).ready(function () {
        $(".inr-cat-st-drop-logo").hover(function () {
            $(".inr-cat-st-drop-logo").removeClass("active");
            // $(".tab").addClass("active"); // instead of this do the below
            $(this).addClass("active");
        });
    });
</script>
</body>

</html>