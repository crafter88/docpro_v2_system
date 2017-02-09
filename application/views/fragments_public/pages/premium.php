  <!-- section menu mobile -->
  
  <section class="menu-media">
  
    <div class="menu-content">
    
      <div class="logo">DOCPro System</div>
      
      <div class="icon"><a href="#"><img src="<?php echo base_url(); ?>libs/onepage/HTML/img/icons/menu-media.png"/></a></div>
    
    </div>
   
  </section>
  
    <ul class="menu-click">
        <a href="<?php echo base_url(); ?>"><li>Home</li></a>
        <a href="<?php echo base_url(); ?>"><li>Subscription</li></a>
        <a href="<?php echo base_url(); ?>"><li>About</li></a>
        <a href="<?php echo base_url(); ?>"><li>Gallery</li></a>
        <a href="<?php echo base_url(); ?>"><li>Contact</li></a>
        <a href="<?php echo base_url(); ?>login"><li>Sign in</li></a>
    </ul>
   
   
  <!-- section menu -->

  <section class="menu">

    <div class="menu-content">
    
    <div class="logo">
      <span>
        <img src="<?php echo base_url(); ?>assets/img/85x85.png">
      </span>
      <span id="company_name">
       <img src="<?php echo base_url(); ?>assets/img/logo-text.png">
      </span>
    </div>
    
      <ul id="menu">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class='active'><a href="<?php echo base_url(); ?>">Subscription</a></li>
        <li><a href="<?php echo base_url(); ?>">Features</a></li>
        <li><a href="<?php echo base_url(); ?>">Gallery</a></li>
        <li><a href="<?php echo base_url(); ?>">Contact</a></li>
        <li><a href="<?php echo base_url(); ?>login">Sign in</a></li>
      </ul>
    </div>
  </section>

  <div class='container' id="free-container">
    <div class='row' style="width: 70%;">
        <div class='col-md-6' >
           <div class='panel'>
              <div class="panel-heading" style="padding: 0 20px; background-color: #2c3e50; color: #FFF">
                <h3 style="padding-top: 10px; text-align: center;">Premium Subscription</h3>
              </div>
              <div class='panel-body'>
                <p style="font-size: 18px; text-align: center; font-weight: bold;">
                  Affordable Plan
                </p>
                <p style="font-size: 14px; text-align: center; font-weight: bold;">at</p>
                <h1 style="text-align: center; font-size: 72px;"><i class='fa fa-rub'></i>0 <span style="font-size: 13px; color: #000">/ 30 days Only!</span></h1>
                 <ul style="list-style: initial; margin-left: 30%; margin-top: 30px; font-size: 18px; color: #8a8989;">
                    <li class="available-feature"><em>Lifetime</em></li>
                    <li class="available-feature"><em>Unlimited Admin Accounts</em></li>
                    <li class="available-feature"><em>Unlimited User Accounts</em></li>
                    <li class="available-feature"><em>All Features</em></li>
                  </ul>
              </div>              
           </div>           
        </div>
        <div class='col-md-6 subscribe-panel' style="background-color: #FFF;">
          <form name='free_subscription' id="msform" action="<?php echo base_url(); ?>save/free" method="post" role="form">
              <h2 class="fs-title" style="font-size: 18px;">Company</h2>
              <div>
                  <label class='input-label'>Company Name</label>
                  <input class='form-control no-space required input-count' type="text" name="company" placeholder='For Non-individual' required />
              </div>
              <label class='or'>- OR -</label>
              <div>
                <label class='input-label'>Owner's Name</label>
                <!-- <input class='form-control no-space required input-count person-name' type="text" name="owner_name" placeholder='Last name, First name Middle initial(.)' required /> -->
                <input class='form-control no-space required input-count' type="text" name="owner_name" placeholder='Last name, First name Middle initial(.)' required />
              </div>
              <div>
                <label class='input-label'>Address</label>
                <textarea class='form-control no-space required input-count' type="text" name="company_address" placeholder='# no street name, City, Province' required ></textarea>
              </div>
              <div>
                <label class='input-label'>Mobile Number</label>
                <input class='form-control no-space required input-count number' type="text" name="company_cp_no" placeholder='09xxxxxxxxx' required />
              </div>
              <div>
                <label class='input-label'>Email Address</label>
                <input class='form-control no-space required input-count email' type="text" name="company_email" placeholder='ex: someone@company.com' required />
              </div>
              <label class='registrant' style="font-size: 18px; margin-top: 50px;">Registrant Information</label>
              <div>
                <label class='input-label'>Registrant Name</label>
                <!-- <input class='form-control no-space required input-count person-name' type="text" name="registrant_name" placeholder='Last name, First name Middle initial(.)' required /> -->
                <input class='form-control no-space required input-count' type="text" name="registrant_name" placeholder='Last name, First name Middle initial(.)' required />
              </div>
              <div>
                <label class='input-label'>Mobile Number</label>
                <input class='form-control no-space required input-count number' type="text" name="registrant_cp_no" placeholder='09xxxxxxxxx' required />
              </div>
              <div>
                <label class='input-label'>Email Address</label>
                <input class='form-control no-space required input-count email' type="text" name="registrant_email" placeholder='ex: someone@company.com' required />
              </div>
              <div>
                <button type="submit" class="btn btn-default action-button" disabled="disabled">Ok</button>
                <p class='submit-notice'>*Please fill all required fields</p>
              </div>
          </form>
        </div>
    </div>

    <footer class="footer" id="free-footer">
    <div class="margin">
      <div class="menu-footer">
        <a href="#home">Home</a>
        <a href="#">FAQ</a>
        <a href="#">Privacy policy</a>
        <a href="#">Terms & Condition</a>
      </div>
      <div class="copyright">&copy; 2016. All Rights Reserved DocPro Business Solution</div>        
    </div>
  </footer>
  </div>

  <!-- Footer section -->

  




