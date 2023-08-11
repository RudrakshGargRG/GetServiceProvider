<html>
<head>
<style>

.login-admin{
  position:absolute;
    bottom:5px;
    right:10px;
}
.meet-team{
  position:absolute;
    bottom:5px;
    right:110px;
}

.sub-main{
  width: 30%;
  margin:22px;
  float: left;
}

.button-one, .button-two, .button-three{
  text-align: center;
  cursor: pointer;
  font-size:24px;
  margin: 0 0 0 600px;
}

/*Button Two*/
.button-two {
  border-radius: 4px;
  background-color: #ffce30;;
  border: none;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
}
.button-two span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button-two span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button-two:hover span {
  padding-right: 25px;
}

.button-two:hover span:after {
  opacity: 1;
  right: 0;
}


</style>

</head>
<body>
<div class="sub-main">
      <button class="button-two" onclick="window.open('search.php','_self');"><span>Search</span></button>
      <br>
      <br>
      <br>
      <button class="button-two" onclick="window.open('contribute.php','_self');"><span>Contribute</span></button>
</div>
<div class="meet-team">
  <a href="./team.php">Meet the Team</a>
</div>
<div class="login-admin">
  <a href="admin/login.php">Admin Login</a>
</div>
</body>
</html>


