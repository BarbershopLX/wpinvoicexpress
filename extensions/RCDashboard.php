<?php

class RCDashboard implements Extension {

	public static function enable() {

		add_action('wp_dashboard_setup', function() {

			wp_add_dashboard_widget('rc_ix_dashboard_widget', 'Invoicexpress', [ __CLASS__, 'renderDashboardWidget' ]);

		});

	}

	public function renderDashboardWidget() {

		RCCore::includeVendor('InvoicexpressClient/InvoicexpressInvoices');

		$options = get_option( 'wpie_settings' );

		$Invoices = new InvoicexpressInvoices($options['domain'], $options['api_key']);

		$pending = $Invoices->all()->filter('status', 'final');

		RCCore::render('widget_dashboard', [ 'invoices_pending' => $pending ]);

	}

}