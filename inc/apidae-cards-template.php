<?php
/**
 * Define custom cards templates.
 */
defined( 'ABSPATH' ) || exit;

/**
 * Custom templates for all cards types.
 * event-temple : Template for FM cards (type,title,city,date)
 *
 * @return array
 */
function elabo_custom_cards_templates() {
	$custom_templates = array(
		'event-template'      => array(
			'setting' => array(
				'name' => 'event-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-event-type',
										'taxonomy'   => array( 'at_feteetmanifestationtype' ),
										'icon'       => 'icon-event',
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'ouverture',
										'name'       => 'dae-block-dates',
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'      => 'post_field',
										'post_field'  => 'more_ouverture',
										'name'        => 'dae-block-dates-more',
										'date_format' => 'j/m',
										'class'       => 'dae-block-tag',
										'limit'       => 3,
										'title_tag'   => 'h4',
										'title_class' => 'dae-block-title',
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'restaurant-template' => array(
			'setting' => array(
				'name' => 'restaurant-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-category',
										'taxonomy'   => array( 'at_restaurationcategorie' ),
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'terms_to_icon',
										'name'       => 'dae-block-classification',
										'terms'      => array(
											2971 => 'dae-icon-1mstar',
											2972 => 'dae-icon-2mstar',
											2973 => 'dae-icon-3mstar',
											5172 => 'dae-icon-1toque',
											5173 => 'dae-icon-2toque',
											5174 => 'dae-icon-3toque',
											5175 => 'dae-icon-4toque',
											5176 => 'dae-icon-5toque',
											4617 => 'dae-icon-asiette-michelin',
											2974 => 'dae-icon-bib-gourmand-michelin',
											6009 => 'dae-icon-etoile-verte-michelin',
										),
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'gite-template'       => array(
			'setting' => array(
				'name' => 'gite-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
						'media-content'   => array(
							'media-content-bottom' => array(
								'action' => array(),
								'blocks' => array(
									array(
										'content' => array(
											'source'     => 'post_field',
											'post_field' => 'terms_to_icon',
											'name'       => 'dae-block-services',
											'terms'      => array(
												842 => 'dae-icon-wifi',
												687 => 'dae-icon-pet',
											),
										),
										'action'  => array(),
									),
								),
							),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-category',
										'taxonomy'   => array( 'at_typehabitation' ),
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'terms_to_icon',
										'name'       => 'dae-block-classification',
										'terms'      => array(
											2627 => 'dae-icon-1star',
											2628 => 'dae-icon-2star',
											2629 => 'dae-icon-3star',
											2630 => 'dae-icon-4star',
											2631 => 'dae-icon-5star',
											3612 => 'dae-icon-1key',
											3613 => 'dae-icon-2key',
											3614 => 'dae-icon-3key',
											3615 => 'dae-icon-4key',
											3616 => 'dae-icon-5key',
											3584 => 'dae-icon-1epi',
											3585 => 'dae-icon-2epi',
											3586 => 'dae-icon-3epi',
											3587 => 'dae-icon-4epi',
											3588 => 'dae-icon-5epi',
										),
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'hotel-template'      => array(
			'setting' => array(
				'name' => 'hotel-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-category',
										'taxonomy'   => array( 'at_hotellerietype' ),
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'terms_to_icon',
										'name'       => 'dae-block-classification',
										'terms'      => array(
											2748 => 'dae-icon-1star',
											2749 => 'dae-icon-2star',
											2750 => 'dae-icon-3star',
											2751 => 'dae-icon-4star',
											2752 => 'dae-icon-5star',
										),
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'camping-template'    => array(
			'setting' => array(
				'name' => 'camping-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-category',
										'taxonomy'   => array( 'at_hotelleriepleinairtype' ),
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'terms_to_icon',
										'name'       => 'dae-block-classification',
										'terms'      => array(
											2540 => 'dae-icon-1star',
											2543 => 'dae-icon-2star',
											2546 => 'dae-icon-3star',
											2548 => 'dae-icon-4star',
											2551 => 'dae-icon-5star',
										),
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'marche-template'     => array(
			'setting' => array(
				'name' => 'marche-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'ouverture',
										'name'       => 'dae-block-dates',
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'      => 'post_field',
										'post_field'  => 'more_ouverture',
										'name'        => 'dae-block-dates-more',
										'date_format' => 'j/m',
										'class'       => 'dae-block-tag',
										'limit'       => 3,
										'title_tag'   => 'h4',
										'title_class' => 'dae-block-title',
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'commerce-template'   => array(
			'setting' => array(
				'name' => 'commerce-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-category',
										'taxonomy'   => array( 'at_commerceetservicetypedetaille' ),
										'limit'      => 1,
									),
									'action'  => array(),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'rando-template'      => array(
			'setting' => array(
				'name' => 'rando-template',
			),
			'layers'  => array(
				'inner' => array(
					'media'   => array(
						'media-thumbnail' => array(
							'action' => array(),
							'block'  => array(),
						),
						'media-content'   => array(
							'media-content-bottom' => array(
								'action' => array(),
								'blocks' => array(
									array(
										'content' => array(
											'source'     => 'post_field',
											'post_field' => 'itineraire',
											'name'       => 'dae-block-itineraire',
										),
										'action'  => array(),
									),
								),
							),
						),
					),
					'content' => array(
						'body' => array(
							'blocks' => array(

								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_title',
										'name'       => 'dae-block-title',
									),
									'action'  => array(
										'action_type' => 'link',
										'link_target' => '_self',
									),
								),
								array(
									'content' => array(
										'source'     => 'post_field',
										'post_field' => 'the_terms',
										'name'       => 'dae-block-city',
										'taxonomy'   => array( 'at_communes' ),
									),
									'action'  => array(),
								),
							),
						),
					),
				),
			),
		),
		'adaptative-template' => array(
			'setting'   => array(
				'name' => 'adaptative-template',
			),
			'templates' => array(
				'default'              => array(
					'setting' => array(
						'name' => 'default',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
				'ad_fete_et_manifesta' => array(
					'setting' => array(
						'name' => 'event-template',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-event-type',
												'taxonomy' => array( 'at_feteetmanifestationtype' ),
												'icon'     => 'icon-event',
												'limit'    => 1,
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'ouverture',
												'name'   => 'dae-block-dates',
												'limit'  => 1,
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'more_ouverture',
												'name'   => 'dae-block-dates-more',
												'date_format' => 'j/m',
												'class'  => 'dae-block-tag',
												'limit'  => 3,
												'title_tag' => 'h4',
												'title_class' => 'dae-block-title',
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
				'ad_restauration'      => array(
					'setting' => array(
						'name' => 'restaurant-template',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-category',
												'taxonomy' => array( 'at_restaurationcategorie' ),
												'limit'    => 1,
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'terms_to_icon',
												'name'   => 'dae-block-classification',
												'terms'  => array(
													2971 => 'dae-icon-1mstar',
													2972 => 'dae-icon-2mstar',
													2973 => 'dae-icon-3mstar',
													5172 => 'dae-icon-1toque',
													5173 => 'dae-icon-2toque',
													5174 => 'dae-icon-3toque',
													5175 => 'dae-icon-4toque',
													5176 => 'dae-icon-5toque',
													4617 => 'dae-icon-asiette-michelin',
													2974 => 'dae-icon-bib-gourmand-michelin',
													6009 => 'dae-icon-etoile-verte-michelin',
												),
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
				'ad_hebergement_locat' => array(
					'setting' => array(
						'name' => 'gite-template',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
								'media-content'   => array(
									'media-content-bottom' => array(
										'action' => array(),
										'blocks' => array(
											array(
												'content' => array(
													'source' => 'post_field',
													'post_field' => 'terms_to_icon',
													'name' => 'dae-block-services',
													'terms' => array(
														842 => 'dae-icon-wifi',
														687 => 'dae-icon-pet',
													),
												),
												'action'  => array(),
											),
										),
									),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-category',
												'taxonomy' => array( 'at_typehabitation' ),
												'limit'    => 1,
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'terms_to_icon',
												'name'   => 'dae-block-classification',
												'terms'  => array(
													2627 => 'dae-icon-1star',
													2628 => 'dae-icon-2star',
													2629 => 'dae-icon-3star',
													2630 => 'dae-icon-4star',
													2631 => 'dae-icon-5star',
													3612 => 'dae-icon-1key',
													3613 => 'dae-icon-2key',
													3614 => 'dae-icon-3key',
													3615 => 'dae-icon-4key',
													3616 => 'dae-icon-5key',
													3584 => 'dae-icon-1epi',
													3585 => 'dae-icon-2epi',
													3586 => 'dae-icon-3epi',
													3587 => 'dae-icon-4epi',
													3588 => 'dae-icon-5epi',
												),
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
				'ad_hotellerie'        => array(
					'setting' => array(
						'name' => 'hotel-template',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-category',
												'taxonomy' => array( 'at_hotellerietype' ),
												'limit'    => 1,
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'terms_to_icon',
												'name'   => 'dae-block-classification',
												'terms'  => array(
													2748 => 'dae-icon-1star',
													2749 => 'dae-icon-2star',
													2750 => 'dae-icon-3star',
													2751 => 'dae-icon-4star',
													2752 => 'dae-icon-5star',
												),
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
				'ad_hotellerie_plein_' => array(
					'setting' => array(
						'name' => 'camping-template',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-category',
												'taxonomy' => array( 'at_hotelleriepleinairtype' ),
												'limit'    => 1,
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'terms_to_icon',
												'name'   => 'dae-block-classification',
												'terms'  => array(
													2540 => 'dae-icon-1star',
													2543 => 'dae-icon-2star',
													2546 => 'dae-icon-3star',
													2548 => 'dae-icon-4star',
													2551 => 'dae-icon-5star',
												),
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
				'ad_commerce_et_servi' => array(
					'setting' => array(
						'name' => 'commerce-template',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-category',
												'taxonomy' => array( 'at_commerceetservicetypedetaille' ),
												'limit'    => 1,
											),
											'action'  => array(),
										),
										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
				'ad_equipement'        => array(
					'setting' => array(
						'name' => 'rando-template',
					),
					'layers'  => array(
						'inner' => array(
							'media'   => array(
								'media-thumbnail' => array(
									'action' => array(),
									'block'  => array(),
								),
								'media-content'   => array(
									'media-content-bottom' => array(
										'action' => array(),
										'blocks' => array(
											array(
												'content' => array(
													'source' => 'post_field',
													'post_field' => 'itineraire',
													'name' => 'dae-block-itineraire',
												),
												'action'  => array(),
											),
										),
									),
								),
							),
							'content' => array(
								'body' => array(
									'blocks' => array(

										array(
											'content' => array(
												'source' => 'post_field',
												'post_field' => 'the_title',
												'name'   => 'dae-block-title',
											),
											'action'  => array(
												'action_type' => 'link',
												'link_target' => '_self',
											),
										),
										array(
											'content' => array(
												'source'   => 'post_field',
												'post_field' => 'the_terms',
												'name'     => 'dae-block-city',
												'taxonomy' => array( 'at_communes' ),
											),
											'action'  => array(),
										),
									),
								),
							),
						),
					),
				),
			),
		),
	);

	return $custom_templates;
}

add_filter( 'wp_apidae/cards_template/custom_template', 'elabo_custom_cards_templates' );
