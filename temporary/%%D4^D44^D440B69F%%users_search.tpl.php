<?php /* Smarty version 2.6.6, created on 2014-01-20 15:12:01
         compiled from administrator/users_search.tpl */ ?>
 
  
  <section id="middle">
  	<div id="container-main">
		<div id="container">
		<div id="content">
        
        
        
		<div class="speedbar">
        	<div class="speedbar-nav"> <a href="<?php echo $this->_tpl_vars['adminurl']; ?>
/dashboard.php"><?php echo $this->_tpl_vars['site_name']; ?>
 Admin Panel</a> &rsaquo; Users &rsaquo; All Users</div> 
        </div>

		<?php if ($this->_tpl_vars['message'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert green hideit"><p><span class="green-icon"></span><?php echo $this->_tpl_vars['message']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>
		<?php if ($this->_tpl_vars['error'] != ""): ?>
		<!--Alerts-->
           <div class="alerts">
           		<div class="alert red hideit"><p><span class="red-icon"></span><?php echo $this->_tpl_vars['error']; ?>
</p></div>
           </div> 
		<!--Alerts end-->
		<?php endif; ?>
		
		
		<!--Form-->
        <div class="grid-1">
           <div class="title-grid">Search User</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_search.php">
                 <div class="elem">
                        <label>Start ID:</label>
                        <div class="indent">
                            <input type="text" id="startid" name="startid" value="<?php echo $this->_tpl_vars['startid']; ?>
" class="medium tip-right" title="User ID"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>End ID:</label>
                        <div class="indent">
                            <input type="text" id="endid" name="endid" value="<?php echo $this->_tpl_vars['endid']; ?>
" class="medium tip-right" title="User ID"> 
                            <br><br>
                        </div>
                 </div>
				 
				 <div class="elem">
                        <label>User Name:</label>
                        <div class="indent">
                            <input type="text" id="username" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
" class="medium tip-right" title="Username that appears all over ths site."> 
                        </div>
                 </div>

            	 <div class="elem">
                        <label>email:</label>
                        <div class="indent">
                            <input type="text" id="email" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" class="medium tip-right" title="User email address"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Status:</label>
                        <div class="indent">
                         <select id="status" name="status" class="chzn-select medium-select select" > 
                            <option value="2" <?php if ($this->_tpl_vars['status'] == '2'): ?>selected<?php endif; ?>>Any</option>
                            <option value="1" <?php if ($this->_tpl_vars['status'] == '1'): ?>selected<?php endif; ?>>Active</option>
                            <option value="0" <?php if ($this->_tpl_vars['status'] == '0'): ?>selected<?php endif; ?>>Banned</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Verified:</label>
                        <div class="indent">
                         <select id="verified" name="verified" class="chzn-select medium-select select" > 
                            <option value="2" <?php if ($this->_tpl_vars['verified'] == '2'): ?>selected<?php endif; ?>>Any</option>
                            <option value="1" <?php if ($this->_tpl_vars['verified'] == '1'): ?>selected<?php endif; ?>>Verified</option>
                            <option value="0" <?php if ($this->_tpl_vars['verified'] == '0'): ?>selected<?php endif; ?>>Not Verified</option>
                        </select>   
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Full Name:</label>
                        <div class="indent">
                            <input type="text" id="fullname" name="fullname" value="<?php echo $this->_tpl_vars['fullname']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>

            	 <div class="elem">
                        <label>Website:</label>
                        <div class="indent">
                            <input type="text" id="website" name="website" value="<?php echo $this->_tpl_vars['website']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Country:</label>
                        <div class="indent">
                        <select name="country" id="country_selector" class="chzn-select medium-select select">
                            <option value="">Any</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AF'): ?>selected<?php endif; ?> value="AF">Afghanistan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AX'): ?>selected<?php endif; ?> value="AX">?land Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AL'): ?>selected<?php endif; ?> value="AL">Albania</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'DZ'): ?>selected<?php endif; ?> value="DZ">Algeria</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AS'): ?>selected<?php endif; ?> value="AS">American Samoa</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AD'): ?>selected<?php endif; ?> value="AD">Andorra</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AO'): ?>selected<?php endif; ?> value="AO">Angola</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AI'): ?>selected<?php endif; ?> value="AI">Anguilla</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AQ'): ?>selected<?php endif; ?> value="AQ">Antarctica</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AG'): ?>selected<?php endif; ?> value="AG">Antigua and Barbuda</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AR'): ?>selected<?php endif; ?> value="AR">Argentina</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AM'): ?>selected<?php endif; ?> value="AM">Armenia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AW'): ?>selected<?php endif; ?> value="AW">Aruba</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AU'): ?>selected<?php endif; ?> value="AU">Australia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AT'): ?>selected<?php endif; ?> value="AT">Austria</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AZ'): ?>selected<?php endif; ?> value="AZ">Azerbaijan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BS'): ?>selected<?php endif; ?> value="BS">Bahamas</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BH'): ?>selected<?php endif; ?> value="BH">Bahrain</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BD'): ?>selected<?php endif; ?> value="BD">Bangladesh</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BB'): ?>selected<?php endif; ?> value="BB">Barbados</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BY'): ?>selected<?php endif; ?> value="BY">Belarus</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BE'): ?>selected<?php endif; ?> value="BE">Belgium</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BZ'): ?>selected<?php endif; ?> value="BZ">Belize</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BJ'): ?>selected<?php endif; ?> value="BJ">Benin</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BM'): ?>selected<?php endif; ?> value="BM">Bermuda</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BT'): ?>selected<?php endif; ?> value="BT">Bhutan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BO'): ?>selected<?php endif; ?> value="BO">Bolivia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BA'): ?>selected<?php endif; ?> value="BA">Bosnia and Herzegovina</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BW'): ?>selected<?php endif; ?> value="BW">Botswana</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BV'): ?>selected<?php endif; ?> value="BV">Bouvet Island</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BR'): ?>selected<?php endif; ?> value="BR">Brazil</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IO'): ?>selected<?php endif; ?> value="IO">British Indian Ocean Territory</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BN'): ?>selected<?php endif; ?> value="BN">Brunei Darussalam</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BG'): ?>selected<?php endif; ?> value="BG">Bulgaria</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BF'): ?>selected<?php endif; ?> value="BF">Burkina Faso</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'BI'): ?>selected<?php endif; ?> value="BI">Burundi</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KH'): ?>selected<?php endif; ?> value="KH">Cambodia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CM'): ?>selected<?php endif; ?> value="CM">Cameroon</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CA'): ?>selected<?php endif; ?> value="CA">Canada</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CV'): ?>selected<?php endif; ?> value="CV">Cape Verde</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KY'): ?>selected<?php endif; ?> value="KY">Cayman Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CF'): ?>selected<?php endif; ?> value="CF">Central African Republic</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TD'): ?>selected<?php endif; ?> value="TD">Chad</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CL'): ?>selected<?php endif; ?> value="CL">Chile</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CN'): ?>selected<?php endif; ?> value="CN">China</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CX'): ?>selected<?php endif; ?> value="CX">Christmas Island</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CC'): ?>selected<?php endif; ?> value="CC">Cocos (Keeling) Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CO'): ?>selected<?php endif; ?> value="CO">Colombia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KM'): ?>selected<?php endif; ?> value="KM">Comoros</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CG'): ?>selected<?php endif; ?> value="CG">Congo</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CD'): ?>selected<?php endif; ?> value="CD">Congo, The Democratic Republic of The</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CK'): ?>selected<?php endif; ?> value="CK">Cook Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CR'): ?>selected<?php endif; ?> value="CR">Costa Rica</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CI'): ?>selected<?php endif; ?> value="CI">Cote D'ivoire</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'HR'): ?>selected<?php endif; ?> value="HR">Croatia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CU'): ?>selected<?php endif; ?> value="CU">Cuba</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CY'): ?>selected<?php endif; ?> value="CY">Cyprus</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CZ'): ?>selected<?php endif; ?> value="CZ">Czech Republic</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'DK'): ?>selected<?php endif; ?> value="DK">Denmark</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'DJ'): ?>selected<?php endif; ?> value="DJ">Djibouti</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'DM'): ?>selected<?php endif; ?> value="DM">Dominica</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'DO'): ?>selected<?php endif; ?> value="DO">Dominican Republic</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'EC'): ?>selected<?php endif; ?> value="EC">Ecuador</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'EG'): ?>selected<?php endif; ?> value="EG">Egypt</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SV'): ?>selected<?php endif; ?> value="SV">El Salvador</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GQ'): ?>selected<?php endif; ?> value="GQ">Equatorial Guinea</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ER'): ?>selected<?php endif; ?> value="ER">Eritrea</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'EE'): ?>selected<?php endif; ?> value="EE">Estonia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ET'): ?>selected<?php endif; ?> value="ET">Ethiopia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'FK'): ?>selected<?php endif; ?> value="FK">Falkland Islands (Malvinas)</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'FO'): ?>selected<?php endif; ?> value="FO">Faroe Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'FJ'): ?>selected<?php endif; ?> value="FJ">Fiji</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'FI'): ?>selected<?php endif; ?> value="FI">Finland</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'FR'): ?>selected<?php endif; ?> value="FR">France</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GR'): ?>selected<?php endif; ?> value="GF">French Guiana</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PF'): ?>selected<?php endif; ?> value="PF">French Polynesia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TF'): ?>selected<?php endif; ?> value="TF">French Southern Territories</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GA'): ?>selected<?php endif; ?> value="GA">Gabon</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GM'): ?>selected<?php endif; ?> value="GM">Gambia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GE'): ?>selected<?php endif; ?> value="GE">Georgia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'DE'): ?>selected<?php endif; ?> value="DE">Germany</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GH'): ?>selected<?php endif; ?> value="GH">Ghana</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GI'): ?>selected<?php endif; ?> value="GI">Gibraltar</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GR'): ?>selected<?php endif; ?> value="GR">Greece</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GL'): ?>selected<?php endif; ?> value="GL">Greenland</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GD'): ?>selected<?php endif; ?> value="GD">Grenada</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GP'): ?>selected<?php endif; ?> value="GP">Guadeloupe</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GU'): ?>selected<?php endif; ?> value="GU">Guam</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GT'): ?>selected<?php endif; ?> value="GT">Guatemala</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GG'): ?>selected<?php endif; ?> value="GG">Guernsey</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GN'): ?>selected<?php endif; ?> value="GN">Guinea</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GW'): ?>selected<?php endif; ?> value="GW">Guinea-bissau</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GY'): ?>selected<?php endif; ?> value="GY">Guyana</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'HT'): ?>selected<?php endif; ?> value="HT">Haiti</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'HM'): ?>selected<?php endif; ?> value="HM">Heard Island and Mcdonald Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'VA'): ?>selected<?php endif; ?> value="VA">Holy See (Vatican City State)</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'HN'): ?>selected<?php endif; ?> value="HN">Honduras</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'HK'): ?>selected<?php endif; ?> value="HK">Hong Kong</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'HU'): ?>selected<?php endif; ?> value="HU">Hungary</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IS'): ?>selected<?php endif; ?> value="IS">Iceland</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IN'): ?>selected<?php endif; ?> value="IN">India</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ID'): ?>selected<?php endif; ?> value="ID">Indonesia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IR'): ?>selected<?php endif; ?> value="IR">Iran, Islamic Republic of</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IQ'): ?>selected<?php endif; ?> value="IQ">Iraq</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IE'): ?>selected<?php endif; ?> value="IE">Ireland</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IM'): ?>selected<?php endif; ?> value="IM">Isle of Man</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IL'): ?>selected<?php endif; ?> value="IL">Israel</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'IT'): ?>selected<?php endif; ?> value="IT">Italy</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'JM'): ?>selected<?php endif; ?> value="JM">Jamaica</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'JP'): ?>selected<?php endif; ?> value="JP">Japan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'JE'): ?>selected<?php endif; ?> value="JE">Jersey</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'JO'): ?>selected<?php endif; ?> value="JO">Jordan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KZ'): ?>selected<?php endif; ?> value="KZ">Kazakhstan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KE'): ?>selected<?php endif; ?> value="KE">Kenya</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KI'): ?>selected<?php endif; ?> value="KI">Kiribati</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KP'): ?>selected<?php endif; ?> value="KP">Korea, Democratic People's Republic of</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KR'): ?>selected<?php endif; ?> value="KR">Korea, Republic of</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KW'): ?>selected<?php endif; ?> value="KW">Kuwait</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KG'): ?>selected<?php endif; ?> value="KG">Kyrgyzstan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LA'): ?>selected<?php endif; ?> value="LA">Lao People's Democratic Republic</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LV'): ?>selected<?php endif; ?> value="LV">Latvia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LB'): ?>selected<?php endif; ?> value="LB">Lebanon</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LS'): ?>selected<?php endif; ?> value="LS">Lesotho</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LR'): ?>selected<?php endif; ?> value="LR">Liberia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LY'): ?>selected<?php endif; ?> value="LY">Libyan Arab Jamahiriya</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LI'): ?>selected<?php endif; ?> value="LI">Liechtenstein</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LT'): ?>selected<?php endif; ?> value="LT">Lithuania</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LU'): ?>selected<?php endif; ?> value="LU">Luxembourg</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MO'): ?>selected<?php endif; ?> value="MO">Macao</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MK'): ?>selected<?php endif; ?> value="MK">Macedonia, The Former Yugoslav Republic of</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MG'): ?>selected<?php endif; ?> value="MG">Madagascar</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MW'): ?>selected<?php endif; ?> value="MW">Malawi</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MY'): ?>selected<?php endif; ?> value="MY">Malaysia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MV'): ?>selected<?php endif; ?> value="MV">Maldives</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ML'): ?>selected<?php endif; ?> value="ML">Mali</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MT'): ?>selected<?php endif; ?> value="MT">Malta</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MH'): ?>selected<?php endif; ?> value="MH">Marshall Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MQ'): ?>selected<?php endif; ?> value="MQ">Martinique</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MR'): ?>selected<?php endif; ?> value="MR">Mauritania</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MU'): ?>selected<?php endif; ?> value="MU">Mauritius</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'YT'): ?>selected<?php endif; ?> value="YT">Mayotte</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MX'): ?>selected<?php endif; ?> value="MX">Mexico</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'FM'): ?>selected<?php endif; ?> value="FM">Micronesia, Federated States of</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MD'): ?>selected<?php endif; ?> value="MD">Moldova, Republic of</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MC'): ?>selected<?php endif; ?> value="MC">Monaco</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MN'): ?>selected<?php endif; ?> value="MN">Mongolia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ME'): ?>selected<?php endif; ?> value="ME">Montenegro</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MS'): ?>selected<?php endif; ?> value="MS">Montserrat</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MA'): ?>selected<?php endif; ?> value="MA">Morocco</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MZ'): ?>selected<?php endif; ?> value="MZ">Mozambique</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MM'): ?>selected<?php endif; ?> value="MM">Myanmar</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NA'): ?>selected<?php endif; ?> value="NA">Namibia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NR'): ?>selected<?php endif; ?> value="NR">Nauru</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NP'): ?>selected<?php endif; ?> value="NP">Nepal</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NL'): ?>selected<?php endif; ?> value="NL">Netherlands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AN'): ?>selected<?php endif; ?> value="AN">Netherlands Antilles</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NC'): ?>selected<?php endif; ?> value="NC">New Caledonia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NZ'): ?>selected<?php endif; ?> value="NZ">New Zealand</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NI'): ?>selected<?php endif; ?> value="NI">Nicaragua</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NE'): ?>selected<?php endif; ?> value="NE">Niger</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NG'): ?>selected<?php endif; ?> value="NG">Nigeria</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NU'): ?>selected<?php endif; ?> value="NU">Niue</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NF'): ?>selected<?php endif; ?> value="NF">Norfolk Island</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'MP'): ?>selected<?php endif; ?> value="MP">Northern Mariana Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'NO'): ?>selected<?php endif; ?> value="NO">Norway</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'OM'): ?>selected<?php endif; ?> value="OM">Oman</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PK'): ?>selected<?php endif; ?> value="PK">Pakistan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PW'): ?>selected<?php endif; ?> value="PW">Palau</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PS'): ?>selected<?php endif; ?> value="PS">Palestinian Territory, Occupied</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PA'): ?>selected<?php endif; ?> value="PA">Panama</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PG'): ?>selected<?php endif; ?> value="PG">Papua New Guinea</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PY'): ?>selected<?php endif; ?> value="PY">Paraguay</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PE'): ?>selected<?php endif; ?> value="PE">Peru</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PH'): ?>selected<?php endif; ?> value="PH">Philippines</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PN'): ?>selected<?php endif; ?> value="PN">Pitcairn</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PL'): ?>selected<?php endif; ?> value="PL">Poland</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PT'): ?>selected<?php endif; ?> value="PT">Portugal</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PR'): ?>selected<?php endif; ?> value="PR">Puerto Rico</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'QA'): ?>selected<?php endif; ?> value="QA">Qatar</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'RE'): ?>selected<?php endif; ?> value="RE">Reunion</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'RO'): ?>selected<?php endif; ?> value="RO">Romania</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'RU'): ?>selected<?php endif; ?> value="RU">Russian Federation</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'RW'): ?>selected<?php endif; ?> value="RW">Rwanda</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SH'): ?>selected<?php endif; ?> value="SH">Saint Helena</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'KN'): ?>selected<?php endif; ?> value="KN">Saint Kitts and Nevis</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LC'): ?>selected<?php endif; ?> value="LC">Saint Lucia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'PM'): ?>selected<?php endif; ?> value="PM">Saint Pierre and Miquelon</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'VC'): ?>selected<?php endif; ?> value="VC">Saint Vincent and The Grenadines</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'WS'): ?>selected<?php endif; ?> value="WS">Samoa</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SM'): ?>selected<?php endif; ?> value="SM">San Marino</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ST'): ?>selected<?php endif; ?> value="ST">Sao Tome and Principe</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SA'): ?>selected<?php endif; ?> value="SA">Saudi Arabia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SN'): ?>selected<?php endif; ?> value="SN">Senegal</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'RS'): ?>selected<?php endif; ?> value="RS">Serbia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SC'): ?>selected<?php endif; ?> value="SC">Seychelles</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SL'): ?>selected<?php endif; ?> value="SL">Sierra Leone</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SG'): ?>selected<?php endif; ?> value="SG">Singapore</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SK'): ?>selected<?php endif; ?> value="SK">Slovakia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SI'): ?>selected<?php endif; ?> value="SI">Slikenia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SB'): ?>selected<?php endif; ?> value="SB">Solomon Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SO'): ?>selected<?php endif; ?> value="SO">Somalia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ZA'): ?>selected<?php endif; ?> value="ZA">South Africa</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GS'): ?>selected<?php endif; ?> value="GS">South Georgia and The South Sandwich Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ES'): ?>selected<?php endif; ?> value="ES">Spain</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'LK'): ?>selected<?php endif; ?> value="LK">Sri Lanka</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SD'): ?>selected<?php endif; ?> value="SD">Sudan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SR'): ?>selected<?php endif; ?> value="SR">Suriname</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SJ'): ?>selected<?php endif; ?> value="SJ">Svalbard and Jan Mayen</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SZ'): ?>selected<?php endif; ?> value="SZ">Swaziland</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SE'): ?>selected<?php endif; ?> value="SE">Sweden</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'CH'): ?>selected<?php endif; ?> value="CH">Switzerland</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'SY'): ?>selected<?php endif; ?> value="SY">Syrian Arab Republic</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TW'): ?>selected<?php endif; ?> value="TW">Taiwan, Province of China</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TJ'): ?>selected<?php endif; ?> value="TJ">Tajikistan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TZ'): ?>selected<?php endif; ?> value="TZ">Tanzania, United Republic of</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TH'): ?>selected<?php endif; ?> value="TH">Thailand</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TL'): ?>selected<?php endif; ?> value="TL">Timor-leste</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TG'): ?>selected<?php endif; ?> value="TG">Togo</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TK'): ?>selected<?php endif; ?> value="TK">Tokelau</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TO'): ?>selected<?php endif; ?> value="TO">Tonga</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TT'): ?>selected<?php endif; ?> value="TT">Trinidad and Tobago</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TN'): ?>selected<?php endif; ?> value="TN">Tunisia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TR'): ?>selected<?php endif; ?> value="TR">Turkey</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TM'): ?>selected<?php endif; ?> value="TM">Turkmenistan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TC'): ?>selected<?php endif; ?> value="TC">Turks and Caicos Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'TV'): ?>selected<?php endif; ?> value="TV">Tuvalu</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'UG'): ?>selected<?php endif; ?> value="UG">Uganda</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'UA'): ?>selected<?php endif; ?> value="UA">Ukraine</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'AE'): ?>selected<?php endif; ?> value="AE">United Arab Emirates</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'GB'): ?>selected<?php endif; ?> value="GB">United Kingdom</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'US'): ?>selected<?php endif; ?> value="US">United States</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'UM'): ?>selected<?php endif; ?> value="UM">United States Minor Outlying Islands</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'UY'): ?>selected<?php endif; ?> value="UY">Uruguay</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'UZ'): ?>selected<?php endif; ?> value="UZ">Uzbekistan</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'VA'): ?>selected<?php endif; ?> value="VU">Vanuatu</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'VE'): ?>selected<?php endif; ?> value="VE">Venezuela</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'VN'): ?>selected<?php endif; ?> value="VN">Viet Nam</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'VG'): ?>selected<?php endif; ?> value="VG">Virgin Islands, British</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'VI'): ?>selected<?php endif; ?> value="VI">Virgin Islands, U.S.</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'WF'): ?>selected<?php endif; ?> value="WF">Wallis and Futuna</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'EH'): ?>selected<?php endif; ?> value="EH">Western Sahara</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'YE'): ?>selected<?php endif; ?> value="YE">Yemen</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ZM'): ?>selected<?php endif; ?> value="ZM">Zambia</option>
                            <option  <?php if ($this->_tpl_vars['country'] == 'ZW'): ?>selected<?php endif; ?> value="ZW">Zimbabwe</option>   
                            </select>          
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Signup IP:</label>
                        <div class="indent">
                            <input type="text" id="ip" name="ip" value="<?php echo $this->_tpl_vars['ip']; ?>
