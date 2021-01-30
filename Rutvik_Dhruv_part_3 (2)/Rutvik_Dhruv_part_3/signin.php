<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="signin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>`
</head>

<body>

    <div>
        <form class="design" method="POST" action="index.html">

            <label for="firstname">Name</label><br><br>
            <input type="text" name="firstname" maxlength="50" placeholder="Name" required><br><br>

            <label for="DOB">Birth Date</label><br><br>
            <input type="date" class="hi" name="DoB" placeholder="Birth
                    date" required><br><br>

            <label for="email">E-mail</label><br><br>
            <input type="email" name="email" placeholder="E-mail-ID" required> <br><br>

            <label for="mobile">Contact</label><br><br>
            <input type="tel" name="mobile" placeholder="Contact Number" required> <br><br>

            <label for="password">Password</label><br><br>
            <input type="password" name="password" placeholder="password" minlength="8" max-length="10"
                required><br><br><br><br>
            <button type="submit">submit</button>
        </form>
    </div>

</body>

</html>