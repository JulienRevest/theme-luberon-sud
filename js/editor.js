wp.domReady( () => {

	// Suppression styles citations
	wp.blocks.unregisterBlockStyle(
		'core/quote',
		[ 'default', 'large' ]
	);

	// Suppression styles boutons
	wp.blocks.unregisterBlockStyle(
		'core/button',
		[ 'outline', 'squared', 'fill', 'circular', '3d', 'shadow' ]
	);



	// Personnalisation des citations
	wp.blocks.registerBlockStyle( 
		'core/quote', 
		[ 
			{
				name: 'quote-small',
				label: 'Format 420',
				isDefault: true,
			},
			{
				name: 'quote-large',
				label: 'Format 610',
			},
			{
				name: 'quote-image',
				label: 'Format 610 avec image',
			}
		]
	);

	// Personnalisation des paragraphes
	wp.blocks.registerBlockStyle( 
		'core/paragraph', 
		[ 
			{
				name: 'default-text',
				label: 'Par défaut',
				isDefault: true,
			},
			{
				name: 'resize-text',
				label: 'Bloc texte raccourci',
			}
		]
	);
	

	// Personnalisation des boutons
	wp.blocks.registerBlockStyle( 
		'core/button', 
		[ 
			{
				name: 'button-default',
				label: 'Par défaut',
				isDefault: true,
			},
			{
				name: 'button-white',
				label: 'Bouton blanc',
			},
			{
				name: 'button-large',
				label: 'Bouton élargi',
			},
			{
				name: 'button-white-large',
				label: 'Bouton blanc élargi',
			},
			{
				name: 'button-green',
				label: 'Bouton vert',
			}
		]
	);


	// Personnalisation des titres
	wp.blocks.registerBlockStyle( 
		'core/heading', 
		[ 
			{
				name: 'title1',
				label: 'Titre 1',
			},
			{
				name: 'title2',
				label: 'Titre 2',
			},
			{
				name: 'title2_uppercase',
				label: 'Titre 2 majuscules',
			},
			{
				name: 'title3',
				label: 'Titre 3',
			},
			{
				name: 'title4',
				label: 'Titre 4',
			},
			{
				name: 'title5',
				label: 'Titre 5',
			},
			{
				name: 'title6',
				label: 'Titre 6',
			}
		]
	);

} );