<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * NM Elementor - Icons control (based on the Elementor Choose control)
 *
 * @since 1.0.0
 */
//class Control_NM_Icons extends Base_Data_Control {
class Control_NM_Icons extends \Elementor\Base_Data_Control {

	/**
	 * Get choose control type.
	 *
	 * Retrieve the control type, in this case `choose`.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Control type.
	 */
	public function get_type() {
		return 'nm-icons';
	}

	/**
	 * Render choose control output in the editor.
	 *
	 * Used to generate the control HTML in the editor using Underscore JS
	 * template. The variables for the class are available using `data` JS
	 * object.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function content_template() {
		$control_uid = $this->get_control_uid( '{{value}}' );
		?>
		<div class="nm-elementor-control-icon elementor-control-field">
			<label class="elementor-control-title">{{{ data.label }}}</label>
			<div class="elementor-control-input-wrapper">
				<input class="nm-elementor-control-icon-search" type="text" placeholder="<?php _e( 'Search icons', 'nm-framework-admin' ); ?>" value="">
                <div class="elementor-choices">
					<# _.each( data.options, function( options, value ) { #>
					<input id="<?php echo $control_uid; ?>" type="radio" name="elementor-choose-{{ data.name }}-{{ data._cid }}" value="{{ value }}">
					<label class="elementor-choices-label elementor-control-unit-1 tooltip-target" for="<?php echo $control_uid; ?>" data-tooltip="{{ options.title }}" title="{{ options.title }}">
						<i class="{{ options.icon }}" aria-hidden="true"></i>
						<span class="elementor-screen-only">{{{ options.title }}}</span>
					</label>
					<# } ); #>
				</div>
			</div>
		</div>

		<# if ( data.description ) { #>
		<div class="elementor-control-field-description">{{{ data.description }}}</div>
		<# } #>
		<?php
	}

	/**
	 * Get choose control default settings.
	 *
	 * Retrieve the default settings of the choose control. Used to return the
	 * default settings while initializing the choose control.
	 *
	 * @since 1.0.0
	 * @access protected
	 *
	 * @return array Control default settings.
	 */
	protected function get_default_settings() {
		return [
			'options' => [],
			'toggle' => true,
		];
	}
}
