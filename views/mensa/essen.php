<form id="myForm" action="<?php echo URL; ?>bewerten" method="post">
<div id="essenList">

<?php
    session_start();
    $q=$_POST["mensa"];
    //echo $q;
    mysql_connect(localhost,root);
    mysql_select_db(danieltinney) or die ( "Unable to select database");
    //get kategorie_id from database to a array
    $array_katid=array();
    foreach ($this->kategorieList as $key1 => $value1 ){
        array_push($array_katid,$value1['id']);  
    }
    //$_SESSION['katarray']=$array_katid;
    echo "<table border='1'>
        <tr>
        <th>Kategorie</th>
        <th>Speise</th>
        <th>Preis Studierende</th>
        <th>Preis Bedienstete</th>
        <th>Bewertung</th>
        </tr>";
  
    echo "<tr>"; 
    // show essenlist from database
    foreach ($this->essenList as $key => $value ){
        if($value['mensa_id']==$q){ 
            $i=0;
            while ($i<=sizeof($array_katid)){
                if($value['kat_id']==$array_katid[$i]){
                    $result = mysql_query("SELECT name,preis_std,preis_mit FROM kategorie WHERE id = '$array_katid[$i]'");
                    while($row=  mysql_fetch_array($result)){        
                    echo "<td>" .$row['name']. "</td>";
                    echo "<td >";
                    echo '<input type="submit" name ="speise" id="' . $value['id'] . '"  value="'.$value['name'].'" onclick="counter()"> ';
                    echo"</td>";
                    echo "<td>".$row['preis_std']. "</td>";
                    echo "<td>".$row['preis_mit']. "</td>";
                    echo "<td>".$value['bewertung']. "</td>";                 
                    }
                }
                $i++;   
    echo "</tr>";        
            } 
        }
    }
    echo "</table>";
    
?>
</div>
    </form>
