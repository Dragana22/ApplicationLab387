
				<h1>Create new link</h1>
				<div class="container">
					<form action="#" method="POST" class="m50">
						<input class="input" type="text" name="link-name" placeholder="Enter link name:" required>
						<br>
						<input class="input" type="text" name="link-url" placeholder="Enter original link:">
						<br>
						<select name="link-domain" class="input">
							<option value="shorty.ba">shorty.ba</option>
							<option value="000.ba">000.ba</option>
						</select>
						<br>
						<input class="input" type="text" name="link-custom" placeholder="Enable custom text:" disabled>
						<br>
						<div class="row">
							<div class="left">
								<input type="checkbox" name="link-custom-enable" required>
								<span><strong>Enable custom text</strong></span>
							</div>
							<div class="right">
								<input class="button button-horizontal" type="submit" value="Create new link">
							</div>
						</div>
					</form>
				</div>
			</main>
		</div>
