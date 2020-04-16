<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - DataTables Server Side Processing using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">DSM System Configuration</h3>
     <br />
   <div class="table-responsive">
        <form method="post" id="dynamic_form" action="{{ route('installation.show')}}">
                
                 <span id="result"></span>
            <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th colspan="2">Your Power Plant Name :</th>
                    <th colspan="2">
                        {{$power_plant_location_name}}
                        <input type="hidden" name="power_plant_location_name" value="{{$power_plant_location_name}}"/>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">Plese Create Database by this name :</th>
                    <th colspan="2">
                        {{$power_plant_database_name}}
                        <input type="hidden" name="power_plant_database_name" value="{{$power_plant_database_name}}"/>
                        
                    </th>
                </tr>
                <tr class="bg-warning">
                     <th colspan="4">
                         Please also set Database name , database username,
                         database password in .env file before proceeding Next button. 
                    </th>
                </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                <tr>
                                <td colspan="4" align="right">
                  @csrf
                  <input type="submit" name="save" id="save" class="btn btn-primary" value="Next" />
                 </td>
                </tr>
               </tfoot>
           </table>
                </form>
   </div>
  </div>
 </body>
</html>
