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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<link href="editor.css" type="text/css" rel="stylesheet"/>
	<script src="editor.js"></script>
	<script type="text/javascript">


		<?php if($this->session->flashdata('message')){ ?>
		toastr.success("<?php echo $this->session->flashdata('message'); ?>");
		<?php }  ?>



	</script>
</head>
<style>
	.list-group-item {

		padding: 5px 10px;
	}
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
    .ticket{
		background: #999999;
		color:#000000;
	}
	.ticket-list{
		float: none;
		margin: 0 auto 10px;
	}
	.tck-no{
		margin: 0
	}
	.tck-sub{
		padding-left: 10px;
	}
	button.close{
		margin-top: -27px;
	}
</style>
<body>
<div class="headerTicket">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">My Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">My Ticket List</li>
		</ol>
	</nav>
<!---->
</div>
<div class="container ">
	<?php if ( $this->session->flashdata( 'message' ) ) : ?>
	<div class="alert alert-success">
		<h4><?php echo $this->session->flashdata('message'); ?></h4>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
	</div>
		<?php endif; ?>
<?php
//print_r($tickets);

?>
	
<div class="col-md-8 ticket-list">
	<h4>My Tickets</h4>
	<?php foreach ($tickets['data'] as $value) {?>
	<a target="_blank" href="<?php echo  base_url() ?>index.php/ticket/getTicket/<?php echo $value['id'] ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
		<div>
			<div class="d-flex w-100 justify-content-between">
				<!-- <h5 class="h5 mb-3"></h5> -->
				<!-- <p class="tck-no"></p> -->
			</div>
			<p class="mb-1 tck-sub"><strong>#<?php echo $value['ticketNumber'] ?> </strong>-----> <?php echo $value['subject'] ?></p>
		</div>


	</a>

<?php }?>
</div>
</div>

</body>
</html>
