<?php

# copyright (c) plustheme.com  all rights reserved   
# license -  licensed under  gnu/gpl v2                        
# website: http://www.plustheme.com  

defined('_JEXEC') or die;

jimport('joomla.filesystem.file');
?>

<?php
include 'includes/header.php';
?>

<body class="body_bg">
<div class="bg_top"></div>
<div id="main">
<div id="wrapper" class="ict-fgr">

<!-- HEADER -->
<div id="header">
<jdoc:include type="modules" name="top" style="standard" />
<a class="site-title" href="<?php echo $this->baseurl; ?>">
<?php echo $logo;?>
<?php if ($this->params->get('sitedescription'))
{
echo '<div class="site-description">'. htmlspecialchars($this->params->get('sitedescription')) .'</div>';
}
?>
</a>
</div>
<!-- //HEADER -->

<!-- HORIZONTAL MENU -->
<div id="hor_nav">
<jdoc:include type="modules" name="top_menu" style="none" />
</div>
<!-- //HORIZONTAL MENU -->

<!-- SEARCH -->
<?php if ($this->countModules('search')) : ?>
<div id="search_outer">
<div id="search">        
<jdoc:include type="modules" name="search" style="none" />
</div>
</div>
<?php endif; ?> 
<div class="clr"></div>  
<!-- //SEARCH -->

<!-- MESSAGE -->
<div id="message">
<jdoc:include type="message" />
</div>
<div class="clr"></div>  
<!-- //MESSAGE -->

<!-- SLIDESHOW -->
<?php if (is_array($menuid) && in_array($menu->getActive()->id, $menuid, true)) { ?>
<div id="slideshow" class="hundredpro">
<?php include 'includes/slideshow.php'; ?>
<div class="clr"></div> 
<?php } ?>

<!-- //SLIDESHOW -->

<!-- MAIN CONTENT -->
<div id="main-content" class="<?php echo $column_inst; ?>">
<div id="clmsk" class="cplukplukl-color2">
<div id="clmiddle" class="cpludpludr-color1">
<div id="clright" class="cplutplutr-color1">

<div id="cl1wrapper">
<div id="cl1pader">
<div id="cl1">

<!-- COMPONENT -->
<div class="component-pad">
<jdoc:include type="component" />
</div>
<!-- //COMPONENT -->

</div>
</div>
</div>

<!-- LEFT COLUMN -->
<?php if ($left_w != 0) : ?>
<div id="cl2" class="color2">
<jdoc:include type="modules" name="left" style="standard" />
</div>
<?php endif; ?>
<!-- //LEFT COLUMN -->

<!-- RIGHT COLUMN -->
<?php if ($right_w != 0) : ?>
<div id="cl3" class="color1">
<jdoc:include type="modules" name="right" style="standard" />
</div>
<?php endif; ?>
<!-- //RIGHT COLUMN -->

</div>
</div>
</div>
</div>
<!-- //MAIN CONTENT -->

<!-- FOOTER -->
<div id="footer_outer">
<div id="footer_inner">

<!-- BOTTOM1, BOTTOM2, BOTTOM3 -->
<?php if ($this->countModules('bottom1 or bottom2 or bottom3')) : ?>
<div id="mastermods3" class="spacer<?php echo $mastermod3_w; ?>">
<jdoc:include type="modules" name="bottom1" style="standard_bottom" />
<jdoc:include type="modules" name="bottom2" style="standard_bottom" />
<jdoc:include type="modules" name="bottom3" style="standard_bottom" />
</div>
<?php endif; ?>
<div class="clr"></div>
<!-- //BOTTOM1, BOTTOM2, BOTTOM3  -->

<div id="footer">
<jdoc:include type="modules" name="footer" style="none" />
Designed by <a href="http://www.plustheme.com">plustheme.com</a>
</div>

</div>
</div>
<!-- //FOOTER -->

<jdoc:include type="modules" name="debug" style="none" />

</div>
</div>

</body>
</html>