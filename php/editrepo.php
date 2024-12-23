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
                console.error('Error:', error, data);
              });
          }).catch((error) => {
            console.log('Saving failed: ', error)
            console.log('Data that was being sent:', postData);
          });
        } else {
          console.error('Editor.js не был инициализирован');
        }
      });
    });
</script>