<h2><?= $title ?></h2>
<?php foreach($packages as $package) : ?>
    <h3><?php echo $package['title']; ?></h3>
    <small class="post_date">Posted on: <?php echo $package['created_at']; ?></small><br>
       <p><?php echo $package['body']; ?> </p>
       <p class="btn btn-default" href="<?php echo site_url('/packages/' .$package['slug']); ?>">read more</p>

<?php endforeach; ?>