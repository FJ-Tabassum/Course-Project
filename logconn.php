<?php
    include('connection.php');
    if(isset($_POST['Log In'])){
        $username = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from login where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header ("Location:index.php");
        }
        else{
            echo `<script>
                windows.location.href = "index.php";
                alert("login failed. Invalid cradentials!")
            <script>`;
        }
    }
    
?>
