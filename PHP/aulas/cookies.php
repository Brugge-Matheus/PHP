<?php 

// Setar cookie
setcookie('curso', 'PHP', strtotime('+5days'));

// Apagar cookies (deixar a data negativa)
setcookie('curso', 'PHP', strtotime('-5days'));