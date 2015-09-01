<nav role="navigation">

  <ul class="menu cf button-group filter-button-group">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
    <li><a href="/#filter=*" data-filter="*">show all</a></li>
    <li><a href="/#filter=.metal" data-filter=".metal">metal</a></li>
    <li><a href="/#filter=.transition" data-filter=".transition">transition</a></li>
    <li><a href="/#filter=.alkali, .alkaline-earth" data-filter=".alkali, .alkaline-earth">alkali & alkaline-earth</a></li>
    <li><a href="/#filter=:not(.transition)" data-filter=":not(.transition)">not transition</a></li>
  </ul>

</nav>
