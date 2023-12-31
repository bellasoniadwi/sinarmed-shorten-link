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
            <img class="display-image m-auto" data-src="{{ asset('styleUser/style/sinarmed-logo.png') }}" alt="Sinarmed"
                width="300" height="300" />
            <h2 class="page-title page-text-color page-text-font mt-16 text-center">
                PT Sinarmed Jaya
            </h2>
            <h3 class="page-subtitle page-text-color page-text-font mt-16 text-center">
                Medical Gas System - Engineering - Service
            </h3>

            <div class="flex-both-center flex-wrap mt-24">
                @foreach ($socialmedia as $s)
                    <div class="page-social relative">
                        <a target="_blank" rel="noopener" data-testid="SocialIcon" href="{{ $s->link_thumbnail }}"
                            aria-label="PT Sinarmed Jaya Social Media" class="sc-eCssSg lbrsth sc-kstrdz btjemE">
                            <img class="link-each-social" data-src="{{ asset('storage/' . $s->gambar_thumbnail) }}"
                                alt="Sinarmed Social Media" /></a>
                    </div>
                @endforeach
            </div>

            <div class="mt-24">
                {{-- @foreach ($nonactive as $n)
                    <div class="page-item-wrap relative ">
                        <div class="page-item flex-both-center absolute"></div>
                        <a target="_blank" class="page-item-each py-10 flex-both-center"
                            href="{{ $n->link_thumbnail }}" data-id="262840"
                            data-type="page_item">
                            <div class="css-18dalow-p2">
                                <h2><span class="text-center">{{ $n->judul_thumbnail }}</span></h2>
                            </div>
                        </a>
                    </div>
                @endforeach --}}

                @foreach ($nonactive as $n)
                    <div class="page-item-wrap relative">
                        <div class="page-item flex-both-center absolute"></div>
                        <a target="_blank" class="page-item-each py-10 flex-both-center" href="{{ $n->link_thumbnail }}"
                            data-id="262840" data-type="page_item">
                            <div class="css-18dalow-p2">
                                <h2><span class="text-center">{{ $n->judul_thumbnail }}</span></h2>
                                <button class="share-button" data-clipboard-text="{{ $n->link_thumbnail }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                                        <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M40,0c-5.46484,0 -9.92187,4.39844 -10,9.84375c0,0.05078 0,0.10547 0,0.15625c0,3.6875 1.99609,6.89063 4.96875,8.625c1.47656,0.86328 3.19922,1.375 5.03125,1.375c5.51563,0 10,-4.48437 10,-10c0,-5.51562 -4.48437,-10 -10,-10zM28.0625,10.84375l-10.21875,5.125c2.37891,2.0625 3.94141,5.03125 4.125,8.375l10.34375,-5.1875c-2.41406,-2.02734 -4.01172,-4.98047 -4.25,-8.3125zM10,15c-5.51562,0 -10,4.48438 -10,10c0,5.51563 4.48438,10 10,10c2.05078,0 3.94141,-0.625 5.53125,-1.6875c2.68359,-1.79297 4.46875,-4.83984 4.46875,-8.3125c0,-3.58984 -1.91016,-6.73437 -4.75,-8.5c-1.53125,-0.95312 -3.32031,-1.5 -5.25,-1.5zM21.96875,25.65625c-0.18359,3.33984 -1.71875,6.33984 -4.09375,8.40625l10.1875,5.09375c0.23828,-3.33203 1.80859,-6.28125 4.21875,-8.3125zM40,30c-2.0625,0 -3.96875,0.64453 -5.5625,1.71875c-2.66797,1.79688 -4.4375,4.82422 -4.4375,8.28125c0,0.01563 0,0.01563 0,0.03125c-0.04297,0.00391 -0.08203,0.02734 -0.125,0.03125l0.125,0.0625c0.06641,5.45703 4.52734,9.875 10,9.875c5.51563,0 10,-4.48437 10,-10c0,-5.51562 -4.48437,-10 -10,-10z"></path></g></g>
                                        </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                @endforeach


                @foreach ($active as $a)
                    <div class="page-item-wrap relative ">
                        <div class="page-item flex-both-center absolute"></div>
                        <a target="_blank" class="page-item-each py-10 flex-both-center"
                            href="{{ $a->link_thumbnail }}" data-id="262840" data-type="page_item">
                            <img class="link-each-image" data-src="{{ asset('storage/' . $a->gambar_thumbnail) }}"
                                alt="{{ $a->judul_thumbnail }}" />
                            <div class="css-18dalow-p2">
                                <h2><span class="text-center">{{ $a->judul_thumbnail }}</span></h2>
                                <button class="share-button" data-clipboard-text="{{ $n->link_thumbnail }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                                        <g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M40,0c-5.46484,0 -9.92187,4.39844 -10,9.84375c0,0.05078 0,0.10547 0,0.15625c0,3.6875 1.99609,6.89063 4.96875,8.625c1.47656,0.86328 3.19922,1.375 5.03125,1.375c5.51563,0 10,-4.48437 10,-10c0,-5.51562 -4.48437,-10 -10,-10zM28.0625,10.84375l-10.21875,5.125c2.37891,2.0625 3.94141,5.03125 4.125,8.375l10.34375,-5.1875c-2.41406,-2.02734 -4.01172,-4.98047 -4.25,-8.3125zM10,15c-5.51562,0 -10,4.48438 -10,10c0,5.51563 4.48438,10 10,10c2.05078,0 3.94141,-0.625 5.53125,-1.6875c2.68359,-1.79297 4.46875,-4.83984 4.46875,-8.3125c0,-3.58984 -1.91016,-6.73437 -4.75,-8.5c-1.53125,-0.95312 -3.32031,-1.5 -5.25,-1.5zM21.96875,25.65625c-0.18359,3.33984 -1.71875,6.33984 -4.09375,8.40625l10.1875,5.09375c0.23828,-3.33203 1.80859,-6.28125 4.21875,-8.3125zM40,30c-2.0625,0 -3.96875,0.64453 -5.5625,1.71875c-2.66797,1.79688 -4.4375,4.82422 -4.4375,8.28125c0,0.01563 0,0.01563 0,0.03125c-0.04297,0.00391 -0.08203,0.02734 -0.125,0.03125l0.125,0.0625c0.06641,5.45703 4.52734,9.875 10,9.875c5.51563,0 10,-4.48437 10,-10c0,-5.51562 -4.48437,-10 -10,-10z"></path></g></g>
                                        </svg>
                                </button>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="page-item-wrap relative">
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-btn">ALAT KESEHATAN LUAR (PAHSCO) </button>
                            <img class="link-each-image" data-src="{{ asset('styleUser/style/e-katalog.png') }}"
                                alt="Katalog Sinarmed" />
                            <div class="accordion-content">
                                @foreach ($group as $gr)
                                    <div class="page-item flex-both-center absolute"></div>
                                    <a target="_blank" class="page-item-each py-10 flex-both-center"
                                        href="{{ $gr->link_thumbnail }}" data-id="261652" data-type="page_item">
                                        <img class="link-each-image"
                                            data-src="{{ asset('storage/' . $gr->gambar_thumbnail) }}"
                                            alt="{{ $gr->judul_thumbnail }}" />
                                        <span class=" item-title text-center">{{ $gr->judul_thumbnail }}</span>
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
                                    <h2><a href="{{ route('user.galery') }}"><span class="text-center">PRODUK DALAM
                                                NEGERI</span></a></h2>
                                </div>
                            </div>

                            <div display="grid" class="css-37t1ki e1axnq4j3">
                                @foreach ($gallery as $ga)
                                    <a href="{{ $ga->link_thumbnail }}">
                                        <div class="css-1fqugoq eayjb5n4">
                                            <img alt="{{ $ga->judul_thumbnail }}"
                                                src="{{ asset('storage/' . $ga->gambar_thumbnail) }}">
                                            <div font-size="14px" class="css-1bmv740 eayjb5n2">
                                                <span>{{ $ga->judul_thumbnail }}</span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- START-HUBUNGI KAMI --}}
                <div class="page-item-wrap relative">
                    <div class="accordion">
                        <div class="accordion-item">

                            <button class="accordion-btn-2">HUBUNGI KAMI </button>
                            <img class="link-each-image" data-src="{{ asset('styleUser/style/contact.png') }}"
                                alt="Hubungi Sinarmed" />
                            <div class="accordion-content-2">
                                <form class="form-horizontal form-label-left input_mask" method="POST"
                                    enctype="multipart/form-data" action="{{ route('thumbnail.inbox') }}">
                                    @csrf
                                    <div display="flex" color="#000000" class="css-a0jtnk en27bju14" open="">
                                        <div open="" class="css-2vlrzn en27bju13">
                                            <div class="css-bc505b en27bju11">
                                                <div class="css-1x55z">
                                                    <div class="css-7uo5h9 egpyr882">
                                                        <div class="MuiFormControl-root MuiTextField-root css-1tic"
                                                            height="48px"
                                                            style="background-color:white;border:1px solid #AAAAAA"
                                                            background="" textcolor="">
                                                            <div
                                                                class="MuiInput-root MuiInput-underline MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-2go6t7">
                                                                <input type="text" aria-invalid="false"
                                                                    autocomplete="off" id="nama"
                                                                    placeholder="Nama" value=""
                                                                    class="form-control MuiInput-input MuiInputBase-input css-mnn31"
                                                                    name="nama" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-ft88bn en27bju7"></div>
                                            <div class="css-bc505b en27bju11">
                                                <div class="css-1x55z">
                                                    <div class="css-7uo5h9 egpyr882">
                                                        <div class="MuiFormControl-root MuiTextField-root css-1tic"
                                                            height="48px"
                                                            style="background-color:white;border:1px solid #AAAAAA"
                                                            background="" textcolor="">
                                                            <div
                                                                class="MuiInput-root MuiInput-underline MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-2go6t7">
                                                                <input type="text" aria-invalid="false"
                                                                    autocomplete="off" id="telepon"
                                                                    placeholder="Nomor Telepon" value=""
                                                                    class="form-control MuiInput-input MuiInputBase-input css-mnn31"
                                                                    name="telepon" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-bc505b en27bju11">
                                                <div class="css-1x55z">
                                                    <div class="css-7uo5h9 egpyr882">
                                                        <div class="MuiFormControl-root MuiTextField-root css-1tic"
                                                            height="48px"
                                                            style="background-color:white;border:1px solid #4f4d4d"
                                                            background="" textcolor="">
                                                            <div
                                                                class="MuiInput-root MuiInput-underline MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-2go6t7">
                                                                <input type="text" aria-invalid="false"
                                                                    autocomplete="off" id="pesan"
                                                                    placeholder="Pesan" value=""
                                                                    class="MuiInput-input MuiInputBase-input css-mnn31"
                                                                    name="pesan" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="css-seofv1 en27bju6"></p>
                                            </div>
                                            <div class="css-4jany2">
                                                <button width="200%" color="white" type="submit"
                                                    font-size="12px" style="border-color:inherit"
                                                    class="css-w5ujzv e14chlxv0">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END-HUBUNGI KAMI --}}

                {{-- START-HUBUNGI KAMI --}}
                {{-- <div class="page-item-wrap relative">
                <div class="page-item flex-both-center absolute"></div>
                <div class="css-x3hr8h">
                    <div style="border-radius: 8px; border: 0.5px solid #FFFFFF; background-color: #FFFFFF;"
                        class="css-1goyi81">
                        <div class="css-139awdm">
                            <div color="#FFFFFF" style="border-bottom: 1px solid #b2aeae"
                                class="css-18dalow e1cu2qz1" >
                                <picture visibility="visible" class="css-18ikrgg en27bju17">
                                    <source
                                        srcset="{{ asset('styleUser/style/contact.png') }}">
                                    <img visibility="visible" loading="lazy" class="css-1d3ess8 en27bju18">
                                </picture>
                                <h2><a><span class="text-center">HUBUNGI KAMI</span></a></h2>
                            </div>
                        </div>
                        <div display="flex" color="#000000" class="css-a0jtnk en27bju14" open="">
                            <div open="" class="css-2vlrzn en27bju13">
                                <div class="css-bc505b en27bju11">
                                    <div class="css-1x55z">
                                        <div class="css-7uo5h9 egpyr882">
                                            <div class="MuiFormControl-root MuiTextField-root css-1tic" height="48px" style="background-color:white;border:1px solid #AAAAAA" background="" textcolor="">
                                                <div class="MuiInput-root MuiInput-underline MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-2go6t7">
                                                    <input type="text" aria-invalid="false" autocomplete="off" id="outlined-basic" placeholder="Nama" value="" class="MuiInput-input MuiInputBase-input css-mnn31">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-ft88bn en27bju7"></div>
                                <div class="css-bc505b en27bju11">
                                    <div class="css-1x55z">
                                        <div class="css-7uo5h9 egpyr882">
                                            <div class="MuiFormControl-root MuiTextField-root css-1tic" height="48px" style="background-color:white;border:1px solid #AAAAAA" background="" textcolor="">
                                                <div class="MuiInput-root MuiInput-underline MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-2go6t7">
                                                    <input type="text" aria-invalid="false" autocomplete="off" id="outlined-basic" placeholder="Nomor Telepon" value="" class="MuiInput-input MuiInputBase-input css-mnn31">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-bc505b en27bju11">
                                    <div class="css-1x55z">
                                        <div class="css-7uo5h9 egpyr882">
                                            <div class="MuiFormControl-root MuiTextField-root css-1tic" height="48px" style="background-color:white;border:1px solid #4f4d4d" background="" textcolor="">
                                                <div class="MuiInput-root MuiInput-underline MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-2go6t7">
                                                    <input type="text" aria-invalid="false" autocomplete="off" id="outlined-basic" placeholder="Pesan" value="" class="MuiInput-input MuiInputBase-input css-mnn31">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="css-seofv1 en27bju6"></p>
                                </div> 
                                <div class="css-4jany2">
                                    <button width="200%" color="white" type="button" font-size="12px" style="border-color:inherit" class="css-w5ujzv e14chlxv0">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
                {{-- END-HUBUNGI KAMI --}}

                {{-- START - FOOTER --}}
                <div class="mt-48 page-full-wrap relative ">
                    <h3>
                        <h2 class="page-title page-text-color page-text-font mt-16 text-center">
                            &copy;2023 Copyright
                            <a href="https://www.sinarmed.com/">
                                <u>PT Sinarmed Jaya</u>
                            </a>
                        </h2>
                    </h3>
                </div>
                {{-- END - FOOTER --}}

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
    $(document).ready(function() {
        $(".accordion-btn-2").click(function() {
            $(".accordion-content-2").slideToggle(); // Toggle the content
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

    // accordion form hubungi kami
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var clipboard = new ClipboardJS('.share-button');

        clipboard.on('success', function(e) {
            alert('Tautan berhasil disalin ke clipboard: ' + e.text);
            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            alert('Gagal menyalin tautan ke clipboard.');
        });

        // Menghentikan peristiwa click pada elemen dengan kelas 'share-button'
        document.querySelectorAll('.share-button').forEach(function(shareButton) {
            shareButton.addEventListener('click', function(e) {
                e.preventDefault();
            });
        });
    });
</script>

{{-- <script src="{{ asset('styleUser/style/snowfall.js') }}"></script> --}}

</html>
