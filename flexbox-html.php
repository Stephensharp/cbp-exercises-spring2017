<?php

$ids = [
    'flex-direction-row',
    'flex-direction-row-reverse',
    'flex-direction-column',
    'flex-direction-column-reverse',
    'flex-direction-row',
    'flex-wrap-wrap',
    'flex-wrap-wrap-reverse',
    'flex-flow',
    'justify-content-flex-start',
    'justify-content-flex-end',
    'justify-content-center',
    'justify-content-space-between',
    'justify-content-space-around',
    'align-items-flex-start',
    'align-items-flex-end',
    'align-items-center',
    'align-items-stretch',
    'align-items-baseline',
    'align-content-flex-start',
    'align-content-flex-end',
    'align-content-center',
    'align-content-space-between',
    'align-content-space-around',
    'order',
    'flex-grow-1',
    'flex-grow-2',
    'flex-shrink-1',
    'flex-shrink-1',
    'flex-basis',
    'flex',
    'align-self'
];
?>
<?php foreach($ids as $id) : ?>

<section id="<?php echo $id; ?>">
    <h2><?php echo $id; ?></h2>
    <span class="id">#<?php echo $id; ?></span>
    <div class="container">
        <div class="item item1">
            <span>1</span>
        </div>
        <div class="item item2">
            <span>2</span>
        </div>
        <div class="item item3">
            <span>3</span>
        </div>
        <div class="item item4">
            <span>4</span>
        </div>
        <div class="item item5">
            <span>5</span>
        </div>
    </div>
</section>
<?php endforeach; ?>

