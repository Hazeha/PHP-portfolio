<?php
    require_once "_class/projects.php";

    $projs = array(
        $p =    new Project("Name1", "Name1", "Link1", "Lang1", "0000"),
        $p =    new Project("Name2", "Name1", "Link1", "Lang1", "1111"),
        $p =    new Project("Name2", "Name1", "Link1", "Lang1", "1111"),
        $p =    new Project("Name2", "Name1", "Link1", "Lang1", "1111"),
        $p =    new Project("Name2", "Name1", "Link1", "Lang1", "1111"),

    );



?>
<article class="blog-post" id="projects">
    <h2 class="blog-post-title">All Projects</h2>
    <ul class="list-group list-group-flush">
        <?php
        foreach ($projs as &$value) {
            echo '
            <li class="list-group-item">
                <p class="list-name">'. $value->getTitle(true) .'</p>
                <p class="list-lang">'. $value->getLang() .'</p>
                <p class="list-date">'. $value->getDate() .'</p>
                <p class="list-link">'. $value->getUrl() .'</p>
            </li>
            ';
        }
        ?>
    </ul>
</article>
