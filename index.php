<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href="https://fonts.googleapis.com/css?family=Signika:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
          <?php include('inc/quiz.php'); ?>
          <div class="toast">Let's start the quiz!</div>
            <p class="breadcrumbs">Question <?php echo showQuestionNumber(); ?> of 10</p>
            <p class="quiz">What is <?php echo showQuestion($count); ?>?</p>
            <form action="" method="post">
                <input type="hidden" name="id" value="0" />
                <?php showButtons($count); ?>
                <?php
                   if (isset($_POST["answer"]))
                   {
                       $count++;
                   }
                ?>
            </form>

        </div>
    </div>
</body>
</html>
