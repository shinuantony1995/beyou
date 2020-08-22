<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.container1{
    padding-left:17px;
    background-color:#fff;
    
}
.dropbtn {
  /* background-color: #000; */
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.footer{
    color:#fff;
    padding: 20px;
    text-align: center;
    background: #000;
    margin-top: 20px;
}

.dropdown {
  position: relative;
  display: inline-block;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
/* .b{
    background-color:#000;
} */

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
@media screen and (max-width: 650px) {
    .container1 {
      width: 100%;
      display: block;
    }
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

/* .dropdown:hover .dropbtn {background-color: #000;} */
</style>
</head>
<body>
<div class="container1">
<div class="dropdown">
   <span ><img src="../images/home.png" width="30px" height="30px"></span> 
  <div class="dropdown-content">
    <a href="/">Home</a>
    <a href="blog">Blog</a>
    <a href="about">About</a>
    <a href="contact">Contact</a>
  </div>
</div>
 
</div>
<br>
<div class="container">
@yield("page-content")
</div>
 
    <div class="footer">
    All rignhts reserved @ san tech solutions
    </div>
 
</body>
</html>
