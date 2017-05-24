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
      <link rel="stylesheet" href="css/touchTouch.css">
      <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200">
      <link rel="stylesheet" href="https://purecss.io/combo/1.18.13?/css/main-grid.css&/css/main.css&/css/rainbow/baby-blue.css">
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
     <!-- scriptform-foodcal -->
     <script src="js/touchTouch.jquery.js"></script>
     <script>
     $(document).ready(function(){
     $().UItoTop({ easingType: 'easeOutQuart' });
     $('#stuck_container').tmStickUp({});
     $('.gallery .gall_item').touchTouch();
     });
    </script>



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
                      <form action="insertContact" mathod="post">
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

              <a href="{{url('/cal')}}" >
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
                  <ul class="button">
                    ตารางคำนวณพลังงาน
                  </ul>
                    <div class="pull-right">
                      <div class="btn-group">

                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <form class="barkf" name="frm">
                      <div class="row-12">
                        <div class="col-xs-6">
                          <lu  class="button">
                            <!-- <img src="img/rice.png" alt=""> -->
                            เลือกเมนูที่รับประทาน
                          </lu>

                            <div class=""><br></div>
                          <div class="button2">
                            <img src="img/breakf.png" alt=""> อาหารเช้า<br>
                            <div><br></div>
                            <input type="checkbox" class="option" value="120">ข้าวต้มหมู <br>
                            <input type="checkbox" class="option" value="448">ข้าวไข่เจียว<br>
                            <input type="checkbox" class="option" value="557">ข้าวผัดหมูใส่ไข่ <br>
                            <input type="checkbox" class="option" value="440">ข้าวเหนียวหมูทอด<br>
                            <input type="checkbox" class="option" value="595">ข้าวผัดกุ้งใส่ไข่<br>
                            <div><br></div>
                            <div><br></div>
                            <img src="img/lunch.png" alt=""> อาหารเที่ยง<br>
                            <div><br></div>
                            <input type="checkbox" class="option" value="630">ข้าวกระเพราไก่ไข่ดาว <br>
                            <input type="checkbox" class="option" value="525">ข้าวหมูทอดกระเทียม<br>
                            <input type="checkbox" class="option" value="612">ข้าวผัดแหนม <br>
                            <input type="checkbox" class="option" value="457">ข้าวพะแนงเนื้อ<br>
                            <input type="checkbox" class="option" value="483">ข้าวราดแกงเขียวหวานไก่<br>
                            <div><br></div>
                            <div><br></div>
                            <img src="img/dinner.png" alt=""> อาหารเย็น<br>
                            <div><br></div>
                            <input type="checkbox" class="option" value="420">ข้าวคะน้าหมูกรอบ <br>
                            <input type="checkbox" class="option" value="457">ข้าวพะแนงเนื้อ<br>
                            <input type="checkbox" onclick="option" value="180">สุกี้แห้งทะเล<br>
                            <input type="checkbox" class="option" value="375">หมูกระทะ<br>
                            <input type="checkbox" class="option" value="300">บะหมี่น้ำต้มยำหมู<br>
                            <!--  -->

                            <!-- <form class="pure-form pure-form-stacked" action="insertChart" method="post">
                              <fieldset>
                            <div class="checkTotle">พฤติกรรม

                                  <input type="button" class="totaleresult" value="Calculate" onclick="return sum()" >

                              <input class="totaleresult" type="text" id="totaleresult"/>
                              </div>
                            </fieldset>

                          </form> -->

                          </div>
                        </form>
                      </div>
                      <div class="col-xs-6">
                        <div class="row">
                          <div class="button1">
                            <ul class="showInColumn">
                              <form class="pure-form pure-form-stacked" action="insertChart" method="post">
                                <fieldset>
                                  <legend>คำนวณพลังงานที่ร่างกายต้องการ</legend>
                                    <label for="weight">น้ำหนัก </label>
                                      <input id="weight" type="text"placeholder="น้ำหนัก" /><br>
                                    <label for="height">ส่วนสูง</label>
                                      <input id="height" type="text"placeholder="ส่วนสูง" /><br>
    		                            <label for="height">อายุ</label>
                                      <input id="age" type="text" placeholder="อายุ" /><br>
                                    <label for="sex">เพศ</label>
                                    <select id="sex">
                                      <option value="">เลือกเพศ</option>
                                      <option value="ชาย">ชาย</option>
                                      <option value="หญิง">หญิง</option>
                                    </select><br>
      		                          <label for="activity">กิจกรรม</label>
                                    <select id="activity"style="width:60%;">
                                      <option value="">เลือกกิจกรรม</option>
                                      <option value="1.2">นั่งทำงานอยู่กับที่ และไม่ได้ออกกำลังกายเลย</option>
                                      <option value="1.375">ออกกำลังกายหรือเล่นกีฬาเล็กน้อย สัปดาห์ละ 1-3 วัน</option>
                                      <option value="1.55">ออกกำลังกายหรือเล่นกีฬาปานกลาง สัปดาห์ละ 3-5 วัน </option>
                                      <option value="1.725">ออกกำลังกายหรือเล่นกีฬาอย่างหนัก สัปดาห์ละ 6-7 วัน </option>
                                      <option value="1.9">ออกกำลังกายหรือเล่นกีฬาอย่างหนักเป็นประจำทุกวันเช้าเย็น</option>
                                    </select>
                                    <li>&nbsp;</li>
      			                        <li colspan="2">
                                      <input type="button" class="btn" value="Calculate" onclick="return cal()" >
      		                          </li>
                                    <li><br></li>
                                    <li colspan="2">
                                      <br>
                                      <input type="button" class="totaleresult btn" value="ดูพฤติกรรม" onclick="return sum()" >
                                      <input class="totaleresult" type="text" id="totaleresult"/>
                                    </li>
                                  </fieldset>
                                </form>
                              </ul>
                            </div>
                            <div class="cal-xs-6">
                              <div class="ResultTO">
                                <ul class="showInColumn button">
                                  <table>
                                    <tr>
                                      <li>
                                        <td>  <img src="img/weight-scale.png" alt=""><br></td>
                                      </li>
                                    </tr>
                                    <tr>
                                      <li>
                                        <span class="intable" style="font-size:20px;">แคลอรี่วันนี้
                                          <li id="total" style="font-size:65px;align:center;" class="total" >&nbsp;&nbsp;&nbsp;</li>
                                      </li>
                                    </tr>
                                  </table>
                                </ul>
                              </div>
                            <div class="ResultTO">
                              <ul class="showInColumn button">
                                <table>
                                  <tr>
                                    <li>
                                      <td>  <img src="img/weight-scale.png" alt=""><br></td>
                                    </li>
                                  </tr>
                                  <tr>
                                    <li>
                                      <span class="intable" style="font-size:16px;">แคลอรี่ที่จำเป็นต่อวัน
                                        &nbsp;<li><input class="result" type="text" id="result"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

                                    </li>
                                  </tr>
                                </table>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  <!-- /.panel-body -->
                  </div>
                </div>
          <!-- /chart  row-->
                </div> <!-- /row chart-->
                  <!-- <div class="row"> -->
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
                  </div>
                </div> <!--wrapper-->
                <div class="col-md-12 page-body margin-top-50 footer">
                  <footer>
                    <br>
                    <p>©Webprogrammig 2017 |CSUBU</p>
                    <p><strong>Design By :</strong>Pawinee Purachanai (GIGIE) </p>
                      <div class="uipasta-credit"> THANK :  <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
                  </footer>
                </div>
              </div> <!-- /w3-main -->

