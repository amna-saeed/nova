  <!-- ✅ Modal HTML -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href="{{route('internet')}}">
            <img src="{{asset('assets/images/webImg/NOVA6popup.png')}}" class="modal-newss" />
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ✅ Include jQuery and Bootstrap 4 JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- ✅ Show modal on page load -->
  <script>
    $(document).ready(function () {
      $('#exampleModal').modal('show');
    });
  </script>
<style>
.modal-header {
    border: none;
    padding: 0px;
    margin: 0px;
    min-height: 0px;
}
img.modal-newss {
    width: 100%;
    border-radius: 11px !important;
}
.modal-header {
    border: none;
    padding: 0px;
    margin: 0px;
}
.modal-body {
    position: relative;
    padding: 0px;
    border-radius: 20px !important;
}
.modal-content{
    border-radius: 20px !important;
}
.modal-header .close {
    margin-top: 12px;
    position: absolute;
    z-index: 11111;
    color: #da0000;
    right: -38px;
    font-size: 56px;
    z-index: 1111;
    opacity: 1;
    font-weight: 500;
    box-shadow: none;
    border: red !important;
    top: -38px;
}
@media (min-width: 768px) {
    .modal-dialog {
        width: 500px !important;
        margin: 155px auto;
    }
}
.modal {
    background: rgba(255, 255, 255, .15) !important;
}


</style>
  