<?php $company = \App\Models\Company::first() ?>

<footer class="footer">
	<div class="container">
		<div class="content">
			<div class="columns has-text-centered">
				<div class="column is-6 border">
					<h4 class="title is-4">
						{{ $company->name }}
					</h4>
				</div>
				<div class="column is-6 border">
				<span class="icon"><i class="fa fa-home"></i></span>
					<h4 class="title is-4">{{ $company->email_1 }}</h4>
					<h4 class="title is-4">{{ $company->tel_1 }}</h4>

				</div>
			</div>

		</div>
	</div>
</footer>