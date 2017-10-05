<?php

session_start();

if(isset($_GET['auth']))
{
    $_SESSION['user_id'] = 123;
}

var_dump(session_id());
var_dump($_SESSION['user_id'] ?? null);
?>
<script src="http://a.local/auth.php?id=<?= session_id() ?>"></script>
