<h1><?= htmlspecialchars($this->title) ?></h1>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php foreach ($this->authors as $author) : ?>
        <tr>
            <td><?= $author['ID'] ?></td>
            <td><?= htmlspecialchars($author['Name']) ?></td>
            <td><a href="/authors/delete/<?=$author['ID']?> ">[Delete]</a></td>
        </tr>
    <?php endforeach ?>
</table>

<a href="/authors/create">[New]</a>
