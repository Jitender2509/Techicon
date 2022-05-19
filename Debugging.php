<?php
            require ('includes/db_config.php');
            if(isset($_POST['download']))
            {   
            	$your_email = $_POST['your_email'];


            	$check = "SELECT * FROM register WHERE your_email = '$your_email'";
            	$check_run = mysqli_query($connection,$check);
            	$array = mysqli_fetch_array($check_run);

            	if(empty($array[0]))
            	{
            		echo "<script>alert('Invalid Email');</script>";
            	}
            	elseif ($_POST['select']=='c') 
            	{
            	$path = 'debug/c.txt';
				if(file_exists($path))
				{
				$e = explode('.', $path);
				$file_name = $e[0]; 
				$extension = $e[1];
				header('Content-type: application/'. $extension);
				header('Content-Disposition: attachment; filename="'. $file_name .'.'. $extension .'"');
				readfile($file_name .'.'. $extension);
				exit;
				}
            	}
            	elseif ($_POST['select']=='c++') 
            	{
            	$path = 'debug/c++.txt';
				if(file_exists($path))
				{
				$e = explode('.', $path);
				$file_name = $e[0]; 
				$extension = $e[1];
				header('Content-type: application/'. $extension);
				header('Content-Disposition: attachment; filename="'. $file_name .'.'. $extension .'"');
				readfile($file_name .'.'. $extension);
				exit;
				}
            	}
            	elseif ($_POST['select']=='java') 
            	{
            	$path = 'debug/java.txt';
				if(file_exists($path))
				{
				$e = explode('.', $path);
				$file_name = $e[0]; 
				$extension = $e[1];
				header('Content-type: application/'. $extension);
				header('Content-Disposition: attachment; filename="'. $file_name .'.'. $extension .'"');
				readfile($file_name .'.'. $extension);
				exit;
				}
            	}
  
            }
            ?>
<?php $page=3; ?>
<?php include "includes/header.php"; ?>
<!-- Navigation -->
<?php include "includes/nav.php"; ?>

  <link rel="stylesheet" href="css/css/style_graphic.css">
    <link rel="stylesheet" href="css/css/fonticons.css">

