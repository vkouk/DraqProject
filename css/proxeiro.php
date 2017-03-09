<?php
/**
 * Created by PhpStorm.
 * User: Dragoness_crysta
 * Date: 9/3/2017
 * Time: 15:36
 */

<div class="breadcrumb">
            <a href="index.php">Home</a>
            >> <a href="index.php?page=<?php echo isset($_GET['page'])?>">
                <?php
                if (isset($_GET['page'])) {
                    $page_title = str_replace("-", " ", $_GET['page']);
                    $path_parts = pathinfo($page_title);
                    echo ucwords($path_parts['filename']), "\n";
                }
                ?>
</a>
</div><!--Breadcrumb-->