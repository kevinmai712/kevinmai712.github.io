<script>
	$(document).ready(function() {
		$('input[name="mail-submit"]').click(function() {
		})

	$('form').submit(function(event){
			event.preventDefault();
					const post_url = $(this).attr("action");
					const form_data = $(this).serialize();

					$.post( post_url, form_data, function(response) {
									const responseString = (typeof response === 'object')?response.responseText:response;
									const jqueryresponseTemplate = $('<template>'+responseString+'</template>');
									const jquerymainResponseHtml = $(jqueryresponseTemplate.get(0).content).find('main');
									if(!jquerymainResponseHtml || jquerymainResponseHtml.length < 1 ){
										jquerymainResponseHtml  = $('<p>No Valid Response Returned</p>');
										$('.form-message').html(jquerymainResponseHtml);
									}else{
										$('.form-message').fadeIn();
										$('.form-message').html(jquerymainResponseHtml);
										$( 'form' ).each(function(){
												this.reset();
										});
										$('input[name="name"], input[name="honeypot"], input[name="tel"], input[name="message"]').removeClass( "input-error" );
									}

					},"html");


	});

});
</script>


<!-- https://metrics.vitalstorm.com - change the url once ready to go live -->
<h2 class="form-header">Schedule Service</h2>
<p class="form-text">Fill out form below and we'll reach out to schedule your appointment.</p>
<form id="form-metrics" validate action="https://metrics.vitalstorm.com/email_form_submission/726c72de-38b3-4ebb-b602-de8f30ea55ba/" method="post" class="animated">
	<div>
	<input id="mail-name" type="text" name="name" placeholder="Name" required>
	<input id="mail-email"  type="text" name="honeypot" placeholder="Email" minlength="3" maxlength="64" required>
	<input id="mail-honey" type="text" name="email">
</div>
<div>
	<input id="mail-tel" name="tel" type="tel" placeholder="Phone Eg.(123) 456-7890" pattern=".{0}|.{14,}" required title="Must have 14 characters">
	<input id="mail-message" name="message" placeholder="Service" required>
	<input type="hidden" name="gclid" value="">
	<input type="hidden" name="vsref" value="">
</div>
	<div class="ajax-button">
		<div class="fa fa-check done"></div>
		<div class="fa fa-close failed"></div>
		<button id="mail-submit" type="submit" name="mail-submit">SUBMIT</button>
	</div>
	<p class="form-message"></p>
</form>
