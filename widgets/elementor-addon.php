<?php 

class Elementor_Test_Widget extends \Elementor\Widget_Base {

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Enter your title', 'elementor-addon' ),
                'label_block' => true,
                'separator' => "before",
			]
		);
        $this->add_control(
            'view',
            [
                'label' => esc_html__( 'View', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::HIDDEN,
                'default' => 'traditional',
                'separator' => "before",
            ]
        );
        $this->add_control(
            'price',
            [
                'label' => esc_html__( 'Price', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 100,
                'step' => 5,
                'default' => 10,
                'separator' => "before",
            ]
        );
        $this->add_control(
            'item_description',
            [
                'label' => esc_html__( 'Description', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'Default description', 'elementor-addon' ),
                'placeholder' => esc_html__( 'Type your description here', 'elementor-addon' ),
            ]
        );
        $this->add_control(
            'border_popover_toggle',
            [
                'label' => esc_html__( 'Border', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                'label_off' => esc_html__( 'Default', 'your-plugin' ),
                'label_on' => esc_html__( 'Custom', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


		$this->end_controls_section();

	}
	// protected function render() {
	// 	$settings = $this->get_settings_for_display();
	// 	echo '<h3>' . $settings['title'] . '</h3>';
	// }
	protected function content_template() {
		?>
		<p>{{{ settings.title }}}</p>
		<p>{{{ settings.item_description }}}</p>
        <h4>{{{ settings.price }}}</h4>

		<?php
	}

	public function get_name() {
		return 'widget_name';
	}

	public function get_title() {
		return esc_html__( 'Elementor Test Addeon', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-arrow-circle-left';
	}

	public function get_custom_help_url() {
		return 'https://go.elementor.com/widget-name';
	}

	

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'test', 'keyword' ];
	}

}
?>