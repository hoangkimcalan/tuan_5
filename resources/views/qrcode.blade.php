<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>QR CODE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">
        <form action="{{ url('/') }}/qrcode" method="post">
            @csrf
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">MSSV</label>
                        <input type="text" class="form-control" name="mssv">
                    </div>
                </div>

            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Generate QR code</button>
            </div>
        </form>
    </div>
</body>

</html>
