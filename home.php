<?php
include'common.php';
if(!isset($_SESSION['user_name'])){
    header('location:index.php');
}
function check_if_added_to_cart($item_id){
    $user_id=$_SESSION['user_id'];
    $con= mysqli_connect('localhost','root','','store') or die(mysqli_error($con));
    $query="select * from users_items1 WHERE item_id='$item_id' AND user_id='$user_id'and status='added to cart'";
    $result= mysqli_query($con, $query) or die(mysqli_error($con));
            if (mysqli_num_rows($result)>=1){
                return 1;
                
            }else{
                return 0;
            }
    
}
?>
<html>
    <head>
        
        <title>HOME PAGE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .box{
                text-align: center;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="Mydesign.css">

       
    <body>
         <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                          
                </button>
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"> E-Store </a>
                    
                </div>
                <div class="collapse navbar-collapse"id="#mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="cart1.php" class="glyphicon glyphicon-shopping-cart"> Cart</a>
                        </li>
                        <li>
                            <a href="settings.php" class="glyphicon glyphicon-cog"> Settings</a>
                            
                        </li>
                        <li>
             
                            <a href="logout.php"  class="glyphicon glyphicon-log-out"> Log-out</a>
                        </li>
                        
                        
                        
                    </ul>
                    
                </div>
                
            </div>
            
         </nav><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-4">
                        <form method="post" action="cart1.php">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>ONE PLUS 7T</h5>
                                
                                
                            </div>
                            
                            <div class="panel-body">
                                
                                <div class="box">
                                    <img src="img/one plus.jpg" alt="one plus" height="190px" width="200px">
                           
                                    <P>Display:6.55 inch,processor:Qualcomm Snapdragon 855+,front camera:16mp,Ram:8gb,storage:128gb,<br><br><b>Rs.34,999</b></P>
                                <?php
                            if (check_if_added_to_cart(1)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                     
                                
                            </div>
                            
                        </div>
                                
                                
                      </div>
                    </div>
</form>
               
            
                     <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>SAMSUNG-S20</h5>
                                
                                
                            </div>
                            <div class="panel-body">
                                
                                <div class="box">
                                     <img src="img/Samsung-S20.png" alt="samsung-s20 plus" height="200px"  width="200px" >
                                </div>
                            
                                <P>Display:6.7 inch,processor:octa core,front camera:10mp,Ram:8gb,storage:128gb,<br><center><b> Rs.77,999</b></center></p>
                            <?php
                            if (check_if_added_to_cart(2)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                
                            </div>
                            
                        </div>
                                 </div>
                    <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>IPHONE-11-PRO-MAX</h5>
                                
                                
                            </div>
                            <div class="panel-body">
                                
                                <div class="box">
                                    <img src="img/IPhone-11-pro-max.jpg" alt="iphone" height="200px"  width="200px" >
                                </div>
                            
                                <P>Display:6.5 inch,processor:A13 BIONIC ,front camera:12mp,Ram:4gb,storage:256gb,<br><center><b> Rs.1,17,100</b></center></P>
                                   <?php
                            if (check_if_added_to_cart(3)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                
                            </div>
                            
                        </div>
                                 </div>
                    
                                
                      </div>
                <div class="col-xs-12">
                    <div class="col-xs-4">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>NOKIA-7-PLUS</h5>
                                
                                
                            </div>
                            <div class="panel-body">
                                
                                <div class="box">
                                    <img src="img/Nokia-7-Plus.jpg" alt="Nokia 7 plus" height="200px"  width="200px" >
                                </div>
                            
                                <P>Display:6.0 inch,processor:Qualcomm Snapdragon 660,front camera:10mp,Ram:4gb,storage:64gb,<br><center><b> Rs.18,499</b></center></P>
                                        <?php
                            if (check_if_added_to_cart(4)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                     <div class="col-xs-4">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>OPPO-F15</h5>
                                
                                
                            </div>
                            <div class="panel-body">
                                
                                <div class="box">
                                    <img src="img/oppo-f15.jpg" alt="Oppo f15" height="200px"  width="200px" >
                                </div>
                            
                                <P>Display:6.4 inch,processor:Helio P70,front camera:16mp,Ram:8gb,storage:128gb,<br><center><b> Rs.18,990</b></center></P>
                                             <?php
                            if (check_if_added_to_cart(5)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                                
                            </div>
                            
                        </div>
                        
                    </div>
                     <div class="col-xs-4">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>XIAOMI-REDMI-NOTE-8-PRO</h5>
                                
                                
                            </div>
                     <div class="panel-body">
                                
                                <div class="box">
                                    <img src="img/xiaomi-redmi-note-8-pro.jpg" alt="Redmi Note 8 Pro" height="180px"  width="200px" >
                                </div>
                            
                         <P>Display:6.53 inch,processor:Helio G90T professional gaming Octa-Core,front camera:20mp,Ram:6gb,storage:64gb,<br><center><b> Rs.19,199</b></center></P>
                                                      <?php
                            if (check_if_added_to_cart(6)){
                                echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>
                            <a href="cartadd.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php   }?>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
                    </div>
         <?php
         include'footer.php';
        ?>
    </body>
</html>


