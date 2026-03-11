 <form id="contactForm" class="needs-validation" novalidate>
              <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name:" required />
                <div class="invalid-feedback">Please enter your name.</div>
              </div>

              <div class="mb-3">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number:" required />
                <div class="invalid-feedback">Please enter your phone number.</div>
              </div>

              <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email:" required />
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>

              <div class="mb-3">
                <textarea class="form-control" id="message" name="message" placeholder="Message:" required></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
              </div>

              <button type="submit" id="submitBtn" class="submit-btn">
                <span class="loading-spinner"></span>
                <span class="btn-text">Send</span>
              </button>

              <div id="statusMessage" class="status-box"></div>
            </form>