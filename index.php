<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
<jdoc:include type="head" />


	<!-- Framework CSS -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/altmoisa/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/altmoisa/blueprint/print.css" type="text/css" media="print">
	<!--[if IE]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/altmoisa/images/_screen.css?2" type="text/css" media="screen, projection">
	<!--[if IE]>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/altmoisa/images/_screen_ie.css" type="text/css" media="screen, projection">
	<![endif]-->
	<!--[if IE 7]>
	<style>
	#main_table,
	.span-24, div.span-24{ margin: 2em; width: 900px !important; }
	.paisefoto { display: inline; }
	#text_parent { width: 100% !important }
	</style>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/altmoisa/images/thickbox.css" type="text/css" media="screen, projection">
	<script src="<?php echo $this->baseurl ?>/templates/altmoisa/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- main menu and gallery -->
	<script src="<?php echo $this->baseurl ?>/templates/altmoisa/js/jquery.cross-slide.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/altmoisa/js/jquery.lavalamp.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/altmoisa/js/jcarousellite_1.0.1.min.js"></script>
	<!-- Optional -->
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/altmoisa/js/jquery.easing.1.1.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/altmoisa/js/jquery.mousewheel.js"></script>
	<!-- thickbox -->

	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-9439276-2']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
</head>
<body class="lang_<?php echo $this->language; ?>">

<?php
$checkuser = JFactory::getUser();
if ($checkuser->get('gid')>0){
?>



<!--[if lt IE 7]>
<script type="text/javascript" src="/templates/altmoisa/js/fixed.js"></script>
<![endif]-->
<div id="login_menu_height" style="height: 30px;">
<div id="login_menu" style="height: 30px;position: fixed; top: 0; width: 100%; background: #e3ebf4; border-bottom: 1px solid #96969D;z-index: 10000;left: 0;">
<div style="margin: 0 auto; width: 940px;">

<!--	<div class="L2" style="float: left; ">
	<a href="/administrator/"  style="font-size: 12px; color: black;  display: block; padding: 6px 2px 0 2px; font-weight: bold;">Mine admini</a>
	</div>

<?php
	$menu =& JSite::getMenu();
	$query = $menu->getActive()->query;

	if ($query["option"] == "com_content" &&
		$query["view"] == "article" &&
		$query["id"] ) {
		echo '<div class="vahe" style="float: left;padding: 6px 8px 0 8px; ">|</div>';
			echo '<div class="L2" style="float: left; ">
	<a href="http://www.altmoisa.ee/administrator/index.php?option=com_content&task=edit&cid[]='.$query["id"].'"  style="font-size: 12px; color: black;  display: block; padding: 6px 2px 0 2px; font-weight: bold;">Muuda sisu</a>
	</div>';
	}
?>

	<div class="vahe" style="float: left;padding: 6px 8px 0 8px; ">|</div>

	<div class="L2" style="float: left; ">

	<a href="http://www.altmoisa.ee/administrator/index.php?option=com_login&task=logout"  style="font-size: 12px; color: black;  display: block; padding: 6px 2px 0 2px; font-weight: bold;">Logi välja</a>
	</div>-->

	<form class="log" name="login" method="post" action="index.php">
	<input type="submit" value="Välju" class="button" name="Submit"/>
	<input type="hidden" value="com_user" name="option"/>
	<input type="hidden" value="logout" name="task"/>
	<input type="hidden" value="L2xvZ2luI2NvbnRlbnQ=" name="return"/>
	</form>

</div>
</div>
</div>


<?php
}
?>

<div class="container">

	<div id="langMenu">
		<jdoc:include type="modules" name="user4" />
	</div>

	<div id="topMenu">
		<ul>
			<jdoc:include type="modules" name="user3" />
		</ul>
	</div>

<br class="clear"/>

