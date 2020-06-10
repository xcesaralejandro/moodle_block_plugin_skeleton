<?php
class block_sence_integration extends block_base {
    
    public function init() {
        $this->title = get_string('pluginname', 'block_sence_integration');
    }

    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }
        $this->content         =  new stdClass;
        $this->content->text   = 'Contenido de nuestro bloque de SENCE!';
        $this->content->footer = 'El footer acá :D';
        return $this->content;
    }
}