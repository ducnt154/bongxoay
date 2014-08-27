 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="{$adminurl}/dashboard.php">{$site_name} Admin Panel</a> &rsaquo; Users &rsaquo; Edit Member #{$user.USERID}</div> 
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
           <div class="title-grid">Edit User</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="{$adminurl}/users_edit.php?ID={$user.USERID}">
                 <div class="elem">
                        <label>USERID:</label>
                        <div class="indent">
                            <label>{$user.USERID}</label>
							<a href="{$adminurl}/users_all.php?delete=1&ID={$user.USERID}" class="right" style="color:red;">Delet User</a>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Avatar:</label>
                        <div class="indent">
								<div class="user-avatar">
									<ul class="gallery">
									   <li><a class="fancybox" href="{$membersprofilepicurl}/{if $user.profilepicture eq ""}noprofilepicture.jpg{else}{$user.profilepicture}{/if}">  <img src="{$membersprofilepicurl}/thumbs/{if $user.profilepicture eq ""}noprofilepicture.jpg{else}{$user.profilepicture}{/if}" style="width:88px" alt=""  /></a>
											 <ul class="img_options">
												<li><a class="zoom fancybox" href="{$membersprofilepicurl}/{if $user.profilepicture eq ""}noprofilepicture.jpg{else}{$user.profilepicture}{/if}"><span>View</span></a></li> 
											 </ul>
									   </li>
									</ul>
								</div>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label></label>
                        <div class="indent">
								<div class="user-avatar">
										<p class="remove-avatar"><input type="checkbox" name="remove_avatar" value="1" style="float:left;margin-top:4px;"/><label style="padding-left:10px;">{$lang55}</label></p>
								</div>
                        </div>
                 </div>

				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                            <input type="text" id="username" name="username" value="{$user.username}" class="medium tip-right" title="Username that appears all over ths site."> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>email:</label>
                        <div class="indent">
                            <input type="text" id="email" name="email" value="{if $demo_mode eq "1"}Email is hidden in demo mode{else}{$user.email}{/if}" class="medium tip-right" title="User email address"> 
                            <br><br>
                        </div>
                 </div>
				 
                 <div class="elem">
                        <label>Password:</label>
                        <div class="indent">
                            <input type="password" id="newpass2" name="newpass2" class="medium"> 
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Status:</label>
                        <div class="indent">
                         <select id="status" name="status" class="chzn-select medium-select select" > 
                            <option value="1" {if $user.status eq "1"}selected{/if}>Active</option>
                            <option value="0" {if $user.status eq "0"}selected{/if}>Banned</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Verified:</label>
                        <div class="indent">
                         <select id="verified" name="verified" class="chzn-select medium-select select" > 
                            <option value="1" {if $user.verified eq "1"}selected{/if}>Verified</option>
                            <option value="0" {if $user.verified eq "0"}selected{/if}>Not Verified</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Full Name:</label>
                        <div class="indent">
                            <input type="text" id="fullname" name="fullname" value="{$user.fullname}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Website:</label>
                        <div class="indent">
                            <input type="text" id="website" name="website" value="{$user.website}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Bio / About me:</label>
                        <div class="indent">
                            <textarea  class="medium"  id="description" name="description" rows="5">{$user.description}</textarea>
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Country:</label>
                        <div class="indent">
                        <select name="country" id="country_selector" class="chzn-select medium-select select">
                            <option value="">{$lang63}</option>
                            <option  {if $user.country eq "AF"}selected{/if} value="AF">Afghanistan</option>
                            <option  {if $user.country eq "AX"}selected{/if} value="AX">?land Islands</option>
                            <option  {if $user.country eq "AL"}selected{/if} value="AL">Albania</option>
                            <option  {if $user.country eq "DZ"}selected{/if} value="DZ">Algeria</option>
                            <option  {if $user.country eq "AS"}selected{/if} value="AS">American Samoa</option>
                            <option  {if $user.country eq "AD"}selected{/if} value="AD">Andorra</option>
                            <option  {if $user.country eq "AO"}selected{/if} value="AO">Angola</option>
                            <option  {if $user.country eq "AI"}selected{/if} value="AI">Anguilla</option>
                            <option  {if $user.country eq "AQ"}selected{/if} value="AQ">Antarctica</option>
                            <option  {if $user.country eq "AG"}selected{/if} value="AG">Antigua and Barbuda</option>
                            <option  {if $user.country eq "AR"}selected{/if} value="AR">Argentina</option>
                            <option  {if $user.country eq "AM"}selected{/if} value="AM">Armenia</option>
                            <option  {if $user.country eq "AW"}selected{/if} value="AW">Aruba</option>
                            <option  {if $user.country eq "AU"}selected{/if} value="AU">Australia</option>
                            <option  {if $user.country eq "AT"}selected{/if} value="AT">Austria</option>
                            <option  {if $user.country eq "AZ"}selected{/if} value="AZ">Azerbaijan</option>
                            <option  {if $user.country eq "BS"}selected{/if} value="BS">Bahamas</option>
                            <option  {if $user.country eq "BH"}selected{/if} value="BH">Bahrain</option>
                            <option  {if $user.country eq "BD"}selected{/if} value="BD">Bangladesh</option>
                            <option  {if $user.country eq "BB"}selected{/if} value="BB">Barbados</option>
                            <option  {if $user.country eq "BY"}selected{/if} value="BY">Belarus</option>
                            <option  {if $user.country eq "BE"}selected{/if} value="BE">Belgium</option>
                            <option  {if $user.country eq "BZ"}selected{/if} value="BZ">Belize</option>
                            <option  {if $user.country eq "BJ"}selected{/if} value="BJ">Benin</option>
                            <option  {if $user.country eq "BM"}selected{/if} value="BM">Bermuda</option>
                            <option  {if $user.country eq "BT"}selected{/if} value="BT">Bhutan</option>
                            <option  {if $user.country eq "BO"}selected{/if} value="BO">Bolivia</option>
                            <option  {if $user.country eq "BA"}selected{/if} value="BA">Bosnia and Herzegovina</option>
                            <option  {if $user.country eq "BW"}selected{/if} value="BW">Botswana</option>
                            <option  {if $user.country eq "BV"}selected{/if} value="BV">Bouvet Island</option>
                            <option  {if $user.country eq "BR"}selected{/if} value="BR">Brazil</option>
                            <option  {if $user.country eq "IO"}selected{/if} value="IO">British Indian Ocean Territory</option>
                            <option  {if $user.country eq "BN"}selected{/if} value="BN">Brunei Darussalam</option>
                            <option  {if $user.country eq "BG"}selected{/if} value="BG">Bulgaria</option>
                            <option  {if $user.country eq "BF"}selected{/if} value="BF">Burkina Faso</option>
                            <option  {if $user.country eq "BI"}selected{/if} value="BI">Burundi</option>
                            <option  {if $user.country eq "KH"}selected{/if} value="KH">Cambodia</option>
                            <option  {if $user.country eq "CM"}selected{/if} value="CM">Cameroon</option>
                            <option  {if $user.country eq "CA"}selected{/if} value="CA">Canada</option>
                            <option  {if $user.country eq "CV"}selected{/if} value="CV">Cape Verde</option>
                            <option  {if $user.country eq "KY"}selected{/if} value="KY">Cayman Islands</option>
                            <option  {if $user.country eq "CF"}selected{/if} value="CF">Central African Republic</option>
                            <option  {if $user.country eq "TD"}selected{/if} value="TD">Chad</option>
                            <option  {if $user.country eq "CL"}selected{/if} value="CL">Chile</option>
                            <option  {if $user.country eq "CN"}selected{/if} value="CN">China</option>
                            <option  {if $user.country eq "CX"}selected{/if} value="CX">Christmas Island</option>
                            <option  {if $user.country eq "CC"}selected{/if} value="CC">Cocos (Keeling) Islands</option>
                            <option  {if $user.country eq "CO"}selected{/if} value="CO">Colombia</option>
                            <option  {if $user.country eq "KM"}selected{/if} value="KM">Comoros</option>
                            <option  {if $user.country eq "CG"}selected{/if} value="CG">Congo</option>
                            <option  {if $user.country eq "CD"}selected{/if} value="CD">Congo, The Democratic Republic of The</option>
                            <option  {if $user.country eq "CK"}selected{/if} value="CK">Cook Islands</option>
                            <option  {if $user.country eq "CR"}selected{/if} value="CR">Costa Rica</option>
                            <option  {if $user.country eq "CI"}selected{/if} value="CI">Cote D'ivoire</option>
                            <option  {if $user.country eq "HR"}selected{/if} value="HR">Croatia</option>
                            <option  {if $user.country eq "CU"}selected{/if} value="CU">Cuba</option>
                            <option  {if $user.country eq "CY"}selected{/if} value="CY">Cyprus</option>
                            <option  {if $user.country eq "CZ"}selected{/if} value="CZ">Czech Republic</option>
                            <option  {if $user.country eq "DK"}selected{/if} value="DK">Denmark</option>
                            <option  {if $user.country eq "DJ"}selected{/if} value="DJ">Djibouti</option>
                            <option  {if $user.country eq "DM"}selected{/if} value="DM">Dominica</option>
                            <option  {if $user.country eq "DO"}selected{/if} value="DO">Dominican Republic</option>
                            <option  {if $user.country eq "EC"}selected{/if} value="EC">Ecuador</option>
                            <option  {if $user.country eq "EG"}selected{/if} value="EG">Egypt</option>
                            <option  {if $user.country eq "SV"}selected{/if} value="SV">El Salvador</option>
                            <option  {if $user.country eq "GQ"}selected{/if} value="GQ">Equatorial Guinea</option>
                            <option  {if $user.country eq "ER"}selected{/if} value="ER">Eritrea</option>
                            <option  {if $user.country eq "EE"}selected{/if} value="EE">Estonia</option>
                            <option  {if $user.country eq "ET"}selected{/if} value="ET">Ethiopia</option>
                            <option  {if $user.country eq "FK"}selected{/if} value="FK">Falkland Islands (Malvinas)</option>
                            <option  {if $user.country eq "FO"}selected{/if} value="FO">Faroe Islands</option>
                            <option  {if $user.country eq "FJ"}selected{/if} value="FJ">Fiji</option>
                            <option  {if $user.country eq "FI"}selected{/if} value="FI">Finland</option>
                            <option  {if $user.country eq "FR"}selected{/if} value="FR">France</option>
                            <option  {if $user.country eq "GR"}selected{/if} value="GF">French Guiana</option>
                            <option  {if $user.country eq "PF"}selected{/if} value="PF">French Polynesia</option>
                            <option  {if $user.country eq "TF"}selected{/if} value="TF">French Southern Territories</option>
                            <option  {if $user.country eq "GA"}selected{/if} value="GA">Gabon</option>
                            <option  {if $user.country eq "GM"}selected{/if} value="GM">Gambia</option>
                            <option  {if $user.country eq "GE"}selected{/if} value="GE">Georgia</option>
                            <option  {if $user.country eq "DE"}selected{/if} value="DE">Germany</option>
                            <option  {if $user.country eq "GH"}selected{/if} value="GH">Ghana</option>
                            <option  {if $user.country eq "GI"}selected{/if} value="GI">Gibraltar</option>
                            <option  {if $user.country eq "GR"}selected{/if} value="GR">Greece</option>
                            <option  {if $user.country eq "GL"}selected{/if} value="GL">Greenland</option>
                            <option  {if $user.country eq "GD"}selected{/if} value="GD">Grenada</option>
                            <option  {if $user.country eq "GP"}selected{/if} value="GP">Guadeloupe</option>
                            <option  {if $user.country eq "GU"}selected{/if} value="GU">Guam</option>
                            <option  {if $user.country eq "GT"}selected{/if} value="GT">Guatemala</option>
                            <option  {if $user.country eq "GG"}selected{/if} value="GG">Guernsey</option>
                            <option  {if $user.country eq "GN"}selected{/if} value="GN">Guinea</option>
                            <option  {if $user.country eq "GW"}selected{/if} value="GW">Guinea-bissau</option>
                            <option  {if $user.country eq "GY"}selected{/if} value="GY">Guyana</option>
                            <option  {if $user.country eq "HT"}selected{/if} value="HT">Haiti</option>
                            <option  {if $user.country eq "HM"}selected{/if} value="HM">Heard Island and Mcdonald Islands</option>
                            <option  {if $user.country eq "VA"}selected{/if} value="VA">Holy See (Vatican City State)</option>
                            <option  {if $user.country eq "HN"}selected{/if} value="HN">Honduras</option>
                            <option  {if $user.country eq "HK"}selected{/if} value="HK">Hong Kong</option>
                            <option  {if $user.country eq "HU"}selected{/if} value="HU">Hungary</option>
                            <option  {if $user.country eq "IS"}selected{/if} value="IS">Iceland</option>
                            <option  {if $user.country eq "IN"}selected{/if} value="IN">India</option>
                            <option  {if $user.country eq "ID"}selected{/if} value="ID">Indonesia</option>
                            <option  {if $user.country eq "IR"}selected{/if} value="IR">Iran, Islamic Republic of</option>
                            <option  {if $user.country eq "IQ"}selected{/if} value="IQ">Iraq</option>
                            <option  {if $user.country eq "IE"}selected{/if} value="IE">Ireland</option>
                            <option  {if $user.country eq "IM"}selected{/if} value="IM">Isle of Man</option>
                            <option  {if $user.country eq "IL"}selected{/if} value="IL">Israel</option>
                            <option  {if $user.country eq "IT"}selected{/if} value="IT">Italy</option>
                            <option  {if $user.country eq "JM"}selected{/if} value="JM">Jamaica</option>
                            <option  {if $user.country eq "JP"}selected{/if} value="JP">Japan</option>
                            <option  {if $user.country eq "JE"}selected{/if} value="JE">Jersey</option>
                            <option  {if $user.country eq "JO"}selected{/if} value="JO">Jordan</option>
                            <option  {if $user.country eq "KZ"}selected{/if} value="KZ">Kazakhstan</option>
                            <option  {if $user.country eq "KE"}selected{/if} value="KE">Kenya</option>
                            <option  {if $user.country eq "KI"}selected{/if} value="KI">Kiribati</option>
                            <option  {if $user.country eq "KP"}selected{/if} value="KP">Korea, Democratic People's Republic of</option>
                            <option  {if $user.country eq "KR"}selected{/if} value="KR">Korea, Republic of</option>
                            <option  {if $user.country eq "KW"}selected{/if} value="KW">Kuwait</option>
                            <option  {if $user.country eq "KG"}selected{/if} value="KG">Kyrgyzstan</option>
                            <option  {if $user.country eq "LA"}selected{/if} value="LA">Lao People's Democratic Republic</option>
                            <option  {if $user.country eq "LV"}selected{/if} value="LV">Latvia</option>
                            <option  {if $user.country eq "LB"}selected{/if} value="LB">Lebanon</option>
                            <option  {if $user.country eq "LS"}selected{/if} value="LS">Lesotho</option>
                            <option  {if $user.country eq "LR"}selected{/if} value="LR">Liberia</option>
                            <option  {if $user.country eq "LY"}selected{/if} value="LY">Libyan Arab Jamahiriya</option>
                            <option  {if $user.country eq "LI"}selected{/if} value="LI">Liechtenstein</option>
                            <option  {if $user.country eq "LT"}selected{/if} value="LT">Lithuania</option>
                            <option  {if $user.country eq "LU"}selected{/if} value="LU">Luxembourg</option>
                            <option  {if $user.country eq "MO"}selected{/if} value="MO">Macao</option>
                            <option  {if $user.country eq "MK"}selected{/if} value="MK">Macedonia, The Former Yugoslav Republic of</option>
                            <option  {if $user.country eq "MG"}selected{/if} value="MG">Madagascar</option>
                            <option  {if $user.country eq "MW"}selected{/if} value="MW">Malawi</option>
                            <option  {if $user.country eq "MY"}selected{/if} value="MY">Malaysia</option>
                            <option  {if $user.country eq "MV"}selected{/if} value="MV">Maldives</option>
                            <option  {if $user.country eq "ML"}selected{/if} value="ML">Mali</option>
                            <option  {if $user.country eq "MT"}selected{/if} value="MT">Malta</option>
                            <option  {if $user.country eq "MH"}selected{/if} value="MH">Marshall Islands</option>
                            <option  {if $user.country eq "MQ"}selected{/if} value="MQ">Martinique</option>
                            <option  {if $user.country eq "MR"}selected{/if} value="MR">Mauritania</option>
                            <option  {if $user.country eq "MU"}selected{/if} value="MU">Mauritius</option>
                            <option  {if $user.country eq "YT"}selected{/if} value="YT">Mayotte</option>
                            <option  {if $user.country eq "MX"}selected{/if} value="MX">Mexico</option>
                            <option  {if $user.country eq "FM"}selected{/if} value="FM">Micronesia, Federated States of</option>
                            <option  {if $user.country eq "MD"}selected{/if} value="MD">Moldova, Republic of</option>
                            <option  {if $user.country eq "MC"}selected{/if} value="MC">Monaco</option>
                            <option  {if $user.country eq "MN"}selected{/if} value="MN">Mongolia</option>
                            <option  {if $user.country eq "ME"}selected{/if} value="ME">Montenegro</option>
                            <option  {if $user.country eq "MS"}selected{/if} value="MS">Montserrat</option>
                            <option  {if $user.country eq "MA"}selected{/if} value="MA">Morocco</option>
                            <option  {if $user.country eq "MZ"}selected{/if} value="MZ">Mozambique</option>
                            <option  {if $user.country eq "MM"}selected{/if} value="MM">Myanmar</option>
                            <option  {if $user.country eq "NA"}selected{/if} value="NA">Namibia</option>
                            <option  {if $user.country eq "NR"}selected{/if} value="NR">Nauru</option>
                            <option  {if $user.country eq "NP"}selected{/if} value="NP">Nepal</option>
                            <option  {if $user.country eq "NL"}selected{/if} value="NL">Netherlands</option>
                            <option  {if $user.country eq "AN"}selected{/if} value="AN">Netherlands Antilles</option>
                            <option  {if $user.country eq "NC"}selected{/if} value="NC">New Caledonia</option>
                            <option  {if $user.country eq "NZ"}selected{/if} value="NZ">New Zealand</option>
                            <option  {if $user.country eq "NI"}selected{/if} value="NI">Nicaragua</option>
                            <option  {if $user.country eq "NE"}selected{/if} value="NE">Niger</option>
                            <option  {if $user.country eq "NG"}selected{/if} value="NG">Nigeria</option>
                            <option  {if $user.country eq "NU"}selected{/if} value="NU">Niue</option>
                            <option  {if $user.country eq "NF"}selected{/if} value="NF">Norfolk Island</option>
                            <option  {if $user.country eq "MP"}selected{/if} value="MP">Northern Mariana Islands</option>
                            <option  {if $user.country eq "NO"}selected{/if} value="NO">Norway</option>
                            <option  {if $user.country eq "OM"}selected{/if} value="OM">Oman</option>
                            <option  {if $user.country eq "PK"}selected{/if} value="PK">Pakistan</option>
                            <option  {if $user.country eq "PW"}selected{/if} value="PW">Palau</option>
                            <option  {if $user.country eq "PS"}selected{/if} value="PS">Palestinian Territory, Occupied</option>
                            <option  {if $user.country eq "PA"}selected{/if} value="PA">Panama</option>
                            <option  {if $user.country eq "PG"}selected{/if} value="PG">Papua New Guinea</option>
                            <option  {if $user.country eq "PY"}selected{/if} value="PY">Paraguay</option>
                            <option  {if $user.country eq "PE"}selected{/if} value="PE">Peru</option>
                            <option  {if $user.country eq "PH"}selected{/if} value="PH">Philippines</option>
                            <option  {if $user.country eq "PN"}selected{/if} value="PN">Pitcairn</option>
                            <option  {if $user.country eq "PL"}selected{/if} value="PL">Poland</option>
                            <option  {if $user.country eq "PT"}selected{/if} value="PT">Portugal</option>
                            <option  {if $user.country eq "PR"}selected{/if} value="PR">Puerto Rico</option>
                            <option  {if $user.country eq "QA"}selected{/if} value="QA">Qatar</option>
                            <option  {if $user.country eq "RE"}selected{/if} value="RE">Reunion</option>
                            <option  {if $user.country eq "RO"}selected{/if} value="RO">Romania</option>
                            <option  {if $user.country eq "RU"}selected{/if} value="RU">Russian Federation</option>
                            <option  {if $user.country eq "RW"}selected{/if} value="RW">Rwanda</option>
                            <option  {if $user.country eq "SH"}selected{/if} value="SH">Saint Helena</option>
                            <option  {if $user.country eq "KN"}selected{/if} value="KN">Saint Kitts and Nevis</option>
                            <option  {if $user.country eq "LC"}selected{/if} value="LC">Saint Lucia</option>
                            <option  {if $user.country eq "PM"}selected{/if} value="PM">Saint Pierre and Miquelon</option>
                            <option  {if $user.country eq "VC"}selected{/if} value="VC">Saint Vincent and The Grenadines</option>
                            <option  {if $user.country eq "WS"}selected{/if} value="WS">Samoa</option>
                            <option  {if $user.country eq "SM"}selected{/if} value="SM">San Marino</option>
                            <option  {if $user.country eq "ST"}selected{/if} value="ST">Sao Tome and Principe</option>
                            <option  {if $user.country eq "SA"}selected{/if} value="SA">Saudi Arabia</option>
                            <option  {if $user.country eq "SN"}selected{/if} value="SN">Senegal</option>
                            <option  {if $user.country eq "RS"}selected{/if} value="RS">Serbia</option>
                            <option  {if $user.country eq "SC"}selected{/if} value="SC">Seychelles</option>
                            <option  {if $user.country eq "SL"}selected{/if} value="SL">Sierra Leone</option>
                            <option  {if $user.country eq "SG"}selected{/if} value="SG">Singapore</option>
                            <option  {if $user.country eq "SK"}selected{/if} value="SK">Slovakia</option>
                            <option  {if $user.country eq "SI"}selected{/if} value="SI">Slikenia</option>
                            <option  {if $user.country eq "SB"}selected{/if} value="SB">Solomon Islands</option>
                            <option  {if $user.country eq "SO"}selected{/if} value="SO">Somalia</option>
                            <option  {if $user.country eq "ZA"}selected{/if} value="ZA">South Africa</option>
                            <option  {if $user.country eq "GS"}selected{/if} value="GS">South Georgia and The South Sandwich Islands</option>
                            <option  {if $user.country eq "ES"}selected{/if} value="ES">Spain</option>
                            <option  {if $user.country eq "LK"}selected{/if} value="LK">Sri Lanka</option>
                            <option  {if $user.country eq "SD"}selected{/if} value="SD">Sudan</option>
                            <option  {if $user.country eq "SR"}selected{/if} value="SR">Suriname</option>
                            <option  {if $user.country eq "SJ"}selected{/if} value="SJ">Svalbard and Jan Mayen</option>
                            <option  {if $user.country eq "SZ"}selected{/if} value="SZ">Swaziland</option>
                            <option  {if $user.country eq "SE"}selected{/if} value="SE">Sweden</option>
                            <option  {if $user.country eq "CH"}selected{/if} value="CH">Switzerland</option>
                            <option  {if $user.country eq "SY"}selected{/if} value="SY">Syrian Arab Republic</option>
                            <option  {if $user.country eq "TW"}selected{/if} value="TW">Taiwan, Province of China</option>
                            <option  {if $user.country eq "TJ"}selected{/if} value="TJ">Tajikistan</option>
                            <option  {if $user.country eq "TZ"}selected{/if} value="TZ">Tanzania, United Republic of</option>
                            <option  {if $user.country eq "TH"}selected{/if} value="TH">Thailand</option>
                            <option  {if $user.country eq "TL"}selected{/if} value="TL">Timor-leste</option>
                            <option  {if $user.country eq "TG"}selected{/if} value="TG">Togo</option>
                            <option  {if $user.country eq "TK"}selected{/if} value="TK">Tokelau</option>
                            <option  {if $user.country eq "TO"}selected{/if} value="TO">Tonga</option>
                            <option  {if $user.country eq "TT"}selected{/if} value="TT">Trinidad and Tobago</option>
                            <option  {if $user.country eq "TN"}selected{/if} value="TN">Tunisia</option>
                            <option  {if $user.country eq "TR"}selected{/if} value="TR">Turkey</option>
                            <option  {if $user.country eq "TM"}selected{/if} value="TM">Turkmenistan</option>
                            <option  {if $user.country eq "TC"}selected{/if} value="TC">Turks and Caicos Islands</option>
                            <option  {if $user.country eq "TV"}selected{/if} value="TV">Tuvalu</option>
                            <option  {if $user.country eq "UG"}selected{/if} value="UG">Uganda</option>
                            <option  {if $user.country eq "UA"}selected{/if} value="UA">Ukraine</option>
                            <option  {if $user.country eq "AE"}selected{/if} value="AE">United Arab Emirates</option>
                            <option  {if $user.country eq "GB"}selected{/if} value="GB">United Kingdom</option>
                            <option  {if $user.country eq "US"}selected{/if} value="US">United States</option>
                            <option  {if $user.country eq "UM"}selected{/if} value="UM">United States Minor Outlying Islands</option>
                            <option  {if $user.country eq "UY"}selected{/if} value="UY">Uruguay</option>
                            <option  {if $user.country eq "UZ"}selected{/if} value="UZ">Uzbekistan</option>
                            <option  {if $user.country eq "VA"}selected{/if} value="VU">Vanuatu</option>
                            <option  {if $user.country eq "VE"}selected{/if} value="VE">Venezuela</option>
                            <option  {if $user.country eq "VN"}selected{/if} value="VN">Viet Nam</option>
                            <option  {if $user.country eq "VG"}selected{/if} value="VG">Virgin Islands, British</option>
                            <option  {if $user.country eq "VI"}selected{/if} value="VI">Virgin Islands, U.S.</option>
                            <option  {if $user.country eq "WF"}selected{/if} value="WF">Wallis and Futuna</option>
                            <option  {if $user.country eq "EH"}selected{/if} value="EH">Western Sahara</option>
                            <option  {if $user.country eq "YE"}selected{/if} value="YE">Yemen</option>
                            <option  {if $user.country eq "ZM"}selected{/if} value="ZM">Zambia</option>
                            <option  {if $user.country eq "ZW"}selected{/if} value="ZW">Zimbabwe</option>   
                            </select>          
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Posts:</label>
                        <div class="indent">
                            <input type="text" id="posts" name="posts" value="{$user.posts}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Points:</label>
                        <div class="indent">
                            <input type="text" id="points" name="points" value="{$user.points}" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Signup IP:</label>
                        <div class="indent">
                            <label>{$user.ip}</label>
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Last Login IP:</label>
                        <div class="indent">
                            <label>{$user.lip}</label>
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Member Since:</label>
                        <div class="indent">
                            <label>{$user.addtime|date_format} {$user.addtime|date_format:"%I:%M %p"}</label>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>Last Login:</label>
                        <div class="indent">
                            <label>{$user.lastlogin|date_format} {$user.lastlogin|date_format:"%I:%M %p"}</label>
                        </div>
                 </div>
				 <input type="hidden" id="submitform" name="submitform" value="1" >
				 <div style="width:330px;margin:20px;">
				<input type="submit" class="button-a red right" value="Save Settings">
				</div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->
             
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		{include file='administrator/left_side.tpl'}
        	</div><!-- #container main-->
