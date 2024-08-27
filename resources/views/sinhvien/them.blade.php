<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/main.css" rel="stylesheet" type="text/css" media="all">
    <title>Document</title>
</head>

<script>
    function resetform(){
        document.getElementById("form-nhap").reset(); 
    }
</script>

<body>

    <div class="container container-nho">
        <h1 class="title">Thêm</h1>
        <form id="form-nhap" method="post" action="{{route('sinhvien.luu')}}">
            @csrf
            @method('post')
            <div class="input-box">
                <h3>MSSV: </h3>
                <input type="string" name="mssv" placeholder="mssv"/>
            </div>
            <div class="input-box">
                <h3>Họ tên: </h3>
                <input type="string" name="hoten" placeholder="hoten"/>
            </div>
            <div class="input-box">
                <h3>Số điện thoại: </h3>
                <input type="string" name="sdt" placeholder="sdt"/>
            </div>
            <div class="input-box">
                <h3>Ngày sinh: </h3>
                <input type="string" name="ngaysinh" placeholder="ngaysinh"/>
            </div>
            <div class="input-rb">
                <h3>Giới tính: </h3>
                    <input type="radio" name="gioitinh" value="Nam"/>Nam
                    <input type="radio" name="gioitinh" value="Nữ"/>Nữ
            </div>
            <div class="buttons">
                <div>
                    <input class="btn" type="submit" value="Lưu sinh viên mới"/>
                </div>
                <div>
                    <input class="btn" type="reset" value="Làm mới"/>
                </div>
            </div>
        </form>
        <div class="buttons">
            <!-- <button class="btn" onclick="resetform()">Làm mới</button> -->
            <form action="{{route('sinhvien.index')}}">
                    <button class="btn">Trang chủ</button>
            </form>
        </div>
    </div>
</body>
</html>

