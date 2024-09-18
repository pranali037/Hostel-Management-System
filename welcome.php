<!-- welcome.php -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="path/to/your/styles.css"> <!-- Include your CSS file if needed -->
<!-- </head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Our Hostel Management System</h1>
        <p>Please click the button below to log in.</p>
        <a href="login.php" class="btn">Go to Login</a>
    </div>
</body>
</html> --> 

<!doctype html>
<html>
<head><title>Welcome</title>
<style>
body{
background-image:url('img/hstl1.jpg');
background-repeat:no-repeat;
background-size:cover;
background-position:center;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.container{
max-width:800px;
padding:20px;
background-color:#EAE7E2;
border-radius:8px;
box-shadow:0 0 20px rgba(0,0,0,0.3);
text-align:center;
}

.t{
background-color:rgba(255,255,255,0);
padding:15px;
max-width:500px;
border:3px solid black ;
border-radius:5px;
position:absolute;

bottom:0;
right:0;
}

h1{
color:black;
}

h3{
color:silver;
}

h2{
bottom:0;
left:0;
}


p{
color:#555;
margin-bottom:30px;
}

.btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }

</style>
</head>

<body ><center>
<div class="container">
    <h1><strong>WELCOME TO HOSTEL MANAGEMENT SYSTEM </STRONG></h1>
    <form  method="post" action="login.php">
        <input class="btn" type ="submit" value="Get started"></form>
        

</div>


<div class="t">
<h3>By</h3>
<h3>Anjana Y Walagad (U03NM21T029005) </h3>
<h3>Pranali Jadhav (U03NM21T029042) </h3></div>
</body></html>