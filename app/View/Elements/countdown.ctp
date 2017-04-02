<div>
	<div class="countdown">
		<div class="days">0</div>
		<div class="hours">0</div>
		<div class="minutes">0</div>
		<div class="seconds">0</div>
	</div>
	<div class="viet">
		<div class="days">0</div>
		<div class="hours">0</div>
		<div class="minutes">0</div>
		<div class="seconds">0</div>
	</div>
</div>

<script type="text/javascript">
	/** pro testovaci ucely **/
	$(document).ready(function(){
		var countdownElem = $(".countdown");
		var countdownElem2 = $(".viet");
		var targetDate = new Date();
		var targetDate2 = new Date();
		var lang = "en";
		targetDate.setDate(targetDate.getDate() + 14);
		targetDate2.setDate(targetDate2.getDate() + 11);
		var countdown = new Countdown(countdownElem, targetDate, lang);
		var countdown2 = new Countdown(countdownElem2, targetDate2, "vi");
		countdown.run();
		countdown2.run();
	});
</script>
