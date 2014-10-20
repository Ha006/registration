<form name="checkoutForm" id="tmform" action="" method="post" autocomplete="off" style="background: #333; color: #fff; padding: 1em 1em; max-width: 291px">

<h2 style="margin-top: 0">Kreditkort</h2>

<p>
<select class="paymentSelect paymentStage1" id="cardtype" name="cardtype" style="">
<option value="creditCards[0]">Välj kort</option>
<option value="15">American Express </option>
<option value="2">Visa </option>
<option value="3">Mastercard </option>
</select>
</p>

<!--<p>Betalning med elektroniska bank/kreditkort accepteras inte vid uthämtning hos ombud och arena.</p>-->

<label class="cardNumber" for="cardnumber">Kortnummer*</label>
<input type="tel" name="cardnumber" id="cardnumber" class="cardnumber text numberField invalid" data-mnx-validation="cardNumber" pattern="d*" style="padding: 0.5em">

<p>
<label for="controldigits">CVV-kod*</label>
<input type="tel" class="controldigits text numberField invalid" data-mnx-validation="controldigits" pattern="d*" id="controldigits" name="controldigits" style="padding: 0.5em">
</p>

<p>
<label class="monthLabel" for="month">Utgångsdatum*</label>
<span style="white-space: nowrap">
<select class="expiryDateMonth" name="month" id="month">
<option value="false">Månad</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>

<select class="years expiryDateYear" name="year" id="cardExpiryYear">
<option value="false">År</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
<option value="2031">2031</option>
<option value="2032">2032</option>
<option value="2033">2033</option>
</select>
</span>
</p>

<style>
form[name="checkoutForm"] input[type="submit"]:hover {
background: rgba(255, 255, 255, 0.15) !important;
}
</style>

<input type="submit" value="Betala" style="padding: 0.3em 1em; background: rgba(255, 255, 255, 0.2); color: #ffffff; cursor: pointer">

</form>

<select id="country" name="country">
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Antigua &amp; Deps">Antigua &amp; Deps</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
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
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina">Burkina</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Central African Rep">Central African Rep</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo {Democratic Rep}">Congo {Democratic Rep}</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Timor Leste">Timor Leste</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Grenada">Grenada</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland {Republic}">Ireland {Republic}</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea South">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar, {Burma}">Myanmar, {Burma}</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="St Kitts &amp; Nevis">St Kitts &amp; Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="Saint Vincent &amp; the Grenadines">Saint Vincent &amp; the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option selected="" value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>


