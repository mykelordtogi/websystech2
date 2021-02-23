<!DOCTYPE html>
<html>
<head><title>Page Title</title>

  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>


</head>

<style>
body{
font-family: Arial, Helvetica, sans-serif;
background-color: lightgray;

}

#male,#female
{
  position: absolute;
  left: 4%;
}
#male1,#female1
{
  position: absolute;
  left: 9%;
}

#che1,#che2,#che3,#che4,#che5,#che6,#che7
{
position: absolute;
left: 5%;
}

#cho1,#cho2,#cho3,#cho4,#cho5,#cho6,#cho7
{
  position: absolute;
left: 10%;
}

.button1 {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

#resetbtn
{
padding: 14px 20px;
  background-color: #f44336;
}
#submitbtn
{
background-color: dodgerblue;
}
#resetbtn,#submitbtn {
  float: left;
  width: 25%;
}

#myfirstdiv
{
  border: 3px solid black;
  width: 500px;
  background-color:#34eb40;
}
#myform
{
  position: relative;
  left: 10px;
  top: 10px;
}

#myform input[type=text]:focus, #myform input[type=email]:focus,#myform textarea:focus {
  background-color: #ddd;
  outline: none;
}
.myinput
{
  
  height: 20px;
}

#mydepartment
{
  width: 150px;
height: 30px;
}
</style>

<body>

  <div id="myfirstdiv"> 
<form action="submitpage.php" method="POST" id="myform">
<b>Name:</b><br><input class="myinput" type="text" name="wname" placeholder="Enter name"><br>
<b>Father's Name:</b><br><input class="myinput" type="text" name="faname" placeholder="Father's Name"><br>
<b>Mother's Name:</b><br><input class="myinput" type="text" name="maname" placeholder="Mother's Name"><br>
<b>Email:</b><br><input class="myinput" type="email" name="mail" placeholder="Enter Email"><br>
<b>Department:</b><br>
<select id="mydepartment" name="departments">
    <option value="IT">IT</option>
    <option value="EDUCATION">EDUCATION</option>
    <option value="NURSE">NURSING</option>
    <option value="CRIMINOLOGY">CRIMINOLOGY</option>
  </select><br><br>
  <b>Gender:</b> <br>
  <br>
  <input type="radio" id="male" name="gender" value="male">
<label id="male1" for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label id="female1" for="female">Female</label><br>

<br>
<br>
<label><b>Address:</b></label><br>
<textarea rows="4" cols="50" name="myaddress" placeholder="Enter Address here"></textarea><br><br>


<label><b>Language known:</b></label><br><br>
  <div id="mylangdiv">
    <label id="cho1"  for="che1">English</label>
    <input id="che1" type="checkbox" name="lang[]" value="English"><br>
    <label id="cho2"  for="che2">Visayan</label>
    <input id="che2" type="checkbox" name="lang[]" value="Visayan"><br>
    <label id="cho3"  for="che3">Tagalog</label>
    <input id="che3" type="checkbox" name="lang[]" value="Tagalog"><br>

    <label id="cho4"  for="che4">Hiligaynon</label>
    <input id="che4" type="checkbox" name="lang[]" value="Hiligaynon"><br>
    <label id="cho5"  for="che5">Ilocano</label>
    <input id="che5" type="checkbox" name="lang[]" value="Ilocano"><br>
    <label id="cho6"  for="che6">Bicolano</label>
    <input id="che6" type="checkbox" name="lang[]" value="Bicolano"><br>

    <label id="cho7"  for="che7">Others</label>
    <input id="che7" type="checkbox" name="lang[]" value="Others">
    </div>
<br>
<br>

<div id="submitreset">
  <input id="submitbtn" class="button1" type="submit" value="Submit">
  <input id="resetbtn" class="button1" type="button" value="Reset" onclick="location.href='http://localhost/websystech2/prelim_exer2.php';">
  </div>

</form>


</div>


 




    
</body>
</html>