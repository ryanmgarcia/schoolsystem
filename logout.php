<?php
    session_start();
    session_unset();
    session_destroy();
?>
<script>
    alert('Logout Successfully!');
    location.replace('login.php');
</script>