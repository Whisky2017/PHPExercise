<?php
/**
 * Created by PhpStorm.
 * User: wskyt
 * Date: 2017/2/24
 * Time: 10:23
 */
require ("page.inc");

$homepage = new page();

$homepage->content = "<p>Welcome to the home of TLA Consulting.
                       Please take some time to get to know us.</p>
                       <p>We specialize in serving your business needs
                       and hope to hear from you soon.</p>";

$homepage->Display();
?>