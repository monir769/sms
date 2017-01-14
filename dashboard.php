<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
/*Main CSS*/
a:focus,a:hover,a{
    outline:none;
    text-decoration: none;
}
li,ul{
    list-style: none;
    padding: 0;
    margin: 0;
}

.home {
    background: #f6f7fa;
}

#navigation {
    background: #246263;
}

#navigation {
    padding: 0;
}

.display-table {
    display: table;
    padding: 0;
    height: 100%;
    width: 100%;
}

.display-table-row {
    display: table-row;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    float: none;
    height: 100%;
}

.v-align {
    vertical-align: top;
}

#navigation{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.logo {
    text-align: center;
}

.navi a {
    border-bottom: 1px solid rgba(44, 152, 137, 0.73);
    border-top: 1px solid #0d172e;
    color: #ffffff;
    display: block;
    font-size: 17px;
    font-weight: 500;
    padding: 20px 20px;
    text-decoration: none;
}

.navi i {
    margin-right: 15px;
    color: #4fa3a5;
}

.navi .active a {
    background: #1f7373;
    border-left: 5px solid #246263;
    padding-left: 15px;
}

.navi a:hover {
    background: #1f7373 none repeat scroll 0 0;
    border-left: 5px solid #246263;
    display: block;
    padding-left: 15px;
}
.arrow {
	text-align: center;
    float: right;
}
.sub-menu {
    background: #3d9394;
}
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

/*Main CSS*/

@media only screen and (max-device-width: 767px) {
    #navigation .navi a {
        font-size: 14px;
        padding: 20px;
        text-align: center;
    }
    #navigation .navi i {
        margin-right: 0px;
    }
    #navigation .navi a:hover,
    #navigation .navi .active a {
        background: #122143 none repeat scroll 0 0;
        border-left: none;
        display: block;
        padding-left: 20px;
    }
    .v-align header {
        padding: 12px 15px;
    }
}
@media only screen and (min-device-width:998px) and (max-device-width: 1350px){
        #navigation .logo img {
    max-width: 130px;
    padding: 16px 0 17px;
    width: 100%;
}
}
</style>

<body>
<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
      	<li class="navbar-header"><a class="navbar-brand" href="#" style="color:white"><span class="glyphicon glyphicon-home"></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li>
          <a href="#"><span class="glyphicon glyphicon-user"></span></a>
        </li>
        <li>
          <a href="#"><span class="glyphicon glyphicon-comment"></span></a>
        </li>
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-option-vertical"></span></a>
        	<ul class="dropdown-menu">
            	<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
            	<li><a href="#"><i class="fa fa-key"></i> Change Password</a></li>
            	<li><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
          	</ul>
          </li>
      </ul>
    </div>
  </div>
 </div>
</nav>



    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.php"><h3><font color="#1f7373">Logo</font></h3>
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                        <li  data-toggle="collapse" data-target="#student-menu" class="collapsed">
                        <a href="#"><i class="fa fa-group"></i>Students<span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
                        </li>
                        	<ul class="sub-menu collapse" id="student-menu">
                    			<li class="sub-menu"><a href="#">&bull; Student record</a></li>
                    			<li class="sub-menu"><a href="#">&bull; Applicant's List</a></li>
                    			<li class="sub-menu"><a href="#">&bull; Admit Student</a></li>
                		</ul>
                        <li><a href="#"><i class="fa fa-user"></i>Teachers</a></li>
                        <li><a href="#"><i class="fa fa-odnoklassniki"></i>Parents</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--other contents here-->
                
               

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

   </div>



            </div>
     </div>

</div>


</body>
</html>
