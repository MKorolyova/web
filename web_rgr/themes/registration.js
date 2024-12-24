const date = new Date();
const todayDate = date.getDate();
const currentMonth = date.getMonth();
const currentYear = date.getFullYear();
let year = date.getFullYear();
let month = date.getMonth();

const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];

function generateDays( month, year){

    let pevMonthLastDate= new Date(year, month, 0).getDate();
    let lastDate = new Date(year, month + 1, 0).getDate();

    let firstDay = new Date(year, month, 1).getDay();
    let lastDay = new Date(year, month, lastDate).getDay();

    let monthMarkup = ``;

    for (let i = firstDay; i > 0; i--) {
        monthMarkup += `<div class="date not_active_date">${pevMonthLastDate - i + 1}</div>`;
    }
    
    for (let i = 1; i <= lastDate; i++) {

        if ((i >= todayDate && month == currentMonth && year >= currentYear) || year > currentYear || (month > currentMonth && year >= currentYear)){
            monthMarkup += `<div class="date active_date">${i}</div>`;
            continue;
        }

        monthMarkup += `<div class="date not_active_date">${i}</div>`;
    }

    for (let i = lastDay; i < 6; i++) {
        monthMarkup += `<div class="date not_active_date">${i - lastDay + 1}</div>`;
    }
    return monthMarkup
}

function displayCalendar( month, year) {
    document.getElementById("calendar").innerHTML = ` 
        <div class="month_title"> 
              <div id="calendar_prev" class="calendar_prev"> &#8249; </div>
              <div class= "month_name">${months[month]} ${year}</div> 
              <div id="calendar_next" class= "calendar_next"> &#8250; </div>
            </div>

            <div class="month" id="month">${generateDays(month, year)}</div>
    `;


    document.getElementById("calendar_prev").addEventListener("click", prevMonth);
    document.getElementById("calendar_next").addEventListener("click", nextMonth);
    document.getElementById("month").addEventListener("click", chooseDate);
}


function prevMonth() {
 month--;
 if (month < 0) {
     month = 11;
     year--;
 }
 displayCalendar(month, year);
}

function nextMonth() {
 month++;
 if (month > 11) {
     month = 0;
     year++;
 }
 displayCalendar(month, year);
}

window.onload = () => displayCalendar(currentMonth, currentYear);
const customerInfo = {};


function chooseDate(event) {

    const day = event.target; 

    if (day.classList.contains("active_date")) {
        day.classList.add("selected");

        day.parentElement.querySelectorAll(".active_date").forEach(d => {
            if (d !== day) {
                d.classList.remove("selected");
            }
        });
    
        customerInfo.date = day.textContent;
        customerInfo.month = month;
        customerInfo.year =  year;
    }
}


document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("time").addEventListener("click", () => {

            const hour = event.target; 

            if (hour.classList.contains("hour")) {

                hour.classList.add("selected");

                hour.parentElement.querySelectorAll(".hour").forEach(h => {
                    if (h !== hour) {
                        h.classList.remove("selected");
                    }
                });
    
                customerInfo.hour = hour.textContent;
            }
            
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("registration_frame").addEventListener("click", (event) => {
        const pricingPlan = event.target; 

        if (pricingPlan.classList.contains("pricing_plan")) {
            
            pricingPlan.classList.add("background_light");

            pricingPlan.parentElement.querySelectorAll(".pricing_plan").forEach(p => {
                if (p !== pricingPlan) {
                    p.classList.remove("background_light");
                }
            });
            
            const plan = pricingPlan.querySelector(".subtitle")?.textContent;
            if (plan == "Drop-in Class"){
                document.getElementById("drop_in_class_registration").classList.remove("invisible")
            }else{
                document.getElementById("drop_in_class_registration").classList.add("invisible")
            }
            customerInfo.pricingPlan = plan;
        }
    });
});

////////////////////////////////////////////////////////////////////

function sendForm(event) {

    event.preventDefault();

    customerInfo.firstName = document.getElementById("input_first_name").value;
    customerInfo.secondName = document.getElementById("input_second_name").value;
    customerInfo.phone = document.getElementById("input_phone").value;
    customerInfo.cardNumber = document.getElementById("input_card_number").value;
    customerInfo.expirationDate = document.getElementById("input_expiration_date").value;
    customerInfo.secureCode = document.getElementById("input_secure_code").value;

    console.log(customerInfo);
    console.log('<?php echo esc_url( home_url( '/' ) ); ?>');
    window.location.href = 'http://localhost:8080/';



    // fetch('http://localhost:8080/wp-content/themes/mytheme/db.json', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify(customerInfo)
    // })
    //     .then(response => {
    //         if (!response.ok) {
    //             throw new Error(`HTTP error! Status: ${response.status}`);
    //         }
    //         return response.json();
    //     })
    //     .then(post => {
    //         console.log('New post added:', post);
    //         window.location.href = "./index.html";
    //     })
    //     .catch(error => {
    //         console.error('Error adding post:', error);
    //         alert("Something went wrong. Please try again!");
    //     });
}


const lat = 30.2711286;
const lon = -97.7436995;
const apiKey = "5c889de507d01d3f8e74600d29ba46df"; 
const url2 = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}`;

fetch(url2)
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.statusText}`);
    }
    return response.json();
  })
  .then(data => {
    const temperature = data.main.temp - 273.15; 
    const weatherDescription = data.weather[0].description;

    console.log(`Температура: ${temperature.toFixed(1)}°C`);
    console.log(`Погода: ${weatherDescription}`);

    document.getElementById("weather_forecast").innerHTML =` ${temperature.toFixed(0)}°C ` + weatherDescription
  });

