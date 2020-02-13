
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {


      $('#example').DataTable(
      {
       "columns": [

       { "searchable": false },
       null,
       null,
       null,
       null,
       null,
       null,
       null,
    // { "searchable": false },
     //{ "searchable": false },
    // null,
    // { "searchable": false },
    ]
  });
      
    } );

    <?php 

    ?>

  </script>
  <style type="text/css">
  body {
    background-image: url('../img/bg.jpg');
  }
</style>
</head>
<body>

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
       <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>
       <a style="padding: 0px;margin-left: 0px" class="navbar-brand" href="#"><img height="80" style="padding-top: 10px;padding-left: 15px" width="150" src="{{ asset('img/SAMP_logo_2020.png') }}" alt=""></a>
   </div>
   <div id="nav_pc" style="margin-top: 1.4em" class="collapse navbar-collapse">



           <?php 
           if (Auth::check()) {
            ?>          
              <a href="{{ url('/logout') }}">
            
            <button  style="margin-right: 5px;"  name="logout" class="btn btn-danger navbar-btn navbar-right" > Logout</button>
            </a>
          <?php 
          }
          ?>

       <button style="background-color:#2f4c73;border: 0px;font-stretch: expanded;margin-right: 5px;" onclick="window.open('img/brochure.pdf')"  class="btn btn-danger navbar-btn navbar-right">SAMP Brochure</button>
       <ul style=" margin-right: 10px"  class="nav navbar-nav navbar-right ">

           <li class="nav_list"><a href="{{ url('/') }}">Home</a></li>
           <li class="nav_list"><a href="{{ url('/faq') }}" >FAQs</a></li>
           <li class="nav_list"><a href="{{ url('/#contact') }}">Contact us</a></li>





       </ul>

   </div>


</div>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    @if($message!='')
    <div class="alert alert-success">
      <strong>Message :</strong>{{$message }}
    </div>
    <br>
    @endif
    @if (session('message'))
    <div class="alert alert-success">
      <strong>Message : {{ session('message') }}</strong>
    </div>
    @endif
    @if (session('Error'))
    <div class="alert alert-danger">
      <strong>Error : {{ session('Error') }}</strong>
    </div>
    @endif
    
    <br>
    <table id="example" class="display" cellspacing="0" width="100%">
      <thead>
       <tr>
        <th>ID</th>
        <th>Area of Expertise</th>
        <th>Department</th>
        
        <th>Firm</th>
        

      </tr>
    </thead>
    <tbody>
      @foreach($mentors as $mentor)

      @if ( $mentor['id'] < 9 && $mentor['full']<$mentor['mentee']) 

      <tr>

        <td>19MP00{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        
        <td>{{$mentor['firm']}}</td>



      </tr>
      @elseif ( $mentor['id'] < 9 && $mentor['full']>= $mentor['mentee']) 

      <tr style="background-color: red;">

        <td>19MP00{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        
        <td>{{$mentor['firm']}}</td>



      </tr>
      @elseif ( $mentor['id'] < 99 && $mentor['id'] > 9 && $mentor['full']< $mentor['mentee'])

      <tr>

        <td>19MP0{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        
        <td>{{$mentor['firm']}}</td>




      </tr>
      @elseif ( $mentor['id'] < 99 && $mentor['id'] > 9 && $mentor['full']>= $mentor['mentee'])

      <tr style="background-color: red;">

        <td>19MP0{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        
        <td>{{$mentor['firm']}}</td>




      </tr>
      @elseif ( $mentor['id'] > 99 && $mentor['full']< $mentor['mentee'])

      <tr>

        <td>19MP{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        
        <td>{{$mentor['firm']}}</td>




      </tr>
      @elseif ( $mentor['id'] > 99 && $mentor['full']>= $mentor['mentee'])

      <tr style="background-color: red;">

        <td>19MP{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        <td>{{App\PreferenceCode::find($mentor['pref1'])->codename}}</td>
        
        <td>{{$mentor['firm']}}</td>

      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
  <br>

 
  
  
  @if( App\Preference::where('mentee_email',Auth::user()->email)->count()>0)
  <div  align="center" >
        <span style="color: red"><b>You have already submitted your preferences!</b></span>
        <br>


      <button   name="gpreference" class="btn btn-success " disabled> Give Your Preferences</button>
      <a href="{{ url('/show') }}">

      <button   name="prev" class="btn btn-success "  > Previous Page</button>
    </a>
  </div>

  
  @else 
  <div  align="center" >
    <a href="{{ url('/gpreference') }}">

      <button   name="gpreference" class="btn btn-success "  > Give Your Preferences</button>
    </a>
    <a href="{{ url('/show') }}">

      <button   name="prev" class="btn btn-success "  > Previous Page</button>
    </a>
  </div>
  @endif

  <br>
  <br>
  <br>
</div>




<script type="text/javascript">
  // For demo to fit into DataTables site builder...
  $('#example')
  .removeClass( 'display' )
  .addClass('table table-striped table-bordered');
</script>
</body>
</html>
