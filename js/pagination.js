document.addEventListener('DOMContentLoaded', function() {
  // Number of products displayed per page
  const productsPerPage = 8;
  let currentPage = 1; // Keeps track of the current page

  // Selecting necessary elements from the DOM
  const productContainer = document.getElementById('product-container');
  const pageInfo = document.getElementById('page-info');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');

  // Check if elements exist before proceeding
  if (!productContainer || !pageInfo || !prevBtn || !nextBtn) {
      console.error("Pagination elements not found in the DOM.");
      return;
  }

  // Function to generate the HTML for each product card
  function generateProductHTML(product) {
      return `
      <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
              <div class="card-product__img">
                  <img class="card-img" src="${product.img_dir}" alt="">
                  <a href="single-product.php?id=${product.id}">
                  <ul class="card-product__imgOverlay">
                      <li><button><i class="ti-shopping-cart"></i></button></li>
                  </ul>
                  </a>
              </div>
              <div class="card-body">
                  <p>${product.category} | ${product.sub_category}</p>
                  <h4 class="card-product__title"><a href="single-product.php?id=${product.id}">${product.name}</a></h4>
                  <p class="card-product__price">₱${product.price}</p>
              </div>
          </div>
      </div>`;
  }

  // Function to display the products on the page based on pagination
  function displayProducts(page) {
      productContainer.innerHTML = ''; // Clear current product listings

      // Calculate the starting and ending index for products on the current page
      const start = (page - 1) * productsPerPage;
      const end = start + productsPerPage;

      // Slice the products array to get the relevant products for the page
      const paginatedProducts = products.slice(start, end);

      // Generate and insert product cards into the container
      productContainer.innerHTML = paginatedProducts.map(generateProductHTML).join('');

      // Update the page info text
      pageInfo.textContent = `Page ${page} of ${Math.ceil(products.length / productsPerPage)}`;

      // Disable/Enable pagination buttons based on current page
      prevBtn.disabled = page === 1;
      nextBtn.disabled = page === Math.ceil(products.length / productsPerPage);
  }

  // Event listener for the Previous button
  prevBtn.addEventListener('click', function() {
      if (currentPage > 1) {
          currentPage--; // Move to the previous page
          displayProducts(currentPage); // Update product display
      }
  });

  // Event listener for the Next button
  nextBtn.addEventListener('click', function() {
      if (currentPage < Math.ceil(products.length / productsPerPage)) {
          currentPage++; // Move to the next page
          displayProducts(currentPage); // Update product display
      }
  });

  // Initial rendering of products on page load
  displayProducts(currentPage);
});
