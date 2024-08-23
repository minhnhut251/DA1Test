<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm</h1>
    <form method="post" action="{{route('sinhvien.luu')}}">
        @csrf
        @method('post')
        <div>
            <label>MSSV: </label>
            <input type="string" name="mssv" placeholder="mssv"/>
        </div>
        <div>
            <label>Họ tên: </label>
            <input type="string" name="hoten" placeholder="hoten"/>
        </div>
        <div>
            <label>Số điện thoại: </label>
            <input type="string" name="sdt" placeholder="sdt"/>
        </div>
        <div>
            <label>Ngày sinh: </label>
            <input type="string" name="ngaysinh" placeholder="ngaysinh"/>
        </div>
        <div>
            <label>Giới tính: </label>
            <input type="radio" name="gioitinh" value="Nam"/>Nam
            <input type="radio" name="gioitinh" value="Nữ"/>Nữ
        </div>
        <div>
            <input type="submit" value="Lưu sinh viên mới"/>
        </div>
    </form>
</body>
</html>