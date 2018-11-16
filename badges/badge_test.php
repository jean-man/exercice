<?php
$ismale = false;
$is_admin = true;
$nb_msg = 50;
$registration_date = ("1999-10-08");
$today= new datetime();
$registration_days = $registration_date ->diff($today);
$birthdate = new datetime("1979-19-08");

?>


<?php  if($is_admin == true ) : ?>

<p class=" "> </p>

<?php endif; ?>

<?php if ($is_male == true) : ?>
<p class=" "> </p>

<?php else: ?>
<p class=" "> </p>

<?php endif; ?>

<?php if($nb_msg < 50): ?>
<p class=""> </p>
<?php endif; ?>

<?php if($nb_msg>50 && $nb_msg<100): ?>
<p class=" "> </p>
<?php endif; ?>

<?php if($nb_msg>50 && $nb_msg<100): ?>
    <p class=" "> </p>
<?php endif; ?>

<?php if($registration_days > 30 && $nb_mess>50): ?>
    <p class=" "> </p>
<?php elseif ($registration_days > 365 || $nb_msg >100): ?>
    <p class=" "> </p>
<?php endif; ?>

<?php elseif ($today == $birthdate ): ?>
    <p class=" "> </p>
<?php endif; ?>





}
