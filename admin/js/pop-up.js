// JavaScript to handle pop-up forms
function showPopup(formId) {
    document.getElementById('popup-overlay').style.display = 'block';
    var form = document.getElementById(formId);
    form.style.display = 'block';
    form.classList.add('slide-in');
}

function hidePopup(formId) {
    document.getElementById('popup-overlay').style.display = 'none';
    var form = document.getElementById(formId);
    form.classList.remove('slide-in');
    form.style.display = 'none';
}

document.getElementById('add-category-btn').addEventListener('click', function() {
    showPopup('add-category-form');
});

document.getElementById('add-sub-category-btn').addEventListener('click', function() {
    showPopup('add-sub-category-form');
});

document.getElementById('close-category-form').addEventListener('click', function() {
    hidePopup('add-category-form');
});

document.getElementById('close-sub-category-form').addEventListener('click', function() {
    hidePopup('add-sub-category-form');
});

document.getElementById('popup-overlay').addEventListener('click', function() {
    hidePopup('add-category-form');
    hidePopup('add-sub-category-form');
});