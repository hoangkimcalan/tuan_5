<!DOCTYPE html>
<html>

<head>
    <title>Nhập thông tin</title>
</head>

<body>
    <form method="post" action="/tinh-tuoi">
        @csrf
        <label for="nguoi1">Họ Tên Người thứ nhất:</label>

        <input type="text" name="nguoi1" required>

        <label for="ngay_sinh1">Ngày Sinh Người thứ nhất:</label>
        <input type="date" name="ngay_sinh1" required>

        <br>
        <br>
        <label for="nguoi2">Họ Tên Người thứ hai:</label>
        <input type="text" name="nguoi2" required>

        <label for="ngay_sinh2">Ngày Sinh Người thứ hai:</label>

        <input type="date" name="ngay_sinh2" required>
        <br>
        <br>

        <button type="submit">Tính Tuổi & So Sánh</button>
    </form>
</body>

</html>
