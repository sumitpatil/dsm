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
               <!-- <form method="post" id="dynamic_form" action="{{ route('master.insert')}}"> -->
                <form method="post" id="dynamic_form" >
                
                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th colspan="2">Host Name : </th>
                    <th colspan="2">{{config('database.connections.mysql.host')}} </th>
                </tr>
                
                <tr>
                    <th colspan="2">Database Name : </th>
                    <th colspan="2">{{config('database.connections.mysql.database')}} </th>
                </tr>
                <tr>
                    <th colspan="2">Database Username : </th>
                    <th colspan="2">{{config('database.connections.mysql.username')}} </th>
                </tr>
                <tr>
                    <th colspan="2">Database Password : </th>
                    <th colspan="2">{{config('database.connections.mysql.password')}} </th>
                </tr>
                <tr>
                    <th colspan="4">
                        If aboves values not valid then Please set Database name , database username,
                         database password in .env file before proceeding forward.
                    </th>
                </tr>
                <tr>
                    <th colspan="2">Power Plant Name</th>
                    <th colspan="2"><input type="text" name="power_plant_name" id="power_plant_name" /> </th>
                </tr>
                <tr>
                    <th width="25%">Unit Number</th>
                    <th width="25%">Stage Number</th>
                    <th width="25%">Capacity (MW)</th>
                    <th width="25%">Action</th>

                </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                <tr>
                                <td colspan="3" align="right">&nbsp;</td>
                                <td>
                  @csrf
                  <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                 </td>
                </tr>
               </tfoot>
           </table>
                </form>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="number" name="unit_name[]" class="form-control" /></td>';
        html += '<td><input type="number" name="stage_name[]" class="form-control" /></td>';
        html += '<td><input type="number" name="capacity_name[]" class="form-control" /></td>';

        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("master.insert") }}', 
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});
</script>
