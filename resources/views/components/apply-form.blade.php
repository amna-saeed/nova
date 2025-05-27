<!-- CV Form (Initially Hidden) -->
<div id="cvFormContainer" class="cv-form">
  <h2 class="nova-forms">Apply Now</h2>
    <p><span class="redz-100">Opportunities</span> don’t wait!</p>
    <p>Fill out the form and get <span class="redz-100">started!</span></p>
    <form action="{{ route('send.cv') }}" method="POST" enctype="multipart/form-data" class="mrgnz-full"> 
       @csrf
        <button type="button" id="closeFormBtn" class="close 300-frmz">&times;</button>
        <input type="text" name="name" placeholder="Your Name" required class="apply-input-flds">
        <input type="email" name="email" placeholder="Your Email" required class="apply-input-flds">
        <input type="number" name="number" placeholder="Phone" required class="apply-input-flds">
        <input type="file" name="cv" accept=".pdf,.doc,.docx" required class="apply-input-flds">
        <div class="w-100 text-center">
            <button type="submit" class="sndng-cv">Submit</button>
        </div>
    </form>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const openBtns = document.querySelectorAll('.openFormBtn');
    const formContainer = document.getElementById('cvFormContainer');
     const closeBtn = document.getElementById('closeFormBtn');

    openBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        formContainer.style.display = 'block'; 
      });
    });
    if (closeBtn) {
      closeBtn.addEventListener('click', function () {
        formContainer.style.display = 'none';
      });
    }
  });
</script>

<style>
button#closeFormBtn {
    right: 15px;
    border: none;
    font-size: 24px;
    cursor: pointer;
    top: 0;
    color: #da0000 !important;
    opacity: 1;
    position: absolute;
    font-size: 45px;
    font-weight: 600;
}
div#cvFormContainer p {
    text-align: center;
    margin: 0px;
    font-size: 21px;
    font-weight: 500;
    color: black;
    line-height: 30px;
    text-transform: capitalize;
}
.redz-100 {
    color: #da0000;
    font-size: 21px;
    font-weight: 600;
}
form.mrgnz-full {
  margin: 40px 0px 0px;
}  
.cv-form {
    position: fixed;
    top: 0;
    width: 37%;
    height: 100vh;
    background: linear-gradient(45deg, #f5f5f5, #ffffff);
    padding: 28px 37px;
    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
    z-index: 9999;
    transition: transform 0.5s ease;
    transform: translateX(100%);
    display: block;
    right: 494px;
}
h2.nova-forms {
    margin: 6px 0px 10px;
    text-align: center;
    color: #da0000;
}
.cv-form.active {
transform: translateX(0);
}
/* Input styles */
.apply-input-flds {
  margin-bottom: 15px;
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 16px;
}

/* Submit button */
.sndng-cv {
    background: #313bae;
    color: white;
    padding: 9px 40px;
    border: none;
    border-radius: 7px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    margin-right: auto;
    margin-left: auto;
    justify-content: center;
    margin-top: 17px;
}

/* Close button */
.closeFormBtn {
  margin-left: 10px;
  background: #888;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
}
::placeholder{
  color: black !important;
}
</style>


