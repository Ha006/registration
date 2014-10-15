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

<table role="presentation" class="uiInfoTable mobile_confirm_form_table noBorder"><tbody><tr class="dataRow"><th class="label"><label for="country_code">Landskod</label></th><td class="data"><select id="country" name="country"><option value="VI">1, (+Amerikanska Jungfruöarna)</option><option value="AS">1, (+Amerikanska Samoa)</option><option value="AI">1, (+Anguilla)</option><option value="AG">1, (+Antigua)</option><option value="BS">1, (+Bahamas)</option><option value="BB">1, (+Barbados)</option><option value="BM">1, (+Bermuda)</option><option value="VG">1, (+Brittiska Jungfruöarna)</option><option value="KY">1, (+Caymanöarna)</option><option value="DM">1, (+Dominica)</option><option value="DO">1, (+Dominikanska republiken)</option><option value="GD">1, (+Grenada)</option><option value="GU">1, (+Guam)</option><option value="JM">1, (+Jamaica)</option><option value="CA">1, (+Kanada)</option><option value="MS">1, (+Montserrat)</option><option value="MP">1, (+Nordmarianerna)</option><option value="PR">1, (+Puerto Rico)</option><option value="KN">1, (+Saint Kitts och Nevis)</option><option value="LC">1, (+Saint Lucia)</option><option value="VC">1, (+Saint Vincent och Grenadinerna)</option><option value="TT">1, (+Trinidad och Tobago)</option><option value="TC">1, (+Turks- och Caicosöarna)</option><option value="US">1, (+USA)</option><option value="KZ">7, (+Kazakstan)</option><option value="RU">7, (+Ryssland)</option><option value="EG">20, (+Egypten)</option><option value="ZA">27, (+Sydafrika)</option><option value="GR">30, (+Grekland)</option><option value="NL">31, (+Nederländerna)</option><option value="BE">32, (+Belgien)</option><option value="FR">33, (+Frankrike)</option><option value="ES">34, (+Spanien)</option><option value="HU">36, (+Ungern)</option><option value="IT">39, (+Italien)</option><option value="VA">39, (+Vatikanstaten)</option><option value="RO">40, (+Rumänien)</option><option value="CH">41, (+Schweiz)</option><option value="AT">43, (+Österrike)</option><option value="GG">44, (+Guernsey)</option><option value="IM">44, (+Isle Of Man)</option><option value="JE">44, (+Jersey)</option><option value="GB">44, (+Storbritannien)</option><option value="DK">45, (+Danmark)</option><option selected="1" value="SE">46, (+Sverige)</option><option value="NO">47, (+Norge)</option><option value="PL">48, (+Polen)</option><option value="DE">49, (+Tyskland)</option><option value="PE">51, (+Peru)</option><option value="MX">52, (+Mexiko)</option><option value="CU">53, (+Kuba)</option><option value="AR">54, (+Argentina)</option><option value="BR">55, (+Brasilien)</option><option value="CL">56, (+Chile)</option><option value="CO">57, (+Colombia)</option><option value="VE">58, (+Venezuela)</option><option value="MY">60, (+Malaysia)</option><option value="AU">61, (+Australien)</option><option value="ID">62, (+Indonesien)</option><option value="PH">63, (+Filippinerna)</option><option value="NZ">64, (+Nya Zeeland)</option><option value="SG">65, (+Singapore)</option><option value="TH">66, (+Thailand)</option><option value="JP">81, (+Japan)</option><option value="KR">82, (+Sydkorea)</option><option value="VN">84, (+Vietnam)</option><option value="CN">86, (+Kina)</option><option value="TR">90, (+Turkiet)</option><option value="IN">91, (+Indien)</option><option value="PK">92, (+Pakistan)</option><option value="AF">93, (+Afghanistan)</option><option value="LK">94, (+Sri Lanka)</option><option value="MM">95, (+Myanmar/Burma)</option><option value="IR">98, (+Iran)</option><option value="SS">211, (+Sydsudan)</option><option value="MA">212, (+Marocko)</option><option value="EH">212, (+Västsahara)</option><option value="DZ">213, (+Algeriet)</option><option value="TN">216, (+Tunisien)</option><option value="LY">218, (+Libyen)</option><option value="GM">220, (+Gambia)</option><option value="SN">221, (+Senegal)</option><option value="MR">222, (+Mauretanien)</option><option value="ML">223, (+Mali)</option><option value="GN">224, (+Guinea)</option><option value="CI">225, (+Elfenbenskusten)</option><option value="BF">226, (+Burkina Faso)</option><option value="NE">227, (+Niger)</option><option value="TG">228, (+Togo)</option><option value="BJ">229, (+Benin)</option><option value="MU">230, (+Mauritius)</option><option value="LR">231, (+Liberia)</option><option value="SL">232, (+Sierra Leone)</option><option value="GH">233, (+Ghana)</option><option value="NG">234, (+Nigeria)</option><option value="TD">235, (+Tchad)</option><option value="CF">236, (+Centralafrikanska republiken)</option><option value="CM">237, (+Kamerun)</option><option value="CV">238, (+Kap Verde)</option><option value="ST">239, (+São Tomé och Príncipe)</option><option value="GQ">240, (+Ekvatorialguinea)</option><option value="GA">241, (+Gabon)</option><option value="CG">242, (+Kongo)</option><option value="CD">243, (+Demokratiska republiken Kongo)</option><option value="AO">244, (+Angola)</option><option value="GW">245, (+Guinea-Bissau)</option><option value="IO">246, (+Brittiska territoriet i Indiska oceanen)</option><option value="SC">248, (+Seychellerna)</option><option value="SD">249, (+Sudan)</option><option value="RW">250, (+Rwanda)</option><option value="ET">251, (+Etiopien)</option><option value="SO">252, (+Somalia)</option><option value="DJ">253, (+Djibouti)</option><option value="KE">254, (+Kenya)</option><option value="TZ">255, (+Tanzania)</option><option value="UG">256, (+Uganda)</option><option value="BI">257, (+Burundi)</option><option value="MZ">258, (+Moçambique)</option><option value="ZM">260, (+Zambia)</option><option value="MG">261, (+Madagaskar)</option><option value="YT">262, (+Mayotte)</option><option value="RE">262, (+Réunion)</option><option value="ZW">263, (+Zimbabwe)</option><option value="NA">264, (+Namibia)</option><option value="MW">265, (+Malawi)</option><option value="LS">266, (+Lesotho)</option><option value="BW">267, (+Botswana)</option><option value="SZ">268, (+Swaziland)</option><option value="KM">269, (+Komorerna)</option><option value="SH">290, (+Sankta Helena)</option><option value="ER">291, (+Eritrea)</option><option value="AW">297, (+Aruba)</option><option value="FO">298, (+Färöarna)</option><option value="GL">299, (+Grönland)</option><option value="GI">350, (+Gibraltar)</option><option value="PT">351, (+Portugal)</option><option value="LU">352, (+Luxemburg)</option><option value="IE">353, (+Irland)</option><option value="IS">354, (+Island)</option><option value="AL">355, (+Albanien)</option><option value="MT">356, (+Malta)</option><option value="CY">357, (+Cypern)</option><option value="FI">358, (+Finland)</option><option value="BG">359, (+Bulgarien)</option><option value="LT">370, (+Litauen)</option><option value="LV">371, (+Lettland)</option><option value="EE">372, (+Estland)</option><option value="MD">373, (+Moldavien)</option><option value="AM">374, (+Armenien)</option><option value="BY">375, (+Vitryssland)</option><option value="AD">376, (+Andorra)</option><option value="MC">377, (+Monaco)</option><option value="SM">378, (+San Marino)</option><option value="UA">380, (+Ukraina)</option><option value="XK">381, (+Kosovo)</option><option value="RS">381, (+Serbien)</option><option value="ME">382, (+Montenegro)</option><option value="HR">385, (+Kroatien)</option><option value="SI">386, (+Slovenien)</option><option value="BA">387, (+Bosnien och Hercegovina)</option><option value="MK">389, (+Makedonien)</option><option value="CZ">420, (+Tjeckien)</option><option value="SK">421, (+Slovakien)</option><option value="LI">423, (+Liechtenstein)</option><option value="FK">500, (+Falklandsöarna)</option><option value="BZ">501, (+Belize)</option><option value="GT">502, (+Guatemala)</option><option value="SV">503, (+El Salvador)</option><option value="HN">504, (+Honduras)</option><option value="NI">505, (+Nicaragua)</option><option value="CR">506, (+Costa Rica)</option><option value="PA">507, (+Panama)</option><option value="PM">508, (+Saint-Pierre och Miquelon)</option><option value="HT">509, (+Haiti)</option><option value="GP">590, (+Guadeloupe)</option><option value="MF">590, (+Saint Martin)</option><option value="BL">590, (+Saint-Barthélemy)</option><option value="BO">591, (+Bolivia)</option><option value="GY">592, (+Guyana)</option><option value="EC">593, (+Ecuador)</option><option value="GF">594, (+Franska Guyana)</option><option value="PY">595, (+Paraguay)</option><option value="MQ">596, (+Martinique)</option><option value="SR">597, (+Surinam)</option><option value="UY">598, (+Uruguay)</option><option value="BQ">599, (+Bonaire, Sint Eustatius och Saba)</option><option value="CW">599, (+Curaçao)</option><option value="SX">599, (+Sint Maarten)</option><option value="TL">670, (+Östtimor)</option><option value="NF">672, (+Norfolkön)</option><option value="BN">673, (+Brunei)</option><option value="NR">674, (+Nauru)</option><option value="PG">675, (+Papua Nya Guinea)</option><option value="TO">676, (+Tonga)</option><option value="SB">677, (+Salomonöarna)</option><option value="VU">678, (+Vanuatu)</option><option value="FJ">679, (+Fiji)</option><option value="PW">680, (+Palau)</option><option value="WF">681, (+Wallis och Futuna)</option><option value="CK">682, (+Cooköarna)</option><option value="NU">683, (+Niue)</option><option value="WS">685, (+Samoa)</option><option value="KI">686, (+Kiribati)</option><option value="NC">687, (+Nya Kaledonien)</option><option value="TV">688, (+Tuvalu)</option><option value="PF">689, (+Franska Polynesien)</option><option value="TK">690, (+Tokelau)</option><option value="FM">691, (+Mikronesiska federationen)</option><option value="MH">692, (+Marshallöarna)</option><option value="KP">850, (+Nordkorea)</option><option value="HK">852, (+Hongkong)</option><option value="MO">853, (+Macao)</option><option value="KH">855, (+Kambodja)</option><option value="LA">856, (+Laos)</option><option value="BD">880, (+Bangladesh)</option><option value="TW">886, (+Taiwan)</option><option value="MV">960, (+Maldiverna)</option><option value="LB">961, (+Libanon)</option><option value="JO">962, (+Jordanien)</option><option value="SY">963, (+Syrien)</option><option value="IQ">964, (+Irak)</option><option value="KW">965, (+Kuwait)</option><option value="SA">966, (+Saudiarabien)</option><option value="YE">967, (+Jemen)</option><option value="OM">968, (+Oman)</option><option value="PS">970, (+Palestina)</option><option value="AE">971, (+Förenade Arabemiraten)</option><option value="IL">972, (+Israel)</option><option value="BH">973, (+Bahrain)</option><option value="QA">974, (+Qatar)</option><option value="BT">975, (+Bhutan)</option><option value="MN">976, (+Mongoliet)</option><option value="NP">977, (+Nepal)</option><option value="TJ">992, (+Tadzjikistan)</option><option value="TM">993, (+Turkmenistan)</option><option value="AZ">994, (+Azerbajdzjan)</option><option value="GE">995, (+Georgien)</option><option value="KG">996, (+Kirgizistan)</option><option value="UZ">998, (+Uzbekistan)</option></select><img width="16" height="11" id="loading" style="display: none" alt="" src="https://fbstatic-a.akamaihd.net/rsrc.php/v2/yb/r/GsNJNwuI-UM.gif" class="img"></td></tr><tr class="dataRow"><th class="label"><label for="cell">Telefonnummer</label></th><td class="data"><input type="text" value="" maxlength="20" size="15" name="cell"></td></tr><tr><th class="label noLabel"></th><td class="data"><label for="u_0_0" class="uiButton uiButtonConfirm"><input type="submit" id="u_0_0" value="Bekräfta"></label></td></tr></tbody></table>
