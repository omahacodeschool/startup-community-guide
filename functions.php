<?php
add_theme_support( 'custom-header', array(
  // 'default-image'          => '',
  // 'width'                  => 0,
  // 'height'                 => 0,
  // 'flex-height'            => false,
  // 'flex-width'             => false,
  // 'uploads'                => true,
  // 'random-default'         => false,
  // 'header-text'            => true,
  // 'default-text-color'     => '',
  // 'wp-head-callback'       => '',
  // 'admin-head-callback'    => '',
  // 'admin-preview-callback' => ''
));

add_theme_support( 'custom-background', array(
  // 'default-color'          => '',
  // 'default-image'          => '',
  // 'default-repeat'         => '',
  // 'default-position-x'     => '',
  // 'default-attachment'     => '',
  // 'wp-head-callback'       => '_custom_background_cb',
  // 'admin-head-callback'    => '',
  // 'admin-preview-callback' => ''
));

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_infographic',
		'title' => 'Infographic',
		'fields' => array (
			array (
				'key' => 'field_552184b93e656',
				'label' => 'Infographic Title',
				'name' => 'infographic_title',
				'type' => 'text',
				'instructions' => 'Title of the infographic.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 30,
			),
			array (
				'key' => 'field_552185cf3e657',
				'label' => 'Infographic URL',
				'name' => 'infographic_url',
				'type' => 'text',
				'instructions' => 'The URL for the infographic',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-infographic.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_link-list',
		'title' => 'Link List',
		'fields' => array (
			array (
				'key' => 'field_552166905f464',
				'label' => 'Links',
				'name' => 'links',
				'type' => 'repeater',
				'instructions' => 'Add a bunch of links below.',
				'required' => 1,
				'sub_fields' => array (
					array (
						'key' => 'field_552166ac5f465',
						'label' => 'Link List Title',
						'name' => 'link_list_title',
						'type' => 'text',
						'instructions' => 'Title for this group of links',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => 30,
					),
					array (
						'key' => 'field_552167c25f466',
						'label' => 'Link List',
						'name' => 'link_list',
						'type' => 'repeater',
						'required' => 1,
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_552167f85f467',
								'label' => 'Link Text',
								'name' => 'link_text',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5521681e5f468',
								'label' => 'Link URL',
								'name' => 'link_url',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
						'row_min' => 1,
						'row_limit' => '',
						'layout' => 'table',
						'button_label' => 'Add Row',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_55216b35bf9f6',
				'label' => 'List Description Title',
				'name' => 'list_description_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => 25,
			),
			array (
				'key' => 'field_55217719fe825',
				'label' => 'List Description Content',
				'name' => 'list_description_content',
				'type' => 'textarea',
				'instructions' => 'Tell us about your link lists.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 0,
				'formatting' => 'none',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-lists.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_map',
		'title' => 'Map',
		'fields' => array (
			array (
				'key' => 'field_552168fe2814b',
				'label' => 'Map URL',
				'name' => 'map_url',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-map.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
