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

/* #<?php echo $id; ?> */
#<?php echo $id; ?> .container {
}
#<?php echo $id; ?> .item {
}
#<?php echo $id; ?> .item1 {
}
#<?php echo $id; ?> .item2 {
}
#<?php echo $id; ?> .item3 {
}
#<?php echo $id; ?> .item4 {
}
#<?php echo $id; ?> .item5 {
}
<?php endforeach; ?>

