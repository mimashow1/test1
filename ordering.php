<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/main.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Raleway" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Make an order</title>
  </head>
  <body>
    <div id="header">
      <a href="home.php">Bestra</a>
    </div>


    <ul id="menu">
      <li> <a href="home.php">Home</a> </li>
      <li> <a href="journeys.php">Journeys</a> </li>
      <li> <a href="#" class="active">Make an order</a> </li>
      <li> <a href="photo-gallery.php">Photo gallery</a> </li>
      <li> <a href="video-gallery.php">Video gallery</a> </li>
      <li> <a href="contacts.php">Contacts</a> </li>
    </ul>


    <div id="ordering" class="body">
  		<h1>Ordering</h1>
  		<form name="order" method="post" action="">
  			<h3>Name:</h3>
  			<input type="name">

  			<h3>Surname:</h3>
  			<input type="text">

  			<h3>Phone:</h3>
  			<input type="text" value="+371 ">

  			<h3>E-mail:</h3>
  			<input type="email">

        <h3>Places:</h3>
        <p>From:</p>
        <select> <!--From-->
          <option selected disabled>Select country</option>
        	<option value="AF">Afghanistan</option>
        	<option value="AX">Åland Islands</option>
        	<option value="AL">Albania</option>
        	<option value="DZ">Algeria</option>
        	<option value="AS">American Samoa</option>
        	<option value="AD">Andorra</option>
        	<option value="AO">Angola</option>
        	<option value="AI">Anguilla</option>
        	<option value="AQ">Antarctica</option>
        	<option value="AG">Antigua and Barbuda</option>
        	<option value="AR">Argentina</option>
        	<option value="AM">Armenia</option>
        	<option value="AW">Aruba</option>
        	<option value="AU">Australia</option>
        	<option value="AT">Austria</option>
        	<option value="AZ">Azerbaijan</option>
        	<option value="BS">Bahamas</option>
        	<option value="BH">Bahrain</option>
        	<option value="BD">Bangladesh</option>
        	<option value="BB">Barbados</option>
        	<option value="BY">Belarus</option>
        	<option value="BE">Belgium</option>
        	<option value="BZ">Belize</option>
        	<option value="BJ">Benin</option>
        	<option value="BM">Bermuda</option>
        	<option value="BT">Bhutan</option>
        	<option value="BO">Bolivia, Plurinational State of</option>
        	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
        	<option value="BA">Bosnia and Herzegovina</option>
        	<option value="BW">Botswana</option>
        	<option value="BV">Bouvet Island</option>
        	<option value="BR">Brazil</option>
        	<option value="IO">British Indian Ocean Territory</option>
        	<option value="BN">Brunei Darussalam</option>
        	<option value="BG">Bulgaria</option>
        	<option value="BF">Burkina Faso</option>
        	<option value="BI">Burundi</option>
        	<option value="KH">Cambodia</option>
        	<option value="CM">Cameroon</option>
        	<option value="CA">Canada</option>
        	<option value="CV">Cape Verde</option>
        	<option value="KY">Cayman Islands</option>
        	<option value="CF">Central African Republic</option>
        	<option value="TD">Chad</option>
        	<option value="CL">Chile</option>
        	<option value="CN">China</option>
        	<option value="CX">Christmas Island</option>
        	<option value="CC">Cocos (Keeling) Islands</option>
        	<option value="CO">Colombia</option>
        	<option value="KM">Comoros</option>
        	<option value="CG">Congo</option>
        	<option value="CD">Congo, the Democratic Republic of the</option>
        	<option value="CK">Cook Islands</option>
        	<option value="CR">Costa Rica</option>
        	<option value="CI">Côte d'Ivoire</option>
        	<option value="HR">Croatia</option>
        	<option value="CU">Cuba</option>
        	<option value="CW">Curaçao</option>
        	<option value="CY">Cyprus</option>
        	<option value="CZ">Czech Republic</option>
        	<option value="DK">Denmark</option>
        	<option value="DJ">Djibouti</option>
        	<option value="DM">Dominica</option>
        	<option value="DO">Dominican Republic</option>
        	<option value="EC">Ecuador</option>
        	<option value="EG">Egypt</option>
        	<option value="SV">El Salvador</option>
        	<option value="GQ">Equatorial Guinea</option>
        	<option value="ER">Eritrea</option>
        	<option value="EE">Estonia</option>
        	<option value="ET">Ethiopia</option>
        	<option value="FK">Falkland Islands (Malvinas)</option>
        	<option value="FO">Faroe Islands</option>
        	<option value="FJ">Fiji</option>
        	<option value="FI">Finland</option>
        	<option value="FR">France</option>
        	<option value="GF">French Guiana</option>
        	<option value="PF">French Polynesia</option>
        	<option value="TF">French Southern Territories</option>
        	<option value="GA">Gabon</option>
        	<option value="GM">Gambia</option>
        	<option value="GE">Georgia</option>
        	<option value="DE">Germany</option>
        	<option value="GH">Ghana</option>
        	<option value="GI">Gibraltar</option>
        	<option value="GR">Greece</option>
        	<option value="GL">Greenland</option>
        	<option value="GD">Grenada</option>
        	<option value="GP">Guadeloupe</option>
        	<option value="GU">Guam</option>
        	<option value="GT">Guatemala</option>
        	<option value="GG">Guernsey</option>
        	<option value="GN">Guinea</option>
        	<option value="GW">Guinea-Bissau</option>
        	<option value="GY">Guyana</option>
        	<option value="HT">Haiti</option>
        	<option value="HM">Heard Island and McDonald Islands</option>
        	<option value="VA">Holy See (Vatican City State)</option>
        	<option value="HN">Honduras</option>
        	<option value="HK">Hong Kong</option>
        	<option value="HU">Hungary</option>
        	<option value="IS">Iceland</option>
        	<option value="IN">India</option>
        	<option value="ID">Indonesia</option>
        	<option value="IR">Iran, Islamic Republic of</option>
        	<option value="IQ">Iraq</option>
        	<option value="IE">Ireland</option>
        	<option value="IM">Isle of Man</option>
        	<option value="IL">Israel</option>
        	<option value="IT">Italy</option>
        	<option value="JM">Jamaica</option>
        	<option value="JP">Japan</option>
        	<option value="JE">Jersey</option>
        	<option value="JO">Jordan</option>
        	<option value="KZ">Kazakhstan</option>
        	<option value="KE">Kenya</option>
        	<option value="KI">Kiribati</option>
        	<option value="KP">Korea, Democratic People's Republic of</option>
        	<option value="KR">Korea, Republic of</option>
        	<option value="KW">Kuwait</option>
        	<option value="KG">Kyrgyzstan</option>
        	<option value="LA">Lao People's Democratic Republic</option>
        	<option value="LV">Latvia</option>
        	<option value="LB">Lebanon</option>
        	<option value="LS">Lesotho</option>
        	<option value="LR">Liberia</option>
        	<option value="LY">Libya</option>
        	<option value="LI">Liechtenstein</option>
        	<option value="LT">Lithuania</option>
        	<option value="LU">Luxembourg</option>
        	<option value="MO">Macao</option>
        	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
        	<option value="MG">Madagascar</option>
        	<option value="MW">Malawi</option>
        	<option value="MY">Malaysia</option>
        	<option value="MV">Maldives</option>
        	<option value="ML">Mali</option>
        	<option value="MT">Malta</option>
        	<option value="MH">Marshall Islands</option>
        	<option value="MQ">Martinique</option>
        	<option value="MR">Mauritania</option>
        	<option value="MU">Mauritius</option>
        	<option value="YT">Mayotte</option>
        	<option value="MX">Mexico</option>
        	<option value="FM">Micronesia, Federated States of</option>
        	<option value="MD">Moldova, Republic of</option>
        	<option value="MC">Monaco</option>
        	<option value="MN">Mongolia</option>
        	<option value="ME">Montenegro</option>
        	<option value="MS">Montserrat</option>
        	<option value="MA">Morocco</option>
        	<option value="MZ">Mozambique</option>
        	<option value="MM">Myanmar</option>
        	<option value="NA">Namibia</option>
        	<option value="NR">Nauru</option>
        	<option value="NP">Nepal</option>
        	<option value="NL">Netherlands</option>
        	<option value="NC">New Caledonia</option>
        	<option value="NZ">New Zealand</option>
        	<option value="NI">Nicaragua</option>
        	<option value="NE">Niger</option>
        	<option value="NG">Nigeria</option>
        	<option value="NU">Niue</option>
        	<option value="NF">Norfolk Island</option>
        	<option value="MP">Northern Mariana Islands</option>
        	<option value="NO">Norway</option>
        	<option value="OM">Oman</option>
        	<option value="PK">Pakistan</option>
        	<option value="PW">Palau</option>
        	<option value="PS">Palestinian Territory, Occupied</option>
        	<option value="PA">Panama</option>
        	<option value="PG">Papua New Guinea</option>
        	<option value="PY">Paraguay</option>
        	<option value="PE">Peru</option>
        	<option value="PH">Philippines</option>
        	<option value="PN">Pitcairn</option>
        	<option value="PL">Poland</option>
        	<option value="PT">Portugal</option>
        	<option value="PR">Puerto Rico</option>
        	<option value="QA">Qatar</option>
        	<option value="RE">Réunion</option>
        	<option value="RO">Romania</option>
        	<option value="RU">Russian Federation</option>
        	<option value="RW">Rwanda</option>
        	<option value="BL">Saint Barthélemy</option>
        	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
        	<option value="KN">Saint Kitts and Nevis</option>
        	<option value="LC">Saint Lucia</option>
        	<option value="MF">Saint Martin (French part)</option>
        	<option value="PM">Saint Pierre and Miquelon</option>
        	<option value="VC">Saint Vincent and the Grenadines</option>
        	<option value="WS">Samoa</option>
        	<option value="SM">San Marino</option>
        	<option value="ST">Sao Tome and Principe</option>
        	<option value="SA">Saudi Arabia</option>
        	<option value="SN">Senegal</option>
        	<option value="RS">Serbia</option>
        	<option value="SC">Seychelles</option>
        	<option value="SL">Sierra Leone</option>
        	<option value="SG">Singapore</option>
        	<option value="SX">Sint Maarten (Dutch part)</option>
        	<option value="SK">Slovakia</option>
        	<option value="SI">Slovenia</option>
        	<option value="SB">Solomon Islands</option>
        	<option value="SO">Somalia</option>
        	<option value="ZA">South Africa</option>
        	<option value="GS">South Georgia and the South Sandwich Islands</option>
        	<option value="SS">South Sudan</option>
        	<option value="ES">Spain</option>
        	<option value="LK">Sri Lanka</option>
        	<option value="SD">Sudan</option>
        	<option value="SR">Suriname</option>
        	<option value="SJ">Svalbard and Jan Mayen</option>
        	<option value="SZ">Swaziland</option>
        	<option value="SE">Sweden</option>
        	<option value="CH">Switzerland</option>
        	<option value="SY">Syrian Arab Republic</option>
        	<option value="TW">Taiwan, Province of China</option>
        	<option value="TJ">Tajikistan</option>
        	<option value="TZ">Tanzania, United Republic of</option>
        	<option value="TH">Thailand</option>
        	<option value="TL">Timor-Leste</option>
        	<option value="TG">Togo</option>
        	<option value="TK">Tokelau</option>
        	<option value="TO">Tonga</option>
        	<option value="TT">Trinidad and Tobago</option>
        	<option value="TN">Tunisia</option>
        	<option value="TR">Turkey</option>
        	<option value="TM">Turkmenistan</option>
        	<option value="TC">Turks and Caicos Islands</option>
        	<option value="TV">Tuvalu</option>
        	<option value="UG">Uganda</option>
        	<option value="UA">Ukraine</option>
        	<option value="AE">United Arab Emirates</option>
        	<option value="GB">United Kingdom</option>
        	<option value="US">United States</option>
        	<option value="UM">United States Minor Outlying Islands</option>
        	<option value="UY">Uruguay</option>
        	<option value="UZ">Uzbekistan</option>
        	<option value="VU">Vanuatu</option>
        	<option value="VE">Venezuela, Bolivarian Republic of</option>
        	<option value="VN">Viet Nam</option>
        	<option value="VG">Virgin Islands, British</option>
        	<option value="VI">Virgin Islands, U.S.</option>
        	<option value="WF">Wallis and Futuna</option>
        	<option value="EH">Western Sahara</option>
        	<option value="YE">Yemen</option>
        	<option value="ZM">Zambia</option>
        	<option value="ZW">Zimbabwe</option>
        </select>
        <p>To:</p>
        <select> <!--To-->
          <option selected disabled>Select country</option>
        	<option value="ATH">Athens</option>
        	<option value="BAR">Barcelona</option>
          <option value="BER">Berlin</option>
          <option value="IST">Istanbul</option>
          <option value="LON">London</option>
          <option value="MOS">Moscow</option>
          <option value="PAR">Paris</option>
          <option value="ROM">Rome</option>
        </select>

        <h3>Dates:</h3>
        <p>From:</p> <input type="date" value="From">
        <p>Till:</p> <input type="date" value="Till">

        <h3>Type of journey:</h3>
        <div id="radio_list">
          <ul id="first_radio">
            <li>Budgetary</li>
            <li><input class="radio" type="radio" name="journey_type"></li>
          </ul>

          <ul>
            <li>Normal</li>
            <li><input class="radio" type="radio" name="journey_type"></li>
          </ul>

          <ul>
            <li>Business</li>
            <li><input class="radio" type="radio" name="journey_type"></li>
          </ul>
        </div>

        <div id="btn_ordering">
          <input class="btn" type="submit" name="" value="SUBMIT">
        </div>
  		</form>
    </div>


    <div id="footer">
      <div id="sponsors-partners">
        <div class="partner">
          <img src="img/airbaltic.png" alt="">
          <p>airBaltic, legally incorporated as AS Air Baltic Corporation, is a
          state-owned Latvian low-cost carrier and the country's flag carrier,
          with its head office on the grounds of Riga International Airport in
          Mārupe municipality near Riga. Its main hub is at Riga International
          Airport with further bases at Tallinn Airport and Vilnius Airport.</p>
        </div>

        <div class="partner">
          <img src="img/ryanair.png" alt="">
          <p>Ryanair is an Irish low-cost airline founded in 1984, headquartered
          in Swords, Dublin, Ireland, with its primary operational bases at Dublin
          and London Stansted airports. In 2016, Ryanair was the largest European
          airline by scheduled passengers flown, and carried more international
          passengers than any other airline.</p>
        </div>

        <div class="partner">
          <img src="img/wizzair.png" alt="">
          <p>Wizz Air is a Hungarian low-cost airline with its head office in
          Budapest. The airline serves many cities across Europe, Israel and the
          United Arab Emirates. It has the largest fleet of any Hungarian airline,
          although it is not a flag carrier, and currently serves 42 countries.
          Its Jersey based parent company, Wizz Air Holdings Plc, is listed on the
          London Stock Exchange and is a constituent of the FTSE 250 Index.</p>
        </div>


      </div>

      <div id="links-footer">
        <a href="https://facebook.com">  <img src="img/FB.png" alt="Facebook"> </a>
        <a href="https://vk.com">  <img src="img/VK.png" alt="Vkontakte"> </a>
        <a href="https://instagram.com">  <img src="img/Instagram.png" alt="Instagram"> </a>
      </div>
    </div>
  </body>
</html>
