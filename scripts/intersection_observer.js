
var observer = new IntersectionObserver(function(entries) {
	// isIntersecting is true when element and viewport are overlapping
	// isIntersecting is false when element and viewport don't overlap
	if(entries[0].isIntersecting === true)
		alert('Element has just become visible in screen');
}, { threshold: [0] });

observer.observe(document.querySelector("#main-container"));