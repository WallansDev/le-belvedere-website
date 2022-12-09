<?php 
session_start();

if(isset($_SESSION['name'])) {
    session_destroy();

    echo "<script>alert('Vous êtes déconnecter')</script>";
    echo "<script>location.href='index.php'</script>";
}
else {
    echo "<script>location.href='index.php'</script>";
}
?>