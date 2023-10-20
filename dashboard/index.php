<?php
//prevent unauthorized access
if (isset($_SESSION["ID"]) === false) {
    header("location:../includes/index.php?message=middleware");
    exit();
}
include_once("layouts/header.php");
?>

<?php
include_once("layouts/footer.php");
?>