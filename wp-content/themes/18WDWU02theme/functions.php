<?php

    function addCustomThemeStyles(){
        //Styles
        //-----------------------------------------------------------
        //For the line below:
        //1. Needs a name
        //2. Where is the file that we would like to actually appear?
        //3. Are there any dependancies that are needed here?
        //4. What is the version number
        //5. When do you want this to render? Screen, Print or All.
        wp_enqueue_style("bootstrap" , get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), "4.1.3", "all");

        //Scripts
        //-----------------------------------------------------------
        //To install jquery:
        wp_enqueue_script("jquery");

        //For the line below:
        //1. Needs a name
        //2. Where is the file that we would like to actually appear?
        //3. Are there any dependancies that are needed here?
        //4. What is the version number
        //Is it in the footer? Yes or no?
        wp_enqueue_script("bootstrapjs", "addCustomThemeStyles", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), "4.1.3", true);
    }
    //For the line below:
    //1. What do you want to add?
    //2. Where do you want to add it?
    add_action("wp_enqueue_scripts", "addCustomThemeStyles");

 ?>
