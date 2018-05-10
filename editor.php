<?php
    if($_COOKIE['edit_anzeigen'] == "nein"){
 ?>
    <a href="cookie_edit_schliessen.php?edit_anzeigen=ja"><div id="dragBox" onmousedown="dragStart(this);">
        <img class="oeffnen" width="20px" src="oeffnen.png" />
    </div></a>
<?php
    }else{


    if(isset($_GET['box_einstellungen'])){
?>


<div id="dragBox" onmousedown="dragStart(this);">
    <div id="dragContBox">
    <a href="cookie_edit_schliessen.php?edit_anzeigen=nein"><img class="schliessen" width="20px" src="schliessen.png" /></a>
    <form action="cookie_box_edit.php" method="get">
    <?php $box = $_GET['box']; ?>

        <h3>Bereichseinstellungen [Bereich: <?php echo $box = $_GET['box']; ?>]</h3>

        <table>
            <tr>
                <th>Grösse</th>
                <th></th>
                <th>Ecken (Abrundung)</th>
                <th></th>
                <th>Hintergrund</th>
                <th></th>
            </tr>
            <tr>
                <td>Höhe:</td>
                <td><input type="number" name="height" value="<?php echo $_COOKIE["height_$box"] ?>"></td>
                <td>Abrundung:</td>
                <td><input type="number" name="border_radius" value="<?php echo $_COOKIE["border_radius_$box"] ?>"> </td>
                <td>Farbe:</td>
                <td><input type="color" name="box_background" value="<?php echo $_COOKIE["box_background_$box"] ?>"></td>
            </tr>
            <tr>
                <td>Breite (%):</td>
                <td><input type="number" name="width" value="<?php echo $_COOKIE["width_$box"] ?>"></td>
                <td></td>
                <td></td>
                <td>Bild-Link:</td>
                <?php if(isset($_COOKIE["bild_background_$box"])){ ?>
                <td><input type="text" name="bild_background" value="<?php echo $_COOKIE["bild_background_$box"] ?>"></td>
                <?php }else{ ?>
                <td><input type="text" name="bild_background" value=""></td>
                <?php } ?>
            </tr>
        </table>

        <h3>Abstände</h3>
        <table>
            <tr>
                <th>Innen-Abstand</th>
                <th></th>
                <th>Aussen-Abstand</th>
                <th></th>
            </tr>
            <tr>
                <td>Oben:</td>
                <td><input type="number" name="padding_top" value="<?php echo $_COOKIE["padding_top_$box"] ?>"></td>
                <td>Oben:</td>
                <td><input type="number" name="margin_top" value="<?php echo $_COOKIE["margin_top_$box"] ?>"></td>
            </tr>
            <tr>
                <td>Unten:</td>
                <td><input type="number" name="padding_bottom" value="<?php echo $_COOKIE["padding_bottom_$box"] ?>"></td>
                <td>Unten:</td>
                <td><input type="number" name="margin_bottom" value="<?php echo $_COOKIE["margin_bottom_$box"] ?>"></td>
            </tr>
            <tr>
                <td>Breite (%):</td>
                <td><input type="number" name="width_inhalt" value="<?php echo $_COOKIE["width_inhalt_$box"] ?>"></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <h3>Bereich-Inhalt:</h3>
        <table>
            <tr>
              <th>Seite einbinden</th>
              <th></th>
              <th>iFrame</th> 
              <th></th>
              <th>Medien</th>
              <th></th>
            </tr>
            <tr>
              <td>Link:</td>
              <td><input type="text" name="einbinden_link" value="<?php if(isset($_COOKIE["einbinden_link_$box"])){echo $_COOKIE["einbinden_link_$box"];} ?>"></td>
              <td>iFrame-Link</td>
              <td><input type="text" name="iframe" value="<?php if(isset($_COOKIE["iframe_$box"])){echo $_COOKIE["iframe_$box"];} ?>"></td>
              <td>Bild-Link</td>
              <td><input type="text" name="bild_box" value="<?php if(isset($_COOKIE["bild_box_$box"])){echo $_COOKIE["bild_box_$box"];} ?>"></td>
            </tr>
            <tr>
              <td>Höhe (px)</td>
              <td><input type="number" name="einbinden_hoehe" value="<?php if(isset($_COOKIE["einbinden_hoehe_$box"])){echo $_COOKIE["einbinden_hoehe_$box"];} ?>"></td>
              <td></td>
              <td></td>
              <td>Bild-Breite</td>
              <td><input type="text" name="bild_breite" value="<?php if(isset($_COOKIE["bild_breite_$box"])){echo $_COOKIE["bild_breite_$box"];} ?>"></td>
            </tr>
            <tr>
              <td>Breite (%)</td>
              <td><input type="number" name="einbinden_breite" value="<?php if(isset($_COOKIE["einbinden_breite_$box"])){echo $_COOKIE["einbinden_breite_$box"];} ?>"></td>
              <td></td>
              <td></td>
            </tr>
        </table>

        <br><br>

        <table>
          <tr>
            <td>Titel:</td>
            <td><input type="text" name="titel" value="<?php if(isset($_COOKIE["titel_$box"])){echo $_COOKIE["titel_$box"];} ?>"></td>
            <td>Text:</td>
            <td><textarea name="fliesstext"><?php if(isset($_COOKIE["fliesstext_$box"])){echo $_COOKIE["fliesstext_$box"];} ?></textarea></td>
          </tr>
        </table>


    <input class="versteckt" type="radio" checked="checked" name="box" value="<?php echo $box ?>">
    <input type="submit" value="zurück / speichern">
    </form>

    </div>
</div>


<?php
    }else{
?>


  <div id="dragBox" onmousedown="dragStart(this);">
    <a href="cookie_edit_schliessen.php?edit_anzeigen=nein"><img class="schliessen" width="20px" src="schliessen.png" /></a>
    <h3>Grundeinstellungen</h3>
    <div id="dragContBox">
    <form action="cookie_basis.php" method="get">

        <table>
            <tr>
                <th>Ersten Schritte</th>
                <th></th>
                <th>Titel (h1)</th>
                <th></th>
                <th>Fliesstext (p)</th>
                <th></th>
            </tr>
            <tr>
                <td>Hintergrundfarbe</td>
                <td><input type="color" name="background" value="<?php echo $_COOKIE["background"] ?>"></td>
                <td>Schriftart:</td>
                <td><select name='titel_schriftart'>
                        <option value="<?php echo $_COOKIE['titel_schriftart'] ?>">wählen</option>
                        <option>Roboto</option>
                        <option>Roboto Slab</option>
                        <option>Open Sans</option>
                        <option>Oswald</option>
                        <option>Ubuntu</option>
                        <option>Dosis</option>
                        <option>Dancing Script</option>
                    </select>
                </td>
                <td>Schriftart:</td>
                <td><select name='text_schriftart'>
                        <option value="<?php echo $_COOKIE['text_schriftart'] ?>">wählen</option>
                        <option>Roboto</option>
                        <option>Roboto Slab</option>
                        <option>Open Sans</option>
                        <option>Oswald</option>
                        <option>Ubuntu</option>
                        <option>Dosis</option>
                        <option>Dancing Script</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Titel (Taskleiste)</td>
                <td>(folgt)</td>
                <td>Schriftstärke:</td>
                <td><select name='titel_schriftstaerke'>
                        <option value="<?php echo $_COOKIE['titel_schriftstaerke'] ?>">wählen</option>
                        <option value="300">Light</option>
                        <option value="400">Regular</option>
                        <option value="500">Semi-Bold</option>
                        <option value="700">Bold</option>
                    </select>
                </td>
                <td>Schriftstärke:</td>
                <td><select name='text_schriftstaerke'>
                        <option value="<?php echo $_COOKIE['text_schriftstaerke'] ?>">wählen</option>
                        <option value="300">Light</option>
                        <option value="400">Regular</option>
                        <option value="500">Semi-Bold</option>
                        <option value="700">Bold</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Anzahl Bereiche</td>
                <td><input type="number" name="anzahl" value="<?php echo $_COOKIE["anzahl"] ?>"></td>
                <td>Schriftgrösse:</td>
                <td><select name='titel_schriftgroesse'>
                        <option value="<?php echo $_COOKIE['titel_schriftgroesse'] ?>">wählen</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>14</option>
                        <option>16</option>
                        <option>18</option>
                        <option>20</option>
                        <option>22</option>
                        <option>24</option>
                        <option>26</option>
                        <option>28</option>
                        <option>36</option>
                        <option>48</option>
                        <option>72</option>
                    </select>
                </td>
                <td>Schriftgrösse:</td>
                <td><select name='text_schriftgroesse'>
                        <option value="<?php echo $_COOKIE['text_schriftgroesse'] ?>">wählen</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>14</option>
                        <option>16</option>
                        <option>18</option>
                        <option>20</option>
                        <option>22</option>
                        <option>24</option>
                        <option>26</option>
                        <option>28</option>
                        <option>36</option>
                        <option>48</option>
                        <option>72</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Farbe:</td>
                <td><input type="color" value="<?php echo $_COOKIE['titelfarbe'] ?>" name="titelfarbe"></td>
                <td>Bild:</td>
                <td><input type="color" value="<?php echo $_COOKIE['textfarbe'] ?>" name="textfarbe"></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <th>Navigation</th>
                <th></th>
            </tr>
            <tr>
                <td>Hintergrundfarbe</td>
                <td><input type="color" value="<?php echo $_COOKIE['navifarbe'] ?>" name="navifarbe"></td>
            </tr>
            <tr>
                <td>Schriftfarbe</td>
                <td><input type="color" value="<?php echo $_COOKIE['navischrift'] ?>" name="navischrift"></td>
            </tr>
            <tr>
                <td>Mouse-Hover Hintergrund</td>
                <td><input type="color" value="<?php echo $_COOKIE['hoverfarbe'] ?>" name="hoverfarbe"></td>
            </tr>
            <tr>
                <td>Mouse-Hover Schriftfarbe</td>
                <td><input type="color" value="<?php echo $_COOKIE['hoverschrift'] ?>" name="hoverschrift"></td>
            </tr>
            <tr>
                <td>Breite (%)</td>
                <td><input type="number" value="<?php echo $_COOKIE['navibreite'] ?>" name="navibreite"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        <input type="submit" value="speichern">
    </form>
  <br>
  <a class="speichern" href="vorschau_download.php?download_anleitung=ja">Webseite speichern</a>
  </div>


  </div>

<?php }} // if verzweigung schliessen ?>

