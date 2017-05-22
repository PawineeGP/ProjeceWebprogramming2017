<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>insert from</title>
  </head>
  <body>
    <form class="" action="insertLunch" method="post">
      <table>
        <tr>
          <td>  <input type="text" name="Lname" value=""> name Lunch</input></td>
        </tr>
        <tr>
          <td><input type="text" name="Lcalories" value="">calories</input></td>
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
