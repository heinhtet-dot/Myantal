<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>


  <!------------CSS-------------->
  <link rel="stylesheet" href="css/bootstrapmin.css">
  <link rel="stylesheet" href="css/mystyle.css">


  <!------------JS-------------->
  <script src="js/jquerymin.js"></script>
  <script src="js/poppermin.js"></script>
  <script src="js/bootstrapmin.js"></script>


  <!------------font-------------->
  <link rel="stylesheet" href="font/fontawesomemin.css">

</head>


<body>

  <div class="container-fluid">
  <div class="row">
      <div class="col col-sm-6" id="form">

        <?php 


        //Connect with db
        include("config.php");

        if ($_SERVER['REQUEST_METHOD']=="POST"){

        $company_name=$_POST["company_name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $phone_no=$_POST["phone_no"];
        $company_type=$_POST["company_type"];
        $company_website=$_POST["company_website"];

        // insert data to database
        $insert_query=mysqli_query($conn, "INSERT INTO company(company_name,email,password,phone_no,company_type,company_website) VALUES ('$company_name','$email','$password','$phone_no','$company_type','$company_website')");

        if(!$insert_query)
        {
          echo mysqli_error($conn);
        } else{
          echo "Successful!";

          header("location:company_list.php");

        }


      }

      
        ?>

    <form action="" method="post">

        <div class="form-group row">          
        	<label for="company_name" class="col-sm-4 col-form-label">Company name</label>
          	<div class="col-sm-8">
            	<input type="text" name="company_name" class="form-control" 
            	placeholder="Enter Company Name" required="true">
           </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-4 col-form-label">Email</label>
          	<div class="col-sm-8">
            	<input type="text" name="email" class="form-control" 
            	placeholder="Enter email" required="true">
            </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-sm-4 col-form-label">Password</label>
          	<div class="col-sm-8">
            	<input type="password" name="password" class="form-control" 
            	placeholder="Enter password" required="true">
            </div>
        </div>

        <div class="form-group row">
          <label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
          	<div class="col-sm-8">
            	<input type="text" name="phone_no" class="form-control" 
            	placeholder="Enter phone number" required="true">
            </div>
        </div>

        <div class="form-group row">
          <label for="company_type" class="col-sm-4 col-form-label">Company type</label>
          	<div class="col-sm-8">
            	<input type="text" name="company_type" class="form-control" 
            	placeholder="Enter Company Type" required="true">
            </div>
        </div>

        <div class="form-group row">
          <label for="company_website" class="col-sm-4 col-form-label">Company website
          </label>
          	<div class="col-sm-8">
            	<input type="text" name="company_website" class="form-control" 
            	placeholder="Enter Company Website" required="true">
            </div>
        </div>

        
        <button type="reset" class="btn btn-outline-danger">Cancel</button>
        <button type="submit" class="btn btn-outline-info">Submit</button>
    </form>
    </div>
  </div>
</div>
	


</body>
</html>

