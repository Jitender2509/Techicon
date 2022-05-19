<?php
/*$date = "20-02-19";
$date_compare = date('y-m-d');
if($date_compare > $date)
{
    header ('location:index.php');
}
?>
<?php */
if(isset($_GET['val']))
{
    echo "<script>alert('Registration Done');</script>";
}
?>
<?php include "function.php";

register();
?>

<?php include "includes/header.php"; ?>
<style type="text/css">
/* The container */
.container_1 {
	color: black;
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 13px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

/* Hide the browser's default checkbox */
.container_1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
   border-radius: 25px; border-radius: 25px;

}

/* Create a custom checkbox */
.checkmark_1 {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container_1:hover input ~ .checkmark_1 {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container_1 input:checked ~ .checkmark_1 {
  background-color: #009bb7;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark_1:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container_1 input:checked ~ .checkmark_1:after {
  display: block;
}

/* Style the checkmark/indicator */
.container_1 .checkmark_1:after {
  left: 7.5px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.page-content {
background-image: -webkit-linear-gradient( 136deg, rgb(14, 65, 74) 0%, rgb(136, 211, 224) 100%);
}
.form-v10-content .form-detail .form-left h2 {
	color: #009bb7;
}
.form-v10-content .form-detail .form-right {
	width: 100%;
	background-color: #009bb7;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
}
</style>

<!-- Navigation -->
<?php include "includes/nav.php"; ?>


<body class="form-v10">
    <br>
   
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="" method="post" id="myform">
				<div class="form-left">
				    
					<h2>General Infomation</h2>
				
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>

					<div class="form-row">
						<input type="text" name="college" class="college" id="college" placeholder="Enter College Name" required>
					</div>

					<!--<div class="form-row">
						<select name="technology" required="required">
						    <option value="">Select Your Technology</option>
						    <option value="JavaScript">JavaScript</option>
						    <option value="Java">Java</option>
						    <option value="Advance Java">Advance Java</option>
						    <option value="Php">Php</option>
						    <option value="Python">Python</option>
						    <option value="Web Designing">Web Designing</option>
						    <option value="Graphic Designing">Graphic Designing</option>
						    <option value="Angular">Angular</option>
						    <option value="C/C++">C/C++</option>
						    <option value="Android">Android</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>-->

					<div class="form-row">
						<select name="member" required>
						     <option value="">Number Of Team Members</option>
							    <option value="1">1</option>
							    <option value="2">2</option>
							    <option value="4">4</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
				
					<center><h3 style="color:#009bb7; font-weight: bold;">Select Technical & Non-Technical Events</h3></center>
					<br>
					<div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                					<div class="form-row form-row-6">
                					
                						<label class="container_1">Graphic Designing
                							  <input type="checkbox" name="check[]" value="Graphic Designing" >
                							  <span class="checkmark_1"></span>
                						</label>
                						
                						<label class="container_1">Web Designing
                							  <input  type="checkbox" name="check[]" value="Web Designing" >
                							  <span class="checkmark_1"></span>
                						</label>
                						<label class="container_1">Debugging
                							  <input type="checkbox" name="check[]" value="Debugging" >
                							  <span class="checkmark_1"></span>
                							</label>
                						<label class="container_1">Gaming Zone
                							  <input type="checkbox" name="check[]" value="Gaming Zone" >
                							  <span class="checkmark_1"></span>
                						</label>
                						<label class="container_1">Video Editing
                							  <input type="checkbox" name="check[]" value="Video Editing" >
                							  <span class="checkmark_1"></span>
                						</label>
                						<label class="container_1">App & Web Development
                							  <input type="checkbox" name="check[]" value="App & Web Development">
                							  <span class="checkmark_1"></span>
                						</label>
                					</div>
                </div>
                  <div class="col-md-6">
                					<div class="form-row form-row-6">
                					
                						<label class="container_1">Face Painting
                							  <input type="checkbox" name="check[]" value="Face Painting" >
                							  <span class="checkmark_1"></span>
                						</label>
                						
                						<label class="container_1">Standup Comedy
                							  <input  type="checkbox" name="check[]" value="Standup Comedy" >
                							  <span class="checkmark_1"></span>
                						</label>
                						<label class="container_1">Wall Collage
                							  <input type="checkbox" name="check[]" value="Wall Collage" >
                							  <span class="checkmark_1"></span>
                							</label>
                						<label class="container_1">Ad Mad Show
                							  <input type="checkbox" name="check[]" value="Ad Mad Show" >
                							  <span class="checkmark_1"></span>
                						</label>
                						<label class="container_1">Hand Art
                							  <input type="checkbox" name="check[]" value="Hand Art  " >
                							  <span class="checkmark_1"></span>
                						</label><br>
                						<label class="container_1">Rangoli
                							  <input type="checkbox" name="check[]" value="Rangoli">
                							  <span class="checkmark_1"></span>
                						</label>
                					</div>
                		</div>			
					</div>	
				</div>
				
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>

					<div class="form-row">
						<input type="email" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>

					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="Code +" value="+91" readonly required>
						</div>
						<div class="form-row form-row-2">
							<input type="tel" name="phone" class="phone" id="phone" placeholder="Phone Number"  pattern="[6-9]{1}[0-9]{9}"  required>
						</div>
					</div>
					
					<div class="form-row">
						<input type="text" name="address" class="address" id="address" placeholder="Address" required>
					</div>

					<div class="form-row">
						<input type="text" name="city" class="city" id="city" placeholder="City" required>
					</div>

					<div class="form-row">
						<input type="text" name="state" class="state" id="state" placeholder="State" required>
					</div>

				
				
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


<?php include "includes/footer.php"; ?>