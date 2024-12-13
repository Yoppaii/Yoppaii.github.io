<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahay ng Alumni - ABOUT</title>
    <?php require 'inc/links.php'; ?>
    <style>
        .box {
            border-top-color: var(--teal);
        }
    </style>
</head>

<body class="bg-light">

    <?php require 'inc/header.php'; ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line mt-2 bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus eaque totam minus eligendi dicta quos adipisci deleniti sunt ducimus ad.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 roder-lg-1 order-md-1 order-2">
                <h3 class="mb-3">
                    Lorem ipsum dolor sit.
                </h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Architecto deleniti autem pariatur quas tempore harum.
                    Modi beatae, blanditiis similique provident fuga quis,
                    aliquam dolorem et, consequuntur officiis natus sapiente perferendis.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/abouts/IMG_34396.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box border-dark pop">
                    <img src="images/abouts/IMG_13300.jpg" alt="" width="70px">
                    <h4 class="mt-3">10 ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box border-dark pop">
                    <img src="images/abouts/IMG_13300.jpg" alt="" width="70px">
                    <h4 class="mt-3">100+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box border-dark pop">
                    <img src="images/abouts/IMG_13300.jpg" alt="" width="70px">
                    <h4 class="mt-3">100+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box border-dark pop">
                    <img src="images/abouts/IMG_13300.jpg" alt="" width="70px">
                    <h4 class="mt-3">20+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>


    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/abouts/IMG_34396.jpg" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide">
                    <img src="images/abouts/IMG_87652.png" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide">
                    <img src="images/abouts/IMG_99659.png" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide">
                    <img src="images/abouts/IMG_85600.png" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
                <div class="swiper-slide">
                    <img src="images/abouts/IMG_68263.png" class="w-100">
                    <h5 class="mt-2">Random Name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require 'inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
            grabCursor: true,
            slidesPerView: 3,
            spaceBetween: 40,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>