<?php
//汉化并初始化  中国话的设置
//by  qq250100785

    $info=get_theme_data(TEMPLATEPATH.'/style.css');
	$themename=strtolower($info['Name']);
    // Theme Settings
    //主题配置项
/*
 * ttl     label翻译   小标题
 * values  默认项翻译
 * type    相应的渲染模版来实现功能
 * hint   小灯泡提示
 *
 * */
    $settings = array(
        'general'=>array(
			'name'=>'General',
            'title'=>'常规',
			'content'=>array(
				'logosource'=>array(
					'type'=>'select', 'name'=>'logosource', 'value'=>'1', 'ttl'=>'Logo 类型',
					'params'=>array(
						'1'=>'图片',
						'2'=>'文字'
					),'hint'=>'选择LOGO的类型'
				),
				'logos'=>array(
					'type'=>'variants', 'name'=>'logos', 'depend'=>'logosource',
					'variants'=>array(
						'1'=>'logoimage',
						'2'=>'customtext'
					)
				),
				'logoimage'=>array(
					'type'=>'variant','name'=>'logoimage','value'=>get_template_directory_uri().'/images/logo.png','ttl'=>'Logo image', 'hint'=>'Enter full url to your logo image or upload it'
				),
				'customtext'=>array(
					'type'=>'variant','name'=>'customtext','value'=>get_bloginfo( 'name' ),'ttl'=>'Custom Text', 'hint'=>'Enter text for your logo'
				),
				'sitename'=>array(
					'type'=>'text','name'=>'sitename','value'=>'','ttl'=>'Front Page Title', 'hint'=>'Enter front page title'
				),
				'sitenamereg'=>array(
					'type'=>'text','name'=>'sitenamereg','value'=>'%s','ttl'=>'Site title', 'hint'=>'Enter expression for inner page title. Use %s for single page title output'
				),
				'favicon'=>array(
					'type'=>'file','name'=>'favicon','value'=>get_template_directory_uri().'/images/favicon.png','ttl'=>'Favicon', 'hint'=>'Enter full url to your favicon image or upload it'
				)
			)
		),
		'slider'=>array(
			'name'=>'Slider',
            'title'=>'幻灯片',
			'content'=>array(
				'txt'=>array(
					'type'=>'p','name'=>'','value'=>'Recommended thumbnail size is 990x409px'
				),
				'source'=>array(
					'type'=>'select', 'name'=>'source', 'value'=>'1', 'ttl'=>'Slider Source', 
					'params'=>array(
						'1'=>'Custom slides',
						'2'=>'Category',
						'3'=>'Posts',
						'4'=>'Pages'
					),'hint'=>'Select a slider source'
				),
				'slides'=>array(
					'type'=>'variants', 'name'=>'slides', 'depend'=>'source',
					'variants'=>array(
						'1'=>'custom_slides',
						'2'=>'category',
						'3'=>'posts',
						'4'=>'pages'
					)
				),
				'custom_slides'=>array(
					'type'=>'variant', 'value'=>array (
						'1' => Array (
								'img' => get_template_directory_uri().'/images/slides/1.jpg',
								'link' => home_url(),
								'ttl' => 'Slide # 1',
								'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts'
							),
						'2' => Array (
								'img' => get_template_directory_uri().'/images/slides/2.jpg',
								'link' => home_url(),
								'ttl' => 'Slide # 2',
								'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts'
							),
						'3' => Array (
								'img' => get_template_directory_uri().'/images/slides/3.jpg',
								'link' => home_url(),
								'ttl' => 'Slide # 3',
								'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts'
							),
						'4' => Array (
								'img' => get_template_directory_uri().'/images/slides/4.jpg',
								'link' => home_url(),
								'ttl' => 'Slide # 4',
								'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts'
							),
						'5' => Array (
								'img' => get_template_directory_uri().'/images/slides/5.jpg',
								'link' => home_url(),
								'ttl' => 'Slide # 5',
								'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts'
							)
					)
				),
				'category'=>array(
					'type'=>'variant', 'value'=>''
				),
				'posts'=>array(
					'type'=>'variant', 'value'=>''
				),
				'pages'=>array(
					'type'=>'variant', 'value'=>''
				),
				'showthumbnail'=>array(
					'type'=>'check','name'=>'showthumbnail','value'=>'1','ttl'=>'Show slide thumbnail'
				),
				'showtext'=>array(
					'type'=>'check','name'=>'showtext','value'=>'1','ttl'=>'Show text'
				),
				'showttl'=>array(
					'type'=>'check','name'=>'showttl','value'=>'1','ttl'=>'Show slide title'
				),
				'showhrefs'=>array(
					'type'=>'check','name'=>'showhrefs','value'=>'1','ttl'=>'Show links'
				),
				'effect'=>array(
					'type'=>'select', 'name'=>'effect', 'value'=>'fade', 'ttl'=>'Slider effect', 
					'params'=>array(
					    'blindX'=>'Blind X',
						'blindY'=>'Blind Y',
						'blindZ'=>'Blind Z',
						'cover'=>'Cover',
						'curtainX'=>'Curtain X',
						'curtainY'=>'Curtain Y',
						'fade'=>'Fade',
						'fadeZoom'=>'Fade zoom',
						'growX'=>'Grow X',
						'growY'=>'Grow Y',
						'scrollUp'=>'Scroll up',
						'scrollDown'=>'Scroll down',
						'scrollLeft'=>'Scroll left',
						'scrollRight'=>'Scroll right',
						'scrollHorz'=>'Scroll Horizontal',
						'scrollVert'=>'Scroll Vertical',
						'shuffle'=>'Shuffle',
						'slideX'=>'Slide X',
						'slideY'=>'Slide Y',
						'toss'=>'Toss',
						'turnUp'=>'Turn up',
						'turnDown'=>'Turn down',
						'turnLeft'=>'Turn left',
						'turnRight'=>'Turn right',
						'uncover'=>'Uncover',
						'wipe'=>'Wipe',
						'zoom'=>'Zoom'
					),'hint'=>'Choose an effect for slider'
				),
				'speed'=>array(
					'type'=>'text','name'=>'speed','value'=>'1000','ttl'=>'Speed (milliseconds)', 'hint'=>'Enter speed value for slider scroll'
				),
				'timeout'=>array(
					'type'=>'text','name'=>'timeout','value'=>'3000','ttl'=>'Timeout (milliseconds)','hint'=>'Enter timeout value for slider scroll'
				),
				'pause'=>array(
					'type'=>'text','name'=>'pause','value'=>'1000','ttl'=>'Pause (milliseconds)','hint'=>'Enter length of the pause for slider scroll'
				),
				'homepage'=>array(
					'type'=>'check','name'=>'homepage','value'=>'1','ttl'=>'Show slider on homepage'
				),
				'innerpage'=>array(
					'type'=>'check','name'=>'innerpage','value'=>'1','ttl'=>'Show slider on inner pages. If checked "Load content dynamically" this option is not considered.'
				)
			)
		),
		'layout'=>array(
			'name'=>'Layout',
            'title'=>'布局',
			'content'=>array(
				'pagelayout'=>array(
					'type'=>'sidebars', 'name'=>'pagelayout', 'value'=>'2', 'ttl'=>'Content Layout', 
					'params'=>array(
						'1'=>'No Sidebars',
						'2'=>'One Right Sidebar',
						'3'=>'One Left Sidebar',
						'4'=>'Left and Right Sidebars',
						'5'=>'2 Right Sidebars',
						'6'=>'2 Left Sidebars',
					), 'hint'=>'Content layout for all pages. You can specify content layout for simple page or post on page/post add/edit page.'
				),
				'dynamiccontent'=>array(
					'type'=>'check','name'=>'dynamiccontent','value'=>'1','ttl'=>'Load content dynamically', 'hint'=>'Turn on if you want to use dynamic content loader. This options allows to load pages without refresh.'
				),
				'dpagination'=>array(
					'type'=>'check','name'=>'dpagination','value'=>'1','ttl'=>'Load posts dynamically', 'hint'=>'Turn on if you want to use dynamic posts loader. This option allows to load posts when user scrolls page to bottom. It used instead of standard pagination.'
				),
				'related'=>array(
					'type'=>'check','name'=>'related','value'=>'1','ttl'=>'Show related posts?', 'hint'=>'Turn on if you want to show related posts on the post page'
				),
				'relatedcnt'=>array(
					'type'=>'text','name'=>'relatedcnt','value'=>'4','ttl'=>'Related posts count'
				),
				'colors'=>array(
					'type'=>'check','name'=>'colors','value'=>'1','ttl'=>'Multicolor background in related posts'
				),
				'cuttxton'=>array(
					'type'=>'check','name'=>'cuttxton','value'=>'1','ttl'=>'Cut content in the feed'
				),
				'cuttxt'=>array(
					'type'=>'text','name'=>'cuttxt','value'=>'397','ttl'=>'Length of content in the feed', 'hint'=>'If value more then 0, post in the feed, without excerpt and "read more" tag, will be cutted to that number of chars.'
				),
				'imgwidth'=>array(
					'type'=>'text','name'=>'imgwidth','value'=>'237','ttl'=>'Loop image width', 'hint'=>'Featured images width (px)'
				)
				,
				'imgheight'=>array(
					'type'=>'text','name'=>'imgheight','value'=>'150','ttl'=>'Loop image height', 'hint'=>'Featured images height (px)'
				),
				'imgpos'=>array(
					'type'=>'select', 'name'=>'imgpos', 'value'=>'alignleft', 'ttl'=>'Loop image position', 
					'params'=>array(
						'alignleft'=>'Left',
						'alignright'=>'Right',
						'aligncenter'=>'Center'
					), 'hint'=>'Featured images position'
				),
				'footerwidgets'=>array(
					'type'=>'check','name'=>'footerwidgets','value'=>'1','ttl'=>'Show footer widgets?'
				),
				'footertext'=>array(
					'type'=>'textarea','name'=>'footertext','value'=>'','ttl'=>'Custom Footer Text'
				),
			)
		),
		'social'=>array(
			'name'=>'Social Buttons',
            'title'=>'社交',
			'content'=>array(
				'showsocial'=>array(
					'type'=>'check','name'=>'showsocial','value'=>'1','ttl'=>'Show social box', 'hint'=>'Turn on if you want to show social box'
				),
				'socials'=>array( 'type'=>'socials', 'ttl'=>'Social Buttons', 'value'=>array (
						'1' => Array (
							'ttl' => 'Facebook like',
							'code'=>'<iframe src="//www.facebook.com/plugins/like.php?href=smt_social_url&amp;send=false&amp;layout=box_count&amp;width=50&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=65&amp;locale=en_US" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:65px;" allowTransparency="true"></iframe>',
							'show' => '1'
						),
						'2' => Array (
							'ttl' => 'Twitter',
							'code'=>'<a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="en">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>',
							'show' => '1'
						),
						'3' => Array (
							'ttl' => 'Google +1',
							'code'=>'<g:plusone size="tall"></g:plusone>
			<script type="text/javascript">
			  (function() {
				var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
				po.src = "https://apis.google.com/js/plusone.js";
				var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>',
							'show' => '1'
						),
						'4' => Array (
							'ttl' => 'Linked In',
							'code'=>'<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
			<script type="IN/Share" data-counter="top"></script>',
							'show' => '0'
						),
						'5' => Array (
							'ttl' => 'Facebook share',
							'code'=>'<a name="fb_share" type="box_count"></a> 
			<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript">
			</script>',
							'show' => '0'
						),
						'6' => Array (
							'ttl' => 'Reddit',
							'code'=>'<script type="text/javascript" src="http://www.reddit.com/static/button/button2.js"></script>',
							'show' => '0'
						),
						'7' => Array (
							'ttl' => 'Pinterest',
							'code'=>'<a href="http://pinterest.com/pin/create/button/?url=smt_social_url&media=smt_social_img_url&description=smt_social_title" class="pin-it-button" count-layout="vertical"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a><script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>',
							'show' => '0'
						),
						'8' => Array (
							'ttl' => 'Buffer',
							'code'=>'<a href="http://bufferapp.com/add" class="buffer-add-button" data-count="vertical">Buffer</a><script type="text/javascript" src="http://static.bufferapp.com/js/button.js"></script>',
							'show' => '0'
						),
						'9' => Array (
							'ttl' => 'Stumbleupon',
							'code'=>'<su:badge layout="5"></su:badge>
			 <script type="text/javascript"> 
			 (function() { 
				 var li = document.createElement("script"); li.type = "text/javascript"; li.async = true; 
				 li.src = window.location.protocol + "//platform.stumbleupon.com/1/widgets.js"; 
				 var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(li, s); 
			 })(); 
			 </script>',
							'show' => '0'
						),
						'10' => Array (
							'ttl' => 'DZone',
							'code'=>'<script type="text/javascript">var dzone_url = "[smt_social_url]";</script>
			<script type="text/javascript">var dzone_title = "[smt_social_title]";</script>
			<script type="text/javascript">var dzone_blurb = "[smt_social_title]";</script>
			<script type="text/javascript">var dzone_style = "1";</script>
			<script language="javascript" src="http://widgets.dzone.com/links/widgets/zoneit.js"></script>',
							'show' => '0'
						),
						'11' => Array (
							'ttl' => 'Topsy',
							'code'=>'<script type="text/javascript" src="http://button.topsy.com/widget/retweet-big?nick=[twitter_name]&url=[smt_social_url]"></script>',
							'show' => '0'
						),
						'12' => Array (
							'ttl' => 'Delicious',
							'code'=>'<img src="http://www.delicious.com/static/img/delicious.small.gif" height="10" width="10" alt="Delicious" />
            <a href="http://www.delicious.com/save" onclick="window.open("http://www.delicious.com/save?v=5&noui&jump=close&url="+encodeURIComponent("smt_social_url")+"&title="+encodeURIComponent("smt_social_title"),"delicious", "toolbar=no,width=550,height=550"); return false;"> Save </a>
			<span id="DD_DELICIOUS_AJAX_POST_ID">
			<div style="padding-top:3px">0</div>
			</span>',
							'show' => '0'
						),
						'13' => Array (
							'ttl' => 'Flattr',
							'code'=>'<script type="text/javascript">
(function() {
    var s = document.createElement("script");
    var t = document.getElementsByTagName("script")[0];

    s.type = "text/javascript";
    s.async = true;
    s.src = "http://api.flattr.com/js/0.6/load.js?mode=auto";

    t.parentNode.insertBefore(s, t);
 })();
    window.onload = function() {
        FlattrLoader.render({
            "uid": "flattr",
            "url": "smt_social_url",
            "title": "smt_social_title",
            "description": "smt_social_desc"
        }, "flattrBtn", "replace");
    }
</script>
<div id="flattrBtn"></div>',
							'show' => '0'
						),
						'14' => Array (
							'ttl' => 'Tumblr',
							'code'=>'<a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:61px; height:20px; background:url(http://platform.tumblr.com/v1/share_2.png) top left no-repeat transparent;">Share on Tumblr</a>',
							'show' => '0'
						),
						'15' => Array (
							'ttl' => 'Google Share',
							'code'=>'<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60"></div>
							<script type="text/javascript">
							window.___gcfg = {lang: "en-GB", parsetags: "onload"};
							(function() {
								var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
								po.src = "https://apis.google.com/js/plusone.js";
								var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script>
							',
							'show' => '0'
						)
					), 'hint'=>'Select social services you want to display.'
				)
			)
		),
		'seo'=>array(
			'name'=>'SEO',
            'title'=>'搜索引擎',
			'content'=>array(
				'description'=>array(
					'type'=>'text','name'=>'description','value'=>'','ttl'=>'站点描述'
				),
				'keywords'=>array(
					'type'=>'text','name'=>'keywords','value'=>'','ttl'=>'站点关键字'
				),
				'authormeta'=>array(
					'type'=>'text','name'=>'authormeta','value'=>'','ttl'=>'作者信息'
				),
                //NOINDEX ：告诉蜘蛛不要索引某个网页,奉告蜘蛛不要引
				'category'=>array(
					'type'=>'check','name'=>'category','value'=>'0','ttl'=>'&#139;noindex&#155; (爬虫)索引分类', 'hint'=>'Turn on to prevent all robots from indexing a category page on your site'
				),
				'tag'=>array(
					'type'=>'check','name'=>'tag','value'=>'0','ttl'=>'&#139;noindex&#155; (爬虫)索引关键词归档', 'hint'=>'Turn on to prevent all robots from indexing a tag page on your site'
				),
				'author'=>array(
					'type'=>'check','name'=>'author','value'=>'0','ttl'=>'&#139;noindex&#155; (爬虫)索引作者归档', 'hint'=>'Turn on to prevent all robots from indexing a author page on your site'
				),
				'search'=>array(
					'type'=>'check','name'=>'search','value'=>'0','ttl'=>'&#139;noindex&#155; (爬虫)索引搜索', 'hint'=>'Turn on to prevent all robots from indexing a search page on your site'
				),
				'day'=>array(
					'type'=>'check','name'=>'day','value'=>'0','ttl'=>'&#139;noindex&#155; (爬虫)索引每日归档', 'hint'=>'Turn on to prevent all robots from indexing a day archives page on your site'
				),
				'month'=>array(
					'type'=>'check','name'=>'month','value'=>'0','ttl'=>'&#139;noindex&#155; (爬虫)索引每月归档', 'hint'=>'Turn on to prevent all robots from indexing a month archives page on your site'
				),
				'year'=>array(
					'type'=>'check','name'=>'year','value'=>'0','ttl'=>'&#139;noindex&#155; (爬虫)索引每年归档', 'hint'=>'Turn on to prevent all robots from indexing a year archives page on your site'
				)
			)
		),
		'main-menu'=>array(
			'name'=>'Menu',
            'title'=>'菜单',
			'content'=>array(
				'effect'=>array(
					'type'=>'select', 'name'=>'effect', 'value'=>'standart', 'ttl'=>'Effect', 
					'params'=>array(
						'standart'=>'Standart (No Effect)',
						'slide'=>'Slide Down',
						'fade'=>'Fade',
						'fade_slide_right' => 'Fade &amp; Slide from Right',
						'fade_slide_left' => 'Fade &amp; Slide from Left'
					), 'hint'=>'Choose an effect for sub menus'
				),
				'speed'=>array(
					'type'=>'text','name'=>'speed','value'=>'200','ttl'=>'Speed', 'hint'=>'Enter speed value for sub menu showing'
				),
				'delay'=>array(
					'type'=>'text','name'=>'delay','value'=>'800','ttl'=>'Delay', 'hint'=>'Enter delay value for sub menu showing'
				),
				'arrows'=>array(
					'type'=>'check','name'=>'arrows','value'=>'0','ttl'=>'Show arrows', 'hint'=>'Show arrows for menu items that have sub menus'
				)
			)
		),
		'integration'=>array(
			'name'=>'Integration',
            'title'=>'集成',
			'content'=>array(
				'rss'=>array(
					'type'=>'text','name'=>'rss','value'=>'','ttl'=>'RSS URL', 'hint'=>'Enter RSS url'
				),
				'css'=>array(
					'type'=>'textarea','name'=>'css','value'=>'','ttl'=>'自定义 CSS', 'hint'=>'Enter your custom css code. Add only the css code without <style></style> style blocks'
				),
				'headcode'=>array(
					'type'=>'textarea','name'=>'headcode','value'=>'','ttl'=>'头部代码', 'hint'=>'Enter your custom header code (scripts, links or meta)'
				),
				'footercode'=>array(
					'type'=>'textarea','name'=>'footercode','value'=>'','ttl'=>'底部代码', 'hint'=>'Enter your custom html code for footer'
				)
			)
		),

        //内置翻译
		'translations'=>array(
			'name'=>'Translations ',
            'title'=>'翻译',
			'content'=>array(
				'general'=>array(
                    //ttl为 横条区
					'type'=>'group', 'name'=>'general', 'ttl'=>'通用界面',
					'content'=>array(
						'homelink'=>array( 
							'type'=>'text','name'=>'homelink','value'=>'','ttl'=>'网站首页'
						),
						'search'=>array( 
							'type'=>'text','name'=>'search','value'=>'','ttl'=>'搜索页'
						),
						'nothingfound'=>array(
							'type'=>'text','name'=>'nothingfound','value'=>'','ttl'=>'没有内容'
						)
					),
					'value'=>array (
						'homelink'=>'Home',//------------------------------ 这部分建议不翻译  就是 home最好
						'search'=>'搜索',//------------------------------
						'nothingfound'=>'没有结果，请重试.'//------------------------------
					)
				),
                //模版翻译部分
                //group为分组
				'sitemap'=>array(
					'type'=>'group', 'name'=>'sitemap', 'ttl'=>'自定义模版',
					'content'=>array(
						'readmore'=>array(
							'type'=>'text','name'=>'readmore','value'=>'','ttl'=>'查看更多'
						),
						'searchresults'=>array(
							'type'=>'text','name'=>'searchresults','value'=>'','ttl'=>'搜索结果'
						),
						'before-category'=>array(
							'type'=>'text','name'=>'before-category','value'=>'','ttl'=>'分类块'
						),
						'nextpage'=>array(
							'type'=>'text','name'=>'nextpage','value'=>'','ttl'=>'下一页'
						),
						'tags'=>array(
							'type'=>'text','name'=>'tags','value'=>'','ttl'=>'标签页'
						),
                        //value  这里为空，所以允许单独的values数据填充新的定义
						'relatedposts'=>array(
							'type'=>'text','name'=>'relatedposts','value'=>'猜你喜欢','ttl'=>'相关文章'
						),
						'norelatedposts'=>array(
							'type'=>'text','name'=>'norelatedposts','value'=>'没有相关推荐','ttl'=>'没有相关文章'
						),
						'permalink'=>array(
							'type'=>'text','name'=>'permalink','value'=>'','ttl'=>'永久链接'
						),
						'catarchive'=>array(
							'type'=>'text','name'=>'catarchive','value'=>'分类','ttl'=>'按分类归档'
						),
						'tagarchive'=>array(
							'type'=>'text','name'=>'tagarchive','value'=>'','ttl'=>'按标签归档'
						),
						'dailyarchives'=>array(
							'type'=>'text','name'=>'dailyarchives','value'=>'','ttl'=>'每日归档'
						),
						'monthlyarchives'=>array(
							'type'=>'text','name'=>'monthlyarchives','value'=>'','ttl'=>'每月归档'
						),
						'yearlyarchives'=>array(
							'type'=>'text','name'=>'yearlyarchives','value'=>'','ttl'=>'每年归档'
						),
						'blogarchives'=>array(
							'type'=>'text','name'=>'blogarchives','value'=>'','ttl'=>'博客归档'
						),
						'send'=>array(
							'type'=>'text','name'=>'send','value'=>'','ttl'=>'提交按钮'
						), 
						'feedbackttl'=>array(
							'type'=>'text','name'=>'feedbackttl','value'=>'','ttl'=>'联系表单'
						),
						'feedbackbefore'=>array(
							'type'=>'text','name'=>'feedbackbefore','value'=>'','ttl'=>'联系表单前的文字'
						),
						'altposts'=>array(
							'type'=>'text','name'=>'altposts','value'=>'','ttl'=>'Hint text for posts count in Tag Cloud'
						),
						'altpostss'=>array(
							'type'=>'text','name'=>'altpostss','value'=>'','ttl'=>'Hint text for posts count in Tag Cloud (plural)'
						), 
						'altcats'=>array(
							'type'=>'text','name'=>'altcats','value'=>'','ttl'=>'Hint text for category list'
						)
					),
                    //默认的翻译
                    //上面的字段都没有设置 value值，单独在这里统一设置，为了就是便于翻译
					'value'=>array (
						'readmore'=>'Read more ...',//------------------------------
						'searchresults'=>'搜索结果： \'%s\' 条',
						'before-category'=>'Posted in&nbsp',//------------------------------
						'nextpage'=>'下一页',//------------------------------
						'tags'=>'标签',//------------------------------
						'relatedposts'=>'你可能喜欢',
						'norelatedposts'=>'没有相关文章',
						'permalink'=>'本文永久链接： %1$s',//------------------------------
						'catarchive'=>'%s',//------------------------------
						'tagarchive'=>'%s tagged posts',//------------------------------
						'dailyarchives'=>'日 %s',//------------------------------
						'monthlyarchives'=>'月 %s',//------------------------------
						'yearlyarchives'=>'年 %s',//------------------------------
						'blogarchives'=>'归档',//------------------------------
						'send'=>'发送',//------------------------------
						'feedbackttl' =>'联系我们',
						'feedbackbefore'=>'星号为必填项',
						'altposts'=>'%s 条',
						'altpostss'=>'%s 条',
						'altcats'=>'查看所有 %s'
					)
				),
				'error'=>array(
					'type'=>'group', 'name'=>'error', 'ttl'=>'系统信息',
					'content'=>array(
						'errortext'=>array(
							'type'=>'text','name'=>'errortext','value'=>'','ttl'=>'404错误'
						),
						'errorsolution'=>array(
							'type'=>'text','name'=>'errorsolution','value'=>'','ttl'=>'404建议'
						),
						'emailok'=>array(
							'type'=>'text','name'=>'emailok','value'=>'','ttl'=>'邮件发送成功'
						)
					),
					'value'=>array(
						'errortext'=>'404 | 找不到了，请回到首页!',//------------------------------
						'errorsolution'=>'抱歉，找不到对应内容.',//------------------------------
						'emailok'=>'邮件发送成功!'//------------------------------
					)
				)
				,
				'comments'=>array(
					'type'=>'group', 'name'=>'comments', 'ttl'=>'用户评论',
					'content'=>array(
						'password'=>array(
							'type'=>'text','name'=>'password','value'=>'','ttl'=>'Password protected text'
						),
						'noresponses'=>array(
							'type'=>'text','name'=>'noresponses','value'=>'','ttl'=>'No responses text'
						),
						'oneresponse'=>array(
							'type'=>'text','name'=>'oneresponse','value'=>'','ttl'=>'One response text'
						),
						'multiresponse'=>array(
							'type'=>'text','name'=>'multiresponse','value'=>'','ttl'=>'Multiple responses text'
						),
						'formoneresponse'=>array(
							'type'=>'text','name'=>'formoneresponse','value'=>'','ttl'=>'One response text (comment\'s form)'
						),
						'formmultiresponse'=>array(
							'type'=>'text','name'=>'formmultiresponse','value'=>'','ttl'=>'Multiple responses text (comment\'s form)'
						),
						'comment_notes_before'=>array(
							'type'=>'text','name'=>'comment_notes_before','value'=>'','ttl'=>'Text before form'
						),
						'comment_notes_after'=>array(
							'type'=>'text','name'=>'comment_notes_after','value'=>'','ttl'=>'Text after form'
						),
						'closedcomments'=>array(
							'type'=>'text','name'=>'closedcomments','value'=>'','ttl'=>'Closed comments text'
						),
						'disabledcomments'=>array(
							'type'=>'text','name'=>'disabledcomments','value'=>'','ttl'=>'Disabled comments text'
						),
						'leavereply'=>array(
							'type'=>'text','name'=>'leavereply','value'=>'','ttl'=>'Leave a reply text'
						),
						'mustbe'=>array(
							'type'=>'text','name'=>'mustbe','value'=>'','ttl'=>'\'You must be\' text'
						),
						'loggedin'=>array(
							'type'=>'text','name'=>'loggedin','value'=>'','ttl'=>'\'logged in\' text'
						),
						'loggedinas'=>array(
							'type'=>'text','name'=>'loggedinas','value'=>'','ttl'=>'\'logged in as\' text'
						),
						'topostcomment'=>array(
							'type'=>'text','name'=>'topostcomment','value'=>'','ttl'=>'\'to post a comment\' text'
						),
						'logout'=>array(
							'type'=>'text','name'=>'logout','value'=>'','ttl'=>'Logout text'
						),
						'name'=>array(
							'type'=>'text','name'=>'name','value'=>'','ttl'=>'Name text'
						),
						'mail'=>array(
							'type'=>'text','name'=>'mail','value'=>'','ttl'=>'Mail text'
						),
						'website'=>array(
							'type'=>'text','name'=>'website','value'=>'','ttl'=>'Website text'
						),
						'addcomment'=>array(
							'type'=>'text','name'=>'addcomment','value'=>'','ttl'=>'Add comment text'
						),
						'says'=>array(
							'type'=>'text','name'=>'says','value'=>'','ttl'=>'\'says\' text'
						),
						'reply'=>array(
							'type'=>'text','name'=>'reply','value'=>'','ttl'=>'\'reply\' to threaded comment text'
						),
						'cancelreply'=>array(
							'type'=>'text','name'=>'cancelreply','value'=>'','ttl'=>'\'Cancel reply\' text'
						),
						'edit'=>array(
							'type'=>'text','name'=>'edit','value'=>'','ttl'=>'\'edit\' comment text, only visible to administrators'
						),
						'delete'=>array(
							'type'=>'text','name'=>'delete','value'=>'','ttl'=>'\'delete\' comment text, only visible to administrators'
						),
						'spam'=>array(
							'type'=>'text','name'=>'spam','value'=>'','ttl'=>'\'spam\' comment text, only visible to administrators'
						),
						'comment'=>array(
							'type'=>'text','name'=>'comment','value'=>'','ttl'=>'\'Comment\' textarea\'s title'
						),
						'nextcomments'=>array(
							'type'=>'text','name'=>'nextcomments','value'=>'','ttl'=>'\'Next comments\' link text'
						),
						'prevcomments'=>array(
							'type'=>'text','name'=>'prevcomments','value'=>'','ttl'=>'\'Previious comments\' link text'
						),
						'commenttime'=>array(
							'type'=>'text','name'=>'commenttime','value'=>'','ttl'=>'Comment time format (%1$s - date, %2$s - time)'
						)
					),
                    //翻译
					'value'=>array(
						'password'=>'This post is password protected. Enter the password to view comments.',//------------------------------
						'noresponses'=>'评论数：0',//------------------------------
						'oneresponse'=>'评论数：1',//------------------------------
						'multiresponse'=>'评论数：% ',//------------------------------
						'formoneresponse'=>'评论： %1$s',//------------------------------
						'formmultiresponse'=>'%2$s comments to %1$s',//------------------------------
						'comment_notes_before'=>'',//------------------------------
						'comment_notes_after'=>'You may use these HTML tags and attributes: %s',//------------------------------
						'closedcomments'=>'评论已关闭.',//------------------------------
						'disabledcomments'=>'评论已关闭',
						'leavereply'=>'回复',//------------------------------
						'mustbe'=>'You must be',//------------------------------
						'loggedin'=>'登录',//------------------------------
						'loggedinas'=>'',//------------------------------
						'topostcomment'=>'提交评论',//------------------------------
						'logout'=>'退出',//------------------------------
						'name'=>'姓名',
						'mail'=>'E-mail',
						'website'=>'网址',
						'addcomment'=>'评论',//------------------------------
						'says'=>'says',//------------------------------
						'reply'=>'回复',//------------------------------
						'cancelreply'=>'Cancel reply',//------------------------------
						'edit'=>'编辑',//------------------------------
						'delete'=>'删除',
						'spam'=>'Spam',
						'comment'=>'Comment',//------------------------------
						'nextcomments'=>'Newer comments',//------------------------------
						'prevcomments'=>'Older comments',//------------------------------
						'commenttime'=>'%1$s at %2$s'
					)
				),
				'pagination'=>array(
					'type'=>'group', 'name'=>'pagination', 'ttl'=>'分页',
					'content'=>array(
						'firstpage'=>array(
							'type'=>'text','name'=>'firstpage','value'=>'','ttl'=>'\'第一页\''
						),
						'lastpage'=>array(
							'type'=>'text','name'=>'lastpage','value'=>'','ttl'=>'\'最后一页\' '
						)
					),
					'value'=>array (
						'firstpage'=>'第一页',//------------------------------
						'lastpage'=>'最后一页'//------------------------------
					)
				)
				
			)
		),
		'contactform'=>array(
			'name'=>'Contact form',
            'title'=>'联系表单',
			'content'=>array(
				'txt'=>array(
					'type'=>'p','name'=>'','value'=>'To add contact form to your web site, create new page and choose "Contact form" template'
				),
				'text'=>array(
					'type'=>'textarea','name'=>'text','value'=>'联系方式：','ttl'=>'Text', 'hint'=>'Enter text for contact page.'
				),
				'address'=>array(
					'type'=>'text','name'=>'address','value'=>'Baker St 221b, London','ttl'=>'Map Address', 'hint'=>'Enter address or longitude and latitude for map center. For example "Baker St 221b, London" and "51.523795,-0.158465" have the same result.'
				),
				'details'=>array( 'type'=>'details', 'ttl'=>'Contact details', 'value'=>array (
						'1' => Array (
							'img' => get_template_directory_uri().'/images/feedback/geo.png',
							'content' => 'Baker St 221b, London'
						),
						'2' => Array (
							'img' => get_template_directory_uri().'/images/feedback/phone.png',
							'content' => '555-37-50'
						),
						'3' => Array (
							'img' => get_template_directory_uri().'/images/feedback/mail.png',
							'content' => 'mail@yoursite.com'
						),
						'4' => Array (
							'img' => get_template_directory_uri().'/images/feedback/icq.png',
							'content' => '000-000-000'
						),
						'5' => Array (
							'img' => get_template_directory_uri().'/images/feedback/skype.png',
							'content' => 'skype_id'
						)
					), 'hint'=>'Create your contact list. To add new contact fill the form and click "Add detail" button. You can upload your contact icon, or choose an icon from from standart presets.'
				),
				'contactform'=>array( 'type'=>'contactform', 'ttl'=>'联系我们', 'value'=>array (
						'1' => Array (
							'ttl' => '姓名',
							'req'=>'required',
							'type' => 'text'
						),
						'2' => Array (
							'ttl' => 'Email',
							'req'=>'required',
							'regex'=>"^[a-z0-9_\\\+-]+(\\\.[a-z0-9_\\\+-]+)*@[a-z0-9-]+(\\\.[a-z0-9-]+)*\\\.([a-z]{2,4})$",
							'type' => 'text'
						),
						'3' => Array (
							'ttl' => '内容',
							'req'=>'required',
							'type' => 'textarea'
						),
						'4' => Array (
							'ttl' => '关于',
							'req'=>'required',
							'type' => 'text'
						)
					), 'hint'=>'Create your contact form'
				),
				'email'=>array(
					'type'=>'text','name'=>'email','value'=>'mail@yourdomain.com','ttl'=>'Email for messages', 'hint'=>'The contact form will be submited this email. Do not leave this field empty to display contact form'
				)
			)
		),
		'contacts'=>array(
			'name'=>'Contacts',
            'title'=>'联系我们',
			'content'=>array(
				'txt'=>array(
					'type'=>'p','name'=>'','value'=>'
    <b>作者:</b> <a href="http://smthemes.com">SMThemes</a><br />
    <b>访问主题:</b> <a href="http://smthemes.com/'.$themename.'">http://smthemes.com/'.$themename.'</a><br />
    <b>技术支持:</b> <a href="http://smthemes.com/support/forum/'.$themename.'-free-wordpress-theme">http://smthemes.com/support/forum/'.$themename.'-free-wordpress-theme</a>'
				)
			)
		),
		'updates'=>array(
			'name'=>'Fresh themes',
            'title'=>'更新',
			'content'=>array(
				'updates'=>array(
					'type'=>'updates','name'=>'updates','value'=>'','ttl'=>'Catalog', 'hint'=>''
				),
			)
		),
		'activate'=>array(
			'name'=>'Theme Activation',
            'title'=>'激活主题',
			'content'=>array(
				'activator'=>array(
                    //根据type加载配置内容
					'type'=>'activator','name'=>'activator','value'=>'','ttl'=>'Activation Key', 'hint'=>'Enter your activation key'
				),
			)
		)
		
    );
	global $defaults;
	if (isset($USE_DIF_BTNS)&&$USE_DIF_BTNS) {
		$defaults=array(
			'youtube'=>"images/youtube.png",
			'vimeo'=>"images/vimeo.png",
			'btns'=>"images/buttons.png",
			'cols'=>"images/cols.png",
			'tooltips'=>"images/tooltips.png",
			'highlights'=>"images/highlight.png"
		); 
	} else $defaults="images/buttons.png";
    // Widgets
    global $widgets;
	$widgets = array(
        'banners-125' => '125x125 Banners'
    );
	global $slides;	
	$slides = array (
		
	);
?>