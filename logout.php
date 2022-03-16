<?php
session_start();

session_unset();
session_destroy();

heaader("Location: index.php");