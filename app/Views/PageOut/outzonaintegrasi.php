<main class="main">

<style>
.outzona-section {
    background: #f4f6f8;
    padding: 60px 15px;
}

.outzona-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.outzona-title {
    font-size: 26px;
    font-weight: 700;
    color: #0d6efd;
    text-align: center;
    margin-bottom: 20px;
}

.outzona-img {
    width: 100%;
    border-radius: 12px;
    cursor: pointer;
    margin-bottom: 20px;
    transition: 0.3s;
}

.outzona-img:hover {
    transform: scale(1.02);
}

.outzona-content {
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

<section class="outzona-section">
  <div class="container">

    <div class="outzona-box">

      <div class="outzona-title">
        <?= esc($zona['header']) ?>
      </div>

      <?php if (!empty($zona['image'])): ?>
        <img 
          src="<?= base_url('uploads/zona_integrasi/' . $zona['image']) ?>" 
          class="outzona-img"
          onclick="openModal(this.src)"
        >
      <?php endif; ?>

      <div class="outzona-content">
        <?= $zona['content'] ?>
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