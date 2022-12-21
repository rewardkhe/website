<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loan Calculator</title>

  </head>
  <body>
    <section class="section">
      <div class="container">


        <div class="columns">
          <div class="column is-three-quarters">
            <div class="card">
              <div class="card-content">
                <form id="loan-form">
                  <div class="level">
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        Loan Amount
                      </div>
                    </div>

                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control has-icons-left ">
                            <input class="input" id="amount" type="number" />
                            <span class="icon is-small is-left">
                              <i class="fa fa-dollar-sign"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
<BR>
                  <div class="level">
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        Interest Rate
                      </div>
                    </div>

                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control has-icons-right">
                            <input class="input" id="interest" type="number" />
                            <span class="icon is-small is-right">
                              <i class="fa fa-percentage"></i>
                              
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <BR>
                  <div class="level">
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        Number Of Years
                      </div>
                    </div>

                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control has-icons-left">
                            <input class="input" id="years" type="number" />
                            <span class="icon is-small is-left">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="control">
                    <button
                      class="button is-large is-fullwidth is-primary is-outlined"
                    >
                    
                      Calculate
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
<BR><hr>
    <!-- RESULTS -->
   <div class="column is-12-tablet is-6-desktop is-3-widescreen">
    <div class="notification is-primary has-text">
      <p id="monthlyPayment" class="title is-1">$</p>
      <p class="subtitle is-4">Monthly Payments</p><hr>
    </div>
  </div>

    <div class="column is-12-tablet is-6-desktop is-3-widescreen">
        <div class="notification is-info has-text">
          <p id="totalInterest" class="title is-1">-</p>
          <p class="subtitle is-4">Total Interest</p><hr>
        </div>
      </div>

      <div class="column is-12-tablet is-6-desktop is-3-widescreen">
        <div class="notification is-link has-text">
          <p id="totalPayment" class="title is-1">$</p>
          <p class="subtitle is-4">Total Amount</p><hr>
        </div>
      </div>

</div>
</section>
  </body>
  <script src="script10.js"></script>
</html>