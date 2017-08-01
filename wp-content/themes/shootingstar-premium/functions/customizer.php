<?php
/**
 * ShootingStar Theme Customizer.
 * @package ShootingStar
 * @since ShootingStar 2.0.0
*/
function shootingstar_customize_register($wp_customize){

$shootingstar_fonts = array(
			'default' => 'default',	
			'Abel' => 'Abel',			
			'Aclonica' => 'Aclonica',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Aldrich' => 'Aldrich',
			'Alegreya Sans' => 'Alegreya Sans',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
      'Amarante' => 'Amarante',
			'Amaranth' => 'Amaranth',
      'Andika' => 'Andika',
			'Antic' => 'Antic',
			'Anton' => 'Anton',
			'Arimo' => 'Arimo',	
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Bitter' => 'Bitter',
			'Brawler' => 'Brawler',
			'Buda' => 'Buda',	
      'Butcherman' => 'Butcherman',	
      'Cabin' => 'Cabin',
			'Candal' => 'Candal',
			'Cantarell' => 'Cantarell',	
      'Cherry Swash' => 'Cherry Swash',				
			'Chivo' => 'Chivo',			
			'Coda' => 'Coda',	
      'Concert One' => 'Concert One',		
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',			
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Didact Gothic' => 'Didact Gothic',
			'Dorsa' => 'Dorsa',
			'Dosis' => 'Dosis',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
      'Droid Serif' => 'Droid Serif',
			'EB Garamond' => 'EB Garamond',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Federo' => 'Federo',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
      'Gilda Display' => 'Gilda Display',
			'Give You Glory' => 'Give You Glory',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Gravitas One' => 'Gravitas One',
			'Gruppo' => 'Gruppo',
			'Hammersmith One' => 'Hammersmith One',
			'Hind' => 'Hind',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Inconsolata' => 'Inconsolata',
			'Indie Flower' => 'Indie Flower',
      'IM Fell English' => 'IM Fell English',
			'Irish Grover' => 'Irish Grover',
			'Irish Growler' => 'Irish Growler',
			'Istok Web' => 'Istok Web',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'La Belle Aurore' => 'La Belle Aurore',
      'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Lekton' => 'Lekton',
      'Lily Script One' => 'Lily Script One',
			'Limelight' => 'Limelight',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
      'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marvel' => 'Marvel',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
      'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miltonian' => 'Miltonian',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
      'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
      'Montaga' => 'Montaga',
			'Montez' => 'Montez',
      'Montserrat' => 'Montserrat',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Muli' => 'Muli',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Noto Sans' => 'Noto Sans',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
      'Open Sans' => 'Open Sans',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Ovo' => 'Ovo',
			'Oxygen' => 'Oxygen',
			'Pacifico' => 'Pacifico',
			'Passero One' => 'Passero One',
			'Passion One' => 'Passion One',
			'Patrick Hand' => 'Patrick Hand',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Philosopher' => 'Philosopher',
			'Play' => 'Play',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poller One' => 'Poller One',
			'Pompiere' => 'Pompiere',
			'Prata' => 'Prata',
			'Prociono' => 'Prociono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Puritan' => 'Puritan',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway', 
      'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
      'Reenie Beanie' => 'Reenie Beanie', 
      'Roboto' => 'Roboto',
      'Roboto Condensed' => 'Roboto Condensed',
			'Rock Salt' => 'Rock Salt',
			'Rochester' => 'Rochester',
			'Rokkitt' => 'Rokkitt',
			'Rosario' => 'Rosario',
			'Ruslan Display' => 'Ruslan Display',
      'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Schoolbell' => 'Schoolbell',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shanti' => 'Shanti',
			'Short Stack' => 'Short Stack',
			'Sigmar One' => 'Sigmar One',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spinnaker' => 'Spinnaker',
			'Stardos Stencil' => 'Stardos Stencil',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Tenor Sans' => 'Tenor Sans',
			'Terminal Dosis Light' => 'Terminal Dosis Light',
			'Tinos' => 'Tinos',
			'Titillium Web' => 'Titillium Web',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ultra' => 'Ultra',
      'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
      'Unkempt' => 'Unkempt',
			'Unna' => 'Unna',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'VT323' => 'VT323',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Zeyada' => 'Zeyada');

    $wp_customize->add_section('shootingstar_header_color_settings', array(
        'title'    => __('ShootingStar Header Color Settings', 'shootingstar'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('shootingstar_content_color_settings', array(
        'title'    => __('ShootingStar Main Content Color Settings', 'shootingstar'),
        'description' => '',
        'priority' => 130,
    ));
    $wp_customize->add_section('shootingstar_sidebar_color_settings', array(
        'title'    => __('ShootingStar Sidebar Color Settings', 'shootingstar'),
        'description' => '',
        'priority' => 140,
    ));
    $wp_customize->add_section('shootingstar_footer_color_settings', array(
        'title'    => __('ShootingStar Footer Color Settings', 'shootingstar'),
        'description' => '',
        'priority' => 150,
    ));
    $wp_customize->add_section('shootingstar_html_color_settings', array(
        'title'    => __('ShootingStar Form/HTML Elements Color Settings', 'shootingstar'),
        'description' => '',
        'priority' => 160,
    ));
    $wp_customize->add_section('shootingstar_font_settings', array(
        'title'    => __('ShootingStar Font Settings', 'shootingstar'),
        'description' => '',
        'priority' => 170,
    ));
    
    //  ==============================
    //  = Character Set              =
    //  ==============================
    $wp_customize->add_setting('shootingstar_character_set', array(
        'default'        => 'latin',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_character_set_control', array(
        'label'      => __('Character Set', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_character_set',
        'type'       => 'radio',
        'choices'    => array(
            'latin' => __( 'Latin' , 'shootingstar' ),
            'latin-ext' => __( 'Latin Extended' , 'shootingstar' ),
            'cyrillic' => __( 'Cyrillic' , 'shootingstar' ),
            'cyrillic-ext' => __( 'Cyrillic Extended' , 'shootingstar' ),
            'greek' => __( 'Greek' , 'shootingstar' ),
            'greek-ext' => __( 'Greek Extended' , 'shootingstar' ),
            'vietnamese' => __( 'Vietnamese' , 'shootingstar' ),
        ),
    ));
 
    //  =============================
    //  = Body font                 =
    //  =============================
     $wp_customize->add_setting('shootingstar_body_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_body_google_fonts_control', array(
        'settings' => 'shootingstar_body_google_fonts',
        'label'   => __('Body font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  ==========================
    //  = Body font size         =
    //  ==========================
    $wp_customize->add_setting('shootingstar_body_google_fonts_size', array(
        'default'        => '14',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_body_google_fonts_size_control', array(
        'label'      => __('Body font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_body_google_fonts_size',
    ));
    
    //  =============================
    //  = Site Title font           =
    //  =============================
     $wp_customize->add_setting('shootingstar_headings_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_headings_google_fonts_control', array(
        'settings' => 'shootingstar_headings_google_fonts',
        'label'   => __('Site Title font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  ==========================
    //  = Site Title font size   =
    //  ==========================
    $wp_customize->add_setting('shootingstar_headings_google_fonts_size', array(
        'default'        => '50',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headings_google_fonts_size_control', array(
        'label'      => __('Site Title font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headings_google_fonts_size',
    ));
    
    //  =============================
    //  = Site Description font     =
    //  =============================
     $wp_customize->add_setting('shootingstar_description_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_description_google_fonts_control', array(
        'settings' => 'shootingstar_description_google_fonts',
        'label'   => __('Site Description font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  ==============================
    //  = Site Description font size =
    //  ==============================
    $wp_customize->add_setting('shootingstar_description_google_fonts_size', array(
        'default'        => '21',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_description_google_fonts_size_control', array(
        'label'      => __('Site Description font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_description_google_fonts_size',
    ));
    
    //  =============================
    //  = Page/Post Headlines font  =
    //  =============================
     $wp_customize->add_setting('shootingstar_headline_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_headline_google_fonts_control', array(
        'settings' => 'shootingstar_headline_google_fonts',
        'label'   => __('Page/Post Headlines font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  ==========================
    //  = H1 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('shootingstar_headline_h1_size', array(
        'default'        => '28',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headline_h1_size_control', array(
        'label'      => __('H1 Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headline_h1_size',
    ));
    
    //  ==========================
    //  = H2 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('shootingstar_headline_h2_size', array(
        'default'        => '22',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headline_h2_size_control', array(
        'label'      => __('H2 Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headline_h2_size',
    ));
    
    //  ==========================
    //  = H3 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('shootingstar_headline_h3_size', array(
        'default'        => '19',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headline_h3_size_control', array(
        'label'      => __('H3 Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headline_h3_size',
    ));
    
    //  ==========================
    //  = H4 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('shootingstar_headline_h4_size', array(
        'default'        => '17',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headline_h4_size_control', array(
        'label'      => __('H4 Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headline_h4_size',
    ));
    
    //  ==========================
    //  = H5 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('shootingstar_headline_h5_size', array(
        'default'        => '15',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headline_h5_size_control', array(
        'label'      => __('H5 Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headline_h5_size',
    ));
    
    //  ==========================
    //  = H6 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('shootingstar_headline_h6_size', array(
        'default'        => '14',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headline_h6_size_control', array(
        'label'      => __('H6 Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headline_h6_size',
    ));
    
    //  =============================================
    //  = ShootingStar Posts Widgets headlines font =
    //  =============================================
     $wp_customize->add_setting('shootingstar_headline_box_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_headline_box_google_fonts_control', array(
        'settings' => 'shootingstar_headline_box_google_fonts',
        'label'   => __('ShootingStar Posts Widgets headlines font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  ==================================================
    //  = ShootingStar Posts Widgets headlines font size =
    //  ==================================================
    $wp_customize->add_setting('shootingstar_headline_box_google_fonts_size', array(
        'default'        => '28',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_headline_box_google_fonts_size_control', array(
        'label'      => __('ShootingStar Posts Widgets headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_headline_box_google_fonts_size',
    ));
    
    //  =============================
    //  = Post Entry Headline font  =
    //  =============================
     $wp_customize->add_setting('shootingstar_postentry_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_postentry_google_fonts_control', array(
        'settings' => 'shootingstar_postentry_google_fonts',
        'label'   => __('Post Entry Headline font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  =================================
    //  = Post Entry Headline font size =
    //  =================================
    $wp_customize->add_setting('shootingstar_postentry_google_fonts_size', array(
        'default'        => '25',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_postentry_google_fonts_size_control', array(
        'label'      => __('Post Entry Headline font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_postentry_google_fonts_size',
    ));
    
    //  ========================================
    //  = Sidebar/Footer Widget Headlines font =
    //  ========================================
     $wp_customize->add_setting('shootingstar_sidebar_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_sidebar_google_fonts_control', array(
        'settings' => 'shootingstar_sidebar_google_fonts',
        'label'   => __('Sidebar/Footer Widget Headlines font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  ======================================
    //  = Sidebar Widget Headlines font size =
    //  ======================================
    $wp_customize->add_setting('shootingstar_sidebar_google_fonts_size', array(
        'default'        => '21',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_sidebar_google_fonts_size_control', array(
        'label'      => __('Sidebar Widget Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_sidebar_google_fonts_size',
    ));
    
    //  ======================================
    //  = Footer Widget Headlines font size  =
    //  ======================================
    $wp_customize->add_setting('shootingstar_footer_google_fonts_size', array(
        'default'        => '21',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_footer_google_fonts_size_control', array(
        'label'      => __('Footer Widget Headlines font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_footer_google_fonts_size',
    ));
    
    //  =============================
    //  = Main Header Menu font     =
    //  =============================
     $wp_customize->add_setting('shootingstar_menu_google_fonts', array(
        'default'        => 'default',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
 
    ));
    $wp_customize->add_control( 'shootingstar_menu_google_fonts_control', array(
        'settings' => 'shootingstar_menu_google_fonts',
        'label'   => __('Main Header Menu font', 'shootingstar'),
        'section' => 'shootingstar_font_settings',
        'type'    => 'select',
        'choices'    => $shootingstar_fonts,
    ));
    
    //  ==============================
    //  = Main Header Menu font size =
    //  ==============================
    $wp_customize->add_setting('shootingstar_menu_google_fonts_size', array(
        'default'        => '15',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'shootingstar_sanitize_text',
    ));
 
    $wp_customize->add_control('shootingstar_menu_google_fonts_size_control', array(
        'label'      => __('Main Header Menu font size', 'shootingstar'),
        'section'    => 'shootingstar_font_settings',
        'settings'   => 'shootingstar_menu_google_fonts_size',
    ));
    
//  ===========================================================================
//  = COLOR SETTINGS                                                          =
//  ===========================================================================

    //  =================================
    //  = Carousel Box background color =
    //  =================================
    $wp_customize->add_setting('shootingstar_carousel_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_carousel_background_color_control', array(
        'label'    => __('Carousel Box background color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_carousel_background_color',
    )));
    
    //  =================================
    //  = Carousel Arrows color         =
    //  =================================
    $wp_customize->add_setting('shootingstar_arrows_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_arrows_background_color_control', array(
        'label'    => __('Carousel Arrows color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_arrows_background_color',
    )));
    
    //  =================================
    //  = Carousel Box Links color      =
    //  =================================
    $wp_customize->add_setting('shootingstar_carousel_links_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_carousel_links_color_control', array(
        'label'    => __('Carousel Box Links color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_carousel_links_color',
    )));
    
    //  ==================================
    //  = Carousel Box Links hover color =
    //  ==================================
    $wp_customize->add_setting('shootingstar_carousel_links_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_carousel_links_hover_color_control', array(
        'label'    => __('Carousel Box Links hover color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_carousel_links_hover_color',
    )));
    
    //  ======================================================
    //  = Social Networks Links/Contact Box background color =
    //  ======================================================
    $wp_customize->add_setting('shootingstar_top_menu_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_top_menu_background_color_control', array(
        'label'    => __('Social Networks Links/Contact Box background color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_top_menu_background_color',
    )));
    
    //  =========================================================
    //  = Social Networks Links/Contact Box border-bottom color =
    //  =========================================================
    $wp_customize->add_setting('shootingstar_top_menu_border_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_top_menu_border_color_control', array(
        'label'    => __('Social Networks Links/Contact Box border-bottom color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_top_menu_border_color',
    )));
    
    //  ==================================
    //  = Contact Information color      =
    //  ==================================
    $wp_customize->add_setting('shootingstar_contact_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_contact_color_control', array(
        'label'    => __('Contact Information color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_contact_color',
    )));
    
    //  ===================================
    //  = Contact Information Icons color =
    //  ===================================
    $wp_customize->add_setting('shootingstar_contact_icons_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_contact_icons_color_control', array(
        'label'    => __('Contact Information Icons color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_contact_icons_color',
    )));
    
    //  ===================================
    //  = Social Networks Links color     =
    //  ===================================
    $wp_customize->add_setting('shootingstar_social_icons_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_social_icons_color_control', array(
        'label'    => __('Social Networks Links color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_social_icons_color',
    )));
    
    //  =====================================
    //  = Social Networks Links hover color =
    //  =====================================
    $wp_customize->add_setting('shootingstar_social_icons_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_social_icons_hover_color_control', array(
        'label'    => __('Social Networks Links hover color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_social_icons_hover_color',
    )));
    
    //  ====================================
    //  = Main Menu background color       =
    //  ====================================
    $wp_customize->add_setting('shootingstar_main_menu_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_menu_background_color_control', array(
        'label'    => __('Main Menu background color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_menu_background_color',
    )));
    
    //  ====================================
    //  = Main Menu border color           =
    //  ====================================
    $wp_customize->add_setting('shootingstar_main_menu_border_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_menu_border_color_control', array(
        'label'    => __('Main Menu border color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_menu_border_color',
    )));
    
    //  ====================================
    //  = Main Menu Links border color     =
    //  ====================================
    $wp_customize->add_setting('shootingstar_main_menu_links_border_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_menu_links_border_color_control', array(
        'label'    => __('Main Menu Links border color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_menu_links_border_color',
    )));
    
    //  ====================================
    //  = Main Menu Links color            =
    //  ====================================
    $wp_customize->add_setting('shootingstar_main_header_menu_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_header_menu_color_control', array(
        'label'    => __('Main Menu Links color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_header_menu_color',
    )));
    
    //  ====================================
    //  = Main Menu Links hover color      =
    //  ====================================
    $wp_customize->add_setting('shootingstar_main_header_menu_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_header_menu_hover_color_control', array(
        'label'    => __('Main Menu Links hover color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_header_menu_hover_color',
    )));
    
    //  ==========================================
    //  = Main Menu Links hover background color =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_main_header_menu_hover_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_header_menu_hover_background_color_control', array(
        'label'    => __('Main Menu Links hover background color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_header_menu_hover_background_color',
    )));
    
    //  ==========================================
    //  = Active Main Menu Links color           =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_active_main_header_menu_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_active_main_header_menu_color_control', array(
        'label'    => __('Active Main Menu Links color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_active_main_header_menu_color',
    )));
    
    //  ===========================================
    //  = Active Main Menu Links background color =
    //  ===========================================
    $wp_customize->add_setting('shootingstar_active_main_header_menu_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_active_main_header_menu_background_color_control', array(
        'label'    => __('Active Main Menu Links background color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_active_main_header_menu_background_color',
    )));
    
    //  =================================================
    //  = Main Menu drop-down submenus background color =
    //  =================================================
    $wp_customize->add_setting('shootingstar_main_submenu_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_submenu_background_color_control', array(
        'label'    => __('Main Menu drop-down submenus background color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_submenu_background_color',
    )));
    
    //  =================================================
    //  = Main Menu drop-down submenus items text color =
    //  =================================================
    $wp_customize->add_setting('shootingstar_main_submenu_text_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_submenu_text_color_control', array(
        'label'    => __('Main Menu drop-down submenus items text color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_submenu_text_color',
    )));
    
    //  ===================================================
    //  = Main Menu drop-down submenus items border color =
    //  ===================================================
    $wp_customize->add_setting('shootingstar_main_submenu_border_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_submenu_border_color_control', array(
        'label'    => __('Main Menu drop-down submenus items border color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_submenu_border_color',
    )));
    
    //  ===================================================
    //  = Main Menu drop-down submenus items hover color  =
    //  ===================================================
    $wp_customize->add_setting('shootingstar_main_submenu_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_submenu_hover_color_control', array(
        'label'    => __('Main Menu drop-down submenus items hover color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_main_submenu_hover_color',
    )));
    
    //  ==========================================
    //  = Header Content background color        =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_header_content_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_header_content_background_color_control', array(
        'label'    => __('Header Content background color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_header_content_background_color',
    )));
    
    //  ==========================================
    //  = Site Title color                       =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_site_title_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_site_title_color_control', array(
        'label'    => __('Site Title color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_site_title_color',
    )));
    
    //  ==========================================
    //  = Site Title hover color                 =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_site_title_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_site_title_hover_color_control', array(
        'label'    => __('Site Title hover color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_site_title_hover_color',
    )));
    
    //  ==========================================
    //  = Site Description color                 =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_site_description_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_site_description_color_control', array(
        'label'    => __('Site Description color', 'shootingstar'),
        'section'  => 'shootingstar_header_color_settings',
        'settings' => 'shootingstar_site_description_color',
    )));
    
    //  ==========================================
    //  = Main Content background color          =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_main_content_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_content_background_color_control', array(
        'label'    => __('Main Content background color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_main_content_background_color',
    )));
    
    //  ==========================================
    //  = Shadows color                          =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_shadows_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_shadows_color_control', array(
        'label'    => __('Shadows color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_shadows_color',
    )));
    
    //  ==========================================
    //  = Main Content Text color                =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_body_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_body_color_control', array(
        'label'    => __('Main Content Text color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_body_color',
    )));
    
    //  ==========================================
    //  = Page/Post Title color                  =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_main_headlines_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_main_headlines_color_control', array(
        'label'    => __('Page/Post Title color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_main_headlines_color',
    )));
    
    //  ==========================================
    //  = Page/Post Headlines color              =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_headlines_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_headlines_color_control', array(
        'label'    => __('Page/Post Headlines color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_headlines_color',
    )));
    
    //  ==========================================
    //  = Breadcrumb Navigation/Post Meta color  =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_meta_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_meta_color_control', array(
        'label'    => __('Breadcrumb Navigation/Post Meta color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_meta_color',
    )));
    
    //  ===============================================
    //  = Breadcrumb Navigation/Post Meta Links color =
    //  ===============================================
    $wp_customize->add_setting('shootingstar_meta_links_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_meta_links_color_control', array(
        'label'    => __('Breadcrumb Navigation/Post Meta Links color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_meta_links_color',
    )));
    
    //  ===============================================
    //  = ShootingStar Posts Widgets headlines color  =
    //  ===============================================
    $wp_customize->add_setting('shootingstar_homepage_headlines_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_homepage_headlines_color_control', array(
        'label'    => __('ShootingStar Posts Widgets headlines color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_homepage_headlines_color',
    )));
    
    //  ===============================================
    //  = Post Entry Headline color                   =
    //  ===============================================
    $wp_customize->add_setting('shootingstar_post_entry_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_post_entry_color_control', array(
        'label'    => __('Post Entry Headline color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_post_entry_color',
    )));
    
    //  ===============================================
    //  = Post Entry Headline hover color             =
    //  ===============================================
    $wp_customize->add_setting('shootingstar_post_entry_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_post_entry_hover_color_control', array(
        'label'    => __('Post Entry Headline hover color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_post_entry_hover_color',
    )));
    
    //  ===============================================
    //  = Main Content Links color                    =
    //  ===============================================
    $wp_customize->add_setting('shootingstar_content_links_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_content_links_color_control', array(
        'label'    => __('Main Content Links color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_content_links_color',
    )));
    
    //  =================================================
    //  = Post Author's Comments background color       =
    //  =================================================
    $wp_customize->add_setting('shootingstar_author_comments_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_author_comments_background_color_control', array(
        'label'    => __('Post Author&#8217;s Comments background color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_author_comments_background_color',
    )));
    
    //  =================================================
    //  = Sticky Post background color                  =
    //  =================================================
    $wp_customize->add_setting('shootingstar_sticky_post_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_sticky_post_background_color_control', array(
        'label'    => __('Sticky Post background color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_sticky_post_background_color',
    )));
    
    //  ==================================================
    //  = ShootingStar Posts-Thumbnail items hover color =
    //  ==================================================
    $wp_customize->add_setting('shootingstar_posts_thumbnail_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_posts_thumbnail_background_color_control', array(
        'label'    => __('ShootingStar Posts-Thumbnail items hover color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_posts_thumbnail_background_color',
    )));
    
    //  =================================================
    //  = Highlighted text background color             =
    //  =================================================
    $wp_customize->add_setting('shootingstar_highlight_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_highlight_background_color_control', array(
        'label'    => __('Highlighted text background color', 'shootingstar'),
        'section'  => 'shootingstar_content_color_settings',
        'settings' => 'shootingstar_highlight_background_color',
    )));
    
    //  ==========================================
    //  = Sidebar Widget Headlines color         =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_sidebar_widget_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_sidebar_widget_color_control', array(
        'label'    => __('Sidebar Widget Headlines color', 'shootingstar'),
        'section'  => 'shootingstar_sidebar_color_settings',
        'settings' => 'shootingstar_sidebar_widget_color',
    )));
    
    //  ==========================================
    //  = Sidebar Widget Headlines border color  =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_sidebar_widget_border', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_sidebar_widget_border_control', array(
        'label'    => __('Sidebar Widget Headlines border color', 'shootingstar'),
        'section'  => 'shootingstar_sidebar_color_settings',
        'settings' => 'shootingstar_sidebar_widget_border',
    )));
    
    //  ==========================================
    //  = Sidebar Text color                     =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_sidebar_text_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_sidebar_text_color_control', array(
        'label'    => __('Sidebar Text color', 'shootingstar'),
        'section'  => 'shootingstar_sidebar_color_settings',
        'settings' => 'shootingstar_sidebar_text_color',
    )));
    
    //  ==========================================
    //  = Sidebar Links color                    =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_sidebar_links_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_sidebar_links_color_control', array(
        'label'    => __('Sidebar Links color', 'shootingstar'),
        'section'  => 'shootingstar_sidebar_color_settings',
        'settings' => 'shootingstar_sidebar_links_color',
    )));
    
    //  ==========================================
    //  = Footer background color                =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_background_color_control', array(
        'label'    => __('Footer background color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_background_color',
    )));
    
    //  ==========================================
    //  = Footer Notices background color        =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_notices_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_notices_background_color_control', array(
        'label'    => __('Footer Notices background color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_notices_background_color',
    )));
    
    //  ==========================================
    //  = Footer Widget Headlines color          =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_widget_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_widget_color_control', array(
        'label'    => __('Footer Widget Headlines color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_widget_color',
    )));
    
    //  ==========================================
    //  = Footer Widget Headlines border color   =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_widget_border', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_widget_border_control', array(
        'label'    => __('Footer Widget Headlines border color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_widget_border',
    )));
    
    //  ==========================================
    //  = Footer Text color                      =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_text_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_text_color_control', array(
        'label'    => __('Footer Text color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_text_color',
    )));
    
    //  ==========================================
    //  = Footer Notices Text color              =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_notices_text_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_notices_text_color_control', array(
        'label'    => __('Footer Notices Text color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_notices_text_color',
    )));
    
    //  ==========================================
    //  = Footer Links color                     =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_links_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_links_color_control', array(
        'label'    => __('Footer Links color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_links_color',
    )));
    
    //  ==========================================
    //  = Footer Notices Links color             =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_footer_notices_links_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_footer_notices_links_color_control', array(
        'label'    => __('Footer Notices Links color', 'shootingstar'),
        'section'  => 'shootingstar_footer_color_settings',
        'settings' => 'shootingstar_footer_notices_links_color',
    )));
    
    //  ==========================================
    //  = Searchform border color                =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_searchform_border_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_searchform_border_color_control', array(
        'label'    => __('Searchform border color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_searchform_border_color',
    )));
    
    //  ==========================================
    //  = Search Button background color         =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_searchform_button_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_searchform_button_background_color_control', array(
        'label'    => __('Search Button background color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_searchform_button_background_color',
    )));
    
    //  ==========================================
    //  = Search Button hover color              =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_searchform_button_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_searchform_button_hover_color_control', array(
        'label'    => __('Search Button hover color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_searchform_button_hover_color',
    )));
    
    //  ==========================================
    //  = Form Fields background color           =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_form_fields_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_form_fields_background_color_control', array(
        'label'    => __('Form Fields background color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_form_fields_background_color',
    )));
    
    //  ==========================================
    //  = Form Fields border color               =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_form_fields_border_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_form_fields_border_color_control', array(
        'label'    => __('Form Fields border color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_form_fields_border_color',
    )));
    
    //  ==========================================
    //  = Buttons background color               =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_form_buttons_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_form_buttons_background_color_control', array(
        'label'    => __('Buttons background color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_form_buttons_background_color',
    )));
    
    //  ==========================================
    //  = Buttons hover color                    =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_form_buttons_hover_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_form_buttons_hover_color_control', array(
        'label'    => __('Buttons hover color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_form_buttons_hover_color',
    )));
    
    //  ==========================================
    //  = Table Headers background color         =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_table_headers_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_table_headers_background_color_control', array(
        'label'    => __('Table Headers background color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_table_headers_background_color',
    )));
    
    //  ==========================================
    //  = Blockquotes background color           =
    //  ==========================================
    $wp_customize->add_setting('shootingstar_blockquotes_background_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'shootingstar_blockquotes_background_color_control', array(
        'label'    => __('Blockquotes background color', 'shootingstar'),
        'section'  => 'shootingstar_html_color_settings',
        'settings' => 'shootingstar_blockquotes_background_color',
    )));
}
 
add_action('customize_register', 'shootingstar_customize_register');

/**
 * Sanitize URIs
*/
function shootingstar_sanitize_uri($uri) {
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}

/**
 * Sanitize Texts
*/
function shootingstar_sanitize_text($str) {
	if('' === $str){
		return '';
	}
	return sanitize_text_field( $str);
} ?>