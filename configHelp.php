<?php 
include ('includes/header.php');?> <?php 
        include ("includes/nav.php");?>
<div class='contentWrapper row helper'>
    <div class="sidebar">
        <ul class='sideMenu'>
            <li class='currentPage'>Obrączki klasyczne</li>
            <li>Kolory obrączek</li>
            <li>Stopy złota</li>
            <li>Obrączki z kamieniami</li>
        </ul>
    </div>
    <div class="ringDescription">
        <div id="clasicRings">
            <h3>Obrączki klasyczne</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sit nisi assumenda adipisci, amet
                ratione laborum? Corrupti, modi? Est consequuntur quo praesentium fugiat assumenda possimus id animi
                sunt eum quia</p>.
        </div>
        <div id="ColorRings">
            <h3>Kolory obrączek</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sit nisi assumenda adipisci, amet
                ratione
                laborum? Corrupti, modi? Est consequuntur quo praesentium fugiat assumenda possimus id animi sunt eum
                quia
            </p>.
        </div>
        <div id="goldTrials">
            <h3>Stopy złota</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sit nisi assumenda adipisci, amet
                ratione
                laborum? Corrupti, modi? Est consequuntur quo praesentium fugiat assumenda possimus id animi sunt eum
                quia</p>.
        </div>
        <div id="stonedRings">
            <h3>Obrączki z kamieniami</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sit nisi assumenda adipisci, amet
                ratione
                laborum? Corrupti, modi? Est consequuntur quo praesentium fugiat assumenda possimus id animi sunt eum
                quia</p>.
        </div>
    </div>
</div>
<script>
document.querySelector('nav ul li:nth-child(2)').classList.add('currentPage');
</script>
<?php 
include ('includes/footer.php');?>