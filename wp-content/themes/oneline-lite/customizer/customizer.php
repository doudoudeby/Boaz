<?php
    //  = Default Theme Customizer Settings  =
function oneline_lite_customize_register( $wp_customize ) {
    
    $wp_customize->add_section('home_settings', array(
            'title'    => __('Home Page Template Set', 'oneline-lite'),
            'priority' => 1,
            ));
       $wp_customize->add_setting('home_page_set', array(
        'sanitize_callback' => 'wp_kses_post' 
        ));
        $wp_customize->add_control( new oneline_lite_Custom_Content( $wp_customize, 'home_page_set', array(
    'section' => 'home_settings',
    'priority' => 20,
    'label' => __( 'Home Page Template Setting in 3 Steps', 'oneline-lite' ),
    'content' => __( '<b>1. "ThemeHunk customizer" <a target = "_blank" href="themes.php?page=th_oneline_lite&tab=actions_required">Plugin Install</a></b><br/><br/>
        <b>2. <a target = "_blank"  href="post-new.php?post_type=page">Crate Page</a> and Choose template "Home Page Layout" </b><br/><br/>
    <b> 3. After that go to the <a target = "_blank" href="options-reading.php"> Settings > Reading </a> and set that newly created home page template. <a target = "_blank"  href="https://themehunk.com/docs/oneline-lite-theme/#setup-homepage">Demo </a>', 'oneline-lite' ),
) ) );

     //  Genral Settings 
  $wp_customize->get_section('title_tagline')->title = esc_html__('General Settings', 'oneline-lite');
   $wp_customize->get_section('title_tagline')->priority = 3;
  
/** Custom Colors ***/

    $wp_customize->get_section('colors')->title = esc_html__('Style Settings', 'oneline-lite');
    $wp_customize->get_section('colors')->priority = 15;

/** Footer Section ***/
    $wp_customize->add_panel( 'footer_panel', array(
        'priority'       => 16,
        'title'          => __('Social Icon Section', 'oneline-lite'),
        ));
    
    //social icon        
       $wp_customize->add_section('social_option', array(
            'title'    => __('Social Icon Option', 'oneline-lite'),
            'priority' => 2,
            'panel'    =>'footer_panel'
            ));
       $wp_customize->add_setting('social_link_facebook', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_facebook', array(
        'label'    => __('Facebook URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_facebook',
         'type'       => 'text',
        ));

        $wp_customize->add_setting('social_link_google', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_google', array(
        'label'    => __('Google+ URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_google',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_linkedin', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_linkedin', array(
        'label'    => __('LinkedIn URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_linkedin',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_pintrest', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_pintrest', array(
        'label'    => __('Pintrest URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_pintrest',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_twitter', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
        ));
        $wp_customize->add_control('social_link_twitter', array(
        'label'    => __('Twitter URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_twitter',
         'type'       => 'text',
        ));     
}
add_action('customize_register','oneline_lite_customize_register');
// custom class
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'oneline_lite_Custom_Content' ) ) :
class oneline_lite_Custom_Content extends WP_Customize_Control {

    // Whitelist content parameter
    public $content = '';

    /**
     * Render the control's content.
     *
     * Allows the content to be overriden without having to rewrite the wrapper.
     *
     * @since   1.0.0
     * @return  void
     */
    public function render_content() {
        if ( isset( $this->label ) ) {
            echo '<span class="customize-control-title">' . $this->label . '</span>';
        }
        if ( isset( $this->content ) ) {
            echo $this->content;
        }
        if ( isset( $this->description ) ) {
            echo '<span class="description customize-control-description">' . $this->description . '</span>';
        }
    }
}
endif;
?>