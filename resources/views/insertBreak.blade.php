<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>insertBreak</title>
  </head>
  <body>
    <form class="" action="insertBreak" method="post">
      <table>
        <tr>
          <td>  <input type="text" name="Bname" value=""> name Break</input></td>
        </tr>
        <tr>
          <td><input type="text" name="Bcalories" value="">calories</input></td>
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