" class="medium tip-right"> 
                            <br><br>
                        </div>
                 </div>
				 
            	 <div class="elem">
                        <label>Last Login IP:</label>
                        <div class="indent">
                            <input type="text" id="lip" name="lip" value="<?php echo $this->_tpl_vars['lip']; ?>
" class="medium tip-right"> 
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
				
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
				   <tr class="item">
                        <td class="subject"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
</td>
                        <td><span class="published">
							<ul class="gallery">
							   <li><a class="fancybox" href="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>">  <img src="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/thumbs/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>" width="88px" alt=""  /></a>
									 <ul class="img_options">
										<li><a class="zoom fancybox" href="<?php echo $this->_tpl_vars['membersprofilepicurl']; ?>
/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'] == ""): ?>noprofilepicture.jpg<?php else:  echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['profilepicture'];  endif; ?>"><span>View</span></a></li> 
									 </ul>
							   </li>
							</ul>
						</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['posts']; ?>
</span></td>
                        <td><span class="published"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['points']; ?>
</span></td>
                        <td><?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['status'] == '1'): ?>Active<?php else: ?>Banned<?php endif; ?></td>
                        <td><?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['status'] == '1'): ?>Verified<?php else: ?>Not Verified<?php endif; ?></td>
                        <td class="name">
							<ul class="button-list-1">
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_edit.php?ID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
"><span class="edits icon-white"></span></a></li>
								<li><a class="button-a red" href="<?php echo $this->_tpl_vars['adminurl']; ?>
/users_all.php?delete=1&ID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['USERID']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
"><span class="del icon-white"></span></a></li>
						    </ul>
						</td>
                    </tr>
				 <?php endfor; endif; ?>
				 <tr>
                    <td colspan="8">
                    <?php echo $this->_tpl_vars['pagelinks']; ?>

                    </td>
                 </tr>
                </tbody>
            </table>
			
    		
           </div>
           </div>
		<!--Table Styling end-->
             
        
        
        
			</div><!-- #content-->
		</div><!-- #container-->

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'administrator/left_side.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        	</div><!-- #container main-->