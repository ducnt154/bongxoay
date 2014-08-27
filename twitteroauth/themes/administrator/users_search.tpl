 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Users &rsaquo; All Users</div> 
        </div>

		{if $message ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span>{$message}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}
		{if $error ne ""}
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert red hideit"><p><span class="red-icon"></span>{$error}</p></div>
           </div> 
		<!--Alerts end-->
		{/if}
		
		
		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">Search User</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/users_search.php">
                 <div class="elem">
                        <label>Start ID:</label>
                        <div class="indent">
                            <input type="text" id="startid" name="startid" value="{$startid}" class="medium tip-right" title="User ID"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>End ID:</label>
                        <div class="indent">
                            <input type="text" id="endid" name="endid" value="{$endid}" class="medium tip-right" title="User ID"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                            <input type="text" id="username" name="username" value="{$username}" class="medium tip-right" title="Username that appears all over ths site."> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>email:</label>
                        <div class="indent">
                            <input type="text" id="email" name="email" value="{$email}" class="medium tip-right" title="User email address"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Status:</label>
                        <div class="indent">
                         <select id="status" name="status" class="chzn-select medium-select select" > 
                            <option value="2" {if $status eq "2"}selected{/if}>Any</option>
                            <option value="1" {if $status eq "1"}selected{/if}>Active</option>
                            <option value="0" {if $status eq "0"}selected{/if}>Banned</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Verified:</label>
                        <div class="indent">
                         <select id="verified" name="verified" class="chzn-select medium-select select" > 
                            <option value="2" {if $verified eq "2"}selected{/if}>Any</option>
                            <option value="1" {if $verified eq "1"}selected{/if}>Verified</option>
                            <option value="0" {if $verified eq "0"}selected{/if}>Not Verified</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Full Name:</label>
                        <div class="indent">
                            <input type="text" id="fullname" name="fullname" value="{$fullname}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Website:</label>
                        <div class="indent">
                            <input type="text" id="website" name="website" value="{$website}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Country:</label>
                        <div class="indent">
                        <select name="country" id="country_selector" class="chzn-select medium-select select">
                            <option value="">Any</option>
                            <option  {if $country eq "AF"}selected{/if} value="AF">Afghanistan</option>
                            <option  {if $country eq "AX"}selected{/if} value="AX">?land Islands</option>
                            <option  {if $country eq "AL"}selected{/if} value="AL">Albania</option>
                            <option  {if $country eq "DZ"}selected{/if} value="DZ">Algeria</option>
                            <option  {if $country eq "AS"}selected{/if} value="AS">American Samoa</option>
                            <option  {if $country eq "AD"}selected{/if} value="AD">Andorra</option>
                            <option  {if $country eq "AO"}selected{/if} value="AO">Angola</option>
                            <option  {if $country eq "AI"}selected{/if} value="AI">Anguilla</option>
                            <option  {if $country eq "AQ"}selected{/if} value="AQ">Antarctica</option>
                            <option  {if $country eq "AG"}selected{/if} value="AG">Antigua and Barbuda</option>
                            <option  {if $country eq "AR"}selected{/if} value="AR">Argentina</option>
                            <option  {if $country eq "AM"}selected{/if} value="AM">Armenia</option>
                            <option  {if $country eq "AW"}selected{/if} value="AW">Aruba</option>
                            <option  {if $country eq "AU"}selected{/if} value="AU">Australia</option>
                            <option  {if $country eq "AT"}selected{/if} value="AT">Austria</option>
                            <option  {if $country eq "AZ"}selected{/if} value="AZ">Azerbaijan</option>
                            <option  {if $country eq "BS"}selected{/if} value="BS">Bahamas</option>
                            <option  {if $country eq "BH"}selected{/if} value="BH">Bahrain</option>
                            <option  {if $country eq "BD"}selected{/if} value="BD">Bangladesh</option>
                            <option  {if $country eq "BB"}selected{/if} value="BB">Barbados</option>
                            <option  {if $country eq "BY"}selected{/if} value="BY">Belarus</option>
                            <option  {if $country eq "BE"}selected{/if} value="BE">Belgium</option>
                            <option  {if $country eq "BZ"}selected{/if} value="BZ">Belize</option>
                            <option  {if $country eq "BJ"}selected{/if} value="BJ">Benin</option>
                            <option  {if $country eq "BM"}selected{/if} value="BM">Bermuda</option>
                            <option  {if $country eq "BT"}selected{/if} value="BT">Bhutan</option>
                            <option  {if $country eq "BO"}selected{/if} value="BO">Bolivia</option>
                            <option  {if $country eq "BA"}selected{/if} value="BA">Bosnia and Herzegovina</option>
                            <option  {if $country eq "BW"}selected{/if} value="BW">Botswana</option>
                            <option  {if $country eq "BV"}selected{/if} value="BV">Bouvet Island</option>
                            <option  {if $country eq "BR"}selected{/if} value="BR">Brazil</option>
                            <option  {if $country eq "IO"}selected{/if} value="IO">British Indian Ocean Territory</option>
                            <option  {if $country eq "BN"}selected{/if} value="BN">Brunei Darussalam</option>
                            <option  {if $country eq "BG"}selected{/if} value="BG">Bulgaria</option>
                            <option  {if $country eq "BF"}selected{/if} value="BF">Burkina Faso</option>
                            <option  {if $country eq "BI"}selected{/if} value="BI">Burundi</option>
                            <option  {if $country eq "KH"}selected{/if} value="KH">Cambodia</option>
                            <option  {if $country eq "CM"}selected{/if} value="CM">Cameroon</option>
                            <option  {if $country eq "CA"}selected{/if} value="CA">Canada</option>
                            <option  {if $country eq "CV"}selected{/if} value="CV">Cape Verde</option>
                            <option  {if $country eq "KY"}selected{/if} value="KY">Cayman Islands</option>
                            <option  {if $country eq "CF"}selected{/if} value="CF">Central African Republic</option>
                            <option  {if $country eq "TD"}selected{/if} value="TD">Chad</option>
                            <option  {if $country eq "CL"}selected{/if} value="CL">Chile</option>
                            <option  {if $country eq "CN"}selected{/if} value="CN">China</option>
                            <option  {if $country eq "CX"}selected{/if} value="CX">Christmas Island</option>
                            <option  {if $country eq "CC"}selected{/if} value="CC">Cocos (Keeling) Islands</option>
                            <option  {if $country eq "CO"}selected{/if} value="CO">Colombia</option>
                            <option  {if $country eq "KM"}selected{/if} value="KM">Comoros</option>
                            <option  {if $country eq "CG"}selected{/if} value="CG">Congo</option>
                            <option  {if $country eq "CD"}selected{/if} value="CD">Congo, The Democratic Republic of The</option>
                            <option  {if $country eq "CK"}selected{/if} value="CK">Cook Islands</option>
                            <option  {if $country eq "CR"}selected{/if} value="CR">Costa Rica</option>
                            <option  {if $country eq "CI"}selected{/if} value="CI">Cote D'ivoire</option>
                            <option  {if $country eq "HR"}selected{/if} value="HR">Croatia</option>
                            <option  {if $country eq "CU"}selected{/if} value="CU">Cuba</option>
                            <option  {if $country eq "CY"}selected{/if} value="CY">Cyprus</option>
                            <option  {if $country eq "CZ"}selected{/if} value="CZ">Czech Republic</option>
                            <option  {if $country eq "DK"}selected{/if} value="DK">Denmark</option>
                            <option  {if $country eq "DJ"}selected{/if} value="DJ">Djibouti</option>
                            <option  {if $country eq "DM"}selected{/if} value="DM">Dominica</option>
                            <option  {if $country eq "DO"}selected{/if} value="DO">Dominican Republic</option>
                            <option  {if $country eq "EC"}selected{/if} value="EC">Ecuador</option>
                            <option  {if $country eq "EG"}selected{/if} value="EG">Egypt</option>
                            <option  {if $country eq "SV"}selected{/if} value="SV">El Salvador</option>
                            <option  {if $country eq "GQ"}selected{/if} value="GQ">Equatorial Guinea</option>
                            <option  {if $country eq "ER"}selected{/if} value="ER">Eritrea</option>
                            <option  {if $country eq "EE"}selected{/if} value="EE">Estonia</option>
                            <option  {if $country eq "ET"}selected{/if} value="ET">Ethiopia</option>
                            <option  {if $country eq "FK"}selected{/if} value="FK">Falkland Islands (Malvinas)</option>
                            <option  {if $country eq "FO"}selected{/if} value="FO">Faroe Islands</option>
                            <option  {if $country eq "FJ"}selected{/if} value="FJ">Fiji</option>
                            <option  {if $country eq "FI"}selected{/if} value="FI">Finland</option>
                            <option  {if $country eq "FR"}selected{/if} value="FR">France</option>
                            <option  {if $country eq "GR"}selected{/if} value="GF">French Guiana</option>
                            <option  {if $country eq "PF"}selected{/if} value="PF">French Polynesia</option>
                            <option  {if $country eq "TF"}selected{/if} value="TF">French Southern Territories</option>
                            <option  {if $country eq "GA"}selected{/if} value="GA">Gabon</option>
                            <option  {if $country eq "GM"}selected{/if} value="GM">Gambia</option>
                            <option  {if $country eq "GE"}selected{/if} value="GE">Georgia</option>
                            <option  {if $country eq "DE"}selected{/if} value="DE">Germany</option>
                            <option  {if $country eq "GH"}selected{/if} value="GH">Ghana</option>
                            <option  {if $country eq "GI"}selected{/if} value="GI">Gibraltar</option>
                            <option  {if $country eq "GR"}selected{/if} value="GR">Greece</option>
                            <option  {if $country eq "GL"}selected{/if} value="GL">Greenland</option>
                            <option  {if $country eq "GD"}selected{/if} value="GD">Grenada</option>
                            <option  {if $country eq "GP"}selected{/if} value="GP">Guadeloupe</option>
                            <option  {if $country eq "GU"}selected{/if} value="GU">Guam</option>
                            <option  {if $country eq "GT"}selected{/if} value="GT">Guatemala</option>
                            <option  {if $country eq "GG"}selected{/if} value="GG">Guernsey</option>
                            <option  {if $country eq "GN"}selected{/if} value="GN">Guinea</option>
                            <option  {if $country eq "GW"}selected{/if} value="GW">Guinea-bissau</option>
                            <option  {if $country eq "GY"}selected{/if} value="GY">Guyana</option>
                            <option  {if $country eq "HT"}selected{/if} value="HT">Haiti</option>
                            <option  {if $country eq "HM"}selected{/if} value="HM">Heard Island and Mcdonald Islands</option>
                            <option  {if $country eq "VA"}selected{/if} value="VA">Holy See (Vatican City State)</option>
                            <option  {if $country eq "HN"}selected{/if} value="HN">Honduras</option>
                            <option  {if $country eq "HK"}selected{/if} value="HK">Hong Kong</option>
                            <option  {if $country eq "HU"}selected{/if} value="HU">Hungary</option>
                            <option  {if $country eq "IS"}selected{/if} value="IS">Iceland</option>
                            <option  {if $country eq "IN"}selected{/if} value="IN">India</option>
                            <option  {if $country eq "ID"}selected{/if} value="ID">Indonesia</option>
                            <option  {if $country eq "IR"}selected{/if} value="IR">Iran, Islamic Republic of</option>
                            <option  {if $country eq "IQ"}selected{/if} value="IQ">Iraq</option>
                            <option  {if $country eq "IE"}selected{/if} value="IE">Ireland</option>
                            <option  {if $country eq "IM"}selected{/if} value="IM">Isle of Man</option>
                            <option  {if $country eq "IL"}selected{/if} value="IL">Israel</option>
                            <option  {if $country eq "IT"}selected{/if} value="IT">Italy</option>
                            <option  {if $country eq "JM"}selected{/if} value="JM">Jamaica</option>
                            <option  {if $country eq "JP"}selected{/if} value="JP">Japan</option>
                            <option  {if $country eq "JE"}selected{/if} value="JE">Jersey</option>
                            <option  {if $country eq "JO"}selected{/if} value="JO">Jordan</option>
                            <option  {if $country eq "KZ"}selected{/if} value="KZ">Kazakhstan</option>
                            <option  {if $country eq "KE"}selected{/if} value="KE">Kenya</option>
                            <option  {if $country eq "KI"}selected{/if} value="KI">Kiribati</option>
                            <option  {if $country eq "KP"}selected{/if} value="KP">Korea, Democratic People's Republic of</option>
                            <option  {if $country eq "KR"}selected{/if} value="KR">Korea, Republic of</option>
                            <option  {if $country eq "KW"}selected{/if} value="KW">Kuwait</option>
                            <option  {if $country eq "KG"}selected{/if} value="KG">Kyrgyzstan</option>
                            <option  {if $country eq "LA"}selected{/if} value="LA">Lao People's Democratic Republic</option>
                            <option  {if $country eq "LV"}selected{/if} value="LV">Latvia</option>
                            <option  {if $country eq "LB"}selected{/if} value="LB">Lebanon</option>
                            <option  {if $country eq "LS"}selected{/if} value="LS">Lesotho</option>
                            <option  {if $country eq "LR"}selected{/if} value="LR">Liberia</option>
                            <option  {if $country eq "LY"}selected{/if} value="LY">Libyan Arab Jamahiriya</option>
                            <option  {if $country eq "LI"}selected{/if} value="LI">Liechtenstein</option>
                            <option  {if $country eq "LT"}selected{/if} value="LT">Lithuania</option>
                            <option  {if $country eq "LU"}selected{/if} value="LU">Luxembourg</option>
                            <option  {if $country eq "MO"}selected{/if} value="MO">Macao</option>
                            <option  {if $country eq "MK"}selected{/if} value="MK">Macedonia, The Former Yugoslav Republic of</option>
                            <option  {if $country eq "MG"}selected{/if} value="MG">Madagascar</option>
                            <option  {if $country eq "MW"}selected{/if} value="MW">Malawi</option>
                            <option  {if $country eq "MY"}selected{/if} value="MY">Malaysia</option>
                            <option  {if $country eq "MV"}selected{/if} value="MV">Maldives</option>
                            <option  {if $country eq "ML"}selected{/if} value="ML">Mali</option>
                            <option  {if $country eq "MT"}selected{/if} value="MT">Malta</option>
                            <option  {if $country eq "MH"}selected{/if} value="MH">Marshall Islands</option>
                            <option  {if $country eq "MQ"}selected{/if} value="MQ">Martinique</option>
                            <option  {if $country eq "MR"}selected{/if} value="MR">Mauritania</option>
                            <option  {if $country eq "MU"}selected{/if} value="MU">Mauritius</option>
                            <option  {if $country eq "YT"}selected{/if} value="YT">Mayotte</option>
                            <option  {if $country eq "MX"}selected{/if} value="MX">Mexico</option>
                            <option  {if $country eq "FM"}selected{/if} value="FM">Micronesia, Federated States of</option>
                            <option  {if $country eq "MD"}selected{/if} value="MD">Moldova, Republic of</option>
                            <option  {if $country eq "MC"}selected{/if} value="MC">Monaco</option>
                            <option  {if $country eq "MN"}selected{/if} value="MN">Mongolia</option>
                            <option  {if $country eq "ME"}selected{/if} value="ME">Montenegro</option>
                            <option  {if $country eq "MS"}selected{/if} value="MS">Montserrat</option>
                            <option  {if $country eq "MA"}selected{/if} value="MA">Morocco</option>
                            <option  {if $country eq "MZ"}selected{/if} value="MZ">Mozambique</option>
                            <option  {if $country eq "MM"}selected{/if} value="MM">Myanmar</option>
                            <option  {if $country eq "NA"}selected{/if} value="NA">Namibia</option>
                            <option  {if $country eq "NR"}selected{/if} value="NR">Nauru</option>
                            <option  {if $country eq "NP"}selected{/if} value="NP">Nepal</option>
                            <option  {if $country eq "NL"}selected{/if} value="NL">Netherlands</option>
                            <option  {if $country eq "AN"}selected{/if} value="AN">Netherlands Antilles</option>
                            <option  {if $country eq "NC"}selected{/if} value="NC">New Caledonia</option>
                            <option  {if $country eq "NZ"}selected{/if} value="NZ">New Zealand</option>
                            <option  {if $country eq "NI"}selected{/if} value="NI">Nicaragua</option>
                            <option  {if $country eq "NE"}selected{/if} value="NE">Niger</option>
                            <option  {if $country eq "NG"}selected{/if} value="NG">Nigeria</option>
                            <option  {if $country eq "NU"}selected{/if} value="NU">Niue</option>
                            <option  {if $country eq "NF"}selected{/if} value="NF">Norfolk Island</option>
                            <option  {if $country eq "MP"}selected{/if} value="MP">Northern Mariana Islands</option>
                            <option  {if $country eq "NO"}selected{/if} value="NO">Norway</option>
                            <option  {if $country eq "OM"}selected{/if} value="OM">Oman</option>
                            <option  {if $country eq "PK"}selected{/if} value="PK">Pakistan</option>
                            <option  {if $country eq "PW"}selected{/if} value="PW">Palau</option>
                            <option  {if $country eq "PS"}selected{/if} value="PS">Palestinian Territory, Occupied</option>
                            <option  {if $country eq "PA"}selected{/if} value="PA">Panama</option>
                            <option  {if $country eq "PG"}selected{/if} value="PG">Papua New Guinea</option>
                            <option  {if $country eq "PY"}selected{/if} value="PY">Paraguay</option>
                            <option  {if $country eq "PE"}selected{/if} value="PE">Peru</option>
                            <option  {if $country eq "PH"}selected{/if} value="PH">Philippines</option>
                            <option  {if $country eq "PN"}selected{/if} value="PN">Pitcairn</option>
                            <option  {if $country eq "PL"}selected{/if} value="PL">Poland</option>
                            <option  {if $country eq "PT"}selected{/if} value="PT">Portugal</option>
                            <option  {if $country eq "PR"}selected{/if} value="PR">Puerto Rico</option>
                            <option  {if $country eq "QA"}selected{/if} value="QA">Qatar</option>
                            <option  {if $country eq "RE"}selected{/if} value="RE">Reunion</option>
                            <option  {if $country eq "RO"}selected{/if} value="RO">Romania</option>
                            <option  {if $country eq "RU"}selected{/if} value="RU">Russian Federation</option>
                            <option  {if $country eq "RW"}selected{/if} value="RW">Rwanda</option>
                            <option  {if $country eq "SH"}selected{/if} value="SH">Saint Helena</option>
                            <option  {if $country eq "KN"}selected{/if} value="KN">Saint Kitts and Nevis</option>
                            <option  {if $country eq "LC"}selected{/if} value="LC">Saint Lucia</option>
                            <option  {if $country eq "PM"}selected{/if} value="PM">Saint Pierre and Miquelon</option>
                            <option  {if $country eq "VC"}selected{/if} value="VC">Saint Vincent and The Grenadines</option>
                            <option  {if $country eq "WS"}selected{/if} value="WS">Samoa</option>
                            <option  {if $country eq "SM"}selected{/if} value="SM">San Marino</option>
                            <option  {if $country eq "ST"}selected{/if} value="ST">Sao Tome and Principe</option>
                            <option  {if $country eq "SA"}selected{/if} value="SA">Saudi Arabia</option>
                            <option  {if $country eq "SN"}selected{/if} value="SN">Senegal</option>
                            <option  {if $country eq "RS"}selected{/if} value="RS">Serbia</option>
                            <option  {if $country eq "SC"}selected{/if} value="SC">Seychelles</option>
                            <option  {if $country eq "SL"}selected{/if} value="SL">Sierra Leone</option>
                            <option  {if $country eq "SG"}selected{/if} value="SG">Singapore</option>
                            <option  {if $country eq "SK"}selected{/if} value="SK">Slovakia</option>
                            <option  {if $country eq "SI"}selected{/if} value="SI">Slikenia</option>
                            <option  {if $country eq "SB"}selected{/if} value="SB">Solomon Islands</option>
                            <option  {if $country eq "SO"}selected{/if} value="SO">Somalia</option>
                            <option  {if $country eq "ZA"}selected{/if} value="ZA">South Africa</option>
                            <option  {if $country eq "GS"}selected{/if} value="GS">South Georgia and The South Sandwich Islands</option>
                            <option  {if $country eq "ES"}selected{/if} value="ES">Spain</option>
                            <option  {if $country eq "LK"}selected{/if} value="LK">Sri Lanka</option>
                            <option  {if $country eq "SD"}selected{/if} value="SD">Sudan</option>
                            <option  {if $country eq "SR"}selected{/if} value="SR">Suriname</option>
                            <option  {if $country eq "SJ"}selected{/if} value="SJ">Svalbard and Jan Mayen</option>
                            <option  {if $country eq "SZ"}selected{/if} value="SZ">Swaziland</option>
                            <option  {if $country eq "SE"}selected{/if} value="SE">Sweden</option>
                            <option  {if $country eq "CH"}selected{/if} value="CH">Switzerland</option>
                            <option  {if $country eq "SY"}selected{/if} value="SY">Syrian Arab Republic</option>
                            <option  {if $country eq "TW"}selected{/if} value="TW">Taiwan, Province of China</option>
                            <option  {if $country eq "TJ"}selected{/if} value="TJ">Tajikistan</option>
                            <option  {if $country eq "TZ"}selected{/if} value="TZ">Tanzania, United Republic of</option>
                            <option  {if $country eq "TH"}selected{/if} value="TH">Thailand</option>
                            <option  {if $country eq "TL"}selected{/if} value="TL">Timor-leste</option>
                            <option  {if $country eq "TG"}selected{/if} value="TG">Togo</option>
                            <option  {if $country eq "TK"}selected{/if} value="TK">Tokelau</option>
                            <option  {if $country eq "TO"}selected{/if} value="TO">Tonga</option>
                            <option  {if $country eq "TT"}selected{/if} value="TT">Trinidad and Tobago</option>
                            <option  {if $country eq "TN"}selected{/if} value="TN">Tunisia</option>
                            <option  {if $country eq "TR"}selected{/if} value="TR">Turkey</option>
                            <option  {if $country eq "TM"}selected{/if} value="TM">Turkmenistan</option>
                            <option  {if $country eq "TC"}selected{/if} value="TC">Turks and Caicos Islands</option>
                            <option  {if $country eq "TV"}selected{/if} value="TV">Tuvalu</option>
                            <option  {if $country eq "UG"}selected{/if} value="UG">Uganda</option>
                            <option  {if $country eq "UA"}selected{/if} value="UA">Ukraine</option>
                            <option  {if $country eq "AE"}selected{/if} value="AE">United Arab Emirates</option>
                            <option  {if $country eq "GB"}selected{/if} value="GB">United Kingdom</option>
                            <option  {if $country eq "US"}selected{/if} value="US">United States</option>
                            <option  {if $country eq "UM"}selected{/if} value="UM">United States Minor Outlying Islands</option>
                            <option  {if $country eq "UY"}selected{/if} value="UY">Uruguay</option>
                            <option  {if $country eq "UZ"}selected{/if} value="UZ">Uzbekistan</option>
                            <option  {if $country eq "VA"}selected{/if} value="VU">Vanuatu</option>
                            <option  {if $country eq "VE"}selected{/if} value="VE">Venezuela</option>
                            <option  {if $country eq "VN"}selected{/if} value="VN">Viet Nam</option>
                            <option  {if $country eq "VG"}selected{/if} value="VG">Virgin Islands, British</option>
                            <option  {if $country eq "VI"}selected{/if} value="VI">Virgin Islands, U.S.</option>
                            <option  {if $country eq "WF"}selected{/if} value="WF">Wallis and Futuna</option>
                            <option  {if $country eq "EH"}selected{/if} value="EH">Western Sahara</option>
                            <option  {if $country eq "YE"}selected{/if} value="YE">Yemen</option>
                            <option  {if $country eq "ZM"}selected{/if} value="ZM">Zambia</option>
                            <option  {if $country eq "ZW"}selected{/if} value="ZW">Zimbabwe</option>   
                            </select>          
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Signup IP:</label>
                        <div class="indent">
                            <input type="text" id="ip" name="ip" value="{$ip}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Last Login IP:</label>
                        <div class="indent">
                            <input type="text" id="lip" name="lip" value="{$lip}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Search Users">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->

		<!--Table Styling-->
      <div class="grid-1">
           <div class="title-grid">Users</div>
           <div class="content-gird">
            	<table class="display">
                <thead>
                    <tr>
                        <th class="th_title">ID</th>
                        <th class="th_avatar">Avatar</th>
                        <th class="th_status">User Name</th>
                        <th class="th_status">Posts</th>
                        <th class="th_status">Points</th>


                        <th class="th_date">Status</th>
                        <th class="th_date">Verified</th>
                        <th class="th_author">Delete</th>
                    </tr>
                </thead>
                <tbody>
				
				{section name=i loop=$users}
				   <tr class="item">
                        <td class="subject">{$users[i].USERID}</td>
                        <td><span class="published">
							<ul class="gallery">
							   <li><a class="fancybox" href="{$membersprofilepicurl}/thumbs/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}">  <img src="{$membersprofilepicurl}/thumbs/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}" width="88px" alt=""  /></a>
									 <ul class="img_options">
										<li><a class="zoom fancybox" href="{$membersprofilepicurl}/{if $users[i].profilepicture eq ""}noprofilepicture.jpg{else}{$users[i].profilepicture}{/if}"><span>View</span></a></li> 
									 </ul>
							   </li>
							</ul>
						</span></td>
                        <td><span class="published">{$users[i].username}</span></td>
                        <td><span class="published">{$users[i].posts}</span></td>
                        <td><span class="published">{$users[i].points}</span></td>
                        <td>{if $users[i].status eq "1"}Active{else}Banned{/if}</td>
                        <td>{if $users[i].status eq "1"}Verified{else}Not Verified{/if}</td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="{$adminurl}/users_edit.php?ID={$users[i].USERID}"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="{$adminurl}/users_all.php?delete=1&ID={$users[i].USERID}&page={$page}"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 {/section}
				 <tr>
                    <td colspan="8">
                    {$pagelinks}
                    </td>
                 </tr>
                </tbody>
            </table>
			
    		
           </div>
           </div>
		<!--Table Styling end-->
             
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		{include file='administrator/left_side.tpl'}
        	</div><!-- #container main-->
