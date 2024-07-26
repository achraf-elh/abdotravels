<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <h2>Contact Request from {{ $data['name'] }}</h2>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
