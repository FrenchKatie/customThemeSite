<?php
//section
//settings
//control
//This code wont show up until the whole thing is written out
function custom_theme_customizer($wp_customize){

//ADD SECTION

    //Only incluyde this Add Section part if you are adding a NEW SECTION.
    //needs a unique id and an array
    $wp_customize->add_section('custom_theme_header_info', array(
        //Name of the customise tab youre creating
        //Theme domain - in your style.css under text domain
        'title' => __('Header Styles' , '18wdwu02customtheme'),
        //Orders the customise tabs out
        'priority' => 20
    ));

//ADD SETTINGS
    //needs a unique id and an array
    //over exagerate your names as they cant accidentaly match a pre existing WP one
    $wp_customize->add_setting('header_background_colour_setting', array(
        //the default colour
        'default' => '#ffffff',
        //what happens when it changes in the customiser
        //two values that it could be:
        //There is a dynamic JS version of this where the colour changes where the page doesnt refresh - The value is: post message
        //But we are going to be using refresh which means that the page will be refreshed every time the colour changes
        'transport' => 'refresh'
    ));


//ADD CONTROL
    $wp_customize->add_control(
        //going to create a new instance - if you dont write new then it will takee the last one created
        new WP_Customize_Color_Control(
            $wp_customize,
            //need a unique name to identify it
            //The way richard reccomends to name these are name the setting and control the same thing but change the end of it to setting or control depending on what it is
            'header_background_colour_control',

            array(
                //label - what do you want it to say above it?
                'label' => __('Header Background Colour' , '18wdwu02customtheme'),
                //where is this going to go? give it the name of the section
                //if you want to give it to a pre existing section you will need to inspect the webpage and find the name of it
                'section' => 'custom_theme_header_info',
                //name of the setting which we specified before
                'settings' => 'header_background_colour_setting'
            )
        )
    );







    $wp_customize->add_section('custom_theme_footer', array(
        'title' => __('Footer Styles' , '18wdwu02customtheme'),
        'priority' => 21
    ));


    $wp_customize->add_setting('footer_text_setting', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'footer_text_control',
            array(
                'label' => __('Footer Text' , '18wdwu02customtheme'),
                'section' => 'custom_theme_footer',
                'settings' => 'footer_text_setting'
            )
        )
    );






}
add_action('customize_register' , 'custom_theme_customizer');


function custom_theme_customizer_styles(){
    //tell your file that we are no longer writing in PHP as we now want to write in CSS
    //do this by writng a php tag but put the tags backwards - it will think everything inside it is HTML
    ?>
    <style type="text/css">
        .header-bg{
                /* for the value of background-colour, open up php tags to enter in the new HEX value */
                /* Echo out two things: */
                /* setting value */
                /* give it a default value - try to match it to the default setting you set in the function above */
                /* always try to put an important at the end of the line */
                background-color: <?php echo get_theme_mod('header_background_colour_setting' , '#ffffff') ?> !important;
        }
    </style>

    <?php
}
add_action('wp_head', 'custom_theme_customizer_styles'); //adds it right to the top
