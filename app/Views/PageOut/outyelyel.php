<main class="main">

<style>
.outyel-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outyel-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outyel-title {
    font-size: 26px;
    font-weight: 700;
    color: #20c997;
    text-align: center;
    margin-bottom: 20px;
}

.outyel-img {
    width: 100%;
    border-radius: 12px;
    cursor: pointer;
    margin-bottom: 20px;
    transition: 0.3s;
}

.outyel-img:hover {
    transform: scale(1.02);
}

.outyel-content {
    font-size: 16px;
    line-height: 1.7;
    color: #333;
}

/* Modal */
.modal-img {
    display: none;
    position: fixed;
    z-index: 999;
    padding-top: 60px;
    left: 0; top: 0;
    width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.9);
}

.modal-img-content {
    margin: auto;
    display: block;
    max-width: 80%;
    border-radius: 12px;
}

.close-modal {
    position: absolute;
    top: 20px;
    right: 40px;
    color: #fff;
    font-size: 40px;
    cursor: pointer;
}
</style>

<section class="outyel-section">
  <div class="container">

    <div class="outyel-box">

      <div class="outyel-title">
        <?= esc($yel['header']) ?>
      </div>

      <?php if (!empty($yel['image'])): ?>
        <img 
          src="<?= base_url('uploads/yel_yel/' . $yel['image']) ?>" 
          class="outyel-img"
          onclick="openModal(this.src)"
        >
      <?php endif; ?>

      <div class="outyel-content">
        <?= $yel['content'] ?>
      </div>

    </div>

  </div>
</section>

<!-- Modal -->
<div id="imgModal" class="modal-img">
  <span class="close-modal" onclick="closeModal()">&times;</span>
  <img class="modal-img-content" id="modalImg">
</div>

<script>
function openModal(src) {
    document.getElementById("imgModal").style.display = "block";
    document.getElementById("modalImg").src = src;
}

function closeModal() {
    document.getElementById("imgModal").style.display = "none";
}
</script>

</main>