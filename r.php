<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap.css.css">  
    <title>Registration</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="r.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  



                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                             </div>  


<!--


                          <div class="form-group">  
                                <input class="form-control" placeholder="gender" name="gender" type="text" value="">  
                             </div> --> 

                                <div class="form-group">  
                                <input class="form-control" placeholder="Address" name="address" type="text" autofocus>  
                            </div>  



                          

                          <div class="form-group">  
                            <tr><th> Gender:</th><td> Male<input class="form-control" type="radio" placeholder="Gender" name="gender" value="Male"></td>
                            <td> Female<input class="form-control" placeholder="Gender" type="radio" name="gender" value="female"></td></tr>
                            </div>




<!--

<div class="form-group">

                          <tr> <th>DOB <td>
  <select size="1" input class="form-control" name="year" value="Year">
   <option>Year</option>
   <option>1980</option>
   <option>1981</option>
   <option>1982</option>
   <option>1982</option>
   <option>1983</option>
   <option>1984</option>
   <option>1985</option>
   <option>1986</option>
   <option>1987</option>
   <option>1988</option>
   <option>1989</option>
   <option>1990</option>
   <option>1991</option>
   <option>1992</option>
   <option>1993</option>
   <option>1994</option>
   <option>1995</option>
   <option>1996</option>
   <option>1997</option>
   <option>1998</option>
   <option>1999</option>
   <option>2000</option>
   <option>2001</option>
   <option>2002</option>
   <option>2003</option>
   <option>2004</option>
   <option>2005</option>
   <option>2006</option>
   <option>2007</option>
   <option>2008</option>
   <option>2009</option>
   <option>2010</option>
</select>
  <select size="1" input class="form-control" name="month" value="month">  </th>
  <option>month</option>
   <option>jan</option>
   <option>feb</option>
   <option>mar</option>
   <option>apr</option>
   <option>may</option>
   <option>june</option>
   <option>july</option>
   <option>Aug</option>
   <option>Sep</option>
   <option>Oct</option>
   <option>Nov</option>
   <option>Dec</option>
</select>
<select size="1" name="date" input class="form-control" value="date">
   <option>date</option>
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
   <option>5</option>
   <option>6</option>
   <option>7</option>
   <option>8</option>
   <option>9</option>
   <option>10</option>
   <option>11</option>
   <option>12</option>
   <option>13</option>
   <option>14</option>
   <option>15</option>
   <option>16</option>
   <option>17</option>
   <option>18</option>
   <option>19</option>
   <option>20</option>
   <option>21</option>
   <option>22</option>
   <option>23</option>
   <option>24</option>
   <option>25</option>
   <option>26</option>
   <option>27</option>
   <option>28</option>
   <option>29</option>
   <option>30</option>
   <option>31</option>
</select> </td></tr>



<br>



-->





















  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="l.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include_once 'Db_connection.php';//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same  
    $user_address=$_POST['address'];//same  

 //$user_gender=$_POST['gender'];//same  


  



  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query))  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email,user_address,user_gender) VALUE ('$user_name','$user_pass','$user_email','$user_address','$user_gender')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('wl.php','_self')</script>";  
    }  
  
  
  
}  
  
?>  