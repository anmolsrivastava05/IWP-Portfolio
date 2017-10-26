<?php
include('config.php');
if(isset($_POST)){
	if($_POST['type']=="exp"){
		$exId = $_POST['ex_id'];
		$sql = "DELETE FROM `experience` WHERE `id` = $exId";

		if ($conn->query($sql) === TRUE) {
			echo "<h3>Experience deleted successfully! <a href='experience.php'>Go back</a></h3>";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}

	}

	else if($_POST['type']=="edu"){
		$exId = $_POST['ed_id'];
		$sql = "DELETE FROM `education` WHERE `id` = $exId";

		if ($conn->query($sql) === TRUE) {
			echo "<h3>Education entry deleted successfully! <a href='education.php'>Go back</a></h3>";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
	}

	else if($_POST['type']=="ref"){
		$exId = $_POST['ref_id'];
		$sql = "DELETE FROM `refer` WHERE `id` = $exId";

		if ($conn->query($sql) === TRUE) {
			echo "<h3>Reference entry deleted successfully! <a href='references.php'>Go back</a></h3>";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
	}
	else if($_POST['type']=="org"){
		$exId = $_POST['org_id'];
		$sql = "DELETE FROM `organisations` WHERE `id` = $exId";

		if ($conn->query($sql) === TRUE) {
			echo "<h3>Organisation entry deleted successfully! <a href='organisations.php'>Go back</a></h3>";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
	}

	$conn->close();
}