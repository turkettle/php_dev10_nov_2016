<div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($args['books'] as $book) : ?>
                <tr>
                    <td><?php print $book['id']; ?></td>
                    <td>
                        <a href="<?php print $base_url . '?app=book&action=view&id=' . $book['id']; ?>">
                            <?php print $book['title']; ?>
                        </a>
                    </td>
                    <td><?php print $book['author']; ?></td>
                    <td>
                        <a href="<?php print $base_url . '?app=book&action=delete&id=' . $book['id']; ?>" class="btn btn-danger">
                            Supprimer
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
