@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHECK ME</title>
      <!-- css -->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom-styles.css">
      <link rel="stylesheet" href="css/bootstrap-responsive.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!-- css -->
      <!--  -->
      <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- MetisMenu CSS -->
     <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css" rel="stylesheet">

     <!-- Morris Charts CSS -->
     <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/morrisjs/morris.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <!-- script -->
	   <script type="text/javascript" src="http://www.bt-50.com/js/main.js?3"></script>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <!-- scrip showfuntion -->
     <script type="text/javascript" src="js/Myscript.js"></script>



</head>

<body>

	<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large"onclick="w3_close()">&times;</button>
		<label for="data" class="w3-bar-item w3-button button2">ข้อมูลที่เกี่ยวข้อง</label>
		<a href="http://women.trueid.net/detail/48074" class="w3-bar-item w3-button" target="_blank">ข้อมูลอาหารแคลอรี่ต่ำ</a>
		<a href="https://www.honestdocs.co/table-of-calories-in-food-types" class="w3-bar-item w3-button" target="_blank">ข้อมูลจำนวนแคลอรีของอาหารชนิดต่างๆ่</a>
    <a href="https://www.w3schools.com/" class="w3-bar-item w3-button" target="_blank">W3School</a>
    <a href="https://laravel.com/" class="w3-bar-item w3-button" target="_blank">Laravel Framwwork</a>
	</div>
	<div zclass="w3-main" id="main">
		<div class="w3-teal">
      <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776; Check <img src="img\ico.png" alt=""></button>
		</div>
    <div id="wrapper">
      <div class="navbar-default sidebar" role="navigation">

        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
          <img src="img/yoga.png" alt=""><br>
          <br>
            <li>
              <a href="#"><h4>สวัสดี :{{ Auth::user()->name }}</h4></span></a>
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }} <span class="fa arrow"></span>
                                </form>

                        </ul>
                    </li>
                @endif
              </li>
          </ul>
        </div><!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">CHECK CHECK</h1>
          </div>
        </div>   <!-- /.col-lg-12/row-->
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><img src="img/tooncomment-1.png" alt=""></div>
                    <div></div>
                  </div>
                </div>
              </div>
              <!-- model showlistfuntion -->

                <div class="panel-footer">
                  <span class="pull-left"><button id="myBtn">คำแนะนำสำหรับเรา</button></span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>

                <!-- /modelfun -->
              <!-- start model #1 -->
              <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                  <div class="contact-info">
                    <h1>เขียนคำแนะนำสำหรับเรา</h1>
                      <h2>คำแนะนำของท่านเราจะนำไปปรับปรุง</h2>
                      <!-- POST -->

                      <form action="InsertContact" method="post">
                        <div class="controls">
                        <input id="name" name="name" type="text" class="span5" placeholder="NAME">
                        <input id="email" name="email" type="email" class="span5" placeholder="E-mail">
                        </div>
                        <div class="controls">
                          <textarea id="message" name="message" class="span5" placeholder="Message here.." rows="5"></textarea>
                        </div>
                          <div class="controls">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="controls">
                          <button id="contact-submit" type="submit" class="btn">Submit</button>
                        </div>
                      </form>

                      </div>


                </div>

              </div>

            </div>
          </div>
          <!-- col-lg-3 col-md-6 #1-->
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><img src="img/com-menu.png" alt=""></div>
                      <div></div>
                    </div>
                </div>
              </div>

              <a href="{{url('/food')}}" >
                <div class="panel-footer">
                  <span class="pull-left">วันนี้คุณกินอะไรบ้าง</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                  </div>
              </a>
            </div>
          </div>
          <!-- /col-lg-3 col-md-6 #2-->
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><img src="img/foodmenu.png" alt=""></div>
                    <div></div>
                  </div>
                </div>
              </div>

              <a href="{{url('/addfood')}}">
                <div class="panel-footer">
                  <span class="pull-left">เพิ่มเมนูอาหาร</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
            <!-- /col-lg-3 col-md-6 #3-->
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-support fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge"><img src="img/chart.png" alt=""></div>
                    <div></div>
                  </div>
                </div>
              </div>
              <a href="{{url('/home')}}">
                <div class="panel-footer">
                  <span class="pull-left">สถิติการรับประทานอาหาร</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
              <!-- /col-lg-3 col-md-6 #4-->
              <!-- start chart -->
          <div class="row">
            <div class="col-lg-8">
              <div class="panel panel-default">
                <div class="panel-heading">
                   <!-- <i class="fa fa-bar-chart-o fa-fw"></i>สถิติการรับประทานอาหาร -->
                   สถิติการรับประทานอาหาร
                    <div class="pull-right">
                      <div class="btn-group">

                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>  <!-- /.panel-body -->
              </div>
            </div>
          <!-- /chart  row-->
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-bell fa-fw"></i> เมนูแนะนำ
              </div>
              <!-- /.panel-heading -->

              <div class="panel-body">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <img src="img/checked.png" >
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">แกงส้ม</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <img src="img/ks.png" width="200" height="200" style="border-radius:50px;margin-right:5px;" >
                      <div class="">
                        <br>
                        <p><strong>&nbsp;แกงส้ม 1 ถ้วย ให้พลังงาน : 40 กิโลแคลอรี่</strong></p>
                        <p>&nbsp;&nbsp;บอกเลยว่าเจ้าแกงส้มเนี่ยแคลอรี่น้อยแบบสุดๆไปเลยล่ะค่ะ เพราะให้พลังงานเพียงแค่ 40 แคลอรี่เท่านั้น <br>โอ้โห!
                          ต่อให้ทานคู่กับข้าวสวยก็ยังไม่อ้วนอยู่ดีค่ะ สาวๆที่กำลังลดความอ้วนอยู่ ห้ามพลาดเด็ดขาดค่ะสำหรับเมนูนี้</p>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <img src="img/checked.png" alt="">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">แกงจืดเต้าหู้ไม่ใส่หมูสับ</a>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                  <img src="img/ka.png" width="200" height="200" style="border-radius:50px;margin-right:5px;" >
                    <div class="">
                      <br>
                      <p><strong>&nbsp;แกงจืดเต้าหู้ไม่ใส่หมูสับ 1 ถ้วย ให้พลังงาน : 80 กิโลแคลอรี่ ใส่หมูสับ 110 กิโลแคลอรี่่</strong></p>
                      <p>&nbsp;&nbsp;บอกเลยยค่ะว่าเป็นเมนูสุดคลาสสิคที่ไม่ว่าบ้านไหนๆก็ทำกินเองได้ไม่ยากค่ะ จะเคร่งครัดหน่อย ไม่ใส่หมูสับก็ยังอร่อยอยู่ค่ะ
                      หรือจะเพิ่มหมูสับมาสักนิด ก็ไม่ได้ทำให้อ้วนขึ้นสักเท่าไหร่ค่ะ ทั้งอิ่มอร่อยชุ่มคอ จำไว้แล้วทำกินเย็นนี้เลย!้</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <img src="img/checked.png" >
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">ไข่ต้ม</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">
                    <img src="img/egg.png" width="200" height="200" style="border-radius:50px;margin-right:5px;" >
                      <div class="">
                      <br>
                        <p><strong>&nbsp;ไข่ต้ม 1 ฟอง ให้พลังงาน:75 กิโลแคลอรี่่่</strong></p>
                        <p>&nbsp;&nbsp;  ขาดไม่ได้จริงๆค่ะสำหรับ ไข่ต้ม ที่ทั้งอยู่ท้องแถมยังให้แคลอรี่ที่น้อย
                        ที่สำคัญกว่าสิ่งอื่นไหนก็คือหาทานง่ายค่ะ ไม่ต้องเหนื่อยทำอาหารก็ผอมได้ค่ะสาวๆ้</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!--wrapper-->
    <div class="col-md-12 page-body margin-top-50 footer">
    <footer>
      <br>
      <center>
      <p>©Webprogrammig 2017 |CSUBU</p>
      <p><strong>Design By :</strong>Pawinee Purachanai (GIGIE) </p>
      <div class="uipasta-credit"> THANK :  <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
    </center>
    </footer>
  </div>
</div> <!-- /w3-main -->
<!-- script -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugin.js"></script>

   <!-- Main Javascript File  -->
   <script type="text/javascript" src="js/scripts.js"></script>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
<!-- scrip showf -->
<script type="text/javascript">
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/raphael/raphael.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/vendor/morrisjs/morris.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>
</body>
</html>

@endsection
