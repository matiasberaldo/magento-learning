<?php

 \Magento\Framework\Component\ComponentRegistrar::register(
    "SecondModule", // The name of our preciated module
    \Magento\Framework\Component\ComponentRegistrar::THEME, // We specify the theme that this module is for
    __DIR__ // We specify the dir that this file is on
 );

?>
