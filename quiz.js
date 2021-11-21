
var currentCategory = ['dnd', 'history', 'language', 'nature', 'technology'];
var Questions = [
    // store answer with questions for easier retrieval
    { category: 'dnd', question: 'D&D most commonly linked to Medieval tails', answer: true },
    { category: 'history', question: 'Sir Winston Churchill was a Labour Prime Minister', answer: true },
    { category: 'history', question: 'The Ming Dynasty was the final Chinese Dynasty', answer: true },
    { category: 'history', question: 'Henry VIII wife Anne Boleyn was executed', answer: true },
    { category: 'history', question: 'The Magna Carta was signed in Rome', answer: true },
    { category: 'history', question: 'Cleopatra had a child with Julius Caesar', answer: true },
    { category: 'history', question: 'The Iron Age comes after the Bronze Age', answer: true },

    { category: 'language', question: 'There are 24 letters in the Greek alphabet', answer: true },
    { category: 'language', question: 'There is no German word meaning \'fluffy\'', answer: true },
    { category: 'language', question: 'In Welsh a microwave is known as a \'popty ping\'', answer: true },
    { category: 'history', question: 'Mexico achieved independence before USA', answer: true },
    { category: 'history', question: 'Sir Winston Churchill was a Labour Prime Minister', answer: true },


];

// when declared over here other functions will see it; it's not best practice to register them in global/window scope, but better than nothing ;)
var count = 0;
var points = 0;
var category;
var question;

//show answer buttons only after clicking start button
function showButtons() {
    document.getElementById('answerT').style.display = "";
    document.getElementById('answerF').style.display = "";
}

// choose a category and a question
function catAndQuest() {
    start.style.display = 'none';
    showButtons();

    document.getElementById('points').innerHTML = 'Points: ' + (points);
    document.getElementById('count').innerHTML = 'Question ' + (++count) + ' \/ 10';

    currentCategory = Questions.map(function (question) {
        return question.category;
    });
    category = currentCategory[Math.floor(Math.random() * currentCategory.length)];
    document.getElementById('category').innerHTML = 'Category: ' + (category);

    var questionList = Questions.filter(function (question) {
        return question.category === category;
    });

    question = questionList[Math.floor(Math.random() * questionList.length)];
    document.getElementById('quest').innerHTML = question.question;
}

// create a copy of Questions array
var copy = [].concat(Questions);

// delete used question out of the copy array
function deleteUsed() {
    if (Questions.length > 0) {
        Questions.splice(Questions.indexOf(question), 1);
    } else {
        document.getElementById('answerT').style.display = "none";
        document.getElementById('answerF').style.display = "none";
        document.getElementById('questions').style.display = "none";
        document.getElementById('looser').style.display = "";
        document.getElementById('reset').style.display = "";
    }
}

//user answered question
function answer(value) {
    deleteUsed();
    if (value === question.answer) {
        points++;
        if (points == 5) {
            document.getElementById('answerT').style.display = "none";
            document.getElementById('answerF').style.display = "none";
            document.getElementById('questions').style.display = "none";
            document.getElementById('winner').style.display = "";
            document.getElementById('reset').style.display = "";
        }
    }
    catAndQuest();
}

//restart the game
function restart() {
    document.location.href = "";
}


