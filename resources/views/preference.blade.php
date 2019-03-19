
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


  @include('profile.navbar')
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
        <th>Preference 1</th>
        <th>Preference 2</th>
        <th>Preference 3</th>
        <th>Current City</th>
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
        <td>{{App\PreferenceCode::find($mentor['pref1'])->codename}}</td>
        <?php if ($mentor['pref2'] == 'Choose your 2nd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref2'])->codename}}</td>

        <?php } ?>

        <?php if ($mentor['pref3'] == 'Choose your 3rd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref3'])->codename}}</td>
        <?php } ?>
        <td>{{$mentor['ccity']}}</td>
        <td>{{$mentor['firm']}}</td>



      </tr>
      @elseif ( $mentor['id'] < 9 && $mentor['full']>= $mentor['mentee']) 

      <tr style="background-color: red;">

        <td>19MP00{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        <td>{{App\PreferenceCode::find($mentor['pref1'])->codename}}</td>
        <?php if ($mentor['pref2'] == 'Choose your 2nd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref2'])->codename}}</td>

        <?php } ?>

        <?php if ($mentor['pref3'] == 'Choose your 3rd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref3'])->codename}}</td>
        <?php } ?>
        <td>{{$mentor['ccity']}}</td>
        <td>{{$mentor['firm']}}</td>



      </tr>
      @elseif ( $mentor['id'] < 99 && $mentor['id'] > 9 && $mentor['full']<= $mentor['mentee'])

      <tr>

        <td>19MP0{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        <td>{{App\PreferenceCode::find($mentor->pref1)->codename}}</td>
        <?php if ($mentor['pref2'] == 'Choose your 2nd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref2'])->codename}}</td>

        <?php } ?>

        <?php if ($mentor['pref3'] == 'Choose your 3rd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref3'])->codename}}</td>
        <?php } ?>
        <td>{{$mentor['ccity']}}</td>
        <td>{{$mentor['firm']}}</td>




      </tr>
      @elseif ( $mentor['id'] < 99 && $mentor['id'] > 9 && $mentor['full']>= $mentor['mentee'])

      <tr style="background-color: red;">

        <td>19MP0{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        <td>{{App\PreferenceCode::find($mentor->pref1)->codename}}</td>
        <?php if ($mentor['pref2'] == 'Choose your 2nd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref2'])->codename}}</td>

        <?php } ?>

        <?php if ($mentor['pref3'] == 'Choose your 3rd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref3'])->codename}}</td>
        <?php } ?>
        <td>{{$mentor['ccity']}}</td>
        <td>{{$mentor['firm']}}</td>




      </tr>
      @elseif ( $mentor['id'] > 99 && $mentor['full']<= $mentor['mentee'])

      <tr>

        <td>19MP{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        <td>{{App\PreferenceCode::find($mentor['pref1'])->codename}}</td>
        <?php if ($mentor['pref2'] == 'Choose your 2nd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref2'])->codename}}</td>

        <?php } ?>

        <?php if ($mentor['pref3'] == 'Choose your 3rd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref3'])->codename}}</td>
        <?php } ?>
        <td>{{$mentor['ccity']}}</td>
        <td>{{$mentor['firm']}}</td>




      </tr>
      @elseif ( $mentor['id'] > 99 && $mentor['full']>= $mentor['mentee'])

      <tr style="background-color: red;">

        <td>19MP{{$mentor['id']}}</td> 
        <td>{{$mentor['foe']}}</td>        
        <td class="email">{{$mentor['department'].' '}}</td>
        <td>{{App\PreferenceCode::find($mentor['pref1'])->codename}}</td>
        <?php if ($mentor['pref2'] == 'Choose your 2nd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref2'])->codename}}</td>

        <?php } ?>

        <?php if ($mentor['pref3'] == 'Choose your 3rd Preference')  { ?>
        <td>-----</td>
        <?php } 
        else { ?>
        <td>{{App\PreferenceCode::find($mentor['pref3'])->codename}}</td>
        <?php } ?>
        <td>{{$mentor['ccity']}}</td>
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
  </div>

  
  @else 
  <div  align="center" >
    <a href="#">

      <button   name="gpreference" class="btn btn-success "  > Give Your Preferences</button>
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
