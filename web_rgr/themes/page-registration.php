<?php get_header(); ?>



      <div id="registration_frame" class="registration_frame section">
        
          <h1 class="title">
            Registration for Offline Outdoor Yoga Classes
          </h1>

          <div class="input">
              <p class="input_request">Enter your first name</p>
              <input id = "input_first_name" class="input_field"></input>
          </div>

          <div class="input">
              <p class="input_request">Enter your second name</p>
              <input id = "input_second_name" class="input_field"></input>
          </div>

          <div class="input">
              <p class="input_request">Enter your phone number</p>
              <input id = "input_phone" class="input_field"></input>
          </div>

          <p class="input_request">Choose pricing plan</p>
          
          <div id ="pricing_plans">
            
          </div>
          <div class="pricing_plan stroke_green">

            <p class="subtitle">Drop-in Class</p>
            <h3 class="title">$20 per class</h3>

            <ul class="text">
              <li>Access to any yoga class on the schedule.</li>
              <li>Ideal for those with a flexible schedule or who want to try a class before committing to a membership.</li>
              <li>Includes use of studio facilities: mats, blocks, towels, and showers.</li>
            </ul>

          </div>

          <div class="pricing_plan stroke_green ">

            <p class="subtitle">Monthly Membership</p>
            <h3 class="title">$120 per month</h3>

            <ul class="text">
              <li>Unlimited yoga classes.</li>
              <li>Free mat rental and access to all studio facilities. </li>
              <li>10% discount on workshops and retail items.</li>
              <li>Priority booking for popular classes.</li>
              <li>Access to exclusive members-only events.</li>
              <li>One guest pass per month.</li>
            </ul>

          </div>

          <div class="pricing_plan stroke_green ">

            <p class="subtitle">Annual Membership</p>
            <h3 class="title">$1,200 per year save $240</h3>

            <ul class="text">
              <li>Unlimited yoga classes.</li>
              <li>Free mat rental and access to all studio facilities. </li>
              <li>15% discount on workshops and retail items.</li>
              <li>Priority booking for all classes.</li>
              <li>Invitations to exclusive members-only retreats and events.</li>
              <li>2 guest passes per month. Free access to online yoga classes and tutorials.</li>
            </ul>

          </div>

          <div class="input">
              <p class="input_request">Enter your card number</p>
              <input id = "input_card_number" class="input_field"></input>
          </div>

          <div class="input">
              <p class="input_request">Enter your card expiration date</p>
              <input id = "input_expiration_date" class="input_field"></input>
          </div>

          <div class="input">
              <p class="input_request">Enter your card secure code</p>
              <input id = "input_secure_code"  class="input_field"></input>
          </div> 

          <div id = "drop_in_class_registration" class="drop_in_class_registration invisible">
              <p class="input_request">Choose day</p>

              <div id="calendar" class="calendar"></div>
    
              <p class="weather">
                <b>Weather at this time:</b> <span id = "weather_forecast"></span> 
              </p>
    
              <p class="input_request">Choose time</p>
    
              <div id="time" class="time">
                <div class="hour">8:00</div>
                <div class="hour">10:00</div>
                <div class="hour">12:00</div>
                <div class="hour">14:00</div>
                <div class="hour">16:00</div>
                <div class="hour">18:00</div>
              </div>
          </div>
          
          <a  href="#" class="button button_dark" onclick="sendForm(event)">Enroll</a>

      </div>

      <?php get_footer(); ?>