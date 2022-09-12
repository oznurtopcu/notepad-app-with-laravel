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
                        <div class="card-body">
                            <form action="{{ route('notes') }}" method="post">
                                @csrf
                                <div class="mb-3" style="width: 275px">
                                    <label class="form-label">Başlık:</label>
                                    <textarea type="text" class="form-control mb-3" required="true" name="title"></textarea>
                                    <label class="form-label">Not:</label>
                                    <textarea type="text" class="form-control mb-3" required="true" name="myNote" style="height: 150px"></textarea>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary mb-2">Not Ekle</button>
                                </div>
                            </form>

                            <a href="{{ route('dashboard') }}" type="submit" class="btn btn-primary d-grid gap-2 mx-auto mb-2">Ana Sayfa</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</div>
</html>



