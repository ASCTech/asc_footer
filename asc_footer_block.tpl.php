<?php if ($Address_1 != '') { ?>
<p id="footer-Address">
  <a href="/contact">Contact Us</a><br />
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
<?php if ($E_mail != '') { ?>
<p id="footer-email">
  E-Mail: <a href="mailto:<?php print $E_mail ?>" title="E-Mail Us"><?php print $E_mail ?></a>
</p>
<?php } ?>
<?php if ($Phone != '') { ?>
<p id="footer-phone">
  Phone: <?php print $Phone ?><br />
<?php if ($Fax != '') { ?>
  Fax: <?php print $Fax ?>
<?php } ?>
</p>
<?php } ?>
<?php if ($Link_1_Text != '') { ?>
<p id="footer-link-1">
  <a href="<?php print $Link_1_URL ?>" title="<?php print $Link_1_Desc ?>"><?php print $Link_1_Text ?></a>
</p>
<?php } ?>
<?php if ($Link_2_Text != '') { ?>
<p id="footer-link-2">
  <a href="<?php print $Link_2_URL ?>" title="<?php print $Link_2_Desc ?>"><?php print $Link_2_Text ?></a>
</p>
<?php } ?>
<?php if ($Link_3_Text != '') { ?>
<p id="footer-link-3">
  <a href="<?php print $Link_3_URL ?>" title="<?php print $Link_3_Desc ?>"><?php print $Link_3_Text ?></a>
</p>
<?php } ?>
<p id="footer-privacy">
  <a href="http://artsandsciences.osu.edu/privacy-policy" title="Privacy Policy">Privacy Policy</a><br>
  <a href="/contact" title="Visit the contact page">Questions, Feedback, Acccessibility</a>
  <a href="/contact" title="Accessibility" class="no-decoration">
    <img src="/profiles/asc/themes/q7/icons/access.png" alt="Accessibility" id="footer-accessibility-icon" width="20" height="20" />
  </a>
</p>