<!-- script -->
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
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function()
  {
    modal.style.display = "block";
  }
  span.onclick = function()
  {
    modal.style.display = "none";
  }
  window.onclick = function(event)
  {
    if (event.target == modal)
    {
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
    <!-- scriptfoodcal -->
    <script type="text/javascript">
    function cal(){
  	 var weight = document.getElementById("weight").value;
  	 var height = document.getElementById("height").value;
  	 var age = document.getElementById("age").value;
     var activity = document.getElementById("activity").value;
  	 var sex = document.getElementById("sex").value;
  	 var intweight = parseInt(weight);
  	 var intheight = parseInt(height);
  	 var intage = parseInt(age);
     var intactivity = parseFloat(activity);

  	 if(weight ==""){
        alert('กรุณากรอกน้ำหนัก');
  	 } else if(height ==""){
  	 	alert('กรุณากรอกส่วนสูง');
  	 }else if(age == ""){
        alert('กรุณากรอกอายุ');
  	 }else{
       if(sex=="ชาย"){
  	   	  var BMR = 66+(13.7*intweight)+(5*intheight)-(6.8*intage);
          var ans = (intactivity*BMR);
          var cell = Math.ceil(ans);
          document.getElementById("result").value = cell;

  	   }else if(sex=="หญิง"){
          var BMR = 665+(9.6*intweight)+(1.8*intheight)-(4.7*intage);
          var ans = (intactivity*BMR);
          var cell = Math.ceil(ans);
          document.getElementById("result").value = cell;
  	   }
  	 }
  }
    <!-- /scriptfoodcal -->
    $(document).ready(function(){
      $('.option').click(function(){
        var total=0;
        $('.option:checked').each(function(){
          total += parseInt($(this).val());
          $(this).parent();
        });
        $('.option:not(:checked)').each(function(){
          $(this).parent();
        })
        $('#total').html(''+total);
      })
    });

    </script>
    <script type="text/javascript">
      function sum(){
        var total =document.getElementById("total").value;
        var resule =document.getElementById("result").value;

        var intTotal=parseInt(total);
        var intResult=parseInt(result);
        var cal =intTotal-intResult;

        if(cal>intResult){
          var text="กินแบบนี้อ้วนแน่นอน";
          document.getElementById("totaleresult").value=text;
        }else if(cal<=intResult){
          var text="กินแบบนี้ไม่ได้แล้วนะ";
            document.getElementById("totaleresult").value=text;
        }else{
          var text="กินแบบนี้ผอมแน่นอน";
            document.getElementById("totaleresult").value=text;
        }
      }


    </script>
</body>
</html>

@endsection
