		<!-- SECTION: Event Schedule
		================================================== -->
		<div class="section-schedule section-bg-left section-padding onepage-section" id="section-schedule">
			<div class="container">

				<!-- Section title -->
				<div class="section-title-area">
				<h5 class="section-subtitle"></h5>
					<h2 class="section-title"><span class="title-section-bg">Programa <small></small></span></h2>
				</div>
				<!-- /Section title -->


				
				<!-- TABS -->
				<div class="tabs">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-2 schedule-tab-links-wrapper">
							<!-- Tab links -->
							<ul class="tab-links schedule-tab-links">
						        <li class="active"><a href="#schedule-tab1"><span class="fa fa-calendar"></span>&nbsp;&nbsp; Day 1</a></li>
						        <li><a href="#schedule-tab2"><span class="fa fa-calendar"></span>&nbsp;&nbsp; Day 2</a></li>
						    </ul>
						    <!-- /Tab Links -->
						</div>
					</div>
					
						
					<!-- Schedule Tabs -->
				    <div class="schedule-tabs">
				    	<!-- Schedule Tab -->
				    	<div class="schedule-tab tab" id="schedule-tab1">
				    		<!-- schedule list -->
				    		<div class="schedule-list">

								<!-- Schedule itens header -->
								<div class="schedule-item-header">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-top">
												<div class="schedule-item-bar schedule-item-bar-top"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">						
										</div>
									</div>
								</div>	
								<!-- /Schedule itens header -->

								 <?php 

                         // check if the repeater field has rows of data
                    if( get_field('day1','option') ):

                        // loop through the rows of data
                        while ( have_rows('day1','option') ) : the_row();



                            // display a sub field value
                            echo '

								<!-- Schedule item -->
								<div class="schedule-item">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block">
												<div class="schedule-item-bar"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10 schedule-item-content-wrapper">
											<!-- schedule item content -->
											<div class="schedule-item-content">
												<div class="row">
													<!-- col -->
													<div class="col-sm-2">
														<div class="schedule-item-img">
															<img src="'.get_sub_field('photo').'" alt="">
														</div>														
													</div>
													<!-- /col -->
													<!-- col -->
													<div class="col-sm-10">
														<div class="schedule-item-infos">
															<h4 class="schedule-item-date">'.get_sub_field('time').'</h4>
															<h3 class="schedule-item-title">'.get_sub_field('title').'</h3>
															<div class="schedule-item-text">
																<p>'.get_sub_field('description').'</p>
															</div>	
														</div>														
													</div>
													<!-- /col -->
												</div>																		
											</div>
											<!-- schedule item content -->
										</div>
									</div>
								</div>	
								<!-- /Schedule item -->';

								endwhile;

						else :

                        // no rows found

                    endif; ?>

								


								<!-- Schedule itens footer -->
								<div class="schedule-item-footer">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-bottom">
												<div class="schedule-item-bar schedule-item-bar-bottom"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">						
										</div>
									</div>
								</div>	
								<!-- /Schedule itens footer -->
							</div>
				    		<!-- /schedule list -->
				    	</div>
				    	<!-- /Schedule Tab -->

				    	<!-- Schedule Tab -->
				    	<div class="schedule-tab tab" id="schedule-tab2">
				    		<!-- schedule list -->
				    		<div class="schedule-list">
				    			
								<!-- Schedule itens header -->
								<div class="schedule-item-header">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-top">
												<div class="schedule-item-bar schedule-item-bar-top"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">						
										</div>
									</div>
								</div>	
								<!-- /Schedule itens header -->

								
								 <?php 

                         // check if the repeater field has rows of data
                    if( get_field('day2','option') ):

                        // loop through the rows of data
                        while ( have_rows('day2','option') ) : the_row();



                            // display a sub field value
                            echo '

								<!-- Schedule item -->
								<div class="schedule-item">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block">
												<div class="schedule-item-bar"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10 schedule-item-content-wrapper">
											<!-- schedule item content -->
											<div class="schedule-item-content">
												<div class="row">
													<!-- col -->
													<div class="col-sm-2">
														<div class="schedule-item-img">
															<img src="'.get_sub_field('photo').'" alt="">
														</div>														
													</div>
													<!-- /col -->
													<!-- col -->
													<div class="col-sm-10">
														<div class="schedule-item-infos">
															<h4 class="schedule-item-date">'.get_sub_field('time').'</h4>
															<h3 class="schedule-item-title">'.get_sub_field('title').'</h3>
															<div class="schedule-item-text">
																<p>'.get_sub_field('description').'</p>
															</div>	
														</div>														
													</div>
													<!-- /col -->
												</div>																		
											</div>
											<!-- schedule item content -->
										</div>
									</div>
								</div>	
								<!-- /Schedule item -->';

								endwhile;

						else :

                        // no rows found

                    endif; ?>

								<!-- Schedule itens footer -->
								<div class="schedule-item-footer">
									<div class="row">
										<div class="col-sm-2">
											<!-- schedule item bar -->
											<div class="schedule-item-block schedule-item-block-bottom">
												<div class="schedule-item-bar schedule-item-bar-bottom"></div>
											</div>
											<!-- /schedule item bar -->
										</div>
										<div class="col-sm-10">						
										</div>
									</div>
								</div>	
								<!-- /Schedule itens footer -->
							</div>
				    		<!-- /schedule list -->
				    	</div>
				    	<!-- /Schedule Tab -->

				    </div>
					<!-- /Schedule Tabs -->	
					
				</div>
				<!-- /TABS -->
							
			</div>
		</div>
		<!-- /SECTION: Event Schedule -->