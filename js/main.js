


function loadHTML(elementId, url) {
  fetch(url)
      .then(response => response.text())
      .then(data => {
          document.getElementById(elementId).innerHTML = data;
      })
      .catch(error => console.error('Error loading HTML:', error));
}

loadHTML('carousel1-container', 'carousel1.html');
loadHTML('carousel2-container', 'carousel2.html');
loadHTML('carousel-left', 'carousel-left.html');
loadHTML('carousel-products', 'carousel-products.html');


