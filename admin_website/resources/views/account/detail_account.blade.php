<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Tài Khoản</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            max-width: 100%;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            font-size: 16px;
            color: #333;
        }

        input[readonly] {
            background-color: #f0f0f0;
            color: #666;
        }

        .btn-back {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 10px;
        }

        .btn-back:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Chi Tiết Tài Khoản</h2>
        <form method="POST" action="{{ route('updateAccount') }}">
            @csrf
            <label for="name">Tên tài khoản</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" readonly>

            <label for="name">Họ và Tên</label>
            <input type="text" id="fullname" name="fullname" value="{{ $user->fullname }}">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" readonly>

            <label for="phone">Số Điện Thoại</label>
            <input type="tel" id="phone" name="phone" value="{{ $user->SDT }}">

            <label for="address">Địa chỉ nhận hàng</label>
            <input type="text" id="address" name="address" value="{{ $user->Address }}">

           <a href=""><button type="submit" class="btn-back" style="height: 41.6px;width: 154.1px;margin-top: 0px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 16px">Cập nhật</button></a> 
            <a href="{{ route('comehome') }}" class="btn-back">Trở về trang chủ</a>
        </form>
    </div>
</body>
</html>
