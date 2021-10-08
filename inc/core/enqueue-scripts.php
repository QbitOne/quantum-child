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
            $qc_enqueue_sripts->add_style('style', 'assets/css/', ['qt-style']);
            $qc_enqueue_sripts->add_login_style('login');

            $qc_enqueue_sripts->enqueue();
        endif;
    }
    add_action('after_setup_theme', 'qc_action_after_setup_theme');
endif;
