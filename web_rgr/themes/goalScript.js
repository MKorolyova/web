let goals;
//read doc
  fetch('http://localhost:8080/wp-content/themes/mytheme/db.json')
    .then(response => {
      return response.json();
    })
    .then(data => {
      goals = data['goals']; 
    });


function readData() {
    const age = document.getElementById("input_age").value;
    const height = document.getElementById("input_height").value;
    const weight = document.getElementById("input_weight").value;
    return {weight, height};
}

function calcBMI(weight, height) {
    const bmi =  (weight / ((height / 100) ** 2)).toFixed(2);
    return bmi;
}

function chooseGoal(bmi){
    let goal;
    for(let i = 0; i < goals.length; i++){
        if (bmi < goals[i].bmi){
            goal = goals[i];
            break;
        }
        goal = goals[i];
    }
    return goal;
}

function loadPersonalGoals(classes){
    let classesMarkup = ``;
    for (let i = 0; i < classes.length; i++) {
        classesMarkup += 
        `<div class="personal_goal stroke_green ${classes[i].background} ">
            <p class="subtitle">${classes[i].subtitle}</p>
            <h3 class="title">${classes[i].title}</h3>
            <p class="info">
                ${classes[i].info}
            </p>
        </div>`
    };
    return classesMarkup;
}

function displayRecommendations() {
    const {weight, height} = readData();
    const bmi = calcBMI(weight, height);
    const goal = chooseGoal(bmi);
    console.log(`Height: ${height} cm, Weight: ${weight} kg, BMI: ${bmi} `);

    document.getElementById("personal_goals_frame").innerHTML = ` 
        <h1 class="title">Personal Goals Calculator</h1>
        <p class="subtitle">
            Goal: ${goal.name}
        </p>

        ${loadPersonalGoals(goal.classes)}
          
        <a href="./classesType.html" class="button button_dark">Enroll classes</a>
    `;
}

