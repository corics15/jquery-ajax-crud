<form id="updateFrm">
	<div class="form-group">
		<label for="fn">First Name:</label>
		<input type="text" class="form-control" id="fn" name="fn" value="<?php if (isset($result->firstname)) { echo $result->firstname; } ?>">
	</div>

	<div class="form-group">
		<label for="ln">Last Name:</label>
		<input type="text" class="form-control" id="ln" name="ln" value="<?php if (isset($result)) { echo $result->lastName; } ?>">
	</div>

	<div class="form-group">
		<label for="un">Username:</label>
		<input type="text" class="form-control" id="un" name="un" value="<?php if (isset($result)) { echo $result->username; } ?>">
	</div>

	<div class="form-group">
		<div class="pull-right">
			<?php if (isset($id)) : ?>
				<button type="button" class="btn btn-primary btn-sm update-frm" data-id="<?= $id ?>">Update</button>
			<?php else : ?>
				<button type="button" class="btn btn-info btn-sm create-frm">Create</button>
			<?php endif; ?>
			<button type="button" class="btn btn-danger btn-sm cancel-frm">Cancel</button>
		</div>
	</div>
</form>