function saveFunction() {
    const title = document.getElementById('news-title').value;
    
    editor.save().then((outputData) => {
        // Send data to PHP endpoint
        fetch('save_article.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                title: title,
                content: outputData
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
        })
        .catch((error) => {
            console.log('Error:', error);
        });
    });
};
document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('imageInput');
    const galleryImageInput = document.getElementById('galleryImageInput');
    
    if (imageInput) {
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const formData = new FormData();
            formData.append('image', file);

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    const imagePreview = document.getElementById('imagePreview');
                    imagePreview.innerHTML = `<img src="${data.file.url}" style="max-width: 300px; margin-top: 10px;">`;
                    mainImageName = data.file.url;  // Set the main image URL here
                }
            });
        });
    }

    if (galleryImageInput) {
        galleryImageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const formData = new FormData();
            formData.append('image', file);

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    uploadedImages.push(data.file.url);
                    updateGallery();
                }
            });
        });
    }
});
function addItemLine() {
    const itemStats = document.getElementById('itemStats');
    const newLine = document.createElement('div');
    newLine.className = 'item-line';
    newLine.innerHTML = `
        <input type="text" class="input" name="" placeholder="" id="">
        <input type="text" class="input" name="" placeholder="" id="">
    `;
    itemStats.appendChild(newLine);
}

function removeLastLine() {
    const itemStats = document.getElementById('itemStats');
    const lines = itemStats.getElementsByClassName('item-line');
    if (lines.length > 1) {
        itemStats.removeChild(lines[lines.length - 1]);
    }
}
let uploadedImages = [];
let currentImageIndex = 0;

function updateGallery() {
    const galleryContainer = document.querySelector('.carousel-images');
    galleryContainer.innerHTML = '';
    
    if (!uploadedImages || !Array.isArray(uploadedImages)) {
        uploadedImages = [];
    }
    
    uploadedImages.forEach((image, index) => {
        const imageElement = document.createElement('div');
        imageElement.className = `carousel-image ${index === currentImageIndex ? 'active' : ''}`;
        imageElement.innerHTML = `
            <img src="${image}" alt="Gallery image">
            <button class="remove-image" onclick="removeImage(${index})">×</button>
        `;
        galleryContainer.appendChild(imageElement);
    });
}

// Call updateGallery when the page loads
document.addEventListener('DOMContentLoaded', function() {
    updateGallery();
});


function removeImage(index) {
    uploadedImages.splice(index, 1);
    if (currentImageIndex >= uploadedImages.length) {
        currentImageIndex = Math.max(0, uploadedImages.length - 1);
    }
    updateGallery();
}

document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('imageInput');
    if (imageInput) {
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const formData = new FormData();
            formData.append('image', file);

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    uploadedImages.push(data.file.url);
                    updateGallery();
                }
            });
        });
    }

    // Carousel navigation
    document.querySelector('.prev').addEventListener('click', () => {
        if (uploadedImages.length > 0) {
            currentImageIndex = (currentImageIndex - 1 + uploadedImages.length) % uploadedImages.length;
            updateGallery();
        }
    });

    document.querySelector('.next').addEventListener('click', () => {
        if (uploadedImages.length > 0) {
            currentImageIndex = (currentImageIndex + 1) % uploadedImages.length;
            updateGallery();
        }
    });
});
let mainImageName = '';

function saveItem() {
    const title = document.querySelector('.item-title input').value;
    const type = document.querySelector('input[name="type"]:checked').value;
    
    const lines = [];
    document.querySelectorAll('.item-line').forEach((line) => {
        const inputs = line.querySelectorAll('input');
        lines.push({
            key: inputs[0].value,
            value: inputs[1].value
        });
    });

    const requestData = {
        title: title,
        main_image: mainImageName,
        type: type,
        lines: lines,
        gallery: uploadedImages
    };

    // Add itemId if it exists (editing mode)
    if (typeof itemId !== 'undefined') {
        requestData.itemId = itemId;
    }

    fetch('save_item.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(requestData)
    })
    .then(response => response.text())
    .then(rawResponse => {
        const data = JSON.parse(rawResponse);
        if (data.success) {
            window.location.href = 'display_items.php';
        } else {
            console.log('Error:', data.message);
        }
    })
    .catch((error) => {
        console.log('Fetch error:', error);
    });
}