<!--<div style="background-color:#eee;" id="about" class="section wb">-->
		<section  class="about roomy-100" style="background-color: #f2f3f5;">
				<br><br>
   <div class="container" style="font-size:18px;">
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
                 <h1 style="font-weight: bold;">DEBUGGING</h1>        
				 <div class="separator_left"></div>
              <p style="color: black;text-align:justify;line-height:25px;">Debugging is the process of finding and resolving defects or problems within a computer program that prevent correct operation of computer software or a system.Debugging tactics can involve interactive debugging, control flow analysis, unit testing, integration testing, log file analysis, monitoring at the application or system level, memory dumps, and profiling.</p>
            </div>
            <hr>

            <!--<FORM action="" method="post">
            	<div class="form-group">
            		<input type="email" name="your_email" class="form-control" placeholder="Enter Your Registered Email">
            	</div>
            	<div class="form-group">
            		<select class="form-control" name="select">
            			<option disabled="disabled" selected="selected">Select Code</option>
            			<option value="c">C</option>
            			<option value="c++">C++</option>
            			<option value="java">Java</option>
            			
            		</select>
            	</div>
            	<button type="submit" class="btn btn-secondary btn-lg btn-block" name="download">DOWNLOAD CODE</button>
            </FORM>-->
         </div>
         <div class="col-md-6">
            <div class="right-box-pro wow fadeIn">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!--Accordion wrapper-->
               <div class="accordion md-accordion" style="padding: 1.00rem 1.00rem;" id="accordionEx" role="tablist" aria-multiselectable="true">
                  <!-- Accordion card --><br><br>
                  <div class="card">
                     <!-- Card header -->
                     <div class="card-header" role="tab" id="headingOne1">
                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                           aria-controls="collapseOne1">
                           <h5 class="mb-0"><img src="images/db.png">&nbsp; TESTING</h5>
                        </a>
                     </div>
                     <!-- Card body -->
                     <div id="collapseOne1" class="collapse show"  aria-labelledby="headingOne1" data-parent="#accordionEx">
                        <div class="card-body" style="text-align:justify;">
                         Software testing is an investigation conducted to provide stakeholders with information about the quality of the software product or service under test. Software testing can also provide an objective, independent view of the software to allow the business to appreciate and understand the risks of software implementation. Test techniques include the process of executing a program or application with the intent of finding software bugs (errors or other defects), and verifying that the software product is fit for use.                       
						 </div>
                     </div>
                  </div>
                  <!-- Accordion card -->
                  <!-- Accordion card -->
                  <!--<div class="card">
                     <!-- Card header -->
                    <!-- <div class="card-header" role="tab" id="headingTwo2">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                           aria-expanded="false" aria-controls="collapseTwo2">
                           <h5 class="mb-0">JAVA</h5>
                        </a>
                     </div>
                     <!-- Card body -->
                     <!--<div id="collapseTwo2" class="collapse"  data-parent="#accordionEx">
                        <div class="card-body">
                           Java is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible. It is intended to let application developers write once, run anywhere (WORA), meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but it has fewer low-level facilities than either of them...
                        </div>
                     </div>
                  </div>
                  <!-- Accordion card -->
                  <!-- Accordion card -->
                  <!--<div class="card">
                     <!-- Card header -->
                     <!--<div class="card-header" style="padding: 1.00rem 1.00rem;" role="tab" id="headingThree3">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                           aria-expanded="false" aria-controls="collapseThree3">
                           <h5 class="mb-0">C/C++</h5>
                        </a>
                     </div>
                     <!-- Card body -->
                     <!--<div id="collapseThree3" class="collapse"  aria-labelledby="headingThree3" data-parent="#accordionEx">
                        <div class="card-body">
                           C  is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, while a static type system prevents unintended operations. By design, C provides constructs that map efficiently to typical machine instructions and has found lasting use in applications previously coded in assembly language..<br>C++  is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation. It is almost always implemented as a compiled language, and many vendors provide C++ compilers, including the Free Software Foundation, LLVM, Microsoft, Intel, Oracle, and IBM, so it is available on many platforms.
                        </div>
                     </div>
                  </div>
                  <!-- Accordion card -->
               </div>
            </div>
            <!-- end media -->
         </div>
      </div>
   </div>
   <!--<br />
			<br />
			<hr />
			<br />
			<br />
   <!-- container 2 -->
  <!-- <div class="container">
				<div class="row">
					<div class="about_bottom_content">
						<div class="col-md-4">
							<div class="about_bottom_item m-top-20">
								<div class="ab_head">
									<div class="ab_head_icon">
										<i class="icofont icofont-fire-burn"></i>
									</div>
									<h6 class="m-top-20"> WE’RE CREATIVE</h6>
								</div>
								<p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing ealit, sed diaim nonummy nibsih euismod tincidiunt laorieet doloire magna diam aliquafm erat voluitpati. </p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="about_bottom_item m-top-20">
								<div class="ab_head">
									<div class="ab_head_icon">
										<i class="icofont icofont-speech-comments"></i>
									</div>
									<h6 class="m-top-20">WE'RE FRIENDLY</h6>
								</div>
								<p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing ealit, sed diaim nonummy nibsih euismod tincidiunt laorieet doloire magna diam aliquafm erat voluitpati. </p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="about_bottom_item m-top-20">
								<div class="ab_head">
									<div class="ab_head_icon">
										<i class="icofont icofont-heart"></i>
									</div>
									<h6 class="m-top-20">WE LOVE MINIMALISM</h6>
								</div>
								<p class="m-top-20">Lorem ipsum dolor sit amet, consectetuer adipiscing ealit, sed diaim nonummy nibsih euismod tincidiunt laorieet doloire magna diam aliquafm erat voluitpati. </p>
							</div>
						</div>
					</div>
				</div>
				End off row-->
			<!--</div>-->
			<!--End off container -->
			</section>
			<!--Skill Sections-->
	<?php include "includes/block.php"; ?>


<?php include "includes/footer.php"; ?>