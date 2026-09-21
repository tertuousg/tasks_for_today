<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>

<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>User Profile</h1>

<p><strong>Username:</strong> <?= esc($user['username']) ?></p>

<p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>

<p><strong>Email:</strong> <?= esc($user['email']) ?></p>

</body>
</html>