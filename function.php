<?php

function register()
{
if(isset($_POST['register'])) 
	{
	    if(!empty($_POST['check']))
	    {
	        
	    $checkBox = implode(',', $_POST['check']);
	        
	    require ('includes/db_config.php');

		$date = date('d-F-Y');
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$college = $_POST['college'];
		$technology = $checkBox;
		$member = $_POST['member'];
		$your_email = $_POST['your_email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		
		$sqli = "select * from register where your_email = '$your_email'";
		$sqli_run = mysqli_query($connection,$sqli);

		if(mysqli_num_rows($sqli_run) > 0)
		{
			echo "<script>alert('Sorry... Email Already Exists');</script>";
			
		}
		else
        {
    		$insert_query = "insert into register (first_name,last_name,college,technology,member,your_email,phone,address,city,state,date) values ('$first_name','$last_name','$college','$technology','$member','$your_email',$phone,'$address','$city','$state','$date')";
            $query_run = mysqli_query($connection,$insert_query);
    		/*echo $query_run;*/
    		if(!$query_run)
                {
                    die('QUERY FAILED' . mysqli_error($connection));
                }
                else
                {
                	echo "<script>alert('Registration Done');</script>";
                	
                    session_start();
                    $_SESSION['email'] = $your_email;
                    $_SESSION['name'] = $first_name;
                    $_SESSION['name1'] = $last_name;
                    header ('location:../sendmail.php');
                }
        }
	        
	    }
	    else
	    {
	        echo "<script>alert('Please Select At Least One Event!');</script>";
	    }

		
    }
}

function contact()
{
    if(isset($_POST['contact']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $date = date('d-F-Y');
        
       
        
        require ('includes/db_config.php');
        
        $query_contact = "insert into contact (name,email,phone,message,date) values ('$name','$email',$phone,'$message','$date')";
        $query_run = mysqli_query($connection,$query_contact);
        if(!$query_run)
            {
                die('QUERY FAILED' . mysqli_error($connection));
            }
            else
            {
            	echo "<script>alert('Message Send');</script>";
            }
        
    }
}
?>