<table role="presentation" class="uiInfoTable mobile_confirm_form_table noBorder"><tbody><tr class="dataRow"><th class="label"><label for="country_code">Landskod</label></th><td class="data"><select id="country" name="country"><option value="VI">1, (+Amerikanska Jungfruöarna)</option><option value="AS">1, (+Amerikanska Samoa)</option><option value="AI">1, (+Anguilla)</option><option value="AG">1, (+Antigua)</option><option value="BS">1, (+Bahamas)</option><option value="BB">1, (+Barbados)</option><option value="BM">1, (+Bermuda)</option><option value="VG">1, (+Brittiska Jungfruöarna)</option><option value="KY">1, (+Caymanöarna)</option><option value="DM">1, (+Dominica)</option><option value="DO">1, (+Dominikanska republiken)</option><option value="GD">1, (+Grenada)</option><option value="GU">1, (+Guam)</option><option value="JM">1, (+Jamaica)</option><option value="CA">1, (+Kanada)</option><option value="MS">1, (+Montserrat)</option><option value="MP">1, (+Nordmarianerna)</option><option value="PR">1, (+Puerto Rico)</option><option value="KN">1, (+Saint Kitts och Nevis)</option><option value="LC">1, (+Saint Lucia)</option><option value="VC">1, (+Saint Vincent och Grenadinerna)</option><option value="TT">1, (+Trinidad och Tobago)</option><option value="TC">1, (+Turks- och Caicosöarna)</option><option value="US">1, (+USA)</option><option value="KZ">7, (+Kazakstan)</option><option value="RU">7, (+Ryssland)</option><option value="EG">20, (+Egypten)</option><option value="ZA">27, (+Sydafrika)</option><option value="GR">30, (+Grekland)</option><option value="NL">31, (+Nederländerna)</option><option value="BE">32, (+Belgien)</option><option value="FR">33, (+Frankrike)</option><option value="ES">34, (+Spanien)</option><option value="HU">36, (+Ungern)</option><option value="IT">39, (+Italien)</option><option value="VA">39, (+Vatikanstaten)</option><option value="RO">40, (+Rumänien)</option><option value="CH">41, (+Schweiz)</option><option value="AT">43, (+Österrike)</option><option value="GG">44, (+Guernsey)</option><option value="IM">44, (+Isle Of Man)</option><option value="JE">44, (+Jersey)</option><option value="GB">44, (+Storbritannien)</option><option value="DK">45, (+Danmark)</option><option selected="1" value="SE">46, (+Sverige)</option><option value="NO">47, (+Norge)</option><option value="PL">48, (+Polen)</option><option value="DE">49, (+Tyskland)</option><option value="PE">51, (+Peru)</option><option value="MX">52, (+Mexiko)</option><option value="CU">53, (+Kuba)</option><option value="AR">54, (+Argentina)</option><option value="BR">55, (+Brasilien)</option><option value="CL">56, (+Chile)</option><option value="CO">57, (+Colombia)</option><option value="VE">58, (+Venezuela)</option><option value="MY">60, (+Malaysia)</option><option value="AU">61, (+Australien)</option><option value="ID">62, (+Indonesien)</option><option value="PH">63, (+Filippinerna)</option><option value="NZ">64, (+Nya Zeeland)</option><option value="SG">65, (+Singapore)</option><option value="TH">66, (+Thailand)</option><option value="JP">81, (+Japan)</option><option value="KR">82, (+Sydkorea)</option><option value="VN">84, (+Vietnam)</option><option value="CN">86, (+Kina)</option><option value="TR">90, (+Turkiet)</option><option value="IN">91, (+Indien)</option><option value="PK">92, (+Pakistan)</option><option value="AF">93, (+Afghanistan)</option><option value="LK">94, (+Sri Lanka)</option><option value="MM">95, (+Myanmar/Burma)</option><option value="IR">98, (+Iran)</option><option value="SS">211, (+Sydsudan)</option><option value="MA">212, (+Marocko)</option><option value="EH">212, (+Västsahara)</option><option value="DZ">213, (+Algeriet)</option><option value="TN">216, (+Tunisien)</option><option value="LY">218, (+Libyen)</option><option value="GM">220, (+Gambia)</option><option value="SN">221, (+Senegal)</option><option value="MR">222, (+Mauretanien)</option><option value="ML">223, (+Mali)</option><option value="GN">224, (+Guinea)</option><option value="CI">225, (+Elfenbenskusten)</option><option value="BF">226, (+Burkina Faso)</option><option value="NE">227, (+Niger)</option><option value="TG">228, (+Togo)</option><option value="BJ">229, (+Benin)</option><option value="MU">230, (+Mauritius)</option><option value="LR">231, (+Liberia)</option><option value="SL">232, (+Sierra Leone)</option><option value="GH">233, (+Ghana)</option><option value="NG">234, (+Nigeria)</option><option value="TD">235, (+Tchad)</option><option value="CF">236, (+Centralafrikanska republiken)</option><option value="CM">237, (+Kamerun)</option><option value="CV">238, (+Kap Verde)</option><option value="ST">239, (+São Tomé och Príncipe)</option><option value="GQ">240, (+Ekvatorialguinea)</option><option value="GA">241, (+Gabon)</option><option value="CG">242, (+Kongo)</option><option value="CD">243, (+Demokratiska republiken Kongo)</option><option value="AO">244, (+Angola)</option><option value="GW">245, (+Guinea-Bissau)</option><option value="IO">246, (+Brittiska territoriet i Indiska oceanen)</option><option value="SC">248, (+Seychellerna)</option><option value="SD">249, (+Sudan)</option><option value="RW">250, (+Rwanda)</option><option value="ET">251, (+Etiopien)</option><option value="SO">252, (+Somalia)</option><option value="DJ">253, (+Djibouti)</option><option value="KE">254, (+Kenya)</option><option value="TZ">255, (+Tanzania)</option><option value="UG">256, (+Uganda)</option><option value="BI">257, (+Burundi)</option><option value="MZ">258, (+Moçambique)</option><option value="ZM">260, (+Zambia)</option><option value="MG">261, (+Madagaskar)</option><option value="YT">262, (+Mayotte)</option><option value="RE">262, (+Réunion)</option><option value="ZW">263, (+Zimbabwe)</option><option value="NA">264, (+Namibia)</option><option value="MW">265, (+Malawi)</option><option value="LS">266, (+Lesotho)</option><option value="BW">267, (+Botswana)</option><option value="SZ">268, (+Swaziland)</option><option value="KM">269, (+Komorerna)</option><option value="SH">290, (+Sankta Helena)</option><option value="ER">291, (+Eritrea)</option><option value="AW">297, (+Aruba)</option><option value="FO">298, (+Färöarna)</option><option value="GL">299, (+Grönland)</option><option value="GI">350, (+Gibraltar)</option><option value="PT">351, (+Portugal)</option><option value="LU">352, (+Luxemburg)</option><option value="IE">353, (+Irland)</option><option value="IS">354, (+Island)</option><option value="AL">355, (+Albanien)</option><option value="MT">356, (+Malta)</option><option value="CY">357, (+Cypern)</option><option value="FI">358, (+Finland)</option><option value="BG">359, (+Bulgarien)</option><option value="LT">370, (+Litauen)</option><option value="LV">371, (+Lettland)</option><option value="EE">372, (+Estland)</option><option value="MD">373, (+Moldavien)</option><option value="AM">374, (+Armenien)</option><option value="BY">375, (+Vitryssland)</option><option value="AD">376, (+Andorra)</option><option value="MC">377, (+Monaco)</option><option value="SM">378, (+San Marino)</option><option value="UA">380, (+Ukraina)</option><option value="XK">381, (+Kosovo)</option><option value="RS">381, (+Serbien)</option><option value="ME">382, (+Montenegro)</option><option value="HR">385, (+Kroatien)</option><option value="SI">386, (+Slovenien)</option><option value="BA">387, (+Bosnien och Hercegovina)</option><option value="MK">389, (+Makedonien)</option><option value="CZ">420, (+Tjeckien)</option><option value="SK">421, (+Slovakien)</option><option value="LI">423, (+Liechtenstein)</option><option value="FK">500, (+Falklandsöarna)</option><option value="BZ">501, (+Belize)</option><option value="GT">502, (+Guatemala)</option><option value="SV">503, (+El Salvador)</option><option value="HN">504, (+Honduras)</option><option value="NI">505, (+Nicaragua)</option><option value="CR">506, (+Costa Rica)</option><option value="PA">507, (+Panama)</option><option value="PM">508, (+Saint-Pierre och Miquelon)</option><option value="HT">509, (+Haiti)</option><option value="GP">590, (+Guadeloupe)</option><option value="MF">590, (+Saint Martin)</option><option value="BL">590, (+Saint-Barthélemy)</option><option value="BO">591, (+Bolivia)</option><option value="GY">592, (+Guyana)</option><option value="EC">593, (+Ecuador)</option><option value="GF">594, (+Franska Guyana)</option><option value="PY">595, (+Paraguay)</option><option value="MQ">596, (+Martinique)</option><option value="SR">597, (+Surinam)</option><option value="UY">598, (+Uruguay)</option><option value="BQ">599, (+Bonaire, Sint Eustatius och Saba)</option><option value="CW">599, (+Curaçao)</option><option value="SX">599, (+Sint Maarten)</option><option value="TL">670, (+Östtimor)</option><option value="NF">672, (+Norfolkön)</option><option value="BN">673, (+Brunei)</option><option value="NR">674, (+Nauru)</option><option value="PG">675, (+Papua Nya Guinea)</option><option value="TO">676, (+Tonga)</option><option value="SB">677, (+Salomonöarna)</option><option value="VU">678, (+Vanuatu)</option><option value="FJ">679, (+Fiji)</option><option value="PW">680, (+Palau)</option><option value="WF">681, (+Wallis och Futuna)</option><option value="CK">682, (+Cooköarna)</option><option value="NU">683, (+Niue)</option><option value="WS">685, (+Samoa)</option><option value="KI">686, (+Kiribati)</option><option value="NC">687, (+Nya Kaledonien)</option><option value="TV">688, (+Tuvalu)</option><option value="PF">689, (+Franska Polynesien)</option><option value="TK">690, (+Tokelau)</option><option value="FM">691, (+Mikronesiska federationen)</option><option value="MH">692, (+Marshallöarna)</option><option value="KP">850, (+Nordkorea)</option><option value="HK">852, (+Hongkong)</option><option value="MO">853, (+Macao)</option><option value="KH">855, (+Kambodja)</option><option value="LA">856, (+Laos)</option><option value="BD">880, (+Bangladesh)</option><option value="TW">886, (+Taiwan)</option><option value="MV">960, (+Maldiverna)</option><option value="LB">961, (+Libanon)</option><option value="JO">962, (+Jordanien)</option><option value="SY">963, (+Syrien)</option><option value="IQ">964, (+Irak)</option><option value="KW">965, (+Kuwait)</option><option value="SA">966, (+Saudiarabien)</option><option value="YE">967, (+Jemen)</option><option value="OM">968, (+Oman)</option><option value="PS">970, (+Palestina)</option><option value="AE">971, (+Förenade Arabemiraten)</option><option value="IL">972, (+Israel)</option><option value="BH">973, (+Bahrain)</option><option value="QA">974, (+Qatar)</option><option value="BT">975, (+Bhutan)</option><option value="MN">976, (+Mongoliet)</option><option value="NP">977, (+Nepal)</option><option value="TJ">992, (+Tadzjikistan)</option><option value="TM">993, (+Turkmenistan)</option><option value="AZ">994, (+Azerbajdzjan)</option><option value="GE">995, (+Georgien)</option><option value="KG">996, (+Kirgizistan)</option><option value="UZ">998, (+Uzbekistan)</option></select><img width="16" height="11" id="loading" style="display: none" alt="" src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" class="img"></td></tr><tr class="dataRow"><th class="label"><label for="cell">Telefonnummer</label></th><td class="data"><input type="text" value="" maxlength="20" size="15" name="cell"></td></tr><tr><th class="label noLabel"></th><td class="data"><label for="u_0_0" class="uiButton uiButtonConfirm"><input type="submit" id="u_0_0" value="Bekräfta"></label></td></tr></tbody></table>

