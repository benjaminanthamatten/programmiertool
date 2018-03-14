<?php

    $bereich = "SELECT * FROM bereiche WHERE box = 'box-1'";
            foreach ($pdo->query($bereich) as $row) {
               $box_1_width = $row['width'];
               $box_1_height = $row['height'];
               $box_1_background = $row['background'];
               $box_1_anzeigen = $row['anzeigen'];
               $box_1_title = $row['title'];
               $box_1_text = $row['text'];
               $box_1_margin_top = $row['margin-top'];
               $box_1_margin_bottom = $row['margin-bottom'];
               $box_1_margin_left = $row['margin-left'];
               $box_1_margin_right = $row['margin-right'];
               $box_1_padding_top = $row['padding-top'];
               $box_1_padding_bottom = $row['padding-bottom'];
               $box_1_padding_left = $row['padding-left'];
               $box_1_padding_right = $row['padding-right'];
    }

    $bereich = "SELECT * FROM bereiche WHERE box = 'box-2'";
            foreach ($pdo->query($bereich) as $row) {
               $box_2_width = $row['width'];
               $box_2_height = $row['height'];
               $box_2_background = $row['background'];
               $box_2_anzeigen = $row['anzeigen'];
               $box_2_title = $row['title'];
               $box_2_text = $row['text'];
               $box_2_margin_top = $row['margin-top'];
               $box_2_margin_bottom = $row['margin-bottom'];
               $box_2_margin_left = $row['margin-left'];
               $box_2_margin_right = $row['margin-right'];
               $box_2_padding_top = $row['padding-top'];
               $box_2_padding_bottom = $row['padding-bottom'];
               $box_2_padding_left = $row['padding-left'];
               $box_2_padding_right = $row['padding-right'];
    }

    $bereich = "SELECT * FROM bereiche WHERE box = 'box-3'";
            foreach ($pdo->query($bereich) as $row) {
               $box_3_width = $row['width'];
               $box_3_height = $row['height'];
               $box_3_background = $row['background'];
               $box_3_anzeigen = $row['anzeigen'];
               $box_3_title = $row['title'];
               $box_3_text = $row['text'];
               $box_3_margin_top = $row['margin-top'];
               $box_3_margin_bottom = $row['margin-bottom'];
               $box_3_margin_left = $row['margin-left'];
               $box_3_margin_right = $row['margin-right'];
               $box_3_padding_top = $row['padding-top'];
               $box_3_padding_bottom = $row['padding-bottom'];
               $box_3_padding_left = $row['padding-left'];
               $box_3_padding_right = $row['padding-right'];
    }
?>
