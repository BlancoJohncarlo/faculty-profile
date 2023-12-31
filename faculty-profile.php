<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    // require 'config';
    include 'header.php';
    include 'sidebar-faculty-member.php';    
    ?>
    </div>

    <div class="content position-relative">
        <!-- start coding here -->
        <?php
            include 'dashboard.php';
        ?>

        <div class="position-absolute tent-div vw-90 ms-3 p-3 rounded" >
                    <div class="mt-2">
                        <button type="button" class="btn btn-primary">Upload</button>
                        <hr class="hr"/>
                    </div>
                
                            <div class="position-absolute top-60 start-50 translate-middle mt-5 p-3 rounded-3" style="background-color: #D3D3D3">
                                    <div class="d-flex justify-content-center">
                                        <a class="d-inline link-opacity-100  mx-1 px-2  nav-link-info" href="#">Personal Information</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info" href="#">Family Background</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info" href="#">Educational Background</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info" href="#">Civil Service Eligibility</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info" href="#">Work Experience</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info" href="#">Voluntary Work</a>
                                        <span class="vertical-line"></span>
                                        <a class="d-inline link-opacity-100 mx-1  px-2  nav-link-info" href="#">L&D Interventions</a>
                                    </div>
                            </div>
                                    <div class="position-absolute  start-10 translate-middle-y z-3 personal-info">
                                            <h4 class="fw-bold">Personal Information </h4>
                                            <div class="container text-center">
                                                <div class="row align-items-start mt-2">
                                                    <div class="col">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Surname:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Middle Name:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR,SR):</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                                            <input type="date" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Place of Birth:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Sex:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Civil Status:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Height(m):</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Firstname:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Weight(kg):</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Blood Type:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        </div>
                                                        <div class="col">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">GSIS ID no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">PHILHEATH ID no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">SSS no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Tin no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Agency Employee no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Citezenship:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Residential Address:</span>
                                                            <input type="text" class="form-control">
                                                            <span class="mx-2"></span>
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Permanent Address:</span>
                                                            <input type="text" class="form-control">
                                                            <span class="mx-2"></span>
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Zipcode:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Telephone:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">E-mail Address:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Mobile no:</span>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        </div>
                                                                    <div class="mt-2 ">
                                                                        <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                                        <hr class="hr"/>
                                                                    </div>           
                                                    </div>  
                                             </div>

                                        </div> 
                                    </div>
                                    <div class="position-absolute start-10 translate-middle-y z-2 family-background">
                                                <h4 class="fw-bold">Family Background</h4>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Surname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Firstname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Spouse Middle Name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Occupation:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Employer/Business Name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Business Address:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Telephone no:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of Children:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Birth:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Surname:</span>
                                                                <input type="tel" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Firstname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Father's Middle name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name Extension(JR.,SR):</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Maiden Name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Surname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Firstname:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Mother's Middle name:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                        <hr class="hr"/>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="position-absolute start-10 translate-middle-y z-2 educ-background">
                                                <h4 class="fw-bold">Educational Background</h4>
                                                <h5 class="fw-bold">Level</h5>
                                                <h5 class="fw-normal">Elementary</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">Secondary</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">Vocaltional/Trade Course</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">College</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="fw-normal">Graduate Studies</h5>
                                                <div class="container text-center px-5">
                                                        
                                                    <div class="row align-items-start mt-2">
                                                        
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name of School:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Basic Educational/Degree/Course:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Period Attendance From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Highest Level/Unit Earned:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Year Graduated:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Scholarship/Academic Honors Recieved:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                        <hr class="hr"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-absolute start-10 translate-middle-y z-2 civil-service">
                                                <h4 class="fw-bold">Civil Service Eligibility </h4>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Career Service:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Rating:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Examination/Conferment:</span>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Place of Examination/Conferment:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">License:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Number:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Date of Validity:</span>
                                                                <input type="date" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                                 <hr class="hr"/>
                                                              </div>
                                                </div>
                                            </div>
                                            <div class="position-absolute start-10 translate-middle-y z-2 work-exp">
                                                <h4 class="fw-bold">Work Experience  </h4>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Inclusive Dates from:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Department/Agency/Office/Company:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Monthly Salary:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Salary/Job/Pay Grade (if applicable)
& Step  (Format "00-0")/ Increment:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Status of Appointment:</span>
                                                                <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Gov't Service (Y/N):</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                                 <hr class="hr"/>
                                                              </div>
                                                </div>
                                            </div>
                                            
                                            <div class="position-absolute start-10 translate-middle-y z-2 voluntary-work">
                                                <h5 class="fw-bold">Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s  </h5>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name and Address of Organization:</span>
                                                                <input type="text" class="form-control">
                                                                
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Inclusive Dates From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Position/ Nature of Work:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                                 <hr class="hr"/>
                                                              </div>
                                                </div>
                                            </div>

                                            <div class="position-absolute start-10 translate-middle-y z-2 voluntary-work">
                                                <h5 class="fw-bold">Voluntary Work or Involvement in Civic/Non-Government/People/Voluntary Organization/s  </h5>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Name and Address of Organization:</span>
                                                                <input type="text" class="form-control">
                                                                
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Inclusive Dates From:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Position/ Nature of Work:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                                 <hr class="hr"/>
                                                              </div>
                                                </div>
                                            </div>
                                            <div class="position-absolute start-10 translate-middle-y z-2 train-attend">
                                                <h5 class="fw-bold">Learning and Development (L&D) Interventions/Training Programs Attended</h5>
                                                <div class="container text-center px-5">
                                                    <div class="row align-items-start mt-2">
                                                        <div class="col">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Title of Learning and Development Interventions/Training Programs:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Inclusive Dates of Attendance from:</span>
                                                                <input type="text" class="form-control">
                                                                <span class="mx-2"></span>
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Number of Hours:</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Type of LD( Managerial/ Supervisory/Technical/etc):</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">Conducted/Sponsored by :</span>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                            <div class="mt-2">
                                                                <button type="button" class="btn btn-success px-3 edit-btn-1">Edit</button>
                                                                 <hr class="hr"/>
                                                              </div>
                                                </div>
                                            </div>
                                            
                                        
            </div>
    </div>

</body>
</html>
