<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
      <p>Send Email</p>

      <form action="contactform.php" method="POST">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="email" placeholder="Your email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message" cols="25" rows="6"></textarea><br>
        <button type="submit" name="submit">Send Email</button>
    </form>

    </main>
</body>
</html>