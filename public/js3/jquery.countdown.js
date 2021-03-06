/*
* Basic Count Down to Date and Time
* Author: @mrwigster / trulycode.com
*/
(function (e) {
	e.fn.countdown = function (t, n) {
	function i() {
		eventDate = Date.parse(r.date) / 1e3;
		currentDate = Math.floor(e.now() / 1e3);
		/*if (eventDate <= currentDate) {
			n.call(this);
			clearInterval(interval)
		}*/
		seconds = eventDate - currentDate;
		days = Math.floor(seconds / 86400);
		seconds -= days * 60 * 60 * 24;
		hours = Math.floor(seconds / 3600);
		seconds -= hours * 60 * 60;
		minutes = Math.floor(seconds / 60);
		seconds -= minutes * 60;
		days == 1 ? thisEl.find(".timeRefDays").text("Day") : thisEl.find(".timeRefDays").text("Days");
		hours == 1 ? thisEl.find(".timeRefHours").text("Hour") : thisEl.find(".timeRefHours").text("Hours");
		minutes == 1 ? thisEl.find(".timeRefMinutes").text("Minute") : thisEl.find(".timeRefMinutes").text("Minutes");
		seconds == 1 ? thisEl.find(".timeRefSeconds").text("Second") : thisEl.find(".timeRefSeconds").text("Seconds");
		if (r["format"] == "on") {
			days = String(days).length >= 2 ? days : "0" + days;
			hours = String(hours).length >= 2 ? hours : "0" + hours;
			minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
			seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
		}
		if (!isNaN(eventDate)) {
			//alert(eventDate);
			thisEl.find(".days").text(days);
			thisEl.find(".hours").text(hours);
			thisEl.find(".minutes").text(minutes);
			thisEl.find(".seconds").text(seconds)
		} else {
			//alert("Invalid date. Example: 30 Tuesday 2013 15:50:00");
			//clearInterval(interval)
		}
	}
	var thisEl = e(this);
	var r = {
		date: null,
		format: null
	};
	t && e.extend(r, t);
	i();
	interval = setInterval(i, 1e3)
	}
	})(jQuery);
	