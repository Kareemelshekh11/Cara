<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width:50%; margin:auto; margin-top:10%;}

input{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

a{
  text-decoration: none;
  color: blue;
}
</style>
</head>
<body>
<form action="/register" method="post">
  @csrf
  <div class="container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Username</b></label>
    <input type="Email" placeholder="Enter Email" name="email" required>

    <label for="phone"><b>Phone</b></label>
    <input type="number" placeholder="Enter Phone" name="phone" required>

    <label for="adderss"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Register</button>
    <p>Have an account?<a href="/login">Login</a></p>
  </div>

</form>

</body>
</html>
