<?php include("../database.php"); ?>

<?php include("elements/header.php"); ?>

<?php $res = fetch_posts(); ?>

<ul>
    <?php foreach ($res as $row): ?>
        <li>
            <a href="post.php?id=<?php echo $row["id"] ?>">
                <?php echo $row["title"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php"); ?>
