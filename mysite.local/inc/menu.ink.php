 <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php
        if(!drawMenu($leftMenu)) 
            trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR); 
    ?>

    <!--Вместо этого кода исползуем foreach-->
    <!-- <li><a href="<?= $leftMenu[0]["href"] ?>"><?= $leftMenu[0]["link"] ?></a></li>
    <li><a href="<?= $leftMenu[1]["href"] ?>"><?= $leftMenu[1]["link"] ?></a></li> 
    <li><a href="<?= $leftMenu[2]["href"] ?>"><?= $leftMenu[2]["link"] ?></a></li>
    <li><a href="<?= $leftMenu[3]["href"] ?>"><?= $leftMenu[3]["link"] ?></a></li>
    <li><a href="<?= $leftMenu[4]["href"] ?>"><?= $leftMenu[4]["link"] ?></a></li> -->

    <!-- Меню -->