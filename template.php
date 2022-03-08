<!DOCTYPE html>
<html lang="en" style="box-sizing: border-box;font-family: sans-serif;line-height: 1.15;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;-ms-overflow-style: scrollbar;-webkit-tap-highlight-color: transparent;">
<head style="box-sizing: border-box;">
    <meta charset="UTF-8" style="box-sizing: border-box;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" style="box-sizing: border-box;">
    <title style="box-sizing: border-box;">Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" style="box-sizing: border-box;">
<style >

/* .label-form-client  {
    label {
    display: inline-block;
    text-align: right;

    }
    input{
       background: transparent;
       border: none;
       border-bottom: 4px dotted #000000;
       width: 100%;
       position:relative ; 
       top:-8px;
       
    }
    input:focus {
       outline:none;
   }
}
 
 .label-contrat-client {
   display:run-in;
   background: transparent;
   border: none;
   border-bottom: 2px dashed #000000;
   width: 150px;

      outline:none;
  
}

.adjust-input{
   position: relative;
   top:7px;
}

.full-width-input{
   width: 200% !important; 
}

.fix-input-center{
   position: relative;
   margin-top: 50%;
}

.padding-box-question{
    padding-top: 40px;
    padding-bottom: 400px;

}

.header-box-question{
    height: 40px;
}

.box-tax-year{
    border: 1px solid black;
    padding: 10px;
}

.row-question{
    display:flex;
    flex-direction: column;
    border-radius: 10px;
}
.yes-no-part{
    width: 100%;
    display: flex;
    flex-direction: row;
}
.row-question:hover{
    background-color:lightsalmon;
    cursor: pointer;

}
.hidden-yes-no-part{
    display: flex;

}

.text-question{
    flex: 1;
}

.yes-no{
    flex:0.2;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

.card-style{
    width: 70%;
    box-shadow: 1.5px 2px 10px 3px;
}

input[type=file]::-webkit-file-upload-button {
    border-radius: 50px;
    border: 2px solid #007bff;
    padding: .2em .4em;
    border-radius: .2em;
    background-color:#007bff;
    transition: 0.5s;
  }
  
  input[type=file]::file-selector-button {
    border: 2px solid #007bff;
    padding: .2em .4em;
    border-radius: .2em;
    background-color: #007bff;
    transition: 0.5s;
  }
  
  input[type=file]::-webkit-file-upload-button:hover {
    background-color: #81ecec;
    border: 2px solid #00cec9;
    cursor: pointer;
  }
  
  input[type=file]::file-selector-button:hover {
    background-color: #81ecec;
    border: 2px solid #00cec9;
    cursor: pointer;
  } */
</style>
</head>
<?php 

$style_input='style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;"'

?>
<body >
<!-- .. -->

<form method="POST" id="client-portal-form" style="box-sizing: border-box;">
<STYLE type="text/css">
@media print {

@page {
  size: 450mm 640mm ;
}
}
</STYLE>
    <div class="break-page" style='page-break-after:always'>
