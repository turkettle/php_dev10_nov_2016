<div class="container" style="padding: 60px;">
    <div class="well">
        Voulez-vous supprimer le livre ?
    </div>
    <form method="post">

        <input type="hidden" name="book_id" value="<?php print $args['book_id']; ?>">
        <input type="hidden" name="op" value="delete">
        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Confirmer</button>
                <a href="<?php print $base_url . '?app=book&action=admin'; ?>" class="btn btn-default">Annuler</a>
            </div>
        </div>
    </form>
</div>
