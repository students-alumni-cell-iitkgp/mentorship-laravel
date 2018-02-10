
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
    // { "searchable": false },
     //{ "searchable": false },
    // null,
    // { "searchable": false },
     ]
   });
   document.getElementById("mySidenav").style.width = "250px";
   document.getElementById("main").style.marginLeft = "250px";
 } );

 function copy_mail(element) {

 var $temp = $("<input>");
 $("body").append($temp);
 $temp.val($(element).text()).select();
 document.execCommand("copy");
 $temp.remove();
 alert("Emails have been succesfully copied!");
}
</script>
<style type="text/css">
    body {
    background-image: url('../img/bg.jpg');
  }
</style>
</head>
<body>
 

    @include('profile.navbar')
  
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
    To <strong>copy</strong> all the emails in the page : <button type="button" class="btn btn-primary" id="copy_mail" onclick="copy_mail('.email')">COPY</button>
    <br>
    <table id="example" class="display" cellspacing="0" width="100%">
      <thead>
       <tr>
        <th>ID</th>
        <th>ALUMNI</th>
        <th>EMAIL</th>
        <th>INDUSTRY</th>
        <th>TAGS</th>
      

      </tr>
    </thead>
    <tbody>
      @foreach($mentors as $mentor)
      <tr>
        <td>{{$mentor['id']}}</td> 
        <td>{{$mentor['name']}}</td>        
        <td class="email">{{$mentor['email'].' '}}</td>
        <td>{{$mentor['firm']}}</td>




    <td>{{$mentor['pout']}}</td>


  </tr>
  @endforeach
</tbody>
</table>
</div>


<script type="text/javascript">
  // For demo to fit into DataTables site builder...
  $('#example')
  .removeClass( 'display' )
  .addClass('table table-striped table-bordered');
</script>
</body>
</html>