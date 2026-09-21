<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>

<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>Tasks for Today</h1>

<p>Here are your tasks for <?= date('F d, Y') ?>.</p>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Task</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>

        <tr>
            <td><?= esc($task['id']) ?></td>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
        </tr>

    <?php endforeach; ?>

</table>

</body>
</html>