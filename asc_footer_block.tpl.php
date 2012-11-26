<?php if ($address_1 != '') { ?>
<p id="footer-address">
  <strong><a href="/contact">Contact Us</a></strong><br />
<?php if ($address_1 != '') { ?>
  <?php print $address_1 ?><br />
<?php } ?>
<?php if ($address_2 != '') { ?>
  <?php print $address_2 ?><br />
<?php } ?>
<?php if ($city != '') { ?>
  <?php print $city ?> <?php print $state ?>, <?php print $zip ?>
<?php } ?>
</p>
<?php } ?>
<?php if ($e_mail != '') { ?>
<p id="footer-email">
  E-Mail: <a href="mailto:<?php print $e_mail ?>" title="E-Mail Us"><?php print $e_mail ?></a>
</p>
<?php } ?>
<?php if ($phone != '') { ?>
<p id="footer-phone">
  Phone: <?php print $phone ?><br />
<?php if ($fax != '') { ?>
  Fax: <?php print $fax ?>
<?php } ?>
</p>
<?php } ?>
<?php if ($link_1_Text != '') { ?>
<p id="footer-link-1">
  <strong><a href="<?php print $link_1_URL ?>"><?php print $link_1_Text ?></a></strong>
</p>
<?php } ?>
<?php if ($link_2_Text != '') { ?>
<p id="footer-link-2">
  <strong><a href="<?php print $link_2_URL ?>"><?php print $link_2_Text ?></a></strong>
</p>
<?php } ?>
<?php if ($link_3_Text != '') { ?>
<p id="footer-link-3">
  <strong><a href="<?php print $link_3_URL ?>"><?php print $link_3_Text ?></a></strong>
</p>
<?php } ?>
<p id="footer-privacy">
  <a href="http://artsandsciences.osu.edu/privacy-policy" title="Privacy Policy">Privacy Policy</a><br>
  <a href="/contact" title="Visit the contact page">Questions, Feedback, Acccessibility</a>
  <a href="/contact" title="Accessibility">
    <img src="/profiles/asc/themes/q7/icons/access.png" alt="Accessibility" id="footer-accessibility-icon" width="20" height="20" />
  </a>
</p>
