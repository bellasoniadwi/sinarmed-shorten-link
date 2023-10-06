<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <link rel="shortcut icon" href="{{ asset('styleUser/style/sinarmed.png') }}" type="image/webp">
    <link rel="icon" href="{{ asset('styleUser/style/sinarmed.png') }}" type="image/webp">
    <title>Sinarmed || Shorten Link</title>
    <link rel="manifest" href="{{ asset('styleUser/style/manifest.json') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styleUser/css/styles.css') }}" />
</head>

<body>
    <div class="min-h-full flex-h-center" id="background_div">
        <input type="hidden" value="https://bio.link" id="app-url">
        <input type="hidden" value="null" id="is-featured">

        <img class="page-image" data-src="{{ asset('styleUser/style/red.png') }}" alt="background" />
        <canvas id="bg-canvas" class="background-overlay"></canvas>
        <div class="mt-48 page-full-wrap relative ">
            <input type="hidden" value="creator-page" id="page-type">
            <img class="display-image m-auto" data-src="{{ asset('styleUser/style/sinarmed-logo.png') }}"
                alt="Samir Paul" width="300" height="300" />
            <h2 class="page-title page-text-color page-text-font mt-16 text-center">
                PT Sinarmed Jaya
            </h2>
            <h3 class="page-subtitle page-text-color page-text-font mt-16 text-center">
                Medical Gas System - Engineering - Service
            </h3>

            <div class="flex-both-center flex-wrap mt-24">
                <div class="page-social relative">
                    <a target="_blank" rel="noopener" data-testid="SocialIcon"
                        href="https://instagram.com/pt_sinarmedjaya" aria-label="PT Sinarmed Jaya instagram"
                        class="sc-eCssSg lbrsth sc-kstrdz btjemE"><svg enable-background="new 0 0 24 24"
                            viewBox="0 0 24 24" class="sc-gKsewC hxdUPG">
                            <title data-testid="svgTitle" id="title_0.28134046608261154">instagram</title>
                            <path fill="#fff"
                                d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z">
                            </path>
                            <path fill="#fff" d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z">
                            </path>
                            <path fill="#fff"
                                d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z">
                            </path>
                        </svg></a>
                </div>
                <div class="page-social relative">
                    <a target="_blank" rel="noopener" data-testid="SocialIcon"
                        href="https://www.facebook.com/sinarmed.jaya?_rdc=2&amp;_rdr"
                        aria-label="PT Sinarmed Jaya facebook" class="sc-eCssSg lbrsth sc-kstrdz btjemE"><svg
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="sc-gKsewC hxdUPG">
                            <title data-testid="svgTitle" id="title_0.4299346348250701">facebook</title>
                            <path fill="#fff"
                                d="M23,12A11,11,0,1,0,10.279,22.865h0a11.08,11.08,0,0,0,3.436,0h0A10.952,10.952,0,0,0,23,12ZM10.859,21.935v-6.9a.5.5,0,0,0-.5-.5H8.193V12.5h2.166a.5.5,0,0,0,.5-.5V9.686c0-2.278,1.264-3.585,3.459-3.585a15.392,15.392,0,0,1,1.858.137V7.89h-.824l-.019,0a2,2,0,0,0-2.181,1.735,1.8,1.8,0,0,0-.011.4V12a.5.5,0,0,0,.5.5H15.97l-.312,2.035H13.641a.5.5,0,0,0-.5.5v6.9A10.124,10.124,0,0,1,10.859,21.935Zm3.282-.166V15.535h1.946a.5.5,0,0,0,.5-.425l.465-3.035a.5.5,0,0,0-.494-.575H14.141V10.016a1.267,1.267,0,0,1,.308-.821,1.218,1.218,0,0,1,.9-.3h1.324a.5.5,0,0,0,.5-.5V5.806a.5.5,0,0,0-.42-.494A16.661,16.661,0,0,0,14.325,5.1c-2.754,0-4.466,1.757-4.466,4.585V11.5H7.693a.5.5,0,0,0-.5.5v3.035a.5.5,0,0,0,.5.5H9.859v6.234a10,10,0,1,1,4.282,0Z">
                            </path>
                        </svg></a>
                </div>
                <div class="page-social relative">
                    <a target="_blank" rel="noopener" data-testid="SocialIcon"
                        href="https://www.youtube.com/channel/UCwlvBU1w44b3CbZ2nk4gRsg"
                        aria-label="PT Sinarmed Jaya youtube" class="sc-eCssSg lbrsth sc-kstrdz btjemE">
                        <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="sc-gKsewC hxdUPG">
                            <title data-testid="svgTitle" id="title_0.45802239483822604">youtube</title>
                            <path fill="#fff"
                                d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z">
                            </path>
                        </svg></a>
                </div>

                <div class="page-social relative">
                    <a target="_blank" rel="noopener" data-testid="SocialIcon" href="mailto:info@sinarmed.com"
                        aria-label="PT Sinarmed Jaya email address" class="sc-eCssSg lbrsth sc-kstrdz btjemE"><svg
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="sc-gKsewC hxdUPG">
                            <title data-testid="svgTitle" id="title_0.18377318436075463">email</title>
                            <path fill="#fff"
                                d="M18.821,20.5H5.179A3.683,3.683,0,0,1,1.5,16.821V7.179A3.683,3.683,0,0,1,5.179,3.5H18.821A3.683,3.683,0,0,1,22.5,7.179v9.642A3.683,3.683,0,0,1,18.821,20.5ZM5.179,4.5A2.682,2.682,0,0,0,2.5,7.179v9.642A2.682,2.682,0,0,0,5.179,19.5H18.821A2.682,2.682,0,0,0,21.5,16.821V7.179A2.682,2.682,0,0,0,18.821,4.5Z">
                            </path>
                            <path fill="#fff"
                                d="M12,14.209a.5.5,0,0,1-.346-.138L4.286,7.028a.5.5,0,0,1,.691-.723L12,13.018l7.023-6.713a.5.5,0,1,1,.691.723l-7.368,7.043A.5.5,0,0,1,12,14.209Z">
                            </path>
                            <path fill="#fff"
                                d="M4.7,17.833a.5.5,0,0,1-.347-.86l5.54-5.31a.5.5,0,0,1,.692.722L5.048,17.694A.5.5,0,0,1,4.7,17.833Z">
                            </path>
                            <path fill="#fff"
                                d="M19.3,17.832a.5.5,0,0,1-.346-.139l-5.538-5.308a.5.5,0,0,1,.692-.722l5.538,5.308a.5.5,0,0,1-.346.861Z">
                            </path>
                        </svg></a>
                </div>
            </div>

            <div class="mt-24">

                <div class="page-item-wrap relative ">
                    <div class="page-item flex-both-center absolute"></div>
                    <a target="_blank" class="page-item-each py-10 flex-both-center"
                        href="https://api.whatsapp.com/send?phone=628113387053" data-id="262840"
                        data-type="page_item">
                        <img class="link-each-image" data-src="{{ asset('styleUser/style/wa.png') }}"
                            alt="Whatsapp Sinarmed" />
                        <div class="css-18dalow-p2">
                            <h2><span class="text-center">WHATSAPP</span></h2>
                        </div>
                    </a>

                </div>

                <div class="page-item-wrap relative">
                    <div class="page-item flex-both-center absolute"></div>
                    <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://www.sinarmed.com/"
                        data-id="261652" data-type="page_item">
                        <img class="link-each-image" data-src="{{ asset('styleAdmin/images/logos/sinarmed.png') }}"
                            alt="Website Sinarmed" />
                        <div class="css-18dalow-p2">
                            <h2><span class="text-center">SINARMED</span></h2>
                        </div>
                    </a>
                </div>

                {{-- <div class="page-item-wrap relative">
                    <div class="page-item flex-both-center absolute"></div>
                    <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://pahsco.co.id/"
                        data-id="262840" data-type="page_item">
                        <img class="link-each-image" data-src="{{ asset('styleUser/style/pahsco.png') }}"
                            alt="Pahsco" />
                            <div class="css-18dalow-p2">
                                <h2><span class="text-center">PAHSCO</span></h2>
                            </div>
                    </a>
                </div> --}}

                <div class="page-item-wrap relative">
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-btn">ALAT KESEHATAN LUAR</button>
                            <img class="link-each-image" data-src="{{ asset('styleUser/style/e-katalog.png') }}"
                                alt="Katalog Sinarmed" />
                            <div class="accordion-content">
                                @foreach ($akl as $a)
                                    <div class="page-item flex-both-center absolute"></div>
                                    <a target="_blank" class="page-item-each py-10 flex-both-center"
                                        href="{{ $a->link_product }}" data-id="261652" data-type="page_item">
                                        <img class="link-each-image"
                                            data-src="{{ asset('storage/' . $a->gambar_product) }}"
                                            alt="{{ $a->nama_product }}" />
                                        <span class=" item-title text-center">{{ $a->nama_product }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-item-wrap relative">
                    <div class="page-item flex-both-center absolute"></div>
                    <div class="css-x3hr8h">
                        <div style="border-radius: 8px; border: 0.5px solid #FFFFFF; background-color: #FFFFFF;"
                            class="css-1goyi81">
                            <div class="css-139awdm">
                                <div color="#FFFFFF" style="border-bottom: 1px solid #b2aeae"
                                    class="css-18dalow e1cu2qz1" href="{{ route('user.galery') }}">
                                    <picture visibility="visible" class="css-18ikrgg en27bju17">
                                        <source
                                            srcset="https://super-content.s3-ap-southeast-1.amazonaws.com/users/98269/icons/62d65be605b8766aa957eb1b">
                                        <img visibility="visible" loading="lazy" class="css-1d3ess8 en27bju18">
                                    </picture>
                                    <h2><a href="{{ route('user.galery') }}" ><span class="text-center">PRODUK DALAM NEGERI</span></a></h2>
                                </div>
                            </div>

                            <div display="grid" class="css-37t1ki e1axnq4j3">
                                @foreach ($tkdn as $t)
                                    <a href="{{ $t->link_product }}">
                                        <div class="css-1fqugoq eayjb5n4">
                                            <img alt="Medical Gas Alarm System"
                                                src="{{ asset('storage/' . $t->gambar_product) }}">
                                            <div font-size="14px" class="css-1bmv740 eayjb5n2">
                                                <span>{{ $t->nama_product }}</span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".accordion-btn").click(function() {
            $(".accordion-content").slideToggle(); // Toggle the content
            $(this).toggleClass("active"); // Add or remove "active" class for styling
        });
    });
