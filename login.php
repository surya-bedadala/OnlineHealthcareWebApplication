
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="cbook.css">
    <style>
        body{
            background-image: url("health.jpg");
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
    
    <div class="reg" >
        <form action="log.php" method="POST" id="form">
            <p>Phone No</p>
            <input type="text" name="gm" id="pnum" autocomplete="off" >
            <p>Password</p>
            <input type="password" name="ps" id="psd">
            <input type="submit" value="Login" name="login">
            <p2>Don't have an account</p2><a href="reg.php">Register Here</a>
        </form>
        <p id="errorMessage"></p>
   
    <script>
      let formm = document.getElementById("form");
      form.addEventListener("submit", (event) => {
        event.preventDefault();
        validate1();
      });
      function validate1() {
        let pn = document.getElementById("pnum").value.trim();
        let pass = document.getElementById("psd").value.trim();
        let is_pn_valid = true;
        let is_ps_valid = true;
        if(!/[0-9]{10}/.test(pn)){
          document.getElementById("errorMessage").innerText =
            "Enter a valid phone number";
            let is_pn_valid = false;
            return;
        }
        if(pass==""){
          document.getElementById("errorMessage").innerText =
            "Enter a Password";
            let is_ps_valid = false;
            return;
        }
        if (is_pn_valid && is_ps_valid) {
          form.submit();
        }
      }
      </script>
      </div>


</body>
</html>