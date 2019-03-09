<html>
<head>
<title>Lista de Usuarios</title>
</head>
<body>

<?php

    foreach ($query as $row)
    {
            echo $row->Id;
            echo $row->Nome;
            echo $row->Email;
    }

?>

 
</body>
</html>