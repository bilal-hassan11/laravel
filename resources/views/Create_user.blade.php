<!DOCTYPE html>
<html>
<head>
  <title>Laravel Sweet Alert2 Confirm Delete Example-nicesnippets.com</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card mt-5">
          <div class="card-header">
            <h5>Laravel Sweet Alert2 Confirm Delete Example-nicesnippets.com</h5>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <td>Name</td>
                <td>Email</td>
                <td width="5%">Action</td>
              </tr>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>  
                  <td>{{ $user->email }}</td>  
                  <td>
                    <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $user->id }}" data-action="{{ route('users.destroy',$user->id) }}" onclick="deleteConfirmation({{$user->id}})"> Delete</button>
                  </td>  
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/users')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
</body>
</html>