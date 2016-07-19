<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Star Citizen Image Sorter</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <style media="screen">
            div#imageView{
                /*height: 600px;*/
                display: block;
                text-align: center;
            }

            div#imageView.png:hover{
                background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozMjkwM0E3QzQxQTExMUU1QjExNEEwRjEyOTkwREI0NyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozMjkwM0E3RDQxQTExMUU1QjExNEEwRjEyOTkwREI0NyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjMyOTAzQTdBNDFBMTExRTVCMTE0QTBGMTI5OTBEQjQ3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjMyOTAzQTdCNDFBMTExRTVCMTE0QTBGMTI5OTBEQjQ3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/HZ1qQAAAFJJREFUeNqsUsEJAEAIymij9t+gVqpbIB/C+UwU1LC7dqGqznswAYBbwAhmFEbAjNxE/MswM38yRHefRGZqGWhod9d2UFvSd5Bfg/UtD8fwBBgAsnkjnuGcZ0oAAAAASUVORK5CYII=');
            }

            div#imageView img{
                max-width: 100%;
                margin: 0 auto;
                display: block;
                max-height: 500px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <?php $images = glob('images/*.{jpg,gif,png}',GLOB_BRACE ); ?>
        <div class="container-fluid" style="margin-bottom: 50px;">
        	<div class="row">
        		<div class="col-md-12" id="imageView">

        		</div>
        	</div>
            <div class="row" style="margin-top: 20px;">
        		<div class="col-md-3" id="notification"></div>
        		<div class="col-md-12">
                    <form class="sorter" action="" method="post">
                        <div class="tabbable" id="tabs-629726">
            				<ul class="nav nav-tabs">
            					<li class="active">
            						<a href="#panel-1" data-toggle="tab">Basis</a>
            					</li>
            					<li>
            						<a href="#panel-2" data-toggle="tab">Schiffsklassen</a>
            					</li>
            					<li>
            						<a href="#panel-3" data-toggle="tab">Einzelschiffe</a>
            					</li>
            					<li>
            						<a href="#panel-4" data-toggle="tab">Fanart</a>
            					</li>
            				</ul>
            				<div class="tab-content">
            					<div class="tab-pane active" id="panel-1">
                                    <div class="row" style="margin-top: 20px;">
                                		<div class="col-md-2">
                                			<button type="submit" name="dir" value="ships" class="btn btn-default btn-block">Schiff</button>
                                		</div>
                                		<div class="col-md-2">
                                            <button type="submit" name="dir" value="planets" class="btn btn-default btn-block">Planet</button>
                                		</div>
                                		<div class="col-md-2">
                                            <button type="submit" name="dir" value="stations" class="btn btn-default btn-block">Station</button>
                                		</div>
                                		<div class="col-md-2">
                                            <button type="submit" name="dir" value="races" class="btn btn-default btn-block">Rasse</button>
                                		</div>
                                		<div class="col-md-2">
                                            <button type="submit" name="dir" value="logos" class="btn btn-default btn-block">Logo</button>
                                		</div>
                                		<div class="col-md-2">
                                            <button type="submit" name="dir" value="hangar" class="btn btn-default btn-block">Hangar</button>
                                		</div>
                                	</div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="fanart" class="btn btn-default btn-block">Fanart</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="lamp" class="btn btn-default btn-block">Lamp</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="character" class="btn btn-default btn-block">Character</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="artwork" class="btn btn-default btn-block">Artwork</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="rl" class="btn btn-default btn-block">RL</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="spectrum_dispatch" class="btn btn-default btn-block">Spectrum Disp.</button>
                                		</div>
                                	</div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="giftcards" class="btn btn-default btn-block">Giftcards</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="citizencards" class="btn btn-default btn-block">Citizen Card</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="diagrams" class="btn btn-default btn-block">Diagramme</button>
                                		</div>
                                        <div class="col-md-2">
                                            <button type="submit" name="dir" value="fps" class="btn btn-default btn-block">FPS</button>
                                		</div>
                                	</div>
            					</div>
            					<div class="tab-pane" id="panel-2">
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Mustang Alpha" class="btn btn-default btn-block">Mustang Alpha</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Mustang Beta" class="btn btn-default btn-block">Mustang Beta</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Mustang Gamma" class="btn btn-default btn-block">Mustang Gamma</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Mustang Delta" class="btn btn-default btn-block">Mustang Delta</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Mustang Omega" class="btn btn-default btn-block">Mustang Omega</button></div>
                                	</div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Aurora ES" class="btn btn-default btn-block">Aurora ES</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Aurora LX" class="btn btn-default btn-block">Aurora LX</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Aurora MR" class="btn btn-default btn-block">Aurora MR</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Aurora CL" class="btn btn-default btn-block">Aurora CL</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Aurora LN" class="btn btn-default btn-block">Aurora LN</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/300i" class="btn btn-default btn-block">300i</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/315p" class="btn btn-default btn-block">315p</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/325a" class="btn btn-default btn-block">325a</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/350r" class="btn btn-default btn-block">350r</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/F7C Hornet" class="btn btn-default btn-block">F7C</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/F7C-S Hornet Ghost" class="btn btn-default btn-block">F7C-S Ghost</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/F7C-R Hornet Tracker" class="btn btn-default btn-block">F7C-R Tracker</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/F7C-M Super Hornet" class="btn btn-default btn-block">F7C-M Super</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/F7A Hornet" class="btn btn-default btn-block">F7A</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Constellation Andromeda" class="btn btn-default btn-block">Const. Andromeda</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Constellation Taurus" class="btn btn-default btn-block">Const. Taurus</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Constellation Aquila" class="btn btn-default btn-block">Const. Aquila</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Constellation Phoenix" class="btn btn-default btn-block">Const. Phoenix</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Freelancer" class="btn btn-default btn-block">Freelancer</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Freelancer DUR" class="btn btn-default btn-block">Freelancer DUR</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Freelancer MAX" class="btn btn-default btn-block">Freelancer MAX</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Freelancer MIS" class="btn btn-default btn-block">Freelancer MIS</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Cutlass Black" class="btn btn-default btn-block">Cutlass Black</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Cutlass Red" class="btn btn-default btn-block">Cutlass Red</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Cutlass Blue" class="btn btn-default btn-block">Cutlass Blue</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Hull A" class="btn btn-default btn-block">Hull A</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Hull B" class="btn btn-default btn-block">Hull B</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Hull C" class="btn btn-default btn-block">Hull C</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Hull D" class="btn btn-default btn-block">Hull D</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Hull E" class="btn btn-default btn-block">Hull E</button></div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="panel-3">
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/890 JUMP" class="btn btn-default btn-block">890 JUMP</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Avenger" class="btn btn-default btn-block">Avenger</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Carrack" class="btn btn-default btn-block">Carrack</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Caterpillar" class="btn btn-default btn-block">Caterpillar</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Gladiator" class="btn btn-default btn-block">Gladiator</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Gladius" class="btn btn-default btn-block">Gladius</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Genesis" class="btn btn-default btn-block">Genesis</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Herald" class="btn btn-default btn-block">Herald</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Idris-M" class="btn btn-default btn-block">Idris-M</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Idris-P" class="btn btn-default btn-block">Idris-P</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Javelin-class Destroyer" class="btn btn-default btn-block">Javelin</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Khartu-Al" class="btn btn-default btn-block">Khartu-Al</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/M50 Interceptor" class="btn btn-default btn-block">M50 Interceptor</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Merchantman" class="btn btn-default btn-block">Merchantman</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Orion" class="btn btn-default btn-block">Orion</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/P-52 Merlin" class="btn btn-default btn-block">P-52 Merlin</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Reclaimer" class="btn btn-default btn-block">Reclaimer</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Redeemer" class="btn btn-default btn-block">Redeemer</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Retaliator" class="btn btn-default btn-block">Retaliator</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Reliant" class="btn btn-default btn-block">Reliant</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Starfarer" class="btn btn-default btn-block">Starfarer</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Vanguard" class="btn btn-default btn-block">Vanguard</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/Vanduul Scythe" class="btn btn-default btn-block">Vanduul Scythe</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/85x" class="btn btn-default btn-block">85X</button></div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/glaive" class="btn btn-default btn-block">Glaive</button></div>
                                        <div class="col-md-2"><button type="submit" name="dir" value="ships/ship_weapon" class="btn btn-default btn-block">Schiffswaffe</button></div>
                                    </div>
            					</div>
                                <div class="tab-pane" id="panel-4">
                                    <div class="row" style="margin-top: 20px;">
                                		<div class="col-md-2">
                                			<button type="submit" name="dir" value="fanart/ships" class="btn btn-default btn-block">Schiffe</button>
                                		</div>
                                		<div class="col-md-2">
                                			<button type="submit" name="dir" value="fanart/other" class="btn btn-default btn-block">Sonstige</button>
                                		</div>
                                	</div>
            					</div>
            				</div>
            			</div>
                        <hr>
                    	<div class="row" style="margin-top: 20px;">
                            <div class="col-md-2">
                                <button type="submit" name="dir" value="no_cat" class="btn btn-warning btn-block">keine Kategorie</button>
                    		</div>
                            <div class="col-md-2">
                                <button type="submit" name="dir" value="delete" class="btn btn-danger btn-block">Löschen</button>
                    		</div>
                            <div class="col-md-2">
                    		</div>
                            <div class="col-md-2">
                                <button type="submit" name="dir" value="9" class="btn btn-default btn-block">Überspringen</button>
                    		</div>
                        </div>


                    </form>
        		</div>
        	</div>
        </div>
        <script type="text/javascript">
            <?php
                echo 'images=' . json_encode(str_replace('images/', '',$images));
            ?>
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="lib/js/image.js?v022"></script><!--<?php echo '?'.rand(0,10000); ?>-->
    </body>
</html>
