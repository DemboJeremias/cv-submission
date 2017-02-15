# Trying connect front and back end
<?php

require ('../cvsubmition_db.php');
if(mysqli_ping($dbs))
{echo'MySQL server'.mysqli_get_server_info($dbc). 'on'.mysli_get_host_info($dbc);}






?>
