<?php get_header(); ?>
  
    <div id="fast_enroll_frame" class="fast_enroll_frame section">
      <h1 class="title">Welcome to Our Yoga Studio</h1>
        <p class="subtitle">
          Find your inner peace and strength through our yoga classes. Join us
          in a journey to wellness and balance.
        </p>
  
      <div class="buttons_fast_enroll">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/classesType"  class="button button_dark">Enroll classes </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/about"  class="button button_light">Learn more</a>
      </div>
    </div>

    <div id="scroll_photo_frame" class="scroll_photo_frame">
      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_1.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_2.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_3.jpg"
        alt="Not Found"
        class="scroll_photo"
      />
      
      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_4.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_5.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_6.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_7.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_8.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_9.jpg"
        alt="Not Found"
        class="scroll_photo"
      />

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/PhotoScroll_10.jpg"
        alt="Not Found"
        class="scroll_photo"
      />
    </div>

    <div id="yoga_easy_frame" class="yoga_easy_frame section">
      <h2 class="title">Yoga is easy</h2>

      <div class="yoga_easy_card background_light">

        <div class="yoga_easy_titles">
          <span class="title">Choose a Class Type</span>
          <span class="number">01</span>
        </div>

        <p class="text">
          Explore yoga styles or try meditation or breathwork to find the one
          that suits your preferences and goals.
        </p>

      </div>

      <div class="yoga_easy_card background_dark">

        <div class="yoga_easy_titles">
          <span class="title">Find a Suitable Time</span>
          <span class="number">02</span>
        </div>

        <p class="text">
          Look for a yoga class that fits your schedule and experience level.
          Whether you're a beginner or an advanced practitioner, there's a
          class for you.
        </p>

      </div>

      <div class="yoga_easy_card background_light">

        <div class="yoga_easy_titles">
          <span class="title">Prepare Your Gear</span>
          <span class="number">03</span>
        </div>

        <p class="text">
          Get your yoga mat, comfortable clothing, and any props you may need
          ready for your practice. Having the right gear can enhance your yoga
          experience.
        </p>

      </div>

      <div class="yoga_easy_card background_dark">

        <div class="yoga_easy_titles">
          <sapn class="title">Set Up Your Space</sapn>
          <sapn class="number">04</sapn>
        </div>
        <p class="text">
          Look for a yoga class that fits your schedule and experience level.
          Whether you're a beginner or an advanced practitioner, there's a
          class for you.
        </p>

      </div>
    </div>

    <div id="classes_type_frame" class="classes_type_frame section">
      <h2 class="title">Classes Type</h2>

      <img
        src="<?php echo get_template_directory_uri(); ?>/public/photo/ClassTypeYoga_1.jpg"
        alt="Not Found"
        class="classes_type_photo"
      />

      <div class="class_type">
        <div class="info">
          <h3 class="title">Yoga Classes</h3>
          <p class="text">
            Our yoga classes cater to all levels, offering a range of styles
            from Hatha to Vinyasa. Whether you're a beginner or an experienced
            practitioner, these sessions help build strength, flexibility, and
            inner calm.
          </p>
        </div>
      </div>

      <div class="class_type">
        <div class="info">
          <h3 class="title">Guided Meditations</h3>
          <p class="text">
            These sessions guide participants through mindfulness practices designed
            to reduce stress, increase focus, and promote relaxation. Each meditation
            is led by an experienced instructor, creating a peaceful and restorative experience.
          </p>
        </div>
      </div>

      <div class="class_type">
        <div class="info">
          <h3 class="title">Breathwork Workshops</h3>
          <p class="text">
            Participants will learn breathing techniques to reduce stress and boost
            energy. These workshops are designed to enhance both physical and mental
            well-being.
          </p>
        </div>
      </div>
    </div>

    <div id="pricing_plans_frame" class="pricing_plans_frame section">
      <h2 class="title">Pricing plan</h2>
      <p class="subtitle">Choose the perfect plan for you</p>

      <div class="pricing_plan stroke_green">
        <p class="subtitle">Drop-in Class</p>
        <h3 class="title">$20 per class</h3>

        <ul class="text">
          <li>Access to any yoga class on the schedule.</li>
          <li>Ideal for those with a flexible schedule or who want to try a class before committing to a membership.</li>
          <li>Includes use of studio facilities: mats, blocks, towels, and showers.</li>
        </ul>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/classesType"  class="button button_dark">Sign up now</a>
      </div>

      <div class="pricing_plan stroke_green background_light">
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

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/classesType"  class="button button_dark">Get started </a>
      </div>

      <div class="pricing_plan stroke_green background_dark">
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

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/classesType"  class="button button_dark"> Join now</a>
      </div>
    </div>

    <div id="testimonials_frame" class="testimonials_frame section">
      <h2 class="title">Testimonials</h2>
      <p class="subtitle">
        Read what our clients have to say about their experience with our yoga classes.
      </p>

      <div class="testimonial">
        <div class="background"></div>
        <div class="content">
          <div class="info">
            <img
              src="<?php echo get_template_directory_uri(); ?>/public/photo/Portrait_1.jpg"
              alt="Not Found"
              class="testimonial_photo"
            />
            <p class="name">Emily Smith</p>
          </div>

          <p class="text">
            "I've never felt so grounded and at peace. The instructors here truly care
            about each person's progress, and I love how every class offers something
            new and exciting. This studio has become my sanctuary."
          </p>
        </div>
      </div>

      <div class="testimonial">
        <div class="background"></div>
        <div class="content">
          <div class="info">
            <img
              src="<?php echo get_template_directory_uri(); ?>/public/photo/Portrait_2.jpg"
              alt="Not Found"
              class="testimonial_photo"
            />
            <p class="name">John Doe</p>
          </div>

          <p class="text">
            "I've been attending classes here for a year, and the change in my
            flexibility and mental clarity is incredible. The community is
            welcoming, and the instructors are always willing to help with any
            questions or modifications."
          </p>
        </div>
      </div>

      <div class="testimonial">
        <div class="background"></div>
        <div class="content">
          <div class="info">
            <img
              src="<?php echo get_template_directory_uri(); ?>/public/photo/Portrait_3.jpg"
              alt="Not Found"
              class="testimonial_photo"
            />
            <p class="name">Sarah Lee</p>
          </div>

          <p class="text">
            "The variety of classes offered here means I never get bored. From yoga
            to breathwork, each session leaves me feeling rejuvenated. This studio
            has helped me balance my hectic work life with self-care."
          </p>
        </div>
      </div>
    </div>

    <div id="contact_us_frame" class="contact_us_frame section">

      <h2 class="title">Contact Us</h2>
      <p class="subtitle">
        We would love to hear from you. Reach out to us for any inquiries or
        feedback.
      </p>

      <div class="contact_item">
        <img
          src="<?php echo get_template_directory_uri(); ?>/public/icon/Phone.png"
          alt="Not Found"
          class="contact_icon"
        />
        <h3 class="title">Phone</h3>
        <p class="subtitle">
          Connect with us on social media for updates and inspiration.
        </p>
        <a class="info" href="tel:+1-123-456-7890">+1-123-456-7890</a>
      </div>

      <div class="contact_item">
        <img
          src="<?php echo get_template_directory_uri(); ?>/public/icon/Mail.png"
          alt="Not Found"
          class="contact_icon"
        />
        <h3 class="title">Email</h3>
        <p class="subtitle">
          Our team is here to assist you with any questions you may have.
        </p>
        <a class="info" href="mailto:info@yogawebsite.com">info@yogawebsite.com</a>
      </div>


      <div class="contact_item">
        <img
          src="<?php echo get_template_directory_uri(); ?>/public/icon/Location.png"
          alt="Not Found"
          class="contact_icon"
          />
          <h3 class="title">Office</h3>
          <p class="subtitle">
            Join our community and stay connected.
          </p>
          <a class="info" href="https://www.google.com/maps">
            123 Yoga Street, Cityville, State, Country
          </a>
      </div>
    </div>

    
    <?php get_footer(); ?>


