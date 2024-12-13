<?php
require 'inc/essentials.php';
adminLogin();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require 'inc/links.php'; ?>
    <style>
        /* Base font size */
        body {
            font-size: 16px;
            /* Default font size */
        }

        /* Adjust font size for smaller screens */
        @media (max-width: 768px) {
            body {
                font-size: 14px;
                /* Smaller font size for tablets and smaller devices */
            }

            .form-label {
                font-size: 12px;
                /* Smaller font size for labels */
            }
        }

        /* Adjust font size for very small screens */
        @media (max-width: 576px) {
            body {
                font-size: 12px;
                /* Even smaller font size for mobile devices */
            }
        }

        /* Adjust font size for larger screens */
        @media (min-width: 992px) {
            body {
                font-size: 18px;
                /* Larger font size for desktops */
            }
        }
    </style>

</head>

<body class="bg-light">

    <?php require 'inc/header.php'; ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- Tracer Section -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Tracer</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#tracer_s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title">
                        <p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about">
                        <p>
                    </div>
                </div>

                <div class="modal fade" id="hero_s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="hero_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Hero Images</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="hero_picture" id="hero_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control shadown-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="hero_picture.value='' " class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="tracer_s" tabindex="-1" aria-labelledby="wizardModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form method="POST">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="wizardModalLabel">Alumni Tracer Questionnaire</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Step 1 -->
                                    <div class="wizard-step" id="step1">
                                        <h6>Step 1 of 7</h6>
                                        <h5 class="fw-bold">GENERAL INFORMATION</h5>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                            <input type="text" class="form-control" name="alumni_name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Permanent Address</label>
                                            <input type="text" class="form-control" name="permanent_address" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">E-mail Address</label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Telephone or Contact Number(s)</label>
                                            <input type="text" class="form-control" name="contact_number" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Mobile Number</label>
                                            <input type="text" class="form-control" name="mobile_number" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Civil Status</label><br>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <input type="radio" name="civil_status" value="Single"> Single<br>
                                                    <input type="radio" name="civil_status" value="Married"> Married<br>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <input type="radio" name="civil_status" value="Separated"> Separated<br>
                                                    <input type="radio" name="civil_status" value="Single Parent"> Single Parent<br>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <input type="radio" name="civil_status" value="Widow or Widower"> Widow or Widower<br>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Sex</label><br>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <input type="radio" name="sex" value="Male"> Male<br>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <input type="radio" name="sex" value="Female"> Female<br>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Birthday</label>
                                            <input type="date" class="form-control" name="birthday" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Course</label>
                                            <select class="form-select" name="course" required>
                                                <option value="" disabled selected>Select your course</option>
                                                <option value="Bachelor of Science in Agriculture">Bachelor of Science in Agriculture</option>
                                                <option value="Bachelor of Science in Animal Science">Bachelor of Science in Animal Science</option>
                                                <option value="Bachelor of Science in Forestry">Bachelor of Science in Forestry</option>
                                                <option value="Bachelor of Science in Agricultural Engineering">Bachelor of Science in Agricultural Engineering</option>
                                                <option value="Bachelor of Science in Food Technology">Bachelor of Science in Food Technology</option>
                                                <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                                <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                                <option value="Bachelor of Science in Business Administration">Bachelor of Science in Business Administration</option>
                                                <option value="Bachelor of Science in Hospitality Management">Bachelor of Science in Hospitality Management</option>
                                                <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
                                                <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
                                                <option value="Bachelor of Science in Electrical Engineering">Bachelor of Science in Electrical Engineering</option>
                                                <option value="Bachelor of Science in Mechanical Engineering">Bachelor of Science in Mechanical Engineering</option>
                                                <option value="Bachelor of Science in Electronics Engineering">Bachelor of Science in Electronics Engineering</option>
                                                <option value="Bachelor of Science in Environmental Science">Bachelor of Science in Environmental Science</option>
                                                <option value="Bachelor of Science in Criminology">Bachelor of Science in Criminology</option>
                                                <option value="Bachelor of Science in Psychology">Bachelor of Science in Psychology</option>
                                                <option value="Bachelor of Science in Social Work">Bachelor of Science in Social Work</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Campus</label>
                                            <select class="form-select" name="campus" required>
                                                <option value="" disabled selected>Select your campus</option>
                                                <option value="Main Campus">Main Campus</option>
                                                <option value="Cavite City Campus">Cavite City Campus</option>
                                                <option value="Bacoor Campus">Bacoor Campus</option>
                                                <option value="Gen. Mariano Alvarez Campus">Gen. Mariano Alvarez Campus</option>
                                                <option value="Indang Campus">Indang Campus</option>
                                                <option value="Tanza Campus">Tanza Campus</option>
                                                <option value="Naic Campus">Naic Campus</option>
                                                <option value="Silang Campus">Silang Campus</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Location of Residence</label><br>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <input type="radio" name="location_of_residence" value="City"> City<br>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <input type="radio" name="location_of_residence" value="Municipality"> Municipality<br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 2 -->
                                    <div class="wizard-step d-none" id="step2">
                                        <h6>Step 2 of 7</h6>
                                        <h5 class="fw-bold">EDUCATIONAL BACKGROUND</h5>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">12. Educational Attainment (Baccalaureate Degree Only)</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Degree(s) & Specialization(s)</label>
                                                    <input type="text" class="form-control" name="degree_specialization" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">College or University</label>
                                                    <input type="text" class="form-control" name="college_university" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Year Graduated</label>
                                                    <input type="text" class="form-control" name="year_graduated" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Honor(s) or Award(s) Received</label>
                                                    <input type="text" class="form-control" name="honors_or_awards" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">13. Professional Examination(s) Passed</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Name of Examination</label>
                                                    <input type="text" class="form-control" name="name_of_examination" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Date Taken</label>
                                                    <input type="date" class="form-control" name="date_taken" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Rating</label>
                                                    <input type="text" class="form-control" name="rating" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">14. What is your highest level of education completed?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="education_level" id="undergraduate" value="Undergraduate" required>
                                                <label class="form-check-label" for="undergraduate">Undergraduate/AB/BS</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="education_level" id="graduate" value="Graduate">
                                                <label class="form-check-label" for="graduate">Graduate/MS/MA/PhD</label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Reason(s) for taking the course(s) or pursuing degree(s). You may check (/) more than one answer.</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="High grades in the course or subject area(s) related to the course">
                                                        <label class="form-check-label">High grades in the course or subject area(s) related to the course</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Good grades in high school">
                                                        <label class="form-check-label">Good grades in high school</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Influence of parents or relatives">
                                                        <label class="form-check-label">Influence of parents or relatives</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Peer influence">
                                                        <label class="form-check-label">Peer influence</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Inspired by a role model">
                                                        <label class="form-check-label">Inspired by a role model</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Strong passion for the profession">
                                                        <label class="form-check-label">Strong passion for the profession</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Prospect for immediate employment">
                                                        <label class="form-check-label">Prospect for immediate employment</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Status or prestige of the profession">
                                                        <label class="form-check-label">Status or prestige of the profession</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Availability of course offering in chosen institution">
                                                        <label class="form-check-label">Availability of course offering in chosen institution</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Prospect of career advancement">
                                                        <label class="form-check-label">Prospect of career advancement</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Affordable for the family">
                                                        <label class="form-check-label">Affordable for the family</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_for_pursuing_degrees" value="Prospect of attractive compensation">
                                                        <label class="form-check-label">Prospect of attractive compensation</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 3 -->
                                    <div class="wizard-step d-none" id="step3">
                                        <h6>Step 3 of 7</h6>

                                        <h5 class="fw-bold">C. TRAINING(S)/ADVANCE STUDIES ATTENDED AFTER COLLEGE</h5>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">15a. Please list down all professional or work-related training program(s) including advance studies you have attended after college. You may use extra sheet if needed.</label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Title of Training or Advnace Study</label>
                                            <input type="text" class="form-control" name="title_of_training">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Duration and Credits Earned</label>
                                            <input type="text" class="form-control" name="duration_and_credits">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Name of Training Institution/College/University</label>
                                            <input type="text" class="form-control" name="name_of_training">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">15b. What made you pursue advance studies?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pursue_advance" value="For promotion" id="promotion">
                                                <label class="form-check-label" for="promotion">For promotion</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pursue_advance" value="For professional development" id="professional_development">
                                                <label class="form-check-label" for="professional_development">For professional development</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="pursue_advance" value="Others" id="others">
                                                <label class="form-check-label" for="others">Others, please specify:</label>
                                                <input type="text" class="form-control mt-1" name="other_pursue_advance" placeholder="Specify here">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 4 -->
                                    <div class="wizard-step d-none" id="step4">
                                        <h6>Step 4 of 7</h6>
                                        <h5 class="fw-bold">D. EMPLOYMENT DATA</h5>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">16. Are you presently employed?</label><br>
                                            <input type="radio" name="employment_status" value="Yes" onclick="toggleEmploymentQuestions(true)"> Yes<br>
                                            <input type="radio" name="employment_status" value="No" onclick="toggleEmploymentQuestions(false)"> No<br>
                                            <input type="radio" name="employment_status" value="Never Employed" onclick="toggleEmploymentQuestions(false)"> Never Employed<br>
                                        </div>

                                        <div id="employmentQuestions" class="d-none">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">17. Please state reason(s) why you are not yet employed. You may check (✔) more than one answer.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="not_employed_reasons" value="Advance or further study">
                                                    <label class="form-check-label">Advance or further study</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="not_employed_reasons" value="Family concern and decided not to find a job">
                                                    <label class="form-check-label">Family concern and decided not to find a job</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="not_employed_reasons" value="Health-related reason(s)">
                                                    <label class="form-check-label">Health-related reason(s)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="not_employed_reasons" value="Lack of work experience">
                                                    <label class="form-check-label">Lack of work experience</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="not_employed_reasons" value="No job opportunity">
                                                    <label class="form-check-label">No job opportunity</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="not_employed_reasons" value="Did not look for a job">
                                                    <label class="form-check-label">Did not look for a job</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="not_employed_reasons" value="other_not_employed_reasons">
                                                    <label class="form-check-label">Other reason(s), please specify:</label>
                                                    <input type="text" class="form-control mt-1" name="other_not_employed_reasons" placeholder="Specify here">
                                                </div>
                                            </div>
                                        </div>

                                        <div id="currentEmploymentQuestions" class="d-none">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">18. Present Employment Status</label><br>
                                                <input type="radio" name="present_employment_status" value="Regular or Permanent"> Regular or Permanent<br>
                                                <input type="radio" name="present_employment_status" value="Temporary"> Temporary<br>
                                                <input type="radio" name="present_employment_status" value="Casual"> Casual<br>
                                                <input type="radio" name="present_employment_status" value="Contractual"> Contractual<br>
                                                <input type="radio" name="present_employment_status" value="Self-employed"> Self-employed<br>
                                                <div id="selfEmployedSkills" class="d-none">
                                                    <label class="form-label fw-bold">If self-employed, what skills acquired in college were you able to apply in your work?</label>
                                                    <input type="text" class="form-control" name="present_employment_status">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label fw-bold">19. Present occupation (Ex. Grade School Teacher, Electrical Engineer, Self-employed)</label>
                                                <input type="text" class="form-control" name="present_occupation" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">20. Major line of business of the company you are presently employed in. Check one only.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Agriculture, Hunting and Forestry">
                                                    <label class="form-check-label">Agriculture, Hunting and Forestry</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Fishing">
                                                    <label class="form-check-label">Fishing</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Mining and Quarrying">
                                                    <label class="form-check-label">Mining and Quarrying</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Manufacturing">
                                                    <label class="form-check-label">Manufacturing</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Electricity, Gas and Water Supply">
                                                    <label class="form-check-label">Electricity, Gas and Water Supply</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Construction">
                                                    <label class="form-check-label">Construction</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Wholesale and Retail Trade">
                                                    <label class="form-check-label">Wholesale and Retail Trade</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Hotels and Restaurants">
                                                    <label class="form-check-label">Hotels and Restaurants</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Transport Storage and Communication">
                                                    <label class="form-check-label">Transport Storage and Communication</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Financial Intermediation">
                                                    <label class="form-check-label">Financial Intermediation</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Real Estate, Renting and Business Activities">
                                                    <label class="form-check-label">Real Estate, Renting and Business Activities</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Public Administration and Defense">
                                                    <label class="form-check-label">Public Administration and Defense</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Education">
                                                    <label class="form-check-label">Education</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Health and Social Work">
                                                    <label class="form-check-label">Health and Social Work</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Other Community, Social and Personal Service Activities">
                                                    <label class="form-check-label">Other Community, Social and Personal Service Activities</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Private Households with Employed Persons">
                                                    <label class="form-check-label">Private Households with Employed Persons</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="business_line" value="Extra-territorial Organizations and Bodies">
                                                    <label class="form-check-label">Extra-territorial Organizations and Bodies</label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label fw-bold">21. Place of work</label><br>
                                                <input type="radio" name="place_of_work" value="Local"> Local<br>
                                                <input type="radio" name="place_of_work" value="Abroad"> Abroad<br>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 5 -->
                                    <div class="wizard-step d-none" id="step5">
                                        <h6>Step 5 of 7</h6>
                                        <h5 class="fw-bold">E. JOB EXPERIENCE AND REASONS</h5>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">22. Is this your first job after college?</label><br>
                                            <input type="radio" name="first_job_after_college" value="Yes" onclick="toggleFirstJobQuestions(true)"> Yes<br>
                                            <input type="radio" name="first_job_after_college" value="No" onclick="toggleFirstJobQuestions(false)"> No<br>
                                        </div>

                                        <div id="jobExperienceQuestions" class="d-none">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">23. What are your reason(s) for staying on the job? You may check (✔) more than one answer.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Salaries and benefits">
                                                    <label class="form-check-label">Salaries and benefits</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Career challenge">
                                                    <label class="form-check-label">Career challenge</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Related to special skill">
                                                    <label class="form-check-label">Related to special skill</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Related to course or program of study">
                                                    <label class="form-check-label">Related to course or program of study</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Proximity to residence">
                                                    <label class="form-check-label">Proximity to residence</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Peer influence">
                                                    <label class="form-check-label">Peer influence</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Family influence">
                                                    <label class="form-check-label">Family influence</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="reasons_staying" value="Other reason(s)">
                                                    <label class="form-check-label">Other reason(s), please specify:</label>
                                                    <input type="text" class="form-control mt-1" name="other_reason_staying" placeholder="Specify here">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label fw-bold">24. Is your first job related to the course you took up in college?</label><br>
                                                <input type="radio" name="first_job_related" value="Yes" onclick="toggleJobRelationQuestions(true)"> Yes<br>
                                                <input type="radio" name="first_job_related" value="No" onclick="toggleJobRelationQuestions(false)"> No<br>
                                            </div>

                                            <div id="jobRelationQuestions" class="d-none">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">25. What were your reasons for accepting the job? You may check (✔) more than one answer.</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_accepting" value="Salaries & benefits">
                                                        <label class="form-check-label">Salaries & benefits</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_accepting" value="Career challenge">
                                                        <label class="form-check-label">Career challenge</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_accepting" value="Related to special skills">
                                                        <label class="form-check-label">Related to special skills</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_accepting" value="Proximity to residence">
                                                        <label class="form-check-label">Proximity to residence</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="reasons_accepting" value="Other reason(s)">
                                                        <label class="form-check-label">Other reason(s), please specify:</label>
                                                        <input type="text" class="form-control mt-1" name="other_reason_accepting" placeholder="Specify here">
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <!-- Step 6 -->
                                    <div class="wizard-step d-none" id="step6">
                                        <h6>Step 6 of 7</h6>
                                        <h5 class="fw-bold">F. JOB DURATION AND FINDING</h5>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">26. What were your reason(s) for changing job? You may check (✔) more than one answer.</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="reasons_changing" value="Salaries & benefits">
                                                <label class="form-check-label">Salaries & benefits</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="reasons_changing" value="Career challenge">
                                                <label class="form-check-label">Career challenge</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="reasons_changing" value="Related to special skills">
                                                <label class="form-check-label">Related to special skills</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="reasons_changing" value="Proximity to residence">
                                                <label class="form-check-label">Proximity to residence</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="reasons_changing" value="Other reason(s)">
                                                <label class="form-check-label">Other reason(s), please specify:</label>
                                                <input type="text" class="form-control mt-1" name="other_reason_changing" placeholder="Specify here">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">27. How long did you stay in your first job?</label>
                                            <select class="form-select" name="duration_first_job" required>
                                                <option value="" disabled>Select duration</option>
                                                <option value="Less than a month">Less than a month</option>
                                                <option value="1 to 6 months">1 to 6 months</option>
                                                <option value="7 to 11 months">7 to 11 months</option>
                                                <option value="1 year to less than 2 years">1 year to less than 2 years</option>
                                                <option value="2 years to less than 3 years">2 years to less than 3 years</option>
                                                <option value="3 years to less than 4 years">3 years to less than 4 years</option>
                                                <option value="More than 5 years">More than 5 years</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">28. How did you find your first job?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="Response to an advertisement">
                                                <label class="form-check-label">Response to an advertisement</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="As walk-in applicant">
                                                <label class="form-check-label">As walk-in applicant</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="Recommended by someone">
                                                <label class="form-check-label">Recommended by someone</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="Information from friends">
                                                <label class="form-check-label">Information from friends</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="Arranged by school's job placement officer" id="jobPlacementOfficer">
                                                <label class="form-check-label" for="jobPlacementOfficer">Arranged by school's job placement officer</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="Family business" id="familyBusiness">
                                                <label class="form-check-label" for="familyBusiness">Family business</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="Job Fair or Public Employment Service Office (PESO)" id="jobFair">
                                                <label class="form-check-label" for="jobFair">Job Fair or Public Employment Service Office (PESO)</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="find_first_job" value="Others">
                                                <label class="form-check-label">Others, please specify:</label>
                                                <input type="text" class="form-control mt-1" name="other_find_first_job" placeholder="Specify here">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">29. How long did it take you to land your first job?</label>
                                            <select class="form-select" name="time_to_land_first_job" required>
                                                <option value="" disabled>Select duration</option>
                                                <option value="Less than a month">Less than a month</option>
                                                <option value="1 to 6 months">1 to 6 months</option>
                                                <option value="7 to 11 months">7 to 11 months</option>
                                                <option value="1 year to less than 2 years">1 year to less than 2 years</option>
                                                <option value="2 years to less than 3 years">2 years to less than 3 years</option>
                                                <option value="3 years to less than 4 years">3 years to less than 4 years</option>
                                                <option value="More than 5 years">More than 5 years</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">30. Job Level Position</label>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">30.1. First Job</label>
                                                <select class="form-select" name="job_level_first_job" required>
                                                    <option value="" disabled>Select job level</option>
                                                    <option value="Rank or Clerical">Rank or Clerical</option>
                                                    <option value="Professional, Technical or Supervisory">Professional, Technical or Supervisory</option>
                                                    <option value="Managerial or Executive">Managerial or Executive</option>
                                                    <option value="Self-employed">Self-employed</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">30.2. Current or Present Job</label>
                                                <select class="form-select" name="job_level_current_job" required>
                                                    <option value="" disabled>Select job level</option>
                                                    <option value="Rank or Clerical">Rank or Clerical</option>
                                                    <option value="Professional, Technical or Supervisory">Professional, Technical or Supervisory</option>
                                                    <option value="Managerial or Executive">Managerial or Executive</option>
                                                    <option value="Self-employed">Self-employed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">31. What is your initial gross monthly earning in your first job after college?</label>
                                            <select class="form-select" name="initial_gross_monthly_earning" required>
                                                <option value="" disabled>Select earning range</option>
                                                <option value="Below P5,000.00">Below P5,000.00</option>
                                                <option value="P5,000.00 to less than P10,000.00">P5,000.00 to less than P10,000.00</option>
                                                <option value="P10,000.00 to less than P15,000.00">P10,000.00 to less than P15,000.00</option>
                                                <option value="P15,000.00 to less than P20,000.00">P15,000.00 to less than P20,000.00</option>
                                                <option value="P20,000.00 to less than P25,000.00">P20,000.00 to less than P25,000.00</option>
                                                <option value="P25,000.00 and above">P25,000.00 and above</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">32. Was the curriculum you had in college relevant to your first job?</label><br>
                                            <input type="radio" name="curriculum_relevance" value="Yes" onclick="toggleCurriculumQuestions(true)"> Yes<br>
                                            <input type="radio" name="curriculum_relevance" value="No" onclick="toggleCurriculumQuestions(false)"> No<br>
                                        </div>

                                        <div id="curriculumQuestions" class="d-none">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">33. If YES, what competencies learned in college did you find very useful in your first job? You may check (✔) more than one answer.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="useful_competencies" value="Communication skills">
                                                    <label class="form-check-label">Communication skills</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="useful_competencies" value="Human Relations skills">
                                                    <label class="form-check-label">Human Relations skills</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="useful_competencies" value="Entrepreneurial skills">
                                                    <label class="form-check-label">Entrepreneurial skills</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="useful_competencies" value="Information Technology skills">
                                                    <label class="form-check-label">Information Technology skills</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="useful_competencies" value="Problem-solving skills">
                                                    <label class="form-check-label">Problem-solving skills</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="useful_competencies" value="Critical Thinking skills">
                                                    <label class="form-check-label">Critical Thinking skills</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="useful_competencies" value="Other skills">
                                                    <label class="form-check-label">Other skills, please specify:</label>
                                                    <input type="text" class="form-control mt-1" name="other_useful_competencies" placeholder="Specify here">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">34. List down suggestions to further improve your course curriculum:</label>
                                            <textarea class="form-control" name="curriculum_suggestions" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <!-- Step 7 -->
                                    <div class="wizard-step d-none" id="step7">
                                        <h6>Step 7 of 7</h6>
                                        <h5 class="fw-bold">Thank You!</h5>
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Thank you for taking time out to fill out this questionnaire. Please return this GTS to your institution.</label>
                                            <p>Being one of the alumni of your institution, may we request you to list down the names of other college graduates (AY 2000-2001 to AY 2003-2004) from your institution including their addresses and contact numbers. Their participation will also be needed to make this study more meaningful and useful.</p>

                                            <label class="form-label fw-bold">Name</label>
                                            <input type="text" class="form-control" name="graduate_name" required>

                                            <label class="form-label fw-bold">Full Address</label>
                                            <input type="text" class="form-control" name="graduate_address" required>

                                            <label class="form-label fw-bold">Contact Number</label>
                                            <input type="text" class="form-control" name="graduate_contact" required>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="prevBtn" onclick="prevStep()">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextStep()">Next</button>
                                        <button type="submit" class="btn btn-success d-none" id="submitBtn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>

    <?php require 'inc/scripts.php'; ?>
    <script src="page-scripts/settings.js"></script>

    <script>
        // // Function to save form data to local storage
        // function saveFormData() {
        //     const formData = {
        //         name: document.querySelector('input[name="name"]').value,
        //         permanent_address: document.querySelector('input[name="permanent_address"]').value,
        //         email: document.querySelector('input[name="email"]').value,
        //         contact_number: document.querySelector('input[name="contact_number"]').value,
        //         mobile_number: document.querySelector('input[name="mobile_number"]').value,
        //         civil_status: document.querySelector('input[name="civil_status"]:checked')?.value,
        //         sex: document.querySelector('input[name="sex"]:checked')?.value,
        //         birthday: document.querySelector('input[name="birthday"]').value,
        //         course: document.querySelector('select[name="course"]').value,
        //         campus: document.querySelector('select[name="campus"]').value,
        //         location_of_residence: document.querySelector('input[name="location_of_residence"]:checked')?.value,
        //     };
        //     localStorage.setItem('tracerFormData', JSON.stringify(formData));
        // }

        // // Save form data on input change
        // document.querySelectorAll('input, select, textarea').forEach(input => {
        //     input.addEventListener('input', saveFormData);
        // });

        // // Function to load form data from local storage
        // function loadFormData() {
        //     const formData = JSON.parse(localStorage.getItem('tracerFormData'));
        //     if (formData) {
        //         document.querySelector('input[name="name"]').value = formData.name || '';
        //         document.querySelector('input[name="permanent_address"]').value = formData.permanent_address || '';
        //         document.querySelector('input[name="email"]').value = formData.email || '';
        //         document.querySelector('input[name="contact_number"]').value = formData.contact_number || '';
        //         document.querySelector('input[name="mobile_number"]').value = formData.mobile_number || '';
        //         if (formData.civil_status) {
        //             document.querySelector(`input[name="civil_status"][value="${formData.civil_status}"]`).checked = true;
        //         }
        //         if (formData.sex) {
        //             document.querySelector(`input[name="sex"][value="${formData.sex}"]`).checked = true;
        //         }
        //         document.querySelector('input[name="birthday"]').value = formData.birthday || '';
        //         document.querySelector('select[name="course"]').value = formData.course || '';
        //         document.querySelector('select[name="campus"]').value = formData.campus || '';
        //         if (formData.location_of_residence) {
        //             document.querySelector(`input[name="location_of_residence"][value="${formData.location_of_residence}"]`).checked = true;
        //         }
        //     }
        // }
        // // Load form data when the page loads
        // document.addEventListener('DOMContentLoaded', loadFormData);


        function validateStep(step) {
            let isValid = true;

            // Get all inputs in the current step
            const inputs = document.querySelectorAll(`#step${step} input[required], #step${step} select[required], #step${step} textarea[required]`);

            inputs.forEach(input => {
                if (input.type === 'radio' || input.type === 'checkbox') {
                    // For radio and checkbox, check if at least one is selected
                    const name = input.name;
                    const checked = document.querySelectorAll(`input[name="${name}"]:checked`);
                    if (checked.length === 0) {
                        isValid = false;
                        input.closest('.mb-3').classList.add('is-invalid'); // Add invalid class for styling
                    } else {
                        input.closest('.mb-3').classList.remove('is-invalid'); // Remove invalid class if valid
                    }
                } else {
                    // For other inputs, check if they are filled
                    if (!input.value) {
                        isValid = false;
                        input.classList.add('is-invalid'); // Add invalid class for styling
                    } else {
                        input.classList.remove('is-invalid'); // Remove invalid class if valid
                    }
                }
            });

            return isValid;
        }
        // Handle the steps
        let currentStep = 1;
        const totalSteps = 7;

        function showStep(step) {
            const steps = document.querySelectorAll('.wizard-step');
            steps.forEach((s, index) => {
                s.classList.toggle('d-none', index + 1 !== step);
            });
        }

        function nextStep() {
            // Validate the current step before proceeding
            if (validateStep(currentStep)) {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                }
            } else {
                alert("Please fill out all required fields before proceeding.");
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }
        // Initialize the first step
        showStep(currentStep);



        // Step 4
        function toggleEmploymentQuestions(isEmployed) {
            const employmentQuestions = document.getElementById('employmentQuestions');
            const currentEmploymentQuestions = document.getElementById('currentEmploymentQuestions');

            if (isEmployed) {
                employmentQuestions.classList.add('d-none');
                currentEmploymentQuestions.classList.remove('d-none');
            } else {
                employmentQuestions.classList.remove('d-none');
                currentEmploymentQuestions.classList.add('d-none');
            }
        }

        function toggleSelfEmployedSkills(isSelfEmployed) {
            const selfEmployedSkills = document.getElementById('selfEmployedSkills');
            if (isSelfEmployed) {
                selfEmployedSkills.classList.remove('d-none');
            } else {
                selfEmployedSkills.classList.add('d-none');
            }
        }

        // Step 5
        function toggleFirstJobQuestions(isFirstJob) {
            const jobExperienceQuestions = document.getElementById('jobExperienceQuestions');
            if (isFirstJob) {
                jobExperienceQuestions.classList.remove('d-none');
            } else {
                jobExperienceQuestions.classList.add('d-none');
                // Automatically skip to question 26 and 27
                currentStep = 6; // Set current step to 6
                showStep(currentStep); // Show step 6
            }
        }

        function toggleJobRelationQuestions(isRelated) {
            const jobRelationQuestions = document.getElementById('jobRelationQuestions');
            if (isRelated) {
                jobRelationQuestions.classList.remove('d-none');
            } else {
                jobRelationQuestions.classList.add('d-none');
            }
        }

        // Step 6
        function toggleCurriculumQuestions(isRelevant) {
            const curriculumQuestions = document.getElementById('curriculumQuestions');
            if (isRelevant) {
                curriculumQuestions.classList.remove('d-none');
            } else {
                curriculumQuestions.classList.add('d-none');
            }
        }
    </script>

</body>

</html>