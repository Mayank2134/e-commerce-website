<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include'common.php';
if(isset($_SESSION['user_name'])){
    header('location:home.php');
}
?>
<html>
    <head>
        
        <title>INDEX PAGE</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
                .box{
                text-align: center;
            }
            .modify{
                background-color: #a9a9a9;
                width: 100%;
                padding: 5px 15px;
                
               
                
            
               
                
                
                
               
            }
            
        </style>
        
        
        
   <link rel="stylesheet" type="text/css" href="Mydesign.css">
         
    </head>
  
 
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
                <div class="collapse navbar-collapse"id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="signup.php" class="glyphicon glyphicon-user"> sign up</a>
                        </li>
                        <li>
             
                            <a href="#"  class="glyphicon glyphicon-log-out" data-toggle="modal" data-target="#mymodal"> Log-in</a>
                        </li>
                        <li>
                            <a href="aboutus.php" class="glyphicon glyphicon-tasks"> about us</a>
                            
                        </li>
                        <li>
                            <a href="contactus.php" class="glyphicon glyphicon-phone"> contact us</a>
                        </li>
                        
                    </ul>
                    
                </div>
                
            </div>
            
        </nav>
        <div class="container">
            <div class="row">
        <div class="modal" id="mymodal" >
            <div class="modal-dialog">
                <div class="modal-content">
                    
                        <div class="modal-header">
                        <h3 class="text-primary">
                            LOG IN
                        </h3>
                            <button type="button" class="close" data-dismiss="modal">
                                &times;
                            </button>
                        
                    </div>
                    <div class="modal-body">
                        <form method="post" action="loginscript3.php">
                        
                            <div class="form-group">
                                <p>Don't have an account?<a href="signup.php" style="color: blue">register</a></p>
                                   
                                
                            </div>
                            <div class="form-group">
                                <input type="text" name="Email" class="form-control" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Password" name="Password" class="form-control">
                                
                            </div>
                            
                       
                        <div class="modal-footer">
                            <div class="form-group" style="text-align:left">
                                <button class="btn btn-primary "  name="Login">Login</button>
                                
                            </div>
                            <div class="form-group">
                                <h5 style="text-align: left"><a href="forgot-pwd.php" style="color: blue">Forgot Password?</a></h5>
                                 
                            </div>
                            
                        </div>
                        </form>
                        <?php
                        if(isset($_GET['error'])==true){
                            echo'<p style="color:red">invalid email id</p>';
                        }
                        if(isset($_GET['error1'])==true){
                            echo'<p style="color:red">invalid password</p>';
                        }
                        ?>
                      
                        
                        
                        
                    </div>
                    
                </div>
                
            </div>
            
                
            
            
        </div>
            </div>
        </div>
          
        <br><br><br>
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-xs-12">
                    <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>ONE PLUS 7T</h5>
                                
                                
                            </div>
                            <div class="panel-body">
                                <div class="box">
                                
                                    <img src="img/one plus.jpg" alt="one plus" height="180px"width="200px">
                                
                                </div>
                                <P>Display:6.55 inch,processor:Qualcomm Snapdragon 855+,front camera:16mp,Ram:8gb,storage:128gb,Rs.34,999</P>
                                <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
                                
                            
                            
                        </div>
                            </div>
                                
                                
                      </div>
                    
                    
                    
               
            
                     <div class="col-xs-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                                <h5>SAMSUNG-S20</h5>
                                
                                
                            </div>
                            <div class="panel-body">
                                
                                <div class="box">
                                    <img src="img/Samsung-S20.png" alt="samsung-s20 plus"height="200px"width="200px">
                                
                                </div>
                                <P>Display:6.7 inch,processor:octa core,front camera:10mp,Ram:8gb,storage:128gb, Rs.77,999</P>
                               <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
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
                            
                                <P>Display:6.5 inch,processor:A13 BIONIC ,front camera:12mp,Ram:4gb,storage:256gb, Rs.1,17,100</P>
                           <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
                                
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
                            
                                <P>Display:6.0 inch,processor:Qualcomm Snapdragon 660,front camera:10mp,Ram:4gb,storage:64gb, Rs.18,499</P>
                              <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
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
                            
                                <P>Display:6.4 inch,processor:Helio P70,front camera:16mp,Ram:8gb,storage:128gb, Rs.18,990</P>
                             <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                                
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
                            
                                <P>Display:6.53 inch,processor:Helio G90T professional gaming Octa-Core,front camera:20mp,Ram:6gb,storage:64gb, Rs.19,199</P>
                              <a href="#" data-toggle="modal" data-target="#mymodal">
                                <button class="btn btn-block btn-primary">
                                   ORDER NOW
                                    
                                </button>
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
                    
              
                </div>
            </div>
        </div>
        
        <footer>
        <div class="container modify">
            <div class="row">
                
                    
                    
                        <div class="col-xs-4">
                            <h4>Information</h4>
                            
                            <a href="aboutus.php">About Us</a><br>
                            <a href="contactus.php">Contact Us</a>
                            
                        </div>
                        <div class="col-xs-4">
                            <h4>My Account</h4>
                            <a href="#"data-toggle="modal" data-target="#mymodal">Login</a><br>
                            <a href="signup.php">Signup</a>
                            
                        </div>
                        <div class="col-xs-4">
                            <h4>Contact Us</h4>
                            Contact:+91-123-000000
                            
                        </div>
                        
                    
                    </div>
        </div>
                </footer>
            
            
        
                    
            
        
        
       
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
