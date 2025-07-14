<?php

// log out the user by destorying the session

logout();

header('Location: /login');
exit();