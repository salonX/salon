<?php 
include "../connection.php";
include "../invalid_query.php";

// work for pridiction


if(isset($_REQUEST['pridiction'])){
    $json_arr=array();
    $query=$_REQUEST['pridiction'];
    if(!is_invalid_search($query)){  

        // salon based on name 
        $sql="select * from salon where name like '$query%'";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {
                
                $return_arr[] = array("name" => $row['name'],
                                "city" => $row['city'],
                                "address"=>$row['address'],
                                "area" => $row['area'],
                                "phone_number" => $row['phone_number'],
                                "email" => $row['email']
                            );
            }
            $json_arr['name']=$return_arr;
        
        }else{
            $json_arr['name']="null";
        }

        // salon Based on address ciry
        $sql="select * from salon where city like '$query%' or area like '$query%'";
        // echo $sql;
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {
                
                $return_arr[] = array(
                                "name" => $row['name'],
                                "city" => $row['city'],
                                "address"=>$row['address'],
                                "area" => $row['area'],
                                "phone_number" => $row['phone_number'],
                                "email" => $row['email']
                            );
            }
            $json_arr['city']=$return_arr;

            
        } else {
            $json_arr['city']="null";
        }
        echo json_encode($json_arr);
        // echo $sql;
    }else{
        
        echo "code:422";
    }
    // echo "hi";
}else{
    echo "do";
}

?>

 