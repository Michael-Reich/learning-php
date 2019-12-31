<?php include("../database.php"); ?>

<?php include("elements/header.php"); ?>

<?php
$id = $_GET["id"];
$post = fetch_post($id); ?>

<h2>Blog Detail</h2>

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $post["title"]; ?></h5>
    <p class="card-text"><?php echo nl2br($post["content"]); ?></p>
  </div>
</div>

<?php include("elements/footer.php"); ?>
