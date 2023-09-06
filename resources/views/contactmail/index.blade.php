<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Contact</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        label{
            font-size: 18px;
            font-weight: 400;
            color: #00000080;
        }
        p{
            font-size: 18px;
            font-weight: 400;
            padding: 0;
            margin: 0;
        }
        .email{
            text-decoration: underline;
        }
        .mb-2{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="mb-2">
        <label for="">Name</label>
        <p>{{ $mailData['name'] }}</p>
    </div>
    <div class="mb-2">
        <label for="">Email</label>
        <p class="email">{{ $mailData['email'] }}</p>
    </div>
    <div class="mb-2">
        <label for="">Service</label>
        <p>{{ $mailData['service'] }}</p>
    </div>
    <div class="mb-2">
        <label for="">Message</label>
        <p>{{ $mailData['message'] }}</p>
    </div>
</body>
</html>