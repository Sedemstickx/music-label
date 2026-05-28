@props(['title'])
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? config('app.name') }}</title>
        <meta name="description" content="Welcome to our music label!" />

        <meta name="twitter:title" content="Music Label" />
        <meta name="twitter:description" content="Welcome to our music label!" />

        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="Music Record Label Website" />
        <meta property="og:description" content="Welcome to our music label!" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <!--Replace with the current website url-->
        <meta property="og:image" content="" />

        <link
            rel="shortcut icon"
            href="{{ asset('assets/logo.png') }}"
            type="image/x-icon"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
        />

        <!-- <link rel="stylesheet" href="../../tailwind-css/tailwind-runtime.css"> -->
        <link rel="stylesheet" href="{{ asset('css/tailwind-build.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
            integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        
        @livewireStyles
    </head>

    <body
        class="tw-flex tw-min-h-[100vh] tw-w-full tw-flex-col tw-bg-[#ffffff]"
    >

        {{-- Content goes here --}}
        {{ $slot }}
        {{-- End of content --}}

        <footer
            class="tw-flex tw-w-full tw-place-content-around tw-gap-3 tw-bg-[#000] tw-p-[5%] tw-px-[10%] tw-text-white max-lg:tw-flex-col"
        >
            <div
                class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-place-items-center tw-gap-6 max-md:tw-w-full"
            >
                <img
                    src="{{ asset('assets/logo.png') }}"
                    alt="logo"
                    srcset=""
                    class="tw-max-h-[100px] tw-max-w-[100px]"
                />

                <h2 class="tw-text-xl">Brick property</h2>
                <div>
                    unit 17/4 station Street,
                    <br />
                    Fairfield,
                    <br />
                    Sydney,
                    <br />
                    Australia
                </div>
                <div class="tw-mt-3 tw-text-lg tw-font-semibold">Follow us</div>
                <div class="tw-flex tw-gap-4 tw-text-2xl">
                    <a href="" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a
                        href="https://twitter.com/pauls_freeman"
                        aria-label="Twitter"
                    >
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a
                        href="https://twitter.com/pauls_freeman"
                        aria-label="Twitter"
                    >
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
                <h2 class="tw-text-3xl max-md:tw-text-xl">Services</h2>
                <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                    <a href="" class="footer-link">Properties</a>
                    <a href="" class="footer-link">Home worth estimate </a>
                    <a href="" class="footer-link">Buyer's consult</a>
                    <a href="" class="footer-link">Listing</a>
                </div>
            </div>

            <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
                <h2 class="tw-text-3xl max-md:tw-text-xl">Resources</h2>
                <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                    <a href="" class="footer-link">About us</a>
                    <a href="" class="footer-link">FAQ</a>
                    <a href="" class="footer-link">Contact Us</a>
                    <a href="" class="footer-link">Locations</a>
                    <a href="" class="footer-link">Privacy policy</a>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"
        integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"
        integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script src="{{ asset('scripts/utils.js') }}"></script>
    <script src="{{ asset('index.js') }}"></script>
</html>