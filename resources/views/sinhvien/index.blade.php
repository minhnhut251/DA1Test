<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/main.css" rel="stylesheet" type="text/css" media="all">
    
    <title>Document</title>
</head>
<body>
    <div class="container">

        <h1 class="title">Thông tin sinh viên</h1>
        
        <div>
            <table>
                <tr>
                    <th>MSSV</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                </tr>

                @foreach ($dssinhvien as $sinhvien)
                    <tr>
                        
                        <td>{{$sinhvien->mssv}}</td>
                        <td>{{$sinhvien->hoten}}</td>
                        <td>{{$sinhvien->sdt}}</td>
                        <td>{{$sinhvien->ngaysinh}}</td>
                        @if($sinhvien->gioitinh)
                            <td>Nữ</td>
                        @else
                            <td>Nam</td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
        
        <div class="buttons">
            <form action="{{route('sinhvien.timkiem')}}">
                <button class="btn">Tìm kiếm</button>
            </form>
            <form action="{{route('sinhvien.them')}}">
                <button class="btn">Thêm sinh viên</button>
            </form>
        </div>

    </body>
</html>