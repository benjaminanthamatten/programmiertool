
<?php
    if(isset($_GET['box_einstellungen'])){
?>


<div id="dragBox" onmousedown="dragStart(this);">
    <h3>Bereich <?php echo $_GET['box'] ?> bearbeiten</h3>
    <div id="dragContBox">
    <a href="live_vorschau.php">Zurück zu den Grundeinstellungen</a>  
        
    <form action="cookie_box_edit.php" method="get">
    <?php $box = $_GET['box']; ?>
       
    
    <p>Background:</p>
    <input type="color" name="box_background" value="<?php echo $_COOKIE["box_background_$box"] ?>">
    <p>Höhe:</p>
    <input type="number" name="height" value="<?php echo $_COOKIE["height_$box"] ?>">
    <p>Breite:</p>
    <input type="number" name="width" value="<?php echo $_COOKIE["width_$box"] ?>">
    <p>Abstand oben (innerhalb der Box):</p>
    <input type="number" name="padding_top" value="<?php echo $_COOKIE["padding_top_$box"] ?>">
    <p>Abstand unten (innerhalb der Box):</p>
    <input type="number" name="padding_bottom" value="<?php echo $_COOKIE["padding_bottom_$box"] ?>">
    <p>Abstand links (innerhalb der Box):</p>
    <input type="number" name="padding_left" value="<?php echo $_COOKIE["padding_left_$box"] ?>">
    <p>Abstand rechts (innerhalb der Box):</p>
    <input type="number" name="padding_right" value="<?php echo $_COOKIE["padding_right_$box"] ?>">
    <p>Abstand oben (ausserhalb der Box):</p>
    <input type="number" name="margin_top" value="<?php echo $_COOKIE["margin_top_$box"] ?>">  
    <p>Abstand unten (ausserhalb der Box):</p>
    <input type="number" name="margin_bottom" value="<?php echo $_COOKIE["margin_bottom_$box"] ?>"> 
    <p>Abrundung der Ecken:</p>
    <input type="number" name="border_radius" value="<?php echo $_COOKIE["border_radius_$box"] ?>"> 
    <p>Titel:</p>
    <input type="text" name="titel" value="<?php if(isset($_COOKIE["titel_$box"])){echo $_COOKIE["titel_$box"];} ?>"> 
    <p>Fliesstext:</p>
    <textarea name="fliesstext"><?php if(isset($_COOKIE["fliesstext_$box"])){echo $_COOKIE["fliesstext_$box"];} ?></textarea>
    
    <input type="radio" checked="checked" name="box" value="<?php echo $box ?>">
    <input type="submit" value="speichern">
    </form>
        
    </div>
</div>


<?php
    }else{
?>


  <div id="dragBox" onmousedown="dragStart(this);">
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
                <td>Farbe:</td>
                <td><input type="color" value="<?php echo $_COOKIE['textfarbe'] ?>" name="textfarbe"></td>
            </tr>
        </table>      
        <input type="submit" value="speichern">
    </form>
  </div>        
        

  </div>

<?php } // if verzweigung schliessen ?>

<!-- SCRIPT UM DAS DIV MIT DER MAUS VERSCHIEBEN ZU KÖNNEN -->
    
<style type="text/css">

td {
    color: #888888;
    font-family: 'Roboto';
    font-weight: 300;
    padding: 4px 10px 4px 0px;
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
    width: 100%;
    height: 100px;
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
    
input[type=color] {
    padding: 0;
    background-color: white;
    border: 1px solid white;
    height: 40px;
    width: 40px;
}
    
div#dragBox {
  position: absolute;
  top: 40px;
  left: 20px;
  min-width: 30%;
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