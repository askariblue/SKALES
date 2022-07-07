<?php
    header("Content-Security-Policy: default-src 'self' https://*.microsoft.com");
    header("Content-Security-Policy: style-src 'self'");
    header("Content-Security-Policy: style-src-elem 'self'");
    header("Content-Security-Policy: frame-src 'self' https://*.oaspapps.com");
    include("taskpane.html");
?>