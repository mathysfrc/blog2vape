import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

require ('bootstrap');

import 'bootstrap-icons/font/bootstrap-icons.css'; 


let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 11;
let countdown;

//Questions and Options array

const quizArray = [
    {
        id: "0",
        question: "Quel est la ville la plus peuplée au Monde",
        options: ["Chécy", "Loos-en-Gelesse", "Tokyo", "Montcuq"],
        correct: "Tokyo",
    },
    {
        id: "1",
        question: "Comment consommer une API?",
        options: ["Sans gluten", "Surtout pas malheureux", "Chez Maxim's", "Dans le manager"],
        correct: "Dans le manager",
    },
    {
        id: "2",
        question: "Qui?",
        options: ["Sylvain", "Zak", "oui", "Mais qui êtes-vous monsieur?"],
        correct: "oui",
    },
    {
        id: "3",
        question: "Qui a tué PHP?",
        options: ["Guy Georges", "Guy Roux", "Guy Teube", "Killall PHP"],
        correct: "Killall PHP",
    },
    {
        id: "4",
        question: "Dans quelle zone se situe Orléans",
        options: ["Zone A", "Zone B", "Zone C", "Zone D"],
        correct: "Zone B",
    },
    {
        id: "5",
        question: "Combien de ligne de code compte notre fichier CSS",
        options: ["$i++", "Quand c'est trop, c'est trop d'Pico", "1819", "trop"],
        correct: "trop",
    }, {
        id: "6",
        question: "Quel est le numéro du département de la lozère?",
        options: ["12", "20", "97", "48"],
        correct: "48",
    },
    {
        id: "7",
        question: "En fait c'est quarante-sept",
        options: ["True", "!False", "&&||", "1"],
        correct: "1",
    },
    {
        id: "8",
        question: "Quel est la monnaie de la Pologne?",
        options: ["$polonais", "le rouble", "le zloty", "la monnaie de singe"],
        correct: "le zloty",
    },
    {
        id: "9",
        question: "Lequel de ces évènements n'a pas eu lieu en mille-neuf-cent-soixante-huit?",
        options: ["la quatrième semaine de congés payés", "Les JO de Grenoble", "le festival de Woodstock", "le joli mois de mai"],
        correct: "le festival de Woodstock",
    },
];

//Restart Quiz
restart.addEventListener("click", () => {
    initial();
    displayContainer.classList.remove("hide");
    scoreContainer.classList.add("hide");
});

//Next Button
nextBtn.addEventListener(
    "click",
    (displayNext = () => {
        //increment questionCount
        questionCount += 1;
        //if last question
        if (questionCount == quizArray.length) {
            //hide question container and display score
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            //user score
            userScore.innerHTML =
                "Votre score est de " + scoreCount + " sur " + questionCount;
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            //display quiz
            quizDisplay(questionCount);
            count = 11;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);

//Timer
const timerDisplay = () => {
    countdown = setInterval(() => {
        count--;
        timeLeft.innerHTML = `${count}s`;
        if (count == 0) {
            clearInterval(countdown);
            displayNext();
        }
    }, 1000);
};

//Display quiz
const quizDisplay = (questionCount) => {
    let quizCards = document.querySelectorAll(".container-mid");
    //Hide other cards
    quizCards.forEach((card) => {
        card.classList.add("hide");
    });
    //display current question card
    quizCards[questionCount].classList.remove("hide");
};

//Quiz Creation
function quizCreator() {
    //randomly sort questions
    quizArray.sort(() => Math.random() - 0.5);
    //generate quiz
    for (let i of quizArray) {
        //randomly sort options
        i.options.sort(() => Math.random() - 0.5);
        //quiz card creation
        let div = document.createElement("div");
        div.classList.add("container-mid", "hide");
        //question number
        countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
        //question
        let question_DIV = document.createElement("p");
        question_DIV.classList.add("question");
        question_DIV.innerHTML = i.question;
        div.appendChild(question_DIV);
        //options
        div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
    `;
        quizContainer.appendChild(div);
    }
}

//Checker Function to check if option is correct or not
function checker(userOption) {
    let userSolution = userOption.innerText;
    let question =
        document.getElementsByClassName("container-mid")[questionCount];
    let options = question.querySelectorAll(".option-div");

    //if user clicked answer == correct option stored in object
    if (userSolution === quizArray[questionCount].correct) {
        userOption.classList.add("correct");
        scoreCount++;
    } else {
        userOption.classList.add("incorrect");
        //For marking the correct option
        options.forEach((element) => {
            if (element.innerText == quizArray[questionCount].correct) {
                element.classList.add("correct");
            }
        });
    }

    //clear interval(stop timer)
    clearInterval(countdown);
    //disable all options
    options.forEach((element) => {
        element.disabled = true;
    });
}

//initial setup
function initial() {
    quizContainer.innerHTML = "";
    questionCount = 0;
    scoreCount = 0;
    count = 11;
    clearInterval(countdown);
    timerDisplay();
    quizCreator();
    quizDisplay(questionCount);
}

//when user click on start button
startButton.addEventListener("click", () => {
    startScreen.classList.add("hide");
    displayContainer.classList.remove("hide");
    initial();
});

//hide quiz and display start screen
window.onload = () => {
    startScreen.classList.remove("hide");
    displayContainer.classList.add("hide");
};

