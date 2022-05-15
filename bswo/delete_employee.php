<?php
    include "dbConnection.php";
    $id = $_GET["id"];
    mysqli_query($conn,"DELETE FROM `employee` WHERE E_CODE=$id");
?>
<script type="text/javascript">
      alert("Succesfully Deleted Employee!");
    window.location="admin_dashboard.php";
</script>