<br>
</div>

    <div class="container card-style printer" style="box-sizing: border-box;width: 70%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;page-break-inside: avoid;box-shadow: 1.5px 2px 10px 3px;min-width: 992px!important;">
        <div class="row " style="text-align: right;box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
            <div style="width: 100%;margin-right: 30px;box-sizing: border-box;">
                <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">
                    <?php echo(date('Y')-1) ?>
                </h3>
                <h2 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 2rem;orphans: 3;widows: 3;page-break-after: avoid;">TAX ORGANISER</h2>
            </div>
        </div>
        <div class="row border border-dark" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
                                    <div class="col-md-6 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;">
                                        <div class="text-center" style="box-sizing: border-box;text-align: center!important;">
                                            <h4 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.5rem;">Taxpayer Information</h4>
                                        </div>
                                        <table style="box-sizing: border-box;border-collapse: collapse;">
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Last name</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="last_name_taxpayer_TAX_ORGANISER" data-id="last_name_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">First name</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="first_name_taxpayer_TAX_ORGANISER" data-id="first_name_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Middle&nbsp;initial</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="middle_initial_taxpayer_TAX_ORGANISER" data-id="middle_initial_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <th style="box-sizing: border-box;text-align: inherit;width:1em !important;">Suffix</th>
                                                <td colspan='1' style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;
    display: inline-block;position: relative;">
                                                        <input type="text" name="suffix_taxpayer_TAX_ORGANISER" data-id="suffix_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 65%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">SSN</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="social_security_number_taxpayer_TAX_ORGANISER" data-id="social_security_number_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Occupation</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="occupation_taxpayer_TAX_ORGANISER" data-id="occupation_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Work&nbsp;phone</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="tel" name="work_phone_taxpayer_TAX_ORGANISER" data-id="work_phone_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <th style="box-sizing: border-box;text-align: inherit;widht:1em !important;">Ext</th>
                                                <td colspan='0.5' style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;
    display: inline-block;position: relative;">
                                                        <input type="text" name="ext_taxpayer_TAX_ORGANISER" data-id="ext_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 65%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Cell phone</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="tel" name="cell_phone_taxpayer_TAX_ORGANISER" data-id="cell_phone_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">E-mail&nbsp;address</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="email_address_taxpayer_TAX_ORGANISER" data-id="email_address_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Date of birth</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="date_of_birth_taxpayer_TAX_ORGANISER" data-id="date_of_birth_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                      


                                            
                                            <tr style="margin-top: 10px;margin-bottom: -5px;box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="3" style="text-align: left;box-sizing: border-box;"> 
                                                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">
                                                        Licence Driver Details
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issuing&nbsp;state</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="issuing_state_taxpayer_TAX_ORGANISER" data-id="issuing_state_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Licence&nbsp;number</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="licence_number_taxpayer_TAX_ORGANISER" data-id="licence_number_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issue&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="issue_date_taxpayer_TAX_ORGANISER" data-id="issue_date_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Expiration&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="expiration_date_taxpayer_TAX_ORGANISER" data-id="expiration_date_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Does&nbsp;not&nbsp;expire</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="checkbox" name="does_not_expire_taxpayer_TAX_ORGANISER" data-id="does_not_expire_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;padding: 0;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th colspan="2" class="text-left" style="box-sizing: border-box;text-align: left!important;">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="Doc_Number_taxpayer_TAX_ORGANISER" data-id="does_not_expire_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="4" style="box-sizing: border-box;">
                                                    <hr style="background-color: black;box-sizing: content-box;height: 0;overflow: visible;margin-top: 1rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                                </td>
                                            </tr>

                                            <tr style="margin-top: 10px;margin-bottom: -5px;box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="3" style="text-align: left;box-sizing: border-box;"> 
                                                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">
                                                        State Identification card detail
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issuing&nbsp;state</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_issuing_state_taxpayer_TAX_ORGANISER" data-id="card_issuing_state_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Identification&nbsp;number</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_identification_number_taxpayer_TAX_ORGANISER" data-id="card_identification_number_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issue&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_issue_date_taxpayer_TAX_ORGANISER" data-id="card_issue_date_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Expiration&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_expiration_date_taxpayer_TAX_ORGANISER" data-id="card_expiration_date_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Does&nbsp;not&nbsp;expire</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="checkbox" name="card_does_not_expire_taxpayer_TAX_ORGANISER" data-id="card_does_not_expire_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;padding: 0;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th colspan="2" class="text-left" style="box-sizing: border-box;text-align: left!important;">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_Doc_Number_taxpayer_TAX_ORGANISER" data-id="card_does_not_expire_taxpayer_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="4" style="box-sizing: border-box;">
                                                    <hr style="background-color: black;box-sizing: content-box;height: 0;overflow: visible;margin-top: 1rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;">
                                        <div class="text-center" style="box-sizing: border-box;text-align: center!important;">
                                            <h4 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.5rem;">Spouse Information</h4>
                                        </div>
                                        <table class="table-condensed" style="box-sizing: border-box;border-collapse: collapse;">
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Last name</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="last_name_spouse_TAX_ORGANISER" data-id="last_name_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">First name</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="first_name_spouse_TAX_ORGANISER" data-id="first_name_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Middle&nbsp;initial</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="middle_initial_spouse_TAX_ORGANISER" data-id="middle_initial_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <th style="box-sizing: border-box;text-align: inherit;width:1em !important;">Suffix</th>
                                                <td colspan='1' style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;
    display: inline-block;position: relative;">
                                                        <input type="text" name="suffix_spouse_TAX_ORGANISER" data-id="suffix_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 65%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">SSN</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="social_security_number_spouse_TAX_ORGANISER" data-id="social_security_number_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Occupation</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="occupation_spouse_TAX_ORGANISER" data-id="occupation_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Work&nbsp;phone</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="tel" name="work_phone_spouse_TAX_ORGANISER" data-id="work_phone_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <th style="box-sizing: border-box;text-align: inherit;width:1em !important">Ext</th>
                                                <td colspan='0.5' style="box-sizing: border-box; ">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;
    display: inline-block;position: relative;">
                                                        <input type="text" name="ext_spouse_TAX_ORGANISER" data-id="ext_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 65%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Cell phone</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="tel" name="cell_phone_spouse_TAX_ORGANISER" data-id="cell_phone_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">E-mail&nbsp;address</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="email_address_spouse_TAX_ORGANISER" data-id="email_address_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Date of birth</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="date_of_birth_spouse_TAX_ORGANISER" data-id="date_of_birth_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>

                                            

                                            <tr style="visibility: hidden !important;box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="3" style="box-sizing: border-box;"> 
                                                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;opacity:0">
                                                        Licence Driver Details
                                                    </h3>
                                                </td>
                                            </tr>

                                         <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issuing&nbsp;state</th>
                                                   <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="issuing_state_spouse_TAX_ORGANISER" data-id="issuing_state_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Licence&nbsp;number</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="licence_number_spouse_TAX_ORGANISER" data-id="licence_number_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issue&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="issue_date_spouse_TAX_ORGANISER" data-id="issue_date_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Expiration&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="expiration_date_spouse_TAX_ORGANISER" data-id="expiration_date_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Does&nbsp;not&nbsp;expire</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="checkbox" name="does_not_expire_spouse_TAX_ORGANISER" data-id="does_not_expire_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;padding: 0;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th colspan="2" class="text-left" style="box-sizing: border-box;text-align: left!important;">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="Doc_Number_spouse_TAX_ORGANISER" data-id="does_not_expire_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="4" style="box-sizing: border-box;">
                                                    <hr style="background-color: black;box-sizing: content-box;height: 0;overflow: visible;margin-top: 1rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                                </td>
                                            </tr>
                                            <tr style="margin-top: 10px;margin-bottom: -5px;visibility: hidden !important;box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="3" style="text-align: left;box-sizing: border-box;"> 
                                                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;opacity:0">
                                                        State Identification card detail
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issuing&nbsp;state</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_issuing_state_spouse_TAX_ORGANISER" data-id="card_issuing_state_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Identification&nbsp;number</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_identification_number_spouse_TAX_ORGANISER" data-id="card_identification_number_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Issue&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_issue_date_spouse_TAX_ORGANISER" data-id="card_issue_date_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Expiration&nbsp;date</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_expiration_date_spouse_TAX_ORGANISER" data-id="card_expiration_date_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;-webkit-appearance: listbox;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th class="text-left" style="box-sizing: border-box;text-align: left!important;">Does&nbsp;not&nbsp;expire</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="checkbox" name="card_does_not_expire_spouse_TAX_ORGANISER" data-id="card_does_not_expire_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;padding: 0;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <th colspan="2" class="text-left" style="box-sizing: border-box;text-align: left!important;">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td style="box-sizing: border-box;">
                                                    <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input class="full-width-input" type="text" name="card_Doc_Number_spouse_TAX_ORGANISER" data-id="card_does_not_expire_spouse_TAX_ORGANISER" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 200% !important;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="4" style="box-sizing: border-box;">
                                                    <hr style="background-color: black;box-sizing: content-box;height: 0;overflow: visible;margin-top: 1rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>




