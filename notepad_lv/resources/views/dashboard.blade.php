<!DOCTYPE html>
<html lang="en">

<div class="form-card" style="height: 100vh">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=
    , initial-scale=1.0">
        <title>Note App</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
              crossorigin="anonymous">
    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="login-form d-flex justify-content-center mt-5">
                <div class="card">
                    <div class="card-header text-center">Note App</div>
                    <div class="card-body" style="width: 275px">
                        <a href="{{ route('create-note') }}" type="submit" class="btn btn-outline-secondary fw-bold d-grid gap-2 mb-2 mx-auto">Not Ekle</a>
                        <a href="{{ route('note-control') }}" type="submit" class="btn btn-outline-secondary fw-bold d-grid gap-2 mx-auto mb-4">Notlarım</a>
                        <a href="{{ route('login') }}" type="submit" class="btn btn-primary d-grid gap-2 mx-auto">Çıkış</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>

</div>
</html>



