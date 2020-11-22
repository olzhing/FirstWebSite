var pics = document.getElementById("carousel").getElementsByTagName("img");
bigImage = document.querySelector("#bigImage").getElementsByTagName("img");
img = bigImage[0];

for (i = 0; i < pics.length; i++) {
  (function () {
    pics[i].addEventListener("click", function () {
      var src = this.src;
      img.src = src;
    });
  })();
}