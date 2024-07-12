<?php

if (!defined('ABSPATH')){
    exit;
}

use Elementor\widget_Base;
use Elementor\Controls_Manager;
add_action("elementor/init", function(){
    class Sketchfab_widget extends \Elementor\widget_Base {
        public function get_name() {
           return "sketchfab-widget";
        }
            public function get_title(){
                return __("Sketchfab","my-widgets");
            }
            public function get_icon() {
                return ("eicon-image-rollover");
            }
            public function get_categories() {
                return ["my-widgets"];
            }
            public function get_script_depends() {
                return [""];
            }
            public function get_style_depends() {
                return [""];
            }
            protected function _register_controls(){
               $this->start_controls_section(
                    "section_content", ["label" =>__("Opciones"
                    ,"my-widgets")]
               );
               $this->add_control("url-sketchfab",[
                "label"=>__("URL","my-widgets"),
                "type"=> Controls_Manager::TEXT,
                "default" => "",
               ]);
               $this->end_controls_section();
            }
            protected function render(){
                $settings=$this-> get_settings_for_display();
                $sketchfab_url = $settings["url-sketchfab"];
                ?>
                    <div>
                        <iframe src="<?php echo $sketchfab_url;?>"
                        title: "Sketchfab",
                        width: "600",
                        height: "450",
                        allow: "autoplay; fullscreen; vr"\
                        frameborder="0"></iframe>
                    </div>
                <?php
            }
    }
    function register_sketchfab_widget() {
        \Elementor\Plugin::instance() ->widgets_manager->register(new Sketchfab_widget());
    }
    add_action("elementor/widgets_register" ,"register_sketchfab_widget");
});