<!DOCTYPE html>
<html lang="en">
<head>
  <title>Applicant's List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  	.buttonnew {
    cursor: pointer;
}
.buttonnew {
    border: none;
    padding: 8px 16px;
}
.buttonnew {
    color: #fff!important;
    background-color: #4CAF50!important;
}
.buttonnew:hover {
    background-color: #5bc0de!important;
    color: #fff!important;
}
   </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-success panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Applicant's List</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="buttonnew">Create New</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs"><div align="center">No.</div></th>
                        <th><div align="center">Name</div></th>
                        <th><div align="center">Class</div></th>
                        <th><div align="center">Date</div></th>
                        <th><div align="center"><em class="fa fa-cog"></em></div></th>
                    </tr> 
                  </thead>
                  <tbody>
                          <tr>
                            <td class="hidden-xs" align="center">1</td>
                            <td align="center">Abu</td>
                            <td align="center">7</td>
                            <td align="center">10-01-2017</td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>
                          <tr>
                            <td class="hidden-xs" align="center">2</td>
                            <td align="center">Faisal</td>
                            <td align="center">9</td>
                            <td align="center">12-01-2017</td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>
                          <tr>
                            <td class="hidden-xs" align="center">3</td>
                            <td align="center">Ahmed</td>
                            <td align="center">8</td>
                            <td align="center">09-01-2017</td>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4"><br />Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>


</body>
</html>
