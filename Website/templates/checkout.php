<div class="checkout_upper">
	<form action="../public/products.php?action=sendPayment" method="post">
		<div class="label_field">
			<label>
				First Name:
				<input type="text" placeholder="First Name" required>
			</label>
			<label>
				Last Name:
				<input type="text" placeholder="Last Name" required>
			</label>
			<label>
				Card Number:
				<input class="card-number" placeholder="1234 1234 1234 1234" type="text" required maxlength="16" />
			</label>
			<label>
				Card Holder
				<input class="card-name" placeholder="Name Surname" type="text" required />
			</label>
			<label>
				Exp. Date
            	<input class="card-name" placeholder="10/25" type="text" maxlength="5" required />
			</label>
			<label>
				CCV
            	<input class="card-name" placeholder="123" type="text" maxlength="3" required />
			</label>
		</div>
		<div class="submit_btn">
			<input type="submit" value="Pay">
		</div>
	</form>
</div>
