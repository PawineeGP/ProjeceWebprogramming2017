<!DOCTYPE html>
<html>
  <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>วันนี้คคุณกินอะไรบ้าง</title>
      <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">


              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">อาหารที่รับประทาน</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <form class="barkf" name="frm">
                    <li>อาหารเช้า</li>
                    <input type="checkbox" onclick="tick(frm)" value="120">ข้าวต้มหมู <br>
                    <input type="checkbox" onclick="tick(frm)" value="448">ข้าวไข่เจียว<br>
                    <input type="checkbox" onclick="tick(frm)" value="557">ข้าวผัดหมูใส่ไข่ <br>
                    <input type="checkbox" onclick="tick(frm)" value="440">ข้าวเหนียวหมูทอด<br>
                    <input type="checkbox" onclick="tick(frm)" value="595">ข้าวผัดกุ้งใส่ไข่<br>

                    <li>อาหารเที่ยง</li>
                    <input type="checkbox" onclick="tick(frm)" value="630">ข้าวกระเพราไก่ไข่ดาว <br>
                    <input type="checkbox" onclick="tick(frm)" value="525">ข้าวหมูทอดกระเทียม<br>
                    <input type="checkbox" onclick="tick(frm)" value="612">ข้าวผัดแหนม <br>
                    <input type="checkbox" onclick="tick(frm)" value="457">ข้าวพะแนงเนื้อ<br>
                    <input type="checkbox" onclick="tick(frm)" value="483">ข้าวราดแกงเขียวหวานไก่<br>

                    <li>อาหารเย็น</li>
                    <input type="checkbox" onclick="tick(frm)" value="420">ข้าวคะน้าหมูกรอบ <br>
                    <input type="checkbox" onclick="tick(frm)" value="457">ข้าวพะแนงเนื้อ<br>
                    <input type="checkbox" onclick="tick(frm)" value="180">สุกี้แห้งทะเล<br>
                    <input type="checkbox" nonclick="tick(frm)" value="375">หมูกระทะ<br>
                    <input type="checkbox" onclick="tick(frm)" value="300">บะหมี่น้ำต้มยำหมู<br>

                    <input type="text" name="sum" value="0" />


                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  <!-- /cal-12 -->
    </div>
  </div>
</div>
<!-- script -->
<script type="text/javascript">
function tick( frm )
{
  var sum=0;
  for (var i = 0; i < frm.elements.length; i++) {
    var chk = frm.elements;
    if ( chk.type == 'checkbox' && chk.checked )
    {
      sum += parseFloat( chk.value );
    };
  };
  frm.sum.value = sum;
}

</script>

  </body>
</html>
