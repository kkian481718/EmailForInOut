
		<?php
			if(isset($_GET['email']) && isset($_GET['subject']) && isset($_GET['message']))
			{
				$email = $_GET['email'];
				$subject = $_GET['subject'];
				$msg = $_GET['message'] . "\n\n" . 'Sent By: shahrulnizam.com';
				mail($email, $subject, $msg);	// mail(to, subject, body)
				echo 'Thank you for your email';
				echo '<form action="http://shahrulnizam.com/web/email.php">';
				echo '<input type="submit" value="Back">';
				echo '</form>';
			}
			else
			{
				echo '<form action="http://shahrulnizam.com/web/email.php">';
				echo 'To:<br>';
				echo '<input type="text" name="email">';
				echo '<br>';
				echo 'Subject:<br>';
				echo '<input type="text" name="subject">';
				echo '<br>';
				echo 'Message:<br>';
				echo '<input type="text" name="message">';
				echo '<br>';
				echo '<input type="submit" value="Submit">';
				echo '</form>';
			}		
		?>
