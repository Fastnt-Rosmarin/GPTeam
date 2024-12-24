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