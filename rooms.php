<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahay ng Alumni - FACILITIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require 'inc/links.php'; ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.05);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require 'inc/header.php'; ?>


    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line mt-2 bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus eaque totam minus eligendi dicta quos adipisci deleniti sunt ducimus ad.
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label" style="font-weight: 500">Check-in</label>
                                <input type="date" class="form-control shadown-none">
                                <label class="form-label" style="font-weight: 500">Check-out</label>
                                <input type="date" class="form-control shadown-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadown-none me-1">
                                    <label class="form-check-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadown-none me-1">
                                    <label class="form-check-label" for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadown-none me-1">
                                    <label class="form-check-label" for="f3">Facility three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="mb-2">
                                    <label class="form-label" for="g1">Capacity</label>
                                    <input type="number" id="g1" class="form-input shadown-none me-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center text-center">
                        <div class="col-md-5 d-flex justify-content-center align-items-center mb-3 mb-md-0">
                            <img src="https://via.placeholder.com/250" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0 text-start">
                            <h5 class="mb-3">Room Name</h5>
                            <div class="features mb-3">
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

                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Wi-fi
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
                            <div class="capacity">
                                <h6 class="mb-1">Capacity</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    4-6 Person
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-3 text-align-center text-center">
                            <h6 class="mb-3">₱600 / night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none"> More Details</a>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>




    <?php require 'inc/footer.php'; ?>
    

</body>

</html>