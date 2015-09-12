<h1>
	<?php echo htmlspecialchars($this->title); ?>
</h1>

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Action</th>
	</tr>
    <?php foreach ($this->users as $user) : ?>
	<tr>
		<td><?php echo $user["ID"]; ?></td>
		<td><?php echo htmlspecialchars($user["Name"]); ?></td>
		<td><a href="/users/delete/<?php echo $user["ID"]; ?>">Delete</a></td>
	</tr>
    <?php endforeach ?>
</table>

<a href="/users/create" class="btn btn-default">New</a>
