<?php

Class Gurutzeta {

    const VERSION = '1.0';

    public $dir;

    public function __construct()
    {
        // Initializing variables
        $this->dir = get_template_directory_uri();

        // Actions
        add_action( 'wp_enqueue_scripts', array($this, 'scriptsStyles'));
    }

    public function scriptsStyles()
    {
        // Register styles
        wp_register_style('gurutzeta', $this->dir . '/stylesheets/app.css', array(), self::VERSION);

        // Register javascripts
        wp_register_script('modernizr', $this->dir . '/js/vendor/custom.modernizr.js', array(), '2.6.2', false );

        // Enqueues
        wp_enqueue_script('modernizr');
        wp_enqueue_style('gurutzeta');

        /*

          <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>

  <script src="javascripts/foundation/foundation.js"></script>

    <script src="javascripts/foundation/foundation.cookie.js"></script>

    <script src="javascripts/foundation/foundation.section.js"></script>

    <script src="javascripts/foundation/foundation.placeholder.js"></script>

    <script src="javascripts/foundation/foundation.forms.js"></script>

    <script src="javascripts/foundation/foundation.alerts.js"></script>

    <script src="javascripts/foundation/foundation.reveal.js"></script>

    <script src="javascripts/foundation/foundation.dropdown.js"></script>

    <script src="javascripts/foundation/foundation.magellan.js"></script>

    <script src="javascripts/foundation/foundation.orbit.js"></script>

    <script src="javascripts/foundation/foundation.joyride.js"></script>

    <script src="javascripts/foundation/foundation.clearing.js"></script>

    <script src="javascripts/foundation/foundation.topbar.js"></script>

    <script src="javascripts/foundation/foundation.tooltips.js"></script>
         */
    }

}