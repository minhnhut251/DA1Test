<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sinh Viên</h1>
    <div>Danh sách</div>
    <div>
        <table>
            <tr>
                <th>MSSV</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
            </tr>
            @foreach ($dssinhvien)
            
            @endforeach
        </table>
    </div>
</body>
</html>