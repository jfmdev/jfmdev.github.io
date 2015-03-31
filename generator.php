<!DOCTYPE html>
<?php
$kuda = true;
if($kuda) {
	$title = "KudaLab";
	$subtitle = "Development of web, mobile and open source software";
	$googleAnalyticsCode = "UA-49400910-2";
} else {
	$title = "JFMDev";
	$subtitle = "Portfolio of personal software projects";
	$googleAnalyticsCode = "UA-49400910-3";
}
$linkIcons = array(
	"GitHub" => "img/github_16.png",
	"Demo" => "img/web.png",
	"Google Play" => "img/google_play_16.png",
	"Amazon" => "img/amazon_16.png",
	"Google Code" => "img/google_code_16.png",
	"Chrome Web Store" => "img/chrome_web_store_16.png",
	"Demo (mobile)" => "img/mobile_phone.png",
	"Demo (desktop)" => "img/desktop_computer.png",
	"Firefox Marketplace" => "img/firefox_marketplace_16.png",
	"GIMP Plugin Registry" => "img/gimp_16.png"
);
?>
<html>
    <head>
        <title><?php echo $title . " - " . $subtitle; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="favicon.ico" />
        
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '<?php echo $googleAnalyticsCode; ?>', 'auto');
            ga('send', 'pageview');
        </script>
        
        <link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap-3.1.1.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme-3.1.1.min.css">
        <link rel="stylesheet" href="css/kuda.css">
        
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/jqscrollanim-1.1.min.js"></script>
        <script type="text/javascript" src="js/jqscrollfix.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                // Resize intro section to window's height or to her minimum height..
                $(window).resize( function(event) {
                    $("#intro").height( MyIntroHeight() );
                });			
                $("#intro").height( MyIntroHeight() );

                // Add behavior of posiition:fixed to navigation bar.
                $('#menu_container').scrollFix({fixClass: 'moving'});

                // Add fade animation, triggered by the scroll, to the list of projects and to the contact form.
                $('div.proyecto').jqScrollAnim({
                    rep: {start: 50, end: 150},
                    rew: {start: -150, end: -50},
                    animation: {type:'fade'} 				
                });

                $("#contacto iframe").jqScrollAnim({
                    rep: {start: 50, end: 250},
                    rew: {start: -150, end: -50},
                    animation: {type:'fade'} 				
                });
				
                // Track the click's events (to links) in Google Analytics.
                $("a").click(function() {
                    ga('send', 'event', 'link', 'click', $(this).attr("href"), 1);
                });
            });
			
            // Calculate the best height for the intro section.
            function MyIntroHeight() {
                    var winH = $(window).height();
                    var sloH = $("#slogan").outerHeight();
                    var sloT = $("#slogan").offset().top;
                    console.log("winH: " + winH + " - sloH: " + sloH + " - sloT: " + sloT);
                    return winH > (sloH + sloT)? winH : (sloH + sloT);
            }
        </script>
    </head>
    <body>
        
        <div id="intro">
            <div class="logo">
                <h1><a name="top">
                    <img src="img/kuda.png" alt="" title="<?php echo $title . " - " . $subtitle; ?>"/>
                    <?php echo $title; ?>
                </a></h1>
            </div>
            <div id="slogan"><?php echo $subtitle; ?></div>
        </div>

        <div id="menu_container" style="z-index:40">
            <div id="main_menu" class="menu_simple">
                <ul>
                   <li><a href='#top'>Top</a></li>
                   <li><a href='#portfolio'>Projects</a></li>
                   <li><a href='#perfiles'>Profiles</a></li>
                   <li><a href='#contacto'>Contact</a></li>
                </ul>
            </div>
        </div>
        
        <br/>
        
        <div id="proyectos">
            <h2><a name="portfolio">List of projects</a></h2>
            
			<br/>
			
			<?php
			$projects = array(
				array(
					"name" => "NeonCamera",
					"caption" => "A camera app that allows to take photos with a neon lights effect",
					"icon" => "img/neon_camera.png",
					"category" => "Application",
					"platform" => "Android",
					"tags" => array("Java", "Android", "BoofCV"),
					"links" => array (
						"Google Play" => "https://play.google.com/store/apps/details?id=ar.com.jfmdev.neoncamera",
						"Amazon" => "http://www.amazon.com/KudaLab-NeonCamera/dp/B00UXKG8WG/ref=sr_1_1?ie=UTF8&qid=1426841509&sr=8-1&keywords=neoncamera"
					)
				),
				array(
					"name" => "TelemarketingLogs",
					"caption" => "A HTML5 app for track marketing calls",
					"icon" => "img/call_logs.png",
					"category" => "Application",
					"platform" => "Web",
					"tags" => array("JavaScript", "AngularJS", "TaffyDB", "Foundation", "Open Source"),
					"links" => array (
						"GitHub" => "https://github.com/jfmdev/TelemarketingLogs",
						"Demo" => "http://jfmdev.github.io/TelemarketingLogs/"
					)
				),
				array(
					"name" => "Just To Do",
					"caption" => "An application for manage to-do lists",
					"icon" => "img/just_to_do.png",
					"category" => "Application",
					"platform" => "Android",
					"tags" => array("Java", "Android", "XML", "CouchBase"),
					"links" => array (
						"Google Play" => "https://play.google.com/store/apps/details?id=ar.com.jfmdev.justtodo",
						"Amazon" => "http://www.amazon.com/KudaLab-Just-To-Do/dp/B00UXL1GCW/ref=sr_1_1?ie=UTF8&qid=1426841575&sr=8-1&keywords=justtodo"
					)
				),
				array(
					"name" => "ngAddressBook",
					"caption" => "A HTML5 sample app for learning AngularJS, Bootstrap and PouchDB",
					"icon" => "img/address_book.png",
					"category" => "Application",
					"platform" => "Web",
					"tags" => array("JavaScript", "AngularJS", "PouchDB", "Bootstrap", "QUnit", "Selenium", "HTML5", "Open Source"),
					"links" => array (
						"GitHub" => "https://github.com/jfmdev/ngAddressBook",
						"Demo" => "http://jfmdev.github.io/ngAddressBook/"
					)
				),
				array(
					"name" => "SaVaGe",
					"caption" => "A library of web widgets implemented with SVG",
					"icon" => "img/savage.png",
					"category" => "Library",
					"platform" => "Web",
					"tags" => array("SVG", "JavaScript", "D3.js", "Open Source"),
					"links" => array (
						"GitHub" => "https://github.com/jfmdev/SaVaGe",
						"Demo" => "http://jfmdev.github.io/SaVaGe/"
					)
				),
				array(
					"name" => "Histrix Calculator",
					"caption" => "A JavaScript calculator with the same functionalities that the classic calculator from Windows XP / Vista",
					"icon" => "img/histrix_calculator.png",
					"category" => "Application",
					"platform" => "Web & Mobile",
					"tags" => array("HTML5", "JavaScript", "jQuery", "jQuery Mobile", "Apache Cordova", "Open Source"),
					"links" => array (
						"Google Code" => "http://code.google.com/p/histrix-calculator/",
						"Google Play" => "https://play.google.com/store/apps/details?id=ar.com.daidalos.histrix",
						"Chrome Web Store" => "https://chrome.google.com/webstore/detail/histrix-calculator/lgdfflejppjaglpjmkigldlpmkhfppcc",
						"Demo (mobile)" => "https://googledrive.com/host/0B4_1sNUgxqKBbFlXOEVfQi11bFE/index.html",
						"Demo (desktop)" => "https://googledrive.com/host/0B4_1sNUgxqKBZkVOWTkyTWJaUHM/index.html"
					)
				),
				array(
					"name" => "aFileDialog",
					"caption" => "A library that implements a simple and easy to use file chooser",
					"icon" => "img/afiledialog.png",
					"category" => "Library",
					"platform" => "Android",
					"tags" => array("Java", "Android", "Open Source"),
					"links" => array (
						"Google Code" => "http://code.google.com/p/afiledialog/",
						"Google Play" => "https://play.google.com/store/apps/details?id=ar.com.daidalos.afiledialog.test"
					)
				),
				array(
					"name" => "Flappy Clone",
					"caption" => 'A HTML5 game, clone of Flappy Bird, developed for test the "Phaser" framework',
					"icon" => "img/flappy_clone.png",
					"category" => "Game",
					"platform" => "Web",
					"tags" => array("HTML5", "JavaScript", "Phaser"),
					"links" => array (
						"Chrome Web Store" => "https://chrome.google.com/webstore/detail/flappy-clone/epmgkgpllfpninngnlbhccijogfaihgm",
						"Firefox Marketplace" => "https://marketplace.firefox.com/app/flappy-clone/",
						"Demo (mobile)" => "https://googledrive.com/host/0B4_1sNUgxqKBM3llLTJPblQ3WlU/flappyclone.html",
						"Demo (desktop)" => "https://googledrive.com/host/0B4_1sNUgxqKBM3llLTJPblQ3WlU/flappyclone-landscape.html"
					)
				),
				array(
					"name" => "&mu;Stopwatch",
					"caption" => "A HTML5 stopwatch designed as a sample app for Firefox OS",
					"icon" => "img/ustopwatch.png",
					"category" => "Application",
					"platform" => "Web & Mobile",
					"tags" => array("HTML5", "JavaScript", "OnsenUI", "AngularJS", "Open Source"),
					"links" => array (
						"GitHub" => "https://github.com/jfmdev/uStopwatch",
						"Firefox Marketplace" => "https://marketplace.firefox.com/app/%C2%B5stopwatch/",
						"Demo (mobile)" => "http://jfmdev.github.io/uStopwatch/"
					)
				),
				array(
					"name" => "Landscape Sliding Puzzles",
					"caption" => "A HTML5 puzzle game",
					"icon" => "img/sliding_puzzles.png",
					"category" => "Game",
					"platform" => "Web",
					"tags" => array("HTML5", "JavaScript", "jQuery"),
					"links" => array (
						"Chrome Web Store" => "https://chrome.google.com/webstore/detail/landscape-sliding-puzzles/beifpgdjlnpfinmngokhdjmpokbeacfi",
						"Firefox Marketplace" => "https://marketplace.firefox.com/app/landscape-sliding-puzzles/"
					)
				),
				array(
					"name" => "Landscape Jigsaw Puzzles",
					"caption" => "A HTML5 puzzle game",
					"icon" => "img/jigsaw_puzzles.png",
					"category" => "Game",
					"platform" => "Web",
					"tags" => array("HTML5", "JavaScript", "jQuery"),
					"links" => array (
						"Chrome Web Store" => "https://chrome.google.com/webstore/detail/landscape-jigsaw-puzzles/lpkjfbacnmennednnkmlfahhoiefeaif"
					)
				),
				array(
					"name" => "jqJigsawPuzzle",
					"caption" => "A library that lets to create jigsaw puzzles in web pages",
					"icon" => "img/library.png",
					"sticker" => "img/jquery_80.png",
					"category" => "Library",
					"platform" => "Web",
					"tags" => array("HTML5", "JavaScript", "jQuery", "Open Source"),
					"links" => array (
						"Google Code" => "http://code.google.com/p/jq-jigsaw-puzzle/",
					)
				),
				array(
					"name" => "jqEye",
					"caption" => "A library which allows to create eyes that follow the mouse",
					"icon" => "img/library.png",
					"sticker" => "img/jquery_80.png",
					"category" => "Library",
					"platform" => "Web",
					"tags" => array("HTML5", "JavaScript", "jQuery", "Open Source"),
					"links" => array (
						"GitHub" => "https://github.com/jfmdev/jqEye",
					)
				),
				array(
					"name" => "jqScrollAnim",
					"caption" => "A library that allows to define animations that triggers with the vertical scroll",
					"icon" => "img/library.png",
					"sticker" => "img/jquery_80.png",
					"category" => "Library",
					"platform" => "Web",
					"tags" => array("HTML5", "JavaScript", "jQuery", "Open Source"),
					"links" => array (
						"GitHub" => "https://github.com/jfmdev/jqScrollAnim",
					)
				),
				array(
					"name" => "jqSimpleConnect",
					"caption" => "A lightweight library which allows to visually connect elements in a web page",
					"icon" => "img/library.png",
					"sticker" => "img/jquery_80.png",
					"category" => "Library",
					"platform" => "Web",
					"tags" => array("HTML5", "JavaScript", "jQuery", "Open Source"),
					"links" => array (
						"Google Code" => "http://code.google.com/p/jq-simple-connect/",
					)
				),
				array(
					"name" => "Lobo plugins",
					"caption" => "A collections of plugins for the content management system WolfCMS",
					"icon" => "img/plugin.png",
					"sticker" => "img/wolfcms_48.png",
					"category" => "Plugin",
					"platform" => "Web",
					"tags" => array("HTML", "PHP", "XML", "NicEdit", "Wolf CMS", "Open Source"),
					"links" => array (
						"Google Code" => "http://code.google.com/p/loboplugins/",
					)
				),
				array(
					"name" => "Python-Fu samples",
					"caption" => "A group of scripts whose objective is to serve as templates and code samples for scripting in GIMP",
					"icon" => "img/plugin.png",
					"sticker" => "img/gimp_48.png",
					"category" => "Plugin",
					"platform" => "PC",
					"tags" => array("Python", "GIMP", "Open Source"),
					"links" => array (
						"Google Code" => "http://code.google.com/p/python-fu-samples/",
						"GIMP Plugin Registry" => "http://registry.gimp.org/node/28124"
					)
				)
			);
			
			for($i=0; $i<count($projects); $i++) {
				$proj = $projects[$i];
                                if($i % 2 == 0) { echo '<div class="row">'; }
				?>
				<div class="col-md-6">
                    <div class="proyecto">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a name="TelemarketingLogs"><strong><?php echo $proj['name'] ?></strong><small> - <?php echo $proj['caption'] ?></small></a>
                            </div>
                            <div class="panel-body">
                                <div class="icono">
                                    <img src="<?php echo $proj['icon'] ?>" alt=""/>
									<?php if(isset($proj['sticker'])) echo '<img src="' . $proj['sticker'] . '" class="sticker" alt=""/>'; ?>
                                </div>
                                <div class="descripcion">
                                    <table><tr>
                                            <td class="first">Category</td>
                                            <td class="second"><?php echo $proj['category'] ?></td>
                                        </tr><tr>
                                            <td class="first">Platform</td>
                                            <td class="second"><?php echo $proj['platform'] ?></td>
                                        </tr><tr>
                                            <td class="first">Tags</td>
                                            <td class="second">
											<?php
											$tags = $proj['tags'];
											for($j=0; $j<count($tags); $j++) {
												echo '<span class="label label-primary">' . $tags[$j] . '</span> ';
											}
											?>
                                            </td>
                                        </tr><tr>
                                            <td class="first">Links</td>
                                            <td class="second">
											<?php
											$links = $proj['links'];
											foreach($links as $key => $value) {
												?>
												<span class="label label-info"><a href="<?php echo $value; ?>" target="_blank"><img src="<?php echo $linkIcons[$key]; ?>" class="iconito" alt=""/> <?php echo $key; ?></a></span>  
												<?php
											}
											?>
                                            </td>
                                    </tr></table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
                                if(($i % 2 == 1) || ($i == count($projects) - 1)) { echo '</div>'; }
			}
			?>
        </div> <!-- end proyectos -->
            
        <br/>

        <div id="perfiles">
            <div class="border_bottom"></div>

			<div class="row">
				<div class="content col-md-8 col-md-offset-2">
					<h2><a name="perfiles">Profiles</a></h2>
					<br/>
					<div class="row">
						<div class="col-md-4 col-md-offset-2">
							<a href="https://github.com/jfmdev" title="KudaLab at GitHub" target="_blank">
								<img src="img/github_96.png" class="iconito" alt=""/>
								<br/>GitHub
							</a>
						</div>
						<div class="col-md-4">
							<a href="https://code.google.com/u/jfmdev/" title="KudaLab at Google Code" target="_blank">
								<img src="img/google_code_96.png" class="iconito" alt=""/>
								<br/>Google Code
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<a href="https://play.google.com/store/apps/developer?id=KudaLab" title="KudaLab at Google Play" target="_blank">
								<img src="img/google_play_96.png" class="iconito" alt=""/>
								<br/>Google Play
							</a>
						</div>
						<div class="col-md-4">
							<a href="https://marketplace.firefox.com/search?author=KudaLab" title="KudaLab at Firefox Marketplace" target="_blank">
								<img src="img/firefox_marketplace_96.png" class="iconito" alt=""/>
								<br/>Firefox Marketplace
							</a>
						</div>
						<div class="col-md-4">
							<a href="http://www.amazon.com/s/ref=bl_sr_mobile-apps/182-9019147-6851629?_encoding=UTF8&field-brandtextbin=KudaLab&node=2350149011" title="KudaLab at Amazon" target="_blank">
								<img src="img/amazon_96.png" class="iconito" alt=""/>
								<br/>Amazon
							</a>
						</div>
					</div>
					<br/>
				</div>
            </div>            
            <br/> &nbsp;
            <div class="border_top"></div>
        </div>

        <br/>
        
        <div id="contacto">
            <a name="contacto">&nbsp;</a>
            
            <iframe height="380" allowTransparency="true" frameborder="0" scrolling="no" src="https://kudalab.wufoo.com/embed/zg46l3l0zvmmrs/">
                <p class="nice">If you have any doubt about a project or you need a developer, do not hesitate in 
                <a href="https://kudalab.wufoo.com/forms/zg46l3l0zvmmrs/" title="KudaLab - Contact">send a message.</a><p/>
            </iframe>

            <br/> &nbsp;
        </div>	
        
    </body>
</html>
