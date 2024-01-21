<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from login username = '$username' and password ='$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
    }
?>

<br>
<section class="LogInSection">
    <section class="contactHead">
        <h2>Log In</h2>
        <section class="contactPart">
            <Section class="formContact">
                <Form action="index.php" method="POST">
                    <h3>E-mail</h3>
                    <div class="inputClass">
                        <label for="Email"></label>
                        <input type="email" palceholder="Your e-mail" name="email" required />
                    </div>
                    <h3>Password</h3>
                    <div class="inputClass">
                        <label for="Password"></label>
                        <input type="password" palceholder="password" name="password" required />
                    </div>
                    
                    <div class="inputClass">
                        <input type="submit" value="Log In" />
                    </div>
                </Form>
                <h3>Connect with us</h3>
                <h4>Phone Number: 01912345678</h4>
                <h4>E-mail: onlinegrocery@gmail.com</h4>
            </Section>
        </section>
    </section>
</section>
<br>
