<?php

class PokemonEntity {

    public $id;
    public $name;
    public $type_1;
    public $type_2;

    public function display() {

        if ($this->type_2 === null) {
            echo '<div class="po-card ' . $this->type_1 . '">';
            echo '<div class="po-img-box img-box-' . $this->type_1 . '">';
            echo '<div class="po-img" style="background-image: url(\'https://pokeres.bastionbot.org/images/pokemon/' . $this->id . '.png\');"></div>';
            echo '</div>';
            echo '<div class="po-desc-box ' . $this->type_1 . '">';
            echo '<h3 class="po-name">Pokemon: '  . $this->name . '</h3>';
            echo '<p class="po-type">Type 1: ' . $this->type_1 . '<br></p>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="po-card ' . $this->type_1 . '">';
            echo '<div class="po-img-box img-box-' . $this->type_1 . '">';
            echo '<div class="po-img" style="background-image: url(\'https://pokeres.bastionbot.org/images/pokemon/' . $this->id . '.png\');"></div>';
            echo '</div>';
            echo '<div class="po-desc-box ' . $this->type_1 . '">';
            echo '<h3 class="po-name">Pokemon: '  . $this->name . '</h3>';
            echo '<p class="po-type">Type 1: ' . $this->type_1 . '<br></p>';
            echo '<p class="po-type">Type 2: ' . $this->type_2 . '<br></p>';
            echo '</div>';
            echo '</div>';
        }

    }

}
