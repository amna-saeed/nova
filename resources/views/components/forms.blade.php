<div>
    <!-- Icon/Button -->
    <div class="box-form-outer" onclick="toggleForm()">
        <img src="{{asset('assets/images/webImg/faq-unscreen.gif')}}" class="gif-form" />
    </div>

    <!-- Form -->
    <div class="open-form-outer-box" id="formOverlay">
          @if(Session::has('success'))
              <div class= "alert alert-success">
                  {{Session::get('success')}}
              </div>
          @endif
          <form action="{{ route('submit-lead') }}" method="POST">
            
            {{ csrf_field() }}
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name" required />
            </div>
            <div class="mb-3">
                <input type="text" name="phone" class="form-control" placeholder="Phone" required />
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required />
            </div>
            <div class="mb-3">
                <select name="option" class="form-select" required>
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

<script>
window.addEventListener('DOMContentLoaded', function () {
    const successAlert = document.querySelector('.alert-success');
    const formOverlay = document.getElementById('formOverlay');

    // If there is a success message, show only the message and hide the form
    if (successAlert) {
        // Show form container (to show the success message)
        formOverlay.style.display = 'block';

        // Hide the form inside (but keep success message visible)
        const form = formOverlay.querySelector('form');
        if (form) {
            form.style.display = 'none';
        }
    }
});

// Toggle function for manual open/close
function toggleForm() {
    const formOverlay = document.getElementById('formOverlay');
    const form = formOverlay.querySelector('form');
    const successAlert = document.querySelector('.alert-success');

    // Only toggle the form if there is no success message
    if (!successAlert) {
        if (formOverlay.style.display === 'block') {
            formOverlay.style.display = 'none';
        } else {
            formOverlay.style.display = 'block';
            if (form) form.style.display = 'block';
        }
    }
}
</script>



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
.open-form-outer-box {
    transition: opacity 0.5s ease;
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
.alert-success {
    color: #da0000;
    font-size: 15px;
    font-weight: 700;
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
@media (min-width: 320px) and (max-width: 525px) {
    img.gif-form {
		width: 77px;
	}
	.box-form-outer {
		position: fixed;
		bottom: 20px;
		right: 0px;
		cursor: pointer;
		z-index: 1000;
	}
}

</style>

<script>
function toggleForm() {
    const form = document.getElementById('formOverlay');
    form.style.display = form.style.display === 'block' ? 'none' : 'block';
}
</script>
