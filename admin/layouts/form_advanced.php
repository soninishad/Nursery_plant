<?php
include ('nav.php');
?>


      <!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active  aria-current="page">Advanced Elements</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Advanced Elements</h1>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Input Formats</div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label">Credit Card</label>
                      <input class="form-control mb-2 input-credit-card" type="text" placeholder="Enter credit card number">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Date</label>
                      <input class="form-control input-date mb-2" type="text" placeholder="YYYY/MM/DD">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Numeral formatting</label>
                      <input class="form-control input-numeral mb-2" type="text" placeholder="Enter a large number">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Prefix</label>
                      <input class="form-control input-prefix mb-2" type="text">
                    </div>
                  </div>
                  <div class="card-footer">
                    Cleave.js is a small library for input formatting. Check out their <a href="http://nosir.github.io/cleave.js/" target="_blank">documentation</a>. <strong>Nice to know:</strong> There are also Angular and ReactJS components available.
                  </div>
                </div>

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Advanced Select (Choices.js)</div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label">Single Select</label>
                      <select name="select" class="form-control js-choice">
                        <option value="1">Sample value</option>
                        <option value="2">Sample value 2</option>
                        <option value="3">Sample value 3</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="form-label">Multiple Select</label>
                      <select name="select" multiple class="form-control js-choice">
                        <option value="1">Sample value</option>
                        <option value="2" selected>Sample value 2</option>
                        <option value="3">Sample value 3</option>
                      </select>
                    </div>

                    <div class="form-group mb-0">
                      <label class="form-label">Multople Select With remove icon</label>
                      <select name="select" multiple class="form-control js-choice-remove">
                        <option value="1">Sample value</option>
                        <option value="2" selected>Sample value 2</option>
                        <option value="3">Sample value 3</option>
                      </select>
                    </div>
                  </div>
                  <div class="card-footer">
                    Choices.js is a fantastic library for custom selects with tons of options. Check out their <a href="https://joshuajohnson.co.uk/Choices/" target="_blank">documentation</a> for more options and examples.
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Date Picker</div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label">Date Picker Default</label>
                      <input class="form-control mb-2 date-default" type="text" placeholder="Pick date">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Date &amp; Time Picker</label>
                      <input class="form-control mb-2 date-time" type="text" placeholder="Pick date and time">
                    </div>

                    <div class="form-group">
                      <label class="form-label">Humand friendly date</label>
                      <input class="form-control date-human" type="text" placeholder="Pick date">
                      <small id="emailHelp" class="form-text text-muted mb-2">Recommended for better UX</small>
                    </div>

                    <div class="form-group">
                      <label class="form-label">Inline Calendar</label>
                      <input class="form-control mb-2 date-inline" type="text" placeholder="Pick date">
                    </div>
                  </div>
                  <div class="card-footer">
                    <a href="https://chmln.github.io/flatpickr/" target="_blank">Flatpickr</a> is a light-weight library for picking dates and times. It is feature rich and supports date ranges, disabling dates, multiple dates and many more.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // Main Content -->
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->

    <script>
      var choices = new Choices('.js-choice');

      var choices2 = new Choices('.js-choice-remove', {
        removeItemButton: true,
      });

      var cleave = new Cleave('.input-credit-card', {
        creditCard: true,
        onCreditCardTypeChanged: function (type) {
          // update UI ...
        }
      });

      var cleave2 = new Cleave('.input-date', {
        date: true,
        datePattern: ['Y', 'm', 'd']
      });

      var cleave3 = new Cleave('.input-numeral', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
      });

      var cleave = new Cleave('.input-prefix', {
          prefix: 'INVOICE-',
          uppercase: true
      });

      flatpickr(".date-default", {
        allowInput: true
      });
      flatpickr(".date-time", {
        allowInput: true,
        enableTime: true,
      });
      flatpickr(".date-human", {
        allowInput: true,
        altInput: true,
      });
      flatpickr(".date-inline", {
        allowInput: true,
        inline: true,
      });
    </script>
  </body>
</html>