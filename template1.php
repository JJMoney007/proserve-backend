<!-- Modal success-->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Form sent succesfully !
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end Modal -->

<!-- Modal success-->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Form NOT sent. Please try later !
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end Modal -->
<!-- ************************ -->
<div style="padding: 20px;"></div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 text-center p-0 mt-3 mb-2">
            <div class="card ">
                <div id="heading" class="w3-container">
                    <div class="w3-dropdown-hover">
                        <button class="w3-button w3-black">Year</button>
                        <div class="w3-dropdown-content w3-bar-block w3-border">
                            <a href="/client.html" class="w3-bar-item w3-button">2020</a>
                            <a href="/client2.html" class="w3-bar-item w3-button">2021</a>
                        </div>
                    </div>
                </div>
                <form id="msform" method="POST">
                    <!-- progressbar -->
                    <ul id="progressbar" class="pointer">
                        <li class="active" id="slide1" data-id="1"><strong>Tax organiser</strong></li>
                        <li id="slide2" data-id="2"><strong>Income</strong></li>
                        <li id="slide3" data-id="3"><strong>Deductions</strong></li>
                        <li id="slide4" data-id="4"><strong>Questions</strong></li>
                        <li id="slide5" data-id="5"><strong>Consent</strong></li>
                    </ul>

                    <fieldset>
                        <div class="form-cardd">
                            <div class="row justify-content-center">
                                <h2 class="steps">Step 1 - 5</h2>
                            </div>
                            <!-- start page 1 -->
                            <div class="container card-style">
                                <div class="logo" style="height: 0 !important;">
                                    <a><img style="position: absolute;width: 25%;height: auto;margin-top: 1.7%;" src="/asset/images/full_logo.png" alt="Logo"></a>
                                </div>
                                <div class="row " style="text-align: right;">
                                    <div style="width: 100%;margin-right: 30px;">
                                        <h3>
                                            <script>
                                                document.write(new Date().getFullYear() - 1)
                                            </script>
                                        </h3>
                                        <h2>TAX ORGANISER</h2>
                                    </div>
                                </div>
                                <div class="row border border-dark">
                                    <div class="col-md-6 ">
                                        <div class="text-center">
                                            <h4>Taxpayer Information</h4>
                                        </div>
                                        <table>
                                            <tr>
                                                <th class="text-left">Last name</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="last_name_taxpayer_TAX_ORGANISER" data-id="last_name_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">First name</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="first_name_taxpayer_TAX_ORGANISER" data-id="first_name_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Middle&nbsp;initial</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="middle_initial_taxpayer_TAX_ORGANISER" data-id="middle_initial_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <th>Suffix</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="suffix_taxpayer_TAX_ORGANISER" data-id="suffix_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th class="text-left">SSN</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="social_security_number_taxpayer_TAX_ORGANISER" data-id="social_security_number_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Occupation</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="occupation_taxpayer_TAX_ORGANISER" data-id="occupation_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Work&nbsp;phone</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="tel" name="work_phone_taxpayer_TAX_ORGANISER" data-id="work_phone_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <th>Ext</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="ext_taxpayer_TAX_ORGANISER" data-id="ext_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Cell phone</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="tel" name="cell_phone_taxpayer_TAX_ORGANISER" data-id="cell_phone_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">E-mail&nbsp;address</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="email_address_taxpayer_TAX_ORGANISER" data-id="email_address_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Date of birth</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="date_of_birth_taxpayer_TAX_ORGANISER" data-id="date_of_birth_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>



                                            
                                            <tr style="margin-top: 10px;margin-bottom:-5px;">
                                                <td colspan="3" style="text-align: left;">
                                                    <h3>
                                                        Licence Driver Details
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Issuing&nbsp;state</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="issuing_state_taxpayer_TAX_ORGANISER" data-id="issuing_state_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Licence&nbsp;number</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="licence_number_taxpayer_TAX_ORGANISER" data-id="licence_number_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Issue&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="issue_date_taxpayer_TAX_ORGANISER" data-id="issue_date_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Expiration&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="expiration_date_taxpayer_TAX_ORGANISER" data-id="expiration_date_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Does&nbsp;not&nbsp;expire</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="checkbox" name="does_not_expire_taxpayer_TAX_ORGANISER" data-id="does_not_expire_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-left">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="Doc_Number_taxpayer_TAX_ORGANISER" data-id="does_not_expire_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <hr style="background-color: black;">
                                                </td>
                                            </tr>

                                            <tr style="margin-top: 10px;margin-bottom:-5px;">
                                                <td colspan="3" style="text-align: left;">
                                                    <h3>
                                                        State Identification card detail
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Issuing&nbsp;state</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="card_issuing_state_taxpayer_TAX_ORGANISER" data-id="card_issuing_state_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Identification&nbsp;number</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="card_identification_number_taxpayer_TAX_ORGANISER" data-id="card_identification_number_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Issue&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="card_issue_date_taxpayer_TAX_ORGANISER" data-id="card_issue_date_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Expiration&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="card_expiration_date_taxpayer_TAX_ORGANISER" data-id="card_expiration_date_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Does&nbsp;not&nbsp;expire</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="checkbox" name="card_does_not_expire_taxpayer_TAX_ORGANISER" data-id="card_does_not_expire_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-left">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="card_Doc_Number_taxpayer_TAX_ORGANISER" data-id="card_does_not_expire_taxpayer_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <hr style="background-color: black;">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="text-center">
                                            <h4>Spouse Information</h4>
                                        </div>
                                        <table class="table-condensed">
                                            <tr>
                                                <th class="text-left">Last name</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="last_name_spouse_TAX_ORGANISER" data-id="last_name_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">First name</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="first_name_spouse_TAX_ORGANISER" data-id="first_name_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Middle&nbsp;initial</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="middle_initial_spouse_TAX_ORGANISER" data-id="middle_initial_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <th>Suffix</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="suffix_spouse_TAX_ORGANISER" data-id="suffix_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th class="text-left">SSN</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="social_security_number_spouse_TAX_ORGANISER" data-id="social_security_number_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Occupation</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="occupation_spouse_TAX_ORGANISER" data-id="occupation_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Work&nbsp;phone</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="tel" name="work_phone_spouse_TAX_ORGANISER" data-id="work_phone_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <th>Ext</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="ext_spouse_TAX_ORGANISER" data-id="ext_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Cell phone</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="tel" name="cell_phone_spouse_TAX_ORGANISER" data-id="cell_phone_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">E-mail&nbsp;address</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="email_address_spouse_TAX_ORGANISER" data-id="email_address_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Date of birth</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="date_of_birth_spouse_TAX_ORGANISER" data-id="date_of_birth_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr style="visibility: hidden;">
                                                <td colspan="3">
                                                    <h3>
                                                        Licence Driver Details
                                                    </h3>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th class="text-left">Issuing&nbsp;state</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="issuing_state_spouse_TAX_ORGANISER" data-id="issuing_state_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Licence&nbsp;number</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="licence_number_spouse_TAX_ORGANISER" data-id="licence_number_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Issue&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="issue_date_spouse_TAX_ORGANISER" data-id="issue_date_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Expiration&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="expiration_date_spouse_TAX_ORGANISER" data-id="expiration_date_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Does&nbsp;not&nbsp;expire</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="checkbox" name="does_not_expire_spouse_TAX_ORGANISER" data-id="does_not_expire_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-left">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="Doc_Number_spouse_TAX_ORGANISER" data-id="does_not_expire_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <hr style="background-color: black;">
                                                </td>
                                            </tr>
                                            <tr style="margin-top: 10px;margin-bottom:-5px; visibility: hidden;">
                                                <td colspan="3" style="text-align: left;">
                                                    <h3>
                                                        State Identification card detail
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Issuing&nbsp;state</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="card_issuing_state_spouse_TAX_ORGANISER" data-id="card_issuing_state_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Identification&nbsp;number</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="card_identification_number_spouse_TAX_ORGANISER" data-id="card_identification_number_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Issue&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="card_issue_date_spouse_TAX_ORGANISER" data-id="card_issue_date_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Expiration&nbsp;date</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="date" name="card_expiration_date_spouse_TAX_ORGANISER" data-id="card_expiration_date_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Does&nbsp;not&nbsp;expire</th>
                                                <td colspan="3">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="checkbox" name="card_does_not_expire_spouse_TAX_ORGANISER" data-id="card_does_not_expire_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-left">NY&nbsp;Doc number(first 3&nbsp;chars)*</th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="card_Doc_Number_spouse_TAX_ORGANISER" data-id="card_does_not_expire_spouse_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <hr style="background-color: black;">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <table class="table  table-condensed">
                                                <tr>
                                                    <th style="border: none;" class="text-left">Address</th>
                                                    <td colspan="3" style="border: none;">
                                                        <div class="label-form-client adjust-input">
                                                            <input type="text" name="address_TAX_ORGANISER" data-id="address_TAX_ORGANISER">
                                                        </div>
                                                    </td>
                                                    <th style="border: none;" class="text-left">Apartment&nbsp;number</th>
                                                    <td style="border: none;">
                                                        <div class="label-form-client adjust-input">
                                                            <input type="text" name="apartment_number_TAX_ORGANISER" data-id="apartment_number_TAX_ORGANISER">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="border: none;" class="text-left">City</th>
                                                    <td style="border: none;">
                                                        <div class="label-form-client adjust-input">
                                                            <input type="text" name="city_TAX_ORGANISER" data-id="city_TAX_ORGANISER">
                                                        </div>
                                                    </td>
                                                    <th style="border: none;" class="text-left">State</th>
                                                    <td style="border: none;">
                                                        <div class="label-form-client adjust-input">
                                                            <input type="text" name="state_TAX_ORGANISER" data-id="state_TAX_ORGANISER">
                                                        </div>
                                                    </td>
                                                    <th style="border: none;" class="text-left">ZIP&nbsp;code</th>
                                                    <td style="border: none;">
                                                        <div class="label-form-client adjust-input">
                                                            <input type="text" name="zip_code_TAX_ORGANISER" data-id="zip_code_TAX_ORGANISER">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="border: none;" class="text-left">Home&nbsp;phone</th>
                                                    <td style="border: none;">
                                                        <div class="label-form-client adjust-input">
                                                            <input type="tel" name="home_phone_TAX_ORGANISER" data-id="home_phone_TAX_ORGANISER">
                                                        </div>
                                                    </td>
                                                    <th style="border: none;" class="text-left">Fax&nbsp;number</th>
                                                    <td style="border: none;">
                                                        <div class="label-form-client adjust-input">
                                                            <input type="text" name="fax_number_TAX_ORGANISER" data-id="fax_number_TAX_ORGANISER">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <!-- ==========DEUXIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3 class="text-left">Dependent Information</h3>
                                        </div>
                                        <!-- <table class="table table-bordered  table-condensed table-form-client"> -->
                                        <table class="table table-bordered  table-condensed  table-form-client">
                                            <colgroup>
                                                <col span="1" style="width: 30%;">
                                                <col span="1" style="width: 5%;">
                                                <col span="1" style="width: 25%;">
                                                <col span="1" style="width: 15%;">
                                                <col span="1" style="width: 5%;">
                                                <col span="1" style="width: 20%;">
                                            </colgroup>
                                            <tr style="font-size:small;">
                                                <th class="text-center center_date_in_box">First name
                                                    <hr class="dashed-line">Last name</th>
                                                <th class="text-center center_date_in_box">MI
                                                    <hr class="dashed-line">Suffix</th>
                                                <th class="text-center center_date_in_box">Social security number
                                                    <hr class="dashed-line">Relationship</th>
                                                <th class="text-center center_date_in_box">Date of birth</th>
                                                <th class="text-center center_date_in_box">Months Lived with Taxpayer</th>
                                                <th class="text-center center_date_in_box">Child Care Expense</th>
                                            </tr>
                                            <tr style="border-bottom: 3px dotted black;">
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_first_name_1_TAX_ORGANISER" data-id="dependent_first_name_1_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0 ;">
                                                        <input type="text" name="dependent_last_name_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_mi_1_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_suffix_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_social_security_number_1_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_relationship_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input  ">
                                                        <input type="text" name="dependent_day_of_birth_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_months_lived_with_taxpayer_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input fix-input-center">
                                                        <input type="text" name="dependent_child_care_expense_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 3px dotted black;">
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_first_name_2_TAX_ORGANISER" data-id="dependent_first_name_2_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_last_name_2_TAX_ORGANISER" data-id="dependent_last_name_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_mi_2_TAX_ORGANISER" data-id="dependent_mi_2_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_suffix_2_TAX_ORGANISER" data-id="dependent_suffix_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_social_security_number_2_TAX_ORGANISER" data-id="dependent_social_security_number_2_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_relationship_2_TAX_ORGANISER" data-id="dependent_relationship_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input fix-input-center center_date_in_box">
                                                        <input type="text" name="dependent_day_of_birth_2_TAX_ORGANISER" data-id="dependent_day_of_birth_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input fix-input-center ">
                                                        <input type="text" name="dependent_months_lived_with_taxpayer_2_TAX_ORGANISER" data-id="dependent_months_lived_with_taxpayer_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input fix-input-center center_date_in_box">
                                                        <input type="text" name="dependent_child_care_expense_2_TAX_ORGANISER" data-id="dependent_child_care_expense_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-bottom: 3px dotted black;">
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_first_name_3_TAX_ORGANISER" data-id="dependent_first_name_3_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_last_name_3_TAX_ORGANISER" data-id="dependent_last_name_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_mi_3_TAX_ORGANISER" data-id="dependent_mi_3_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_suffix_3_TAX_ORGANISER" data-id="dependent_suffix_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="dependent_social_security_number_3_TAX_ORGANISER" data-id="dependent_social_security_number_3_TAX_ORGANISER">
                                                        <hr style="margin-top: 25px;margin:12px 0;">
                                                        <input type="text" name="dependent_relationship_3_TAX_ORGANISER" data-id="dependent_relationship_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input fix-input-center center_date_in_box">
                                                        <input type="text" name="dependent_day_of_birth_3_TAX_ORGANISER" data-id="dependent_day_of_birth_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input fix-input-center">
                                                        <input type="text" name="dependent_months_lived_with_taxpayer_3_TAX_ORGANISER" data-id="dependent_months_lived_with_taxpayer_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td class="center_date_in_box">
                                                    <div class="label-form-client adjust-input fix-input-center">
                                                        <input type="text" name="dependent_child_care_expense_3_TAX_ORGANISER" data-id="dependent_child_care_expense_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ========== FIN DEUXIEME TABLEAU========= -->
                                <br>
                                <!-- ==========TROISIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3 class="text-left">Child and Dependent Care Provider Expenses</h3>
                                        </div>
                                        <table class="table table-bordered table-condensed table-form-client">
                                            <colgroup>
                                                <col span="1" style="width: 30%;">
                                                <col span="1" style="width: 35%;">
                                                <col span="1" style="width: 20%;">
                                                <col span="1" style="width: 15%;">
                                            </colgroup>
                                            <tr style="font-size:small;">
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">ID number</th>
                                                <th class="text-center">Amount Paid</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_name_1_TAX_ORGANISER" data-id="child_and_dependent_name_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_address_1_TAX_ORGANISER" data-id="child_and_dependent_address_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_id_number_1_TAX_ORGANISER" data-id="child_and_dependent_id_number_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_amount_paid_1_TAX_ORGANISER" data-id="child_and_dependent_amount_paid_1_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_name_2_TAX_ORGANISER" data-id="child_and_dependent_name_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_address_2_TAX_ORGANISER" data-id="child_and_dependent_address_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_id_number_2_TAX_ORGANISER" data-id="child_and_dependent_id_number_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_amount_paid_2_TAX_ORGANISER" data-id="child_and_dependent_amount_paid_2_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_name_3_TAX_ORGANISER" data-id="child_and_dependent_name_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_address_3_TAX_ORGANISER" data-id="child_and_dependent_address_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_id_number_3_TAX_ORGANISER" data-id="child_and_dependent_id_number_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="child_and_dependent_amount_paid_3_TAX_ORGANISER" data-id="child_and_dependent_amount_paid_3_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <!-- ==========QUATRIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3 class="text-left">Education Tuition and Fees</h3>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th class="text-left">Attach all Form 1098-Ts and list of your qualified education expenses.
                                                </th>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="education_tuition_TAX_ORGANISER" class="file_client_form" data-id="education_tuition_TAX_ORGANISER" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3 class="text-left">Student Loan Interest Paid</h3>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th class="text-left">Enter total
                                                    <script>
                                                        document.write(new Date().getFullYear())
                                                    </script> qualified student loan interest
                                                </th>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="file_student_loan_TAX_ORGANISER" data-id="file_student_loan_TAX_ORGANISER">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="student_loan_TAX_ORGANISER" class="file_client_form" data-id="student_loan_TAX_ORGANISER" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!-- end page 1 -->
                        </div>

                        <input type="button" id="next1" name="next" class="next action-button" value="Next">

                    </fieldset>
                    <fieldset>
                        <div class="form-card">

                            <div class="row justify-content-center">
                                <h2 class="steps">Step 2 - 5</h2>
                            </div>
                            <!-- start page 2 -->
                            <div class="container card-style">
                                <div class="row " style="text-align: right;">
                                    <div style="width: 100%;margin-right: 30px;">
                                        <h3>
                                            <script>
                                                document.write(new Date().getFullYear() - 1)
                                            </script>
                                        </h3>
                                        <h2>Income</h2>
                                    </div>
                                </div>
                                <br>
                                <!-- ==========PREMIER TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3>Attach Form(s) W-2 - Wages, Salaries, Tips and Other Compensation</h3>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    <label>Employer&nbsp;Name</label>
                                                </td>
                                                <td span="1" style="width: 20%;">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script>&nbsp;Amount
                                                </td>
                                            </tr>
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    <div class="label-form-client adjust-input ">
                                                        <input type="text" name="employer_name_1_INCOME" data-id="employer_name_1_INCOME">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="employer_year_amount_1_INCOME" data-id="employer_year_amount_1_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    <div class="label-form-client adjust-input ">
                                                        <input type="text" name="employer_name_2_INCOME" data-id="employer_name_2_INCOME">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="employer_year_amount_2_INCOME" data-id="employer_year_amount_2_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    <div class="label-form-client adjust-input ">
                                                        <input type="text" name="employer_name_3_INCOME" data-id="employer_name_3_INCOME">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="employer_year_amount_3_INCOME" data-id="employer_year_amount_3_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="employer_3_INCOME" data-id="employer_3_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <!-- ==========DEUXIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3>Attach Form(s) 1099-R - Distributions from Pensions, Annuities, Retirement, Profit-Sharing, IRAs, etc</h3>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    1099&#8209;R&nbsp;Payer&nbsp;Name
                                                </td>
                                                <td span="1" style="width: 20%;">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script>&nbsp;Amount
                                                </td>
                                            </tr>
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="1099_R_payer_name_1_INCOME" data-id="1099_R_payer_name_1_INCOME">
                                                    </div>
                                                </td>

                                                <td span="1" style="width: 20%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="1099_R_amount_1_INCOME" data-id="1099_R_amount_1_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="1099_R_payer_name_2_INCOME" data-id="1099_R_payer_name_2_INCOME">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="1099_R_amount_2_INCOME" data-id="1099_R_amount_2_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td span="1" style="width: 60%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="1099_R_payer_name_3_INCOME" data-id="1099_R_payer_name_3_INCOME">
                                                    </div>
                                                </td>
                                                <td span="1" style="width: 20%;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="1099_R_amount_3_INCOME" data-id="1099_R_amount_3_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="1099_R_3_INCOME" data-id="1099_R_3_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========TROISIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th style="font-size:x-large;">
                                                    <h3>Attach Form(s) SSA-1099 - Social Security/Railroad Benefits</h3>
                                                </th>
                                                <th class="text-center">Taxepayer</th>
                                                <th class="text-center">Spouse</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Sosial Security Benefits from Form SSA-1099</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="sosial_security_benefits_taxpayer_INCOME" data-id="sosial_security_benefits_taxpayer_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="sosial_security_benefits_spouse_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Railroad Retirement Benefits from Form RRB-1099</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="railroad_retirement_benefits_taxpayer_INCOME" data-id="railroad_retirement_benefits_taxpayer_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="railroad_retirement_benefits_spouse_INCOME" data-id="railroad_retirement_benefits_spouse_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Medicare B premiums withheld</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="medicare_B_premiums_taxpayer_INCOME" data-id="medicare_B_premiums_taxpayer_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="medicare_B_premiums_spouse_INCOME" data-id="medicare_B_premiums_spouse_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Medicare C premiums withheld</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="medicare_C_premiums_taxpayer_INCOME" data-id="medicare_C_premiums_taxpayer_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="medicare_C_premiums_spouse_INCOME" data-id="medicare_C_premiums_spouse_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Medicare D premiums withheld</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="medicare_D_premiums_taxpayer_INCOME" data-id="medicare_D_premiums_taxpayer_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="medicare_D_premiums_spouse_INCOME" data-id="medicare_D_premiums_spouse_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="SSA_1099_INCOME" data-id="SSA_1099_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========TROISIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3>Attach Form(s) 1099-MISC - Miscellaneous Income</h3>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr> 1099-MISC Payer Name</tr>
                                            <tr>
                                                <td colspan="1" scope="colgroup">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_1099_MISC_1_INCOME" data-id="payer_name_1099_MISC_1_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="1" scope="colgroup">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_1099_MISC_2_INCOME" data-id="payer_name_1099_MISC_2_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="1" scope="colgroup">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_1099_MISC_3_INCOME" data-id="payer_name_1099_MISC_3_INCOME">
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="1099_MISC_3_INCOME" data-id="1099_MISC_3_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========4TH TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3>Attach Form(s) 1099-INT - Interest Income</h3>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <colgroup>
                                                <col span="1" style="width: 75%;">
                                                <col span="1" style="width: 25%;">
                                            </colgroup>
                                            <tr>
                                                <td scope="colgroup">1099-INT Payer Name </td>
                                                <td scope="colgroup">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script> Amount
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_1_1099_INT_INCOME" data-id="payer_name_1_1099_INT_INCOME">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_1099_1_INT_INCOME" data-id="year_amount_1099_1_INT_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_2_1099_INT_INCOME" data-id="payer_name_2_1099_INT_INCOME">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_1099_2_INT_INCOME" data-id="year_amount_1099_2_INT_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_3_1099_INT_INCOME" data-id="payer_name_3_1099_INT_INCOME">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_1099_3_INT_INCOME" data-id="year_amount_1099_3_INT_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_4_1099_INT_INCOME" data-id="payer_name_4_1099_INT_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_1099_4_INT_INCOME" data-id="year_amount_1099_4_INT_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_5_1099_INT_INCOME" data-id="payer_name_5_1099_INT_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_1099_5_INT_INCOME" data-id="year_amount_1099_5_INT_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="1099_5_INT_INCOME" data-id="1099_5_INT_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========5TH TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h3>Attach Form(s) 1099-DIV - Dividend Income</h3>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <colgroup>
                                                <col span="1" style="width: 75%;">
                                                <col span="1" style="width: 25%;">
                                            </colgroup>
                                            <tr>
                                                <td scope="colgroup"> 1099-DIV Payer Name </td>
                                                <td scope="colgroup">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script> Amount
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_1_1099_DIV_INCOME" data-id="payer_name_1_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_1_1099_DIV_INCOME" data-id="year_amount_1_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_2_1099_DIV_INCOME" data-id="payer_name_2_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_3_1099_DIV_INCOME" data-id="year_amount_3_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_3_1099_DIV_INCOME" data-id="payer_name_3_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_3_1099_DIV_INCOME" data-id="year_amount_3_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_4_1099_DIV_INCOME" data-id="payer_name_4_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_4_1099_DIV_INCOME" data-id="year_amount_4_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="payer_name_5_1099_DIV_INCOME" data-id="payer_name_5_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="year_amount_5_1099_DIV_INCOME" data-id="year_amount_5_1099_DIV_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="1099_5_DIV_INCOME" data-id="1099_5_DIV_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========6TH TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h4>Attach Form(s) 1099-B, 1099-S - Sales of Stocks, Bonds, Real Estate, etc</h4>
                                        </div>
                                        <div>
                                            <p>Attach all stock sale transaction information, including initial cost information.</p>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="1099_B1099_S_SoS_INCOME" data-id="1099_B1099_S_SoS_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========7TH TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h4>Other Government Forms to attach:</h4>
                                        </div>
                                        <div>
                                            <p>Form(s) 1099-G - Certain Government Payments, Schedule K-1s - Partnership, S-Corporation, Trust or Estate In Income, Form(s) W-2G - Gambling or Lottery Winnings, Forms(s) 1099-Q - Payments from Qualified Education
                                                Programs.
                                            </p>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="other_gov_income_INCOME" data-id="other_gov_income_INCOME" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========8TH TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <div>
                                            <h4>Other Income:</h4>
                                        </div>
                                        <div>
                                            <p>Alimony, jury duty, unreported tips, disability income, etc. Business, rentals, farms: Attach income and expenses for any business, rental or farm you own. Include a list of all new equiment acquired this year,
                                                including date of purchased and cost.</p>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td>
                                                    <label div="">
                                                        <input type="file" id="files" name="other_income_INCOME" data-id="other_income_INCOME" class="file_client_form" multiple>
                                                    </label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========9TH TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th>
                                                    <h3>Retirement Plan Contributions</h3>
                                                </th>
                                                <th class="text-center">Taxpayer</th>
                                                <th class="text-center">Spouse</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Traditional IRA contributions made for
                                                        <script>document.write(new Date().getFullYear() - 1)</script></i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="taxpayer_traditional_IRA_INCOME" data-id="taxpayer_traditional_IRA_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="spouse_traditional_IRA_INCOME" data-id="spouse_traditional_IRA_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Roth IRA contributions made for
                                                        <script>document.write(new Date().getFullYear() - 1)</script></i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="taxpayer_roth_IRA_INCOME" data-id="taxpayer_roth_IRA_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="spouse_roth_IRA_INCOME" data-id="spouse_roth_IRA_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">SEP, Keogh, Individual 401(k) or SIMPLE Contributions</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="taxpayer_SEP_INCOME" data-id="taxpayer_SEP_INCOME">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="spouse_SEP_INCOME" data-id="spouse_SEP_INCOME">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="RETIREMENT_PLAN_CONTRIB" data-id="RETIREMENT_PLAN_CONTRIB" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!-- end page 2 -->
                        </div>
                        <input type="button" name="next" id="next2" class="next action-button" value="Next"> <input type="button" id="previous2" name="previous" class="previous action-button-previous" value="Previous">

                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row justify-content-center">
                                <h2 class="steps">Step 3 - 5</h2>
                            </div>
                            <!-- start page 3 -->
                            <div class="container card-style">
                                <div class="row " style="text-align: right;">
                                    <div style="width: 100%;margin-right: 30px;">
                                        <h3>
                                            <script>
                                                document.write(new Date().getFullYear() - 1)
                                            </script>
                                        </h3>
                                        <h2>Deductions</h2>
                                    </div>
                                </div>
                                <br>
                                <!-- ==========TROISIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th>
                                                    <h3>Medical and Dental Expenses</h3>
                                                </th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 1)
                                                    </script> Amount</th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script> Amount</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Prescription medications</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="prescription_medications_year_1_DEDUCTIONS" data-id="prescription_medications_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="prescription_medications_year_2_DEDUCTIONS" data-id="prescription_medications_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Health insurance premiuns</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="health_insurance_year_1_DEDUCTIONS" data-id="health_insurance_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="health_insurance_year_2_DEDUCTIONS" data-id="health_insurance_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Doctors, dentists, etc</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="doctors_year_1_DEDUCTIONS" data-id="doctors_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="doctors_year_2_DEDUCTIONS" data-id="doctors_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Hospitals, clinics, etc</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="hospital_year_1_DEDUCTIONS" data-id="hospital_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="hospital_year_2_DEDUCTIONS" data-id="hospital_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Eyeglasses and contact lences</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="eyeglasses_year_1_DEDUCTIONS" data-id="eyeglasses_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="eyeglasses_year_2_DEDUCTIONS" data-id="eyeglasses_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Miles driven for medical purposes</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="miles_year_1_DEDUCTIONS" data-id="miles_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="miles_year_2_DEDUCTIONS" data-id="miles_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Other medical and dental expenses:</i>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_medical_DEDUCTIONS" data-id="other_medical_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_medical_year_1_DEDUCTIONS" data-id="other_medical_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_medical_year_2_DEDUCTIONS" data-id="other_medical_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="MEDICAL_AND_DENTALS_FILES" data-id="MEDICAL_AND_DENTALS_FILES" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <!-- ==========TROISIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th>
                                                    <h3>Taxes</h3>
                                                </th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 1)
                                                    </script> Amount</th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script> Amount</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Real estate taxes paid on principal residence</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="real_pricipal_year_1_DEDUCTIONS" data-id="real_pricipal_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="real_pricipal_year_2_DEDUCTIONS" data-id="real_pricipal_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Real estate taxes paid on additional homes or land</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="real_additional_year_1_DEDUCTIONS" data-id="real_additional_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="real_additional_year_2_DEDUCTIONS" data-id="real_additional_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Auto licence registration fees based on the value of the vehicule</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="auto_licence_year_1_DEDUCTIONS" data-id="auto_licence_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="auto_licence_year_2_DEDUCTIONS" data-id="auto_licence_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Other personal property taxes</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_personal_year_1_DEDUCTIONS" data-id="other_personal_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_personal_year_2_DEDUCTIONS" data-id="other_personal_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="TAXES_FILES" data-id="TAXES_FILES" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========4 TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td colspan="1" scope="colgroup">
                                                    <h3>Interest Expenses</h3><br>Home mortgage interest paid - Attach Form(s) 1098
                                                </td>

                                            </tr>
                                            <tr style="font-size:small;">
                                                <td>Lender's Name</td>
                                                <td class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 1)
                                                    </script> Amount</td>
                                                <td class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script> Amount</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="lender_name_home_mortgage_1_DEDUCTIONS" data-id="lender_name_home_mortgage_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="home_mortgage_amount_year_1_1_DEDUCTIONS" data-id="home_mortgage_amount_year_1_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="home_mortgage_amount_year_2_1_DEDUCTIONS" data-id="home_mortgage_amount_year_2_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="lender_name_home_mortgage_2_DEDUCTIONS" data-id="lender_name_home_mortgage_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="home_mortgage_amount_year_1_2_DEDUCTIONS" data-id="home_mortgage_amount_year_1_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="home_mortgage_amount_year_2_2_DEDUCTIONS" data-id="home_mortgage_amount_year_2_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i>Point paid on loan to buy, build or improve main home</i>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <i>Lender's Name </i>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="lender_name_point_paid_DEDUCTIONS" data-id="lender_name_point_paid_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <i>
                                                        <script>document.write(new Date().getFullYear() - 1)</script> Amount</i>

                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="amount_point_paid_DEDUCTIONS" data-id="amount_point_paid_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <i></i>
                                                </td>
                                            </tr>

                                        </table>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="INTEREST_EXPENSE_FILES" data-id="INTEREST_EXPENSE_FILES" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========5 TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 ">
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th>
                                                    <h3>Cash/Check/Credit Contributions</h3>
                                                </th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 1)
                                                    </script> Amount</th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script> Amount</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_1_DEDUCTIONS" data-id="cash_contributions_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_year_1_1_DEDUCTIONS" data-id="cash_contributions_year_1_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_year_2_1_DEDUCTIONS" data-id="cash_contributions_year_2_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_2_DEDUCTIONS" data-id="cash_contributions_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_year_1_2_DEDUCTIONS" data-id="cash_contributions_year_1_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_year_2_2_DEDUCTIONS" data-id="cash_contributions_year_2_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_3_DEDUCTIONS" data-id="cash_contributions_3_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_year_1_3_DEDUCTIONS" data-id="cash_contributions_year_1_3_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="cash_contributions_year_2_3_DEDUCTIONS" data-id="cash_contributions_year_2_3_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="CASH_CHECK_CREDIT" data-id="CASH_CHECK_CREDIT" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========8TH TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 table-responsive">
                                        <div>
                                            <h3>Noncash Charitable Contributions</h3>
                                        </div>
                                        <div>
                                            <p>Attach all reciepts with details listing the following information: Donee, donee address, description of donation, date acquired and date contributed, your cost, values at time of donation, and you acquired
                                                the property.</p>
                                        </div>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="noncash_DEDUCTIONS" data-id="noncash_DEDUCTIONS" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- ==========TROISIEME TABLEAU========= -->
                                <div class="row border border-dark ">
                                    <div class="col-md-12 table-responsive">
                                        <table class="table  table-condensed ">
                                            <tr style="font-size:small;">
                                                <th>
                                                    <h3>Miscellaneous Deductions</h3>
                                                </th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 1)
                                                    </script> Amount</th>
                                                <th class="text-center">
                                                    <script>
                                                        document.write(new Date().getFullYear() - 2)
                                                    </script> Amount</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Union and professional dues</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="union_dues_year_1_DEDUCTIONS" data-id="union_dues_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="union_dues_year_2_DEDUCTIONS" data-id="union_dues_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Professional subscriptions, books, supplies</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="professional_subscriptions_year_1_DEDUCTIONS" data-id="professional_subscriptions_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="professional_subscriptions_year_2_DEDUCTIONS" data-id="professional_subscriptions_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Uniforms and protective clothing (including cleaning)</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="uniforms_year_1_DEDUCTIONS" data-id="uniforms_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="uniforms_year_2_DEDUCTIONS" data-id="uniforms_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Job search cost</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="job_serch_year_1_DEDUCTIONS" data-id="job_serch_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="job_serch_year_2_DEDUCTIONS" data-id="job_serch_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Taxpayer educator expenses</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="taxpayer_educator_year_1_DEDUCTIONS" data-id="taxpayer_educator_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="taxpayer_educator_year_2_DEDUCTIONS" data-id="taxpayer_educator_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Spouse educator expenses</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="spouse_educator_year_1_DEDUCTIONS" data-id="spouse_educator_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="spouse_educator_year_2_DEDUCTIONS" data-id="spouse_educator_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Tax return preparation fees</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="tax_return_year_1_DEDUCTIONS" data-id="tax_return_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="tax_return_year_2_DEDUCTIONS" data-id="tax_return_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Safe deposit box rental</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="safe_deposit_year_1_DEDUCTIONS" data-id="safe_deposit_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="safe_deposit_year_2_DEDUCTIONS" data-id="safe_deposit_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="text-center">Gambling losses (to the extent of gamblling income)</i>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="gambling_losses_year_1_DEDUCTIONS" data-id="gambling_losses_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="gambling_losses_year_2_DEDUCTIONS" data-id="gambling_losses_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="1" scope="colgroup">
                                                    <i class="text-center">Other expenses (list):</i>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td style="border: none;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_expenses_DEDUCTIONS" data-id="other_expenses_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td style="border: none;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_expenses_year_1_DEDUCTIONS" data-id="other_expenses_year_1_DEDUCTIONS">
                                                    </div>
                                                </td>
                                                <td style="border: none;">
                                                    <div class="label-form-client adjust-input">
                                                        <input type="text" name="other_expenses_year_2_DEDUCTIONS" data-id="other_expenses_year_2_DEDUCTIONS">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="table  table-condensed ">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input type="file" id="files" name="noncash_DEDUCTIONS" data-id="noncash_DEDUCTIONS" class="file_client_form" multiple>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>



                            </div>
                            <br><br>
                            <!-- end page 3 -->
                        </div>


                        <input type="button" name="next" id="next3" class="next action-button" value="Next"> <input type="button" name="previous" id="previous3" class="previous action-button-previous" value="Previous">

                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row justify-content-center">
                                <h2 class="steps">Step 4 - 5</h2>
                            </div>
                            <!-- start page 4 -->
                            <div class="container padding-box-question card-style">
                                <div class="header-box-question">

                                    <h4 style="font-size: 30px;">
                                        <script>
                                            document.write(new Date().getFullYear() - 1)
                                        </script> Questions</h4>
                                </div>
                                <div class="container box-tax-year">
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                            </div>

                                            <div class="yes-no">
                                                <p>Yes</p>
                                                <p>No</p>
                                            </div>
                                        </div>

                                        <div class="d-none " id="0-radio-hidden">
                                            <input type="text" name="0-radio">
                                        </div>

                                    </div>
                                    <!-- --------- 1 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>1.-</b> Did you receive an Economic impact (Stimilus) Payment?

                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="1-radio" value="yes">
                                                <input type="radio" name="1-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="1-radio-hidden">
                                            <input type="file" class="file_client_form" name="Question_form1099_a" data-id="Question_form1099_a" multiple>
                                        </div>

                                    </div>

                                    <!-- --------- 2 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>2.-</b> Did you receive any Advanced Child Tax Credit payments?

                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="2-radio" value="yes">
                                                <input type="radio" name="2-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="1-radio-hidden">
                                            <input type="file" class="file_client_form" name="Question_form1099_a" data-id="Question_form1099_a" multiple>
                                        </div>

                                    </div>

                                    <!-- --------- 3 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>3.-</b> Did a lender cancel any of your dept in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script> (Attach any Form 1099-A or 1099-C)
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="3-radio" value="yes">
                                                <input type="radio" name="3-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="1-radio-hidden">
                                            <input type="file" class="file_client_form" name="Question_form1099_a" data-id="Question_form1099_a" multiple>
                                        </div>

                                    </div>
                                    <!-- --------- 4 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>4.-</b> Did you make energy efficient improvements to your home or purchase any energy-saving property during
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>? If <b>yes, </b> please attach details
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="4-radio" value="yes">
                                                <input type="radio" name="4-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="2-radio-hidden">
                                            <input type="file" class="file_client_form" name="energy_improvement" data-id="energy_improvement" multiple>
                                        </div>

                                    </div>
                                    <!-- --------- 5 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>5.-</b> Did you purchase a motor vehicle or boat during
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>? <br> If <b>yes,</b> attach documentation showing sales tax paid.
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="5-radio" value="yes">
                                                <input type="radio" name="5-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="3-radio-hidden">
                                            <input type="file" class="file_client_form" name="motor_vehicule_boat" data-id="motor_vehicule_boat">
                                        </div>

                                    </div>
                                    <!-- --------- 6 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>6.-</b> Did you purchase a hybrid or electric vehicule in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script> ? If <b>yes, </b> enter year, make, model, and date purchase
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="6-radio" value="yes">
                                                <input type="radio" name="6-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none label-form-client" id="4-radio-hidden">
                                            <input type="text" name="hybrid-vehicule-info" data-id="QUESTION_4">
                                        </div>

                                    </div>
                                    <!-- --------- 7 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>7.-</b> Did you donate a vehicle in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script> ? If <b>yes, </b>attach Form 1098C
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="7-radio" value="yes">
                                                <input type="radio" name="7-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none" style="padding: 10px;" id="5-radio-hidden">
                                            <input type="file" class="file_client_form" name="vehicule_donation_attached_file" data-id="vehicule_donation_attached_file">
                                        </div>

                                    </div>
                                    <!-- --------- 8 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>8.-</b> What was the sales tax rate in your locality in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script> ?
                                            </div>
                                        </div>
                                        <table>
                                            <tr>
                                                <td class="label-form-client ">
                                                    <input type="text" name="QUESTION_6a" data-id="QUESTION_6a">
                                                </td>
                                                <td>%</td>
                                                <td>
                                                    <label>State ID</label>
                                                </td>
                                                <td class="label-form-client ">
                                                    <input type="text" name="QUESTION_6b" data-id="QUESTION_6b">
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                    <!-- --------- 9 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>9.-</b> Did your marital status changes during
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script> ? If <b>yes</b>, explain
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="9-radio" value="yes">
                                                <input type="radio" name="9-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none label-form-client" id="7-radio-hidden">
                                            <input type="text" name="QUESTION_7" data-id="QUESTION_7">
                                        </div>

                                    </div>
                                    <!-- --------- 10 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>10.-</b> Were you or your spouse permanently and totally disable in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="10-radio" value="yes">
                                                <input type="radio" name="10-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 11 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>11.-</b> Do you have dependents who must file ?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="11-radio" value="yes">
                                                <input type="radio" name="11-radio" value="no">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------- 12 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>12.-</b> Do you have children who are under age 19 or a full time student under age 24 with investment income greater than $2,100?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="12-radio" value="yes">
                                                <input type="radio" name="12-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 13 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>13.-</b> Did you provide over half the support for any other person during
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="13-radio" value="yes">
                                                <input type="radio" name="13-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 14 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>14.-</b> Did you incur adoption expenses during
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="14-radio" value="yes">
                                                <input type="radio" name="14-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 15 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>15.-</b> Did you receive a total distribution from IRA or other qualified plan that was partially or totally rolled over into another IRA r qualified plan within 60 days of the distribution?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="15-radio" value="yes">
                                                <input type="radio" name="15-radio" value="no">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------- 16 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>16.-</b> Did you receive any disability payments in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="16-radio" value="yes">
                                                <input type="radio" name="16-radio" value="no">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------- 17 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>17.-</b> Did you receive any tip income <strong>not </strong> reported to your employer?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="17-radio" value="yes">
                                                <input type="radio" name="17-radio" value="no">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------- 18a ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>18a.-</b> Did you buy, sell, refinance, foreclose or abandon a pricipal residence or other real property in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>? If <strong>yes,</strong> attach closing or escrow statements, 1099-C or 1099-A forms
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="18-radio" value="yes">
                                                <input type="radio" name="18-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="16-radio-hidden">
                                            <input type="file" class="file_client_form" name="closing_escrow_file" data-id="closing_escrow_file">
                                        </div>

                                    </div>
                                    <!-- --------- 18b ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>18b.-</b> If you sold a home, did you claim the First-Time Homebuyer Credit when you purchased it?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="18b-radio" value="yes">
                                                <input type="radio" name="18b-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 19 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>19.-</b> Did you incur any casualty or theft losses during
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="19-radio" value="yes">
                                                <input type="radio" name="19-radio" value="no">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------- 20 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>20.-</b> Did you incur any non-business bad bedts?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="20-radio" value="yes">
                                                <input type="radio" name="20-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 21 ----------- -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>21.-</b> Did you pay any individual for domestic sevices in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="21-radio" value="yes">
                                                <input type="radio" name="21-radio" value="no">

                                            </div>
                                        </div>

                                    </div>

                                    <!-- --------- 22 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b> 22.-</b> Did you take a retirement account distribution related to corona virus or a natural disaster

                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="22-radio" value="yes">
                                                <input type="radio" name="22-radio" value="no">

                                            </div>
                                        </div>

                                    </div>

                                    <!-- --------- 23 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>23.-</b> Did you buy or sell any stocks on bonds in
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="23-radio" value="yes">
                                                <input type="radio" name="23-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 24 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>24.-</b> Did you use the proceeds from Series EE or | U.S. savings bonds purchased after 1989 to pay for higher education expenses?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="24-radio" value="yes">
                                                <input type="radio" name="24-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 25 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>25.-</b> Did you incur any moving expenses? If <strong>yes,</strong> atach details
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="25-radio" value="yes">
                                                <input type="radio" name="25-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="22-radio-hidden">
                                            <input type="file" class="file_client_form" name="moving_expenses" data-id="moving_expenses">
                                        </div>

                                    </div>
                                    <!-- --------- 26 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>26.-</b> Did you receive any income not included in this Tax Organizer? If <strong>yes,</strong> please attach information.
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="26-radio" value="yes">
                                                <input type="radio" name="26-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="26-radio-hidden">
                                            <input type="file" class="file_client_form" name="income_not_included_in_this_tax" data-id="income_not_included_in_this_tax" multiple>
                                        </div>

                                    </div>
                                    <!-- --------- 27 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>27.-</b> Do you expect your income and deductions in
                                                <script>
                                                    document.write(new Date().getFullYear())
                                                </script> to be the same as
                                                <script>
                                                    document.write(new Date().getFullYear() - 1)
                                                </script>? If <strong>no,</strong> attach explanation of changes expected.
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="27-radio" value="yes">
                                                <input type="radio" name="27-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="27-radio-hidden">
                                            <input type="file" class="file_client_form" name="explanation_change_expected" data-id="explanation_change_expected">
                                        </div>

                                    </div>

                                    <!-- --------- 28 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>28.-</b> Did you receive Form 1095-A (Health Insurance Marketplace Statement)? If so, please attach

                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="28-radio" value="yes">
                                                <input type="radio" name="28-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="28-radio-hidden">
                                            <input type="file" class="file_client_form" name="explanation_change_expected" data-id="explanation_change_expected">
                                        </div>

                                    </div>

                                    <!-- --------- 29 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>29.-</b> At any time during 2020, did you sell, send, exchange, or otherwise acquire any financial interest in any virtual currency?

                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="29-radio" value="yes">
                                                <input type="radio" name="29-radio" value="no">

                                            </div>
                                        </div>

                                        <div class="d-none " style="padding: 10px;" id="29-radio-hidden">
                                            <input type="file" class="file_client_form" name="explanation_change_expected" data-id="explanation_change_expected">
                                        </div>

                                    </div>

                                    <!-- --------- 30 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>30a.-</b> Did you obtain a Paycheck Protection Program (PPP) loan?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="30-radio" value="yes">
                                                <input type="radio" name="30-radio" value="no">

                                            </div>
                                        </div>

                                    </div>

                                    <!-- --------- 30b ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>30b.-</b> If yes, has any portion of that loan been forgiven?
                                            </div>
                                        </div>
                                        <table>
                                            <tr>
                                                <td class="label-form-client ">
                                                    <input type="text" name="recipient_SSN_QUESTION_30b" data-id="recipient_SSN_QUESTION_30b">
                                                </td>

                                            </tr>
                                        </table>


                                    </div>

                                    <!-- --------- 31------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>31.-</b> If you paid any alimony, enter recipient's SSN ?
                                            </div>
                                        </div>
                                        <table>
                                            <tr>
                                                <td class="label-form-client ">
                                                    <input type="text" name="recipient_SSN_QUESTION_31" data-id="recipient_SSN_QUESTION_31">
                                                </td>
                                                <td>
                                                    Alimony paid:
                                                </td>
                                                <td class="label-form-client ">
                                                    <input type="text" name="QUESTION_31" data-id="QUESTION_31">
                                                </td>
                                            </tr>
                                        </table>


                                    </div>
                                    <!-- --------- 32 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>32.-</b> Enter the state of residence
                                            </div>
                                        </div>

                                        <div class="label-form-client ">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Taxpayer:</label>
                                                    <input type="text" name="QUESTION_32a" data-id="QUESTION_32a">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Spouse:</label>
                                                    <input type="text" name="QUESTION_32b" data-id="QUESTION_32b">
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                    <!-- --------- 33 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>33a.-</b> Do you want to change the language with which the IRS communicates with you?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="33-radio" value="yes">
                                                <input type="radio" name="33-radio" value="no">

                                            </div>
                                        </div>

                                    </div>

                                    <!-- --------- 33b ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                <b>33b.-</b> If yes, which language?
                                            </div>
                                        </div>
                                        <table>
                                            <tr>
                                                <td class="label-form-client ">
                                                    <input type="text" name="recipient_SSN_QUESTION_33b" data-id="recipient_SSN_QUESTION_33b">
                                                </td>

                                            </tr>
                                        </table>


                                    </div>


                                </div>
                                <!-- ---------TABLE 2 -------- -->
                                <div class="container box-tax-year">
                                    <h3>Electronic Filing and Direct Deposit of Refund</h3>
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                            </div>

                                            <div class="yes-no">
                                                <p>Yes</p>
                                                <p>No</p>
                                            </div>
                                        </div>

                                        <div class="d-none " id="0-radio-hidden">
                                            <input type="text" name="0-radio2">
                                        </div>

                                    </div>
                                    <!-- --------- 28 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                If your tax return is eligible for Electronic Filing, would you like to file electronically?
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="28-radio" value="yes">
                                                <input type="radio" name="28-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- --------- 29 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                The Internal Revenue Service is able to deposit many refunds directly into taxpayers' account. If you receive a refund, would you like derect deposit? If <strong>yes,</strong> plaese provide a voided check
                                                (not a deposit slip) if your bank account information ahs changed.
                                            </div>

                                            <div class="yes-no">
                                                <input type="radio" name="29-radio" value="yes">
                                                <input type="radio" name="29-radio" value="no">

                                            </div>
                                        </div>
                                        <div class="d-none " style="padding: 10px;" id="29-radio-hidden">
                                            <input type="file" class="file_client_form" name="voided_check_bank" data-id="voided_check_bank">
                                        </div>
                                    </div>
                                    <!-- --------- 30 ------------ -->
                                    <div class="row-question">
                                        <div class="yes-no-part">
                                            <div class="text-question">
                                                What type of account is this?
                                            </div>

                                            <div class="yes-no">
                                                Checking
                                                <input type="radio" name="30-radio" value="yes"> Savings
                                                <input type="radio" name="30-radio" value="no">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- ==========DEUXIEME TABLEAU========= -->
                                    <div class="row  " style="margin-top: 40px;">
                                        <div class="col-md-12 ">
                                            <div>
                                                <h3>Estimated Tax Paid</h3>
                                            </div>
                                            <table class="  table-form-client">
                                                <!-- <colgroup>
                                                    <col span="2" style="width: 20%;">
                                                    <col span="3" style="width: 40%;">
                                                    <col span="3" style="width: 40%;">
                                                </colgroup> -->
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" class="text-center" scope="colgroup">Federal</th>
                                                        <th colspan="3" class="text-center" scope="colgroup">State</th>
                                                        <th colspan="3" class="text-center" scope="colgroup">Local</th>
                                                    </tr>
                                                    <!-- <colgroup>
                                                        <col  style="width: 15%;">
                                                        <col  style="width: 15%;">

                                                        <col  style="width: 15%;">
                                                        <col  style="width: 5%;">
                                                        <col  style="width: 5%;">

                                                        <col  style="width: 15%;">
                                                        <col  style="width: 5%;">
                                                        <col  style="width: 5%;">
                                                    </colgroup> -->
                                                    <tr>
                                                        <th scope="col" style="width: 10%;">Date</th>
                                                        <th scope="col" style="width: 5%;">Amount</th>
                                                        <th scope="col" style="width: 10%;">Date</th>
                                                        <th scope="col" style="width: 10%;">Amount</th>
                                                        <th scope="col" style="width: 10%;">ID</th>
                                                        <th scope="col" style="width: 10%;">Date</th>
                                                        <th scope="col" style="width: 10%;">Amount</th>
                                                        <th scope="col" style="width: 10%;">ID</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="border: 3px dotted black;">
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_1_date_QUESTION" data-id="federal_1_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_1_amount_QUESTION" data-id="federal_1_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_1_date_QUESTION" data-id="state_1_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_1_amount_QUESTION" data-id="state_1_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_1_id_QUESTION" data-id="state_1_id_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_1_date_QUESTION" data-id="local_1_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_1_amount_QUESTION" data-id="local_1_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_1_id_QUESTION" data-id="local_1_id_QUESTION">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 3px dotted black;">
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_2_date_QUESTION" data-id="federal_2_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_2_amount_QUESTION" data-id="federal_2_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_2_date_QUESTION" data-id="state_2_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_2_amount_QUESTION" data-id="state_2_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_2_id_QUESTION" data-id="state_2_id_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_2_date_QUESTION" data-id="local_2_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_2_amount_QUESTION" data-id="local_2_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_2_id_QUESTION" data-id="local_2_id_QUESTION">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 3px dotted black;">
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_3_date_QUESTION" data-id="federal_3_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_3_amount_QUESTION" data-id="federal_3_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_3_date_QUESTION" data-id="state_3_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_3_amount_QUESTION" data-id="state_3_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_3_id_QUESTION" data-id="state_3_id_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_3_date_QUESTION" data-id="local_3_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_3_amount_QUESTION" data-id="local_3_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_3_id_QUESTION" data-id="local_3_id_QUESTION">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="border: 3px dotted black;">
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_4_date_QUESTION" data-id="federal_4_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="federal_4_amount_QUESTION" data-id="federal_4_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_4_date_QUESTION" data-id="state_4_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_4_amount_QUESTION" data-id="state_4_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="state_4_id_QUESTION" data-id="state_4_id_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_4_date_QUESTION" data-id="local_4_date_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_4_amount_QUESTION" data-id="local_4_amount_QUESTION">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="label-form-client adjust-input">
                                                                <input type="text" name="local_4_id_QUESTION" data-id="local_4_id_QUESTION">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <!-- ==========3 TABLEAU========= -->
                                    <div class="row  " style="margin-top: 8%;">
                                        <div class="col-md-12 ">
                                            <div>
                                                <h3>Additional Information</h3>
                                            </div>
                                            <!-- --------- 2 ------------ -->
                                            <div class="row-question">
                                                <div class="yes-no-part">
                                                    <div class="text-question">
                                                        (Enter any additional information here and attach any documents.)
                                                    </div>

                                                </div>

                                                <div style="padding: 10px;" id="2-radio-hidden">
                                                    <div>
                                                        <input type="file" id="files" name="multiple_files_additional_information_QUESTION" data-id="multiple_files_additional_information_QUESTION" class="file_client_form" multiple>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br><br>
                            <!-- end page 4 -->
                        </div>
                        <input type="button" name="next" id="next4" class="next action-button" value="Next"> <input type="button" name="previous" id="previous4" class="previous action-button-previous" value="Previous">

                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row justify-content-center">
                                <h2 class="steps">Step 5 - 5</h2>
                            </div>
                            <!-- start page 5 -->
                            <div class="container padding-box-question card-style">
                                <div class="logo" style="height: 0 !important;"></div>
                                <a><img style="position: absolute;width: 25%;height: auto; left:50%;transform: translate(-50%,0);" src="/asset/images/full_logo.png" alt="Logo"></a>

                                <hr style="margin-top:70px">

                                <p class="western" align="center" style="margin-bottom: 0.14in; line-height: 100%">
                                    <b>9 Mott Avenue, Suite 210</b><br>
                                    <b>Norwalk, CT 06850</b></p>
                                <p class="western" align="center" style="margin-bottom: 0.14in">
                                    <font size="5" style="font-size: 20pt"><b>Consent/Acknowledgement
                                            Form</b></font>
                                </p>

                                <ol type="i" style="list-style-type:upper-roman;margin-left:10px;" start="1">
                                    <li style="list-style-type:upper-roman;">
                                        <table class="table " style="border: none;">

                                            <tr>
                                                <td style="border: none;">
                                                    Name: <input class="label-contrat-client" type="text" name="name_CONSENT" data-id="name_CONSENT" required>
                                                </td>
                                                <td style="border: none;">
                                                    Spouse Name: <input class="label-contrat-client" type="text" name="spouse_name_CONSENT" data-id="spouse_name_CONSENT">
                                                </td>
                                                <td style="border: none;">
                                                    Tax Year: <input class="label-contrat-client" type="text" name="tax_year_CONSENT" data-id="tax_year_CONSENT">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: none;">
                                                    Business’Name: <input class="label-contrat-client" type="text" name="business_name_CONSENT" data-id="business_name_CONSENT">
                                                </td>
                                                <td style="border: none;">
                                                    Federal Return?: <input class="label-contrat-client" type="text" name="federal_return_CONSENT" data-id="federal_return_CONSENT">
                                                </td>
                                                <td style="border: none;">
                                                    State Return (s)?: <input class="label-contrat-client" type="text" name="state_return_CONSENT" data-id="state_return_CONSENT">
                                                </td>
                                                <td style="border: none;">
                                                    State Name(s): <input class="label-contrat-client" type="text" name="state_name_CONSENT" data-id="state_name_CONSENT">
                                                </td>
                                            </tr>
                                        </table>

                                    </li>
                                </ol>
                                <ol type="i" style="list-style-type:upper-roman;" start="2">
                                    <li style="list-style-type:upper-roman;margin-left:10px;">
                                        <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">I,
                            
                                                                    <input class="label-contrat-client" type="text" name="I1_CONSENT1" data-id="I1_CONSENT" required>
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
                                        </li><li style="list-style-type:upper-roman;margin-left:10px;">

                                            <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">I,
                                                                    <input class="label-contrat-client" type="text" name="I2_CONSENT" required>, hereby acknowledge and agree
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
                                            </li><li style="list-style-type:upper-roman;margin-left:10px;">
                                                <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="list-style-type:upper-roman;"><span style="font-style: normal"><span style="background: #ffffff">I,
                                                                    <input class="label-contrat-client" name="I3_CONSENT" type="text" required>, hereby acknowledge that I am
                                                                    in agreement with the
                                                                    preparation service fee $
                                                                    <input class="label-contrat-client" name="I4_CONSENT" type="text"> quoted to me and understand
                                                                    that it
                                                                    is my obligation to pay (As instructed by the office) once my return
                                                                    is prepared based on the information I have provided, regardless of
                                                                    whether I opt not to file the return, for any reason. </span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt">Should I fail to pay the full amount specified in any invoice before preparation and on the invoice’s date, a late fee of </font>
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
                                </li></ol>
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
                                <ol type="I" start="5">
                                    <li style="list-style-type:upper-roman;margin-left:10px;">
                                        <p class="western" style="margin-bottom: 0.14in"><em>
                                                <font color="#444444"><span style="background: #ffffff">
                                                    </span></font>
                                            </em><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">I,
                                                                    <input class="label-contrat-client" name="I5_CONSENT" type="text" required>
                                                                    agree to reimburse Prestige ProServe, LLC (The firm) for all
                                                                </span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">reasonable attorney's fees and costs</font>
                                            </font><em>
                                                <font color="#444444">
                                                    <font face="Arial, sans-serif">
                                                        <font size="2" style="font-size: 9pt"><span style="font-style: normal"><span style="background: #ffffff">
                                                                    i</span></span></font>
                                                    </font>
                                                </font>
                                            </em>
                                            <font face="Arial, sans-serif">
                                                <font size="2" style="font-size: 9pt">n the event legal action is required to enforce any provision of this Agreement; shall the firm prevail in these legal actions. </font>
                                            </font>
                                        </p>
                                        </li><li style="list-style-type:upper-roman;margin-left:10px;">
                                            <p class="western" style="margin-bottom: 0.14in">
                                                <font size="2" style="font-size: 9pt">I,
                                                    <input class="label-contrat-client" type="text" name="I6_CONSENT" required>,
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
                                            </li><li style="list-style-type:upper-roman;margin-left:15px;">
                                                <p class="western" style="margin-bottom: 0.14in">
                                                    <font size="2" style="font-size: 9pt"><i><b>For
                                                        Business Returns – </b></i></font>
                                                    <font size="2" style="font-size: 9pt"><b>
                                                </b></font>
                                                    <font size="2" style="font-size: 9pt">I
                                                        <input class="label-contrat-client" type="text" name="I7_CONSENT"> declare that I </font><em>
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
                                                </li><li style="list-style-type:upper-roman;margin-left:20px;">

                                                    <p class="western" style="margin-bottom: 0.14in">
                                                        <font size="2" style="font-size: 9pt">Tax Payer / Client’s Signature <input class="label-contrat-client" type="text" name="signatgure_CONSENT" required>
                                                        </font>
                                                        &nbsp; &nbsp; Date :
                                                        <script>
                                                            document.write(new Date().toISOString().slice(0, 10))
                                                        </script>
                                                    </p>
                                                </li>
                                </ol>


                                <div style="width: 100%; display: flex; justify-content: center; margin-top: 40px;">
                                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-expired-callback="expired_captcha" data-error-callback="error_captcha" data-sitekey="6LeYpy8aAAAAANlVIZBdFYbW4roh6SAe6k4jYkf4"></div>
                                </div>
                                <div class="row justify-content-center" style="margin-top: 20px;">
                                    <input disabled id="client_form" class="btn btn-primary btn-sm" type="submit" value="Submit Form">

                                    <div id="loader" class="loader d-none"></div>
                                </div>



                            </div>
                            <br><br>
                            <!-- end page 5 -->
                        </div>


                        <input type="button" name="previous" id="previous5" class="previous action-button-previous" value="Previous">

                    </fieldset>
                    <!-- <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 5 - 5</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset> -->
                </form>
            </div>
        </div>
    </div>
</div>


<div style="padding: 100px;"></div>
