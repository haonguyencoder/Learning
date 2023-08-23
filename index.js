//Slider Images
var images = [
  "./images/10.jpg",
  "./images/11.jpg",
  "./images/12.jpg",
  "./images/13.jpg",
  "./images/15.jpg",
  "./images/16.jpg",
  "./images/18.jpg",
  "./images/19.jpg",
  "./images/21.jpg",
  "./images/22.jpg",
  "./images/23.jpg",
  "./images/24.jpg",
  "./images/27.jpg",
  "./images/28.jpg",
  "./images/29.jpg",
  "./images/30.jpg",
  "./images/31.jpg",
  "./images/32.jpg",
];
var num = 0;

function next() {
  var slider = document.getElementById("slider");
  num++;
  if (num >= images.length) {
    num = 0;
  }
  slider.src = images[num];
}

function prev() {
  var slider = document.getElementById("slider");
  num--;
  if (num < 0) {
    num = images.length - 1;
  }
  slider.src = images[num];
}
