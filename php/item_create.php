<?php include 'include.php'; ?>
<!-- <form id="itemForm"> -->
  <div class="container">
    <div class="item-title">
      <input type="text" class="input" name="" placeholder="title" id="">
    </div>
    <div class="item-container">
      <div class="item-image">
        <input type="file" id="imageInput" accept="image/*" style="display: none;">
        <button onclick="document.getElementById('imageInput').click()" class="buttonClass">
          Upload Image
        </button>
        <div id="imagePreview">
        </div>
      </div>
      <div class="item-stats" id="itemStats">
        <div class="item-line">
          <input type="text" class="input" name="" placeholder="" id="">
          <input type="text" class="input" name="" placeholder="" id="">
        </div>
      </div>
      <div class="stats-controls">
        <button onclick="addItemLine()" class="buttonClass">
          Add Line
        </button>
        <button onclick="removeLastLine()" class="buttonClass">
          Remove Last Line
        </button>
      </div>
    </div>
    <fieldset>
      <legend>
        Select a type:
      </legend>
      <div>
        <input type="radio" id="type-item-1" name="type" value="type-1" checked
        />
        <label for="type-1">
          type 1
        </label>
      </div>
      <div>
        <input type="radio" id="type-item-2" name="type" value="type-2" />
        <label for="type-2">
          type 2
        </label>
      </div>
    </fieldset>
    <div class="gallery">
      <div class="gallery-controls">
        <input type="file" id="galleryImageInput" accept="image/*" style="display: none;">
        <button onclick="document.getElementById('galleryImageInput').click()"
        class="buttonClass">
          Add Gallery Image
        </button>
      </div>
      <div id="imageGallery" class="carousel-container">
        <div class="carousel-images">
        </div>
        <button class="carousel-button prev">
          &lt;
        </button>
        <button class="carousel-button next">
          &gt;
        </button>
      </div>
    </div>
    <button onclick="saveItem()" class="buttonClass">Save Item</button>
  </div>
<!-- </form> -->
<script src="../js/script.js"></script>