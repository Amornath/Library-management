<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link," delete from add_book where id=$id");
?>
<script>
window.location="display_books.php"
</script>