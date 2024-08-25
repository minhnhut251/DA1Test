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
        <h1 class="title">Tìm kiếm</h1>

        <form method="GET" action="{{route('sinhvien.timkiem')}}">

            <div class="input-box">
                <h3>MSSV: </h3>
                <input type="string" name="mssv" placeholder="mssv" />
            </div>
            <div class="input-box">
                <input class="btn" type="submit" value="Tìm kiếm" />
            </div>
        </form>


        <div>
            <table>
                <tr>
                    <th>MSSV</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                </tr>


                @if(count($results) > 0)
                @foreach($results as $result)
                <tr>

                    <td>{{$result->mssv}}</td>
                    <td>{{$result->hoten}}</td>
                    <td>{{$result->sdt}}</td>
                    <td>{{$result->ngaysinh}}</td>
                    @if($result->gioitinh)
                    <td>Nữ</td>
                    @else
                    <td>Nam</td>
                    @endif
                </tr>
                @endforeach
                @endif
            </table>
        </div>

        <form action="{{route('sinhvien.index')}}">
                <button class="btn">Trang chủ</button>
        </form>
        
    </div>
</body>

</html>