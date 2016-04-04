<?php
// Panel ID
$panel_id = 'kira_lite_contact_blog';

// Prefix
$prefix = 'kira_lite';

/***********************************************/
/**************** CONTACT & BLOG  **************/
/***********************************************/
$wp_customize->add_panel( $panel_id,
	array(
		'priority'			=> 114,
		'capability'		=> 'edit_theme_options',
		'theme_supports'	=> '',
		'title'				=> esc_html__( 'Contact &amp; Blog', 'kira-lite' )
	)
);

/**
 *	General Section
 */
$wp_customize->add_section( $prefix . '_contact_blog_general' ,
	array(
		'title'		=> esc_html__( 'General', 'kira-lite' ),
		'priority'	=> 1,
		'panel'		=> $panel_id
	)
);

// Left Title
$wp_customize->add_setting(
	$prefix . '_contact_blog_general_left_title',
	array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'Contact', 'kira-lite' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control(
	$prefix . '_contact_blog_general_left_title',
	array(
		'label'				=> esc_html__( 'Left Title', 'kira-lite' ),
		'section'			=> $prefix . '_contact_blog_general',
		'priority'			=> 2,
		'active_callback'	=> 'is_front_page'
	)
);

// Left Button Text
$wp_customize->add_setting(
	$prefix . '_contact_blog_general_left_button_text',
	array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'Send us a message', 'kira-lite' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control(
	$prefix . '_contact_blog_general_left_button_text',
	array(
		'label'				=> esc_html__( 'Left Button Text', 'kira-lite' ),
		'section'			=> $prefix . '_contact_blog_general',
		'priority'			=> 3,
		'active_callback'	=> 'is_front_page'
	)
);

// Left Button URL
$wp_customize->add_setting(
	$prefix . '_contact_blog_general_left_button_url',
	array(
		'sanitize_callback'	=> 'esc_url',
		'default'			=> esc_url( '#' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control( $prefix . '_contact_blog_general_left_button_url',
	array(
		'label'				=> esc_html__( 'Left Button URL', 'kira-lite' ),
		'section'			=> $prefix . '_contact_blog_general',
		'settings'			=> $prefix . '_contact_blog_general_left_button_url',
		'priority'			=> 4,
		'active_callback'	=> 'is_front_page'
	)
);

// Right Title
$wp_customize->add_setting(
	$prefix . '_contact_blog_general_right_title',
	array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'Blog', 'kira-lite' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control(
	$prefix . '_contact_blog_general_right_title',
	array(
		'label'				=> esc_html__( 'Right Title', 'kira-lite' ),
		'section'			=> $prefix . '_contact_blog_general',
		'priority'			=> 5,
		'active_callback'	=> 'is_front_page'
	)
);

// Right Button Text
$wp_customize->add_setting(
	$prefix . '_contact_blog_general_right_button_text',
	array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'View Blog', 'kira-lite' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control(
	$prefix . '_contact_blog_general_right_button_text',
	array(
		'label'				=> esc_html__( 'Right Button Text', 'kira-lite' ),
		'section'			=> $prefix . '_contact_blog_general',
		'priority'			=> 6,
		'active_callback'	=> 'is_front_page'
	)
);

// Right Button URL
$wp_customize->add_setting(
	$prefix . '_contact_blog_general_right_button_url',
	array(
		'sanitize_callback'	=> 'esc_url',
		'default'			=> esc_url( '#' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control( $prefix . '_contact_blog_general_right_button_url',
	array(
		'label'				=> esc_html__( 'Right Button URL', 'kira-lite' ),
		'section'			=> $prefix . '_contact_blog_general',
		'settings'			=> $prefix . '_contact_blog_general_right_button_url',
		'priority'			=> 7,
		'active_callback'	=> 'is_front_page'
	)
);