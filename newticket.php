<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
	$firstName = ($this->session->userdata['logged_in']['name']);
	$email = ($this->session->userdata['logged_in']['email']);
	$id = ($this->session->userdata['logged_in']['id']);
	$phone = ($this->session->userdata['logged_in']['phone']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="editor.css" type="text/css" rel="stylesheet"/>
	<script src="editor.js"></script>

</head>
<style>
	body{
		background-color: #f3f5f7 !important;
	}
	.ticket{
		border: 1px solid #fff;
		background: #fff;
		float: none;
		margin: 5px auto 15px;
		height: 100%;
	}
	/*.headerTicket{
		background-color: #007bff;
		}*/
		.breadcrumb {
			padding: 15px 30px;
			margin-bottom: 20px;
			list-style: none;
			background-color: #007bff;
			border-radius: 0;
			color:#fff;
		}
		.breadcrumb>.active {
			color: #fff;
		}
		a {
			color: #fff;
			text-decoration: none;
		}
		.hr-1{
			clear: both;
			border-top: 1px solid #cccccc;
		}
		#subject{
			height: 54px;
		}
	</style>
	<body>
		<div class="headerTicket">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page">New Ticket</li>
				</ol>
			</nav>
		</div>
		<div class="container ">
			<div class="col-md-10 ticket" >
				
				<h3 style="font-weight: bolder">Submit a  ticket</h3>
				<h4>Ticket Information :</h4>
				<form method="post" id="ticketForm" action="<?php echo base_url() ?>index.php/ticket/postTicket">
					<div class="form-group col-md-4">
						<label for="projectUrl">Department:</label>
						<select id="department" class="form-control" name="departmentId">
							<?php foreach($department['data'] as $value){?>
								<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
							<?php	} ?>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="projectUrl">Category:</label>
						<select id="category" class="form-control" name="category">
							<option value="Uppdate CI/CD Pipeline Configuration">Uppdate CI/CD Pipeline Configuration</option>
							<option value="DevSecOps Pipleline Setup">DevSecOps Pipleline Setup</option>
							<option value="Docker and Container">Docker and Container</option>
							<option value="Git Source Conyrol">Git Source Conyrol</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="projectUrl">Status:</label>
						<select id="category" class="form-control" name="priority">
							<option value="low">Low</option>
							<option value="high">High</option>
							<option value="medium">Medium</option>
						</select>
					</div>
						<div class="form-group col-md-6">
							<label for="subject">Subject:</label>
							<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
						</div>
						<div class="form-group col-md-6">
							<label for="form7">Description</label>
							<textarea id="form7" class="md-textarea form-control" rows="2" name="description"></textarea>
						</div>
						<hr class="hr-1">
						<h4>Contact Details :</h4>
						<div class="form-group col-md-4">
							<label for="projectUrl">Contact Name:</label>
							<input type="text" class="form-control" id="projectUrl" placeholder="" name="name" value="<?php echo $firstName; ?>">
						</div>
						<div class="form-group col-md-4">
							<label for="projectUrl">Email:</label>
							<input type="text" class="form-control" id="projectUrl" placeholder="" name="email" value="<?php echo $email; ?>">
						</div>
						<div class="form-group col-md-4">
							<label for="projectUrl">Phone:</label>
							<input type="text" class="form-control" id="projectUrl" placeholder="" name="phone" value="<?php echo $phone; ?>">
						</div>
						<div class="form-group col-md-12 text-center">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</body>
		</html>
