<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="database.php" method="POST" enctype="multipart/form-data">
        <h1>Create your account</h1>
        
        <input type="text" data="name" name="name" placeholder="Name...">
        <input type="text" data="nickname" name="nickname" placeholder="Nickname...">
        <input type="text" data="email" name="email" placeholder="E-mail...">
        <input type="password" data="password" name="password" placeholder="Password...">
        
        <label for="profileImage">Profile image</label>
        <input type="file" accept=".png, .jpg, .jpeg" data="profileImage" name="profileImage">

        <label for="frontPageImage">Front Page Image</label>
        <input type="file" accept=".png, .jpg, .jpeg" data="frontPageImage" name="frontPageImage">
        
        <input type="date" name="dateOfBirthday">

        <button type="submit">Login</button>
    </form>
</body>
</html>