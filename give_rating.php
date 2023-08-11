<?php
include 'db_conn.php';
$spid=$_POST['toRate'];

?>
<html>

<head>
  <meta charset="UTF-8">
  <style>

*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
</style>
  <title>Star rating using pure CSS</title>
</head>

<body>
  <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
  <br><br><br>
<input type="submit" id="submitButton" name="Submit" onClick="myFunction()">

<form action="rate.php" method="post" id="rating"> 
</form>
</body>
<script>
function myFunction() 
{
var rating=0;
if(document.getElementById('star5').checked == true) 
{   
    rating=5;
} 
else 
{  
      if(document.getElementById('star4').checked==true)
      {
          rating=4;
      } 
      else
      {
          if(document.getElementById('star3').checked==true)
          {
              rating=3;
          }
          else
          {
            if(document.getElementById('star2').checked==true)
            {
              rating=2;
            }
            else
            {
                if(document.getElementById('star1').checked==true)
                {
                    rating=1;
                }
                else
                {
                    alert("You need to select at least 1 star!");
                }
            }
          }
      }
}
if(rating!=0)
{

}  
}
</script>
</html>