</div>
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;border-top-style: none!important;">
                <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                    <table class="table  table-condensed" style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                        <tr style="box-sizing: border-box;page-break-inside: avoid;">
                            <th style="border: none;box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Address</th>
                            <td colspan='3' style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                    <input type="text" name="address_TAX_ORGANISER" data-id="address_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                            </td>
                            <th style="border: none;box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Apartment number</th>
                            <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                    <input type="text" name="apartment_number_TAX_ORGANISER" data-id="apartment_number_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                            </td>
                        </tr>
                        <tr style="box-sizing: border-box;page-break-inside: avoid;">
                            <th style="border: none;box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">City</th>
                            <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                    <input type="text" name="city_TAX_ORGANISER" data-id="city_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                            </td>
                            <th style="border: none;box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">State</th>
                            <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                    <input type="text" name="state_TAX_ORGANISER" data-id="state_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                            </td>
                            <th style="border: none;box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">ZIP code</th>
                            <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                    <input type="text" name="zip_code_TAX_ORGANISER" data-id="zip_code_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                            </td>
                        </tr>
                        <tr style="box-sizing: border-box;page-break-inside: avoid;">
                            <th style="border: none;box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Home phone</th>
                            <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                    <input type="tel" name="home_phone_TAX_ORGANISER" data-id="home_phone_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                            </td>
                            <th style="border: none;box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Fax number</th>
                            <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                    <input type="text" name="fax_number_TAX_ORGANISER" data-id="fax_number_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        <br style="box-sizing: border-box;" >
        <!-- ==========DEUXIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;">
                <div style="box-sizing: border-box;">
                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Dependent Information</h3>
                </div>
                <!-- <table class="table table-bordered  table-condensed table-form-client"> -->
                <table class="table table-bordered  table-condensed  table-form-client" style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;border: 1px solid #dee2e6;">
                <colgroup>
                    <col span="1" style="width: 30%;">
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 25%;">
                    <col span="1" style="width: 15%;">
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 20%;">
                </colgroup>
                    
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">

                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">First name
                            <hr class="dashed-line" style="box-sizing: content-box;height: 0;overflow: visible;margin-top: 1rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">Last name</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">MI
                            <hr class="dashed-line" style="box-sizing: content-box;height: 0;overflow: visible;margin-top: 1rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">Suffix</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">Social security number
                            <hr class="dashed-line" style="box-sizing: content-box;height: 0;overflow: visible;margin-top: 1rem;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">Relationship</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">Date of birth</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">Months Lived with Taxpayer</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">Child Care Expense</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_first_name_1_TAX_ORGANISER" data-id="dependent_first_name_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_last_name_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_mi_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_suffix_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_social_security_number_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_relationship_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_day_of_birth_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;-webkit-appearance: listbox;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_months_lived_with_taxpayer_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_child_care_expense_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_first_name_2_TAX_ORGANISER" data-id="dependent_first_name_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_last_name_2_TAX_ORGANISER" data-id="dependent_last_name_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_mi_2_TAX_ORGANISER" data-id="dependent_mi_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_suffix_2_TAX_ORGANISER" data-id="dependent_suffix_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_social_security_number_2_TAX_ORGANISER" data-id="dependent_social_security_number_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_relationship_2_TAX_ORGANISER" data-id="dependent_relationship_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_day_of_birth_2_TAX_ORGANISER" data-id="dependent_day_of_birth_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;-webkit-appearance: listbox;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_months_lived_with_taxpayer_2_TAX_ORGANISER" data-id="dependent_months_lived_with_taxpayer_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                            <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_child_care_expense_2_TAX_ORGANISER" data-id="dependent_child_care_expense_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_first_name_3_TAX_ORGANISER" data-id="dependent_first_name_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_last_name_3_TAX_ORGANISER" data-id="dependent_last_name_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_mi_3_TAX_ORGANISER" data-id="dependent_mi_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_suffix_3_TAX_ORGANISER" data-id="dependent_suffix_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="dependent_social_security_number_3_TAX_ORGANISER" data-id="dependent_social_security_number_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                <hr style="margin-top: 25px;box-sizing: content-box;height: 0;overflow: visible;margin-bottom: 1rem;border: 0;border-top: 1px solid rgba(0,0,0,.1);">
                                <input type="text" name="dependent_relationship_3_TAX_ORGANISER" data-id="dependent_relationship_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_day_of_birth_3_TAX_ORGANISER" data-id="dependent_day_of_birth_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;-webkit-appearance: listbox;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_months_lived_with_taxpayer_3_TAX_ORGANISER" data-id="dependent_months_lived_with_taxpayer_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: middle;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input fix-input-center" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;margin-top: 50%;">
                                <input type="text" name="dependent_child_care_expense_3_TAX_ORGANISER" data-id="dependent_child_care_expense_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- ========== FIN DEUXIEME TABLEAU========= -->
        <br style="box-sizing: border-box;">
        <!-- ==========TROISIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <div style="box-sizing: border-box;">
                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Child and Dependent Care Provider Expenses</h3>
                </div>
                <table class="table table-bordered table-condensed table-form-client" style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;border: 0;">
                <colgroup>
                    <col span="1" style="width: 30%;">
                    <col span="1" style="width: 40%;">
                    <col span="1" style="width: 15%;">
                    <col span="1" style="width: 15%;">
                </colgroup>
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">Name</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">Address</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">ID number</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">Amount Paid</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_name_1_TAX_ORGANISER" data-id="child_and_dependent_name_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_address_1_TAX_ORGANISER" data-id="child_and_dependent_address_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_id_number_1_TAX_ORGANISER" data-id="child_and_dependent_id_number_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_amount_paid_1_TAX_ORGANISER" data-id="child_and_dependent_amount_paid_1_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_name_2_TAX_ORGANISER" data-id="child_and_dependent_name_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_address_2_TAX_ORGANISER" data-id="child_and_dependent_address_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_id_number_2_TAX_ORGANISER" data-id="child_and_dependent_id_number_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_amount_paid_2_TAX_ORGANISER" data-id="child_and_dependent_amount_paid_2_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_name_3_TAX_ORGANISER" data-id="child_and_dependent_name_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_address_3_TAX_ORGANISER" data-id="child_and_dependent_address_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_id_number_3_TAX_ORGANISER" data-id="child_and_dependent_id_number_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="child_and_dependent_amount_paid_3_TAX_ORGANISER" data-id="child_and_dependent_amount_paid_3_TAX_ORGANISER" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br style="box-sizing: border-box;">
    </div>
    <br class="break-page" style="box-sizing: border-box;"><br style="box-sizing: border-box;">
    <!-- @@@@@@@@@@@@@@@@@@@@ PAGE 2 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
    <div class="container card-style printer" style="box-sizing: border-box;width: 70%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;page-break-inside: avoid;box-shadow: 1.5px 2px 10px 3px;min-width: 992px!important;">
        <div class="row " style="text-align: right;box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
            <div style="width: 100%;margin-right: 30px;box-sizing: border-box;">
                <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">
                    <?php echo(Date('Y')-1) ?>
                </h3>
                <h2 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 2rem;orphans: 3;widows: 3;page-break-after: avoid;">Income</h2>
            </div>
        </div>
        <br style="box-sizing: border-box;">
        <!-- ==========PREMIER TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <div style="box-sizing: border-box;">
                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Attach Form(s) W-2 - Wages, Salaries, Tips and Other Compensation</h3>
                </div>
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                               <label style="box-sizing: border-box;display: inline-block;margin-bottom: .5rem;">Employer&nbsp;Name</label>
                                                </td>
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                    <?php echo(date('Y')-2) ?>&nbsp;Amount
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input " style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="employer_name_1_INCOME" data-id="employer_name_1_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"> 
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="employer_year_amount_1_INCOME" data-id="employer_year_amount_1_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input " style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="employer_name_2_INCOME" data-id="employer_name_2_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="employer_year_amount_2_INCOME" data-id="employer_year_amount_2_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input " style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="employer_name_3_INCOME" data-id="employer_name_3_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="employer_year_amount_3_INCOME" data-id="employer_year_amount_3_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>

                        
                                        </table>

            </div>
        </div>
        <!-- ==========DEUXIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <div style="box-sizing: border-box;">
                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Attach Form(s) 1099-R - Distributions from Pensions, Annuities, Retirement, Profit-Sharing,
                        IRAs, etc</h3>
                </div>
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                               1099&#8209;R&nbsp;Payer&nbsp;Name
                                                </td>
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                <?php echo(date('Y')-2) ?>&nbsp;Amount
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="1099_R_payer_name_1_INCOME" data-id="1099_R_payer_name_1_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                               
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="1099_R_amount_1_INCOME" data-id="1099_R_amount_1_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="1099_R_payer_name_2_INCOME" data-id="1099_R_payer_name_2_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="1099_R_amount_2_INCOME" data-id="1099_R_amount_2_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td span="1" style="width: 60%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="1099_R_payer_name_3_INCOME" data-id="1099_R_payer_name_3_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="1099_R_amount_3_INCOME" data-id="1099_R_amount_3_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>
            </div>
        </div>
        <!-- ==========TROISIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">
                        <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Attach Form(s) SSA-1099 - Social Security/Railroad Benefits</h3></th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Taxepayer</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Spouse</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Sosial Security Benefits from Form SSA-1099</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="sosial_security_benefits_taxpayer_INCOME" data-id="sosial_security_benefits_taxpayer_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="sosial_security_benefits_spouse_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Railroad Retirement Benefits from Form RRB-1099</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="railroad_retirement_benefits_taxpayer_INCOME" data-id="railroad_retirement_benefits_taxpayer_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="railroad_retirement_benefits_spouse_INCOME" data-id="railroad_retirement_benefits_spouse_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Medicare B premiums withheld</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="medicare_B_premiums_taxpayer_INCOME" data-id="medicare_B_premiums_taxpayer_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="medicare_B_premiums_spouse_INCOME" data-id="medicare_B_premiums_spouse_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Medicare C premiums withheld</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="medicare_C_premiums_taxpayer_INCOME" data-id="medicare_C_premiums_taxpayer_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="medicare_C_premiums_spouse_INCOME" data-id="medicare_C_premiums_spouse_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Medicare D premiums withheld</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="medicare_D_premiums_taxpayer_INCOME" data-id="medicare_D_premiums_taxpayer_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="medicare_D_premiums_spouse_INCOME" data-id="medicare_D_premiums_spouse_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
        <!-- ==========TROISIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <div style="box-sizing: border-box;">
                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Attach Form(s) 1099-MISC - Miscellaneous Income</h3>
                </div>
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;"> 1099-MISC Payer Name</tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="1" scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_1099_MISC_1_INCOME" data-id="payer_name_1099_MISC_1_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="1" scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_1099_MISC_2_INCOME" data-id="payer_name_1099_MISC_2_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td colspan="1" scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_1099_MISC_3_INCOME" data-id="payer_name_1099_MISC_3_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                             
                                                </td>
                                            </tr>

                                        </table>
            </div>
        </div>
        <!-- ==========4TH TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <div style="box-sizing: border-box;">
                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Attach Form(s) 1099-INT - Interest Income</h3>
                </div>
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                                            <colgroup style="box-sizing: border-box;">
                                                <col span="1" style="width: 75%;box-sizing: border-box;">
                                                </col><col span="1" style="width: 25%;box-sizing: border-box;">
                                            </col></colgroup>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">1099-INT Payer Name  </td>
                                                <td scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                <?php echo(date('Y')-2) ?> Amount
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_1_1099_INT_INCOME" data-id="payer_name_1_1099_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                  
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_1099_1_INT_INCOME" data-id="year_amount_1099_1_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_2_1099_INT_INCOME" data-id="payer_name_2_1099_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                  
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_1099_2_INT_INCOME" data-id="year_amount_1099_2_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_3_1099_INT_INCOME" data-id="payer_name_3_1099_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                  
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_1099_3_INT_INCOME" data-id="year_amount_1099_3_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_4_1099_INT_INCOME" data-id="payer_name_4_1099_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_1099_4_INT_INCOME" data-id="year_amount_1099_4_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_5_1099_INT_INCOME" data-id="payer_name_5_1099_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_1099_5_INT_INCOME" data-id="year_amount_1099_5_INT_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>
            </div>
        </div>
        <!-- ==========5TH TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <div style="box-sizing: border-box;">
                    <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Attach Form(s) 1099-DIV - Dividend Income</h3>
                </div>
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                                            <colgroup style="box-sizing: border-box;">
                                                <col span="1" style="width: 75%;box-sizing: border-box;">
                                                </col><col span="1" style="width: 25%;box-sizing: border-box;">
                                            </col></colgroup>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"> 1099-DIV Payer Name  </td>
                                                <td scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                <?php echo(date('Y')-2) ?> Amount
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_1_1099_DIV_INCOME" data-id="payer_name_1_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_1_1099_DIV_INCOME" data-id="year_amount_1_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_2_1099_DIV_INCOME" data-id="payer_name_2_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_3_1099_DIV_INCOME" data-id="year_amount_3_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_3_1099_DIV_INCOME" data-id="payer_name_3_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_3_1099_DIV_INCOME" data-id="year_amount_3_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_4_1099_DIV_INCOME" data-id="payer_name_4_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_4_1099_DIV_INCOME" data-id="year_amount_4_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="payer_name_5_1099_DIV_INCOME" data-id="payer_name_5_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                                        <input type="text" name="year_amount_5_1099_DIV_INCOME" data-id="year_amount_5_1099_DIV_INCOME" style="box-sizing: border-box;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;">
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>
            </div>
        </div>



        <!-- ==========9TH TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">
                        <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Retirement Plan Contributions</h3>
                        </th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Taxpayer</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Spouse</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Traditional IRA contributions made for
                                <?php echo(date('Y')-1) ?></i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="taxpayer_traditional_IRA_INCOME" data-id="taxpayer_traditional_IRA_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="spouse_traditional_IRA_INCOME" data-id="spouse_traditional_IRA_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Roth IRA contributions made for
                                <?php echo(date('Y')-1) ?></i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="taxpayer_roth_IRA_INCOME" data-id="taxpayer_roth_IRA_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="spouse_roth_IRA_INCOME" data-id="spouse_roth_IRA_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">SEP, Keogh, Individual 401(k) or SIMPLE Contributions</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="taxpayer_SEP_INCOME" data-id="taxpayer_SEP_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="spouse_SEP_INCOME" data-id="spouse_SEP_INCOME" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br class="break-page" style="box-sizing: border-box;"><br style="box-sizing: border-box;">
    <!-- @@@@@@@@@@@@@@@@@@@@ PAGE 3 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
    <div class="container card-style printer" style="box-sizing: border-box;width: 70%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;page-break-inside: avoid;box-shadow: 1.5px 2px 10px 3px;min-width: 992px!important; ">
        <div class="row " style="text-align: right;box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
            <div style="width: 100%;margin-right: 30px;box-sizing: border-box;">
                <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">
                    <?php echo(date('Y')-1) ?>
                </h3>
                <h2 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 2rem;orphans: 3;widows: 3;page-break-after: avoid;">Deductions</h2>
            </div>
        </div>
        <br style="box-sizing: border-box;">
        <!-- ==========TROISIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid; margin:0;">
                        <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Medical and Dental Expenses</h3>
                        </th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-1) ?> Amount</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-2) ?> Amount</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Prescription medications</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="prescription_medications_year_1_DEDUCTIONS" data-id="prescription_medications_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="prescription_medications_year_2_DEDUCTIONS" data-id="prescription_medications_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Health insurance premiuns</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="health_insurance_year_1_DEDUCTIONS" data-id="health_insurance_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="health_insurance_year_2_DEDUCTIONS" data-id="health_insurance_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Doctors, dentists, etc</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="doctors_year_1_DEDUCTIONS" data-id="doctors_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="doctors_year_2_DEDUCTIONS" data-id="doctors_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Hospitals, clinics, etc</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="hospital_year_1_DEDUCTIONS" data-id="hospital_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="hospital_year_2_DEDUCTIONS" data-id="hospital_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Eyeglasses and contact lences</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="eyeglasses_year_1_DEDUCTIONS" data-id="eyeglasses_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="eyeglasses_year_2_DEDUCTIONS" data-id="eyeglasses_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Miles driven for medical purposes</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="miles_year_1_DEDUCTIONS" data-id="miles_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="miles_year_2_DEDUCTIONS" data-id="miles_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Other medical and dental expenses:</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"></td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"></td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_medical_DEDUCTIONS" data-id="other_medical_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_medical_year_1_DEDUCTIONS" data-id="other_medical_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_medical_year_2_DEDUCTIONS" data-id="other_medical_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- ==========TROISIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">
                        <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Taxes</h3>
                        </th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-1) ?> Amount</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-2) ?> Amount</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Real estate taxes paid on principal residence</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="real_pricipal_year_1_DEDUCTIONS" data-id="real_pricipal_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="real_pricipal_year_2_DEDUCTIONS" data-id="real_pricipal_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Real estate taxes paid on additional homes or land</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="real_additional_year_1_DEDUCTIONS" data-id="real_additional_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="real_additional_year_2_DEDUCTIONS" data-id="real_additional_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Auto licence registration fees based on the value of the vehicule</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="auto_licence_year_1_DEDUCTIONS" data-id="auto_licence_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="auto_licence_year_2_DEDUCTIONS" data-id="auto_licence_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Other personal property taxes</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_personal_year_1_DEDUCTIONS" data-id="other_personal_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_personal_year_2_DEDUCTIONS" data-id="other_personal_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- ==========4 TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td colspan="3" scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Interest Expenses</h3><br style="box-sizing: border-box;">Home mortgage interest paid - Attach Form(s) 1098
                        </td>

                    </tr>
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Lender's Name</td>
                        <td class="text-center" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;text-align: center!important;background-color: #fff!important;">
                            <?php echo(date('Y')-1) ?> Amount</td>
                        <td class="text-center" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;text-align: center!important;background-color: #fff!important;">
                            <?php echo(date('Y')-2) ?> Amount</td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="lender_name_home_mortgage_1_DEDUCTIONS" data-id="lender_name_home_mortgage_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="home_mortgage_amount_year_1_1_DEDUCTIONS" data-id="home_mortgage_amount_year_1_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="home_mortgage_amount_year_2_1_DEDUCTIONS" data-id="home_mortgage_amount_year_2_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="lender_name_home_mortgage_2_DEDUCTIONS" data-id="lender_name_home_mortgage_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="home_mortgage_amount_year_1_2_DEDUCTIONS" data-id="home_mortgage_amount_year_1_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="home_mortgage_amount_year_2_2_DEDUCTIONS" data-id="home_mortgage_amount_year_2_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i style="box-sizing: border-box;">Point paid on loan to buy, build or improve main home</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i style="box-sizing: border-box;">Lender's Name </i>
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="lender_name_point_paid_DEDUCTIONS" data-id="lender_name_point_paid_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i style="box-sizing: border-box;">
                                <?php echo(date('Y')-1) ?> Amount</i>

                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="amount_point_paid_DEDUCTIONS" data-id="amount_point_paid_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i style="box-sizing: border-box;"></i>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- ==========5 TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">
                        <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Cash/Check/Credit Contributions</h3>
                        </th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-1) ?> Amount</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-2) ?> Amount</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_1_DEDUCTIONS" data-id="cash_contributions_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_year_1_1_DEDUCTIONS" data-id="cash_contributions_year_1_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_year_2_1_DEDUCTIONS" data-id="cash_contributions_year_2_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_2_DEDUCTIONS" data-id="cash_contributions_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_year_1_2_DEDUCTIONS" data-id="cash_contributions_year_1_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_year_2_2_DEDUCTIONS" data-id="cash_contributions_year_2_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_3_DEDUCTIONS" data-id="cash_contributions_3_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_year_1_3_DEDUCTIONS" data-id="cash_contributions_year_1_3_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="cash_contributions_year_2_3_DEDUCTIONS" data-id="cash_contributions_year_2_3_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- ==========TROISIEME TABLEAU========= -->
        <div class="row border border-dark " style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;border: 1px solid #dee2e6!important;border-color: #343a40!important;">
            <div class="col-md-12 table-responsive" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;display: block;overflow-x: auto;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar;">
                <table class="table  table-condensed " style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;">
                    <tr style="font-size: small;box-sizing: border-box;page-break-inside: avoid;">
                        <th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Miscellaneous Deductions</h3>
                        </th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-1) ?> Amount</th>
                        <th class="text-center" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <?php echo(date('Y')-2) ?> Amount</th>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Union and professional dues</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="union_dues_year_1_DEDUCTIONS" data-id="union_dues_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="union_dues_year_2_DEDUCTIONS" data-id="union_dues_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Professional subscriptions, books, supplies</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="professional_subscriptions_year_1_DEDUCTIONS" data-id="professional_subscriptions_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="professional_subscriptions_year_2_DEDUCTIONS" data-id="professional_subscriptions_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Uniforms and protective clothing (including cleaning)</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="uniforms_year_1_DEDUCTIONS" data-id="uniforms_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="uniforms_year_2_DEDUCTIONS" data-id="uniforms_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Job search cost</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="job_serch_year_1_DEDUCTIONS" data-id="job_serch_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="job_serch_year_2_DEDUCTIONS" data-id="job_serch_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Taxpayer educator expenses</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="taxpayer_educator_year_1_DEDUCTIONS" data-id="taxpayer_educator_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="taxpayer_educator_year_2_DEDUCTIONS" data-id="taxpayer_educator_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Spouse educator expenses</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="spouse_educator_year_1_DEDUCTIONS" data-id="spouse_educator_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="spouse_educator_year_2_DEDUCTIONS" data-id="spouse_educator_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Tax return preparation fees</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="tax_return_year_1_DEDUCTIONS" data-id="tax_return_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="tax_return_year_2_DEDUCTIONS" data-id="tax_return_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Safe deposit box rental</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="safe_deposit_year_1_DEDUCTIONS" data-id="safe_deposit_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="safe_deposit_year_2_DEDUCTIONS" data-id="safe_deposit_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Gambling losses (to the extent of gamblling income)</i>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="gambling_losses_year_1_DEDUCTIONS" data-id="gambling_losses_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="gambling_losses_year_2_DEDUCTIONS" data-id="gambling_losses_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td colspan="3" scope="colgroup" style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                            <i class="text-center" style="box-sizing: border-box;text-align: center!important;">Other expenses (list):</i>
                        </td>

                    </tr>
                    <tr style="box-sizing: border-box;page-break-inside: avoid;">
                        <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_expenses_DEDUCTIONS" data-id="other_expenses_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_expenses_year_1_DEDUCTIONS" data-id="other_expenses_year_1_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                        <td style="border: none;box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">
                             <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                <input type="text" name="other_expenses_year_2_DEDUCTIONS" data-id="other_expenses_year_2_DEDUCTIONS" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>



    </div>
    <!-- Yes No Part -->
    <div class="break-page" style="box-sizing: border-box;"></div>
    <div class="container padding-box-question card-style printer" style="box-sizing: border-box;width: 70%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;page-break-inside: avoid;padding-top: 40px;padding-bottom: 400px;box-shadow: 1.5px 2px 10px 3px;min-width: 992px!important;">
        <div class="header-box-question" style="box-sizing: border-box;">
    
            <h4 style="font-size: 30px;box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;">
                <?php echo(date('Y')-1) ?> Questions</h4>
        </div>
        <div class="container box-tax-year" style="box-sizing: border-box;width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;border: 1px solid black;padding: 10px;min-width: 992px!important;">
            <table style="height:80%;width:auto">
                <tr>
                    <th>

                    </th>
                    <th>
                        Yes
                    </th>
                    <th>
                        No
                    </th>
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal; margin:0;padding:0;'>
                        <b style="font-weight: bolder;">1.-</b> Did a lender cancel any of your dept in
                        <?php echo(date('Y')-1) ?> (Attach any Form 1099-A or 1099-C)

                    </th>
                    <th>
                        <input type="radio" name="1-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="1-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">2.-</b> Did you make energy efficient improvements to your home or purchase any energy-saving
                                    property during
                                    <?php echo(date('Y')-1) ?>? If <b style="box-sizing: border-box;font-weight: bolder;">yes, </b> please attach details
                        </th>
                    </p>
                    <th>
                        <input type="radio" name="2-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="2-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">3.-</b> Did you purchase a motor vehicle or boat during
                                    <?php echo(date('Y')-1) ?>?  If <b style="box-sizing: border-box;font-weight: bolder;">yes,</b> attach
                                    documentation showing sales tax paid.
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="3-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="3-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">4.-</b> Did you purchase a hybrid or electric vehicule in
                                    <?php echo(date('Y')-1) ?> ? If <b style="box-sizing: border-box;font-weight: bolder;">yes, </b> enter year, make,
                                    model, and date purchase
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="4-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="4-radio" value="no" >
                </tr>
                <tr>
                    <th>
                        <input type="text" name="QUESTION_4" data-id="QUESTION_4" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 60%;position: relative;top: -8px;float:left">

                    </th>

                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">5.-</b> Did you donate a vehicle in
                                    <?php echo(date('Y')-1) ?> ? If <b style="box-sizing: border-box;font-weight: bolder;">yes, </b>attach Form 1098C
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="5-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="5-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">6.-</b> What was the sales tax rate in your locality in
                                    <?php echo(date('Y')-1) ?> ?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="6-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="6-radio" value="no" >
                </tr>
                <tr>
                    <th>
                        <div  style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">

                            <div class="col-md-4" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                            %
                                        <input type="text" name="QUESTION_6a" data-id="QUESTION_6a" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                    <div class="col-md-4" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                                        <label style="box-sizing: border-box;display: inline-block;margin-bottom: .5rem;">State ID</label>
                                        <input type="text" name="QUESTION_6b" data-id="QUESTION_6b" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                        </div>
                    </th>
                </tr>


                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">7.-</b> Did your marital status changes during
                                    <?php echo(date('Y')-1) ?> ? If <b style="box-sizing: border-box;font-weight: bolder;">yes</b>, explain
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="7-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="7-radio" value="no" >
                </tr>

                <tr>
                    <th>

                        <input type="text" name="QUESTION_7" data-id="QUESTION_7" style=";box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 60%;position: relative;top: -8px;float:left">
                    </th>

                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>
                        <b style="box-sizing: border-box;font-weight: bolder;">8.-</b> Where you or your spouse permanently and totally disable in
                                    <?php echo(date('Y')-1) ?>

                    </p>
                    </th>
                    <th>
                        <input type="radio" name="8-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="8-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal'>

                        <b style="box-sizing: border-box;font-weight: bolder;">9.-</b> Do you have dependents who must file ?
                    </p>

                    </th>
                    <th>
                        <input type="radio" name="9-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="9-radio" value="no" >
                </tr>


                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">10.-</b> Do you have children who are under age 19 or a full time student under age 24 with
                                    investment income greater than $2,100?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="10-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="10-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">11.-</b> Did you provide over half the support for any other person during
                                    <?php echo(date('Y')-1) ?>?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="11-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="11-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">12.-</b> Did you incur adoption expenses during
                                    <?php echo(date('Y')-1) ?>?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="12-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="12-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">13.-</b> Did you receive a total distribution from IRA or other qualified plan that was partially
                                    or totally rolled over into another IRA r qualified plan within 60 days of the distribution?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="13-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="13-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">14.-</b> Did you receive any disability payments in
                                    <?php echo(date('Y')-1) ?>?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="14-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="14-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">15.-</b> Did you receive any tip income <strong style="box-sizing: border-box;font-weight: bolder;">not </strong> reported to your employer?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="15-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="15-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">16a.-</b> Did you buy, sell, refinance, foreclose or abandon a pricipal residence or other real
                                    property in
                                    <?php echo(date('Y')-1) ?>? If <strong style="box-sizing: border-box;font-weight: bolder;">yes,</strong> attach closing
                                    or escrow statements, 1099-C or 1099-A forms
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="16a-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="16a-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">16b.-</b> If you sold a home, did you claim the First-Time Homebuyer Credit when you purchased
                                    it?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="16b-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="16b-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">17.-</b> Did you incur any casualty or theft losses during
                                    <?php echo(date('Y')-1) ?>?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="17-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="17-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">18.-</b> Did you incur any non-business bad bedts?
                    </p>
                    </th>
                    <th>
                        <input type="radio" name="18-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="18-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">19.-</b> Did you pay any individual for domestic sevices in
                                    <?php echo(date('Y')-1) ?>?            
                    </p>
                            </th>
                    <th>
                        <input type="radio" name="19-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="19-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">20.-</b> Did you buy or sell any stocks on bonds in
                                    <?php echo(date('Y')-1) ?>?         
                    </p>
                            </th>
                    <th>
                        <input type="radio" name="20-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="20-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">21.-</b> Did you use the proceeds from Series EE or | U.S. savings bonds purchased after 1989 to
                                    pay for higher education expenses?      
                    </p>
                            </th>
                    <th>
                        <input type="radio" name="21-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="21-radio" value="no" >
                </tr>


                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">22.-</b> Did you incur any moving expenses? If <strong style="box-sizing: border-box;font-weight: bolder;">yes,</strong> atach details
                    </p>
            
                            </th>
                    <th>
                        <input type="radio" name="22-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="22-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">23.-</b> Did you receive any income not included in this Tax Organizer? If <strong style="box-sizing: border-box;font-weight: bolder;">yes,</strong>
                                    please attach information.    
                    </p>
                            </th>
                    <th>
                        <input type="radio" name="23-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="23-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>
                        <b style="box-sizing: border-box;font-weight: bolder;">24.-</b> Do you expect your income and deductions in
                                    <?php echo(date('Y')-1) ?> to be the same as
                                    <?php echo(date('Y')-1) ?>? If <strong style="box-sizing: border-box;font-weight: bolder;">no,</strong> attach
                                    explanation of changes expected.   

                    </p>
                            </th>
                    <th>
                        <input type="radio" name="24-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="24-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">25a.-</b> Did you and your dependents have health insurance coverage for the full year?
                    </p>

                            </th>
                    <th>
                        <input type="radio" name="25a-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="25a-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">25b.-</b> Did you receive any of the following IRS documents ? Forms 1095-A (Health Insurance
                                    Marketplace Statement), Form 1095-B (Health Coverage) or Form 1095-C (Employer Provided Health
                                    Insurance Offer and Coverage)? Is so, please attach
                    </p>
                            </th>
                    <th>
                        <input type="radio" name="25b-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="25b-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal;margin:0;padding:0;'>

                        <b style="box-sizing: border-box;font-weight: bolder;">26.-</b> If you paid any alimony, enter recipient's SSN ?
                    </p>

                    </th>
                    <th>
                        <input type="radio" name="26-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="26-radio" value="no" >
                </tr>

                <tr>
                    <th>
                        <div class="row" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
                
                            <div class="col-md-4" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                                <input type="text" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                            <div class="col-md-4" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                                <label style="box-sizing: border-box;display: inline-block;margin-bottom: .5rem;">Alimony paid:</label>
                                <input type="text" name="QUESTION_26" data-id="QUESTION_26" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                            </div>
                        </div>
                    </th>
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style=font-weight:normal;>

                        <b style="box-sizing: border-box;font-weight: bolder;">27.-</b> Enter the state of residence
                    </p>

                    </th>
                    <th>
                        <input type="radio" name="27-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="27-radio" value="no" >
                </tr>

                <tr>
                    <th>
                        <div class="label-form-client " style="box-sizing: border-box;label {display: inline-block;text-align: right;">
                            <div class="row" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
                                <div class="col-md-4" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                                    <label style="box-sizing: border-box;display: inline-block;margin-bottom: .5rem;">Taxpayer:</label>
                                    <input type="text" name="QUESTION_27a" data-id="QUESTION_27a" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
                                <div class="col-md-4" style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 33.333333%;flex: 0 0 33.333333%;max-width: 33.333333%;">
                                    <label style="box-sizing: border-box;display: inline-block;margin-bottom: .5rem;">Spouse:</label>
                                    <input type="text" name="QUESTION_27b" data-id="QUESTION_27b" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                </div>
            
                            </div>
                        </div>
                    </th>
                </tr>
            </table>    
    
        </div>

        <!-- ---------TABLE 2 -------- -->
        <div class="container box-tax-year" style="box-sizing: border-box;width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;border: 1px solid black;padding: 10px;min-width: 992px!important;">
            <table style='font-weight:normal;'>
                 <tr>
                    <th style='text-align:left;'>

                        <h1>
                        Electronic Filing and Direct Deposit of Refund
                        </h1>
                    </th>

                </tr>

                <tr>
                    <th>

                    </th>
                    <th>
                        Yes
                    </th>
                    <th>
                        No
                    </th>
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal'>

                    If your tax return is eligible for Electronic Filing, would you like to file electronically?
                    </p>

                    </th>
                    <th>
                        <input type="radio" name="28-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="28-radio" value="no" >
                </tr>
                            <br>
                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal'>
                    The Internal Revenue Service is able to deposit many refunds directly into taxpayers' account. If
                                you receive a refund, would you like derect deposit? If <strong style="box-sizing: border-box;font-weight: bolder;">yes,</strong> plaese provide a
                                voided check (not a deposit slip) if your bank account information ahs changed

                    </p>
                    </th>
                    <th>
                        <input type="radio" name="29-radio" value="yes" >

                    </th>
                    <th>
                        <input type="radio" name="29-radio" value="no" >
                </tr>

                <tr >
                    <th style='text-align:left;'>
                    <p style='font-weight:normal'>
                    
                    What type of account is this?
                    </p>
                    </th>
                    <th>
                        <label for="checking">Checking</label>
                        <input id='checking' type="radio" name="30-radio" value="yes" >

                    </th>
                    <th>
                        <label for="saving">Saving</label>
                        <input id='saving' type="radio" name="30-radio" value="no" >
                </tr>

            </table>
            <!-- ==========DEUXIEME TABLEAU========= -->
            <div class="row  " style="margin-top: 40px;box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
                <div class="col-md-12 " style="box-sizing: border-box;position: relative;width: 100%;min-height: 1px;padding-right: 15px;padding-left: 15px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;">
                    <div style="box-sizing: border-box;">
                        <h3 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-family: inherit;font-weight: 500;line-height: 1.2;color: inherit;font-size: 1.75rem;orphans: 3;widows: 3;page-break-after: avoid;">Estimated Tax Paid</h3>
                    </div>
                    <!-- <table class="table table-bordered  table-condensed table-form-client"> -->
                    <table class="table table-bordered  table-condensed  table-form-client" style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;max-width: 100%;margin-bottom: 1rem;background-color: transparent;border: 1px solid #dee2e6;">
                        <thead style="box-sizing: border-box;display: table-header-group;">
                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                <th colspan="2" class="text-center" scope="colgroup" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;">Federal</th>
                                <th colspan="3" class="text-center" scope="colgroup" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;">State</th>
                                <th colspan="3" class="text-center" scope="colgroup" style="box-sizing: border-box;text-align: center!important;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;">Local</th>
                            </tr>
                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">Date</th>
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">Amount</th>
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">Date</th>
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">Amount</th>
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">ID</th>
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">Date</th>
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">Amount</th>
                                <th scope="col" style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: bottom;border-top: 1px solid #dee2e6;border-bottom: 2px solid #dee2e6;border-bottom-width: 2px;background-color: #fff!important;border: 1px solid #ddd!important;width:10%;">ID</th>
                            </tr>
                        </thead>
                        <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_1_date_QUESTION" data-id="federal_1_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_1_amount_QUESTION" data-id="federal_1_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_1_date_QUESTION" data-id="state_1_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_1_amount_QUESTION" data-id="state_1_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>

                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_1_id_QUESTION" data-id="local_1_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_1_date_QUESTION" data-id="local_1_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_1_amount_QUESTION" data-id="local_1_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_1_id_QUESTION" data-id="local_1_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                            </tr>
                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_2_date_QUESTION" data-id="federal_2_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_2_amount_QUESTION" data-id="federal_2_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_2_date_QUESTION" data-id="state_2_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_2_amount_QUESTION" data-id="state_2_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_2_id_QUESTION" data-id="state_2_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>

                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_2_date_QUESTION" data-id="local_2_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_2_amount_QUESTION" data-id="local_2_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_2_id_QUESTION" data-id="local_2_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                            </tr>
                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_3_date_QUESTION" data-id="federal_3_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_3_amount_QUESTION" data-id="federal_3_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_3_date_QUESTION" data-id="state_3_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_3_amount_QUESTION" data-id="state_3_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_3_id_QUESTION" data-id="state_3_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_3_date_QUESTION" data-id="local_3_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_3_amount_QUESTION" data-id="local_3_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_3_id_QUESTION" data-id="local_3_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                            </tr>
                            <tr style="box-sizing: border-box;page-break-inside: avoid;">
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_4_date_QUESTION" data-id="federal_4_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="federal_4_amount_QUESTION" data-id="federal_4_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_4_date_QUESTION" data-id="state_4_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_4_amount_QUESTION" data-id="state_4_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="state_4_id_QUESTION" data-id="state_4_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_4_date_QUESTION" data-id="local_4_date_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_4_amount_QUESTION" data-id="local_4_amount_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                                <td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;border: 1px solid #ddd!important;">
                                     <div class="label-form-client adjust-input" style="box-sizing: border-box;label {
    display: inline-block;text-align: right;position: relative;top: 7px;">
                                        <input type="text" name="local_4_id_QUESTION" data-id="local_4_id_QUESTION" style="box-sizing: border-box;margin: 0;font-family: inherit;font-size: inherit;line-height: inherit;overflow: visible;background: transparent;border: none;border-bottom: 4px dotted #000000;width: 100%;position: relative;top: -8px;">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
    
                    </table>
                </div>
            </div>

    
        </div>
    </div>
    <div style="padding: 30px;box-sizing: border-box;"></div>
