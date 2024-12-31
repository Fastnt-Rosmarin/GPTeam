
<body>
  <h1>Hello World!!</h1>
  <?php
    include './include.php';
  ?>
<div class="containerAlpha">
  <div class="container">
    <div class="titleInput"><input type="text" class="input" id="news-title" placeholder="Введите название новости"></div>
    <div id="editorjs" style="margin-bottom: 20px;"></div>
    <div class="buttonContainer">
      <button id="save-button" class="buttonClass" onclick="saveFunction()">Сохранить статью</button>
    </div>
  </div>
</div>
 
  
  <?php
    include './editrepo.php';
  ?>
  <script src="../js/script.js"></script>
</body>
</html>
