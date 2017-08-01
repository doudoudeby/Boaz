<?php
/**
 * BrickYard Theme Customizer.
 * @package BrickYard
 * @since BrickYard 2.0.0
*/
function brickyard_customize_register($wp_customize){

$brickyard_fonts = array(
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

    $wp_customize->add_section('brickyard_header_color_settings', array(
        'title'    => __('BrickYard Header Color Settings', 'brickyard'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('brickyard_content_color_settings', array(
        'title'    => __('BrickYard Main Content Color Settings', 'brickyard'),
        'description' => '',
        'priority' => 130,
    ));
    $wp_customize->add_section('brickyard_sidebar_color_settings', array(
        'title'    => __('BrickYard Sidebar Color Settings', 'brickyard'),
        'description' => '',
        'priority' => 140,
    ));
    $wp_customize->add_section('brickyard_footer_color_settings', array(
        'title'    => __('BrickYard Footer Color Settings', 'brickyard'),
        'description' => '',
        'priority' => 150,
    ));
    $wp_customize->add_section('brickyard_html_color_settings', array(
        'title'    => __('BrickYard Form/HTML Elements Color Settings', 'brickyard'),
        'description' => '',
        'priority' => 160,
    ));
    $wp_customize->add_section('brickyard_font_settings', array(
        'title'    => __('BrickYard Font Settings', 'brickyard'),
        'description' => '',
        'priority' => 170,
    ));
    
    //  ==============================
    //  = Character Set              =
    //  ==============================
    $wp_customize->add_setting('brickyard_character_set', array(
        'default'        => get_option('brickyard_character_set', 'latin'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_character_set_control', array(
        'label'      => __('Character Set', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_character_set',
        'type'       => 'radio',
        'choices'    => array(
            'latin' => __( 'Latin' , 'brickyard' ),
            'latin-ext' => __( 'Latin Extended' , 'brickyard' ),
            'cyrillic' => __( 'Cyrillic' , 'brickyard' ),
            'cyrillic-ext' => __( 'Cyrillic Extended' , 'brickyard' ),
            'greek' => __( 'Greek' , 'brickyard' ),
            'greek-ext' => __( 'Greek Extended' , 'brickyard' ),
            'vietnamese' => __( 'Vietnamese' , 'brickyard' ),
        ),
    ));
 
    //  =============================
    //  = Body font                 =
    //  =============================
     $wp_customize->add_setting('brickyard_body_google_fonts', array(
        'default'        => get_option('brickyard_body_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_body_google_fonts_control', array(
        'settings' => 'brickyard_body_google_fonts',
        'label'   => __('Body font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ==========================
    //  = Body font size         =
    //  ==========================
    $wp_customize->add_setting('brickyard_body_google_fonts_size', array(
        'default'        => get_option('brickyard_body_google_fonts_size', '13'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_body_google_fonts_size_control', array(
        'label'      => __('Body font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_body_google_fonts_size',
    ));
    
    //  =============================
    //  = Site Title font           =
    //  =============================
     $wp_customize->add_setting('brickyard_headings_google_fonts', array(
        'default'        => get_option('brickyard_headings_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_headings_google_fonts_control', array(
        'settings' => 'brickyard_headings_google_fonts',
        'label'   => __('Site Title font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ==========================
    //  = Site Title font size   =
    //  ==========================
    $wp_customize->add_setting('brickyard_headings_google_fonts_size', array(
        'default'        => get_option('brickyard_headings_google_fonts_size', '48'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headings_google_fonts_size_control', array(
        'label'      => __('Site Title font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headings_google_fonts_size',
    ));
    
    //  =============================
    //  = Site Description font     =
    //  =============================
     $wp_customize->add_setting('brickyard_description_google_fonts', array(
        'default'        => get_option('brickyard_description_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_description_google_fonts_control', array(
        'settings' => 'brickyard_description_google_fonts',
        'label'   => __('Site Description font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ==============================
    //  = Site Description font size =
    //  ==============================
    $wp_customize->add_setting('brickyard_description_google_fonts_size', array(
        'default'        => get_option('brickyard_description_google_fonts_size', '20'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_description_google_fonts_size_control', array(
        'label'      => __('Site Description font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_description_google_fonts_size',
    ));
    
    //  =============================
    //  = Page/Post Headlines font  =
    //  =============================
     $wp_customize->add_setting('brickyard_headline_google_fonts', array(
        'default'        => get_option('brickyard_headline_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_headline_google_fonts_control', array(
        'settings' => 'brickyard_headline_google_fonts',
        'label'   => __('Page/Post Headlines (h1 - h6) font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ==========================
    //  = H1 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('brickyard_headline_h1_size', array(
        'default'        => get_option('brickyard_headline_h1_size', '27'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headline_h1_size_control', array(
        'label'      => __('H1 Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headline_h1_size',
    ));
    
    //  ==========================
    //  = H2 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('brickyard_headline_h2_size', array(
        'default'        => get_option('brickyard_headline_h2_size', '21'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headline_h2_size_control', array(
        'label'      => __('H2 Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headline_h2_size',
    ));
    
    //  ==========================
    //  = H3 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('brickyard_headline_h3_size', array(
        'default'        => get_option('brickyard_headline_h3_size', '18'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headline_h3_size_control', array(
        'label'      => __('H3 Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headline_h3_size',
    ));
    
    //  ==========================
    //  = H4 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('brickyard_headline_h4_size', array(
        'default'        => get_option('brickyard_headline_h4_size', '16'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headline_h4_size_control', array(
        'label'      => __('H4 Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headline_h4_size',
    ));
    
    //  ==========================
    //  = H5 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('brickyard_headline_h5_size', array(
        'default'        => get_option('brickyard_headline_h5_size', '14'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headline_h5_size_control', array(
        'label'      => __('H5 Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headline_h5_size',
    ));
    
    //  ==========================
    //  = H6 Headlines font size =
    //  ==========================
    $wp_customize->add_setting('brickyard_headline_h6_size', array(
        'default'        => get_option('brickyard_headline_h6_size', '13'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headline_h6_size_control', array(
        'label'      => __('H6 Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headline_h6_size',
    ));
    
    //  =============================================
    //  = BrickYard Posts Widgets headlines font =
    //  =============================================
     $wp_customize->add_setting('brickyard_headline_box_google_fonts', array(
        'default'        => get_option('brickyard_headline_box_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_headline_box_google_fonts_control', array(
        'settings' => 'brickyard_headline_box_google_fonts',
        'label'   => __('BrickYard Posts Widgets headlines font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ==================================================
    //  = BrickYard Posts Widgets headlines font size =
    //  ==================================================
    $wp_customize->add_setting('brickyard_headline_box_google_fonts_size', array(
        'default'        => get_option('brickyard_headline_box_google_fonts_size', '27'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_headline_box_google_fonts_size_control', array(
        'label'      => __('BrickYard Posts Widgets headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_headline_box_google_fonts_size',
    ));
    
    //  =============================
    //  = Post Entry Headline font  =
    //  =============================
     $wp_customize->add_setting('brickyard_postentry_google_fonts', array(
        'default'        => get_option('brickyard_postentry_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_postentry_google_fonts_control', array(
        'settings' => 'brickyard_postentry_google_fonts',
        'label'   => __('Post Entry Headline font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  =================================
    //  = Post Entry Headline font size =
    //  =================================
    $wp_customize->add_setting('brickyard_postentry_google_fonts_size', array(
        'default'        => get_option('brickyard_postentry_google_fonts_size', '21'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_postentry_google_fonts_size_control', array(
        'label'      => __('Post Entry Headline font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_postentry_google_fonts_size',
    ));
    
    //  ========================================
    //  = Sidebar/Footer Widget Headlines font =
    //  ========================================
     $wp_customize->add_setting('brickyard_sidebar_google_fonts', array(
        'default'        => get_option('brickyard_sidebar_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_sidebar_google_fonts_control', array(
        'settings' => 'brickyard_sidebar_google_fonts',
        'label'   => __('Sidebar/Footer Widget Headlines font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ======================================
    //  = Sidebar Widget Headlines font size =
    //  ======================================
    $wp_customize->add_setting('brickyard_sidebar_google_fonts_size', array(
        'default'        => get_option('brickyard_sidebar_google_fonts_size', '19'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_sidebar_google_fonts_size_control', array(
        'label'      => __('Sidebar Widget Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_sidebar_google_fonts_size',
    ));
    
    //  ======================================
    //  = Footer Widget Headlines font size  =
    //  ======================================
    $wp_customize->add_setting('brickyard_footer_google_fonts_size', array(
        'default'        => get_option('brickyard_footer_google_fonts_size', '19'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_footer_google_fonts_size_control', array(
        'label'      => __('Footer Widget Headlines font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_footer_google_fonts_size',
    ));
    
    //  =============================
    //  = Main Header Menu font     =
    //  =============================
     $wp_customize->add_setting('brickyard_menu_google_fonts', array(
        'default'        => get_option('brickyard_menu_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_menu_google_fonts_control', array(
        'settings' => 'brickyard_menu_google_fonts',
        'label'   => __('Main Header Menu font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ==============================
    //  = Main Header Menu font size =
    //  ==============================
    $wp_customize->add_setting('brickyard_menu_google_fonts_size', array(
        'default'        => get_option('brickyard_menu_google_fonts_size', '14'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_menu_google_fonts_size_control', array(
        'label'      => __('Main Header Menu font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_menu_google_fonts_size',
    ));
    
    //  =============================
    //  = Top Header Menu font      =
    //  =============================
     $wp_customize->add_setting('brickyard_top_menu_google_fonts', array(
        'default'        => get_option('brickyard_top_menu_google_fonts', 'default'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
 
    ));
    $wp_customize->add_control( 'brickyard_top_menu_google_fonts_control', array(
        'settings' => 'brickyard_top_menu_google_fonts',
        'label'   => __('Top Header Menu font', 'brickyard'),
        'section' => 'brickyard_font_settings',
        'type'    => 'select',
        'choices'    => $brickyard_fonts,
    ));
    
    //  ==============================
    //  = Top Header Menu font size  =
    //  ==============================
    $wp_customize->add_setting('brickyard_top_menu_google_fonts_size', array(
        'default'        => get_option('brickyard_top_menu_google_fonts_size', '13'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control('brickyard_top_menu_google_fonts_size_control', array(
        'label'      => __('Top Header Menu font size', 'brickyard'),
        'section'    => 'brickyard_font_settings',
        'settings'   => 'brickyard_top_menu_google_fonts_size',
    ));
    
//  ===========================================================================
//  = COLOR SETTINGS                                                          =
//  ===========================================================================
    
    //  =====================================
    //  = Social Networks Links hover color =
    //  =====================================
    $wp_customize->add_setting('brickyard_social_icons_background_color', array(
        'default'           => get_option('brickyard_social_icons_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_social_icons_background_color_control', array(
        'label'    => __('Social Networks Links hover color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_social_icons_background_color',
    )));
    
    //  =============================
    //  = Top Menu background color =
    //  =============================
    $wp_customize->add_setting('brickyard_top_menu_background_color', array(
        'default'           => get_option('brickyard_top_menu_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_menu_background_color_control', array(
        'label'    => __('Top Menu background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_menu_background_color',
    )));
    
    //  ======================================================
    //  = Top Menu Links color                               =
    //  ======================================================
    $wp_customize->add_setting('brickyard_top_header_menu_color', array(
        'default'           => get_option('brickyard_top_header_menu_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_header_menu_color_control', array(
        'label'    => __('Top Menu Links color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_header_menu_color',
    )));
    
    //  ======================================================
    //  = Top Menu Links hover color                         =
    //  ======================================================
    $wp_customize->add_setting('brickyard_top_header_menu_hover_color', array(
        'default'           => get_option('brickyard_top_header_menu_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_header_menu_hover_color_control', array(
        'label'    => __('Top Menu Links hover color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_header_menu_hover_color',
    )));
    
    //  ======================================================
    //  = Top Menu Links hover background-color              =
    //  ======================================================
    $wp_customize->add_setting('brickyard_top_header_menu_hover_background_color', array(
        'default'           => get_option('brickyard_top_header_menu_hover_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_header_menu_hover_background_color_control', array(
        'label'    => __('Top Menu Links hover background-color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_header_menu_hover_background_color',
    )));
    
    //  ======================================================
    //  = Active Top Menu Links color                        =
    //  ======================================================
    $wp_customize->add_setting('brickyard_active_top_header_menu_color', array(
        'default'           => get_option('brickyard_active_top_header_menu_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_active_top_header_menu_color_control', array(
        'label'    => __('Active Top Menu Links color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_active_top_header_menu_color',
    )));
    
    //  =========================================================
    //  = Top Menu drop-down submenus background color          =
    //  =========================================================
    $wp_customize->add_setting('brickyard_top_submenu_background_color', array(
        'default'           => get_option('brickyard_top_submenu_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_submenu_background_color_control', array(
        'label'    => __('Top Menu drop-down submenus background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_submenu_background_color',
    )));
    
    //  =========================================================
    //  = Top Menu drop-down submenus items border color        =
    //  =========================================================
    $wp_customize->add_setting('brickyard_top_submenu_border_color', array(
        'default'           => get_option('brickyard_top_submenu_border_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_submenu_border_color_control', array(
        'label'    => __('Top Menu drop-down submenus items border color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_submenu_border_color',
    )));
    
    //  =========================================================
    //  = Top Menu drop-down submenus items text color          =
    //  =========================================================
    $wp_customize->add_setting('brickyard_top_submenu_text_color', array(
        'default'           => get_option('brickyard_top_submenu_text_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_submenu_text_color_control', array(
        'label'    => __('Top Menu drop-down submenus items text color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_submenu_text_color',
    )));
    
    //  =========================================================
    //  = Top Menu drop-down submenus items hover color         =
    //  =========================================================
    $wp_customize->add_setting('brickyard_top_submenu_hover_color', array(
        'default'           => get_option('brickyard_top_submenu_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_top_submenu_hover_color_control', array(
        'label'    => __('Top Menu drop-down submenus items hover color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_top_submenu_hover_color',
    )));
    
    //  ====================================
    //  = Main Menu background color       =
    //  ====================================
    $wp_customize->add_setting('brickyard_main_menu_background_color', array(
        'default'           => get_option('brickyard_main_menu_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_menu_background_color_control', array(
        'label'    => __('Main Menu background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_menu_background_color',
    )));
    
    //  ====================================
    //  = Main Menu border-bottom color    =
    //  ====================================
    $wp_customize->add_setting('brickyard_main_menu_border_color', array(
        'default'           => get_option('brickyard_main_menu_border_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_menu_border_color_control', array(
        'label'    => __('Main Menu border-bottom color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_menu_border_color',
    )));
    
    //  ====================================
    //  = Main Menu Links border color     =
    //  ====================================
    $wp_customize->add_setting('brickyard_main_menu_links_border_color', array(
        'default'           => get_option('brickyard_main_menu_links_border_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_menu_links_border_color_control', array(
        'label'    => __('Main Menu Links border color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_menu_links_border_color',
    )));
    
    //  ====================================
    //  = Main Menu Links color            =
    //  ====================================
    $wp_customize->add_setting('brickyard_main_header_menu_color', array(
        'default'           => get_option('brickyard_main_header_menu_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_header_menu_color_control', array(
        'label'    => __('Main Menu Links color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_header_menu_color',
    )));
    
    //  ====================================
    //  = Main Menu Links hover color      =
    //  ====================================
    $wp_customize->add_setting('brickyard_main_header_menu_hover_color', array(
        'default'           => get_option('brickyard_main_header_menu_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_header_menu_hover_color_control', array(
        'label'    => __('Main Menu Links hover color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_header_menu_hover_color',
    )));
    
    //  ==========================================
    //  = Main Menu Links hover background color =
    //  ==========================================
    $wp_customize->add_setting('brickyard_main_header_menu_hover_background_color', array(
        'default'           => get_option('brickyard_main_header_menu_hover_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_header_menu_hover_background_color_control', array(
        'label'    => __('Main Menu Links hover background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_header_menu_hover_background_color',
    )));
    
    //  ==========================================
    //  = Active Main Menu Links color           =
    //  ==========================================
    $wp_customize->add_setting('brickyard_active_main_header_menu_color', array(
        'default'           => get_option('brickyard_active_main_header_menu_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_active_main_header_menu_color_control', array(
        'label'    => __('Active Main Menu Links color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_active_main_header_menu_color',
    )));
    
    //  ===========================================
    //  = Active Main Menu Links background color =
    //  ===========================================
    $wp_customize->add_setting('brickyard_active_main_header_menu_background_color', array(
        'default'           => get_option('brickyard_active_main_header_menu_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_active_main_header_menu_background_color_control', array(
        'label'    => __('Active Main Menu Links background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_active_main_header_menu_background_color',
    )));
    
    //  =================================================
    //  = Main Menu drop-down submenus background color =
    //  =================================================
    $wp_customize->add_setting('brickyard_main_submenu_background_color', array(
        'default'           => get_option('brickyard_main_submenu_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_submenu_background_color_control', array(
        'label'    => __('Main Menu drop-down submenus background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_submenu_background_color',
    )));
    
    //  ===================================================
    //  = Main Menu drop-down submenus items border color =
    //  ===================================================
    $wp_customize->add_setting('brickyard_main_submenu_border_color', array(
        'default'           => get_option('brickyard_main_submenu_border_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_submenu_border_color_control', array(
        'label'    => __('Main Menu drop-down submenus items border color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_submenu_border_color',
    )));
    
    //  ===================================================
    //  = Main Menu drop-down submenus items hover color  =
    //  ===================================================
    $wp_customize->add_setting('brickyard_main_submenu_hover_color', array(
        'default'           => get_option('brickyard_main_submenu_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_submenu_hover_color_control', array(
        'label'    => __('Main Menu drop-down submenus items hover background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_main_submenu_hover_color',
    )));
    
    //  ==========================================
    //  = Header Content background color        =
    //  ==========================================
    $wp_customize->add_setting('brickyard_header_content_background_color', array(
        'default'           => get_option('brickyard_header_content_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_header_content_background_color_control', array(
        'label'    => __('Header Content background color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_header_content_background_color',
    )));
    
    //  ==========================================
    //  = Site Title color                       =
    //  ==========================================
    $wp_customize->add_setting('brickyard_site_title_color', array(
        'default'           => get_option('brickyard_site_title_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_site_title_color_control', array(
        'label'    => __('Site Title color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_site_title_color',
    )));
    
    //  ==========================================
    //  = Site Title hover color                 =
    //  ==========================================
    $wp_customize->add_setting('brickyard_site_title_hover_color', array(
        'default'           => get_option('brickyard_site_title_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_site_title_hover_color_control', array(
        'label'    => __('Site Title hover color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_site_title_hover_color',
    )));
    
    //  ==========================================
    //  = Site Description color                 =
    //  ==========================================
    $wp_customize->add_setting('brickyard_site_description_color', array(
        'default'           => get_option('brickyard_site_description_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_site_description_color_control', array(
        'label'    => __('Site Description color', 'brickyard'),
        'section'  => 'brickyard_header_color_settings',
        'settings' => 'brickyard_site_description_color',
    )));
    
    //  ==========================================
    //  = Main Content background color          =
    //  ==========================================
    $wp_customize->add_setting('brickyard_main_content_background_color', array(
        'default'           => get_option('brickyard_main_content_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_content_background_color_control', array(
        'label'    => __('Main Content background color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_main_content_background_color',
    )));
    
    //  ==========================================
    //  = Content Boxes Shadows color            =
    //  ==========================================
    $wp_customize->add_setting('brickyard_shadows_color', array(
        'default'           => get_option('brickyard_shadows_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_shadows_color_control', array(
        'label'    => __('Content Boxes Shadows color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_shadows_color',
    )));
    
    //  ==========================================
    //  = Main Content Text color                =
    //  ==========================================
    $wp_customize->add_setting('brickyard_body_color', array(
        'default'           => get_option('brickyard_body_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_body_color_control', array(
        'label'    => __('Main Content Text color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_body_color',
    )));
    
    //  ==========================================
    //  = Page/Post Title color                  =
    //  ==========================================
    $wp_customize->add_setting('brickyard_main_headlines_color', array(
        'default'           => get_option('brickyard_main_headlines_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_main_headlines_color_control', array(
        'label'    => __('Page/Post Title color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_main_headlines_color',
    )));
    
    //  ==========================================
    //  = Page/Post Headlines color              =
    //  ==========================================
    $wp_customize->add_setting('brickyard_headlines_color', array(
        'default'           => get_option('brickyard_headlines_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_headlines_color_control', array(
        'label'    => __('H1 - H6 Headlines color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_headlines_color',
    )));
    
    //  ===============================================
    //  = BrickYard Posts Widgets headlines color  =
    //  ===============================================
    $wp_customize->add_setting('brickyard_homepage_headlines_color', array(
        'default'           => get_option('brickyard_homepage_headlines_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_homepage_headlines_color_control', array(
        'label'    => __('BrickYard Posts Widgets headlines color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_homepage_headlines_color',
    )));
    
    //  ===============================================
    //  = Post Entry Headline color                   =
    //  ===============================================
    $wp_customize->add_setting('brickyard_post_entry_color', array(
        'default'           => get_option('brickyard_post_entry_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_post_entry_color_control', array(
        'label'    => __('Post Entry Headline color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_post_entry_color',
    )));
    
    //  ===============================================
    //  = Post Entry Headline hover color             =
    //  ===============================================
    $wp_customize->add_setting('brickyard_post_entry_hover_color', array(
        'default'           => get_option('brickyard_post_entry_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_post_entry_hover_color_control', array(
        'label'    => __('Post Entry Headline hover color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_post_entry_hover_color',
    )));
    
    //  ===============================================
    //  = Main Content Links color                    =
    //  ===============================================
    $wp_customize->add_setting('brickyard_content_links_color', array(
        'default'           => get_option('brickyard_content_links_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_content_links_color_control', array(
        'label'    => __('Main Content Links color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_content_links_color',
    )));
    
    //  =================================================
    //  = Post Author's Comments background color       =
    //  =================================================
    $wp_customize->add_setting('brickyard_author_comments_background_color', array(
        'default'           => get_option('brickyard_author_comments_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_author_comments_background_color_control', array(
        'label'    => __('Post Author&#8217;s Comments background color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_author_comments_background_color',
    )));
    
    //  =================================================
    //  = Sticky Post background color                  =
    //  =================================================
    $wp_customize->add_setting('brickyard_sticky_post_background_color', array(
        'default'           => get_option('brickyard_sticky_post_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_sticky_post_background_color_control', array(
        'label'    => __('Sticky Post background color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_sticky_post_background_color',
    )));
    
    //  ==================================================
    //  = BrickYard Posts-Thumbnail items hover color =
    //  ==================================================
    $wp_customize->add_setting('brickyard_posts_thumbnail_background_color', array(
        'default'           => get_option('brickyard_posts_thumbnail_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_posts_thumbnail_background_color_control', array(
        'label'    => __('BrickYard Posts-Thumbnail items hover color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_posts_thumbnail_background_color',
    )));
    
    //  =================================================
    //  = Highlighted text background color             =
    //  =================================================
    $wp_customize->add_setting('brickyard_highlight_background_color', array(
        'default'           => get_option('brickyard_highlight_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_highlight_background_color_control', array(
        'label'    => __('Highlighted text background color', 'brickyard'),
        'section'  => 'brickyard_content_color_settings',
        'settings' => 'brickyard_highlight_background_color',
    )));
    
    //  ==========================================
    //  = Sidebar Widget Headlines color         =
    //  ==========================================
    $wp_customize->add_setting('brickyard_sidebar_widget_color', array(
        'default'           => get_option('brickyard_sidebar_widget_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_sidebar_widget_color_control', array(
        'label'    => __('Sidebar Widget Headlines color', 'brickyard'),
        'section'  => 'brickyard_sidebar_color_settings',
        'settings' => 'brickyard_sidebar_widget_color',
    )));
    
    //  ==========================================
    //  = Sidebar Text color                     =
    //  ==========================================
    $wp_customize->add_setting('brickyard_sidebar_text_color', array(
        'default'           => get_option('brickyard_sidebar_text_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_sidebar_text_color_control', array(
        'label'    => __('Sidebar Text color', 'brickyard'),
        'section'  => 'brickyard_sidebar_color_settings',
        'settings' => 'brickyard_sidebar_text_color',
    )));
    
    //  ==========================================
    //  = Sidebar Links color                    =
    //  ==========================================
    $wp_customize->add_setting('brickyard_sidebar_links_color', array(
        'default'           => get_option('brickyard_sidebar_links_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_sidebar_links_color_control', array(
        'label'    => __('Sidebar Links color', 'brickyard'),
        'section'  => 'brickyard_sidebar_color_settings',
        'settings' => 'brickyard_sidebar_links_color',
    )));
    
    //  ==========================================
    //  = Footer background color                =
    //  ==========================================
    $wp_customize->add_setting('brickyard_footer_background_color', array(
        'default'           => get_option('brickyard_footer_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_footer_background_color_control', array(
        'label'    => __('Footer background color', 'brickyard'),
        'section'  => 'brickyard_footer_color_settings',
        'settings' => 'brickyard_footer_background_color',
    )));
    
    //  ==========================================
    //  = Footer Notices background color        =
    //  ==========================================
    $wp_customize->add_setting('brickyard_footer_notices_background_color', array(
        'default'           => get_option('brickyard_footer_notices_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_footer_notices_background_color_control', array(
        'label'    => __('Footer Notices background color', 'brickyard'),
        'section'  => 'brickyard_footer_color_settings',
        'settings' => 'brickyard_footer_notices_background_color',
    )));
    
    //  ==========================================
    //  = Footer Widget Headlines color          =
    //  ==========================================
    $wp_customize->add_setting('brickyard_footer_widget_color', array(
        'default'           => get_option('brickyard_footer_widget_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_footer_widget_color_control', array(
        'label'    => __('Footer Widget Headlines color', 'brickyard'),
        'section'  => 'brickyard_footer_color_settings',
        'settings' => 'brickyard_footer_widget_color',
    )));
    
    //  ==========================================
    //  = Footer Text color                      =
    //  ==========================================
    $wp_customize->add_setting('brickyard_footer_text_color', array(
        'default'           => get_option('brickyard_footer_text_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_footer_text_color_control', array(
        'label'    => __('Footer Text color', 'brickyard'),
        'section'  => 'brickyard_footer_color_settings',
        'settings' => 'brickyard_footer_text_color',
    )));
    
    //  ==========================================
    //  = Footer Notices Text color              =
    //  ==========================================
    $wp_customize->add_setting('brickyard_footer_notices_text_color', array(
        'default'           => get_option('brickyard_footer_notices_text_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_footer_notices_text_color_control', array(
        'label'    => __('Footer Notices Text color', 'brickyard'),
        'section'  => 'brickyard_footer_color_settings',
        'settings' => 'brickyard_footer_notices_text_color',
    )));
    
    //  ==========================================
    //  = Footer Links color                     =
    //  ==========================================
    $wp_customize->add_setting('brickyard_footer_links_color', array(
        'default'           => get_option('brickyard_footer_links_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_footer_links_color_control', array(
        'label'    => __('Footer Links color', 'brickyard'),
        'section'  => 'brickyard_footer_color_settings',
        'settings' => 'brickyard_footer_links_color',
    )));
    
    //  ==========================================
    //  = Footer Notices Links color             =
    //  ==========================================
    $wp_customize->add_setting('brickyard_footer_notices_links_color', array(
        'default'           => get_option('brickyard_footer_notices_links_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_footer_notices_links_color_control', array(
        'label'    => __('Footer Notices Links color', 'brickyard'),
        'section'  => 'brickyard_footer_color_settings',
        'settings' => 'brickyard_footer_notices_links_color',
    )));
    
    //  ==========================================
    //  = Searchform border color                =
    //  ==========================================
    $wp_customize->add_setting('brickyard_searchform_border_color', array(
        'default'           => get_option('brickyard_searchform_border_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_searchform_border_color_control', array(
        'label'    => __('Searchform border color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_searchform_border_color',
    )));
    
    //  ==========================================
    //  = Search Button background color         =
    //  ==========================================
    $wp_customize->add_setting('brickyard_searchform_button_background_color', array(
        'default'           => get_option('brickyard_searchform_button_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_searchform_button_background_color_control', array(
        'label'    => __('Search Button background color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_searchform_button_background_color',
    )));
    
    //  ==========================================
    //  = Search Button hover color              =
    //  ==========================================
    $wp_customize->add_setting('brickyard_searchform_button_hover_color', array(
        'default'           => get_option('brickyard_searchform_button_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_searchform_button_hover_color_control', array(
        'label'    => __('Search Button hover background color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_searchform_button_hover_color',
    )));
    
    //  ==========================================
    //  = Form Fields background color           =
    //  ==========================================
    $wp_customize->add_setting('brickyard_form_fields_background_color', array(
        'default'           => get_option('brickyard_form_fields_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_form_fields_background_color_control', array(
        'label'    => __('Form Fields background color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_form_fields_background_color',
    )));
    
    //  ==========================================
    //  = Form Fields border color               =
    //  ==========================================
    $wp_customize->add_setting('brickyard_form_fields_border_color', array(
        'default'           => get_option('brickyard_form_fields_border_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_form_fields_border_color_control', array(
        'label'    => __('Form Fields border color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_form_fields_border_color',
    )));
    
    //  ==========================================
    //  = Buttons background color               =
    //  ==========================================
    $wp_customize->add_setting('brickyard_form_buttons_background_color', array(
        'default'           => get_option('brickyard_form_buttons_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_form_buttons_background_color_control', array(
        'label'    => __('Buttons background color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_form_buttons_background_color',
    )));
    
    //  ==========================================
    //  = Buttons hover color                    =
    //  ==========================================
    $wp_customize->add_setting('brickyard_form_buttons_hover_color', array(
        'default'           => get_option('brickyard_form_buttons_hover_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_form_buttons_hover_color_control', array(
        'label'    => __('Buttons hover background color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_form_buttons_hover_color',
    )));
    
    //  ==========================================
    //  = Table Headers background color         =
    //  ==========================================
    $wp_customize->add_setting('brickyard_table_headers_background_color', array(
        'default'           => get_option('brickyard_table_headers_background_color', ''),
        'capability'        => 'edit_theme_options',
        'type'              => 'theme_mod',
        'sanitize_callback' => 'brickyard_sanitize_text',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'brickyard_table_headers_background_color_control', array(
        'label'    => __('Table Headers background color', 'brickyard'),
        'section'  => 'brickyard_html_color_settings',
        'settings' => 'brickyard_table_headers_background_color',
    )));
}
 
add_action('customize_register', 'brickyard_customize_register');

/**
 * Sanitize URIs
*/
function brickyard_sanitize_uri($uri) {
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}

/**
 * Sanitize Texts
*/
function brickyard_sanitize_text($str) {
	if('' === $str){
		return '';
	}
	return sanitize_text_field($str);
} ?>