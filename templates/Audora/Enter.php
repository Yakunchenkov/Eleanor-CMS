<?php
/*
	Шаблон страницы входа в админку.
*/
if(!defined('CMS'))die;
$ltpl=Eleanor::$Language['tpl'];
$lang=Eleanor::$Language->Load($theme.'langs/enter-*.php',false);?><!DOCTYPE html>
<html>
<head>
{head}
<link media="screen" href="<?php echo$theme?>style/styles.css" type="text/css" rel="stylesheet" />
<link media="screen" href="<?php echo$theme?>style/enter.css" type="text/css" rel="stylesheet" />
<style type="text/css">
	.pagebg {
		background-image: url(<?php echo$CONFIG['imagebg'];?>);
		background-color: <?php echo$CONFIG['colorbg'];?>;
		background-repeat: <?php echo$CONFIG['bgrepeat'];?>;
		background-position: <?php echo$CONFIG['positionimg'];?>;
<?php echo$CONFIG['bgattachment']=='s' ? 'background-attachment: scroll;' : 'background-attachment: fixed;';?>
	}
</style>
</head>

<body class="pagebg">
	<div class="wrapper">
		<div class="elh"><div class="elh"><div class="elh">
			<div class="elhead">
				<h1><a href="http://eleanor-cms.ru" title="Eleanor CMS">Eleanor CMS</a></h1>
			</div>
			<div class="elhmenu">
				<h4><?php echo end($GLOBALS['title'])?></h4>
<?php
global$Eleanor;
if(Eleanor::$vars['multilang'])
{
	echo'<div class="hlang"><ul class="reset">';
	foreach(Eleanor::$langs as $k=>&$lng)
	{
		$img='<img src="images/lang_flags/'.$k.'.png" title="'.$lng['name'].'" alt="'.$lng['name'].'" />';
		echo'<li>'.($k==Language::$main ? '<span class="active">'.$img.'</span>' : '<a href="'.Eleanor::$filename.'?language='.$k.'">'.$img.'</a>').'</li>';
	}
	echo'</ul></div>';
}
?>
			</div>
		</div></div></div>
			<div class="container">
						<table class="conts"><tr><td style="padding: 0;">
							<div class="wpbox">
								<div class="wptop"><b><span>&nbsp;</span></b></div>
								<div class="wpmid">
<?php
if($errors)
{
	foreach($errors as $k=>&$v)
		if(is_int($k) and is_string($v) and isset($lang[$v]))
			$v=$lang[$v];
	echo Eleanor::$Template->Message($errors,'error');
}?>
									<div class="wbpad">
										<form method="post">
										<div class="wpbox wpbwhite">
											<div class="wptop"><b><span>&nbsp;</span></b></div>
											<div class="wpmid">
												<div class="wbpad enterform">
														<p>
															<span><?php echo$ltpl['login']?></span>
															<?php echo Eleanor::Input('login[name]',$login,array('size'=>10,'tabindex'=>1))?>
														</p>
														<p>
															<span><?php echo$ltpl['pass'],'</span>',
																		Eleanor::Input('login[password]',$password,array('type'=>'password','size'=>10,'tabindex'=>2)),
																		'</p>',
																		$captcha ? '<p><span title="'.$lang['captcha_'].'">'.$lang['captcha'].'</span>'.Eleanor::Input('check','',array('tabindex'=>3,'autocomplete'=>'off')).'<br />'.$captcha.'</p>' : ''?>
												</div>
											</div>
											<div class="wpbtm"><b><span>&nbsp;</span></b></div>
										</div>
										<div class="submitline">
											<input class="button" type="submit" value="<?php echo$ltpl['enter']?>" tabindex="4" />
										</div>
										</form>
<?php if($GLOBALS['Eleanor']->multisite):?>
<script type="text/javascript">//<![CDATA[
CORE.MSQueue.done(function(qw){
	var al=$(".submitline");
	$.each(qw,function(k,v){
		var a=$("<a>").prop({
			href:"#",
			title:v.name,
			style:"font-weight:bold"
		}).text(v.title).click(function(){
			CORE.MSLogin(k);
			return false;
		})
		al.each(function(){
			$(this).prepend("<br />").prepend(a);
			a=a.clone(true);
		});
	})
});
//]]></script>
<?php endif?>
									</div>
								</div>
								<div class="wpbtm"><b><span>&nbsp;</span></b></div>
							</div>
						</td></tr></table>
			</div>
		<div class="elf"><div class="elf"><div class="elf">
			<div class="elfoot">
				<span class="copyright">
					<?php
#Пожалуйста, не удаляйте и не изменяйте наши копирайты, если, конечно, у вас есть хоть немного уважения к разработчикам.
echo 'Powered by '.ELEANOR_COPYRIGHT?>
				</span>
				<span class="siteurl">
					<a title="eleanor-cms.ru" href="<?php echo PROTOCOL.Eleanor::$domain.Eleanor::$site_path?>"><?php echo Eleanor::$domain.(Eleanor::$site_path=='/' ? '' : Eleanor::$site_path)?></a>
				</span>
			</div>
		</div></div></div>
		<div class="msgbrowser">
			Для комфортного использования нашей системы, рекомендуем Вам  воспользоваться браузерами <a href="http://www.mozilla-europe.org/ru/firefox/" title="Mozilla Firefox">Mozilla Firefox</a> или <a href="http://ru.opera.com/" title="Opera">Opera</a>.
		</div>
	</div>
</body>
</html>