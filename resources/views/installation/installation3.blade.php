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
            @if(config('database.connections.mysql.database') != $power_plant_database_name)
            <h3 align="center">**Error : Please Create database and Also Store it in .env file.</h3>

            <form method="post" id="dynamic_form" action="{{ route('installation.show')}}">

                <span id="result"></span>
                <table class="table table-bordered table-striped" id="user_table">
                    <thead>
                        <tr>
                            <th colspan="2">Your Power Plant Name :</th>
                            <th colspan="2">
                                {{$power_plant_location_name}}
                                <input type="hidden" name="power_plant_location_name" value="{{$power_plant_location_name}}" />
                            </th>
                        </tr>
                        <tr class="bg-danger">
                            <th colspan="2">Plese Create Database by this name :</th>
                            <th colspan="2">
                                {{$power_plant_database_name}}
                                <input type="hidden" name="power_plant_database_name" value="{{$power_plant_database_name}}" />

                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                Please also set Database name , database username,
                                database password in .env file before proceeding forward.
                            </th>
                        </tr>
                        <tr class="bg-success">
                            <th colspan="4">
                                Take Action : <br>
                                Please restart server....[Use Ctrl + C and php artisan serve]
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                .env File Details are as follows :
                            </th>
                        </tr>
                        <tr>
                            <th colspan="2">Host Name : </th>
                            <th colspan="2">{{config('database.connections.mysql.host')}} </th>
                        </tr>

                        <tr class="bg-danger">
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

            @else

            <form method="post" id="dynamic_form" action="{{ route('installation.store')}}" class="bg-success">
    
            <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th colspan="2">Your Power Plant Name :</th>
                        <th colspan="2">
                            {{$power_plant_location_name}}
                            <input type="hidden" name="power_plant_location_name" value="{{$power_plant_location_name}}" />
                        </th>
                    </tr>
                 
                    <tr>
                        <th colspan="4">
                            .env File Details are as follows :
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">Host Name : </th>
                        <th colspan="2">{{config('database.connections.mysql.host')}} </th>
                    </tr>

                    <tr >
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


            @endif
        </div>
    </div>
</body>

</html>