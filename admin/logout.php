<?php
session_start();
session_destroy();
header('location:/santribaru/admin/login');
