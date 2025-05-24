<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Submission</title>
</head>
<body>
  <!-- resources/views/emails/cv.blade.php -->
    <p>New CV submission:</p>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Number:</strong> {{ $data['number'] }}</p>
    <p>The CV is attached with this email.</p>

</body>
</html>
