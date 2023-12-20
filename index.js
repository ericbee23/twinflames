function changeImage(newSrc){
  var mainImage = document.getElementById('mainImage');
mainImage.src=newSrc

}

var imageIndex = 0;
var imagePaths = [
'images/Naomi background (1).jpg',
'images/Andre background (1).jpg',
'images/Eva Background (1).jpg'
];

function changeImage(newSrc) {
var mainImage = document.getElementById('mainImage');

mainImage.src = newSrc;

imageIndex = (imageIndex + 1) % imagePaths.length;
}


setInterval(function() {
changeImage(imagePaths[imageIndex]);
}, 5000);


document.addEventListener('DOMContentLoaded', function () {
  const spans = document.querySelectorAll('h2 span');

  spans.forEach((span, index) => {
    setTimeout(() => {
      span.style.opacity = '1';
      span.style.transform = 'translateY(0)';
    }, index * 700); 
 
})
})
