<?php 
    include('connection.php');

    if($_SERVER["REQUEST_METHOD"]=="POST" && strcmp($_POST['password'], $_POST['passcmp'])==0){
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
            $name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);        
            
            $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
             
            $password= @password_hash($_POST['password'], $PASSWORD_BCRYPT);   
        
        //sql statement to insert data
        $sql = "INSERT INTO public.user(name, email, password) VALUES ('$name', '$email', '$password');";
        
        //Execute the query
        $result = pg_query($conn, $sql);
        if($result){
            header("Location: ../landing.php");
        }
    }
    
    }elseif(strcmp($_POST['password'], $_POST['passcmp']) != 0 ){
    echo "Password fields must match";
    }
    pg_close($conn);

?>