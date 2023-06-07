<?php require_once(APP_DIR . "views/partials/head.php") ?>

<header class="app-header fixed-top">

	<?php require_once(APP_DIR . "views/partials/top.php") ?>
	<?php require_once(APP_DIR . "views/partials/side.php") ?>

</header><!--//app-header-->


<div class="app-wrapper">
	<?php flash_alert(); ?>
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Students</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<form class="table-search-form row gx-1 align-items-center" method="post">
									<div class="col-auto">
										<input type="text" id="search-orders" name="STUDID" class="form-control search-orders" placeholder="ID Number">
									</div>
									<div class="col-auto">
										<button type="submit" class="btn app-btn-secondary">Search</button>
									</div>
								</form>

							</div><!--//col-->
						</div><!--//row-->
					</div><!--//table-utilities-->
				</div><!--//col-auto-->
			</div><!--//row-->


			<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Voted</a>
				<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Not Voted</a>
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
											<th class="cell">ID Number</th>
											<th class="cell">Last Name</th>
											<th class="cell">First Name</th>
											<th class="cell">MI</th>
											<th class="cell">Year Level</th>
											<th class="cell">Status</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>

										<?php
										$counter = 1;
										foreach ($students as $student) {
										?>
											<tr>
												<td class="cell"><?php echo $counter++; ?></td>
												<td class="cell"><span class="truncate"><?php echo $student['STUDID']; ?></span></td>
												<td class="cell"><?php echo $student['STUDNAM1']; ?></td>
												<td class="cell"><?php echo $student['STUDNAM3']; ?></td>
												<td class="cell"><?php echo $student['STUDNAM2']; ?></td>
												<td class="cell"><?php echo $student['YEARLEVEL']; ?></td>
												<td class="cell">
													<?php if (voting_status($student['STUDID']) == 'Voted') { ?>
														<span class="badge bg-success">Voted</span>
													<?php } else { ?>
														<span class="badge bg-warning">Not Voted</span>
													<?php } ?>
												</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" target="_blank" rel="noopener noreferrer" onclick="window.open('<?php echo BASE_URL; ?>vote/student/<?php echo $student['STUDID']; ?>', 'newwindow', 'width=auto,height=auto'); return false;" href="#">Vote</a></td>
											</tr>
										<?php } ?>

									</tbody>
								</table>
							</div><!--//table-responsive-->

						</div><!--//app-card-body-->
					</div><!--//app-card-->
					<nav class="app-pagination">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav><!--//app-pagination-->

				</div><!--//tab-pane-->

				<div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">

								<table class="table mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">#</th>
											<th class="cell">ID Number</th>
											<th class="cell">Last Name</th>
											<th class="cell">First Name</th>
											<th class="cell">MI</th>
											<th class="cell">Year Level</th>
											<th class="cell">Status</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$voted_counter = 1;
										foreach ($students as $student) {
											if (voting_status($student['STUDID']) != 'Voted') {
												continue;
											} else {
										?>
												<tr>
													<td class="cell"><?php echo $voted_counter++; ?></td>
													<td class="cell"><span class="truncate"><?php echo $student['STUDID']; ?></span></td>
													<td class="cell"><?php echo $student['STUDNAM1']; ?></td>
													<td class="cell"><?php echo $student['STUDNAM3']; ?></td>
													<td class="cell"><?php echo $student['STUDNAM2']; ?></td>
													<td class="cell"><?php echo $student['YEARLEVEL']; ?></td>
													<td class="cell">
														<?php if (voting_status($student['STUDID']) == 'Voted') { ?>
															<span class="badge bg-success">Voted</span>
														<?php } else { ?>
															<span class="badge bg-warning">Not Voted</span>
														<?php } ?>
													</td>
													<td class="cell"><a class="btn-sm app-btn-secondary" target="_blank" rel="noopener noreferrer" onclick="window.open('<?php echo BASE_URL; ?>vote/student/<?php echo $student['STUDID']; ?>', 'newwindow', 'width=auto,height=auto'); return false;" href="#">Vote</a></td>
												</tr>
											<?php } ?>
										<?php } ?>

									</tbody>
								</table>
							</div><!--//table-responsive-->
						</div><!--//app-card-body-->
					</div><!--//app-card-->
				</div><!--//tab-pane-->

				<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					<div class="app-card app-card-orders-table mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">#</th>
											<th class="cell">ID Number</th>
											<th class="cell">Last Name</th>
											<th class="cell">First Name</th>
											<th class="cell">MI</th>
											<th class="cell">Year Level</th>
											<th class="cell">Status</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$not_voted_counter = 1;
										foreach ($students as $student) {
											if (voting_status($student['STUDID']) != 'Not Voted') {
												continue;
											} else {
										?>
												<tr>
													<td class="cell"><?php echo $not_voted_counter++; ?></td>
													<td class="cell"><span class="truncate"><?php echo $student['STUDID']; ?></span></td>
													<td class="cell"><?php echo $student['STUDNAM1']; ?></td>
													<td class="cell"><?php echo $student['STUDNAM3']; ?></td>
													<td class="cell"><?php echo $student['STUDNAM2']; ?></td>
													<td class="cell"><?php echo $student['YEARLEVEL']; ?></td>
													<td class="cell">
														<?php if (voting_status($student['STUDID']) == 'Voted') { ?>
															<span class="badge bg-success">Voted</span>
														<?php } else { ?>
															<span class="badge bg-warning">Not Voted</span>
														<?php } ?>
													</td>
													<td class="cell"><a class="btn-sm app-btn-secondary" target="_blank" rel="noopener noreferrer" onclick="window.open('<?php echo BASE_URL; ?>vote/student/<?php echo $student['STUDID']; ?>', 'newwindow', 'width=auto,height=auto'); return false;" href="#">Vote</a></td>
												</tr>
											<?php } ?>
										<?php } ?>
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