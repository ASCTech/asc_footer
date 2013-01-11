<?php if ($address_1 != '') { ?>
<p id="footer-Address">
  <a href="/contact">Contact Us</a><br />
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
<?php if ($link_1_text != '') { ?>
<p id="footer-link-1">
  <a href="<?php print $link_1_url ?>" title="<?php print $link_1_desc ?>"><?php print $link_1_text ?></a>
</p>
<?php } ?>
<?php if ($link_2_text != '') { ?>
<p id="footer-link-2">
  <a href="<?php print $link_2_url ?>" title="<?php print $link_2_desc ?>"><?php print $link_2_text ?></a>
</p>
<?php } ?>
<?php if ($link_3_text != '') { ?>
<p id="footer-link-3">
  <a href="<?php print $link_3_url ?>" title="<?php print $link_3_desc ?>"><?php print $link_3_text ?></a>
</p>
<?php } ?>
<p id="footer-privacy">
  <a href="http://artsandsciences.osu.edu/privacy-policy" title="Privacy Policy on the College of Arts and Sciences website.">Privacy Policy</a><br>
  <a href="/contact" title="Contact page for questions, feedback or accessibility issues.">Questions, Feedback, Accessibility</a>
  <a href="/contact" title="Contact page for questions, feedback or accessibility issues." class="no-decoration">
    <img src="/profiles/asc/themes/q7/icons/access.png" alt="Contact page for questions, feedback or accessibility issues." title="Contact page for questions, feedback or accessibility issues." id="footer-accessibility-icon" width="20" height="20" />
  </a>
</p>
