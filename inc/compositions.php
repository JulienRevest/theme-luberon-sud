<?php

/**
 * Compositions
 *
 * @package luberon-sud
 */

/**
 * Remove default Gutenberg block patterns
 */
function elabo_remove_patterns() {
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'elabo_remove_patterns' );


if ( function_exists( 'register_block_pattern' ) ) {

	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category( 'template_page', array( 'label' => __( 'Gabarits de page' ) ) );
		register_block_pattern_category( 'template_block', array( 'label' => __( 'Gabarits de bloc' ) ) );
	}

	/**
	 *  Modèle page village
	 */
	register_block_pattern(
		'article-compo/article-custom',
		array(
			'title'       => __( 'Modèle page village' ),
			'categories'  => array( 'template_page' ),
			'description' => __( 'Modèle de page village avec sommaire' ),
			'content'     => '<!-- wp:cover {"overlayColor":"color-purple","minHeight":260,"align":"full","className":"heading"} -->
			<div class="wp-block-cover alignfull has-color-purple-background-color has-background-dim heading" style="min-height:260px"><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Interdum velit laoreet id donec ultrices tincidunt arcu non. Lorem sed risus ultricies tristique nulla. Natoque penatibus et magnis dis parturient montes nascetur. Adipiscing elit ut aliquam purus sit. Vitae congue eu consequat ac felis donec.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:more -->
			<!--more-->
			<!-- /wp:more --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":217,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/map-ansouis.png" alt="" class="wp-image-217"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:cover -->
			
			<!-- wp:create-block/content-summary -->
			<!-- wp:heading -->
			<h2>LOREM IPSUM DOLOR SIT AMET</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"className":"is-style-default-text"} -->
			<p class="is-style-default-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere dui ante, id euismod enim pharetra id. In gravida pharetra dolor eget molestie. Praesent rhoncus, lorem at mollis venenatis, risus tellus tempus quam, vitae interdum dui enim nec leo. In pulvinar ullamcorper aliquam. Ut tincidunt pretium mi, id elementum ligula mollis eget. Fusce ac risus vitae dolor congue tempus sit amet vel nisl. Praesent efficitur nisi ut tortor pretium, eget pharetra mi viverra. Cras aliquam aliquet iaculis. Proin porta lacinia ipsum non commodo. Nunc ac posuere metus, et vestibulum magna. Aliquam erat volutpat. Donec eget laoreet leo. Suspendisse potenti. Proin imperdiet pharetra erat sed dictum. In porttitor eros sit amet lacus ullamcorper tristique.</p>
			<!-- /wp:paragraph -->
			<!-- /wp:create-block/content-summary -->
			
			<!-- wp:group {"align":"full","backgroundColor":"color-green","textColor":"color-white","className":"block-info-green"} -->
			<div class="wp-block-group alignfull block-info-green has-color-white-color has-color-green-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading -->
			<h2><span class="has-inline-color has-color-white-color">Vous aimez nos villages ?</span></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"is-style-resize-text"} -->
			<p class="is-style-resize-text">Partez à la découverte des villages du sud Luberon</p>
			<!-- /wp:paragraph -->

			<!-- wp:shortcode -->
			[lst_random_villages_cards limit=4]
			<!-- /wp:shortcode -->

			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white"} -->
			<div class="wp-block-button is-style-button-white"><a class="wp-block-button__link" href="https://luberon-sud-tourisme.e-labo.io/les-villages/">Tous les villages du sud Luberon</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:group -->',
		)
	);


	/**
	 *  Modèle page catégorie de niveau 1
	 */
	register_block_pattern(
		'category-compo/category-custom',
		array(
			'title'       => __( 'Modèle catégorie 1er niveau' ),
			'categories'  => array( 'template_page' ),
			'description' => __( 'Modèle de page catégorie de niveau 1' ),
			'content'     => '<!-- wp:cover {"overlayColor":"color-purple","minHeight":260,"align":"full","className":"heading"} -->
			<div class="wp-block-cover alignfull has-color-purple-background-color has-background-dim heading" style="min-height:260px"><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Interdum velit laoreet id donec ultrices tincidunt arcu non. Lorem sed risus ultricies tristique nulla. Natoque penatibus et magnis dis parturient montes nascetur. Adipiscing elit ut aliquam purus sit. Vitae congue eu consequat ac felis donec.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:more -->
			<!--more-->
			<!-- /wp:more --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:shortcode -->
			[lst_ad_zone id=1]
			<!-- /wp:shortcode --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:cover -->
			
			<!-- wp:heading -->
			<h2>A ne pas manquer</h2>
			<!-- /wp:heading -->
			
			<!-- wp:shortcode -->
			[entities_category post_type="ad_fete_et_manifesta" limit=3 orderby="rand" template="event-template"]
			<!-- /wp:shortcode -->
			
			<!-- wp:heading -->
			<h2>Titre H2</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"left","className":"is-style-resize-text"} -->
			<p class="has-text-align-left is-style-resize-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:grids/section {"blockId":"13c267d2-b991-4c9b-8561-f2676117037c","grid":"1","columns":12,"rows":6} -->
			<!-- wp:grids/area {"blockId":"4dd5649e-343d-4cfe-be05-fa8a5e9b2c7b","column":{"start":1,"end":3},"row":{"start":1,"end":1},"order":1} -->
			<!-- wp:acf/card {"id":"block_60a3d887c9b90","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"25bffe08-d769-43ae-a223-d801ca447761","column":{"start":4,"end":9},"row":{"start":1,"end":1},"order":2} -->
			<!-- wp:acf/card {"id":"block_60a3d8c9abd97","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"landscape","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"02346ee4-eb96-4b34-a8f6-88e71c4ae32a","column":{"start":10,"end":12},"row":{"start":1,"end":1},"order":3} -->
			<!-- wp:acf/card {"id":"block_60a3d8d8abd98","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"18299d0b-c874-4257-a934-51fe7ccc045f","column":{"start":1,"end":3},"row":{"start":2,"end":2},"order":4} -->
			<!-- wp:acf/card {"id":"block_60a3d8f0abd99","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"e45b1337-a301-45ba-b672-86ebd121cfbe","column":{"start":4,"end":6},"row":{"start":2,"end":2},"order":5} -->
			<!-- wp:acf/card {"id":"block_60a3d8f9abd9a","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"6fa1738a-363d-41bf-b835-0a8a6ee84089","column":{"start":7,"end":9},"row":{"start":2,"end":2},"order":6} -->
			<!-- wp:acf/card {"id":"block_60a3d900abd9b","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"32370b4f-8df0-489e-968b-54bebf11a84d","column":{"start":10,"end":12},"row":{"start":2,"end":2},"order":7} -->
			<!-- wp:acf/card {"id":"block_60a3d907abd9c","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"096d4a9a-9efd-4a27-b778-58491d3051eb","column":{"start":1,"end":6},"row":{"start":3,"end":3},"order":8} -->
			<!-- wp:acf/card {"id":"block_60a3d914abd9d","name":"acf/card","data":{"card_page":["645"],"_card_page":"field_609153211ad26","card_format":"landscape","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"d8a3864f-5a85-4a46-82d6-aa94c7f8489a","column":{"start":7,"end":12},"row":{"start":3,"end":3},"order":9} -->
			<!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/reserver-en-ligne.jpg","id":661,"dimRatio":30,"overlayColor":"color-black"} -->
			<div class="wp-block-cover has-background-dim-30 has-color-black-background-color has-background-dim"><img class="wp-block-cover__image-background wp-image-661" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/reserver-en-ligne.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"color-white","className":"is-style-title6"} -->
			<h3 class="is-style-title6 has-color-white-color has-text-color">Gagnez du temps et réserver vos activités en ligne</h3>
			<!-- /wp:heading -->
			
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white"} -->
			<div class="wp-block-button is-style-button-white"><a class="wp-block-button__link" href="#">Je réserve en ligne</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover -->
			<!-- /wp:grids/area -->
			<!-- /wp:grids/section -->
			
			<!-- wp:group {"align":"full","backgroundColor":"color-green","textColor":"color-white","className":"block-info-green"} -->
			<div class="wp-block-group alignfull block-info-green has-color-white-color has-color-green-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading -->
			<h2><span class="has-inline-color has-color-white-color">Titre de la rubrique</span></h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"className":"is-style-resize-text"} -->
			<p class="is-style-resize-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. <a href="#">Lectus proin nibh nisl condimentum</a>. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/idees-sejour.jpg","id":426,"minHeight":350} -->
			<div class="wp-block-cover has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-426" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/idees-sejour.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Thématique 1</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/04/village-ansouis.jpg","id":50,"dimRatio":30,"focalPoint":{"x":"0.87","y":"0.51"},"minHeight":350} -->
			<div class="wp-block-cover has-background-dim-30 has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-50" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/04/village-ansouis.jpg" style="object-position:87% 51%" data-object-fit="cover" data-object-position="87% 51%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Thématique 2</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg","id":430,"dimRatio":30,"focalPoint":{"x":"0.00","y":"0.50"},"minHeight":350} -->
			<div class="wp-block-cover has-background-dim-30 has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-430" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg" style="object-position:0% 50%" data-object-fit="cover" data-object-position="0% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Thématique 3</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:group -->',
		)
	);

	/**
	 *  Modèle page agenda
	 */
	register_block_pattern(
		'agenda-compo/agenda-custom',
		array(
			'title' => __( 'Modèle page Agenda' ),
			'categories'  => array( 'template_page' ),
			'description' => __( 'Modèle de page agenda' ),
			'content' => '<!-- wp:cover {"overlayColor":"color-purple","minHeight":260,"align":"full","className":"heading"} -->
			<div class="wp-block-cover alignfull has-color-purple-background-color has-background-dim heading" style="min-height:260px"><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Interdum velit laoreet id donec ultrices tincidunt arcu non. Lorem sed risus ultricies tristique nulla. Natoque penatibus et magnis dis parturient montes nascetur. Adipiscing elit ut aliquam purus sit. Vitae congue eu consequat ac felis donec.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:more -->
			<!--more-->
			<!-- /wp:more --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:shortcode -->
			[lst_ad_zone id=1]
			<!-- /wp:shortcode --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:cover -->
			
			<!-- wp:heading -->
			<h2>À ne pas manquer</h2>
			<!-- /wp:heading -->
			
			<!-- wp:group -->
			<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:acf/card {"id":"block_60c08c63ecfbb","name":"acf/card","data":{"card_page":"","_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			
			<!-- wp:shortcode -->
			[entities_category post_type="ad_fete_et_manifesta" limit=3 orderby="rand" template="event-template"]
			<!-- /wp:shortcode --></div></div>
			<!-- /wp:group -->
			
			<!-- wp:heading -->
			<h2>Titre agenda</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:grids/section {"blockId":"219830bb-9213-43aa-b3b1-26b5d66722d5","grid":"1","columns":12,"rows":6} -->
			<!-- wp:grids/area {"blockId":"628a8772-588b-4d78-8f77-5c282c9a450e","column":{"start":1,"end":3},"row":{"start":1,"end":1},"order":1} -->
			<!-- wp:acf/card {"id":"block_60c08eb6ecfc0","name":"acf/card","data":{"card_page":["1075"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"7608c587-ce4f-4737-8697-d7b668fafba7","column":{"start":4,"end":9},"row":{"start":1,"end":1},"order":2} -->
			<!-- wp:acf/card {"id":"block_60c08ef2ecfc2","name":"acf/card","data":{"card_page":["1084"],"_card_page":"field_609153211ad26","card_format":"landscape","_card_format":"field_609157d52aba4","card_icon":"garland","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"b9848802-dd3e-4ae1-a8db-f39496668860","column":{"start":10,"end":12},"row":{"start":1,"end":1},"order":3} -->
			<!-- wp:acf/card {"id":"block_60c08f0aecfc3","name":"acf/card","data":{"card_page":["1081"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"tickets","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"b0a5a273-682f-4267-852c-60942bde194a","column":{"start":1,"end":3},"row":{"start":2,"end":2},"order":4} -->
			<!-- wp:acf/card {"id":"block_60c08f1fecfc4","name":"acf/card","data":{"card_page":["1087"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"family","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"ace98735-e986-417a-89c0-289285aaab6b","column":{"start":4,"end":6},"row":{"start":2,"end":2},"order":5} -->
			<!-- wp:acf/card {"id":"block_60c08f34ecfc5","name":"acf/card","data":{"card_page":["1078"],"_card_page":"field_609153211ad26","card_format":"portrait","_card_format":"field_609157d52aba4","card_icon":"event","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			
			<!-- wp:grids/area {"blockId":"ae5a3d27-2c19-431d-a8cd-5773f78f6007","column":{"start":7,"end":12},"row":{"start":2,"end":2},"order":6} -->
			<!-- wp:acf/card {"id":"block_60c08f76ecfc6","name":"acf/card","data":{"card_page":["1093"],"_card_page":"field_609153211ad26","card_format":"landscape","_card_format":"field_609157d52aba4","card_icon":"wellness","_card_icon":"field_6092478c299dc"},"align":"","mode":"preview"} /-->
			<!-- /wp:grids/area -->
			<!-- /wp:grids/section -->
			
			<!-- wp:spacer {"height":50} -->
			<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			
			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="has-text-align-center"><span class="has-inline-color has-color-purple-color">Vous êtes organisateurs d\'événements?</span></h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Annoncez vos événements en remplissant notre formulaire pour paraître sur notre site.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link">J\'annonce mon événement</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
			
			<!-- wp:group {"align":"full","backgroundColor":"color-green","textColor":"color-white","className":"block-info-green"} -->
			<div class="wp-block-group alignfull block-info-green has-color-white-color has-color-green-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading -->
			<h2>Explorer le sud luberon</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"className":"is-style-resize-text"} -->
			<p class="is-style-resize-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/Vue-Ansouis-©luberonsudtourisme.jpg","id":12487,"focalPoint":{"x":"0.54","y":"0.09"},"minHeight":168,"minHeightUnit":"px"} -->
			<div class="wp-block-cover has-background-dim" style="min-height:168px"><img class="wp-block-cover__image-background wp-image-12487" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/Vue-Ansouis-©luberonsudtourisme.jpg" style="object-position:54% 9%" data-object-fit="cover" data-object-position="54% 9%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Les activités du Sud Luberon</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/04/village-ansouis.jpg","id":50,"dimRatio":30,"focalPoint":{"x":"0.87","y":"0.51"},"minHeight":350} -->
			<div class="wp-block-cover has-background-dim-30 has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-50" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/04/village-ansouis.jpg" style="object-position:87% 51%" data-object-fit="cover" data-object-position="87% 51%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Patrimoine</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg","id":430,"dimRatio":30,"focalPoint":{"x":"0.00","y":"0.50"},"minHeight":350} -->
			<div class="wp-block-cover has-background-dim-30 has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-430" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg" style="object-position:0% 50%" data-object-fit="cover" data-object-position="0% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Commerces</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:group -->
			
			<!-- wp:paragraph -->
			<p></p>
			<!-- /wp:paragraph -->',
		)
	);

	/**
	 *  Modèle bloc de thematiques
	 */
	register_block_pattern(
		'block-compo/thematic-custom',
		array(
			'title'       => __( 'Bloc de thématiques' ),
			'categories'  => array( 'template_block' ),
			'description' => __( 'Modele de bloc avec des liens thématiques' ),
			'content'     => '<!-- wp:group {"align":"full","backgroundColor":"color-green","textColor":"color-white","className":"block-info-green"} -->
			<div class="wp-block-group alignfull block-info-green has-color-white-color has-color-green-background-color has-text-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading -->
			<h2><span class="has-inline-color has-color-white-color">en découvrir plus sur le sud luberon</span></h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"className":"is-style-resize-text"} -->
			<p class="is-style-resize-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/idees-sejour.jpg","id":426,"minHeight":350} -->
			<div class="wp-block-cover has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-426" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/idees-sejour.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Les idées séjour</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/04/village-ansouis.jpg","id":50,"dimRatio":30,"focalPoint":{"x":"0.87","y":"0.51"},"minHeight":350} -->
			<div class="wp-block-cover has-background-dim-30 has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-50" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/04/village-ansouis.jpg" style="object-position:87% 51%" data-object-fit="cover" data-object-position="87% 51%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Le sud Luberon</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg","id":430,"dimRatio":30,"focalPoint":{"x":"0.00","y":"0.50"},"minHeight":350} -->
			<div class="wp-block-cover has-background-dim-30 has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-430" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg" style="object-position:0% 50%" data-object-fit="cover" data-object-position="0% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Que faire dans le sud Luberon ?</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:group -->',
		)
	);


	/**
	 *  Modèle bloc campagnes publicitaires
	 */
	register_block_pattern(
		'block-compo/advertising-custom',
		array(
			'title'       => __( 'Bloc campagnes publicitaires' ),
			'categories'  => array( 'template_block' ),
			'description' => __( 'Modele de bloc pour les campagnes publicitaires' ),
			'content'     => '<!-- wp:cover {"overlayColor":"color-purple","minHeight":260,"align":"full","className":"heading"} -->
			<div class="wp-block-cover alignfull has-color-purple-background-color has-background-dim heading" style="min-height:260px"><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Justo eget magna fermentum iaculis eu non. Id interdum velit laoreet id donec. Lectus proin nibh nisl condimentum. Maecenas volutpat blandit aliquam etiam erat velit scelerisque. Luctus accumsan tortor posuere ac ut consequat semper. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Interdum velit laoreet id donec ultrices tincidunt arcu non. Lorem sed risus ultricies tristique nulla. Natoque penatibus et magnis dis parturient montes nascetur. Adipiscing elit ut aliquam purus sit. Vitae congue eu consequat ac felis donec.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:more -->
			<!--more-->
			<!-- /wp:more --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:shortcode -->
			[lst_ad_zone id=1]
			<!-- /wp:shortcode --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div></div>
			<!-- /wp:cover -->',
		)
	);

	/**
	 *  Modèle bloc bouton thématique
	 */
	register_block_pattern(
		'block-compo/thematic-button-custom',
		array(
			'title'       => __( 'Bloc bouton thématique' ),
			'categories'  => array( 'template_block' ),
			'description' => __( 'Modele de bloc pour les boutons thématiques' ),
			'content'     => '<!-- wp:cover {"url":"https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg","id":430,"dimRatio":30,"focalPoint":{"x":"0.00","y":"0.50"},"minHeight":350} -->
			<div class="wp-block-cover compo-button-custom has-background-dim-30 has-background-dim" style="min-height:350px"><img class="wp-block-cover__image-background wp-image-430" alt="" src="https://luberon-sud-tourisme.e-labo.io/wp-content/uploads/2021/05/que-faire.jpg" style="object-position:0% 50%" data-object-fit="cover" data-object-position="0% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"contentJustification":"center"} -->
			<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"className":"is-style-button-white-large"} -->
			<div class="wp-block-button is-style-button-white-large"><a class="wp-block-button__link">Que faire dans le sud Luberon ?</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover -->',
		)
	);

}
