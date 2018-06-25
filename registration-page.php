<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <?php include("com-meta.php"); ?>
  </head>
  <body id="registration-background">
    <div id="index-text" class="container ">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <h1 id="title">UN-DEPENDENT</h1>
          <h5 id="slogan">"UN-DEPENDENT IS FREEDOM"</h5>
           <br>
        </div>
             
        <!--<h1>READY TO BE UNDEPENDENT!</h1>-->
        <div class="col-lg-6">
          <form>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First Name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <br>
            <input type="email" class="form-control" placeholder="Email"><br>
            <input type="password" class="form-control"  placeholder="Password">
                <br>
            <input type="checkbox" >
            <label class="form-check-label" for="invalidCheck2">
              I am 16 years old or older.
            </label>
            <br>
            <input type="checkbox" >
            <label class="form-check-label" for="invalidCheck2">
              I have read, understand and agree to UN-DEPENDENT's Terms of <br>Service and Privacy Policy.
            </label>
          </form>
            <br>
            
          <button class="button">Register!</button>
        </div>
      </div>
    </div>

  </body>
</html>
