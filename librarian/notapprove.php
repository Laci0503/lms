<?php
include "connection_lib.php";
$id=$_GET["id"];

mysqli_query($link,"update student_registration set status='no' where id=$id");

?>

<script type="text/javascript">
    alert("A diák el lett utasítva!");
    window.location="display_student_info.php";

</script>