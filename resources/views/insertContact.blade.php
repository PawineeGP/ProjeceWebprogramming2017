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
                          <td>ชื่อ</td>
                          <td>E-mail</td>
                          <td>คำแนะนำ</td>
                            <td>created_at</td>
                            <td>updated_at</td>
                      </tr>

                      <?php
                      foreach ($contact as $contact) {
                      ?>
                      <tr>
                        <td><?php echo $contact->ID;?></td>
                        <td><?php echo $contact->name; ?></td>
                        <td><?php echo $contact->email; ?></td>
                        <td><?php echo $contact->message; ?></td>
                        <td><?php echo $contact ->created_at; ?></td>
                        <td><?php echo $contact->updated_at; ?></td>
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
