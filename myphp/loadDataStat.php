<?php    
    include 'openConn.php';
    
    $sql = "SELECT sono,schtat,ncomp,nstat FROM ifns";


    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $outp = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($outp);
    } else { echo "[]"; }
    
    $conn = null;
?>