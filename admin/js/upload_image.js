function previewImage(event) {
    const file = event.target.files[0];
    const previewImg = document.getElementById('preview-img');

    previewImg.style.display = 'none';

    if (!file) {
        return;
    }

    // Check file size (10MB max)
    if (file.size > 10 * 1024 * 1024) {
        alert('File size must be less than 10MB.');
        return;
    }

    const img = new Image();
    img.onload = function() {
        const width = img.naturalWidth;
        const height = img.naturalHeight;

        // Check image dimensions
        if (width < 250 || width > 300 || height < 250 || height > 300) {
            alert('Image dimensions must be between 250x250 and 300x300 pixels.');
        } else {
            previewImg.src = img.src;
            previewImg.style.display = 'block';
        }
    };

    const reader = new FileReader();
    reader.onload = function() {
        img.src = reader.result;
    };
    reader.readAsDataURL(file);
}