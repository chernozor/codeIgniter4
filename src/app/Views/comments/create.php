<?php
/**
 * @var $title string
 */
?>
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<form action="/comments" method="post">
    <?= csrf_field() ?>

    <div class="table">
        <div class="form-group">
            <label for="name" class="col-xs-12 col-sm-2 col-form-label">Name</label>
            <div class="col-xs-12 col-sm-6">
                <input type="input" name="name" class="form-control" value="<?= set_value('name') ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-xs-12 col-sm-2 col-form-label">Text</label>
            <div class="col-xs-12 col-sm-6">
                <textarea name="body" class="form-control" cols="45" rows="2"><?= set_value('text') ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="date" class="col-xs-12 col-sm-2 col-form-label">Date</label>
            <div class="col-xs-12 col-sm-6">
                <input type="input" name="date" class="form-control" value="<?= set_value('date') ?>">
            </div>
        </div>

        <input type="submit" name="submit" value="Create comment" class="btn btn-sm btn-primary">
        <a href="/comments" class="btn btn-sm btn-outline-secondary">Back</a>
    </div>
</form>
