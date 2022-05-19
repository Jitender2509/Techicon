<div class="container" style="font-size:18px;">
				<div class="container">
					<h1 class="m-top-20" style="text-align: center;"><img style="max-width:50px;" src="images/t1.png"><b> Winning Prize </b><img style="max-width: 50px;" src="images/t1.png"></h1><br>
				<div class="row">
					<div class="about_bottom_content" style="margin-left: 145px;">						
					<!--	<div class="col-md-1">
							<div class="about_bottom_item m-top-20">
								<div class="ab_head">
									<div class="ab_head_icon" style="margin-left: 28px;">
										<i class="icofont"><img style="max-width: 90%;" src="images/t1.png"></i>
									</div>
								</div><br>
								<p style="font-size: 25px;"><b>1st Prize</b><br><br>25,000.&#8377</p>
							</div>
						</div>-->
						<div class="col-md-6">
							<div class="about_bottom_item m-top-20">
								<div class="ab_head" style="margin-left: 28px;">
									<div class="ab_head_icon">
										<i class="icofont"><img style="max-width: 90%;" src="images/t1.png"></i>
									</div>
									<p style="font-size: 25px;"><b>Worth : </b><!--<br><br>-->&#8377 25,000.</p>
								</div><!--<br>-->
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="about_bottom_item m-top-20">
								<div class="ab_head" style="margin-left: 28px;">
									<div class="ab_head_icon">
										<i class="icofont"><img style="max-width: 90%;" src="images/t1.png"></i>
									</div>
									<p style="font-size: 25px;text-align:justify">International Certification <br><br> From Microsoft.</p>
								</div><!--<br>-->
								
							</div>
						</div>
						<!--<div class="col-md-1">
							<div class="about_bottom_item m-top-20">
								<div class="ab_head">
									<div class="ab_head_icon" style="margin-left: 28px;">
										<i class="icofont"><img style="max-width: 90%;" src="images/t1.png"></i>
									</div>
								</div><br>
								<p style="font-size: 25px;"><b>3rd Prize</b><br><br>15,000.&#8377</p>
							</div>
						</div>-->
					</div>
				</div>
			</div>
			<br>
			<br>
			<hr>
		<section id="skill" class="skill roomy-100" style="background-color:white;">
			<div class="container" style="font-size:18px;">
				<div class="row">
					<div class="main_skill">
						<div class="col-md-6">
							<div class="skill_content wow fadeIn">
								<h2 style="font-weight:bold;">Rules</h2>
								<div class="separator_left"></div>
                                   
                            
								<!--<p style="align:justify;line-height:25px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>-->
								<div class="container" style="text-align:justify;">
								<ul>
                                <li style="list-style-type:square;align:justify;line-height:25px;color:black;">Competitors must carry their own system with required software and tools.</li>
							    <li style="list-style-type:square;align:justify;line-height:25px;color:black;">No registration fees.</li>
							
								<li style="list-style-type:square;align:justify;line-height:25px;color:black;">Per team 2,3,4 members are allowed.</li>
								<li style="list-style-type:square;align:justify;line-height:25px;color:black;">Competition duration will be
								    <?php
								    if($page==1)
								    {
								        echo " 2 hours";
								    }
								    elseif($page==2)
								    {
								        echo " 4 hours";
								    }
								    elseif($page==3)
								    {
								        echo " 1 hours";
								    }
								    else
								    {
								        echo " 1-2 hours";
								    }
								    ?>.</li>
								<li style="list-style-type:square;align:justify;line-height:25px;color:black;">Internet facilities will be provided.</li>
								<li style="list-style-type:square;align:justify;line-height:25px;color:black;">Person can not leave the premises during the Competition period.</li>
								<li style="list-style-type:square;align:justify;line-height:25px;color:black;">Stay will be provided in the premises.</li>
								<li style="list-style-type:square;align:justify;line-height:25px;color:black;">Beware! We don't charge any type of registration fees.</li>
								</ul>
								</div>


							</div>
						</div>
						
						<div class="col-md-6">
						    <br><br> 
							<div class="right-box-pro wow fadeIn"><img src="images/W.jpeg" alt="" style="box-shadow: 2px 2px 3px 3px;" class="img-fluid img-rounded fat-ab">
                    </div>
						</div>
					</div>
				</div>
				<!--End off row-->
			</div>
			<!--End off container -->
			<br />
			<br />
			<br />
			<hr />
			<br />
			<br />
			<br />
			<div class="container"style="font-size:18px;">
				<div class="row">
					<div class="skill_bottom_content text-center">
						<div class="col-md-3">
							<div class="skill_bottom_item">
							    <?php
                            require ('includes/db_config.php');
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            $sql="SELECT id FROM register ORDER BY id";
                            if ($result=mysqli_query($connection,$sql))
                            {
                              ?>
								<h2 class="statistic-counter"><?php
                            // Return the number of rows in result set
                            $rowcount=mysqli_num_rows($result);
                            printf($rowcount);
                            /*printf($rowcount);
                            // Free result set
                            mysqli_free_result($result);*/
                            }

                            mysqli_close($connection);
                            ?></h2>
								<div class="separator_small"></div>
								<h5><em>Participants</em></h5>
							</div>
						</div>
						<div class="col-md-3">
							<div class="skill_bottom_item">
								<h2 class="statistic-counter">46</h2>
								<div class="separator_small"></div>
								<h5><em>Remaining days</em></h5>
							</div>
						</div>
						<div class="col-md-3">
							<div class="skill_bottom_item">
								<h2 class="statistic-counter">6</h2>
								<div class="separator_small"></div>
								<h5><em>No. of events</em></h5>
							</div>
						</div>
						<div  class="col-md-3">
							<div class="skill_bottom_item">
								<h2 class="statistic-counter">4</h2>
								<div class="separator_small"></div>
								<a href="techmember.php"><h5><em>Techicon members</em></h5></a>
							</div>
						</div>
					</div>
				</div>
				<!--End off row-->
			</div>
			<!--End off container -->
		</section>
		</div>