<?php $days = get_field('days', 'options'); ?>
<?php $day = new TSBusinessDay($days, 'America/Indianapolis'); ?>

<!-- DEBUGGING -->
<!--<?php var_dump($days); ?><br>
<?php echo $day->getTimezone(); ?><br>
<?php echo date("F j, Y, g:i a", $day->getTimestamp()); ?><br>
<?php echo $day->getDayName(); ?><br>
<?php echo $day->getYesterdayName(); ?><br>
<?php echo date("F j, Y, g:i a", $day->getOpen()); ?><br>
<?php echo date("F j, Y, g:i a", $day->getClose()); ?><br>
<?php echo date("F j, Y, g:i a", $day->getLastNightClose()); ?><br>
<?php echo $day->getIsOpenLate(); ?><br>
<?php echo $day->isOpen(); ?><br>
<?php echo time(); ?><br>
<?php echo $day->getYesterdayName() == get_field('day'); ?><br>
<?php echo $day->getWasOpenLate(); ?><br>
<?php echo $day->getTimestamp() < $day->getLastNightClose(); ?>-->

<!-- WOOCOMMERCE EXAMPLE -->
<?php if(!$day->isOpen()): ?>
<h2>Unable to Process Order</h2><p class="woocommerce-error">Sorry! This establishment is currently closed, but we'll keep your order safe and sound until you come back.</p>
<?php else: ?>
<!-- Display content here. -->
<?php endif; ?>

<!-- MORE ELABORATE EXAMPLE -->
<!-- This could be a custom field specifying what day of the week a special price is available, shown on product pages. -->
<?php $specialDay = get_field('day'); ?>

<?php if(($day->getDayName() == $specialDay && $day->isOpen()) || (($day->getYesterdayName() == $specialDay) && $day->getWasOpenLate() && ($day->getTimestamp() < $day->getLastNightClose()))): ?>
<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>
<?php else: ?>
<p class="woocommerce-error">This special is currently inactive. Please check back on <?php the_field('day'); ?> during business hours.</p>
<?php endif; ?>