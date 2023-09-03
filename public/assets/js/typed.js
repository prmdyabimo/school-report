const typingText = document.querySelector(".typing-text");

if (typingText) {
  var type = new Typed(typingText, {
    strings: ["SMK NEGERI 17 JAKARTA"],
    typeSpeed: 200,
    backSpeed: 40,
    loop: true,
  });
}
