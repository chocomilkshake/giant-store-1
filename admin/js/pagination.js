document.addEventListener('DOMContentLoaded', function() {
    const productsPerPage = 8;
    let currentPage = 1;
  
    
    const productContainer = document.getElementById('product-container');
    const pageInfo = document.getElementById('page-info');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
  
    function displayProducts(page) {
      productContainer.innerHTML = '';
      const start = (page - 1) * productsPerPage;
      const end = start + productsPerPage;
      const paginatedProducts = products.slice(start, end);
      productContainer.innerHTML = paginatedProducts.join('');
      pageInfo.textContent = `Page ${page} of ${Math.ceil(products.length / productsPerPage)}`;
  
      prevBtn.disabled = page === 1;
      nextBtn.disabled = page === Math.ceil(products.length / productsPerPage);
    }
  
    prevBtn.addEventListener('click', function() {
      if (currentPage > 1) {
        currentPage--;
        displayProducts(currentPage);
      }
    });
  
    nextBtn.addEventListener('click', function() {
      if (currentPage < Math.ceil(products.length / productsPerPage)) {
        currentPage++;
        displayProducts(currentPage);
      }
    });
  
    displayProducts(currentPage);
  });