<?php 
	function wpb_customize_register($wp_customize){
		//Showcase Section
		$wp_customize->add_section('showcase', array (
			'title' => __('Showcase', 'goldenage'),
			'description' => sprintf(__('Options for showcase', 'goldenage')),
			'priority' => 130
		));
		$wp_customize->add_setting('showcase_image', array (
			'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
			'type' => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
			'label' => __('Showcase Image', 'goldenage'),
			'section' => 'showcase',
			'settings' => 'showcase_image',
			'priority' => 1
		)));

		$wp_customize->add_setting('showcase_heading', array (
			'default' => _x('Custom Wordpress theme for Golden Age', 'goldenage'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('showcase_heading', array (
			'label' => __('Heading', 'goldenage'),
			'section' => 'showcase',
			'priority' => 2
		));

		$wp_customize->add_setting('showcase_text', array (
			'default' => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'goldenage'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('showcase_text', array (
			'label' => __('Text', 'goldenage'),
			'section' => 'showcase',
			'priority' => 3
		));

		$wp_customize->add_setting('btn_url', array (
			'default' => _x('http://test.com', 'goldenage'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_url', array (
			'label' => __('Button URL', 'goldenage'),
			'section' => 'showcase',
			'priority' => 4
		));

		$wp_customize->add_setting('btn_text', array (
			'default' => _x('Read more', 'goldenage'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('btn_text', array (
			'label' => __('Button Text', 'goldenage'),
			'section' => 'showcase',
			'priority' => 5
		));
	}

	add_action('customize_register', 'wpb_customize_register');

?>