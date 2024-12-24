<?php get_header(); ?>

        <div id="classes_type_page_frame" class="classes_type_page_frame section">
            <h1 class="title">Classes Type</h1>



            <div class="class_type_photo">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/public/photo/ClassTypeYoga_2.jpg"
                    alt="Not Found"
                    class="classes_type_photo"
                />
                <div class="class_type">
                    <div class="info">
                        <h2 class="title">Yoga Classes</h2>
                        <p class="text">
                            Our yoga classes cater to all levels, offering a range of styles
                            from Hatha to Vinyasa. Whether you're a beginner or an experienced
                            practitioner, these sessions help build strength, flexibility, and
                            inner calm.
                        </p>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/subclassesType" class="button button_dark">Sign up now</a>
            </div>


            <div class="class_type_photo">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/public/photo/ClassTypeMeditation_2.jpg"
                    alt="Not Found"
                    class="classes_type_img"
                />
                <div class="class_type">
                    <div class="info">
                    <h2 class="title">Guided Meditations</h2>
                    <p class="text">
                        These sessions guide participants through mindfulness practices designed
                        to reduce stress, increase focus, and promote relaxation. Each meditation
                        is led by an experienced instructor, creating a peaceful and restorative experience.
                    </p>
                    </div>
                </div>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/subclassesType" class="button button_dark">Join now</a>
            </div>

            <div class="class_type_photo">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/public/photo/ClassTypeBreathwork_2.png"
                    alt="Not Found"
                    class="classes_type_img"
                />
                <div class="class_type">
                    <div class="info">
                    <h2 class="title">Breathwork Workshops</h2>
                    <p class="text">
                        Participants will learn breathing techniques to reduce stress and boost
                        energy. These workshops are designed to enhance both physical and mental
                        well-being.
                    </p>
                    </div>
                </div>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/subclassesType" class="button button_dark">Get started</a>

            </div>

        </div>

        <?php get_footer(); ?>