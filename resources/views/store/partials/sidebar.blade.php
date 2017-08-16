
<style>
/*body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}*/

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    /*background-color: #1c1e22;*/
    background: #222;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 13px;
    text-decoration: none;
    font-size: 14px;
    color: #999;
    display: block;
    transition: 0.3s;
    background: #252525;
    border-top: 1px solid #373737;
    border-bottom: 1px solid #1A1A1A;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
    background-color: dimgray;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 25px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<!-- <body> -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" onclick="closeNav()">About</a>
  
  @foreach($categories as $category)
  <a href="#">{{$category->nombre}}</a>
  @endforeach 
  
</div>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("opaco").style.opacity = "0.5";
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
   document.getElementById("opaco").style.opacity = "1";
}
</script>
     
