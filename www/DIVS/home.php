<?php
function MostraHome()
{
?>
<div id="DIVHome" >

    <div class="row">
        <div class="col-md-12">
            <div class="ContHomeContacte" >
                <?php include("PHP/ContacteHomeCarregaDirecte.php"); ?>                
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-6 col-lg-7"><?php MostraPartEsquerraHome();?></div>
        <div class="col-md-6 col-lg-5">
            
                <div class="row">
                    <div class="col-md-6"><?php MostraPartCentralHome ();?></div>
                    <div class="col-md-6"><?php MostraPartDretaHome ();?></div>
                </div> 
                
        
    </div>

    

</div>

    
<?php
}
function MostraPartEsquerraHome()
{
?>


    

    <div class="row">         
        <?php include ("PHP/NoticiesCarregaContingutDirecte.php"); ?>
    </div>      


<?php

}


function MostraPartCentralHome()
{
?>

    

<div class="ContHomeListEnDir" >
    <?php // include("PHP/EndirMenuHomeCarregaDirecte.php"); ?>
</div>

<?php
}
?>
<?php
function MostraPartDretaHome()
{
?>

    
    <div class="avisos">
        
            
       
    </div>


<?php
}
?>
