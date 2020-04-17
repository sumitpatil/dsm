<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DSM Installation</title>
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
       <form method="post" id="dynamic_form" action="{{ route('installation.create')}}"> 
                
                 <span id="result"></span>
            <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th colspan="1">Select Power Plant Name </th>
                    <th colspan="3">
                        <select name="name" id="type" required>
                            <option >Please Select Your Power Plant Location Name</option>
                            <option value="btps">Bhusawal TPS</option>
                            <option value="cstps">Chandrapur Super TPS</option>
                            <option value="kpkdtps">Khaperkheda TPS</option>
                            <option value="ktps">Koradi TPS</option>
                            <option value="ntps">Nashik TPS</option>
                            <option value="ptps">Paras TPS</option>
                            <option value="prltps">Parly TPS</option>
                            <option value="gtps">Uran GTPS</option>

                        </select>
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
