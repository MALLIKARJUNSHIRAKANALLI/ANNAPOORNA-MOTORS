<?php
session_start();
session_destroy();
?>
<script>
alert("you have logged out successfully");
document.location="index.html";
</script>