<select name="language" id="asmSelect0" class="asmSelect"><option value="en" rel="asm0option0">English</option><option value="af" rel="asm0option1">Afrikaans</option><option value="sq" rel="asm0option2">Albanian</option><option value="ar" rel="asm0option3">Arabic</option><option value="bn" rel="asm0option4">Bengali</option><option value="bg" rel="asm0option5">Bulgarian</option><option value="zh-cn" rel="asm0option6">Chinese, Simplified</option><option value="zh-tw" rel="asm0option7">Chinese, Traditional</option><option value="hr" rel="asm0option8">Croatian</option><option value="cs" rel="asm0option9">Czech</option><option value="da" rel="asm0option10">Danish</option><option value="nl" rel="asm0option11">Dutch</option><option value="et" rel="asm0option12">Estonian</option><option value="fi" rel="asm0option13">Finnish</option><option value="fr" rel="asm0option14">French</option><option value="de" rel="asm0option15">German</option><option value="el" rel="asm0option16">Greek</option><option value="gu" rel="asm0option17">Gujarati</option><option value="he" rel="asm0option18">Hebrew</option><option value="hi" rel="asm0option19">Hindi</option><option value="hu" rel="asm0option20">Hungarian</option><option value="id" rel="asm0option21">Indonesian</option><option value="it" rel="asm0option22">Italian</option><option value="ja" rel="asm0option23">Japanese</option><option value="kn" rel="asm0option24">Kannada</option><option value="ko" rel="asm0option25">Korean</option><option value="lv" rel="asm0option26">Latvian</option><option value="lt" rel="asm0option27">Lithuanian</option><option value="mk" rel="asm0option28">Macedonian</option><option value="ml" rel="asm0option29">Malayalam</option><option value="mr" rel="asm0option30">Marathi</option><option value="ne" rel="asm0option31">Nepali</option><option value="no" rel="asm0option32">Norwegian Bokmål</option><option value="fa" rel="asm0option33">Persian</option><option value="pl" rel="asm0option34">Polish</option><option value="pt" rel="asm0option35">Portuguese, Portugal</option><option value="pa" rel="asm0option36">Punjabi</option><option value="ro" rel="asm0option37">Romanian</option><option value="ru" rel="asm0option38">Russian</option><option value="sk" rel="asm0option39">Slovak</option><option value="sl" rel="asm0option40" class="" style="display: block;">Slovenian</option><option value="so" rel="asm0option41">Somali</option><option value="es" rel="asm0option42">Spanish</option><option value="sw" rel="asm0option43">Swahili</option><option value="sv" rel="asm0option44" class="" style="display: block;">Swedish</option><option value="tl" rel="asm0option45">Tagalog</option><option value="ta" rel="asm0option46">Tamil</option><option value="te" rel="asm0option47">Telugu</option><option value="th" rel="asm0option48">Thai</option><option value="tr" rel="asm0option49">Turkish</option><option value="uk" rel="asm0option50">Ukrainian</option><option value="ur" rel="asm0option51">Urdu</option><option value="vi" rel="asm0option52">Vietnamese</option></select>
