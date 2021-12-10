<html>

<head>

    <!-- Content Type Meta tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!--Responsive Viewport Meta tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


    <title>QUIZ-lette</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="quiz.css">

</head>

<body>

    <header>
        <h1> SELF - ASSESSMENT TEST FOR COVID</h1>

        <button onclick="catAndQuest()" id="start"> START</button>
    </header>


    <div class="container">
        <div id="questions">
            <div id="count"></div>
            <div id="category"></span> </div>
            <div id="quest"> </div>
            <button onclick="answer(true)" style="display:none;" id="answerT"> YES</button>
            <button onclick="answer(false)" style="display:none;" id="answerF"> NO </button>
            <div id="points"></div>
        </div>
        <div id="winner" style="display:none;">YOU HAVE SCORED FULL <br> POSSIBILITY IS HIGH</div>
        <div id="looser" style="display:none;">Sorry, no more questions.<br> You lose!</div>
        <button onclick="restart()" style="display:none;" id="reset"> PLAY AGAIN? </button>
    </div>
    </div>


    <!-- JavaScript -->
    <script src="quiz.js"></script>
</body>

</html>