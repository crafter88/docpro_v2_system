				<div class="side-body padding-top">
					<div id='sequence'>
						<ul class='seq-canvas'>																						
							<li id='companies-panel'>
								<div class='content'>
									<div class='row'>
										<div class='col-md-12'>
											<div class='card'>
												<div class='card-header'>
													<div class='card-title'>
														<div class='title'>Companies</div>
													</div>
												</div>
												<div class='card-body'>
													<div id='map'>
													</div>
												</div>
											</div>
										</div>
									</div>								
								</div>
							</li>
							<li>
								<div class='content'>
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												<div class="title">Transaction Line Chart</div>
											</div>
										</div>
										<div class="card-body no-padding">
											<canvas id="line-chart" class="chart"></canvas>
										</div>
									</div>
								</div>
							</li>						
							<li>
								<div class='content'>
									 <div class="card">
										<div class="card-header">
											<div class="card-title">
												<div class="title">Bar Chart</div>
											</div>
										</div>
										<div class="card-body no-padding">
											<canvas id="bar-chart" class="chart"></canvas>
										</div>
									</div>
								</div>
							</li>						
							<li>
								<div class='content'>
									<div class="card">
										<div class="card-header">
											<div class="card-title">
												<div class="title">Transactions Pie Chart</div>
											</div>
										</div>
										<div class="card-body no-padding">
											<canvas id="pie-chart" class="chart"></canvas>
										</div>
									</div>
								</div>
							</li>
							<li id='memos-panel'>
								<div class='content'> 
									<div class="row">
										<div class="col-xs-12">
											<div class="card">
												<div class="card-header">
													<div class="card-title">
														<div class="title">Memos</div>
													</div>
												</div>
												<div class="card-body no-padding">
													<div role="tabpanel">
														<!-- Nav tabs -->
														<ul class="nav nav-tabs" role="tablist">
															<li role="presentation" class="active"><a href="#calendar-view" aria-controls="home" role="tab" data-toggle="tab"><i class='fa fa-calendar'></i> Clendar View</a></li>
															<li role="presentation"><a href="#tabular-view" aria-controls="profile" role="tab" data-toggle="tab"><i class='fa fa-table'></i> Tabular View</a></li>
														</ul>
														<!-- Tab panes -->
														<div class="tab-content">
															<div role="tabpanel" class="tab-pane active" id="calendar-view">
																<div id='memo-calendar'>
																</div>
															</div>
															<div role="tabpanel" class="tab-pane" id="tabular-view">												
																<table id='memo-table' class='stripe' cellspacing="0">
																	<thead>
																		<tr>
																			<th>Title</th>
																			<th>Content</th>
																			<th>Date</th>
																		</tr>
																	</thead>
																	<tfoot>
																		<tr>
																			<th>Title</th>
																			<th>Content</th>
																			<th>Date</th>
																		</tr>
																	</tfoot>
																	<tbody>
																		<tr>
																			<td>Memo 1</td>
																			<td>Yesterday Memo</td>
																			<td>Jan 1, 2016</td>
																		</tr>
																		<tr>
																			<td>Memo 2</td>
																			<td>Today's Memo</td>
																			<td>Jan 2, 2016</td>
																		</tr>
																		<tr>
																			<td>Memo 3</td>
																			<td>Tomorrow Memo</td>
																			<td>Jan 3, 2016</td>
																		</tr>
																	</tbody>
																</table>									
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								
									<div class="row">
										<div class="col-xs-12">
											<div class='card'>
												<div class='card-header'>
													<div class='card-title'>
														<div class='title'>Memo Information</div>
													</div>
												</div>
												<div class='card-body'>												
													<form class="form-horizontal">
														<div class="form-group">
															<label for="title" class="col-sm-2 control-label">Title</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" id="title" value="Today's Memo" placeholder="Title" readonly>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label">Content</label>
															<div class="col-sm-10">
																<textarea id='content' class='form-control' rows='10' cols='1' readonly>																		
																</textarea>
															</div>
														</div>
													</form>
															
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>	
						</ul>
					</div>
					<button type="button" class="seq-prev btn btn-default" aria-label="Previous">
						<i class='fa fa-arrow-left'></i>
					</button>	  
					<button type="button" class="seq-next btn btn-default" aria-label="Next">
						<i class='fa fa-arrow-right'></i>
					</button>
				</div>