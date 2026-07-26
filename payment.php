<?php include "include/header.php"; ?>

<div class="contact_banner">
   <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
         <div class="contact_banner_text wow fadeInUp">
            <h1 class="title_blk">Confirm Purchase</h1>
            <p>After confirming your order, you will receive an order confirmation via email or SMS, depending on the
               contact information provided. This confirmation will include an estimated delivery time.</p>
         </div>
         <div class="contact_us_form wow flipInY" style="width: 100%">
            <div class="creditCardForm">

               <div class="payment">
                  <form method="post" action="" id="form_id_submit"
                     class="contact_form_all">


                     <div class="row">

                        <div class="col-sm-6">


                           <div class="">
                              <div class="col-sm-12">
                                 <div class="md-form">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Name" required="required"
                                       class="form-control">
                                 </div>
                              </div>
                           </div>
                           <div class="">
                              <div class="col-sm-12">
                                 <div class="md-form">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="Email" required="required"
                                       class="form-control">
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="md-form">
                                    <label>Phone</label>
                                    <input type="text" id="phone" name="phone" placeholder="Phone" required="required"
                                       class="form-control">
                                 </div>
                              </div>
                           </div>
                           <div class="">
                              <div class="col-sm-12">
                                 <div class="md-form">
                                    <label>Comments</label>
                                    <textarea type="text" id="message" name="message" rows="4" placeholder="Message"
                                       class="form-control md-textarea"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 chk-bx-st">

                              <div class="form-group" id="chec_box_st">
                                 <div class="checkbx">
                                    <label class="checkbox-dis"
                                       style="    display: flex; align-items: flex-start; gap: 6px;">
                                       <input type="checkbox" name="sendNDA" value="Yes" required>
                                       <span class="checkmark"></span>
                                       <p style="font-size: 15px;">Your personal data will be used to process your
                                          order, support your experience throughout this website, and for other
                                          purposes described in our
                                          <a href="terms" target="_blank">Terms Of Use</a>, <a href="privacy"
                                             target="_blank">Privacy Policy</a> of , USA</p>

                                    </label>


                                    <label class="checkbox-dis" style="    ">


                                       <p style="font-size: 13px;"> Billing Descriptor: Armish Digital </p>
                                       <p style="font-size: 13px;">
                                          <a href="mailto:info@armishai.com">info@armishai.com</a>
                                       </p>
                                       <p style="font-size: 13px;"> Support: (773) 309-1926 </p>

                                    </label>




                                 </div>
                              </div>

                           </div>
                           <input type="hidden" name="page_name" value="Payment">

                           <div class="col-sm-12">
                              <p id="status"></p>
                           </div>
                           <input type="hidden" id="lead_area_popup" name="lead_area" value="" />
                           <input type="hidden" id="lead_org_price" name="lead_org_price" value="" />
                           <input type="hidden" name="send" value="1" />

                           <input type="hidden" name="lb_source" value="" />
                           <input type="hidden" name="lb_source_cat" value="" />
                           <input type="hidden" name="lb_source_nam" value="" />
                           <input type="hidden" name="lb_source_ema" value="" />
                           <input type="hidden" name="lb_source_con" value="" />
                           <input type="hidden" name="lb_source_pho" value="" />
                           <input type="hidden" name="lb_source_off" value="" />

                           <input type="hidden" name="fullpageurl" value="" />
                           <input type="hidden" name="pageurl" value="" />

                           <input type="hidden" name="ip2loc_ip" value="" />
                           <input type="hidden" name="ip2loc_isp" value="" />
                           <input type="hidden" name="ip2loc_org" value="" />
                           <input type="hidden" name="ip2loc_country" value="" />
                           <input type="hidden" name="ip2loc_region" value="" />
                           <input type="hidden" name="ip2loc_city" value="" />

                        </div>

                        <div class="col-sm-6">

                           <div class="form-group owner">
                              <label for="owner">Owner</label>
                              <input type="text" class="form-control" id="owner">
                           </div>
                           <div class="form-group CVV">
                              <label for="cvv">CVV</label>
                              <input type="text" class="form-control" id="cvv">
                           </div>
                           <div class="form-group" id="card-number-field">
                              <label for="cardNumber">Card Number</label>
                              <input type="text" class="form-control" id="cardNumber">
                           </div>
                           <div class="form-group" id="expiration-date">
                              <label>Expiration Date</label>

                              <div class="expiery">

                                 <select class="form-control">
                                    <option value="01">January</option>
                                    <option value="02">February </option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                 </select>
                                 <select class="form-control">

                                    <option value="17"> 2023</option>
                                    <option value="18"> 2024</option>
                                    <option value="19"> 2025</option>
                                    <option value="20"> 2026</option>
                                    <option value="21"> 2027</option>
                                    <option value="21"> 2028</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group" id="credit_cards">
                              <img src="public/images/visa_cc.jpg" id="visa">
                              <img src="public/images/apple-pay.png" id="mastercard">
                              <img src="public/images/diners.png" id="mastercard">
                              <img src="public/images/discover.png" id="mastercard">
                              <img src="public/images/jcb.png" id="mastercard">
                              <img src="public/images/amex_cc.jpg" id="amex">
                           </div>

                           <div class="form-group" id="pay-now" style="position: relative; z-index: 9999999999;">
                              <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                           </div>
                        </div>

                     </div>

                  </form>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>

<section class="contact_details_sec " style="opacity: 0;">
   <div class="container">
      <div class="row">
         <div class="contact_details_boxes">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
               <div class="contact_details_box">
                  <img src="images/contact-details-icon1.png">
                  <a href="mailto:info@armishai.com">info@armishai.com</a>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="contact_details_box"> <img src="images/contact-details-icon2.png"> <a
                  href="tel:+923356909090">+92 335 6909090</a> </div>
         </div>

      </div>
   </div>
   </div>
</section>

<section id="" class="section section--dark section--collapsed">
   <div class="container">
      <div class="row">
         <div class="column">
            <div class="section-divider"></div>
         </div>
      </div>
   </div>
</section>

<?php include "include/footer.php"; ?>