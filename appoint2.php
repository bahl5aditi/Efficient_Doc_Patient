
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("appoint.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:#cce6ff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #b3e0ff}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
div.a1{
  position: absolute;
  top: 10%;
  left: 50%;
  width: 200px;
  height: 100px;
  
}
div.a2{
  position: absolute;
  top: 10%;
  left: 70%;
  width: 200px;
  height: 100px;
  
}
div.a3{
  position: absolute;
  top: 30%;
  left: 50%;
  width: 200px;
  height: 100px;
  
}
div.a4{
  position: absolute;
  top: 30%;
  left: 70%;
  width: 200px;
  height: 100px;
  
}
div.a5{
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  height: 100px;
  
}
div.a6{
  position: absolute;
  top: 50%;
  left: 70%;
  width: 200px;
  height: 100px;
  
}

</style>
</head>
<body>

<div class="bg">
<form action="appoint3a.php" method="POST">
<div class="a1"><button class="button">9:00 AM -10:00 AM</button></div>
</form>
<form action="appoint3b.php" method="POST">
<div class="a2"><button class="button">10:00 AM -11:00 AM</button></div>
</form>
<form action="appoint3c.php" method="POST">
<div class="a3"><button class="button">11:00 AM -12:00 PM</button></div>
</form>
<form action="appoint3d.php" method="POST">
<div class="a4"><button class="button">12:00 PM -01:00 PM</button></div>
</form>
<form action="appoint3e.php" method="POST">
<div class="a5"><button class="button">03:00 PM -04:00 PM</button></div>
</form>
<form action="appoint3f.php" method="POST">
<div class="a6"><button class="button">04:00 PM -05:00 PM</button></div>
</form>

</div>



</body>
</html>
