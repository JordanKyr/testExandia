<?php
    function show_table() {
        global $mysqli;

        $sql = 'select * from students';
        $st =$mysqli ->prepare($sql);

        $st-> execute();
        $res = $st-> get_result();

        header('Content-type: application/json');
        print json_encode($res-> fetch_all(MYSQLI_ASSOC) ,JSON_PRETTY_PRINT);

    }

?>