<div class="maincontent">
        	<div class="contentinner">
            	<h4 class="widgettitle">Form Elements</h4>
                <div class="widgetcontent">
                	<form class="stdform" action="http://themepixels.com/main/themes/demo/webpage/katniss/forms.html" method="post">
                    	
                        <p>
                        	<label>Small Input</label>
                            <span class="field"><input type="text" name="input1" class="input-small" placeholder=".input-small" /></span>
                            <small class="desc">Small description of this field.</small>
                        </p>
                        
                        <p>
                        	<label>Medium Input</label>
                            <span class="field"><input type="text" name="input2" class="input-medium" placeholder=".input-medium" /></span>
                        </p>
                        
                        <p>
                        	<label>Large Input</label>
                            <span class="field"><input type="text" name="input3" class="input-large" placeholder=".input-large" /></span>
                        </p>
                        
                        <p>
                        	<label>X Large Input</label>
                            <span class="field"><input type="text" name="input4" class="input-xlarge" placeholder=".input-xlarge" /></span>
                        </p>
                        
                        <p>
                        	<label>XX Large Input</label>
                            <span class="field"><input type="text" name="input5" class="input-xxlarge" placeholder=".input-xxlarge" /></span>
                        </p>
                        
                        <p>
                        	<label>Input Block Level</label>
                            <span class="field"><input type="text" name="input6" class="input-block-level" placeholder=".input-block-level" /></span>
                        </p>
                        
                        <div class="par control-group warning">
                          <label for="inputWarning" class="control-label">Input with warning</label>
                          <div class="controls">
                            <input type="text" class="span4" id="inputWarning" placeholder=".span4" />
                            <span class="help-inline">Something may have gone wrong</span>
                          </div>
                        </div>
                        
                        <div class="par control-group error">
                          <label for="inputError" class="control-label">Input with error</label>
                          <div class="controls">
                            <input type="text" class="span4" id="inputError" placeholder=".span4">
                            <span class="help-inline">Please correct the error</span>
                          </div>
                        </div><!--par-->
                        
                        <div class="par control-group info">
                          <label for="inputInfo" class="control-label">Input with info</label>
                          <div class="controls">
                            <input type="text" class="span4" id="inputInfo" placeholder=".span4">
                            <span class="help-inline">Username is taken</span>
                          </div>
                        </div><!--par-->
                        
                        <div class="par control-group success">
                          <label for="inputSuccess" class="control-label">Input with success</label>
                          <div class="controls">
                            <input type="text" class="span4" id="inputSuccess" placeholder=".span4">
                            <span class="help-inline">Woohoo!</span>
                          </div>
                        </div><!--par-->
                        
                        <p>
                        	<label>Textarea</label>
                            <span class="field"><textarea cols="80" rows="5" class="span5"></textarea></span> 
                        </p>
                        
                        <p>
                        	<label>Textarea with Character Count</label>
                            <span class="field">
                                <textarea cols="80" rows="5" id="textarea2" class="span5"></textarea>
                            </span> 
                        </p>
                        
                        <p>
                        	<label>Select</label>
                            <span class="field">
                            <select name="select" class="uniformselect">
                            	<option value="">Choose One</option>
                                <option value="">Selection One</option>
                                <option value="">Selection Two</option>
                                <option value="">Selection Three</option>
                                <option value="">Selection Four</option>
                            </select>
                            
                            </span>
                        </p>
                        
                        <p>
                        	<label>Disabled Select</label>
                            <span class="field">
							<select name="select" disabled="disabled" class="uniformselect">
                            	<option value="">Choose One</option>
                                <option value="">Selection One</option>
                                <option value="">Selection Two</option>
                                <option value="">Selection Three</option>
                                <option value="">Selection Four</option>
                            </select>
                            </span>
                        </p>
                        
                        <p>
                        	<label>Multiple Select</label>
                            <span class="field">
                            <select name="select2" multiple="multiple" class="span4" size="5">
                                <option value="">Selection One</option>
                                <option value="">Selection Two</option>
                                <option value="">Selection Three</option>
                                <option value="">Selection Four</option>
                                <option value="">Selection Five</option>
                                <option value="">Selection Six</option>
                                <option value="">Selection Seven</option>
                                <option value="">Selection Eight</option>
                            </select>
                            </span>
                        </p>
                        
                        <p>
                        	<label>Dual Select</label>
                            <span id="dualselect" class="dualselect">
                            	<select class="uniformselect" name="select3" multiple="multiple" size="10">
                                    <option value="">Selection One</option>
                                    <option value="">Selection Two</option>
                                    <option value="">Selection Three</option>
                                    <option value="">Selection Four</option>
                                    <option value="">Selection Five</option>
                                    <option value="">Selection Six</option>
                                    <option value="">Selection Seven</option>
                                    <option value="">Selection Eight</option>
                                </select>
                                <span class="ds_arrow">
                                	<button class="btn ds_prev"><i class="icon-chevron-left"></i></button><br />
                                    <button class="btn ds_next"><i class="icon-chevron-right"></i></button>
                                </span>
                                <select name="select4" multiple="multiple" size="10">
                                	<option value=""></option>
                                </select>
                            </span>
                        </p>
                        
                        <p>
                        	<label>Select with Search</label>
                            <span class="formwrapper">
                            	<select data-placeholder="Choose a Country..." style="width:350px" class="chzn-select" tabindex="2">
                                  <option value=""></option> 
                                  <option value="United States">United States</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="Afghanistan">Afghanistan</option> 
                                  <option value="Albania">Albania</option> 
                                  <option value="Algeria">Algeria</option> 
                                  <option value="American Samoa">American Samoa</option> 
                                  <option value="Andorra">Andorra</option> 
                                  <option value="Angola">Angola</option> 
                                  <option value="Anguilla">Anguilla</option> 
                                  <option value="Antarctica">Antarctica</option> 
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                  <option value="Argentina">Argentina</option> 
                                  <option value="Armenia">Armenia</option> 
                                  <option value="Aruba">Aruba</option> 
                                  <option value="Australia">Australia</option> 
                                  <option value="Austria">Austria</option> 
                                  <option value="Azerbaijan">Azerbaijan</option> 
                                  <option value="Bahamas">Bahamas</option> 
                                  <option value="Bahrain">Bahrain</option> 
                                  <option value="Bangladesh">Bangladesh</option> 
                                  <option value="Barbados">Barbados</option> 
                                  <option value="Belarus">Belarus</option> 
                                  <option value="Belgium">Belgium</option> 
                                  <option value="Belize">Belize</option> 
                                  <option value="Benin">Benin</option> 
                                  <option value="Bermuda">Bermuda</option> 
                                  <option value="Bhutan">Bhutan</option> 
                                  <option value="Bolivia">Bolivia</option> 
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                  <option value="Botswana">Botswana</option> 
                                  <option value="Bouvet Island">Bouvet Island</option> 
                                  <option value="Brazil">Brazil</option> 
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                  <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                  <option value="Bulgaria">Bulgaria</option> 
                                  <option value="Burkina Faso">Burkina Faso</option> 
                                  <option value="Burundi">Burundi</option> 
                                  <option value="Cambodia">Cambodia</option> 
                                  <option value="Cameroon">Cameroon</option> 
                                  <option value="Canada">Canada</option> 
                                  <option value="Cape Verde">Cape Verde</option> 
                                  <option value="Cayman Islands">Cayman Islands</option> 
                                  <option value="Central African Republic">Central African Republic</option> 
                                  <option value="Chad">Chad</option> 
                                  <option value="Chile">Chile</option> 
                                  <option value="China">China</option> 
                                  <option value="Christmas Island">Christmas Island</option> 
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                  <option value="Colombia">Colombia</option> 
                                  <option value="Comoros">Comoros</option> 
                                  <option value="Congo">Congo</option> 
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                  <option value="Cook Islands">Cook Islands</option> 
                                  <option value="Costa Rica">Costa Rica</option> 
                                  <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                  <option value="Croatia">Croatia</option> 
                                  <option value="Cuba">Cuba</option> 
                                  <option value="Cyprus">Cyprus</option> 
                                  <option value="Czech Republic">Czech Republic</option> 
                                  <option value="Denmark">Denmark</option> 
                                  <option value="Djibouti">Djibouti</option> 
                                  <option value="Dominica">Dominica</option> 
                                  <option value="Dominican Republic">Dominican Republic</option> 
                                  <option value="Ecuador">Ecuador</option> 
                                  <option value="Egypt">Egypt</option> 
                                  <option value="El Salvador">El Salvador</option> 
                                  <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                  <option value="Eritrea">Eritrea</option> 
                                  <option value="Estonia">Estonia</option> 
                                  <option value="Ethiopia">Ethiopia</option> 
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                  <option value="Faroe Islands">Faroe Islands</option> 
                                  <option value="Fiji">Fiji</option> 
                                  <option value="Finland">Finland</option> 
                                  <option value="France">France</option> 
                                  <option value="French Guiana">French Guiana</option> 
                                  <option value="French Polynesia">French Polynesia</option> 
                                  <option value="French Southern Territories">French Southern Territories</option> 
                                  <option value="Gabon">Gabon</option> 
                                  <option value="Gambia">Gambia</option> 
                                  <option value="Georgia">Georgia</option> 
                                  <option value="Germany">Germany</option> 
                                  <option value="Ghana">Ghana</option> 
                                  <option value="Gibraltar">Gibraltar</option> 
                                  <option value="Greece">Greece</option> 
                                  <option value="Greenland">Greenland</option> 
                                  <option value="Grenada">Grenada</option> 
                                  <option value="Guadeloupe">Guadeloupe</option> 
                                  <option value="Guam">Guam</option> 
                                  <option value="Guatemala">Guatemala</option> 
                                  <option value="Guinea">Guinea</option> 
                                  <option value="Guinea-bissau">Guinea-bissau</option> 
                                  <option value="Guyana">Guyana</option> 
                                  <option value="Haiti">Haiti</option> 
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                  <option value="Honduras">Honduras</option> 
                                  <option value="Hong Kong">Hong Kong</option> 
                                  <option value="Hungary">Hungary</option> 
                                  <option value="Iceland">Iceland</option> 
                                  <option value="India">India</option> 
                                  <option value="Indonesia">Indonesia</option> 
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                  <option value="Iraq">Iraq</option> 
                                  <option value="Ireland">Ireland</option> 
                                  <option value="Israel">Israel</option> 
                                  <option value="Italy">Italy</option> 
                                  <option value="Jamaica">Jamaica</option> 
                                  <option value="Japan">Japan</option> 
                                  <option value="Jordan">Jordan</option> 
                                  <option value="Kazakhstan">Kazakhstan</option> 
                                  <option value="Kenya">Kenya</option> 
                                  <option value="Kiribati">Kiribati</option> 
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                  <option value="Korea, Republic of">Korea, Republic of</option> 
                                  <option value="Kuwait">Kuwait</option> 
                                  <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                  <option value="Latvia">Latvia</option> 
                                  <option value="Lebanon">Lebanon</option> 
                                  <option value="Lesotho">Lesotho</option> 
                                  <option value="Liberia">Liberia</option> 
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                  <option value="Liechtenstein">Liechtenstein</option> 
                                  <option value="Lithuania">Lithuania</option> 
                                  <option value="Luxembourg">Luxembourg</option> 
                                  <option value="Macao">Macao</option> 
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                  <option value="Madagascar">Madagascar</option> 
                                  <option value="Malawi">Malawi</option> 
                                  <option value="Malaysia">Malaysia</option> 
                                  <option value="Maldives">Maldives</option> 
                                  <option value="Mali">Mali</option> 
                                  <option value="Malta">Malta</option> 
                                  <option value="Marshall Islands">Marshall Islands</option> 
                                  <option value="Martinique">Martinique</option> 
                                  <option value="Mauritania">Mauritania</option> 
                                  <option value="Mauritius">Mauritius</option> 
                                  <option value="Mayotte">Mayotte</option> 
                                  <option value="Mexico">Mexico</option> 
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                  <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                  <option value="Monaco">Monaco</option> 
                                  <option value="Mongolia">Mongolia</option> 
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option> 
                                  <option value="Morocco">Morocco</option> 
                                  <option value="Mozambique">Mozambique</option> 
                                  <option value="Myanmar">Myanmar</option> 
                                  <option value="Namibia">Namibia</option> 
                                  <option value="Nauru">Nauru</option> 
                                  <option value="Nepal">Nepal</option> 
                                  <option value="Netherlands">Netherlands</option> 
                                  <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                  <option value="New Caledonia">New Caledonia</option> 
                                  <option value="New Zealand">New Zealand</option> 
                                  <option value="Nicaragua">Nicaragua</option> 
                                  <option value="Niger">Niger</option> 
                                  <option value="Nigeria">Nigeria</option> 
                                  <option value="Niue">Niue</option> 
                                  <option value="Norfolk Island">Norfolk Island</option> 
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                  <option value="Norway">Norway</option> 
                                  <option value="Oman">Oman</option> 
                                  <option value="Pakistan">Pakistan</option> 
                                  <option value="Palau">Palau</option> 
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                  <option value="Panama">Panama</option> 
                                  <option value="Papua New Guinea">Papua New Guinea</option> 
                                  <option value="Paraguay">Paraguay</option> 
                                  <option value="Peru">Peru</option> 
                                  <option value="Philippines">Philippines</option> 
                                  <option value="Pitcairn">Pitcairn</option> 
                                  <option value="Poland">Poland</option> 
                                  <option value="Portugal">Portugal</option> 
                                  <option value="Puerto Rico">Puerto Rico</option> 
                                  <option value="Qatar">Qatar</option> 
                                  <option value="Reunion">Reunion</option> 
                                  <option value="Romania">Romania</option> 
                                  <option value="Russian Federation">Russian Federation</option> 
                                  <option value="Rwanda">Rwanda</option> 
                                  <option value="Saint Helena">Saint Helena</option> 
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                  <option value="Saint Lucia">Saint Lucia</option> 
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                  <option value="Samoa">Samoa</option> 
                                  <option value="San Marino">San Marino</option> 
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                  <option value="Saudi Arabia">Saudi Arabia</option> 
                                  <option value="Senegal">Senegal</option> 
                                  <option value="Serbia">Serbia</option> 
                                  <option value="Seychelles">Seychelles</option> 
                                  <option value="Sierra Leone">Sierra Leone</option> 
                                  <option value="Singapore">Singapore</option> 
                                  <option value="Slovakia">Slovakia</option> 
                                  <option value="Slovenia">Slovenia</option> 
                                  <option value="Solomon Islands">Solomon Islands</option> 
                                  <option value="Somalia">Somalia</option> 
                                  <option value="South Africa">South Africa</option> 
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                  <option value="South Sudan">South Sudan</option> 
                                  <option value="Spain">Spain</option> 
                                  <option value="Sri Lanka">Sri Lanka</option> 
                                  <option value="Sudan">Sudan</option> 
                                  <option value="Suriname">Suriname</option> 
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                  <option value="Swaziland">Swaziland</option> 
                                  <option value="Sweden">Sweden</option> 
                                  <option value="Switzerland">Switzerland</option> 
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
                                  <option value="Tajikistan">Tajikistan</option> 
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                  <option value="Thailand">Thailand</option> 
                                  <option value="Timor-leste">Timor-leste</option> 
                                  <option value="Togo">Togo</option> 
                                  <option value="Tokelau">Tokelau</option> 
                                  <option value="Tonga">Tonga</option> 
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                  <option value="Tunisia">Tunisia</option> 
                                  <option value="Turkey">Turkey</option> 
                                  <option value="Turkmenistan">Turkmenistan</option> 
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                  <option value="Tuvalu">Tuvalu</option> 
                                  <option value="Uganda">Uganda</option> 
                                  <option value="Ukraine">Ukraine</option> 
                                  <option value="United Arab Emirates">United Arab Emirates</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="United States">United States</option> 
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                  <option value="Uruguay">Uruguay</option> 
                                  <option value="Uzbekistan">Uzbekistan</option> 
                                  <option value="Vanuatu">Vanuatu</option> 
                                  <option value="Venezuela">Venezuela</option> 
                                  <option value="Viet Nam">Viet Nam</option> 
                                  <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                  <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                  <option value="Western Sahara">Western Sahara</option> 
                                  <option value="Yemen">Yemen</option> 
                                  <option value="Zambia">Zambia</option> 
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </span>
                        </p>
                        
                        <p>
                        	<label>Enhanced Multiple Select</label>
                            <span class="formwrapper">
                                <select data-placeholder="Choose a Country..." class="chzn-select" multiple="multiple" style="width:350px;" tabindex="4">
                                  <option value=""></option> 
                                  <option value="United States">United States</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="Afghanistan">Afghanistan</option> 
                                  <option value="Albania">Albania</option> 
                                  <option value="Algeria">Algeria</option> 
                                  <option value="American Samoa">American Samoa</option> 
                                  <option value="Andorra">Andorra</option> 
                                  <option value="Angola">Angola</option> 
                                  <option value="Anguilla">Anguilla</option> 
                                  <option value="Antarctica">Antarctica</option> 
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                  <option value="Argentina">Argentina</option> 
                                  <option value="Armenia">Armenia</option> 
                                  <option value="Aruba">Aruba</option> 
                                  <option value="Australia">Australia</option> 
                                  <option value="Austria">Austria</option> 
                                  <option value="Azerbaijan">Azerbaijan</option> 
                                  <option value="Bahamas">Bahamas</option> 
                                  <option value="Bahrain">Bahrain</option> 
                                  <option value="Bangladesh">Bangladesh</option> 
                                  <option value="Barbados">Barbados</option> 
                                  <option value="Belarus">Belarus</option> 
                                  <option value="Belgium">Belgium</option> 
                                  <option value="Belize">Belize</option> 
                                  <option value="Benin">Benin</option> 
                                  <option value="Bermuda">Bermuda</option> 
                                  <option value="Bhutan">Bhutan</option> 
                                  <option value="Bolivia">Bolivia</option> 
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                  <option value="Botswana">Botswana</option> 
                                  <option value="Bouvet Island">Bouvet Island</option> 
                                  <option value="Brazil">Brazil</option> 
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                  <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                  <option value="Bulgaria">Bulgaria</option> 
                                  <option value="Burkina Faso">Burkina Faso</option> 
                                  <option value="Burundi">Burundi</option> 
                                  <option value="Cambodia">Cambodia</option> 
                                  <option value="Cameroon">Cameroon</option> 
                                  <option value="Canada">Canada</option> 
                                  <option value="Cape Verde">Cape Verde</option> 
                                  <option value="Cayman Islands">Cayman Islands</option> 
                                  <option value="Central African Republic">Central African Republic</option> 
                                  <option value="Chad">Chad</option> 
                                  <option value="Chile">Chile</option> 
                                  <option value="China">China</option> 
                                  <option value="Christmas Island">Christmas Island</option> 
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                  <option value="Colombia">Colombia</option> 
                                  <option value="Comoros">Comoros</option> 
                                  <option value="Congo">Congo</option> 
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                  <option value="Cook Islands">Cook Islands</option> 
                                  <option value="Costa Rica">Costa Rica</option> 
                                  <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                  <option value="Croatia">Croatia</option> 
                                  <option value="Cuba">Cuba</option> 
                                  <option value="Cyprus">Cyprus</option> 
                                  <option value="Czech Republic">Czech Republic</option> 
                                  <option value="Denmark">Denmark</option> 
                                  <option value="Djibouti">Djibouti</option> 
                                  <option value="Dominica">Dominica</option> 
                                  <option value="Dominican Republic">Dominican Republic</option> 
                                  <option value="Ecuador">Ecuador</option> 
                                  <option value="Egypt">Egypt</option> 
                                  <option value="El Salvador">El Salvador</option> 
                                  <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                  <option value="Eritrea">Eritrea</option> 
                                  <option value="Estonia">Estonia</option> 
                                  <option value="Ethiopia">Ethiopia</option> 
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                  <option value="Faroe Islands">Faroe Islands</option> 
                                  <option value="Fiji">Fiji</option> 
                                  <option value="Finland">Finland</option> 
                                  <option value="France">France</option> 
                                  <option value="French Guiana">French Guiana</option> 
                                  <option value="French Polynesia">French Polynesia</option> 
                                  <option value="French Southern Territories">French Southern Territories</option> 
                                  <option value="Gabon">Gabon</option> 
                                  <option value="Gambia">Gambia</option> 
                                  <option value="Georgia">Georgia</option> 
                                  <option value="Germany">Germany</option> 
                                  <option value="Ghana">Ghana</option> 
                                  <option value="Gibraltar">Gibraltar</option> 
                                  <option value="Greece">Greece</option> 
                                  <option value="Greenland">Greenland</option> 
                                  <option value="Grenada">Grenada</option> 
                                  <option value="Guadeloupe">Guadeloupe</option> 
                                  <option value="Guam">Guam</option> 
                                  <option value="Guatemala">Guatemala</option> 
                                  <option value="Guinea">Guinea</option> 
                                  <option value="Guinea-bissau">Guinea-bissau</option> 
                                  <option value="Guyana">Guyana</option> 
                                  <option value="Haiti">Haiti</option> 
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                  <option value="Honduras">Honduras</option> 
                                  <option value="Hong Kong">Hong Kong</option> 
                                  <option value="Hungary">Hungary</option> 
                                  <option value="Iceland">Iceland</option> 
                                  <option value="India">India</option> 
                                  <option value="Indonesia">Indonesia</option> 
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                  <option value="Iraq">Iraq</option> 
                                  <option value="Ireland">Ireland</option> 
                                  <option value="Israel">Israel</option> 
                                  <option value="Italy">Italy</option> 
                                  <option value="Jamaica">Jamaica</option> 
                                  <option value="Japan">Japan</option> 
                                  <option value="Jordan">Jordan</option> 
                                  <option value="Kazakhstan">Kazakhstan</option> 
                                  <option value="Kenya">Kenya</option> 
                                  <option value="Kiribati">Kiribati</option> 
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                  <option value="Korea, Republic of">Korea, Republic of</option> 
                                  <option value="Kuwait">Kuwait</option> 
                                  <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                  <option value="Latvia">Latvia</option> 
                                  <option value="Lebanon">Lebanon</option> 
                                  <option value="Lesotho">Lesotho</option> 
                                  <option value="Liberia">Liberia</option> 
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                  <option value="Liechtenstein">Liechtenstein</option> 
                                  <option value="Lithuania">Lithuania</option> 
                                  <option value="Luxembourg">Luxembourg</option> 
                                  <option value="Macao">Macao</option> 
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                  <option value="Madagascar">Madagascar</option> 
                                  <option value="Malawi">Malawi</option> 
                                  <option value="Malaysia">Malaysia</option> 
                                  <option value="Maldives">Maldives</option> 
                                  <option value="Mali">Mali</option> 
                                  <option value="Malta">Malta</option> 
                                  <option value="Marshall Islands">Marshall Islands</option> 
                                  <option value="Martinique">Martinique</option> 
                                  <option value="Mauritania">Mauritania</option> 
                                  <option value="Mauritius">Mauritius</option> 
                                  <option value="Mayotte">Mayotte</option> 
                                  <option value="Mexico">Mexico</option> 
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                  <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                  <option value="Monaco">Monaco</option> 
                                  <option value="Mongolia">Mongolia</option> 
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option> 
                                  <option value="Morocco">Morocco</option> 
                                  <option value="Mozambique">Mozambique</option> 
                                  <option value="Myanmar">Myanmar</option> 
                                  <option value="Namibia">Namibia</option> 
                                  <option value="Nauru">Nauru</option> 
                                  <option value="Nepal">Nepal</option> 
                                  <option value="Netherlands">Netherlands</option> 
                                  <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                  <option value="New Caledonia">New Caledonia</option> 
                                  <option value="New Zealand">New Zealand</option> 
                                  <option value="Nicaragua">Nicaragua</option> 
                                  <option value="Niger">Niger</option> 
                                  <option value="Nigeria">Nigeria</option> 
                                  <option value="Niue">Niue</option> 
                                  <option value="Norfolk Island">Norfolk Island</option> 
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                  <option value="Norway">Norway</option> 
                                  <option value="Oman">Oman</option> 
                                  <option value="Pakistan">Pakistan</option> 
                                  <option value="Palau">Palau</option> 
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                  <option value="Panama">Panama</option> 
                                  <option value="Papua New Guinea">Papua New Guinea</option> 
                                  <option value="Paraguay">Paraguay</option> 
                                  <option value="Peru">Peru</option> 
                                  <option value="Philippines">Philippines</option> 
                                  <option value="Pitcairn">Pitcairn</option> 
                                  <option value="Poland">Poland</option> 
                                  <option value="Portugal">Portugal</option> 
                                  <option value="Puerto Rico">Puerto Rico</option> 
                                  <option value="Qatar">Qatar</option> 
                                  <option value="Reunion">Reunion</option> 
                                  <option value="Romania">Romania</option> 
                                  <option value="Russian Federation">Russian Federation</option> 
                                  <option value="Rwanda">Rwanda</option> 
                                  <option value="Saint Helena">Saint Helena</option> 
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                  <option value="Saint Lucia">Saint Lucia</option> 
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                  <option value="Samoa">Samoa</option> 
                                  <option value="San Marino">San Marino</option> 
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                  <option value="Saudi Arabia">Saudi Arabia</option> 
                                  <option value="Senegal">Senegal</option> 
                                  <option value="Serbia">Serbia</option> 
                                  <option value="Seychelles">Seychelles</option> 
                                  <option value="Sierra Leone">Sierra Leone</option> 
                                  <option value="Singapore">Singapore</option> 
                                  <option value="Slovakia">Slovakia</option> 
                                  <option value="Slovenia">Slovenia</option> 
                                  <option value="Solomon Islands">Solomon Islands</option> 
                                  <option value="Somalia">Somalia</option> 
                                  <option value="South Africa">South Africa</option> 
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                  <option value="South Sudan">South Sudan</option> 
                                  <option value="Spain">Spain</option> 
                                  <option value="Sri Lanka">Sri Lanka</option> 
                                  <option value="Sudan">Sudan</option> 
                                  <option value="Suriname">Suriname</option> 
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                  <option value="Swaziland">Swaziland</option> 
                                  <option value="Sweden">Sweden</option> 
                                  <option value="Switzerland">Switzerland</option> 
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
                                  <option value="Tajikistan">Tajikistan</option> 
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                  <option value="Thailand">Thailand</option> 
                                  <option value="Timor-leste">Timor-leste</option> 
                                  <option value="Togo">Togo</option> 
                                  <option value="Tokelau">Tokelau</option> 
                                  <option value="Tonga">Tonga</option> 
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                  <option value="Tunisia">Tunisia</option> 
                                  <option value="Turkey">Turkey</option> 
                                  <option value="Turkmenistan">Turkmenistan</option> 
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                  <option value="Tuvalu">Tuvalu</option> 
                                  <option value="Uganda">Uganda</option> 
                                  <option value="Ukraine">Ukraine</option> 
                                  <option value="United Arab Emirates">United Arab Emirates</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="United States">United States</option> 
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                  <option value="Uruguay">Uruguay</option> 
                                  <option value="Uzbekistan">Uzbekistan</option> 
                                  <option value="Vanuatu">Vanuatu</option> 
                                  <option value="Venezuela">Venezuela</option> 
                                  <option value="Viet Nam">Viet Nam</option> 
                                  <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                  <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                  <option value="Western Sahara">Western Sahara</option> 
                                  <option value="Yemen">Yemen</option> 
                                  <option value="Zambia">Zambia</option> 
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </span>
                        </p>
                        
                        <p>
                        	<label>Radio Buttons</label>
                            <span class="formwrapper">
                            	<input type="radio" name="radiofield" /> Unchecked Radio &nbsp; &nbsp;
                            	<input type="radio" name="radiofield" checked="checked" /> Checked Radio &nbsp; &nbsp;
                                <input type="radio" name="radiofield" disabled="disabled" /> Disabled Radio  &nbsp; &nbsp;
                                <input type="radio" name="radiofield" checked="checked" disabled="disabled" /> Disabled Radio 
                            </span>
                        </p>
                                                                        
                        <p>
                        	<label>Checkboxes</label>
                            <span class="formwrapper">
                            	<input type="checkbox" name="check2" /> Unchecked Checkbox<br />
                            	<input type="checkbox" name="check2" checked="checked" /> Checked Checkbox <br />
                                <input type="checkbox" name="check2" disabled="disabled" /> Disabled Checkbox <br /> 
                                <input type="checkbox" name="check2" disabled="disabled" checked="checked" /> Disabled Checked Checkbox
                            </span>
                        </p>
                        
                        <p>
                        	<label>File Upload</label>
                            <span class="field">
                            	<input type="file" name="filename" />
                            </span>
                        </p>
                        
                        <p>
                        	<label>Input Tags</label>
                            <span class="field">
                            	<input name="tags" id="tags" class="input-large" value="foo,bar,baz" />
                            </span>
                        </p>
                        
                         <p>
                        	<label>Spinner</label>
                            <span class="field"><input type="text" id="spinner" name="" class="input-small input-spinner" /></span>
                            <small class="desc">Try to use mouse wheel.</small>
                        </p>
                        
                        <div class="par">
                        	<label>Prepended Inputs</label>
                            <div class="input-prepend">
                              <span class="add-on">@</span>
                              <input type="text" placeholder="Username" id="prependedInput" class="span2">
                            </div>
                        </div>
                        
                        <div class="par">
                        	<label>Appended Inputs</label>
                            <div class="input-append">
                              <input type="text" id="appendedInput" class="span2">
                              <span class="add-on">.00</span>
                            </div>
                        </div>
                        
                        <div class="par">
                        	<label>Combined Prepend &amp; Append</label>
                            <div class="input-prepend input-append">
                              <span class="add-on">$</span>
                              <input type="text" id="appendedPrependedInput" class="span2">
                              <span class="add-on">.00</span>
                            </div>
                        </div>
                        
                        <div class="par">
                        	<label>Buttons instead of text</label>
                            <div class="input-append">
                              <input type="text" id="appendedInputButton" class="span2">
                              <button type="button" class="btn">Go!</button>
                            </div>
                        </div>
                        
                        <div class="par">
                        	<label>Another example</label>
                            <div class="input-append">
                              <input type="text" id="appendedInputButtons" class="span2">
                              <button type="button" class="btn">Search</button>
                              <button type="button" class="btn">Options</button>
                            </div>
                        </div>
                        
                        <div class="par">
                        	<label>Button dropdown</label>
                            <div class="input-append">
                              <input type="text" id="appendedDropdownButton" class="span2">
                              <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                            </div>
                        </div>
                        
                        <div class="par">
                        	<label>Dropdown In Left</label>
                            <div class="input-prepend">
                              <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                              <input type="text" id="prependedDropdownButton" class="span2">
                            </div>
                        </div>
                        
                        <div class="par">
                        	<label>or can be both</label>
                            <div class="input-prepend input-append">
                              <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                              <input type="text" id="appendedPrependedDropdownButton" class="span2">
                              <div class="btn-group">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div><!-- /btn-group -->
                            </div>
                        </div><!--par-->
                        
                        <div class="par">
                        	<label>Segmented Dropdown Group</label>
                            <div class="input-append">
                              <input type="text">
                              <div class="btn-group">
                                <button tabindex="-1" class="btn">Action</button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn dropdown-toggle">
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            </div>
                        </div><!--par-->
                        
                        <div class="par">
                        	<label>&nbsp;</label>
                            <div class="input-prepend">
                              <div class="btn-group">
                                <button tabindex="-1" class="btn">Action</button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn dropdown-toggle">
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                              <input type="text">
                            </div>
                        </div><!--par-->
                        
                                                
                        <p class="stdformbutton">
                        	<button class="btn btn-primary">Submit Button</button>
                            <button type="reset" class="btn">Reset Form</button>
                        </p>
                        
                        
                    </form>  
                </div><!--widgetcontent-->
                
                <h4 class="widgettitle">With Form Validation</h4>
                <div class="widgetcontent">
                	<form id="form1" class="stdform" method="post" action="http://themepixels.com/main/themes/demo/webpage/katniss/forms.html">
                    	<div class="par control-group">
                        	<label class="control-label" for="firstname">First Name</label>
                            <div class="controls"><input type="text" name="firstname" id="firstname" class="input-large" /></div>
                        </div>
                        
                        <div class="control-group">
                        	<label class="control-label" for="lastname">Last Name</label>
                            <div class="controls"><input type="text" name="lastname" id="lastname" class="input-large" /></div>
                        </div>
                        
                        <div class="par control-group">
                        	<label class="control-label" for="email">Email</label>
                            <div class="controls"><input type="text" name="email" id="email" class="input-xlarge" /></div>
                        </div>
                        
                        <div class="par control-group">
                        	<label class="control-label" for="location">Location</label>
                            <div class="controls"><textarea cols="80" rows="5" name="location" class="input-xxlarge" id="location"></textarea></div> 
                        </div>
                                                
                        <p class="stdformbutton">
                        	<button class="btn btn-primary">Submit Button</button>
                        </p>
                    </form>
                </div><!--widgetcontent-->
                
                <h4 class="widgettitle nomargin shadowed">Form Bordered</h4>
                <div class="widgetcontent bordered shadowed nopadding">
                    <form class="stdform stdform2" method="post" action="http://themepixels.com/main/themes/demo/webpage/katniss/forms.html">
                            <p>
                                <label>First Name</label>
                                <span class="field"><input type="text" name="firstname" id="firstname2" class="input-xxlarge" /></span>
                            </p>
                            
                            <p>
                                <label>Last Name</label>
                                <span class="field"><input type="text" name="lastname" id="lastname2" class="input-xxlarge" /></span>
                            </p>
                            
                            <p>
                                <label>Email</label>
                                <span class="field"><input type="text" name="email" id="email2" class="input-xxlarge" /></span>
                            </p>
                            
                            <p>
                                <label>Location <small>You can put your own description for this field here.</small></label>
                                <span class="field"><textarea cols="80" rows="5" name="location" id="location2" class="span5"></textarea></span>
                            </p>
                            
                            <p>
                                <label>Select</label>
                                <span class="field"><select name="selection" id="selection2" class="uniformselect">
                                    <option value="">Choose One</option>
                                    <option value="1">Selection One</option>
                                    <option value="2">Selection Two</option>
                                    <option value="3">Selection Three</option>
                                    <option value="4">Selection Four</option>
                                </select></span>
                            </p>
                                                    
                            <p class="stdformbutton">
                                <button class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn">Reset Button</button>
                            </p>
                        </form>
                    </div><!--widgetcontent-->
            </div><!--contentinner-->
        </div>