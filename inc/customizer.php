<?php 
function your_theme_new_customizer_settings($wp_customize) {
//add an hours & details panel
$wp_customize->add_section(
    'hours_&_details', 
    array(
    'title' => 'Hours & Details',
    'description' => 'Update Hours, Phone Number, etc',
    'capability' => 'edit_theme_options',
    'priority' => 30
    ));
	
	$wp_customize->add_setting(
		'hours',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'hours',
		array(
			'section' => 'hours_&_details',
			'label' => 'Hours',
			'type' => 'textarea'
		)
    );
    $wp_customize->add_setting(
		'phone',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'phone',
		array(
			'section' => 'hours_&_details',
			'label' => 'Phone Number',
			'type' => 'text'
		)
    );
    $wp_customize->add_setting(
		'location',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'location',
		array(
			'section' => 'hours_&_details',
			'label' => 'Location',
			'type' => 'text'
		)
    );
    $wp_customize->add_setting(
		'location-ext',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'location-ext',
		array(
			'section' => 'hours_&_details',
			'label' => 'Location Extended',
			'type' => 'text'
		)
	);
//Alert Panel
$wp_customize->add_section(
    'alert', 
    array(
    'title' => 'Add Alert',
	'description' => 'Add an alert that displays above content until deleted.
	Delete all text to remove from display.',
    'capability' => 'edit_theme_options',
    'priority' => 35
    ));
	
	$wp_customize->add_setting(
		'alert-header',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'alert-header',
		array(
			'section' => 'alert',
			'label' => 'Headline',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'alert-info',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'alert-info',
		array(
			'section' => 'alert',
			'label' => 'Information',
			'type' => 'textarea'
		)
    );
// add a setting for the site logo
$wp_customize->add_setting('your_theme_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
array(
'label' => 'NEw added Upload Logo',
'section' => 'title_tagline',
'settings' => 'your_theme_logo',
) ) );
}
add_action('customize_register', 'your_theme_new_customizer_settings');
?>