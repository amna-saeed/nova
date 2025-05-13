<div>
    <!-- Icon/Button -->
    <div class="box-form-outer" onclick="toggleForm()">
        <img src="{{asset('assets/images/webImg/faq-unscreen.gif')}}" class="gif-form" />
    </div>

    <!-- Form -->
    <div class="open-form-outer-box" id="formOverlay">
        <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Name" />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Phone" />
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Email" />
            </div>
            <div class="mb-3">
              <select class="form-select">
                <option selected disabled>Select Option</option>
                <option value="new">New Connection</option>
                <option value="info">Information</option>
                <option value="billing">Billing</option>
                <option value="complaint">Complaint</option>
                <option value="feedback">Feedback</option>
              </select>
            </div>
            <div class="w-100 text-center">
              <button type="submit" class="btn btn-primary">
                Submit <span class="send-icon"></span>
              </button>
            </div>
          </form>
          
    </div>
</div>

<style>
/* Fixed icon style */
.box-form-outer {
    position: fixed;
    bottom: 20px;
    right: 20px;
    cursor: pointer;
    z-index: 1000;
}
img.gif-form {
    width: 85px;
}
button.btn-form {
    color: #fff;
    background: green;
    border: green;
    width: 97px;
    padding: 10px;
    border-radius: 7px;
    letter-spacing: 1px;
}


/* Hidden form by default */
.open-form-outer-box {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    padding: 20px;
    z-index: 999;
    border-radius: 7px;
    background: linear-gradient(45deg, #feb291, #c4d0d8);
    border: 1px solid #b0b0b0;
}
.open-form-outer-box form input {
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
select.form-select{
    margin-bottom: 10px;
    width: 249px;
    padding: 12px;
    border: 1px solid #b4b2b2;
    background: #fff !important;
    border-radius: 30px;
    font-size: 15px;
    font-weight: 600;
    color: rgb(77 78 78) !important;
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

<script>
function toggleForm() {
    const form = document.getElementById('formOverlay');
    form.style.display = form.style.display === 'block' ? 'none' : 'block';
}
</script>
