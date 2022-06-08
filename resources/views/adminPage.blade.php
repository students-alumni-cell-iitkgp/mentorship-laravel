<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mentorship | AdminPage</title>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <style type="text/css">
      body{
          width:100%;
          height:100%;
          background-color:#dee2e6;
      }
    .section1{
        display:flex;
        justify-content:center;
        align-items:center;
        width:80%;
        margin:auto;
        padding:40px;
        
  vertical-align: middle;
    }
  </style>

</head>

<body>
   
<div class="section1">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Table Name</th>
      <th scope="col">Count</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Users</td>
      <td>{{ $users }}</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mentees</td>
      <td>{{ $mentees }}</td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mentors</td>
      <td>{{ $mentors }}</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Migrations</td>
      <td>{{ $migrations }}</td>
    </tr> 
    <tr>
      <th scope="row">5</th>
      <td>Preferences</td>
      <td>{{ $preferences }}</td>
    </tr>
      <th scope="row">6</th>
      <td>Preference_codes</td>
      <td>{{ $preference_codes }}</td>
    </tr>

   
  </tbody>
</table>
</div>

</body>
</html>


