<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="js/Myscript.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">

            <button id="myBtn">อาหารเช้า</button>
            <div id="myModal" class="modal-1">
              <div class="modal-content">
                <span class="closeb">&times;</span>
                  <form class="" action="insertBreak" method="post">
                    <table>
                      <tr>
                        <td>  <input type="text" name="Bname" value=""> name Break</input></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="Bcalories" value="">calories</input></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                      </tr>
                      <tr>
                        <td><input type="submit" name="submit" value="add"></input></td></td>
                      </tr>
                    </table>
                  </form>
              </div>
            </div>
            </div>

            <!-- เที่ยง -->
            <button id="myBtnL">อาหารเที่ยง</button>
            <div id="myModalL" class="modal">
              <div class="modal-content">
                <span class="closef">&times;</span>
                  <form class="" action="insertLunch" method="post">
                    <table>
                      <tr>
                        <td>  <input type="text" name="Lname" value=""> name Lunch</input></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="Lcalories" value="">calories</input></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                      </tr>
                      <tr>
                        <td><input type="submit" name="submit" value="add"></input></td></td>
                      </tr>
                    </table>
                  </form>
              </div>
            </div>
            <!--  dinner-->
            <button id="myBtnD">อาหารเย็น</button>
            <div id="myModalD" class="modal">
              <div class="modal-content">
                <span class="closed">&times;</span>
                  <form class="" action="insertDinner" method="post">
                    <table>
                      <tr>
                        <td>  <input type="text" name="Dname" value=""> name Dinner</input></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="Dcalories" value="">calories</input></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
                      </tr>
                      <tr>
                        <td><input type="submit" name="submit" value="add"></input></td></td>
                      </tr>
                    </table>
                  </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- script Break-->

    <script type="text/javascript">
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeb")[0];

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

    <!-- script Lunch -->

        <script type="text/javascript">
        var modal = document.getElementById('myModalL');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtnL");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closef")[0];

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

    <!-- script dinner -->

        <script type="text/javascript">
        var modal = document.getElementById('myModalD');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtnD");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("closed")[0];

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

  </body>
</html>
