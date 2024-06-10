console.log("❤️💖❤️💖❤️💖❤️💖");
console.log("🥰🥰😍😍");
console.log(
  "❤️Eu vou casar com essa mulher. Daiane, você é o amor da minha vida ❤️"
);
console.log("😍😍🥰🥰");
console.log("❤️💖❤️💖❤️💖❤️💖");
var infoIcon = document.querySelector("#info-icon");
var infoP = document.querySelector("#info-p");
document.head.appendChild(
  Object.assign(document.createElement("link"), {
    rel: "icon",
    href: "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='78'>❤️</text></svg>",
  })
);
function scrollToNextSection(sectionId) {
  const section = document.getElementById(sectionId);
  if (section) {
    section.scrollIntoView({ behavior: "smooth" });
  }
}
function showParagraph() {
  infoP.style.opacity = "1";
}
infoIcon.addEventListener("mouseover", function () {
  infoP.style.opacity = "1";
});
infoIcon.addEventListener("mouseout", function () {
  infoP.style.opacity = "0";
});
