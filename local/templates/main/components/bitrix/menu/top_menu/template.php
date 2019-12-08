<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <div class="menu">
        <nav>
            <?if (!empty($arResult)):?>
            <ul class="mmenu">
                <?foreach($arResult as $key => $arItem):?>
                    <?if($arItem['DEPTH_LEVEL'] != 1){
                        continue;
                    }
                    ?>
                <?if($arItem['DEPTH_LEVEL'] == 1):?>
                <li<?if($arItem["SELECTED"]):?> class="current" <?endif?>><a href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"];?></a>
                </li>
                    <?endif;?>
                <?endforeach;?>
            </ul>
            <?endif;?>
        </nav>
    </div>
