<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verify Your Email</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            color: #8094ae;
            margin: 0;
            padding: 0;
            background-color: #f5f6fa;
        }

        .container {
            max-width: 620px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
        }

        .header img {
            height: 40px;
        }

        .content {
            text-align: left;
            line-height: 24px;
        }

        .button {
            display: inline-block;
            background-color: #ad8e4f;
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
            padding: 12px 20px;
            border-radius: 4px;
            margin-top: 20px;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #8094ae;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        {{-- Uncomment and add your logo if needed --}}
        {{-- <img src="{{ asset('images/FMDQlogo.svg') }}" alt="FMDQ Logo"> --}}
    </div>

    <div class="content">
        <h2 style="color: #ad8e4f;">Confirm Your Email Address</h2>
        <p>Dear {{ $email_data['user_name'] }},</p>
        <p>Thank you for registering on the FMDQ Financial Markets Regulations & Rules Repository Portal.</p>
        <p>Please click the button below to verify your email address and activate your account:</p>

        <a href="{{ url('/boomproperty/user/verify/' . $email_data['token']) }}" class="button">Verify Email</a>

        <p>If you did not sign up for this account, please ignore this email.</p>
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} FMDQ Group. All rights reserved.</p>
    </div>
</div>

</body>
</html>
