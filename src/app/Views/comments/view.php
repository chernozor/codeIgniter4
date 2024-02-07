<?php

/**
 * @var $title string
 * @var $comment CommentModel
 */

use App\Models\CommentModel;

?>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <h2>name: <?= esc($comment['name']) ?></h2>
        <p>text: <?= esc($comment['text']) ?></p>
        <p>date: <?= esc($comment['date']) ?></p>
        <div>
            <a href="/comments" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>
    </div>
</div>

