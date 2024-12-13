<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
  <h1>Hello World!!</h1>
  <?php
    include './include.php';
  ?>
  
  <div class="news-title-create"><input type="text" id="news-title" placeholder="Введите название новости"></div>
  <div id="editorjs" style="margin-bottom: 20px;"></div>
  <button id="save-button">Сохранить статью</button>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Объявляем editor в глобальной области видимости
      window.editor = new EditorJS({
        holder: 'editorjs',
        tools: {
          header: {
            class: Header,
            inlineToolbar: true,
            config: {
              placeholder: 'Введите заголовок'
            },
            shortcut: 'CMD+SHIFT+H'
          },
          image: {
            class: ImageTool,
            config: {
              endpoints: {
                byFile: 'upload.php', // Update this line
                byUrl: 'http://localhost/fetchUrl.php',
              }
            }
          },

          quote: {
            class: Quote,
            inlineToolbar: true,
            config: {
              quotePlaceholder: 'Введите цитату',
              captionPlaceholder: 'Автор'
            },
            shortcut: 'CMD+SHIFT+Q'
          },
          paragraph: {
            class: Paragraph,
            inlineToolbar: true,
          },
          embed: Embed,
          table: Table,
          inlineCode: InlineCode,
        },
        placeholder: 'Начните писать свою статью...',
        onReady: () => {
          // Обработчик события готовности редактора
          console.log('Editor.js готов к работе');
        },
        onChange: () => {
          console.log('Содержание изменилось');
        }
      });

      document.getElementById('save-button').addEventListener('click', () => {
        const newsTitle = document.getElementById('news-title').value;
        if (window.editor) {
          window.editor.save().then((outputData) => {
            const postData = {
              title: newsTitle,
              content: outputData
            };
            fetch('saveArticle.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify(postData)
              }).then(response => response.json())
              .then(data => {
                console.log('Success:', data);
              }).catch((error) => {
                console.error('Error:', error);
              });
          }).catch((error) => {
            console.log('Saving failed: ', error)
          });
        } else {
          console.error('Editor.js не был инициализирован');
        }
      });
    });
  </script>

    <script src="../js/script.js">
    <script src="editor.js">
</body>
</html>