<!-- Contract part  -->
<div class="container padding-box-question card-style" style="box-sizing: border-box;width: 70%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;page-break-inside: avoid;padding-top: 40px;padding-bottom: 400px;box-shadow: 1.5px 2px 10px 3px;min-width: 992px!important;">
<img style="display:block;margin-left:auto;margin-right:auto;width:35%;height:auto" src="https://d33wubrfki0l68.cloudfront.net/8df03de0652f17325eace10088086e098163cffa/95959/asset/images/full_logo.png" alt="Logo">

                            <hr>
                                <p class="western" align="center" style="margin-bottom: 0.14in; line-height: 100%">
                                    <b>9 Mott Avenue, Suite 210</b><br>
                                    <b>Norwalk, CT 06850</b></p>
                                <p class="western" align="center" style="margin-bottom: 0.14in">
                                    <font size="5" style="font-size: 20pt"><b>Consent/Acknowledgement
                                            Form</b></font>
                                </p>
                            
                                <table class="table " style="border: none;">
                                    <tr>
                                        <td  style="border: none; width:30%">
                                            <b>Name</b>: <input class="label-contrat-client" type="text" name="name_CONSENT" data-id="name_CONSENT" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 90%;outline: none;">
                                        </td>
                                        <td  style="border: none;width:30%">
                                            <b>Spouse Name</b>: <input class="label-contrat-client" type="text" name="spouse_name_CONSENT" data-id="spouse_name_CONSENT" style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 90%;outline: none;">
                                        </td>
                                        <td style="border: none;width:10% !important">
                                            <b>Tax Year</b>: <input class="label-contrat-client" type="text" name="tax_year_CONSENT" data-id="tax_year_CONSENT" style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 100%;outline: none;">
                                        </td>
                                    </tr>
                                </table>
                                <br><br>
                                <table>
                                    <tr>
                                        <td  style="border: none;width:40%">
                                            <b>Business’Name</b>: <input class="label-contrat-client" type="text" name="business_name_CONSENT" data-id="business_name_CONSENT" style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 80%;outline: none;padding:5px;">
                                        </td>
                                        <td  style="border: none;width:20%">
                                            <b>Federal Return?</b>: <input class="label-contrat-client" type="text" name="federal_return_CONSENT" data-id="federal_return_CONSENT" style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 80%;outline: none;padding:5px;">
                                        </td>
                                        <td  style="border: none;width:20%">
                                            <b>State Return (s)?</b>: <input class="label-contrat-client" type="text" name="state_return_CONSENT" data-id="state_return_CONSENT" style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 80%;outline: none;padding:5px;">
                                        </td>
                                        <td  style="border: none;width:20%">
                                            <b>State Name(s):</b> <input class="label-contrat-client" type="text" name="state_name_CONSENT" data-id="state_name_CONSENT" style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 80%;outline: none;padding:5px;">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                                <ol type="I" start="2">
                                    <li>
                                        <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">I,
                            
                                                                    <input class="label-contrat-client" type="text" name="I1_CONSENT1" data-id="I1_CONSENT" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 180px;outline: none;">
                                                                    (Print your name), hereby
                                                                    acknowledge that my identity has been verified satisfactorily, by
                                                                    use of my state or federal issued ID. I am the primary person on
                                                                    the attached tax return and have deemed myself in capacity to act on
                                                                    my own behalf. I also take full responsibility for the information
                                                                    and all supporting documents that I have provided for the
                                                                    preparation and filing of my tax return and I ascertain that they
                                                                    are accurate, valid, and true. </span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                        </p>
                                    </li><li>
                                        <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">I,
                                                                    <input class="label-contrat-client" type="text" name="I2_CONSENT" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 180px;outline: none;">, hereby acknowledge and agree
                                                                    that these</span></span></font>
                                                    </font>
                                                </font>
                                            </em><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">
                                                                    services are not intended to determine whether I have filing
                                                                    requirements in other taxing jurisdictions than the one(s) I have
                                                                    listed above. The firm is available under the terms of a separate
                                                                    engagement letter to provide a nexus study that will enable us to
                                                                    determine whether any other state tax filings are required</span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                            <font size="2" style="font-size: 9pt">.</font>
                                        </p>
                                    </li><li>
                                        <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">I,
                                                                    <input class="label-contrat-client" name="I3_CONSENT" type="text" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 180px;outline: none;">, hereby acknowledge that I am
                                                                    in agreement with the
                                                                    preparation service fee $
                                                                    <input class="label-contrat-client" name="I4_CONSENT" type="text" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 100px;outline: none;"> quoted to me and understand
                                                                    that it
                                                                    is my obligation to pay (As instructed by the office) once my return
                                                                    is prepared based on the information I have provided, regardless of
                                                                    whether I opt not to file the return, for any reason. </span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">Should
                                                    I fail to pay the full amount specified in any invoice before
                                                    preparation and on the invoice’s date, a late fee of </font>
                                            </font>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt"><i><b>$35.00</b></i></font>
                                            </font>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">
                                                    shall be added to the amount due, and interest of </font>
                                            </font>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt"><i><b>10%</b></i></font>
                                            </font>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">
                                                    percent per annum shall accrue from the </font>
                                            </font>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt"><i><b>3rd</b></i></font>
                                            </font>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">
                                                    business day following the invoice’s date.</font>
                                            </font>
                                        </p>
                                        <p class="western" style="margin-left: 0.06in; margin-bottom: 0.14in">
                                    <em>
                                        <font color="#444444">
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">Should
                                                            any tax authority, state(s) or IRS, decides or happens to audit the
                                                            tax return in question as specified on this agreement, and should it
                                                            NOT be any fault or error of the firm, or its representatives, an
                                                            hourly rate </span></span></font>
                                            </font>
                                        </font>
                                    </em><em>
                                        <font color="#444444">
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt"><b><span style="background: #ffffff">of
                                                            $95.00, at a minimum of two (2) hours</span></b></font>
                                            </font>
                                        </font>
                                    </em><em>
                                        <font color="#444444">
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">,
                                                            will be charged and payable to the firm to address the issue at hand.
                                                            The term of this agreement would be still in place and enforce in
                                                            addition to new fees. </span></span></font>
                                            </font>
                                        </font>
                                    </em>
                                </p>
                                </li></ol>

                                <ol type="I" start="5">
                                    <li>
                                        <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444"><span style="background: #ffffff">
                                                    </span></font>
                                            </em><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">I,
                                                                    <input class="label-contrat-client" name="I5_CONSENT" type="text" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 180px;outline: none;">
                                                                    agree to reimburse Prestige ProServe, LLC (The firm) for all
                                                                </span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">reasonable
                                                    attorney's fees and costs</font>
                                            </font><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">
                                                                    i</span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">n
                                                    the event legal action is required to enforce any provision of this
                                                    Agreement; shall the firm prevail in these legal actions. </font>
                                            </font>
                                        </p>
                                    </li><li>
                                        <p class="western" style="margin-bottom: 0.14in">
                                            <font size="2" style="font-size: 9pt">I,
                                                <input class="label-contrat-client" type="text" name="I6_CONSENT" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 180px;outline: none;">,
                                            </font><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">agree
                                                                    that regardless of where I am domiciled and regardless of where this
                                                                    Agreement is physically signed, it shall be deemed to have been
                                                                    entered into at Prestige ProServe’s office located at </span></span></font>
                                                    </font>
                                                </font>
                                            </em><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><b><span style="background: #ffffff">9
                                                                        Mott Avenue, Suite 210, Norwalk, CT 06850</span></b></span></font>
                                                    </font>
                                                </font>
                                            </em><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">,
                                                                    and Fairfield County, CT shall be the exclusive jurisdiction for
                                                                    resolving disputes related to this Agreement. This Agreement shall
                                                                    be interpreted and governed in accordance with the Laws of CT.</span></span>
                                                        </font>
                                                    </font>
                                                </font>
                                            </em>
                                        </p>
                                    </li><li>
                                        <p class="western" style="margin-bottom: 0.14in">
                                            <font size="2" style="font-size: 9pt"><i><b>For
                                                        Business Returns – </b></i></font>
                                            <font size="2" style="font-size: 9pt"><b>
                                                </b></font>
                                            <font size="2" style="font-size: 9pt">I
                                                <input class="label-contrat-client" type="text" name="I7_CONSENT" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 180px;outline: none;"> declare
                                                that I </font><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">agree
                                                                    to pay the fees associated with the work performed to render any
                                                                    accounting and/or bookkeeping services. I understand that this
                                                                    service will be limited to those tasks deemed necessary for the
                                                                    preparation of the above mentioned tax returns (State and Federal).
                                                                    I am the person duly authorized and take explicit and implicit
                                                                    responsibility for the information provided in connection to these
                                                                    returns.</span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                        </p>
                                </li>
                                <li>
                                <p class="western" style="margin-bottom: 0.14in">
                                    <font size="2" style="font-size: 9pt">Tax
                                        Payer / Client’s Signature <input class="label-contrat-client" type="text" name="signatgure_CONSENT" required style="display: run-in;background: transparent;border: none;border-bottom: 2px dashed #000000;width: 180px;outline: none;">
                                        </font>
                                        &nbsp; &nbsp; Date :  <?php echo(date('y/m/d')) ?>
                                </p>
                                </li>
                                </ol>

                        

                                
                            </div>

                            <!-- end page 5 -->
                        
    </form>
</body>
</html>