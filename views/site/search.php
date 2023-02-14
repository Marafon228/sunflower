<?php
if (isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];
    $link = "/web/site/shop_search?keyword=" . urldecode($keyword);
    echo "<a href='$link'></a>";
}
?>
