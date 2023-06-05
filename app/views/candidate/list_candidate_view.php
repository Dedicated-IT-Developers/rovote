<?php require_once(APP_DIR . "views/partials/head.php") ?>

    <header class="app-header fixed-top">	

        <?php require_once(APP_DIR . "views/partials/top.php") ?>
        <?php require_once(APP_DIR . "views/partials/side.php") ?>

    </header><!--//app-header-->

    
    <div class="app-wrapper">
	    
        <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Candidates</h1>
						
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

								<div class="col-auto">
									<a class="btn btn-primary text-white" href="<?php echo BASE_URL; ?>dashboard/add_candidate">
										Add Candidate
									</a>
								</div>
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
											<select class="form-select w-auto" name="sem">
												<option selected value="1">First Semester</option>
												<option value="2">Second Semester</option>
											</select>
					                    </div>
										<div class="col-auto">
											<select class="form-select w-auto" name="acadyear">
												<option selected value="2023-2024">2023-2024</option>
												<option value="2022-2023">2022-2023</option>
											</select>
										</div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
							    
							    <div class="col-auto">						    
								    <a class="btn btn-danger text-white" href="#">
									    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
									    Download
									</a>
							    </div>
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">

				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Qualified</a>

				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Disqualified</a>

				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">

			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">#</th>
												<th class="cell">Photo</th>
												<th class="cell">Name</th>
												<th class="cell">Position</th>
												<th class="cell">Year & Section</th>
												<th class="cell">Action</th>
											</tr>
										</thead>
										<tbody>

											<?php foreach($candidates as $candidate){ ?>

												<tr>
													<td class="cell">#</td>
													<td class="cell"><?php echo $candidate['picture']; ?></td>
													<td class="cell"><span class="truncate"><?php echo $candidate['full_name']; ?></span></td>
													<td class="cell"><?php echo $candidate['position']; ?></td>
													<td class="cell"><span>Year: <?php echo $candidate['year_level']; ?></span><span class="note">Section: <?php echo $candidate['section']; ?></span></td>
													<td class="cell">
														<a class="btn-sm app-btn-secondary" href="#">View</a>
														<a class="btn btn-sm btn-danger text-white" href="#">Edit</a>
													</td>
												</tr>

											<?php } ?>
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						
			        </div><!--//tab-pane-->
			        
			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								    
								<table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">#</th>
												<th class="cell">Name</th>
												<th class="cell">Position</th>
												<th class="cell">Year & Section</th>
												<th class="cell">Action</th>
											</tr>
										</thead>
										<tbody>

											
		
										</tbody>
									</table>

						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
        <?php require_once(APP_DIR . "views/partials/footbar.php") ?>
	    
    </div><!--//app-wrapper-->   
    
    
    <?php require_once(APP_DIR . "views/partials/foot.php") ?>

