<?php
/**
 * @var $title string
 * @var $comments CommentModel
 **/

use App\Models\CommentModel;

?>

<h2><?= esc($title) ?></h2>

<div class="table">
    <a class="btn btn-sm btn-outline-primary" href="/comments/new">
        Create
    </a>
</div>

<?php if (!empty($comments) && is_array($comments)) { ?>
    <div class="row">
        <?php foreach ($comments as $comment) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="border">
                    <h3><?= esc($comment['name']) ?></h3>
                    <div class="main">
                        <?= esc($comment['text']) ?>
                    </div>
                    <div class="p">
                        <a href="/comments/show/<?= esc($comment['id'], 'url') ?>"
                           class="btn btn-sm btn-outline-primary">View</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <h3>No Comments</h3>
    <p>Unable to find any comment</p>
<?php } ?>

<>
