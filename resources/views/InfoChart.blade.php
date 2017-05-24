@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chart</div>
                <table class="table">
                  <tr>
                    <td>ID</td>
                      <td>InfoCharts</td>
                        <td>created_at</td>
                        <td>update_at</td>
                  </tr>

                  <?php
                  foreach ($chart as $chart) {
                  ?>
                  <tr>
                    <td><?php echo $chart->ID ;?></td>
                    <td><?php echo $chart->InfoCharts; ?></td>
                    <td><?php echo $chart ->created_at; ?></td>
                    <td><?php echo $chart->updated_at; ?></td>
                  </tr>
                  <?php
                  }
                 ?>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
