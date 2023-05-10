<?php

require "config.php";

use App\Pet;

$student_id = $_GET['id'];

$Pet = Pet::getById($student_id);
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
</head>
<body>
<h1>Edit Pet</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $Pet->getId(); ?>">
	<div>
		<label>Name</label>
		<input type="text" name="name" placeholder="Name" value="<?php echo $Pet->getName();?>" />	
	</div>
	<div>
		<label>Gender</label>
		<input type="text" name="gender" placeholder="Gender" value="<?php echo $Pet->getGender();?>" />	
	</div>
	<div>
		<label>Birth Date</label>
		<input type="date" name="birthdate" placeholder="Birth Date" value="<?php echo $Pet->getBirthdate();?>" />	
	</div>
	<div>
		<label>Owner</label>
		<input type="text" name="owner" placeholder="Owner" value="<?php echo $Pet->getOwner();?>" />	
	</div>
	<div>
		<label>Email</label>
		<input type="email" name="email" placeholder="user@example.com" value="<?php echo $Pet->getEmail();?>" />	
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="City, province" value="<?php echo $Pet->getAddress();?>" />	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="number" name="contact" placeholder="Phone Number" value="<?php echo $Pet->getContactNumber();?>" />	
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>