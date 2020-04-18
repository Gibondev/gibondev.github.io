<?php 

	if (isset($_POST['btn-send'])) 
	{
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$subject = $_POST['Subject'];
		$Msg = $_POST['msg'];

		if (empty($name) || empty($email) || empty($subject) || empty($Msg)) 
		{
			header('location:index.php?error');
		}
		else
		{
			$to = "gibondev@gmail.com";

			if(mail($to,$Subject,$Msg,$Email))
			{
				header("location:index.php?success");
			}
		}
	}
	else
	{
		header("location:index.php");
	}



 ?>