
$(".datepicker").flatpickr();

$(".time-picker").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "Y-m-d H:i",
});

$(".date-time").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});

$(".date-format").flatpickr({
	altInput: true,
	altFormat: "F j, Y",
	dateFormat: "Y-m-d",
});

$(".date-range").flatpickr({
	mode: "range",
	altInput: true,
	altFormat: "F j, Y",
	dateFormat: "Y-m-d",
});

$(".calendar-inline").flatpickr({
	inline: true,
	altInput: true,
	altFormat: "F j, Y",
	dateFormat: "Y-m-d",
});