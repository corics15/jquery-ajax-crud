<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
		<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<title>jQuery AJAX CRUD</title>
	</head>
	<body>

		<div class="container">
			<div class="row">
				<h3>jQuery AJAX CRUD</h3>
				<div class="form-group">
					<button type="button" class="btn btn-info btn-sm">Create</button>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 main-div">
					<div class="table-responsive">
						<table class="table table-striped table-hover tbl-CRUD w100">
							<thead>
								<tr>
									<th>First</th>
									<th>Last</th>
									<th>Username</th>
									<!-- <th>Gender</th>
									<th>Country</th>
									<th>Postal Code</th>
									<th>Email</th>
									<th>DOB</th>
									<th>Registration Date</th>
									<th>IP Address</th> -->
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($user_info as $r) : ?>
								<tr>
									<td><?= $r->firstname ?></td>
									<td><?= $r->lastName?></td>
									<td><?= $r->username ?></td>
									<!-- <td><?= $r->gender ?></td>
									<td><?= $r->country ?></td>
									<td><?= $r->postcode ?></td>
									<td><?= $r->email ?></td>
									<td><?= date('M d, Y', strtotime($r->birthdate)) ?></td>
									<td><?= date('M d, Y', strtotime($r->registration_date)) ?></td>
									<td><?= $r->ip_address ?></td> -->
									<td>
										<button type="submit" class="btn btn-primary btn-xs update" data-id="<?= $r->id ?>">Update</button>&nbsp;
										<button type="button" class="btn btn-warning btn-xs delete" data-id="<?= $r->id ?>">Delete</button>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-md-4 sub-div none">
					<div class="panel panel-default">
						<div class="panel-heading">Update</div>
						<div class="panel-body"></div>
					</div>
				</div>
			</div>
		</div>

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	    <script src="<?= base_url('assets/js/main.js') ?>"></script>
  </body>
</html>