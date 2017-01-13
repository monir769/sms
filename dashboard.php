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
    padding: 28px 20px;
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
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.php"><h3><font color="yellow">Logo</font></h3>
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                        <li><a href="#"><i class="fa fa-group"></i>Students</a></li>
                        <li><a href="#"><i class="fa fa-user"></i>Teachers</a></li>
                        <li><a href="#"><i class="fa fa-odnoklassniki"></i>Parents</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>Setting</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--other contents here-->
                
               
            </div>
        </div>

    </div>


</body>
</html>
