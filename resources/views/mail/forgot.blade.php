<!DOCTYPE html>
<html>
<head>
    <title>Forget Password Email</title>
</head>
<body>
<div style="border: 1px solid #ddd;margin: auto;width: 70%;padding: 20px;line-height: 1.2;">
    Dear Customer,{{ $name }} <br>
    You can reset password from bellow link: <span style="color: #16589b;font-size: 1.25em;"><a href="{{route('agent.passwords.reset',['token' => $token])}}">Reset Password</a></span><br><br>

    Warm regards,<br>
    Quick Forex
</div>

</body>
</html>
