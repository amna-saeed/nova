 {{-- Modal --}}
    <div class="modal fade" id="kuickModal1" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close new-termz" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body termz-100">
              <div class="row">
                <div class="col-lg-12">
                  <div class="kuick-box">
                    <h2>Pay Your Bills Using KuickPay!</h2>
                  </div>
                  <ul class="roundz-red internet-para termzz-mdl grid-3-cols">
                    <li class="fntz-red-100 bd-200">TCB</li>
                    <li class="fntz-red-100 bd-200">MCB</li>
                    <li class="fntz-red-100 bd-200">Meezan Bank</li>
                    <li class="fntz-red-100 bd-200">Askari Bank</li>
                    <li class="fntz-red-100 bd-200">Bank Alfalah</li>
                    <li class="fntz-red-100 bd-200">Faysal Bank</li>
                    <li class="fntz-red-100 bd-200">HMB</li>
                    <li class="fntz-red-100 bd-200">BOP</li>
                    <li class="fntz-red-100 bd-200">Soneri Bank</li>
                    <li class="fntz-red-100 bd-200">Summit Bank</li>
                    <li class="fntz-red-100 bd-200">Bank Islami</li>
                    <li class="fntz-red-100 bd-200">Dubai Islami Bank</li>
                    <li class="fntz-red-100 bd-200">Bank Al Habib</li>
                    <li class="fntz-red-100 bd-200">Keenu Wallet</li>
                    <li class="fntz-red-100 bd-200">UBL</li>
                    <li class="fntz-red-100 bd-200">National Bank</li>
                    <li class="fntz-red-100 bd-200">NRSP</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const modal = document.getElementById('kuickModal1');
        modal.addEventListener('hidden.bs.modal', function () {
          document.body.classList.remove('modal-open');
          document.body.style.paddingRight = '';
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) backdrop.remove();
          });
      </script>
      

    <style>
        body{
            padding-right: 0px !important;
        }
        .grid-3-cols {
          display: grid;
          grid-template-columns: repeat(3, 1fr); /* 3 equal columns */
          gap: 10px; /* space between columns and rows */
          padding: 0;
          list-style-type: none; /* optional, to remove default bullets */
        }
        .modal-header {
            border: none;
            padding: 0px;
            margin: 0px;
            min-height: 0px;
        }

        .modal-body.termz-100 {
            position: relative;
            padding: 0px 20px 0px 0px;
            border-radius: 20px !important;
        }

        .modal-content {
        border-radius: 15px !important;
        }

        .modal-header .close.new-termz{
            margin-top: 0px;
            position: absolute;
            color: #da0000;
            right: 5px;
            font-size: 52px;
            font-weight: 500;
            box-shadow: none;
            border: red !important;
            top: -3px;
            opacity: 1;
            z-index: 11;
        }
        .kuick-box h2 {
            text-align: center;
            font-size: 22px;
            color: #da0000;
        }
        @media (min-width: 768px) {
        .modal-dialog {
            width: 770px !important;
            margin: 60px auto;
        }
        }
        div#kuickModal1 {
            padding: 0px !important;
        }
        .modal-content {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        .modal {
            background: none !important;
        }
        .modal.show {
            background: linear-gradient(rgb(30 30 30 / 84%), #2120202e);
            background-size: cover !important;
        }
        li.fntz-red-100.bd-200 {
            font-size: 16px;
        }

        @media (min-width: 320px) and (max-width: 525px) {
            .kuick-box h2 {
                font-size: 19px;
            }
            .modal-header .close.new-termz{
                font-size: 45px;
            }
            li.fntz-red-100.bd-200 {
                font-size: 14px;
            }
            .roundz-red li {
                padding-left: 25px;
                font-size: 14px;
                margin-bottom: 10px;
                line-height: 21px;
            }
            .footer-widget.latest-post {
                display: none;
            }
        }
    </style>