<?php include '../src/inc/header.php'; ?>

<body>
<form action="#register" method="post">
    <h1>Sign Up</h1>

    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>">
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>">
    </div>

    <div>
        <label for="password2">Password Again:</label>
        <input type="password" name="password2" id="password2" value="<?= $inputs['password2'] ?? '' ?>">
    </div>

    <button type="submit">Register</button>

    <footer>Already a member? <a href="#login">Login here</a></footer>

</form>

<?php include '../src/inc/footer.php'; ?>