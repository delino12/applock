<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Software licence expired!</title>
  </head>
  <body >

    <div class="container">
      <div class="row">
        <div class="col-md-12">

        </div>
      </div>
    </div>
    
    <div class="modal fade" id="expired-modal" tabindex="-1" role="dialog" style="margin-left: 100px;">
      <div class="modal-diaglog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">We have a technical situation here!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center p-4">
            <h1 class="lead">Your software key was not found!, contact service provider</h1>
            <p>You are getting this popup message because your software key has been altered, please contact your services provider for more information</p>
            <br />
            <a href="mailto:consultant@cavidel.com" class="btn btn-default">consultant@cavidel.com</a>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success">
              I don't know software key?
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $("#expired-modal").modal('show');
    </script>
  </body>
</html>