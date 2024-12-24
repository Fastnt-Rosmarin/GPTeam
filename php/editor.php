
<body>
  <h1>Hello World!!</h1>
  <?php
    include './include.php';
  ?>
  
  <div class="news-title-create"><input type="text" id="news-title" placeholder="Введите название новости"></div>
  <div id="editorjs" style="margin-bottom: 20px;"></div>
  <button id="save-button" class="buttonClass" onclick="saveFunction()">Сохранить статью</button>
  
  <?php
    include './editrepo.php';
  ?>
  <script src="../js/script.js"></script>
</body>
</html>
