<style>
  :root{
     --text: #1a1a1a;
    --muted: #8f9399;
    --line: #d9d9d9;
    --card-bg: #f8f8f8;
    --page-bg: #eef1f4;
  }

  .pricing-section{
    
    background: var(--page-bg);
  }

  
 
 
  .pricing-grid{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    
   
  }

  .product-card{
    background: var(--card-bg);
    min-height: 100%;
    padding: 42px 40px 32px;
    border-right: 1px solid var(--line);
    display: flex;
    flex-direction: column;
    transition: 0.3s ease;
  }

  .product-card:last-child{
    border-right: 0;
  }

  .product-card:hover{
    transform: translateY(-4px);
  }

  .product-card.featured{
    border-top: 2px solid var(--gold);
  }

  .product-card.standard{
    border-top: 2px solid var(--navy);
  }

  .eyebrow{
    font-size: 13px;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 18px;
  }

  .featured .eyebrow{
    color: var(--gold);
  }

  .standard .eyebrow{
    color: var(--navy);
  }

  .product-title{
    font-size: 34px;
    line-height: 1.15;
    font-weight: 400;
    margin: 0 0 10px;
    color: var(--navy);
  }

  .product-subtitle{
    font-size: 13px;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: var(--muted);
    margin-bottom: 28px;
  }

  .price{
    color: var(--navy);
    font-size: 62px;
    line-height: 1;
    font-weight: 700;
    margin-bottom: 30px;
  }

  .price .currency{
    font-size: 28px;
    font-weight: 400;
    vertical-align: top;
    position: relative;
    top: 8px;
    margin-right: 4px;
    color: #8a8a8a;
  }

  .feature-list{
    list-style: none;
    padding: 0;
    margin: 0 0 36px;
    border-top: 1px solid var(--line);
  }

  .feature-list li{
    display: grid;
    grid-template-columns: 120px 1fr;
    gap: 16px;
    padding: 22px 0;
    border-bottom: 1px solid var(--line);
    font-size: 15px;
    line-height: 1.8;
    color: var(--text);
  }

  .feature-label{
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--navy);
    letter-spacing: 0.02em;
  }

  .featured .feature-label{
    color: var(--gold);
  }

  .feature-text{
    color: var(--text);
  }

  .btn-book{
    display: block;
    width: 100%;
    text-align: center;
    padding: 17px 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.22em;
    font-size: 14px;
    font-weight: 700;
    border-radius: 4px;
    transition: 0.3s ease;
    margin-top: auto;
  }

  .featured .btn-book{
    background: var(--gold);
    color: var(--navy);
  }

  .featured .btn-book:hover{
    background: var(--navy);
    color: #fff;
  }

  .standard .btn-book{
    color: var(--navy);
    background: var(--gold);
  }

  .standard .btn-book:hover{
  background: var(--navy);
    color: #fff;
  }

  .card-footer-text{
    text-align: center;
    font-size: 15px;
    font-style: italic;
    color: #8a8a8a;
    margin: 16px 0 0;
  }

  @media (max-width: 1199px){
    .section-heading h2{
      font-size: 46px;
    }

    .product-card{
      padding: 34px 28px 28px;
    }

    .feature-list li{
      grid-template-columns: 110px 1fr;
    }
  }

  @media (max-width: 991px){
    .pricing-grid{
      grid-template-columns: 1fr;
      border: 0;
      gap: 20px;
      background: transparent;
    }

    .product-card{
      border: 1px solid var(--line);
      border-right: 1px solid var(--line);
    }

    .product-card:last-child{
      border-right: 1px solid var(--line);
    }

    .section-heading h2{
      font-size: 40px;
    }
  }

  @media (max-width: 767px){
    .pricing-section{
      padding: 60px 0;
    }

    .section-heading h2{
      font-size: 32px;
    }

    .section-heading p{
      font-size: 16px;
    }

    .product-title{
      font-size: 28px;
    }

    .price{
      font-size: 50px;
    }

    .feature-list li{
      grid-template-columns: 1fr;
      gap: 8px;
      padding: 18px 0;
    }
  }
</style>

