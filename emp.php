<!DOCTYPE html>
<html>
<head>
	<title>registration from</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
</head>
<body >
	<div class="container ">
		<div class="row mt-5 ">
            <div class="col-2"></div>
            <div class="col-8" style="background-color: lightgrey">
			<form method="post" action="pdo.php">
         <h2>EMPLOYEE REGISTRATION FORM</h2>
         <div class="form-group">
         	<label class="form-label">name:</label>
         	<input type="text" class="form-control" name="ename" placeholder="enter the name" required>
         	
         </div>

          <div class="form-group">
            <label class="form-label">Email:</label>
            <input type="Email" class="form-control" name="ema" placeholder="enter your mail" required>                              
            
         </div>   

         <div class="form-group">
         	<label class="form-label">Password:</label>
         	<input type="Password" class="form-control" name="psw" >
         	
         </div>

        <div class="form-group">
            <label class="form-label">phone no:</label>
            <input type="text" class="form-control" name="phn" placeholder="enter your 10 digit num">
            
         </div>   
        	

         <div class="form-group">
         	<label class="form-label">Gender:</label>
         	<input type="radio" class="form-control-check" name="gen" value="male">male
         	<input type="radio" class="form-control-check" name="gen" value="female">female
            <input type="radio" class="form-control-check" name="gen" value="other">other
         </div>

          <div class="form-group">
            <label class="form-label">language:</label>
            <select class="form-control" name="lang" >
               <option>--select language--</option>
               <option>Tamil </option>
               <option>English</option>
               <option>Hindi</option>
               <option>Telungu</option>
               <option>Malayalam</option>
            </select>
            </div> 
             
          <div class="form-group">
            <label class="form-label">Zip Code:</label>
            <input type="text" class="form-control" name="zpc" >
         </div>

         <div class="form-group">
         	<label class="form-label">About:</label>
         	<textarea name="abt" class="form-control" rows="5">
         	</textarea>
         </div><br>

         <div class="form-group">
         <div class="text-center">
         <input type="submit" class="btn btn-success" name="submit" value="submit" >
         <input type="reset" class="btn btn-danger" name="reset" value="reset" >

         </div>
         </div>
	</form>
    </div>
    <div class="col-2"></div>
	</div>
</div>
</body>
</html>