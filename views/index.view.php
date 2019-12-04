<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: left;
        }
    </style>
</head>
<body>
    <header>
        <h1>Learning PHP</h1>
    </header>
    <div>
        <ul>
            <?php foreach($tasks as $task) : ?>
                <li>
                    <?php if ($task->completed) :?>
                        <strike>
                            <?= $task->description; ?>
                        </strike>
                    <?php else: ?>
                        <?= $task->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
