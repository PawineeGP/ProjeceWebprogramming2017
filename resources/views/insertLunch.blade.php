@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chart</div>
                    <table class="table">
                      <tr>
                        <td>ID</td>
                          <td>ชื่ออาหาร</td>
                          <td>จำนวณแคลอรี่</td>
                            <td>created_at</td>
                            <td>updated_at</td>
                      </tr>

                      <?php
                      foreach ($lunch as $lunch) {
                      ?>
                      <tr>
                        <td><?php echo $lunch->id;?></td>
                        <td><?php echo $lunch->Lname; ?></td>
                        <td><?php echo $lunch->Lcalories; ?></td>
                        <td><?php echo $lunch ->created_at; ?></td>
                        <td><?php echo $lunch->updated_at; ?></td>
                      </tr>
                      <?php
                      }
                     ?>

                    </table>
                    <br>
                    <a href="{{url('/addfood')}}"><input type="button" name="text" value="เพิ่มรายการ" class="button"></a>

                </div>
            </div>
        </div>
    </div>

  </body>
</html>

@endsection
