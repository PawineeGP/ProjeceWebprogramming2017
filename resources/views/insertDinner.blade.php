<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>insertDinner</title>
  </head>
  <body>
    <form class="" action="insertDinner" method="post">
      <table>
        <tr>
          <td>  <input type="text" name="Dname" value=""> name Dinner</input></td>
        </tr>
        <tr>
          <td><input type="text" name="Dcalories" value="">calories</input></td>
        </tr>
        <tr>
          <td>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="add"></input></td></td>
        </tr>
      </table>
    </form>
  </body>
</html>
