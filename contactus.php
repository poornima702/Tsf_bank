<html>
    <body style="background-image: url(images/bg3.jpg);background-repeat: no-repeat;background-size: cover;">
        <?php include ('navbar.php') ?>
        
        <br>
        <br>
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $city=$_POST['city'];
        $email=$_POST['email'];
        $message=$_POST['message'];


        $server="localhost";
        $username="root";
        $password="";
        $db="bank";

$conn=mysqli_connect($server,$username,$password,$db);

if(!$conn){
die("connection to this database failed due to " .mysqli_connect_error()); 
}

else{
//Connection successfully established
       
      
        $sql = "INSERT INTO `contact` ( `name`, `age`, `city`, `email`, `message`, `dt`) VALUES ( '$name', '$age', '$city', '$email', '$message', CURRENT_TIMESTAMP())";
               $result = mysqli_query($conn,$sql);

               if($result){
                echo '<script>alert("Submitted Succesfully")</script>';
          
                

               }
               else{
                 echo "The record was not inserted successfully because of this error --->".mysqli_error($conn);
               }
              }
            }
               ?>
        <div class="container">
            
            <h1><center>Contact Us</center></h1>
            <br>
            <form class="form-horizontal" action="contactus.php" method="POST">
              <div class="form-group" >
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name");">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="age">Age:</label>
                <div class="col-sm-10">          
                  <input type="age" class="form-control" id="age" placeholder="Enter age" name="age">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="city">City:</label>
                <div class="col-sm-10">          
                  <input type="city" class="form-control" id="city" placeholder="Enter city" name="city">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">          
                  <input type="city" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="message">Message:</label>
                <div class="col-sm-10">          
                 <textarea class="form-control" id="message" placeholder="Write a message" name="message" cols="10" rows="5"></textarea>
                </div>
              </div>
              
              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </div>
            </form>
            </form-method>
          </div>
          
<?php include('footer.php') ?>
    </body>
    </html>