<?php
/**
 * Revera Theme Customizer
 *
 * @package Revera
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function revera_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        
        /** ===============
     * Extends CONTROLS class to add textarea
     */
        class revera_customize_textarea_control extends WP_Customize_Control {

            public $type = 'textarea';

            public function render_content() {
                ?>

                <label>
                    <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                    <textarea rows="5" style="width:98%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
                </label>

                <?php
            }

        }
        // Add slider-images
        $wp_customize->add_section('home_slider_setting', array(
        'title' => __('Home Slider', 'revera'),
        'priority' => 37,
    ));
        //slider one
         $wp_customize->add_setting('slider_one', array(
        'transport' => 'postMessage',
    ));
       $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slider_one', array(
        'label' => 'Slider 1',
        'section' => 'home_slider_setting',
        'settings' => 'slider_one',
        'priority' => 1,
            )
            )
    );
       // slider Title
    $wp_customize->add_setting('slider_title_one', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('slider_title_one', array(
        'label' => __('Slider One Title', 'revera'),
        'section' => 'home_slider_setting',
        'settings' => 'slider_title_one',
        'priority' => 2,
    ));

    $wp_customize->add_setting('slider_one_description', array('default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new revera_customize_textarea_control($wp_customize, 'slider_one_description', array(
        'label' => __('Description', 'revera'),
        'section' => 'home_slider_setting',
        'settings' => 'slider_one_description',
        'priority' => 3,
    )));
    // slide 2
     $wp_customize->add_setting('slider_two', array(
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slider_two', array(
        'label' => 'Slider 2',
        'section' => 'home_slider_setting',
        'settings' => 'slider_two',
        'priority' => 6,
            )
            )
    );
    // slider Title
      $wp_customize->add_setting('slider_title_two', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('slider_title_two', array(
        'label' => __('Slider Two Title', 'revera'),
        'section' => 'home_slider_setting',
        'settings' => 'slider_title_two',
        'priority' => 7,
    ));

    $wp_customize->add_setting('slider_two_description', array('default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new revera_customize_textarea_control($wp_customize, 'slider_two_description', array(
        'label' => __('Description', 'revera'),
        'section' => 'home_slider_setting',
        'settings' => 'slider_two_description',
        'priority' => 8,
    )));
      // slide 3
        $wp_customize->add_setting('slider_three', array(
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'slider_three', array(
        'label' => 'Slider 3',
        'section' => 'home_slider_setting',
        'settings' => 'slider_three',
        'priority' => 11,
            )
            )
    );


    // slider Title
    $wp_customize->add_setting('slider_title_three', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('slider_title_three', array(
        'label' => __('Slider Three Title', 'revera'),
        'section' => 'home_slider_setting',
        'settings' => 'slider_title_three',
        'priority' => 12,
    ));

    $wp_customize->add_setting('slider_three_description', array('default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new revera_customize_textarea_control($wp_customize, 'slider_three_description', array(
        'label' => __('Description', 'revera'),
        'section' => 'home_slider_setting',
        'settings' => 'slider_three_description',
        'priority' => 13,
    )));
        
         // Add new section for Home Featured One settings
    
    //Home featured 1
    $wp_customize->add_section('home_featured_one_setting', array(
        'title' => __('Home Featured #1', 'revera'),
        'priority' => 40,
    ));
   

    $wp_customize->add_setting('home_featured_one');

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'home_featured_one', array(
        'label' => 'Featured Image',
        'section' => 'home_featured_one_setting',
        'settings' => 'home_featured_one',
        'priority' => 1,
            )
            )
    );
        // home Title
    $wp_customize->add_setting('home_title_one', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('home_title_one', array(
        'label' => __('Title', 'revera'),
        'section' => 'home_featured_one_setting',
        'settings' => 'home_title_one',
        'priority' => 2,
    ));

    $wp_customize->add_setting('home_description_one', array('default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new revera_customize_textarea_control($wp_customize, 'home_description_one', array(
        'label' => __('Description', 'revera'),
        'section' => 'home_featured_one_setting',
        'settings' => 'home_description_one',
        'priority' => 3,
    )));

    
     
    //Home featured 2
    $wp_customize->add_section('home_featured_two_setting', array(
        'title' => __('Home Featured #2', 'revera'),
        'priority' => 45,
    ));
       $wp_customize->add_setting('home_featured_two');

    $wp_customize->add_control(
            'home_featured_two', array(
        'label' => 'Featured Icon',
        'section' => 'home_featured_two_setting',
        'settings' => 'home_featured_two',
                'type' => 'text',
        'priority' => 1,
            )
    );

    // home Title
    $wp_customize->add_setting('home_title_two', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('home_title_two', array(
        'label' => __('Title', 'revera'),
        'section' => 'home_featured_two_setting',
        'settings' => 'home_title_two',
        'priority' => 2,
    ));

    $wp_customize->add_setting('home_description_two', array('default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new revera_customize_textarea_control($wp_customize, 'home_description_two', array(
        'label' => __('Description', 'revera'),
        'section' => 'home_featured_two_setting',
        'settings' => 'home_description_two',
        'priority' => 3,
        )));
    
     // Home featured 3
     // Add new section for Home Featured Three settings
    $wp_customize->add_section('home_featured_three_setting', array(
        'title' => __('Home Featured #3', 'revera'),
        'priority' => 50,
    ));


    $wp_customize->add_setting('home_featured_three');

    $wp_customize->add_control(
            
            $wp_customize, 'home_featured_three', array(
        'label' => 'Featured Icon',
        'section' => 'home_featured_three_setting',
        'settings' => 'home_featured_three',
           'type' => 'text',     
        'priority' => 1,
            )
            
    );
      // home Title
    $wp_customize->add_setting('home_title_three', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('home_title_three', array(
        'label' => __('Title', 'revera'),
        'section' => 'home_featured_three_setting',
        'settings' => 'home_title_three',
        'priority' => 2,
    ));

    $wp_customize->add_setting('home_description_three', array('default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new revera_customize_textarea_control($wp_customize, 'home_description_three', array(
        'label' => __('Description', 'revera'),
        'section' => 'home_featured_three_setting',
        'settings' => 'home_description_three',
        'priority' => 3,
    )));
         // Add footer text section
    $wp_customize->add_section('revera_footer', array(
        'title' => 'Footer Settings', // The title of section
        'priority' => 75,
    ));

    $wp_customize->add_setting('revera_footer_footer_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'sanitize_js_callback' => 'revera_sanitize_escaping',
    ));
    
    $wp_customize->add_control(new revera_customize_textarea_control($wp_customize, 'revera_footer_footer_text', array(
        'section' => 'revera_footer', // id of section to which the setting belongs
        'settings' => 'revera_footer_footer_text',
        'label' => __('Copyright Text','revera'),
    )));
    
    $wp_customize->add_setting('revera_footer_disclaimer', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'sanitize_js_callback' => 'revera_sanitize_escaping',
    ));
    
    $wp_customize->add_control('revera_footer_disclaimer', array(
        'section' => 'revera_footer', // id of section to which the setting belongs
        'settings' => 'revera_footer_disclaimer',
        'type' => 'text',
        'label' => __('Disclaimer','revera'),
    ));
    

}
add_action( 'customize_register', 'revera_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function revera_customize_preview_js() {
	wp_enqueue_script( 'revera_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'revera_customize_preview_js' );
