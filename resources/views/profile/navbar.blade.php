<!--
 It contains Navbar
-->
 <style type="text/css">
   #nav {
    position: relative;
    top: 20px;

}
.nav-item{
    font-size: 1.2em;
    text-align: right;
    padding: 0px;
    margin: 0;
}
.navbar-inverse .navbar-nav>li>a{
    color: #2f4c73;
    border-radius: .2em;
}
.navbar-inverse .navbar-nav>li>a:hover{
    background-color: #2f4c73;
    color: white;
    transition: .4s;
}

</style>

<div style="background-color: white;height: 90px;border-color:#2f4c73;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">

   <div class="navbar-header">
       <button style="display: none" type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>
       <a style="padding: 0px;margin-left: 0px" class="navbar-brand" href="#"><img height="93" src="img/samp_logo.png" alt=""></a>
   </div>
   <div id="nav_pc" style="margin-top: 1.4em" class="collapse navbar-collapse">
              <a href="{{url('/logout')}}">
            
            <button  style="margin-right: 5px;"  name="logout" class="btn btn-danger navbar-btn navbar-right" > Logout</button>
            </a>


             <button style="background-color:#2f4c73;border: 0px;font-stretch: expanded;margin-right: 5px;" onclick="window.open('img/brochure.pdf')"  class="btn btn-danger navbar-btn navbar-right">SAMP Brochure</button>



       <ul style=" margin-right: 10px"  class="nav navbar-nav navbar-right ">
        


           <li class="nav_list"><a href="/" >Home</a></li>
           <li class="nav_list"><a href="/#testimonials" >Testimonials</a></li>
           <li class="nav_list"><a href="/faq" >FAQs</a></li>
           <li class="nav_list"><a href="/icebreaker" >Icebreaker</a></li>
           <li class="nav_list"><a href="/#contact" >Contact us</a></li>



       </ul>

   </div>


</div>

