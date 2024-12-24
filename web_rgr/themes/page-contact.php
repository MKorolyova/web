<?php get_header(); ?>

      <div  id="contact_us_page_frame" class="contact_page_frame section">

        <h1 class="title">Contact Us</h1>
        <p class="subtitle">
          We would love to hear from you. Reach out to us for any inquiries or
          feedback.
        </p>

        <div class="contact_item background_wight stroke_green">
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

        <div class="contact_item background_light stroke_green">
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


        <div class="contact_item background_dark stroke_green">
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