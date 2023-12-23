<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPTCHA Form</title>
</head>
<body>
    <form action="/form" method="post">
        @csrf
        <label for="captcha">Masukkan teks berikut ini:</label><br>
        <p>{{ $randomText }}</p>
        <input type="hidden" name="captcha_text" value="{{ $randomText }}">
        <input type="text" id="captcha" name="captcha" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
