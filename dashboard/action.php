<?php
session_start();
include_once('conn.php');
$con=$GLOBALS['connection'];

if(isset($_POST['signinbtn'])){
   
    session_unset();
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$query = "SELECT * FROM user WHERE user='$user'";
		$query_run = mysqli_query($con, $query);
		$count = mysqli_num_rows($query_run);
			            if($count==0){
			                $_SESSION['status'] = "Oops! Something went wrong! User NOT Found!";
                            header('location: login.php');
			            }
        if($query_run){
            while($row=mysqli_fetch_assoc($query_run)){
		    if($row['pass']==$pass){
		        $_SESSION['pass'] = $pass;
                $_SESSION['user']=$user;

            header('location: dashboard.php');
		    }else{
		        $_SESSION['status'] = "Oops! Something went wrong! Please recheck the password and try again!";
                            header('location: login.php');
		    }
		    
		}
    	
                    $count = mysqli_num_rows($query_run);
			            if($count==0){
			                $_SESSION['status'] = "Oops! Something went wrong! Please recheck the credentials and try again!";
                            header('location: login.php');
			            }
            
        }
        else {
            $_SESSION['status'] = "Oops! Something went wrong! Please recheck the credentials and try again!";
            header('location: login.php'); 
        }
}

if(isset($_POST['signupbtn'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$pin=$_POST['pin'];
 		$query = "INSERT INTO user (user, pass, pin) VALUES ('$user', '$pass', '$pin')";
        $query_run = mysqli_query($con, $query);
    
        if($query_run){
            $_SESSION['success'] = "User Profile Added";
            $_SESSION['user']=$user;
            $_SESSION['pin']=$pin;
            header('location: register.php');
        }
        else {
            $_SESSION['status'] = "Oops! Something went wrong! User Profile NOT Added";
            header('location: signup.php'); 
        }
}

if(isset($_POST['registerbtn'])){
		$user=$_SESSION['user'];
		$mob=$_POST['mob'];
		$expsalary=$_POST['expsalary'];
		$email=$_POST['email'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$e1=$_POST['e1'];
		$ed1=$_POST['ed1'];
		$e2=$_POST['e2'];
		$ed2=$_POST['ed2'];
		$p1=$_POST['p1'];
		$pd1=$_POST['pd1'];
		$p2=$_POST['p2'];
		$pd2=$_POST['pd2'];
		$p3=$_POST['p3'];
		$pd3=$_POST['pd3'];
		$a1=$_POST['a1'];
		$a2=$_POST['a2'];
		$a3=$_POST['a3'];
		$a4=$_POST['a4'];
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$s4=$_POST['s4'];
		$skills=$_POST['skills'];
		$job1=$_POST['job1'];
		$jobd1=$_POST['jobd1'];
		$job2=$_POST['job2'];
		$jobd2=$_POST['jobd2'];
		$job3=$_POST['job3'];
		$jobd3=$_POST['jobd3'];
		$job4=$_POST['job4'];
		$jobd4=$_POST['jobd4'];
		$about=$_POST['about'];
 		$query = "UPDATE user SET mob='$mob', email='$email', dob='$dob', gender='$gender', name='$name', expsalary='$expsalary' WHERE user='$user' ";
    	$query_run = mysqli_query($con, $query);

    	$query2 = "UPDATE user SET job1='$job1', jobd1='$jobd1', job2='$job2', jobd2='$jobd2', job3='$job3', jobd3='$jobd3', job4='$job4', jobd4='$jobd4' WHERE user='$user' ";
    	$query_run2 = mysqli_query($con, $query2);

    	$query3 = "UPDATE user SET p1='$p1', pd1='$pd1', p2='$p2', pd2='$pd2', p3='$p3', pd3='$pd3' WHERE user='$user' ";
    	$query_run3 = mysqli_query($con, $query3);

    	$query4 = "UPDATE user SET e1='$e1', ed1='$ed1', e2='$e2', ed2='$ed2', about='$about' WHERE user='$user' ";
    	$query_run4 = mysqli_query($con, $query4);

    	$query5 = "UPDATE user SET a1='$a1', a2='$a2', a3='$a3', a4='$a4' WHERE user='$user' ";
    	$query_run5 = mysqli_query($con, $query5);

    	$query6 = "UPDATE user SET s1='$s1', s2='$s2', s3='$s3', s4='$s4', skills='$skills' WHERE user='$user' ";
    	$query_run6 = mysqli_query($con, $query6);
    
        if($query_run && $query_run2 && $query_run3 && $query_run4 && $query_run5 && $query_run6){
            $_SESSION['updates'] = "User Profile Details Updated Successfully!";
            
            header('location: dashboard.php');
        }
        else {
            $_SESSION['status'] = "Oops! Something went wrong! User Profile NOT Added";
            header('location: register.php'); 
        }
}


if(isset($_POST['userupdatebtn'])){
		$user=$_SESSION['user'];
		$mob=$_POST['mob'];
		$email=$_POST['email'];
		$name=$_POST['name'];
		$e1=$_POST['e1'];
		$ed1=$_POST['ed1'];
		$e2=$_POST['e2'];
		$ed2=$_POST['ed2'];
		$p1=$_POST['p1'];
		$pd1=$_POST['pd1'];
		$p2=$_POST['p2'];
		$pd2=$_POST['pd2'];
		$p3=$_POST['p3'];
		$pd3=$_POST['pd3'];
		$a1=$_POST['a1'];
		$a2=$_POST['a2'];
		$a3=$_POST['a3'];
		$a4=$_POST['a4'];
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$s4=$_POST['s4'];
		$skills=$_POST['skills'];
		$job1=$_POST['job1'];
		$jobd1=$_POST['jobd1'];
		$job2=$_POST['job2'];
		$jobd2=$_POST['jobd2'];
		$job3=$_POST['job3'];
		$jobd3=$_POST['jobd3'];
		$job4=$_POST['job4'];
		$jobd4=$_POST['jobd4'];
		$about=$_POST['about'];
 		$query = "UPDATE user SET mob='$mob', email='$email', name='$name' WHERE user='$user' ";
    	$query_run = mysqli_query($con, $query);

    	$query2 = "UPDATE user SET job1='$job1', jobd1='$jobd1', job2='$job2', jobd2='$jobd2', job3='$job3', jobd3='$jobd3', job4='$job4', jobd4='$jobd4' WHERE user='$user' ";
    	$query_run2 = mysqli_query($con, $query2);

    	$query3 = "UPDATE user SET p1='$p1', pd1='$pd1', p2='$p2', pd2='$pd2', p3='$p3', pd3='$pd3' WHERE user='$user' ";
    	$query_run3 = mysqli_query($con, $query3);

    	$query4 = "UPDATE user SET e1='$e1', ed1='$ed1', e2='$e2', ed2='$ed2', about='$about' WHERE user='$user' ";
    	$query_run4 = mysqli_query($con, $query4);

    	$query5 = "UPDATE user SET a1='$a1', a2='$a2', a3='$a3', a4='$a4' WHERE user='$user' ";
    	$query_run5 = mysqli_query($con, $query5);

    	$query6 = "UPDATE user SET s1='$s1', s2='$s2', s3='$s3', s4='$s4', skills='$skills' WHERE user='$user' ";
    	$query_run6 = mysqli_query($con, $query6);
    
        if($query_run && $query_run2 && $query_run3 && $query_run4 && $query_run5 && $query_run6){
            $_SESSION['status'] = "User Profile Details Updated Successfully!";
            
            header('location: profile.php');
        }
        else {
            $_SESSION['status'] = "Oops! Something went wrong! User Profile NOT Added";
            header('location: profile.php'); 
        }
}



if(isset($_POST['rupdatebtn'])){
		$user=$_SESSION['user'];
		$mob=$_POST['mob'];
		$id=$_POST['id'];
		$email=$_POST['email'];
		$name=$_POST['name'];
		$e1=$_POST['e1'];
		$ed1=$_POST['ed1'];
		$e2=$_POST['e2'];
		$ed2=$_POST['ed2'];
		$p1=$_POST['p1'];
		$pd1=$_POST['pd1'];
		$p2=$_POST['p2'];
		$pd2=$_POST['pd2'];
		$p3=$_POST['p3'];
		$pd3=$_POST['pd3'];
		$a1=$_POST['a1'];
		$a2=$_POST['a2'];
		$a3=$_POST['a3'];
		$a4=$_POST['a4'];
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$s4=$_POST['s4'];
		$skills=$_POST['skills'];
		$job1=$_POST['job1'];
		$jobd1=$_POST['jobd1'];
		$job2=$_POST['job2'];
		$jobd2=$_POST['jobd2'];
		$job3=$_POST['job3'];
		$jobd3=$_POST['jobd3'];
		$job4=$_POST['job4'];
		$jobd4=$_POST['jobd4'];
		$about=$_POST['about'];
 		$query = "UPDATE resume SET mob='$mob', email='$email', name='$name' WHERE id='$id' ";
    	$query_run = mysqli_query($con, $query);

    	$query2 = "UPDATE resume SET job1='$job1', jobd1='$jobd1', job2='$job2', jobd2='$jobd2', job3='$job3', jobd3='$jobd3', job4='$job4', jobd4='$jobd4' WHERE id='$id' ";
    	$query_run2 = mysqli_query($con, $query2);

    	$query3 = "UPDATE resume SET p1='$p1', pd1='$pd1', p2='$p2', pd2='$pd2', p3='$p3', pd3='$pd3' WHERE id='$user' ";
    	$query_run3 = mysqli_query($con, $query3);

    	$query4 = "UPDATE resume SET e1='$e1', ed1='$ed1', e2='$e2', ed2='$ed2', about='$about' WHERE id='$id' ";
    	$query_run4 = mysqli_query($con, $query4);

    	$query5 = "UPDATE resume SET a1='$a1', a2='$a2', a3='$a3', a4='$a4' WHERE id='$id' ";
    	$query_run5 = mysqli_query($con, $query5);

    	$query6 = "UPDATE resume SET s1='$s1', s2='$s2', s3='$s3', s4='$s4', skills='$skills' WHERE id='$id' ";
    	$query_run6 = mysqli_query($con, $query6);
    
        if($query_run && $query_run2 && $query_run3 && $query_run4 && $query_run5 && $query_run6){
            $_SESSION['status'] = "User Profile Details Updated Successfully!";
            
            header("location: resumeedit.php?id=" . $id);
        }
        else {
            $_SESSION['status'] = "Oops! Something went wrong! User Profile NOT Added";
            header("location: resumeedit.php?id=" . $id); 
        }
}



if(isset($_POST['pupdatebtn'])){
		$user=$_SESSION['user'];
		$mob=$_POST['mob'];
		$id=$_POST['id'];
		$email=$_POST['email'];
		$name=$_POST['name'];
		$e1=$_POST['e1'];
		$ed1=$_POST['ed1'];
		$e2=$_POST['e2'];
		$ed2=$_POST['ed2'];
		$p1=$_POST['p1'];
		$pd1=$_POST['pd1'];
		$p2=$_POST['p2'];
		$pd2=$_POST['pd2'];
		$p3=$_POST['p3'];
		$pd3=$_POST['pd3'];
		$a1=$_POST['a1'];
		$a2=$_POST['a2'];
		$a3=$_POST['a3'];
		$a4=$_POST['a4'];
		$s1=$_POST['s1'];
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$s4=$_POST['s4'];
		$skills=$_POST['skills'];
		$job1=$_POST['job1'];
		$jobd1=$_POST['jobd1'];
		$job2=$_POST['job2'];
		$jobd2=$_POST['jobd2'];
		$job3=$_POST['job3'];
		$jobd3=$_POST['jobd3'];
		$job4=$_POST['job4'];
		$jobd4=$_POST['jobd4'];
		$about=$_POST['about'];
 		$query = "UPDATE portfolio SET mob='$mob', email='$email', name='$name' WHERE id='$id' ";
    	$query_run = mysqli_query($con, $query);

    	$query2 = "UPDATE portfolio SET job1='$job1', jobd1='$jobd1', job2='$job2', jobd2='$jobd2', job3='$job3', jobd3='$jobd3', job4='$job4', jobd4='$jobd4' WHERE id='$id' ";
    	$query_run2 = mysqli_query($con, $query2);

    	$query3 = "UPDATE portfolio SET p1='$p1', pd1='$pd1', p2='$p2', pd2='$pd2', p3='$p3', pd3='$pd3' WHERE id='$user' ";
    	$query_run3 = mysqli_query($con, $query3);

    	$query4 = "UPDATE portfolio SET e1='$e1', ed1='$ed1', e2='$e2', ed2='$ed2', about='$about' WHERE id='$id' ";
    	$query_run4 = mysqli_query($con, $query4);

    	$query5 = "UPDATE portfolio SET a1='$a1', a2='$a2', a3='$a3', a4='$a4' WHERE id='$id' ";
    	$query_run5 = mysqli_query($con, $query5);

    	$query6 = "UPDATE portfolio SET s1='$s1', s2='$s2', s3='$s3', s4='$s4', skills='$skills' WHERE id='$id' ";
    	$query_run6 = mysqli_query($con, $query6);
    
        if($query_run && $query_run2 && $query_run3 && $query_run4 && $query_run5 && $query_run6){
            $_SESSION['status'] = "User Profile Details Updated Successfully!";
            
            header("location: portfolioedit.php?id=" . $id);
        }
        else {
            $_SESSION['status'] = "Oops! Something went wrong! User Profile NOT Added";
            header("location: portfolioedit.php?id=" . $id); 
        }
}



if(isset($_POST['forgotbtn'])){
		$user=$_POST['user'];
		$pin=$_POST['pin'];
		$pass="";
 		$query = "SELECT * FROM user WHERE user='$user' AND pin='$pin'";
    	$query_run = mysqli_query($con, $query);
    	 if (mysqli_num_rows($query_run) > 0) {
    	     
    	    if($query_run){
            while($row=mysqli_fetch_assoc($query_run)){
		    if($row['pin']==$pin){
		        $pass=$row['pass'];
		        $_SESSION['pass'] = $pass;
                $_SESSION['user']=$user;
                $_SESSION['forgot']=$pass;
                
                $to = $row['email'];
                $subject = "Your Friday Password";
                $txt = "Your Friday Password is " . $pass . ". Please Remember it next time!";
                $headers = "From: mail@livestats.xyz" . "\r";
                
                mail($to,$subject,$txt,$headers);
            header('location: forgot.php');

		    }else{
		        $_SESSION['status'] = "Oops! Something went wrong! Please recheck the pin and try again!";
                            header('location: forgot.php');
		    }
        }
    	
    	}
    }else{
    	         $_SESSION['status'] = "Oops! Something went wrong! Please recheck the pin and try again!";
                            header('location: forgot.php');
    	    }
    	
    	
    	
        
}


if(isset($_POST['portfolionewbtn'])){
		$user=$_SESSION['user'];
		$tname=$_POST['tname'];
		$type=$_POST['type'];
		$linkh=$_POST['linkh'];
		
 		$query = "INSERT INTO portfolio (name, mob, email, job1, job2, job3, job4, jobd1, jobd2, jobd3, jobd4, pd1, pd2, pd3, p1, p2, p3, a1, a2, a3, a4, s1, s2, s3, s4, skills, about, gender, dob, e1, e2, ed1, ed2, expsalary) SELECT name, mob, email, job1, job2, job3, job4, jobd1, jobd2, jobd3, jobd4, pd1, pd2, pd3, p1, p2, p3, a1, a2, a3, a4, s1, s2, s3, s4, skills, about, gender, dob, e1, e2, ed1, ed2, expsalary FROM user WHERE user='$user' ";
    	$query_run = mysqli_query($con, $query);
    	if(!$query_run){
    	    die('Query Failed' . mysqli_error($con));
    	}
    	$last_id = mysqli_insert_id($con);
    	$lynk=$linkh . $last_id;
    	$query2 = "UPDATE portfolio SET type='$type', link='$lynk', user='$user', tname='$tname' WHERE id='$last_id' ";
    	$query_run2 = mysqli_query($con, $query2);

    	
    
        if($query_run && $query_run2){
            $_SESSION['updates'] = "Profile Generated! <a href='" . $lynk ."'>Click here to visit</a>";
            
            header('location: portfolio_new.php');
        }
        else {
            $_SESSION['updates'] = "Oops! Something went wrong! User Profile NOT Added";
            header('location: portfolio_new.php'); 
        }
}

if(isset($_POST['resumenewbtn'])){
		$user=$_SESSION['user'];
		$tname=$_POST['tname'];
		$type=$_POST['type'];
		$linkh=$_POST['linkh'];
		
 		$query = "INSERT INTO resume (name, mob, email, job1, job2, job3, job4, jobd1, jobd2, jobd3, jobd4, pd1, pd2, pd3, p1, p2, p3, a1, a2, a3, a4, s1, s2, s3, s4, skills, about, gender, dob, e1, e2, ed1, ed2, expsalary) SELECT name, mob, email, job1, job2, job3, job4, jobd1, jobd2, jobd3, jobd4, pd1, pd2, pd3, p1, p2, p3, a1, a2, a3, a4, s1, s2, s3, s4, skills, about, gender, dob, e1, e2, ed1, ed2, expsalary FROM user WHERE user='$user' ";
    	$query_run = mysqli_query($con, $query);
    	if(!$query_run){
    	    die('Query Failed' . mysqli_error($con));
    	}
    	$last_id = mysqli_insert_id($con);
    	$lynk=$linkh . $last_id;
    	$query2 = "UPDATE resume SET type='$type', link='$lynk', user='$user', tname='$tname' WHERE id='$last_id' ";
    	$query_run2 = mysqli_query($con, $query2);

    	
    
        if($query_run && $query_run2){
            $_SESSION['updates'] = "Profile Generated! <a href='" . $lynk ."'>Click here to visit</a>";
            
            header('location: resume_new.php');
        }
        else {
            $_SESSION['updates'] = "Oops! Something went wrong! User Profile NOT Added";
            header('location: resume_new.php'); 
        }
}

?>