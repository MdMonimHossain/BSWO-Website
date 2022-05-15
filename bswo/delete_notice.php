<?php
    include "dbConnection.php";
    $id = $_GET["id"];
    mysqli_query($conn,"DELETE FROM `notice` WHERE notice_id=$id");
?>
<script type="text/javascript">
      alert("Succesfully Deleted Notice!");
    window.location="admin_dashboard.php";
</script>