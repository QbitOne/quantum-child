<?php



if (!function_exists('qc_action_after_setup_theme')) :
    /**
     * Fires after the theme is loaded.
     *
     */
    function qc_action_after_setup_theme(): void
    {

        if (class_exists('QT_Enqueue_Scripts')) :
            $qc_enqueue_sripts = new QT_Enqueue_Scripts(QUANTUM_CHILD_URI, 'qc', QUANTUM_CHILD_VERSION);

            // QC Core Files
            $qc_enqueue_sripts->add_style('style', 'assets/css/', ['qt-style']);
            $qc_enqueue_sripts->add_login_style('login');

            // AOS Scripts & Styles
            $qc_enqueue_sripts->wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
            $qc_enqueue_sripts->wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

            $qc_enqueue_sripts->enqueue();
        endif;
    }
    add_action('after_setup_theme', 'qc_action_after_setup_theme');
endif;
