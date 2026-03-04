<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
  <!-- header -->
    <header>
        <div class="header-left">
            <div class="logo">
                <a href="<?=DOMEN?>"><?=TITLE?></a>
                <a style="font-size: 12px;color: orange;text-decoration: underline;">alfa</a>
            </div>
        </div>
        <div class="header-left">
            <?php if(isset($category)): ?>
            <ul class="header-category">
                <?php foreach($category as $item): ?>
                    <?php if($item['active'] == 1): ?>
                        <li><a href="<?=DOMEN . $item['url']?>"><?=$item['name']?></a></li>
                    <?php else: ?>
                        <li><a href="<?=DOMEN . $item['url']?>" 
                        style='pointer-events: none;cursor: default;text-decoration:line-through'>
                        <?=$item['name']?></a></li>
                    <?php endif; ?>
                
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="header-right">
        <?php require_once 'login.php' ?>
        </div>     
    </header>

  <!-- /header -->