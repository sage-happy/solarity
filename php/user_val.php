<?php
    include('connection.php');
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            
            $email=filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);   
            
            $password = $_POST['password'];   
         
            //sql statement to insert data
            $sql = "SELECT email, password FROM public.user WHERE email=$1;";
            
            $result = pg_query_params($conn, $sql, array("$email"));
            
            if(!$result){
                echo "Invalid email";
                exit();
                echo "if statement checker";
            }else{
                //Fetching data from a row after querying database.
                $dbemail=null;
                $dbpassword=null;
           
                $row = pg_fetch_assoc($result);
                if($row!=null){
                        $dbemail= $row['email'];
                        $dbpassword= $row['password'];
                }
                if(password_verify($password, $dbpassword) && strcmp($dbemail, $email)==0){
                    header("Location: ../landing.php");
                }elseif(!password_verify($password, $dbpassword)){
                    echo "Failed to sign in. Password is invalid.";
                }else{
                    echo "Please check your credentials.";
                }
            }
        }
    }
    pg_close($conn);
?>