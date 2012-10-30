<?php if ($Address_1 != '') { ?>
<p id="footer-address">
  <strong><a href="/contact">Contact Us</a></strong><br />
<?php if ($Address_1 != '') { ?>
  <?php print $Address_1 ?><br />
<?php } ?>
<?php if ($Address_2 != '') { ?>
  <?php print $Address_2 ?><br />
<?php } ?>
<?php if ($City != '') { ?>
  <?php print $City ?> <?php print $State ?>, <?php print $Zip ?>
<?php } ?>
</p>
<?php } ?>
<?php if ($Phone != '') { ?>
<p id="footer-phone">
  Phone: <?php print $Phone ?><br />
<?php if ($Phone != '') { ?>
  Fax: <?php print $Fax ?>
<?php } ?>
</p>
<?php } ?>
<?php if ($E_Mail != '') { ?>
<p id="footer-email">
  E-Mail: <a href="mailto:<?php print $E_Mail ?>" title="E-Mail Us"><?php print $E_Mail ?></a>
</p>
<?php } ?>
<?php if ($Link_1_Text != '') { ?>
<p id="footer-link-1">
  <a href="<?php print $Link_1_URL ?>"><?php print $Link_1_Text ?></a>
</p>
<?php } ?>
<?php if ($Link_2_Text != '') { ?>
<p id="footer-link-2">
  <a href="<?php print $Link_2_URL ?>"><?php print $Link_2_Text ?></a>
</p>
<?php } ?>
<?php if ($Link_3_Text != '') { ?>
<p id="footer-link-3">
  <a href="<?php print $Link_3_URL ?>"><?php print $Link_3_Text ?></a>
</p>
<?php } ?>
<p id="footer-privacy">
  <strong><a href="http://artsandsciences.osu.edu/privacy-policy" title="Privacy Policy">Privacy Policy</a></strong><br />
  <strong><a href="/contact" title="Visit the contact page">Questions, Feedback, Acccessibility</a></strong>
  <a href="/contact" title="Accessibility">
    <img src="/profiles/asc/themes/q7/icons/access.png" alt="Accessibility" id="footer-accessibility-icon" width="20" height="20" />
  </a>
</p>
