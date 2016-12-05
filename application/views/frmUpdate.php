<form id="updateFrm">
	<div class="form-group">
		<label for="fn">First Name:</label>
		<input type="text" class="form-control" id="fn" name="fn" value="<?= $result->firstname ?>">
	</div>

	<div class="form-group">
		<label for="ln">Last Name:</label>
		<input type="text" class="form-control" id="ln" name="ln" value="<?= $result->lastName ?>">
	</div>

	<div class="form-group">
		<label for="un">Username:</label>
		<input type="text" class="form-control" id="un" name="un" value="<?= $result->username ?>">
	</div>

	<div class="form-group">
		<div class="pull-right">
			<button type="button" class="btn btn-info btn-sm update-frm" data-id="<?= $id ?>">Update</button>
		</div>
	</div>
</form>