<!DOCTYPE html>
<html>
<head>
<title>Pebblemark Contact Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	background-color: #244fbf;
	color: white;
	font-family: Arial, Helvetica, sans-serif;
}

* {
	box-sizing: border-box;
}

input[type=text], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
}

input[type=email], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
}

input[type=number], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
}

input[type=submit] {
	background-color: #04AA6D;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #45a049;
}

.container {
	border-radius: 5px;
	padding: 20px;
}
</style>
</head>
<body>
	<center>
		<h1>
			<u>Pebblemark Contact Form</u>
		</h1>
	</center>
	<div class="container">
		<form action="{{route('contactSubmit')}}" method='post'>
			@csrf <label for="fname">Name</label> <input type="text" id="name"
				name="name" placeholder="Your name.."> <label for="email">Email</label>
			<input type="email" id="email" name="email"
				placeholder="Your email.."> <label for="contact">Contact No.</label>
			<input type="number" id="contact_no" name="contact_no"
				placeholder="Your contact number.." > <label for="message">Message</label>
			<textarea id="subject" name="message" placeholder="Write something.."
				style="height: 200px"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>
