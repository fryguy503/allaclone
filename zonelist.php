<?php
$Title="Zone List";
include('./includes/config.php');
include($includes_dir.'constantes.php');
include($includes_dir.'headers.php');
include($includes_dir.'mysql.php');
include($includes_dir.'functions.php');
CreateToolTip("kunark", '<center><img src="images/370230-everquest_ruins_of_kunark.jpg"></center>');
CreateToolTip("velious", '<center><img src="images/everquest_-_the_scars_of_velious_coverart.png"></center>');
CreateToolTip("luclin", '<center><img src="images/EverQuest_-_The_Shadows_of_Luclin_Coverart.png"></center>');
CreateToolTip("pop", '<center><img src="images/250px-EverQuest_The_Planes_of_Power_cover_art.jpg"></center>');
echo '<center>';
echo '<a href=static/antonica.php>Antonica</a><br>                        ';
echo '<a href=static/odus.php>Odus</a><br>                                ';
echo '<a href=static/faydwer.php>Faydwer</a><br>                          ';
echo '<a href=static/planes.php>Old	 World Planes</a><br>                  ';
echo '<a href=static/kunark.php id="kunark">Ruins of Kunark</a><br>                   ';
echo '<a href=static/velious.php id="velious">Scars of Velious</a><br>                 ';
echo '<a href=static/luclin.php id="luclin">Shadows of Luclin</a><br>                 ';
echo '<a href=static/power.php id="pop">The Planes of Power</a><br>                ';
echo '</center>';
include($includes_dir."footers.php");
?>
