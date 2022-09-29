<?php get_header()?>

<?php
$fibbo = array(
    0=>['length'=>20, 'color'=>'blue','x'=>0,'y'=>0 ,'line'=> 'border-radius: 20px 0px 0px 0px;'],
    1=>['length'=>20, 'color'=>'red','x'=>20,'y'=>0,'line'=> 'border-radius: 0px 20px 0px 0px;'],
    2=>['length'=>40, 'color'=>'green','x'=>0,'y'=>20,'line'=> 'border-radius: 0px 0px 40px 0px;'],
    3=>['length'=>60, 'color'=>'violet','x'=>-60,'y'=>0,'line'=> 'border-radius: 0px 0px 0px 60px;'],
    4=>['length'=>100, 'color'=>'orange','x'=>-60,'y'=>-100,'line'=> 'border-radius: 100px 0px 0px 0px;'],
    5=>['length'=>160, 'color'=>'black','x'=>40,'y'=>-100,'line'=> 'border-radius: 0px 160px 0px 0px;'],
    6=>['length'=>260, 'color'=>'pink','x'=>-60,'y'=>60,'line'=> 'border-radius: 0px 0px 260px 0px;'],
    7=>['length'=>420, 'color'=>'indigo','x'=>-480,'y'=>-100,'line'=> 'border-radius: 0px 0px 0px 420px;'],

);
?>


<div class="frame">
    <?php


    foreach($fibbo as $index => $square):
        ?>
    <div class="square front"
        style="width:<?= $square['length'] . 'px' ?>;aspect-ratio:1/1;border-color:<?= $square['color']?>;transform:translate(<?=$square['x'].'px'?>,<?=$square['y'].'px'?>)">
        <?= $index?>
    </div>
    <div class="square"
        style="width:<?= $square['length'] . 'px' ?>;aspect-ratio:1/1;border-color:black;transform:translate(<?=$square['x'].'px'?>,<?=$square['y'].'px'?>); <?= $square['line']?>">
        <?= $index?>
    </div>
    <?php endforeach;?>
</div>

<?php get_footer()?>