<main class="main">

<style>
.outbudaya-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outbudaya-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    text-align: center;
}

.outbudaya-title {
    font-size: 24px;
    font-weight: 700;
    color: #fd7e14;
    margin-bottom: 20px;
}

.outbudaya-img {
    max-width: 100%;
    border-radius: 12px;
    cursor: pointer;
    transition: 0.3s;
}

.outbudaya-img:hover {
    transform: scale(1.03);
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

<section class="outbudaya-section">
  <div class="container">

    <div class="outbudaya-box">

      <div class="outbudaya-title">
        <?= esc($budaya['header']) ?>
      </div>

      <?php if (!empty($budaya['image'])): ?>
        <img 
          src="<?= base_url('uploads/lima-budaya/' . $budaya['image']) ?>" 
          class="outbudaya-img"
          onclick="openModal(this.src)"
        >
      <?php else: ?>
        <p>Gambar tidak tersedia</p>
      <?php endif; ?>

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