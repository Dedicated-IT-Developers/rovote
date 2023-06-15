<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
?>

<?php require_once(APP_DIR . "views/partials/head.php") ?>

<header class="app-header fixed-top">

	<div class="app-header-inner">
		<div class="container-fluid py-2 ps-0 ms-0">
			
			<div class="app-header-content ps-0 ms-0">
				
				<div class="row justify-content-between align-items-center ps-0 ms-0">

					<div class="search-mobile-trigger d-sm-none col">
						<i class="search-mobile-trigger-icon fas fa-search"></i>
					</div><!--//col-->

					
					<div class="app-search-box col ps-0 ms-0">
						<form class="app-search-form ps-0 ms-0">
							<h1 class="app-page-title mb-0" style="margin-left: -150px">REALTIME UPDATES</h1>
							
						</form>
					</div><!--//app-search-box-->

					<div class="app-utilities col-auto pe-5">

						<b class="me-5" style="color:green">Results as of <?php echo date_today('l, F j, Y  H:i a'); ?></b>

						<!-- <div class="app-utility-item pe-5">
							<a href="<?php echo BASE_URL; ?>auth/" title="Login">
								<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
									<path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
								</svg>
							</a>
						</div> -->
						<!--//app-utility-item-->

						<div class="app-utility-item app-user-dropdown dropdown">

						</div><!--//app-user-dropdown-->

					</div><!--//app-utilities-->
				</div><!--//row-->
			</div><!--//app-header-content-->
		</div><!--//container-fluid-->
	</div><!--//app-header-inner-->

</header><!--//app-header-->


<div class="">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			
			<div class="row g-4">


					
						<div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Position</th>
												<th class="cell">Name</th>
												
												<!-- <th class="cell">Year &amp; Section</th> -->
												<th class="cell">Vote</th>
											</tr>
										</thead>
										<tbody>

											<?php foreach ($candidates as $candidate) { ?>
											<?php //if ($candidate['picture'] == '') {
												//$candidate['picture'] = 'no-avatar.png';
											//} ?>
											
												<tr style="margin:0px;padding:0px; padding-left: 20px;
												<?php 
												switch($candidate['position'])
												{
													case "Governor":
														echo "background-color: rgb(37, 150, 190, .30);";
														break;
													case "Vice Governor":
														echo "background-color: rgb(234,182,118, .30);";
														break;
													case "Secretary":
														echo "background-color: rgb(30, 195, 10, .30);";
														break;
													case "Treasurer":
														echo "background-color: rgb(195, 10, 13, .30);";
														break;
													case "Auditor":
														echo "background-color: rgb(195, 152, 10, .30);";
														break;
													case "Board Member 1 (SPORTS, CULTURE AND ARTS)":
														echo "background-color: rgb(207, 255, 0, .30);";
														break;
													
													case "Board Member 2 (RESEARCH AND EXTENSION)":
														echo "background-color: rgb(255, 0, 216, .30);";
														break;
													case "Board Member 3 (COMM/PUB MATS)":
														echo "background-color: rgb(0, 46, 255, .30);";
														break;
													case "Board Member 4 (DOCU AND EVALUATION)":
														echo "background-color: rgb(0, 255, 232, .30);";
														break;
													case "Board Member 5 (IGP)":
														echo "background-color: rgb(7, 7, 7, .30);";
														break;
												} ?>
												">
													
													<td style="margin:0px 0px 0px 20px;padding:0px" class="cell"> &nbsp;&nbsp;&nbsp; <?php echo $candidate['position']; ?></td>

													<td style="margin:0px;padding:0px" class="cell"><span class="truncate"><?php echo $candidate['full_name']; ?></span></td>

													<!-- <td style="margin:0px;padding:0px" class="cell"><span class="note"><?php echo $candidate['year_level']; ?>-<?php echo $candidate['section']; ?></span></td> -->

													<td style="margin:0px;padding:0px" class="cell">
														<!-- <span class="badge bg-success"></span> -->
														<?php echo vote_count($candidate['id']); ?>
													</td>
												</tr>

											<?php } ?>

													
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div>

				
			</div><!--//row-->
			
		</div><!--//container-fluid-->
	</div>

	<footer class="app-footer">
		<div class="container text-center py-3">
				<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
				<h6>&copy; 2023 | Sir Red | <b> Noel Dimailig, Lileth Pine, & Jander Ramirez (BSIT AY 2022-2023) </b> | Powered by LavaLust Framework</h6>
			
		</div>
	</footer><!--//app-footer-->

</div><!--//app-wrapper-->


<?php require_once(APP_DIR . "views/partials/foot.php") ?>