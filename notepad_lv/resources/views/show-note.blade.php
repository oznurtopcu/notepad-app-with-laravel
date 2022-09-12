<!DOCTYPE html>
<html lang="en">
<div class="form-card" style="height: 100vh">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=
, initial-scale=1.0">
        <title>File Upload</title>
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

                        <ol class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="me-auto">
                                    <div class="fw-bold mb-3">{{ $showNote->note_title }}</div>
                                    <div class="text-break">{{ $showNote->note_content }}</div>
                                </div>
                            </li>
                        </ol>

                        <div class="btn-group d-flex mb-3" role="group">

                            <a href="edit-form.php?id=<?php echo "get_note_id"; ?>" class="btn btn-outline-primary">Düzenle</a>
                            <a href="{{ route('delete') }}?id={{ $showNote->id }}" class="btn btn-outline-primary">Sil</a>
                        </div>

                        <a href="{{ route('dashboard') }}" type="submit" class="btn btn-primary d-grid gap-2 mx-auto mb-2">Ana Sayfa</a>
                        <a href="{{ route('note-control') }}" type="submit" class="btn btn-primary d-grid gap-2 mx-auto mb-2">Geri</a>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>

</div>
</html>



