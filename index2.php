<!DOCTYPE html>

<html>

    <head>
        <link href="Struttura.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>




    <?php

    class menuItem {

        public $url;
        public $label;
        public $submenu;

        function __construct($url, $label, $submenu = NULL) {
            $this->url = $url;
            $this->label = $label;
            $this->submenu = $submenu;
        }

        public function __toString() {
            if ($this->submenu != NULL) {
                return sprintf('<a href="%s">%s</a>%s', $this->url, $this->label, $this->submenu);
            } else {
                return sprintf('<a href="%s">%s</a>', $this->url, $this->label);
            }
        }

        public function printf() {
            echo '<a href="' . $this->url . '">' . $this->label . '</a>';
            if ($this->submenu != NULL) {
                echo $this->submenu->printf();
            }
        }

    }

    class menu {

        private $_array;

        public function __construct($n = null) {
            $this->_array = func_get_args();
        }

        function printf() {
            echo '<ul>';
            foreach ($this->_array as $k => $v) {
                echo '<li>';
                echo $v->printf();
                echo '</li>';
            }
            echo "</ul><br/>";
        }

        public function __toString() {
            $s = "";

            foreach ($this->_array as $k => $v) {
                $s .= sprintf("<li>%s</li>", $v);
            }

            return sprintf("<ul>%s</ul><br/>", $s);
        }

    }
    ?>   


    <body>
        <?php
        $c = new menu(
                new menuItem('ajax/', 'Ajax', NULL), new menuItem('css/', 'Css', new menu(
                new menuItem('color/', 'Color'), new menuItem('elem/', 'Elements'), new menuItem('attr/', 'Attributes')
                )
                ), new menuItem('php/', 'PHP', new menu(
                new menuItem('std/', 'Standard Library'), new menuItem('class/', 'Classes')
                )
                )
        );
        ?>

    </body>
    <div id ='header'></div>

        <?php
        echo $c;
        ?>


</html>
