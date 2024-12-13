<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahay ng Alumni</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25;
                padding: 0 35px;
            }

        }
    </style>


</head>

<body>

    <?php require('inc/header.php'); ?>

    <!-- Index Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-index">
            <div class="swiper-wrapper">
                <?php
                $res = selectAll('hero_details');
                while ($row = mysqli_fetch_assoc($res)) {
                    $path = HERO_IMG_PATH;
                    echo <<<data
                    <div class="swiper-slide">
                        <img src="$path$row[picture]" class="w-100 d-block">
                    </div>
            
                    data;
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Check Availability Form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5>Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-in</label>
                            <input type="date" class="form-control shadown-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-in</label>
                            <input type="date" class="form-control shadown-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Adult</label>
                            <select class="form-select shadown-none">
                                <option selected>Open this select </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Children</label>
                            <select class="form-select shadown-none">
                                <option selected>Open this select </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadown-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/" class="card-img-top">

                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">Price</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Sofa
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Air Conditioner
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Shower Heater
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <!-- Display 5 stars -->
                            <span>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More Details</a>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/" class="card-img-top">

                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">Price</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Sofa
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Air Conditioner
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Shower Heater
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <!-- Display 5 stars -->
                            <span>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More Details</a>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/" class="card-img-top">

                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">Price</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Bed
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Sofa
                            </span>
                        </div>

                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Air Conditioner
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Shower Heater
                            </span>
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <!-- Display 5 stars -->
                            <span>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More Details</a>

                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>

            </div>
        </div>
    </div>


    <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>

            </div>
        </div>
    </div>


    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda voluptatibus dolor
                        amet
                        nulla atque culpa ex? Error, nihil adipisci!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        </span>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda voluptatibus dolor
                        amet
                        nulla atque culpa ex? Error, nihil adipisci!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        </span>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda voluptatibus dolor
                        amet
                        nulla atque culpa ex? Error, nihil adipisci!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        </span>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda voluptatibus dolor
                        amet
                        nulla atque culpa ex? Error, nihil adipisci!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        </span>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="" width="30px">
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda voluptatibus dolor
                        amet
                        nulla atque culpa ex? Error, nihil adipisci!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        </span>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- Contact Us -->

    <?php
    $contact_q = "SELECT * FROM contact_settings WHERE sr_no=?";
    $values = [1];
    $result = select($contact_q, $values, 'i');
    $contact_r = mysqli_fetch_assoc($result);
    ?>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded"
                    src="<?php echo $contact_r['iframe'] ?>"
                    height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +63 9354390173" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +63 <?php echo $contact_r['phone_number1'] ?>
                    </a>
                    <br>
                    <a href="tel: +63 9354390173" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +63 <?php echo $contact_r['phone_number2'] ?>
                    </a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="<?php echo $contact_r['facebook'] ?>" target="_blank" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['twitter'] ?>" target="_blank" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="<?php echo $contact_r['instagram'] ?>" target="_blank" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

    <!-- SwiperJS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper Index -->
    <script>
        var swiper = new Swiper(".swiper-index", {
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!-- Initialize Swiper Testimonials -->
    <script>
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
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