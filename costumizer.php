<?php 
function wpdevs_costumizer($wp_costumizer) {
    $wp_costumizer => add_section (
        'sec_copyright ' ,
        array(
            'title' => 'copyright settings' ,
            'description ' => 'copyright settings '
        
        ));
         $wp_costumize -> add_setting(
            'sec_cpoyright', 
            array(
                'type'=> 'theme_mod',
                'default' => 'copyright x - all rights reserved',
                'sanitize_callback' => 'sanitize_text_field'

            ));

            $wp_costumize -> add_control(
            'sec_cpoyright', 
            array(
                'label'=> 'copyright information',
                'description' => 'pleade, type your copyright here',
                'section' => 'sec_copyright',
                'type' => 'text'

            ));
          
            add_action('custimaze_register','wpdevs_costumizer');
}

?>