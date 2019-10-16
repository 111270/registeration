<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
     {
  box-sizing: border-box;
}
.container {
  position: relative;
  width: 90%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #CCCCCC;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 15px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    .button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

     .dropbtn {
  padding: 12px;
  
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
 
    </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Menu</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li><br>
         <div class="dropdown">
     <button class="dropbtn">Routes</button>
     <div class="dropdown-content">
    <a href="Routepost.php">Post route</a>
    <a href="#">Search route</a>
  </div>
</div><br><br><br>
         <div class="dropdown">
     <button class="dropbtn">Community</button>
          <div class="dropdown-content">
 <a href="#">Create commmunity </a>
    <a href="#">Join community</a>
    <a href="#">Community details</a>
  </div>
</div>
</ul>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..">
       
      </div>
    </div>

    <div class="col-sm-9">
 <center><h1>Hey there</h1>     
      <h2> Thank you for joining the family</h2></center>
 <hr>
    
    <div class="container">
      <div class="row">
  <div class="column">
    <img src="time.jpg" alt="Snow" style="width:100%">
    <div class="text">Don't worry about being late</div>
  </div>
  <div class="column">
    <img src="dashb.jpg" alt="Forest" style="width:100%">
     <div class="text">Route check? No problem!</div>
  </div>
  <div class="column">
    <img src="community.jpg" alt="Mountains" style="width:100%">
    <div class="text">New comunities.</div>
  </div><br><br>
         <center> <h3>About us?</h3></center>

      <p> Studee is a website specially designed to cater to the student and to make their daily lives easier. With Studee, you get to find quick and easy routes, check on traffic and join other student communities to be able to move together. The creation of th website has led to the development of major student problem solving skills and has pushed many companies to focus on the students. 
  To find out more or need any help contact</p>

  <center><button class="button">Contact us<a href="contact.php"></button></a><center>
      <br><br>
      
        
  </div>
</div>

<footer class="container-fluid">
  <p>Studee, 2019</p>
</footer>

</body>
</html>