</script>

<script>
    var plausibleScript = document.createElement("script");
    plausibleScript.src = "{{ asset('styleUser/style/plausible.js') }}"
    plausibleScript.setAttribute("asnyc", "");
    plausibleScript.setAttribute("defer", "");
    plausibleScript.setAttribute("data-domain", "bio.link");
    document.head.appendChild(plausibleScript);
</script>


<script>
    (() => {
        var e, t = {
                757: (e, t, r) => {
                    e.exports = r(666)
                },
                80: (e, t, r) => {
                    "use strict";
                    var n = r(757),
                        o = r.n(n);

                    function a(e, t, r, n, o, a, i) {
                        try {
                            var s = e[a](i),
                                c = s.value
                        } catch (e) {
                            return void r(e)
                        }
                        s.done ? t(c) : Promise.resolve(c).then(n, o)
                    }

                    function i(e) {
                        var t = e.target.closest(".page-item-wrap"),
                            r = t.querySelector(".show-embed-item"),
                            n = t.querySelector(".embed-iframe"),
                            o = parseInt(r.getAttribute("data-height")),
                            a = 0;
                        r.getAttribute("data-type") && (a = 20), t.classList.toggle("show-embed"), n.src = n
                            .getAttribute("data-src"), n.style.cssText = "height: ".concat(0 == n.offsetHeight ?
                                o - a : 0, "px"), r.style.cssText = "height: ".concat(0 == r.offsetHeight ? o +
                                16 : "0", "px")
                    }

                    function s(e) {
                        for (var t = e + "=", r = document.cookie.split(";"), n = 0; n < r.length; n++) {
                            for (var o = r[n];
                                " " === o.charAt(0);) o = o.substring(1, o.length);
                            if (0 === o.indexOf(t)) return o.substring(t.length, o.length)
                        }
                        return null
                    }

                    function c(e) {
                        if (s(e) && (t = e, r = location.hostname.split(".").reverse(), n = r[1] + "." + r[0],
                                document.cookie = t + "=; domain=" + n +
                                "; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;", !s(e))) {
                            try {
                                location.reload(!0)
                            } catch (e) {}
                            location.reload()
                        }
                        var t, r, n
                    }
                    var u = document.getElementById("app-url").value,
                        l = document.getElementById("is-featured").value,
                        d = window.location.search,
                        h = new URLSearchParams(d).get("preview"),
                        f = !1;

                    function m() {
                        var e = document.getElementById("subscribe-btn"),
                            t = document.getElementById("subsc-email").value,
                            r = e.getAttribute("data-pageID"),
                            n = e.getAttribute("data-campId");
                        if ("" != t) {
                            document.getElementById("btn-text").classList.toggle("op-0"), document
                                .getElementById("btn-loader").classList.toggle("op-0"), document.getElementById(
                                    "subsc-email-error").innerText = "", document.getElementById(
                                    "subscribers-email-wrap").classList.remove("error-wrap");
                            var o = new FormData;
                            o.append("email", t);
                            var a = decodeURIComponent(s("XSRF-TOKEN")),
                                i = new XMLHttpRequest;
                            i.withCredentials = !0, i.onreadystatechange = function() {
                                if (4 === i.readyState && 200 === i.status) {
                                    document.getElementById("btn-text").classList.toggle("op-0"), document
                                        .getElementById("btn-loader").classList.toggle("op-0");
                                    var e = document.getElementById("subsc-email").value;
                                    document.getElementById("thank_you_msg").innerHTML =
                                        "You’re subscribed as " + e, document.getElementById("subsc-email")
                                        .value = "";
                                    for (var t = document.getElementsByClassName("hide-after-success"), r =
                                            0; r < t.length; r++) t[r].style.display = "none";
                                    f = !0, document.getElementsByClassName("show-after-success")[0]
                                        .classList.remove("hidden"), setTimeout((function() {
                                            document.getElementsByClassName("thank-you-title")[0]
                                                .classList.toggle("hidden"), document
                                                .getElementById("featured-subscribers").style
                                                .cursor = "pointer", document.getElementById(
                                                    "featured-subscribers").classList.toggle(
                                                    "hide-subscribers")
                                        }), 3e3)
                                } else "" != i.responseText && JSON.parse(i.responseText).errors && p(JSON
                                    .parse(i.responseText).errors.email[0]), f = !1
                            }, i.open("post", "".concat(u, "/api/pages/").concat(r, "/campaign/").concat(n,
                                "/subscriber")), i.setRequestHeader("X-XSRF-TOKEN", a), i.send(o)
                        } else p("Please enter a valid email.")
                    }

                    function g() {
                        document.getElementById("subscribe-btn").addEventListener("click", function() {
                            var e, t = (e = o().mark((function e(t) {
                                return o().wrap((function(e) {
                                    for (;;) switch (e.prev = e.next) {
                                        case 0:
                                            m();
                                        case 1:
                                        case "end":
                                            return e.stop()
                                    }
                                }), e)
                            })), function() {
                                var t = this,
                                    r = arguments;
                                return new Promise((function(n, o) {
                                    var i = e.apply(t, r);

                                    function s(e) {
                                        a(i, n, o, s, c, "next", e)
                                    }

                                    function c(e) {
                                        a(i, n, o, s, c, "throw", e)
                                    }
                                    s(void 0)
                                }))
                            });
                            return function(e) {
                                return t.apply(this, arguments)
                            }
                        }())
                    }

                    function p(e) {
                        document.getElementById("subscribers-email-wrap").classList.add("error-wrap"), document
                            .getElementById("subsc-email-error").innerText = e, document.getElementById(
                                "btn-text").classList.remove("op-0"), document.getElementById("btn-loader")
                            .classList.add("op-0")
                    }

                    function y() {
                        document.getElementById("subscribers-email-wrap").classList.remove("error-wrap"),
                            document.getElementById("subsc-email-error").innerText = ""
                    }
                    window.onload = function() {
                        ! function() {
                            for (var e = document.getElementsByTagName("img"), t = 0; t < e.length; t++) {
                                var r = e[t];
                                r.getAttribute("data-src") && r.setAttribute("src", r.getAttribute(
                                    "data-src"))
                            }
                        }(),
                        function() {
                            for (var e = document.getElementsByTagName("a"), t = 0; t < e.length; t++) e[t]
                                .addEventListener("click", (function(e) {
                                    var t = e.currentTarget,
                                        r = ["trackEvent", t.getAttribute("data-type"), "Click", t
                                            .getAttribute("data-id"), 1
                                        ];
                                    try {
                                        _paq.push(r)
                                    } catch (e) {}
                                }))
                        }(),
                        function() {
                            for (var e = document.getElementsByClassName("show-embed"), t = 0; t < e
                                .length; t++) e[t].addEventListener("click", i)
                        }(),
                        function() {
                            try {
                                new URLSearchParams(window.location.search).get("preview") ? c(
                                    "page_has_updated_preview") : c("page_has_updated")
                            } catch (e) {}
                        }();
                        var e, t = document.getElementById("page-type").value;
                        null == h && "true" == l && ("creator-page" == t && (document.getElementById(
                                    "toggle-subscription-btn").addEventListener("click", (function(e) {
                                    document.getElementById("featured-subscribers").classList
                                        .toggle("hide-subscribers"), f && document
                                        .getElementsByClassName("thank-you-title")[0].classList
                                        .toggle("hidden"), document.getElementById(
                                            "featured-subscribers").style.cursor = "default"
                                })), "true" === l && document.querySelector("#featured-subscribers") &&
                                document.querySelector("#featured-subscribers").addEventListener(
                                    "click", (function(e) {
                                        document.getElementById("featured-subscribers").classList
                                            .contains("hide-subscribers") &&
                                            "toggle-subscription-btn" !== e.target.id &&
                                            "sub-toggle" !== e.target.id ? (document.getElementById(
                                                    "featured-subscribers").classList.toggle(
                                                    "hide-subscribers"), f && document
                                                .getElementsByClassName("thank-you-title")[0]
                                                .classList.toggle("hidden"), document
                                                .getElementById("featured-subscribers").style
                                                .cursor = "default") : document.getElementById(
                                                "featured-subscribers").classList.contains(
                                                "hide-subscribers") && (document.getElementById(
                                                    "featured-subscribers").style.cursor =
                                                "pointer")
                                    }))), document.getElementById("subsc-email").addEventListener(
                                "keyup", (function(e) {
                                    "Enter" === e.key && m()
                                })), g(), (e = new XMLHttpRequest).open("GET", "".concat(u,
                                "/sanctum/csrf-cookie"), !0), e.withCredentials = !0, e.send(null),
                            document.getElementById("subsc-email").addEventListener("input", y))
                    }
                },
                662: () => {},
                328: () => {},
                666: e => {
                    var t = function(e) {
                        "use strict";
                        var t, r = Object.prototype,
                            n = r.hasOwnProperty,
                            o = "function" == typeof Symbol ? Symbol : {},
                            a = o.iterator || "@@iterator",
                            i = o.asyncIterator || "@@asyncIterator",
                            s = o.toStringTag || "@@toStringTag";

                        function c(e, t, r) {
                            return Object.defineProperty(e, t, {
                                value: r,
                                enumerable: !0,
                                configurable: !0,
                                writable: !0
                            }), e[t]
                        }
                        try {
                            c({}, "")
                        } catch (e) {
                            c = function(e, t, r) {
                                return e[t] = r
                            }
                        }

                        function u(e, t, r, n) {
                            var o = t && t.prototype instanceof p ? t : p,
                                a = Object.create(o.prototype),
                                i = new _(n || []);
                            return a._invoke = function(e, t, r) {
                                var n = d;
                                return function(o, a) {
                                    if (n === f) throw new Error("Generator is already running");
                                    if (n === m) {
                                        if ("throw" === o) throw a;
                                        return N()
                                    }
                                    for (r.method = o, r.arg = a;;) {
                                        var i = r.delegate;
                                        if (i) {
                                            var s = I(i, r);
                                            if (s) {
                                                if (s === g) continue;
                                                return s
                                            }
                                        }
                                        if ("next" === r.method) r.sent = r._sent = r.arg;
                                        else if ("throw" === r.method) {
                                            if (n === d) throw n = m, r.arg;
                                            r.dispatchException(r.arg)
                                        } else "return" === r.method && r.abrupt("return", r.arg);
                                        n = f;
                                        var c = l(e, t, r);
                                        if ("normal" === c.type) {
                                            if (n = r.done ? m : h, c.arg === g) continue;
                                            return {
                                                value: c.arg,
                                                done: r.done
                                            }
                                        }
                                        "throw" === c.type && (n = m, r.method = "throw", r.arg = c
                                            .arg)
                                    }
                                }
                            }(e, r, i), a
                        }

                        function l(e, t, r) {
                            try {
                                return {
                                    type: "normal",
                                    arg: e.call(t, r)
                                }
                            } catch (e) {
                                return {
                                    type: "throw",
                                    arg: e
                                }
                            }
                        }
                        e.wrap = u;
                        var d = "suspendedStart",
                            h = "suspendedYield",
                            f = "executing",
                            m = "completed",
                            g = {};

                        function p() {}

                        function y() {}

                        function v() {}
                        var b = {};
                        b[a] = function() {
                            return this
                        };
                        var w = Object.getPrototypeOf,
                            E = w && w(w(T([])));
                        E && E !== r && n.call(E, a) && (b = E);
                        var L = v.prototype = p.prototype = Object.create(b);

                        function x(e) {
                            ["next", "throw", "return"].forEach((function(t) {
                                c(e, t, (function(e) {
                                    return this._invoke(t, e)
                                }))
                            }))
                        }

                        function B(e, t) {
                            function r(o, a, i, s) {
                                var c = l(e[o], e, a);
                                if ("throw" !== c.type) {
                                    var u = c.arg,
                                        d = u.value;
                                    return d && "object" == typeof d && n.call(d, "__await") ? t.resolve(d
                                        .__await).then((function(e) {
                                        r("next", e, i, s)
                                    }), (function(e) {
                                        r("throw", e, i, s)
                                    })) : t.resolve(d).then((function(e) {
                                        u.value = e, i(u)
                                    }), (function(e) {
                                        return r("throw", e, i, s)
                                    }))
                                }
                                s(c.arg)
                            }
                            var o;
                            this._invoke = function(e, n) {
                                function a() {
                                    return new t((function(t, o) {
                                        r(e, n, t, o)
                                    }))
                                }
                                return o = o ? o.then(a, a) : a()
                            }
                        }

                        function I(e, r) {
                            var n = e.iterator[r.method];
                            if (n === t) {
                                if (r.delegate = null, "throw" === r.method) {
                                    if (e.iterator.return && (r.method = "return", r.arg = t, I(e, r),
                                            "throw" === r.method)) return g;
                                    r.method = "throw", r.arg = new TypeError(
                                        "The iterator does not provide a 'throw' method")
                                }
                                return g
                            }
                            var o = l(n, e.iterator, r.arg);
                            if ("throw" === o.type) return r.method = "throw", r.arg = o.arg, r.delegate =
                                null, g;
                            var a = o.arg;
                            return a ? a.done ? (r[e.resultName] = a.value, r.next = e.nextLoc, "return" !==
                                    r.method && (r.method = "next", r.arg = t), r.delegate = null, g) : a :
                                (r.method = "throw", r.arg = new TypeError(
                                    "iterator result is not an object"), r.delegate = null, g)
                        }

                        function k(e) {
                            var t = {
                                tryLoc: e[0]
                            };
                            1 in e && (t.catchLoc = e[1]), 2 in e && (t.finallyLoc = e[2], t.afterLoc = e[
                                3]), this.tryEntries.push(t)
                        }

                        function O(e) {
                            var t = e.completion || {};
                            t.type = "normal", delete t.arg, e.completion = t
                        }

                        function _(e) {
                            this.tryEntries = [{
                                tryLoc: "root"
                            }], e.forEach(k, this), this.reset(!0)
                        }

                        function T(e) {
                            if (e) {
                                var r = e[a];
                                if (r) return r.call(e);
                                if ("function" == typeof e.next) return e;
                                if (!isNaN(e.length)) {
                                    var o = -1,
                                        i = function r() {
                                            for (; ++o < e.length;)
                                                if (n.call(e, o)) return r.value = e[o], r.done = !1, r;
                                            return r.value = t, r.done = !0, r
                                        };
                                    return i.next = i
                                }
                            }
                            return {
                                next: N
                            }
                        }

                        function N() {
                            return {
                                value: t,
                                done: !0
                            }
                        }
                        return y.prototype = L.constructor = v, v.constructor = y, y.displayName = c(v, s,
                            "GeneratorFunction"), e.isGeneratorFunction = function(e) {
                            var t = "function" == typeof e && e.constructor;
                            return !!t && (t === y || "GeneratorFunction" === (t.displayName || t.name))
                        }, e.mark = function(e) {
                            return Object.setPrototypeOf ? Object.setPrototypeOf(e, v) : (e.__proto__ =
                                v, c(e, s, "GeneratorFunction")), e.prototype = Object.create(L), e
                        }, e.awrap = function(e) {
                            return {
                                __await: e
                            }
                        }, x(B.prototype), B.prototype[i] = function() {
                            return this
                        }, e.AsyncIterator = B, e.async = function(t, r, n, o, a) {
                            void 0 === a && (a = Promise);
                            var i = new B(u(t, r, n, o), a);
                            return e.isGeneratorFunction(r) ? i : i.next().then((function(e) {
                                return e.done ? e.value : i.next()
                            }))
                        }, x(L), c(L, s, "Generator"), L[a] = function() {
                            return this
                        }, L.toString = function() {
                            return "[object Generator]"
                        }, e.keys = function(e) {
                            var t = [];
                            for (var r in e) t.push(r);
                            return t.reverse(),
                                function r() {
                                    for (; t.length;) {
                                        var n = t.pop();
                                        if (n in e) return r.value = n, r.done = !1, r
                                    }
                                    return r.done = !0, r
                                }
                        }, e.values = T, _.prototype = {
                            constructor: _,
                            reset: function(e) {
                                if (this.prev = 0, this.next = 0, this.sent = this._sent = t, this
                                    .done = !1, this.delegate = null, this.method = "next", this
                                    .arg = t, this.tryEntries.forEach(O), !e)
                                    for (var r in this) "t" === r.charAt(0) && n.call(this, r) && !
                                        isNaN(+r.slice(1)) && (this[r] = t)
                            },
                            stop: function() {
                                this.done = !0;
                                var e = this.tryEntries[0].completion;
                                if ("throw" === e.type) throw e.arg;
                                return this.rval
                            },
                            dispatchException: function(e) {
                                if (this.done) throw e;
                                var r = this;

                                function o(n, o) {
                                    return s.type = "throw", s.arg = e, r.next = n, o && (r.method =
                                        "next", r.arg = t), !!o
                                }
                                for (var a = this.tryEntries.length - 1; a >= 0; --a) {
                                    var i = this.tryEntries[a],
                                        s = i.completion;
                                    if ("root" === i.tryLoc) return o("end");
                                    if (i.tryLoc <= this.prev) {
                                        var c = n.call(i, "catchLoc"),
                                            u = n.call(i, "finallyLoc");
                                        if (c && u) {
                                            if (this.prev < i.catchLoc) return o(i.catchLoc, !0);
                                            if (this.prev < i.finallyLoc) return o(i.finallyLoc)
                                        } else if (c) {
                                            if (this.prev < i.catchLoc) return o(i.catchLoc, !0)
                                        } else {
                                            if (!u) throw new Error(
                                                "try statement without catch or finally");
                                            if (this.prev < i.finallyLoc) return o(i.finallyLoc)
                                        }
                                    }
                                }
                            },
                            abrupt: function(e, t) {
                                for (var r = this.tryEntries.length - 1; r >= 0; --r) {
                                    var o = this.tryEntries[r];
                                    if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this
                                        .prev < o.finallyLoc) {
                                        var a = o;
                                        break
                                    }
                                }
                                a && ("break" === e || "continue" === e) && a.tryLoc <= t && t <= a
                                    .finallyLoc && (a = null);
                                var i = a ? a.completion : {};
                                return i.type = e, i.arg = t, a ? (this.method = "next", this.next =
                                    a.finallyLoc, g) : this.complete(i)
                            },
                            complete: function(e, t) {
                                if ("throw" === e.type) throw e.arg;
                                return "break" === e.type || "continue" === e.type ? this.next = e
                                    .arg : "return" === e.type ? (this.rval = this.arg = e.arg, this
                                        .method = "return", this.next = "end") : "normal" === e
                                    .type && t && (this.next = t), g
                            },
                            finish: function(e) {
                                for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                                    var r = this.tryEntries[t];
                                    if (r.finallyLoc === e) return this.complete(r.completion, r
                                        .afterLoc), O(r), g
                                }
                            },
                            catch: function(e) {
                                for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                                    var r = this.tryEntries[t];
                                    if (r.tryLoc === e) {
                                        var n = r.completion;
                                        if ("throw" === n.type) {
                                            var o = n.arg;
                                            O(r)
                                        }
                                        return o
                                    }
                                }
                                throw new Error("illegal catch attempt")
                            },
                            delegateYield: function(e, r, n) {
                                return this.delegate = {
                                    iterator: T(e),
                                    resultName: r,
                                    nextLoc: n
                                }, "next" === this.method && (this.arg = t), g
                            }
                        }, e
                    }(e.exports);
                    try {
                        regeneratorRuntime = t
                    } catch (e) {
                        Function("r", "regeneratorRuntime = r")(t)
                    }
                }
            },
            r = {};

        function n(e) {
            var o = r[e];
            if (void 0 !== o) return o.exports;
            var a = r[e] = {
                exports: {}
            };
            return t[e](a, a.exports, n), a.exports
        }
        n.m = t, e = [], n.O = (t, r, o, a) => {
            if (!r) {
                var i = 1 / 0;
                for (u = 0; u < e.length; u++) {
                    for (var [r, o, a] = e[u], s = !0, c = 0; c < r.length; c++)(!1 & a || i >= a) && Object
                        .keys(n.O).every((e => n.O[e](r[c]))) ? r.splice(c--, 1) : (s = !1, a < i && (i = a));
                    s && (e.splice(u--, 1), t = o())
                }
                return t
            }
            a = a || 0;
            for (var u = e.length; u > 0 && e[u - 1][2] > a; u--) e[u] = e[u - 1];
            e[u] = [r, o, a]
        }, n.n = e => {
            var t = e && e.__esModule ? () => e.default : () => e;
            return n.d(t, {
                a: t
            }), t
        }, n.d = (e, t) => {
            for (var r in t) n.o(t, r) && !n.o(e, r) && Object.defineProperty(e, r, {
                enumerable: !0,
                get: t[r]
            })
        }, n.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), (() => {
            var e = {
                773: 0,
                432: 0,
                170: 0
            };
            n.O.j = t => 0 === e[t];
            var t = (t, r) => {
                    var o, a, [i, s, c] = r,
                        u = 0;
                    for (o in s) n.o(s, o) && (n.m[o] = s[o]);
                    for (c && c(n), t && t(r); u < i.length; u++) a = i[u], n.o(e, a) && e[a] && e[a][0](),
                        e[i[u]] = 0;
                    n.O()
                },
                r = self.webpackChunk = self.webpackChunk || [];
            r.forEach(t.bind(null, 0)), r.push = t.bind(null, r.push.bind(r))
        })(), n.O(void 0, [432, 170], (() => n(80))), n.O(void 0, [432, 170], (() => n(662)));
        var o = n.O(void 0, [432, 170], (() => n(328)));
        o = n.O(o)
    })();
</script>

<script src="{{ asset('styleUser/style/snowfall.js') }}"></script>

</html>
