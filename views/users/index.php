<h1><?= htmlspecialchars($this->title) ?></h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php foreach ($this->users as $user) : ?>
        <tr>
            <td><?= $user["ID"] ?></td>
            <td><?= htmlspecialchars($user['Name']) ?></td>
            <td><a href="/users/delete/<?= $user['ID']?> ">[Delete]</a></td>
        </tr>
    <?php endforeach ?>
</table>

<a href="/users/create" class="btn btn-default">New</a>
