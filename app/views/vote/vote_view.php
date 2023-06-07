<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sample</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/vote/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/vote/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/vote/assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/vote/assets/css/Navbar-Right-Links-Dark-icons.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/vote/assets/css/Projects-Grid-Horizontal-images.css">
</head>

<body>
    <!-- Start: Features Cards -->
    <div class="container py-4 py-xl-5 pt-0">
        <div class="row mb-1 mt-0">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="fs-1 fw-bold text-primary">Rovote</h2>
                <p>Voting System for Mindoro State University Calapan City Campus</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-start">
                <div>
                    <form action="<?php echo BASE_URL; ?>vote/ballot/<?php echo $studid; ?>" method="post">

                        <ul class="nav nav-pills nav-justified fs-4 fw-bold" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="pill" href="#voter-details-tab">
                                    <div class="pt-0 mt-0"><small class="fs-6 mt-0"><span style="font-weight: normal !important;">Your personal information</span></small></div><i class="far fa-user-circle"></i>&nbsp;Personal Details
                                </a></li>
                            <li class="nav-item" role="presentation"><a id="voting-system" class="nav-link" role="tab" data-bs-toggle="pill" href="#voting-system-tab">
                                    <div class="pt-0 mt-0"><small class="fs-6 mt-0"><span style="font-weight: normal !important;">Voting System</span></small></div><i class="fas fa-vote-yea"></i>&nbsp;Vote
                                </a></li>
                            <li class="nav-item" role="presentation"><a id="review-and-submit" class="nav-link" role="tab" data-bs-toggle="pill" href="#review-and-submit-tab">
                                    <div class="pt-0 mt-0"><small class="fs-6 mt-0"><span style="font-weight: normal !important;">Finish</span></small></div><i class="fas fa-hand-pointer"></i>&nbsp;Review &amp; Submit
                                </a></li>
                        </ul>

                        <div class="tab-content">
                            <!-- Voter Details -->
                            <div class="tab-pane active" role="tabpanel" id="voter-details-tab">
                                <hr>
                                <section class="py-4 py-xl-5 pt-0" style="text-align: right;">
                                    <div class="container">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-6 col-lg-4 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <div class="d-flex align-items-center p-3">
                                                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-bounding-box">
                                                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"></path>
                                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="px-2">
                                                            <h6 class="mb-0"><?php echo $voter['STUDNAM3'] . ' ' . $voter['STUDNAM2'] . ' ' . $voter['STUDNAM1'];
                                                                                ?></h6>
                                                            <p class="mb-0" style="text-align: left;"><?php echo $voter['STUDID']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center p-3">
                                                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-file-earmark-ruled">
                                                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h7v1a1 1 0 0 1-1 1H6zm7-3H6v-2h7v2z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="px-2">
                                                            <h6 class="mb-0"><?php echo course($voter['CORID']); ?></h6>
                                                            <p class="mb-0" style="text-align: left;"><?php echo college(1); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center p-3">
                                                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-receipt">
                                                                <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"></path>
                                                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="px-2">
                                                            <h6 class="mb-0"><?php echo year_level($voter['YEARLEVEL']); ?></h6>
                                                            <p class="mb-0" style="text-align: left;"> Semester: <?php echo $voter['STUDSEM']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <div class="d-flex align-items-center p-3">
                                                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-file-earmark-ruled">
                                                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h7v1a1 1 0 0 1-1 1H6zm7-3H6v-2h7v2z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="px-2">
                                                            <h6 class="mb-0"><?php echo $voter['GENDER']; ?></h6>
                                                            <p class="mb-0"><?php echo $voter['STUDCIVILSTAT']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center p-3">
                                                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-file-earmark-ruled">
                                                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h7v1a1 1 0 0 1-1 1H6zm7-3H6v-2h7v2z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="px-2">
                                                            <h6 class="mb-0"><?php echo $voter['STUDPADDRESS']; ?></h6>
                                                            <p class="mb-0"><?php echo $voter['PHONE1']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><button id="go-to-voting-system" type="button" class="btn btn-primary me-5"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill">
                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                                        </svg>&nbsp;Next</button>
                                </section>
                            </div><!-- Voter Details End -->

                            <!-- Voting System -->
                            <div class="tab-pane pb-2" role="tabpanel" id="voting-system-tab">
                                <hr class="mb-5">

                                <section>
                                    <div class="container">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <input type="hidden" name="studid" value="<?php echo $studid; ?>">
                                                <div class="p-3 p-xl-4">
                                                    <label class="form-label" for="governor"><strong>Governor</strong></label>
                                                    <div class="mb-3">
                                                        <select class="form-select candidates" id="governor" name="governor">
                                                            <optgroup label="Governor Position">
                                                                <?php candidates('Governor'); ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <label class="form-label" for="vice-governor"><strong>Vice Governor</strong></label>
                                                    <div class="mb-3">
                                                        <select class="form-select candidates" id="vice-governor" name="vice-governor">
                                                            <optgroup label="Vice Governor Position">
                                                                <?php candidates('Vice Governor'); ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <label class="form-label" for="secretary"><strong>Secretary</strong></label>
                                                    <div class="mb-3">
                                                        <select class="form-select candidates" id="secretary" name="secretary">
                                                            <optgroup label="Secretary Position">
                                                                <?php candidates('Secretary'); ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <label class="form-label" for="treasurer"><strong>Treasurer</strong></label>
                                                    <div class="mb-3">
                                                        <select class="form-select candidates" id="treasurer" name="treasurer">
                                                            <optgroup label="Treasurer Position">
                                                                <?php candidates('Treasurer'); ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div>
                                                    <div class="p-3 p-xl-4">
                                                        <label class="form-label" for="auditor"><strong>Auditor</strong></label>
                                                        <div class="mb-3">
                                                            <select class="form-select candidates" id="auditor" name="auditor">
                                                                <optgroup label="Auditor">
                                                                    <?php candidates('Auditor'); ?>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <label class="form-label" for="board-member-1"><strong>Board Member 1 (SPORTS, CULTURE AND ARTS)</strong></label>
                                                        <div class="mb-3">
                                                            <select class="form-select candidates" id="board-member-1" name="board-member-1">
                                                                <optgroup label="Board Member 1 (SPORTS, CULTURE AND ARTS)">
                                                                    <?php candidates('Board Member 1 (SPORTS, CULTURE AND ARTS)'); ?>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <label class="form-label" for="board-member-2"><strong>Board Member 2 (RESEARCH AND EXTENSION)</strong></label>
                                                        <div class="mb-3">
                                                            <select class="form-select candidates" id="board-member-2" name="board-member-2">
                                                                <optgroup label="Board Member 2 (RESEARCH AND EXTENSION)">
                                                                    <?php candidates('Board Member 2 (RESEARCH AND EXTENSION)'); ?>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <label class="form-label" for="board-member-3"><strong>Board Member 3 (COMM/PUB MATS)</strong></label>
                                                        <div class="mb-3">
                                                            <select class="form-select candidates" id="board-member-3" name="board-member-3">
                                                                <optgroup label="Board Member 3 (COMM/PUB MATS)">
                                                                    <?php candidates('Board Member 3 (COMM/PUB MATS)'); ?>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-3 p-xl-4">
                                                    <label class="form-label" for="board-member-4"><strong>Board Member 4 (DOCU AND EVALUATION)</strong></label>
                                                    <div class="mb-3">
                                                        <select class="form-select candidates" id="board-member-4" name="board-member-4">
                                                            <optgroup label="Board Member 4 (DOCU AND EVALUATION)">
                                                                <?php candidates('Board Member 4 (DOCU AND EVALUATION)'); ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <label class="form-label" for="board-member-5"><strong>Board Member 5 (IGP)</strong></label>
                                                    <div class="mb-3">
                                                        <select class="form-select candidates" id="board-member-5" name="board-member-5">
                                                            <optgroup label="Board Member 5 (IGP)">
                                                                <?php candidates('Board Member 5 (IGP)'); ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="button" id="save-candidates" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill">
                                                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
                                                        </svg>&nbsp;Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div> <!-- Voting System End -->

                            <!-- Review & Submit -->
                            <div class="tab-pane" role="tabpanel" id="review-and-submit-tab">
                                <hr>
                                <?php flash_alert(); ?>
                                <section class="py-4 py-xl-5">
                                    <div class="container">
                                        <div class="row d-flex justify-content-center g-2">
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <?php $governor = voted_candidate('Governor', $studid); ?>
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($governor['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $governor['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $governor['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $governor['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $governor['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $governor['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $governor['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $governor['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($governor['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $vice_governor = voted_candidate('Vice Governor', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($vice_governor['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $vice_governor['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $vice_governor['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $vice_governor['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $vice_governor['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $vice_governor['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $vice_governor['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $vice_governor['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($vice_governor['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $secretary = voted_candidate('Secretary', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($secretary['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $secretary['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $secretary['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $secretary['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $secretary['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $secretary['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $secretary['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $secretary['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($secretary['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $treasurer = voted_candidate('Treasurer', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($treasurer['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $treasurer['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $treasurer['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $treasurer['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $treasurer['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $treasurer['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $treasurer['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $treasurer['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($treasurer['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $auditor = voted_candidate('Auditor', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($auditor['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $auditor['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $auditor['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $auditor['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $auditor['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $auditor['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $auditor['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $auditor['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($auditor['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $board_member_1 = voted_candidate('Board Member 1 (SPORTS, CULTURE AND ARTS)', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($board_member_1['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $board_member_1['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $board_member_1['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $board_member_1['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $board_member_1['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $board_member_1['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $board_member_1['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $board_member_1['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($board_member_1['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $board_member_2 = voted_candidate('Board Member 2 (RESEARCH AND EXTENSION)', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($board_member_2['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $board_member_2['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $board_member_2['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $board_member_2['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $board_member_2['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $board_member_2['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $board_member_2['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $board_member_2['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($board_member_2['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $board_member_3 = voted_candidate('Board Member 3 (COMM/PUB MATS)', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($board_member_3['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $board_member_3['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $board_member_3['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $board_member_3['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $board_member_3['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $board_member_3['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $board_member_3['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $board_member_3['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($board_member_3['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $board_member_4 = voted_candidate('Board Member 4 (DOCU AND EVALUATION)', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($board_member_4['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $board_member_4['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $board_member_4['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $board_member_4['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $board_member_4['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $board_member_4['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $board_member_4['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $board_member_4['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($board_member_4['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 col-xl-4">
                                                <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                                    <?php $board_member_5 = voted_candidate('Board Member 5 (IGP)', $studid); ?>
                                                    <div class="d-flex align-items-center p-3 border border-primary border-2 rounded w-100">
                                                        <div class="px-2 d-flex align-items-center justify-content-between">
                                                            <?php echo profile_picture($board_member_5['id'] ?? ''); ?>
                                                            <div>
                                                                <h6 class="mb-0">Full Name: <?php echo $board_member_5['full_name'] ?? 'NO AVAILABLE DATA'; ?></h6>
                                                                <p class="mb-0">Position: <?php echo $board_member_5['position'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Organization: <?php echo $board_member_5['organization_id'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">College: <?php echo $board_member_5['college'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Program: <?php echo $board_member_5['program'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Year Level: <?php echo $board_member_5['year_level'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Section: <?php echo $board_member_5['section'] ?? 'NO AVAILABLE DATA'; ?></p>
                                                                <p class="mb-0">Total Votes: <?php echo vote_count($board_member_5['id'] ?? 'NO VOTE AVAILABLE'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end pe-5">
                                        <button id="submit-vote" class="btn btn-primary" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clipboard-check">
                                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                            </svg>&nbsp;Submit
                                        </button>
                                    </div>
                                </section>
                            </div><!-- Review & Submit End -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="toast-container"></div>
    <footer class="footer">
        <div class="text-center p-5">
            <h6>&copy; 2023 | Sir Red | <b> Lileth Pine & Noel Dimailig (BSIT Students AY 2022-2023) </b> | Powered by LavaLust Framework</h6>
        </div>
    </footer>
    <script src="<?php echo BASE_URL; ?>public/vote/assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('go-to-voting-system').addEventListener('click', () => {
            sessionStorage.setItem('activeTab', '#voting-system-tab');
            document.getElementById('voting-system').click();
        });

        document.getElementById('submit-vote').addEventListener('click', () => {
            sessionStorage.setItem('activeTab', '#voter-details-tab');
        });

        const saveCandidatesButton = document.getElementById('save-candidates');

        candidates = {};
        saveCandidatesButton.addEventListener('click', (e) => {
            const selectedCandidates = document.querySelectorAll('.candidates');
            e.preventDefault();

            const formData = new FormData();
            formData.append('studid', '<?php echo $studid; ?>');
            selectedCandidates.forEach((candidate) => {
                formData.append(candidate.name, candidate.value);
            });

            fetch('<?php echo BASE_URL; ?>vote/save_candidates/<?php echo $studid; ?>', {
                    method: 'POST',
                    body: formData
                })
                .then((response) => response.json())
                .then((data) => {
                    if (data.status == 'success') {
                        sessionStorage.setItem('activeTab', '#review-and-submit-tab');
                        window.location.reload();
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        });

        // Restore the saved active tab on page load
        window.addEventListener('load', () => {
            const savedTabId = sessionStorage.getItem('activeTab');
            if (savedTabId) {
                // Remove the active class from all tabs
                const allTabs = document.querySelectorAll('.nav-pills .nav-link');
                allTabs.forEach((tab) => {
                    tab.classList.remove('active');
                });

                const tabPanes = document.querySelectorAll('.tab-pane');
                tabPanes.forEach((tabPane) => {
                    tabPane.classList.remove('active', 'show');
                });

                const savedTab = document.querySelector(`a[href="${savedTabId}"]`);
                if (savedTab) {
                    savedTab.classList.add('active');
                    const tabContentId = savedTab.getAttribute('href');
                    const tabContent = document.querySelector(tabContentId);
                    if (tabContent) {
                        tabContent.classList.add('active', 'show');
                    }
                }
            }
        });
    </script>
</body>

</html>