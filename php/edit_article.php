
<?php
include 'include.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['article_id'])) {
    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $stmt = $conn->prepare("UPDATE articles SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $article_id);
    
    if ($stmt->execute()) {
        header("Location: pages.php");
        exit();
    } else {
        echo "Error updating article";
    }
    
    $stmt->close();
} else if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->bind_param("i", $article_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $article = $result->fetch_assoc();
} else {
    header("Location: pages.php");
    exit();
}
?>
<div class="containerAlpha">
<div class="container">
<form id="editForm" method="POST">
    <input type="hidden" name="article_id" value="<?php echo $article['id']; ?>">
    <div class="titleInput">
        <input type="text" name="news-title" class="input" value="<?php echo htmlspecialchars($article['title']); ?>" id="news-title" placeholder="Enter article title">
    </div>
    <div id="editorjs"></div>
    <input type="hidden" name="content" id="content">
    <button type="button" class="buttonClass" id="save-button">Save Changes</button>
</form>
</div>
</div>


<?php

// Проверка, является ли запрос POST для сохранения данных
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data = json_decode(file_get_contents('php://input'), true);

  if (isset($data['id']) && isset($data['title']) && isset($data['content'])) {
    $news_id = $data['id'];
    $title = $data['title'];
    $content = json_encode($data['content'], JSON_UNESCAPED_UNICODE);

    // Обновление данных новости
    $sql = "UPDATE articles SET title = ?, content = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssi', $title, $content, $news_id);

    if ($stmt->execute()) {
      echo json_encode(['success' => true]);
    } else {
      echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
  } else {
    echo json_encode(['success' => false, 'error' => 'Invalid data']);
  }

  $conn->close();
  exit;
}

// Получение id новости из GET параметра
if (isset($_GET['id'])) {
  $news_id = $_GET['id'];

  // Запрос на выборку конкретной новости
  $sql = "SELECT title, content FROM articles WHERE id = $news_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Вывод JSON содержимого новости
    $row = $result->fetch_assoc();
    $news_title = htmlspecialchars($row["title"]);
    $news_content = $row["content"];
  } else {
    echo "Нет такой новости";
    $news_title = '';
    $news_content = json_encode([]);
  }
} else {
  echo "Неверные параметры запроса";
  $news_title = '';
  $news_content = json_encode([]);
}

$conn->close();
?>


<script>
  document.addEventListener('DOMContentLoaded', () => {
    const editor = new EditorJS({
      holder: 'editorjs',
      tools: {
        header: Header,
        paragraph: Paragraph,
        image: {
          class: ImageTool,
          config: {
            endpoints: {
              byFile: 'upload.php', // Update this line
              byUrl: 'http://localhost/fetchUrl.php',
            }
          }
        },
        quote: Quote,
        table: Table,
        embed: Embed,
      },
      data: <?php echo $news_content; ?>
    });
    document.getElementById('save-button').addEventListener('click', () => {
      const title = document.getElementById('news-title').value;
      editor.save().then((outputData) => {
        fetch(window.location.href, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            id: <?php echo $news_id; ?>,
            title: title,
            content: outputData
          }),
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('Новость успешно сохранена');
          } else {
            alert('Ошибка сохранения: ' + data.error);
          }
        })
        .catch(error => {
          console.error('Ошибка:', error);
        });
      }).catch((error) => {
        console.log('Сохранение данных не удалось: ', error);
      });
    });
  });
</script>
<script src="../js/script.js"></script>