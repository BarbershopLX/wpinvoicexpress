<?php

require_once 'InvoicexpressClient.php';
require_once 'FilterInterface.php';

class InvoicexpressInvoices extends InvoicexpressClient implements Filter {

	protected $items = [];


	public function all($page = null) {

		$this->items = $this->fetch('invoices');

		return $this;

	}

	public function get() {

		return $this->items;

	}

	public function filter($field, $value) {

		$xpath = "/invoices/invoice[{$field} = '{$value}']";
		$nodes = $this->items->xpath($xpath);

		return $nodes;

	}

}