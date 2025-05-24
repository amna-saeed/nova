<div>
    <div id="cvFormContainer" >
        <form action="{{ route('send.cv') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required class="apply-input-flds">
            <input type="email" name="email" placeholder="Your Email" required class="apply-input-flds">
            <input type="number" name="number" placeholder="Phone" required class="apply-input-flds">
            <input type="file" name="cv" accept=".pdf,.doc,.docx" required class="apply-input-choose">
            <button type="submit"  class="sndng-cv">Send CV</button>
        </form>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.openFormBtn');
    const formContainer = document.getElementById('cvFormContainer');

    buttons.forEach(button => {
      button.addEventListener('click', function () {
        if (formContainer) {
          formContainer.style.display = 'block';
          formContainer.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  });
</script>

<style>

.apply-input-flds {
    display: block;
    margin-bottom: 10px;
    width: 249px;
    padding: 12px;
    border: 1px solid #b4b2b2;
    background: #fff !important;
    border-radius: 30px;
    height: 45px;
    font-size: 15px;
    font-weight: 600;
}
::placeholder{
    color: rgb(77 78 78) !important;
}
button.btn.btn-primary {
    background: #d1dae1;
    padding: 7px 23px;
    letter-spacing: 0px;
    border-radius: 6px;
    font-size: 16px;
    color: #052a73;
    font-weight: 700;
}
button.btn.btn-primary:hover {
  background: #052a73;
  padding: 7px 23px;
  letter-spacing: 0px;
  border-radius: 6px;
  font-size: 16px;
  color: #fdfdfd;
  font-weight: 700;
}
</style>


