<style>
  
  .sidebar{
  position: fixed;
  top: 0;
  right:-250px;
  background-color: black;
  width: 200px;
  height: 100%;
  padding-top: 80px;
  transition: .2s;
}

ul{
  margin: 0;
  padding: 20px 0;
}

ul li{
  list-style: none;
}

ul li a{
  padding: 10px 20px;
  color: #fff;
  display: block;
  text-decoration: none;
  border-bottom: 1px solid rgba(0,0,0,0.2);
}

ul li a:hover{
  background-color: grey;
}

.sidebarBtn span{
  display: block;
  width: 35px;
  height: 3px;
  background-color: #262626;
  position: absolute;
  top:24px;
  transition: .3s;
}

.sidebarBtn span:before{
  content: '';
  width: 100%;
  height: 3px;
  background-color: #262626;
  position: absolute;
  top: -10px;
  right: 0;
  transition: .3s;
}

.sidebarBtn span:after{
  content: '';
  width: 100%;
  height: 3px;
  background-color: #262626;
  position: absolute;
  top: 10px;
  right: 0;
  transition: .3s;
}

.active{
  right: 0;
}

.sidebarBtn.toggle span{
  background-color: transparent;
}

</style>


<div class="sidebar z-30 block 2xl:hidden">
  <ul class="grid gap-y-8 justify-center items-center">
    <li><a href="#home">Home</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Contacts</a></li>
  </ul>
</div>