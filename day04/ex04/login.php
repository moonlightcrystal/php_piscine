<?php
    include ("auth.php");

session_start();
if (isset($_POST['submit'])) {
    if (auth($_POST['login'], $_POST['passwd']) == TRUE) {
        $_SESSION['loggued_on_user'] = $_POST['login'];
        ?>
        <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
        <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
        <?php
    } else {
        echo "ERROR\n";
        $_SESSION['loggued_on_user'] = "";
    }
}
?>

