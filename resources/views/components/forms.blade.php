<div>
    <!-- Icon/Button -->
    <div class="box-form-outer" onclick="toggleForm()">
        <img src="{{asset('assets/images/webImg/faq-unscreen.gif')}}" class="gif-form" />
    </div>

    <!-- Form -->
    <div class="open-form-overlay" id="formOverlay">
        <form>
            <input type="text" placeholder="Name" value="" class="form-user" />
            <input type="text" placeholder="Email" value="" class="form-user" />
            <input type="text" placeholder="Message" value=""  />
            <div class="w-100 text-center">
                <button class="btn-form">Submit <span class="send-icon"><img src="" /></span></button>
            </div>
        </form>
    </div>
</div>

<style>
/* Fixed icon style */
.box-form-outer {
    position: fixed;
    bottom: 20px;
    right: 20px;.open-form-overlay
    cursor: pointer;
    z-index: 1000;
}
img.gif-form {
    width: 77px;
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
.open-form-overlay {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    padding: 20px;
    z-index: 999;
    box-shadow: 0 0 7px rgb(4 40 110);
    border-radius: 5px;
    background: linear-gradient(45deg, #27a1ca, transparent);
}


.open-form-overlay form input {
    display: block;
    margin-bottom: 10px;
    width: 249px;
    padding: 12px;
    border: 1px solid #b4b2b2;
    background: #fff !important;
    border-radius: 30px;
}
</style>

<script>
function toggleForm() {
    const form = document.getElementById('formOverlay');
    form.style.display = form.style.display === 'block' ? 'none' : 'block';
}
</script>
