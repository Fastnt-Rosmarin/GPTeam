<?php
include 'include.php';

if(isset($_GET['id'])) {
    $item_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM items WHERE id = ?");
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();
    
    $data = json_decode($item['data'], true);
    $gallery = json_decode($item['gallery_imgs'], true);
} else {
    header("Location: display_items.php");
    exit();
}
?>

<div class="container">
    <div class="item-title">
        <input type="text" class="input" name="" placeholder="title" id="" value="<?php echo htmlspecialchars($item['name']); ?>">
    </div>
    <div class="item-container">
        <div class="item-image">
            <input type="file" id="imageInput" accept="image/*" style="display: none;">
            <button onclick="document.getElementById('imageInput').click()" class="buttonClass">
                Upload Image
            </button>
            <div id="imagePreview">
                <?php if($item['main_image']): ?>
                    <img src="<?php echo $item['main_image']; ?>" style="max-width: 300px; margin-top: 10px;">
                <?php endif; ?>
            </div>
        </div>
        <div class="item-stats" id="itemStats">
            <?php foreach($data as $line): ?>
                <div class="item-line">
                    <input type="text" class="input" value="<?php echo htmlspecialchars($line['key']); ?>">
                    <input type="text" class="input" value="<?php echo htmlspecialchars($line['value']); ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="stats-controls">
            <button onclick="addItemLine()" class="buttonClass">Add Line</button>
            <button onclick="removeLastLine()" class="buttonClass">Remove Last Line</button>
        </div>
    </div>
    <fieldset>
        <legend>Select a type:</legend>
        <div>
            <input type="radio" id="type-item-1" name="type" value="type-1" <?php echo $item['type'] == 'type-1' ? 'checked' : ''; ?>>
            <label for="type-1">type 1</label>
        </div>
        <div>
            <input type="radio" id="type-item-2" name="type" value="type-2" <?php echo $item['type'] == 'type-2' ? 'checked' : ''; ?>>
            <label for="type-2">type 2</label>
        </div>
    </fieldset>
    <div class="gallery">
        <div class="gallery-controls">
            <input type="file" id="galleryImageInput" accept="image/*" style="display: none;">
            <button onclick="document.getElementById('galleryImageInput').click()" class="buttonClass">
                Add Gallery Image
            </button>
        </div>
        <div id="imageGallery" class="carousel-container">
            <div class="carousel-images">
                <?php foreach($gallery as $img): ?>
                    <div class="carousel-image">
                        <img src="<?php echo $img; ?>" alt="Gallery image">
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-button prev">&lt;</button>
            <button class="carousel-button next">&gt;</button>
        </div>
    </div>
    <button onclick="saveItem()" class="buttonClass">Save Changes</button>
</div>

<script>
    mainImageName = '<?php echo $item['main_image']; ?>';
    uploadedImages = <?php echo json_encode($gallery); ?>;
    let itemId = <?php echo $item_id; ?>;
</script>
<script src="../js/script.js"></script>
