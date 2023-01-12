<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

    <?php

        $names = array('Dakillzor', 'Skill', 'AEG');

        $count = 0;

        while($count < count($names)) {
            echo "<li>Hi, my name is $names[$count]</li>";
            $count++;
        }

    ?>