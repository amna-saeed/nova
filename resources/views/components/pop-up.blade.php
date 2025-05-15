
  
  <!-- ✅ Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- ✅ Modal HTML (Correct structure) -->
  <div class="modal fade" id="refreshModal" tabindex="-1" aria-labelledby="refreshModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <!-- center the modal -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="refreshModalLabel">Welcome!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ✅ Modal now shows correctly!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ✅ Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ✅ Show Modal on Load -->
  <script>
    window.addEventListener('load', function () {
      const modalElement = document.getElementById('refreshModal');
      const myModal = new bootstrap.Modal(modalElement);
      myModal.show();
    });
  </script>