<section class="pricing-section wow animate__animated animate__fadeInUp" data-wow-duration="1s" id="booking">
  <div class="container">

    <div class="row">
      <div class="col-12">
        <div class="section-heading">
          <h2>
            You've moved on.<br>
            <span>Your headshot should too.</span>
          </h2>
          <p>Growth changes how you show up. Your headshot should keep up.</p>
        </div>
      </div>
    </div>

    <div class="pricing-grid">

      <!-- Card 1 -->
      <div class="product-card featured wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
        <div class="eyebrow">Signature</div>
        <h3 class="product-title">Your Signature</h3>
        <div class="product-subtitle">The Visual Legacy</div>

        <div class="price"><span class="currency">$</span>5000</div>

        <ul class="feature-list">
          <li>
            <div class="feature-label">The Strategy:</div>
            <div class="feature-text">One-hour consultation to align visual goals with market strategy.</div>
          </li>
          <li>
            <div class="feature-label">The Session:</div>
            <div class="feature-text">Six hours of photography across your chosen locations.</div>
          </li>
          <li>
            <div class="feature-label">The Range:</div>
            <div class="feature-text">Unlimited looks with a custom shot list built entirely around your strategy.</div>
          </li>
          <li>
            <div class="feature-label">The Service:</div>
            <div class="feature-text">Professional hair and makeup styling included.</div>
          </li>
          <li>
            <div class="feature-label">The Selection:</div>
            <div class="feature-text">30 retouched editorial assets for marketing and press.</div>
          </li>
        </ul>

        <a href="https://photosbymaicol.as.me/your-signature" class="btn-book">Book Your Experience</a>
        <p class="card-footer-text">Leave your mark on your industry.</p>
      </div>

      <!-- Card 2 -->
      <div class="product-card featured wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
        <div class="eyebrow">Elevated</div>
        <h3 class="product-title">Your Brand</h3>
        <div class="product-subtitle">The Branding Session</div>

        <div class="price"><span class="currency">$</span>1500</div>

        <ul class="feature-list">
          <li>
            <div class="feature-label">The Strategy:</div>
            <div class="feature-text">30-minute consultation to define session goals.</div>
          </li>
          <li>
            <div class="feature-label">The Session:</div>
            <div class="feature-text">Three hours of photography across studio and nearby locations.</div>
          </li>
          <li>
            <div class="feature-label">The Range:</div>
            <div class="feature-text">Up to four looks based on brand requirements.</div>
          </li>
          <li>
            <div class="feature-label">The Service:</div>
            <div class="feature-text">Professional direction throughout the session.</div>
          </li>
          <li>
            <div class="feature-label">The Selection:</div>
            <div class="feature-text">10 retouched assets for website and social media.</div>
          </li>
        </ul>

        <a href="https://photosbymaicol.as.me/your-brand" class="btn-book">Book Your Experience</a>
        <p class="card-footer-text">Define what you stand for.</p>
      </div>

      <!-- Card 3 -->
      <div class="product-card standard wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
        <div class="eyebrow">Entry</div>
        <h3 class="product-title">Your Identity</h3>
        <div class="product-subtitle">The Modern Headshot</div>

        <div class="price"><span class="currency">$</span>275</div>

        <ul class="feature-list">
          <li>
            <div class="feature-label">The Strategy:</div>
            <div class="feature-text">Comprehensive prep guide to define look and tone.</div>
          </li>
          <li>
            <div class="feature-label">The Session:</div>
            <div class="feature-text">One hour of in-studio photography at West Palm Beach.</div>
          </li>
          <li>
            <div class="feature-label">The Range:</div>
            <div class="feature-text">Up to two outfit changes with guided posing during the session.</div>
          </li>
          <li>
            <div class="feature-label">The Service:</div>
            <div class="feature-text">Immediate on-site image selection following the shoot.</div>
          </li>
          <li>
            <div class="feature-label">The Selection:</div>
            <div class="feature-text">Images purchased individually at $100 per image.</div>
          </li>
        </ul>

        <a href="https://photosbymaicol.as.me/modern" class="btn-book">Book Your Experience</a>
        <p class="card-footer-text">Tell them who you are.</p>
      </div>

    </div>
  </div>
</section>