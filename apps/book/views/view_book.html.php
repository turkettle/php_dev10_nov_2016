<div class="container">
    <h1><?php print $args['book']['title']; ?></h1>
    <div>
        Un livre écrit par <?php print $args['book']['author']; ?>
    </div>
    <div>
        Publié en <?php print date('Y', $args['book']['published']); ?>
    </div>
    <div class="well">
        Publié en <?php print $args['book']['body']; ?>
    </div>
</div>
