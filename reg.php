
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="cbook.css">
    
    
    <style>
        body{
            background-image: url("jyoth.gif");
            background-size: cover;

        }
        p2{
          color:white;
        }
        a{
          text-decoration:none;
        }
    </style>
</head>
<body>
    
      
      
    <div class="reg">
        <form action="regg.php"  id="form" method="POST">
            <p>Name</p>
            <input type="text" name="fname" id="fname" autocomplete="off" >
            <p>Phone No</p>
            <input type="text" name="lname" id="lname" autocomplete="off" >
            <p>Password</p>
            <input type="password" name="psw" id="psw" >
            <input type="checkbox" onclick="myFunction()">
            <p4>Show Password</p4>
            <p>Confirm Password</p>
            <input type="password" name="pswd" id="pswd">
            <input type="checkbox" onclick="myFunction2()">
            <p4>Show Password</p4>
            <input type="submit" name="register" value="register">
            <p2> Have an account</p2><a href="login.php">Login Here</a>
        </form>
        <p id="errorMessage"></p>
    <script>
       
    function myFunction() {
    var x = document.getElementById("psw");
    if (x.type == "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function myFunction2() {
    var y = document.getElementById("pswd");
    if (y.type == "password") {
      y.type = "text";
      } else {
      y.type = "password";
          }
      }   

      let form = document.getElementById("form");
      form.addEventListener("submit", (event) => {
        event.preventDefault();
        validate();
      });

      function validate() {
        let name = document.getElementById("fname").value.trim();
        let num = document.getElementById("lname").value.trim();
        let pwd = document.getElementById("psw").value.trim();
        let cpwd = document.getElementById("pswd").value.trim();
        
        let is_name_valid = true;
        let is_pwd_valid = true;
        let is_num_valid = true;
        if (name == "") {
          document.getElementById("errorMessage").innerText =
            "Name cannot be empty";
          return;
        }
        if (/\d/.test(name)) {
          document.getElementById("errorMessage").innerText =
            "Name cannot contain Digits";
          is_name_valid = false;
          return;
        }
        if (name.length < 3) {
          document.getElementById("errorMessage").innerText =
            "Name cannot be lessthan 3 Characters";
          is_name_valid = false;
          return;
        }
        if(!/[0-9]{10}/.test(num)){
          document.getElementById("errorMessage").innerText =
            "Enter a valid phone number";
            let is_num_valid = false;
            return;
        }
        if (pwd == "") {
          document.getElementById("errorMessage").innerText =
            "Password cannot be empty";
          is_pwd_valid = false;
          return;
        }
        if (pwd.length < 8) {
          document.getElementById("errorMessage").innerText =
            "Password cannot be lessthan 8 Characters";
          is_pwd_valid = false;
          return;
        }
        if (!/[a-z]+/.test(pwd)) {
          document.getElementById("errorMessage").innerText =
            "Password must contain one lowercase letter";
          is_pwd_valid = false;
          return;
        }
        if (!/[A-Z]+/.test(pwd)) {
          document.getElementById("errorMessage").innerText =
            "Password must contain one uppercase letter";
          is_pwd_valid = false;
          return;
        }
        if (!/[@#&-]+/.test(pwd)) {
          document.getElementById("errorMessage").innerText =
            "Password must contain one Special Character";
          is_pwd_valid = false;
          return;
        }
        if (pwd != cpwd) {
          document.getElementById("errorMessage").innerText =
            "Password confirmation mismatch";
          is_pwd_valid = false;
          return;
        }
        if (is_name_valid && is_pwd_valid && is_num_valid) {
          form.submit();
        }
      }
      </script>
      </div>
 
 
    
</body>
</html>