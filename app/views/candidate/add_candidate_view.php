<?php require_once(APP_DIR . "views/partials/head.php") ?>

    <header class="app-header fixed-top">	

        <?php require_once(APP_DIR . "views/partials/top.php") ?>
        <?php require_once(APP_DIR . "views/partials/side.php") ?>

    </header><!--//app-header-->

    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Add Candidate</h1>
			    <hr class="mb-4">

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row g-4 settings-section">

                        <div class="col-12 col-md-6">
                            <div class="app-card app-card-settings shadow-sm p-4">
                                
                                <div class="app-card-body">

                                    <div class="settings-form">

                                        <div class="mb-3">
                                            <label class="form-label">College</label>
                                            <select name="college" class="form-control" required>
                                                <option value=""></option>
                                                <option value="CCS" selected>CCS</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Program</label>
                                            <option value=""></option>
                                            <select name="program" class="form-control" required>
                                                <option value="BSIT" selected>BSIT</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Org/Department</label>
                                            <select name="organization_id" class="form-control" required>
                                                <option value=""></option>
                                                <option value="1" selected>D'Analyst</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Candidate Name<span class="ms-2" data-container="body" data-bs-toggle="popover" data-trigger="hover" data-placement="top" data-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                            <circle cx="8" cy="4.5" r="1"/>
                                            </svg></span></label>
                                            <input type="text" class="form-control" name="full_name" value="" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Position</label>
                                            <select name="position" class="form-control" required>
                                                <option value=""></option>
                                                <option value="Governor" selected>Governor</option>
                                                <option value="Vice Governor">Vice Governor</option>
                                                <option value="Secretary">Secretary</option>
                                                <option value="Treasurer">Treasurer</option>
                                                <option value="Auditor">Auditor</option>
                                                <option value="Board Member 1 (SPORTS, CULTURE AND ARTS)">Board Member 1 (SPORTS, CULTURE AND ARTS)</option>
                                                <option value="Board Member 2 (RESEARCH AND EXTENSION)">Board Member 2 (RESEARCH AND EXTENSION)</option>
                                                <option value="Board Member 3 (COMM/PUB MATS)">Board Member 3 (COMM/PUB MATS)</option>
                                                <option value="Board Member 4 (DOCU AND EVALUATION)">Board Member 4 (DOCU AND EVALUATION)</option>
                                                <option value="Board Member 5 (IGP)">Board Member 5 (IGP)</option>
                                            </select>
                                        </div>
                                        
                                    </div>

                                </div><!--//app-card-body-->
                                
                            </div><!--//app-card-->
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="app-card app-card-settings shadow-sm p-4">
                                
                                <div class="app-card-body">

                                    <div class="settings-form">

                                        <div class="mb-3">
                                            <label class="form-label">Bio</label>
                                            <textarea class="form-control" name="bio" cols="30" rows="10" required></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Picture</label>
                                            <input type="file" name="picture" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Video</label>
                                            <input type="file" name="video" class="form-control" >
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Year Level</label>
                                            <select name="year_level" class="form-control" required>
                                                <option value=""></option>
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Section</label>
                                            <select name="section" class="form-control" required>
                                                <option value=""></option>
                                                <option value="F1" selected>F1</option>
                                                <option value="F2">F2</option>
                                                <option value="F3">F3</option>
                                                <option value="F4">F4</option>
                                                <option value="F5">F5</option>
                                                <option value="F6">F6</option>
                                                <option value="F7">F7</option>
                                                <option value="F8">F8</option>
                                            </select>
                                        </div>
                                        
                                    </div>


                                </div><!--//app-card-body-->
                                
                            </div><!--//app-card-->
                        </div>

                        <div class="col-12 col-md-12">
                            <div class="app-card app-card-settings shadow-sm p-4">
                                <div class="app-card-body">

                                    <button type="submit" class="btn app-btn-primary" >Save Changes</button>

                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                        </div>

                    </div><!--//row-->
                </form>

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
        <?php require_once(APP_DIR . "views/partials/footbar.php") ?>
	    
    </div><!--//app-wrapper-->   
    
    
    <?php require_once(APP_DIR . "views/partials/foot.php") ?>

