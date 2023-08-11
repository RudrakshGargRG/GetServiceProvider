<html>
<head>
<style>
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
  
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="SquareQuick_2021112911452530_copy_500x333_2.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img2.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img4.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
      </div>
    </div>
  </div>
</div>
</html>