<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href= "main.css">
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "wideworldimporters";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbName);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
        $sql = "select i.stockitemname, s.stockgroupname, i.unitprice, i.photo
                from stockitems i 
                join stockitemstockgroups g on i.stockitemid = g.stockitemid
                join stockgroups s on g.stockgroupid = s.stockgroupid
                where s.stockgroupname = 'clothing'";
                $result = $conn->query($sql);
        $sql = "select i.photo
                from stockitems i 
                join stockitemstockgroups g on i.stockitemid = g.stockitemid
                join stockgroups s on g.stockgroupid = s.stockgroupid
                where s.stockgroupname = 'clothing'";        
                $photo = mysqli_query("$sql");
        
//                     
                
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo  $row["stockitemname"]. " - <b>Prijs</b> ". $row["unitprice"] . /*$Image*/ '<br>';
                

            }} else {
        echo "0 results";
    }
    mysqli_close($conn);
?>
     
    </body>
</html>
<!--//                    
                //while($row=mysql_fetch_array($photo)){
//                header('Content-type: image/jpeg');
                //    echo $row['i.photo'];
     //           }
                //echo "<img src="/filepath/".$img1." . " hold=" '<br>'echo "<img src="/filepath/".$img2."" hold=" />echo "><img src="/filepath/".$img3."" hold=" /></pre></xml>"></img></img></img>

//                echo '<img src="data:image/jpeg;base64,'.base64_encode( '$mysqli_fetch_array()' ).'"/>';
        
                -->