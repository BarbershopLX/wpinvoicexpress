<table class="widefat fixed">
	<thead>
		<tr>
			<th>Sequence</th>
			<th>Date</th>
			<th>Client</th>
			<th>Amount</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($invoices_pending as $invoice): ?>
			<tr>
				<td><a target="_blank" href="<?php echo $invoice->permalink ?>"><?php echo $invoice->sequence_number ?></a></td>
				<td><?php echo $invoice->due_date ?></td>
				<td><?php echo $invoice->client->name ?></td>
				<td align="right"><?php echo number_format((float) $invoice->total, 2) ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>