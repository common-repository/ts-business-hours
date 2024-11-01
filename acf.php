<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_global-options',
		'title' => 'Global Options',
		'fields' => array (
			array (
				'key' => 'field_52af20357979b',
				'label' => __('Hours'),
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_52af20447979c',
				'label' => __('Days'),
				'name' => 'days',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_52af25f47979d',
						'label' => __('Name'),
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => 'Sunday',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => 9,
					),
					array (
						'key' => 'field_52af26a87979e',
						'label' => __('Open'),
						'name' => 'open',
						'type' => 'date_time_picker',
						'column_width' => '',
						'show_date' => 'false',
						'date_format' => 'm/d/y',
						'time_format' => 'h:mm tt',
						'show_week_number' => 'false',
						'picker' => 'slider',
						'save_as_timestamp' => 'false',
						'get_as_timestamp' => 'false',
					),
					array (
						'key' => 'field_52af26df7979f',
						'label' => __('Close'),
						'name' => 'close',
						'type' => 'date_time_picker',
						'column_width' => '',
						'show_date' => 'false',
						'date_format' => 'm/d/y',
						'time_format' => 'h:mm tt',
						'show_week_number' => 'false',
						'picker' => 'slider',
						'save_as_timestamp' => 'false',
						'get_as_timestamp' => 'false',
					),
					array (
						'key' => 'field_52af4cc6147c4',
						'label' => __('Is Open Late'),
						'name' => 'is_open_late',
						'type' => 'true_false',
						'instructions' => __('Check this if the closing time is past 23:59.'),
						'column_width' => '',
						'message' => '',
						'default_value' => 0,
					),
				),
				'row_min' => 7,
				'row_limit' => 7,
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
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
?>
