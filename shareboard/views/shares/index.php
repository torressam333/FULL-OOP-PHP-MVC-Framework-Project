<?php//Index inside of the shares folder ?>
<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success btn-share mt-3" href="<?php echo ROOT_PATH; ?>shares/add">Feel Free To Share Something</a>
<?php endif; ?>
    <?php foreach($viewmodel as $item) : ?>
        <div class="well mb-1 bg-secondary">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr>
            <p><?php echo $item['body'] ?></p>
            <br>
            <a class="btn btn-default bg-info text-dark font-weight-bold" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
        </div>

    <?php endforeach; ?>
</div>