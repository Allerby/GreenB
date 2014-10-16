<!-- Personal Details Modal -->
<div class="saleModal modal fade" id="saleModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="container">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Enter Your Personal Details Below:</h2>
					<div class="modal-body">
						<p class="item-intro text-muted"></p>
						<form class="form-horizontal">
							<ul class="list-unstyled">
								<div class="form-group">
									<li><label for="" class="control-label">First Name:</label><input type="text" class="form-control" /></li>
								</div>
								<div class="form-group">
									<li><label for="" class="control-label">Last Name:</label><input type="text" class="form-control" /></li>
								</div>
								<div class="form-group">
									<li><label for="" class="control-label">Physical Address:</label><input type="text" class="form-control" /></li>
								</div>
								<div class="form-group">
									<li>
										<label for="" class="control-label">Country:</label>
										<select class="form-control">
											<option>New Zealand</option>
											<option>Australia</option>
											<option>United States</option>
											<option>England</option>
											<option>Spain</option>
											<option>Brazil</option>
										</select>
									</li>
								</div>
								<div class="form-group">
									<li>
										<label for="" class="control-label">City:</label>
										<select class="form-control">
											<option>Wellington</option>
											<option>Auckland</option>
											<option>Christchurch</option>
											<option>Hamilton</option>
											<option>Napier/Hastings</option>
											<option>Dunedin</option>
										</select>
									</li>
								</div>
								<div class="form-group">
									<li><label for="" class="control-label">Email:</label><input type="email" class="form-control" /></li>
								</div>
								<h2>Your Order</h2>
								<table class="shopOrder">
									<thead>
										<tr>
											<th>Product</th><th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cartItem">
											<td>Product Item</td>
											<td><span class="amount">$ 126.00</span></td>
										</tr>
										<tr class="cartItem">
											<td>Product Item</td>
											<td><span class="amount">$ 126.00</span></td>
										</tr>
										<tr class="cartItem">
											<td>Product Item</td>
											<td><span class="amount">$ 126.00</span></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<tr>
												<th>Cart Subtotal</th>
												<th><span class="amount">$ 378.00</span></th>
											</tr>
											<tr>
												<th>Shipping &amp; Handling</th>
												<th><span class="amount">No Charge</span></th>
											</tr>
											<tr>
												<th>Order Total</th>
												<th><span class="amount">$ 378.00</span></th>
											</tr>
										</tr>
									</tfoot>
								</table>
							</ul>
						</form>
					</div>
					<div class="btn-wrap login">
						<a href="#paymentModal" data-dismiss="modal" data-toggle="modal">
						<div class="btn btn-1e">Next</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Payment Modal -->
<div class="saleModal modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="container">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Enter Your Payment Details Below:</h2>
					<div class="modal-body">
						<p class="item-intro text-muted"></p>
						<form class="form-horizontal">
							<ul class="list-unstyled">
								<div class="form-group">
									<li><input type="radio" name="payment_method" value="dbt" class="radio-inline" /><label for="" class="radioLabel control-label">Direct Bank Transfer</label></li>
								</div>
								<div class="form-group">
									<li><input type="radio" name="payment_method" value="cp" class="radio-inline" /><label for="" class="radioLabel control-label">Credit Payment</label></li>
								</div>
								<div class="form-group">
									<li><input type="radio" name="payment_method" value="pp" class="radio-inline" /><label for="" class="radioLabel control-label">Paypal</label><img src="img/paypal.png" alt="paypal" /></li>
								</div>
								<div class="form-group">
									<li>
										<label for="" class="control-label">Card Type</label>
										<select class="form-control">
											<option>Visa</option>
											<option>Master Card</option>
											<option>Maestro</option>
										</select>
									</li>
								</div>
								<div class="form-group">
									<li><label for="" class="control-label">Credit Card Number</label><input type="Number" class="form-control" /></li>
								</div>
								<div class="form-group">
									<li><label for="" class="control-label">Expiry Date</label><input type="date" class="form-control" /></li>
								</div>
								<div class="form-group">
									<li><label for="" class="control-label">CVC</label><input type="Number" class="form-control" /></li>
								</div>
								<h2>Your Order</h2>
								<table class="shopOrder">
									<thead>
										<tr>
											<th>Product</th><th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cartItem">
											<td>Product Item</td>
											<td><span class="amount">$ 126.00</span></td>
										</tr>
										<tr class="cartItem">
											<td>Product Item</td>
											<td><span class="amount">$ 126.00</span></td>
										</tr>
										<tr class="cartItem">
											<td>Product Item</td>
											<td><span class="amount">$ 126.00</span></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<tr>
												<th>Cart Subtotal</th>
												<th><span class="amount">$ 378.00</span></th>
											</tr>
											<tr>
												<th>Shipping &amp; Handling</th>
												<th><span class="amount">No Charge</span></th>
											</tr>
											<tr>
												<th>Order Total</th>
												<th><span class="amount">$ 378.00</span></th>
											</tr>
										</tr>
									</tfoot>
								</table>
							</ul>
						</form>
					</div>
					<div class="btn-wrap login">
						<a href="#confirmModal" data-dismiss="modal" data-toggle="modal">
						<div class="btn btn-1e">Place Order</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Order Confirmation Modal -->
<div class="saleModal modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="container">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-lg-offset-2">
				<div class="row">
					<h2>Congratulations!</h2>
					<p>You will be receiving your GreenB within the next 7 workdays.</p>
					<div class="btn-wrap login">
						<a href="#" data-dismiss="modal">
						<div class="btn btn-1e">Close</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
