const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".wrapper i");
const firstCardWidth = carousel.querySelector(".card ").offsetWidth;

const dragging = (e) => {
	carousel.scrollLeft = e.pageX;
}

arrowBtns.forEach(btn => {
	btn.addEventListener("click", () => {
		carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
	})
})

carousel.addEventListener("mousemove", dragging);


