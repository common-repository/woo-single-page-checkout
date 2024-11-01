<?php

$email_message = $message.'
<div>
    <table width="620" border="0" cellpadding="0" cellspacing="0" id="m_5166713870885534368crm-event_receipt" style="font-family:Arial,Verdana,sans-serif;text-align:left">
  <tbody>
  
  <tr>
   <td>
    <table style="border:1px solid #999;margin:1em 0em 1em;border-collapse:collapse;width:100%">
     <tbody><tr>
      <th colspan="2" style="text-align:left;padding:4px;border-bottom:1px solid #999;background-color:#eee">
       Event Information and Location      </th>
     </tr>
     <tr>
      <td colspan="2" style="padding:4px;border-bottom:1px solid #999">
       '.$event_name.'<br>
       <span class="aBn" data-term="goog_1605259569" tabindex="0"><span class="aQJ">'.$event_date.'</span></span>      </td>
     </tr>

     
           <tr>
       <td colspan="2" style="padding:4px;border-bottom:1px solid #999">
        <div class="m_5166713870885534368location m_5166713870885534368vcard"><span class="m_5166713870885534368adr"><span class="m_5166713870885534368street-address"><a href="https://maps.google.com/?q=7,+K.+M.+Munshi+Marg+%0D%0A+Girgaon+Chowpatty&amp;entry=gmail&amp;source=g">7, K. M. Munshi Marg</a></span><br>
<span class="m_5166713870885534368extended-address"><a href="https://maps.google.com/?q=7,+K.+M.+Munshi+Marg+%0D%0A+Girgaon+Chowpatty&amp;entry=gmail&amp;source=g">Girgaon Chowpatty</a></span><br>
Near Bharatiya Vidya Bhavans<br>
<span class="m_5166713870885534368locality">Mumbai</span>, <span class="m_5166713870885534368region">MM</span> <span class="m_5166713870885534368postal-code">400007</span><br>
<span class="m_5166713870885534368country-name">India</span></span></div>
       </td>
      </tr>
     
           <tr>
       <td colspan="2" style="padding:4px;border-bottom:1px solid #999;background-color:#f7f7f7">
        Event Contacts:       </td>
      </tr>
                     <tr>
         <td style="padding:4px;border-bottom:1px solid #999;background-color:#f7f7f7">
                     Phone                   </td>
         <td style="padding:4px;border-bottom:1px solid #999">
          022 23665555          </td>
        </tr>
                                  <tr>
         <td style="padding:4px;border-bottom:1px solid #999;background-color:#f7f7f7">
          Email         </td>
         <td style="padding:4px;border-bottom:1px solid #999">
          <a href="mailto:bace.chowpatty@gmail.com" target="_blank">bace.chowpatty@gmail.com</a>
         </td>
        </tr>
                  
     
           <tr>
       <th colspan="2" style="text-align:left;padding:4px;border-bottom:1px solid #999;background-color:#eee">
        Registered Email       </th>
      </tr>
      <tr>
       <td colspan="2" style="padding:4px;border-bottom:1px solid #999">
        <a href="mailto:'.$email.'" target="_blank">'.$email.'</a>
       </td>
      </tr>
     

     
      <tr>
       <th colspan="2" style="text-align:left;padding:4px;border-bottom:1px solid #999;background-color:#eee">
        Event Fee(s)
       </th>
      </tr>

                                                          <tr>
          <td colspan="2" style="padding:4px;border-bottom:1px solid #999">
           <table>             <tbody><tr>
             <th>Item</th>
             <th>Qty</th>
             <th>Each</th>
                          <th>Total</th>
                   </tr>
                         <tr>
              <td>
        Event Fee(s)</td>
              <td>
               1
              </td>
              <td>
               ₨ '.$amount.'
              </td>
                            <td>
               ₨ '.$amount.'
              </td>
                     </tr>
                       </tbody></table>
          </td>
         </tr>
                            
                         <tr>
        <td style="padding:4px;border-bottom:1px solid #999;background-color:#f7f7f7">
                   Total Amount                 </td>
        <td style="padding:4px;border-bottom:1px solid #999">
         ₨ '.$amount.'       </td>
       </tr>
                    
    </tbody></table>
   </td>
  </tr>
 </tbody></table>
</div>
</div>
';

$message = $message.'
                    <div id="crm-container" class="crm-container crm-public" lang="en" xml:lang="en">
<div class="clear"></div>
<div id="crm-main-content-wrapper">

<div class="crm-event-id-11 crm-block crm-event-thankyou-form-block">
        
    <div class="spacer"></div>

    <div class="crm-group event_info-group">
        <div class="header-dark">
            Event Information        </div>
        <div class="display-block">
            <table class="form-layout">
  <tbody><tr>
    <td colspan="2">
             <a href=""><strong>'.$event_name.'</strong></a>
        </td>
  </tr>
  <tr><td><label>When</label></td>
      <td width="90%">
        '.$event_date.'
              </td>
  </tr>

            <tr><td><label>Location</label></td>
          <td>
            <div class="location vcard"><span class="adr"><span class="street-address">7, K. M. Munshi Marg</span><br>
<span class="extended-address">Girgaon Chowpatty</span><br>
Near Bharatiya Vidya Bhavans<br>
<span class="locality">Mumbai</span>, <span class="region">MM</span> <span class="postal-code">400007</span><br>
<span class="country-name">India</span></span></div>
                      </td>
      </tr>
            <tr><td><label>Contact</label></td>
        <td>
                                                Phone: 022 23665555                 <br>
                       
                                         Email: <a href="mailto:bace.chowpatty@gmail.com">bace.chowpatty@gmail.com</a>
                                  </td>
    </tr>
   </tbody></table>
        </div>
    </div>

            <div class="crm-group event_fees-group">
            <div class="header-dark">
                Event Fee(s)
            </div>
                          <div class="crm-section no-label amount-item-section">
                                      <div class="content">
                      ₨ '.$amount.'  -  '.$first_name.' '.$last_name.'
                  </div>
                  <div class="clear"></div>
                                    </div>
                                                 <div class="crm-section no-label total-amount-section">
                    <div class="content bold">Event Total:&nbsp;&nbsp;₨ '.$amount.'</div>
                    <div class="clear"></div>
                  </div>

                                                
                                </div>

    
            <div class="crm-group participant_role-group">
            <div class="crm-section no-label participant_role-section">
               
            <div class="clear"></div>
          </div>
        </div>
    
                <div class="crm-group participant_info-group">
      <div class="header-dark">Participant Information</div>
                           <fieldset class="label-left no-border"><div class="bold crm-profile-view-title">BACE Registration</div>
                                         <div class="crm-public-form-item crm-section First Name-section">
                          <div class="label">First Name</div>
                          <div class="content">'.$first_name.'</div>
                          <div class="clear"></div>
                      </div>
                                         <div class="crm-public-form-item crm-section Last Name-section">
                          <div class="label">Last Name</div>
                          <div class="content">'.$last_name.'</div>
                          <div class="clear"></div>
                      </div>
                                         <div class="crm-public-form-item crm-section Email Address-section">
                          <div class="label">Email Address</div>
                          <div class="content">'.$email.'</div>
                          <div class="clear"></div>
                      </div>
                                         <div class="crm-public-form-item crm-section Mobile Number-section">
                          <div class="label">Mobile Number</div>
                          <div class="content"></div>
                          <div class="clear"></div>
                      </div>
                                  </fieldset>
                             </div>
        <div class="spacer"></div>
        </div>

      </div>
';