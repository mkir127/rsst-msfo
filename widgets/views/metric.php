<div class="metric<?=$major?' major':''?>">

    <div class="metric__year"><?=$year?></div>
    <div class="metric__bar">
        <div class="metric__bar__inner" style="width: <?=$inner_bar_width?>px"></div>
    </div>
    <div class="metric__delta"><?=$delta?$delta:'&nbsp;'?></div>
    <div class="metric__value">
        <span><?php
            if($lang=='ru') {
                $value=number_format($value,1,',',' ');
            }
            else {
                $value=number_format($value,1,'.',',');
            }
            echo $value;
            ?></span> ₽
    </div>
    <div class="metric__dim"><?=$lang=='ru'?'млрд':'RUB bn'?></div>
</div>
