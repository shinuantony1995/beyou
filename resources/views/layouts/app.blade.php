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
#search{
  padding-top:19px;
  height:30px;
  width:95%;
  border-radius: 13px;
  font-size:10pt;
  background-color:#000;
  color:#fff;
  text-align:center;
  padding-bottom: 11px;
}
</style>
</head>
<body>
<div class="container1">
<span>
<div class="dropdown">
   <span ><img src="./images/home.png" width="30px" height="30px"></span> 
  <div class="dropdown-content">
    <a href="./">Home</a>
    <a href="blog">Blog</a>
    <a href="about">About</a>
    <a href="contact">Contact</a>
  </div>
</div></span>
<span><input type="text" id="search" name="serach" placeholder="Search...."></span>
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
