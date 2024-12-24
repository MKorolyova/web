<?php get_header(); ?>


          <div id="personal_goals_frame" class="personal_goals_frame section">

                <h1 class="title">Personal Goals Calculator</h1>

                <p class="subtitle">
                This is a convenient online tool designed to help you calculate your
                daily calorie needs and recommend exercises based on your individual
                parameters, such as age, weight, height, and activity level. Simply
                enter your details, and the calculator will automatically determine
                how many calories you need to achieve your goals—whether it's weight
                loss, maintenance, or muscle gain. Additionally, it will suggest the
                most suitable workout routines tailored to your fitness level and
                objectives, making it easier for you to stay on track with your health
                and fitness journey.
                </p>

                <div class="input">
                    <p class="input_request">Enter your age</p>
                    <input id = "input_age" type = "number"  class="input_field"></input>
                </div>

                <div class="input">
                    <p class="input_request">Enter your weight</p>
                    <input id = "input_weight" type = "number" class="input_field"></input>
                </div>

                <div class="input">
                    <p class="input_request">Enter your height</p>
                    <input  id = "input_height" type = "number" class="input_field"></input>
                </div>
                <button class="button button_dark" onclick="displayRecommendations()">Calculate</button>
          </div>

          <?php get_footer(); ?>