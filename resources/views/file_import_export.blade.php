<html lang="en">
<head>
    <title>Laravel 5 maatwebsite export into csv and excel and import into DB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
    <div class="panel panel-primary">
 <div class="panel-heading">Laravel 5 maatwebsite export into csv and excel and import into DB</div>
  <div class="panel-body"> 
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <a href="{{ route('excel-file',['type'=>'xls']) }}">Download Excel xls</a> |
        <a href="{{ route('excel-file',['type'=>'xlsx']) }}">Download Excel xlsx</a> |
        <a href="{{ route('excel-file',['type'=>'csv']) }}">Download CSV</a>
      </div>
   </div>     
       <form method="POST" action="{{url('import-csv-excel')}}" enctype="multipart/form-data">
        <div class="row">
          <input name="sample_file" type="file" class="form-control">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class="btn btn-primary waves-effect waves-light" type="submit">
                Valider
            </button>
            </div>

            
        </div>
       </form>
 </div>
</div>
</body>
</html>