<!-- SCRIPT UM DAS DIV MIT DER MAUS VERSCHIEBEN ZU KÖNNEN -->

<style type="text/css">

.versteckt {
    display: none;
}
    
.speichern {
    background-color: darkseagreen;
    color: white;
    padding: 10px;
    font-family: sans-serif;
    text-decoration: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
    
img.schliessen {
    float: right;
    margin: -5px -5px 0 0;
}
    
img.schliessen:hover {
    -webkit-filter: grayscale(2);
    filter: grayscale(2);
}

td {
    color: #888888;
    font-family: 'Roboto';
    font-weight: 300;
    padding: 4px 10px 4px 0px;
    vertical-align: top;
}

th {
    color: #FF9677;
    font-family: 'Roboto';
    font-weight: 700;
    text-align: left;
}

textarea {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #cccccc;
    color: #FF9677;
    width: 400px;
    height: 90px;
}

input, select {
    background-color: #ffffff;
    padding: 3px 7px 3px 7px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #cccccc;
    width: 100px;
    color: #FF9677;
}



input[type=submit] {
    background-color: #FF9677;
    border: 1px solid #FF9677;
    color: white;
    padding: 10px;
    width: 100%;
    margin-top: 30px;
}

input[type=number] {
    width: 40px;
    margin-right: 30px;
}

input[type=color] {
    padding: 0;
    background-color: white;
    border: 1px solid white;
    height: 40px;
    width: 40px;
}

div#dragBox {
z-index:1000000;
  position: absolute;
  top: 60px;
  left: 20px;
  min-width: 0.5%;
  background-color: #ffffff;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: -1px 2px 21px -3px rgba(0,0,0,0.56);
    -moz-box-shadow: -1px 2px 21px -3px rgba(0,0,0,0.56);
    box-shadow: -1px 2px 21px -3px rgba(0,0,0,0.56);
    border: 0px solid #FF9677;
    padding: 20px;
  cursor: move;
}

div#dragBox h3 {
  margin: 20px 0 20px 0;
  height: 25px;
  padding: 0;
  color: #FF9677;
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  font-family: 'Roboto';
  font-weight: 400;
  line-height: 25px;
}
div#dragContBox {
  margin: 2px;
  background-color: #ffffff;
  padding: 5px;
  font-size: 12px;
  cursor: default;
}
</style>


<script language="javascript" type="text/javascript">
  var dragEle = null;
  var eleX = 0;
  var eleY = 0;
  var mouseX = 0;
  var mouseY = 0;
  document.onmousemove = move;
  document.onmouseup   = dragStop;
  function dragStart(element)
  {
    dragEle = element;
    eleX = mouseX - dragEle.offsetLeft;
    eleY = mouseY - dragEle.offsetTop;
  }
  function dragStop()
  {
    dragEle=null;
  }
  function move(dragEvent)
  {
    mouseX = document.all ? window.event.clientX : dragEvent.pageX;
    mouseY = document.all ? window.event.clientY : dragEvent.pageY;
    if(dragEle != null)
    {
      dragEle.style.left = (mouseX - eleX) + "px";
      dragEle.style.top = (mouseY - eleY) + "px";
    }
  }
</script>