<div id="header">
<a href="" id="goHome"></a>
<img src="<?php echo $this->baseurl ?>/templates/altmoisa/images/logo5.png" width="950" height="195" class="logo" />
<div id="header_imgs"></div>
<div id="fb"><a href="http://et-ee.facebook.com/pages/Altm%C3%B5isa-K%C3%BClalistemaja/369888004908"><img src="<?php echo $this->baseurl ?>/templates/altmoisa/images/facebook.png" /></a></div>
<div id="blog"><a href="http://altmoisa.wordpress.com/" onclick="_gaq.push(['_trackEvent','Outgoing Links','altmoisa.wordpress.com'])" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/altmoisa/images/blog.png" /></a></div>
</div>
<script type="text/javascript">
jQuery(function($) {
	aw_banner_opts = {};
	aw_banner_opts.sleep = 4;
	aw_banner_opts.fade = 1;
	aw_banner_images = [];
<?php
$header_images_path = "/home/altmoisa/domains/altmoisa.ee/public_html/templates/altmoisa/images/p2is";

$season = date("z");

// Meeli tahtis, et ma kevade pildid paneksid. Pean kevade algust võltsima.
//if ($season <= 174 and $season >= 81) {
if ($season <= 174 and $season >= 60) {
  $m_season = "kevad";
} else {
  if ($season <= 295 and $season >= 175) {
    $m_season = "suvi";
  } else {
    if ($season <= 327 and $season >= 296) {
      $m_season = "sygis";
    } else {
      $m_season = "talv";
    }
  }
}

generate_images_list($header_images_path."/".$m_season, "templates/altmoisa/images/p2is/".$m_season);

function generate_images_list($path, $baseurl)
{
  //using the opendir function
  $dir_handle = @opendir($path) or die("Unable to open $path");

  //running the while loop
  while ($file = readdir($dir_handle))
  {
     if ($file!="." && $file!="..")
    {
      echo "aw_banner_images[aw_banner_images.length] =  { src: '/".$baseurl."/".$file."',   href: '/' };\n";
    }
  }

  //closing the directory
  closedir($dir_handle);
}

?>
	$('#header_imgs').crossSlide(aw_banner_opts, aw_banner_images);
})
</script>

<!--<img src="img/menu.gif" width="950" height="52" />-->
<div id="main_menu">
	<ul class="lavalampnoimage" id="1">
	   <jdoc:include type="modules" name="user2" />
	</ul>
</div>

<table border="0" cellspacing="0" cellpadding="0" id="main_table">
<tr>
	<?php if(($this->countModules('left') || $this->countModules('right')) && $_GET["task"]!="edit" ) { ?>
		<td id="main-content" class="span-18 colborder" style="width: auto;">
	<?php } else { ?>
	<td id="main-content" class="span-24">
	<?php } ?>

		<jdoc:include type="component" />
	</td>
	<?php if(($this->countModules('left') || $this->countModules('right')) && $_GET["task"]!="edit" ) { ?>
	<td id="news-content" class="span-6">
	<?php } ?>

	<?php if ($_GET["task"]!="edit" ) { ?>
		<?php if($this->countModules('right')) : ?>
		  <div class="uudised">
			<div>
			  <jdoc:include type="modules" name="right" />
			</div>
		  </div>
		<?php endif; ?>
		<?php if($this->countModules('left')) : ?>
		  <div class="lingid3">
			<div>
			  <jdoc:include type="modules" name="left" />
			</div>
		  </div>
		<?php endif; ?>
	<?php } ?>

	<?php if(($this->countModules('left') || $this->countModules('right')) && $_GET["task"]!="edit" ) { ?>
	</td>
	<?php } ?>
</tr>
</table>

<div class="hr"><hr /></div>
<h2 class="alt"><jdoc:include type="modules" name="user1" style="xhtml" /></h2>
<div class="hr"><hr /></div>

<div id="footer">
    <jdoc:include type="modules" name="footer" style="xhtml" />
</div>

<script src="<?php echo $this->baseurl ?>/templates/altmoisa/js/js.js" type="text/javascript"></script>

<script type="text/javascript">
$("#main-content a img[alt!=Muuda]").each(function() {
  var el = $(this).parent();
  if (!el.hasClass('.normallink')) {
    el.addClass("thickbox").attr("onclick", "");
  }
});
var html = '<script type="text/javascript" src="/templates/altmoisa/js/thickbox.js">'+'<'+'/'+'script>';
$(document.body).append(html);
</script>


</body>
</html>
