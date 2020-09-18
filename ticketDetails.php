<html>


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
	.list-group-item {

		width: 64%;
	}
	body{
		background-color: #f3f5f7 !important;
	}
	.ticket{
		border:1px solid #fff;
		background: #fff;
	}
	.breadcrumb {
		padding: 15px 30px;
		margin-bottom: 20px;
		list-style: none;
		background-color: #007bff;
		border-radius: 4px;
		color:#fff;
	}
	.breadcrumb>.active {
		color: #fff;
	}
	a {
		color: #fff;
		text-decoration: none;
	}
    .ticket{
		background: #999999;
		color:#000000;
	}
	.panel-success>.panel-heading {
		color: #3c763d;
		background-color: #ccc !important;
		border-color: #d6e9c6;
	}
</style>
<body>
<div class="headerTicket">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Ticket Info</li>
		</ol>
	</nav>

</div>
<div class="container ">
<!--	--><?php //if ( $this->session->flashdata( 'message' ) ) : ?>
<!--		<h5 style="color:green">--><?php //echo $this->session->flashdata( 'message' ); ?><!--</h5>-->
<!--	--><?php //endif; ?>
<?php


?>


	<a style="font-weight:bolder;color: #000;text-decoration: none" href="<?php echo base_url() ?>index.php/ticket/allTickets/<?php echo $ticketDetails['contactId'] ?> ">My Ticket List</a>


	<div class="row panel panel-success" style="margin-top:2%;">
		<div class="panel-heading lead">
			<div class="row">
				<div class="col-lg-8 col-md-8"><i class="fa fa-ticket"></i> Ticket Details</div>
				<div class="col-lg-4 col-md-4 text-right">

				</div>
			</div>
		</div>
		<div class="panel-body">



			<div class="row">
				<div class="col-lg-12 col-md-12">

					<div class="row">

						<div class="col-lg-9 col-md-9">


							<div class="tab-content">
								<div id="Summery" class="tab-pane fade in active">

									<div class="table-responsive panel">
										<table class="table">
											<tbody>

											<tr>
												<td class="text-success"><i class="fa fa-ticket"></i> Ticket Number</td>
												<td>#<?php echo $ticketDetails['ticketNumber'] ?></td>
											</tr>
											<tr>
												<td class="text-success"><i class="fa fa-bars"></i> Subject</td>
												<td><?php echo $ticketDetails['subject'] ?></td>
											</tr>
											<tr>
												<td class="text-success"><i class="fa fa-book"></i> Description</td>
												<td><?php echo $ticketDetails['description'] ?></td>
											</tr>
											<tr>
												<td class="text-success"><i class="fa fa-group"></i> Category</td>
												<td><?php echo $ticketDetails['category'] ?></td>
											</tr>
											<tr>
												<td class="text-success"><i class="fa fa-tasks"></i> Priority</td>
												<td><?php echo $ticketDetails['priority'] ?></td>
											</tr>

											<tr>
												<td class="text-success"><i class="fa fa-user"> </i> Created By </td>
												<td>You </td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>





							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- /.table-responsive -->

		</div>
	</div>



	<br>
</div>

</body>
</html>
