<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/64578a14ad80445890eb900a/1gvqv6p34';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</head>

<body>
    <div id="wrapper" class="relative text-textColor">
        {{-- navigation --}}
        <x-landing-page.navigation :menus="$menus" />

        {{-- Header --}}
        <x-landing-page.header />

        <main>
            {{-- Search Domain --}}
            <x-landing-page.search-domain />

            {{-- Cloud Hosting --}}
            <x-landing-page.cloud-hosting :clouds="$cloud_hostings" />

            {{-- Our Service --}}
            <x-landing-page.our-service :ourservices="$our_services" />

            {{-- Solution hosting packages --}}
            <x-landing-page.solution-hosting-packages :solutions="$solution_hosting_pkg" />

            {{-- Commitment Qwords --}}
            <x-landing-page.commitment :commitments="$commitments" />

            {{-- Banner --}}
            <x-landing-page.banner />

            {{-- Active Customer --}}
            <x-landing-page.active-customer :customers="$active_customers" />

            {{-- Banner 2 --}}
            <x-landing-page.banner-2 />

            {{-- Testimonial --}}
            <x-landing-page.testimonial :testimonials="$testimonials" />

            {{-- FAQ --}}
            <x-landing-page.FAQ :questions="$questions" />
        </main>

        <x-landing-page.footer />

        <a id="return-to-top" href="javascript:" class="z-50 fixed bottom-[6rem] right-6 bg-primary rounded-full p-3.5">
            <x-icons.arrow-up-outline class="ionicon w-8 h-8 text-white" />
        </a>
    </div>

    <script type='text/javascript'>
        //<![CDATA[

        function fadeArrowUp() {
            if ($(this).scrollTop() >= 100) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200); // Else fade out the arrow
            }
        }

        $(window).ready(function() {
            fadeArrowUp()
        });
        $(window).scroll(function() {
            fadeArrowUp()
        });

        $('#return-to-top').click(function() { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 500);
        });
        //]]>
    </script>
</body>

</html>
