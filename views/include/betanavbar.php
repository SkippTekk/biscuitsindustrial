<script type="text/javascript">

function updateClock ( )
{
 var currentTime = new Date ( );

 var currentHours = currentTime.getUTCHours ( );
 var currentMinutes = currentTime.getUTCMinutes ( );
 var currentSeconds = currentTime.getUTCSeconds ( );

 currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
 currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

 var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

 currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

 currentHours = ( currentHours == 0 ) ? 12 : currentHours;

 var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

 document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}
</script>
<nav class="navbar navbar-inverse navbar-expand-lg navbar-slide-nav">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./index.php">Ship Manufacturing</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Amarr</span> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Frigate</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Crucifier">Crucifier</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Magnate">Magnate</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Executioner">Executioner</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Inquisitor">Inquisitor</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Tormentor">Tormentor</a></li>
                                  <li><a href="#" a-ship-name="Amarr/Frigate/Punisher">Punisher</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Navy Frigate</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Navy Frigate/Crucifier Navy Issue">Crucifier Navy Issue</a></li>
                                <li><a href="#" a-ship-name="Amarr/Navy Frigate/Imperial Navy Slicer">Imperial Navy Slicer</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Interceptor</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Interceptor/Crusader">Crusader</a></li>
                          			<li><a href="#" a-ship-name="Amarr/Interceptor/Malediction">Malediction</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Assault Frigate</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Assault Frigate/Retribution">Retribution</a></li>
                          			<li><a href="#" a-ship-name="Amarr/Assault Frigate/Vengeance">Vengeance</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Covert Ops</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Covert Ops/Anathema">Anathema</a></li>
                          			<li><a href="#" a-ship-name="Amarr/Covert Ops/Purifier">Purifier</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Electronic Attack Ship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Electronic Attack Ship/Sentinel">Sentinel</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Logistic Frigates</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Logistic Frigates/Deacon">Deacon</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Destroyer/Coercer">Coercer</a></li>
                                <li><a href="#" a-ship-name="Amarr/Destroyer/Dragoon">Dragoon</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Interdictor</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Amarr/Interdictor/Heretic">Heretic</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Command Destroyers</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Amarr/Command Destroyers/Pontifex">Pontifex</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Tactical Destroyer</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Amarr/Tactical Destroyer/Confessor">Confessor</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Cruiser/Maller">Maller</a></li>
                                <li><a href="#" a-ship-name="Amarr/Cruiser/Omen">Omen</a></li>
                                <li><a href="#" a-ship-name="Amarr/Cruiser/Augoror">Augoror</a></li>
                                <li><a href="#" a-ship-name="Amarr/Cruiser/Arbitrator">Arbitrator</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Navy Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Navy Cruiser/Scythe Fleet Issue">Scythe Fleet Issue</a></li>
                          			<li><a href="#" a-ship-name="Amarr/Navy Cruiser/Stabber Fleet Issue">Stabber Fleet Issue</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Recon Ship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Recon Ship/Curse">Curse</a></li>
                          			<li><a href="#" a-ship-name="Amarr/Recon Ship/Pilgrim">Pilgrim</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Heavy Assault Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Heavy Assault Cruiser/Zealot">Zealot</a></li>
                          			<li><a href="#" a-ship-name="Amarr/Heavy Assault Cruiser/Sacrilege">Sacrilege</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Logistics Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Logistics Cruiser/Guardian">Guardian</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Strategic Cruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Strategic Cruiser/Legion">Legion</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Battlecruiser/Prohecy">Prohecy</a></li>
                                <li><a href="#" a-ship-name="Amarr/Battlecruiser/Harbinger">Harbinger</a></li>
                                <li><a href="#" a-ship-name="Amarr/Battlecruiser/Oracle">Oracle</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Navy Battleship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                	<li><a href="#" a-ship-name="Amarr/Navy Battleship/Harbringer Navy Issue">Harbringer Navy Issue</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Command Ships</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Command Ships/Absolution">Absolution</a></li>
                                <li><a href="#" a-ship-name="Amarr/Command Ships/Damnation">Damnation</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Battleship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Battleship/Apocalypse">Apocalypse</a></li>
                                <li><a href="#" a-ship-name="Amarr/Battleship/Armageddon">Armageddon</a></li>
                                <li><a href="#" a-ship-name="Amarr/Battleship/Abaddon">Abaddon</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Navy Battleship</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Navy Battleship/Armageddon Navy Issue">Armageddon Navy Issue</a></li>
                          			<li><a href="#" a-ship-name="Amarr/Navy Battleship/Apocalypse Navy Issue">Apocalypse Navy Issue</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Black Ops</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Black Ops/Redeemer">Redeemer</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Marauder</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Marauder/Paladin">Paladin</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
                  <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Dreadnought</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Amarr/Dreadnought/Revelation">Revelation</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Carrier</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Carrier/Apostle">Apostle</a></li>
                                <li><a href="#" a-ship-name="Amarr/Carrier/Aeon">Aeon</a></li>
                                <li><a href="#" a-ship-name="Amarr/Carrier/Archon">Archon</a></li>
                              </ul>
                          </li><!--  -->
                          <li class="dropdown-submenu">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Titan</span><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#" a-ship-name="Amarr/Titan/Avatar">Avatar</a></li>
                              </ul>
                          </li><!--  -->
                      </ul>
                  </li><!--  -->
              </ul>
          </li>
          <!-- Copy here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Caldari State</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Frigate/Bantam">Bantam</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Frigate/Condor">Condor</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Frigate/Griffin">Griffin</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Frigate/Kestrel">Kestrel</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Frigate/Merlin">Merlin</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Frigate/Heron">Heron</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Navy Frigate/Griffin Navy Issue">Griffin Navy Issue</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Navy Frigate/Caldari Navy Hookbill">Caldari Navy Hookbill</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Interceptor</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Interceptor/Crow">Crow</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Interceptor/Raptor">Raptor</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Assault Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Assault Frigate/Hawk">Hawk</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Assault Frigate/Harpy">Harpy</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Covert Ops</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Covert Ops/Buzzard">Buzzard</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Covert Ops/Manticore">Manticore</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Electronic Attack Ship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Electronic Attack Ship/Kistune">Kistune</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Logistic Frigates</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Logistic Frigates/Kirin">Kirin</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Destroyer/Cormorant">Cormorant</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Destroyer/Corax">Corax</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Interdictor</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Interdictor/Flycatcher">Flycatcher</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Command Destroyers</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Command Destroyers/Stork">Stork</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Tactical Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Tactical Destroyer/Jackdaw">Jackdaw</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Cruiser/Osprey">Osprey</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Cruiser/Caracal">Caracal</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Cruiser/Moa">Moa</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Cruiser/Blackbird">Blackbird</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Navy Cruiser/Osprey Navy Issue">Osprey Navy Issue</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Navy Cruiser/Caracal Navy Issue">Caracal Navy Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Recon Ship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Recon Ship/Rook">Rook</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Recon Ship/Falcon">Falcon</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Heavy Assault Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Heavy Assault Cruiser/Eagle">Eagle</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Heavy Assault Cruiser/Cerberus">Cerberus</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Heavy Interdiction Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Heavy Interdiction Cruiser/Onyx">Onyx</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Logistics Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Logistics Cruiser/Basilisk">Basilisk</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Strategic Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Strategic Cruiser/Tengu">Tengu</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Battlecruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Battlecruiser/Ferox">Ferox</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Battlecruiser/Drage">Drage</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Battlecruiser/Naga">Naga</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Navy Battleship/Brutix Navy Issue">Brutix Navy Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Command Ships</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Command Ships/Nighthawk">Nighthawk</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Command Ships/Vulture">Vulture</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Battleship/Scorpian">Scorpian</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Battleship/Rokh">Rokh</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Battleship/Raven">Raven</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Navy Battleship/Scorpion Navy Issue">Scorpion Navy Issue</a></li>
                            			<li><a href="#" a-ship-name="Caldari State/Navy Battleship/Raven Navy Issue">Raven Navy Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Black Ops</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Black Ops/Widow">Widow</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Marauder</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Marauder/Golem">Golem</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Dreadnought</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Caldari State/Dreadnought/Phoenix">Phoenix</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Carrier</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Carrier/Minokawa">Minokawa</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Carrier/Wyvern">Wyvern</a></li>
                                  <li><a href="#" a-ship-name="Caldari State/Carrier/Chimera">Chimera</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Titan</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Caldari State/Titan/Leviathan">Leviathan</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Gallante Federation</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Frigate/Navitas">Navitas</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Frigate/Tristan">Tristan</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Frigate/Incursus">Incursus</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Frigate/Imicus">Imicus</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Frigate/Atron">Atron</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Frigate/Maulus">Maulus</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Navy FrigateNavy Frigate/Federation Navy Comet">Federation Navy Comet</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Navy Frigate/Maulus Navy Issue">Maulus Navy Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Interceptor</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/InterceptorInterceptor/Taranis">Taranis</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Interceptor/Ares">Ares</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Assault Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Assault Frigate/Ishkur">Ishkur</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Assault Frigate/Enyo">Enyo</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Covert Ops</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Covert Ops/Helios">Helios</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Covert Ops/Nemesis">Nemesis</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Electronic Attack Ship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Electronic Attack Ship/Keres">Keres</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Logistic Frigates</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Logistic Frigates/Thalia">Thalia</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Destroyer/Catalyst">Catalyst</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Destroyer/Algos">Algos</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Interdictor</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Interdictor/Eris">Eris</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Command Destroyers</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Command Destroyers/Magus">Magus</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Tactical Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Tactical Destroyer/Hecate">Hecate</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Cruiser/Vexor">Vexor</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Cruiser/Thorax">Thorax</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Cruiser/Celestis">Celestis</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Cruiser/Exequror">Exequror</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Navy Cruiser/Exequror Navy Issue">Exequror Navy Issue</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Navy Cruiser/Vexor Navy Issue">Vexor Navy Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Recon Ship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Recon Ship/Lachesis">Lachesis</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Recon Ship/Arazu">Arazu</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Heavy Assault Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Heavy Assault Cruiser/Ishtar">Ishtar</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Heavy Assault Cruiser/Deimos">Deimos</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Heavy Interdiction Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Heavy Interdiction Cruiser/Phobos">Phobos</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Strategic Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Strategic Cruiser/Proteus">Proteus</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Logistics Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Logistics Cruiser/Oneiros">Oneiros</a></li>
                                </ul>
                            </li><!--  -->
                            
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Battlecruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Battlecruiser/Prohecy">Prohecy</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Battlecruiser/Harbinger">Harbinger</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Battlecruiser/Oracle">Oracle</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Navy Battleship/Brutix Navy Issue">Brutix Navy Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Command Ships</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Command Ships/Astarte">Astarte</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Command Ships/Eos">Eos</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Battleship/Megathron">Megathron</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Battleship/Dominix">Dominix</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Battleship/Hyperion">Hyperion</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Navy Battleship/Dominix Navy Issue">Dominix Navy Issue</a></li>
                            			<li><a href="#" a-ship-name="Gallante Federation/Navy Battleship/Megathron Navy Issue">Megathron Navy Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Black Ops</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  	<li><a href="#" a-ship-name="Gallante Federation/Black Ops/Sin">Sin</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Marauder</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  	<li><a href="#" a-ship-name="Gallante Federation/Marauder/Kronos">Kronos</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Dreadnought</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Gallante Federation/Dreadnought/Moros">Moros</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Carrier</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Carrier/Ninazu">Ninazu</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Carrier/Nyx">Nyx</a></li>
                                  <li><a href="#" a-ship-name="Gallante Federation/Carrier/Thanatos">Thanatos</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Titan</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Gallante Federation/Titan/Erebus">Erebus</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Minmatar Republic</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Minmatar Republic/Vigil">Vigil</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Minmatar Republic/Slasher">Slasher</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Minmatar Republic/Probe">Probe</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Minmatar Republic/Rifter">Rifter</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Minmatar Republic/Breacher">Breacher</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Minmatar Republic/Burst">Burst</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Navy Frigate/Republic Fleet Firetail">Republic Fleet Firetail</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Navy Frigate/Vigil Fleet Issue">Vigil Fleet Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Interceptor</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Interceptor/Claw">Claw</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Interceptor/Stiletto">Stiletto</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Assault Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Assault Frigate/Jaguar">Jaguar</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Assault Frigate/Wolf">Wolf</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Covert Ops</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Covert Ops/Cheetah">Cheetah</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Covert Ops/Hound">Hound</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Electronic Attack Ship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Electronic Attack Ship/Hyena">Hyena</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Logistic Frigates</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Logistic Frigates/Scalpel">Scalpel</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Destroyer/Talwar">Talwar</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Destroyer/Thrasher">Thrasher</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Interdictor</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Interdictor/Sabre">Sabre</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Command Destroyers</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Command Destroyers/Bifrost">Bifrost</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Tactical Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Tactical Destroyer/Svipul">Svipul</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Cruiser/Stabber">Stabber</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Cruiser/Ruptur">Ruptur</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Cruiser/Bellicose">Bellicose</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Cruiser/Scythe">Scythe</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Navy Cruiser/Scythe Fleet Issue">Scythe Fleet Issue</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Navy Cruiser/Stabber Fleet Issue">Stabber Fleet Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Recon Ship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Recon Ship/Crucifier">Huggin</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Recon Ship/Crucifier">Rapier</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Heavy Assault Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Heavy Assault Cruiser/Muninn">Muninn</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Heavy Assault Cruiser/Vagabond">Vagabond</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Logistics Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Logistics Cruiser/Broadsword">Broadsword</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Heavy Interdiction Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Heavy Interdiction Cruiser/Scimitar">Scimitar</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                Strategic Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Strategic Cruiser/Loki">Loki</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Battlecruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Battlecruiser/Cyclone">Cyclone</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Battlecruiser/Hurricane">Hurricane</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Battlecruiser/Tornado">Tornado</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Navy Battleship/Hurricane Fleet Issue">Hurricane Fleet Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Command Ships</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Command Ships/Claymore">Claymore</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Command Ships/Sleipnir">Sleipnir</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Battleship/Typhoon">Typhoon</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Battleship/Maelstrom">Maelstrom</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Battleship/Tempest">Tempest</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Navy Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Navy Battleship/Typhoon Fleet Issue">Typhoon Fleet Issue</a></li>
                            			<li><a href="#" a-ship-name="Minmatar Republic/Navy Battleship/Tempest Fleet Issue">Tempest Fleet Issue</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Black Ops</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Black Ops/Panther">Panther</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Marauder</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Marauder/Vargur">Vargur</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Dreadnought</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Minmatar Republic/Dreadnought/Naglfar">Naglfar</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Carrier</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Carrier/Lif">Lif</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Carrier/Hel">Hel</a></li>
                                  <li><a href="#" a-ship-name="Minmatar Republic/Carrier/Nighoggur">Nighoggur</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Titan</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#" a-ship-name="Minmatar Republic/Titan/Ragnarok">Ragnarok</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Ore</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Mining Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Ore/Mining Frigate/Venture">Venture</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Expedition Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Ore/Expedition Frigate/Prospect">Prospect</a></li>
                                    <li><a href="#" a-ship-name="Ore/Expedition Frigate/Endurance">Endurance</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Mining Barge</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" a-ship-name="Ore/Mining Barge/Procurer">Procurer</a></li>
                          <li><a href="#" a-ship-name="Ore/Mining Barge/Covetor">Covetor</a></li>
                          <li><a href="#" a-ship-name="Ore/Mining Barge/Retriever">Retriever</a></li>
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Exhumer</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" a-ship-name="Ore/Exhumer/Hulk">Hulk</a></li>
                          <li><a href="#" a-ship-name="Ore/Exhumer/Skiff">Skiff</a></li>
                          <li><a href="#" a-ship-name="Ore/Exhumer/Machkinaw">Machkinaw</a></li>
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Ore Industrial Ship</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" a-ship-name="Ore/Ore Industrial Ship/Noctis">Noctis</a></li>
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Industrial Command Ship</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" a-ship-name="Ore/Industrial Command Ship/Porpoise">Porpoise</a></li>
                          <li><a href="#" a-ship-name="Ore/Industrial Command Ship/Orca">Orca</a></li>
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Industrial Ship</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" a-ship-name="Ore/Capital Industrial Ship/Rorqual">Rorqual</a></li>
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Freighter</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#" a-ship-name="Ore/Freighter/Bowhead">Bowhead</a></li>
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Guristas Pirates</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Guristas Pirates/Frigate Class/Worm">Worm</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Guristas Pirates/Cruiser Class/Gila">Gila</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">
                                  Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Guristas Pirates/Battlecruiser Class/Rattlesnake">Rattlesnake</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Dreadnought</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Guristas Pirates/Dreadnought/Caiman">Caiman</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Carrier</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Guristas Pirates/Carrier/Loggerhead">Loggerhead</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Titan</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Guristas Pirates/Titan/Komodo">Komodo</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Sansha's Nation</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Sansha's Nation/Frigate/Succubus">Succubus</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Sansha's Nation/Cruiser/Phantasm">Phantasm</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Sansha's Nation/Battleship/Nightmare">Nightmare</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Carrier</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Sansha's Nation/Carrier/Revenant">Revenant</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Blood Raider Covenant</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Blood Raider Covenant/Frigate/Cruor">Cruor</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Blood Raider Covenant/Cruiser Class/Ashimmu">Ashimmu</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Blood Raider Covenant/Battleship/Bhaalgorn">Bhaalgorn</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Dreadnought</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Blood Raider Covenant/Dreadnought/Chemosh">Chemosh</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Carrier</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Blood Raider Covenant/Carrier/Dagon">Dagon</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Titan</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Blood Raider Covenant/Titan/Molok">Molok</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Angel Cartel</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Angel Cartel/Frigate/Dramiel">Dramiel</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Angel Cartel/Cruiser/Cynabal">Cynabal</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Angel Cartel/Battleship/Machariel">Machariel</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Serpentis</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Serpentis/Frigate/DareDevil">DareDevil</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Serpentis/Cruiser/Vigilant">Vigilant</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Serpentis/Battleship/Vindicator">Vindicator</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Dreadnought</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Serpentis/Dreadnought/Vehement">Vehement</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Carrier</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Serpentis/Carrier/Vendetta">Vendetta</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Titan</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Serpentis/Titan/Vanquisher">Vanquisher</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Servant Sisters of Eve</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Servant Sisters of Eve/frigate/Astero">Astero</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Servant Sisters of Eve/Cruiser/Stratios">Stratios</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Servant Sisters of Eve/Battleship/Nestor">Nestor</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Mordu's Legion Command</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Mordu's Legion Command/Frigate/Garmur">Garmur</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Mordu's Legion Command/Cruiser/Orthrus">Orthrus</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Mordu's Legion Command/Battleship/Barghest">Barghest</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                Triglavian Collective</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Frigate/Damavik">Damavik</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Assault Frigate</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Assault Frigate/Nergal">Nergal</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Destroyer/Kikimora">Kikimora</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Command Destroyer</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Command Destroyer/Draugur">Draugur</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Cruiser/Vedmak">Vedmak</a></li>
                                    <li><a href="#" a-ship-name="Triglavian Collective/Cruiser/Rodiva">Rodiva</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Heavy Assault Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Heavy Assault Cruiser/Ikitursa">Ikitursa</a></li>
                                </ul>
                            </li><!--  -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Logistics Cruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Logistics Cruiser/Zarmazd">Zarmazd</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battlecruiser</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Battlecruiser/Drekavac">Drekavac</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Battleship</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Battleship/Leshak">Leshak</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                    <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Capital Class</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="nav-label">Dreadnought</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" a-ship-name="Triglavian Collective/Dreadnought/Zirnitra">Zirnitra</a></li>
                                </ul>
                            </li><!--  -->
                        </ul>
                    </li><!--  -->
                </ul>
          </li> <!-- paste after here -->


      </ul>
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text"><body onload="updateClock(); setInterval('updateClock()', 1000 )"><a id="clock" style="color:white">&nbsp;</a></p>
          <?php
          $loggedIn=intval((isset($_SESSION['user_id'])
          &&
          !empty($_SESSION['user_id'])));
          if($loggedIn===0)
          {
           echo('
          <li class="disabled"><a href="#">Login</a></li>
          <li class="disabled"><a href="#">Register</a></li>');
          }
          else {
           echo('
           <li class="disabled"><a href="#">Logout</a></li>
           <li class="disabled"><a href="#">My Account</a></li>');
          }
          ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
