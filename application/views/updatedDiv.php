<div class="table-responsive">
	<table class="table table-striped table-hover tbl-CRUD">
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
				<th>IP Address</th>
				<th>Action</th> -->
			</tr>
		</thead>
		<tbody>
			<?php foreach ($user_info as $r) : ?>
			<tr data-id="<?= $r->id ?>">
				<td data-column="firstname" class="fn"><?= $r->firstname ?></td>
				<td data-column="lastName" class="ln"><?= $r->lastName?></td>
				<td data-column="username" class="un"><?= $r->username ?></td>
				<!-- <td data-column="gender" class="gd"><?= $r->gender ?></td>
				<td data-column="country" class="ct"><?= $r->country ?></td>
				<td data-column="postcode" class="pc"><?= $r->postcode ?></td>
				<td data-column="email" class="em"><?= $r->email ?></td>
				<td data-column="birthdate" class="bd"><?= date('M d, Y', strtotime($r->birthdate)) ?></td>
				<td data-column="registration_date" class="rd"><?= date('M d, Y', strtotime($r->registration_date)) ?></td>
				<td data-column="ip_address" class="ip"><?= $r->ip_address ?></td> -->
				<td>
					<button type="button" class="btn btn-primary btn-xs update" data-id="<?= $r->id ?>">Update</button>&nbsp;
					<button type="button" class="btn btn-warning btn-xs delete" data-id="<?= $r->id ?>">Delete</button>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>