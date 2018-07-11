function select_district()
{
  
   var options='';
   var select=document.getElementById("cityselect");

   var andhra = ["Anantapur","Chittoor","East Godavari","Guntur","Krishna","Kurnool","Prakasam","Srikakulam","SriPotti Sri Ramulu Nellore",
                                    "Vishakhapatnam","Vizianagaram","West Godavari","Cudappah"];

  for (var i = 0; i < andhra.length; i++) {
      
      var opt = document.createElement('option');
      opt.value = andhra[i];
      opt.innerHTML = andhra[i];
      select.appendChild(opt);
    
  }
 
  

    var ap = ["Anjaw","Changlang","Dibang Valley","East Siang","East Kameng","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Papum Pare",
                                        "Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang"];
  
  for (var i = 0; i < ap.length; i++) {
      var opt = document.createElement('option');
      opt.value = ap[i];
      opt.innerHTML = ap[i];
      select.appendChild(opt);
  }
  
  
  

    var assam = ["Baksa","Barpeta","Bongaigaon","Cachar","Chirang","Darrang","Dhemaji","Dima Hasao","Dhubri","Dibrugarh","Goalpara","Golaghat","Hailakandi","Jorhat",
                                     "Kamrup","Kamrup Metropolitan","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Morigaon","Nagaon","Nalbari","Sivasagar","Sonitpur","Tinsukia","Udalguri"];
   
  for (var i = 0; i < assam.length; i++) {
      var opt = document.createElement('option');
      opt.value = assam[i];
      opt.innerHTML = assam[i];
      select.appendChild(opt);  
  }
  
   
    var bihar = ["Araria","Arwal","Aurangabad","Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","Jehanabad","Kaimur",
                                        "Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa",
                                        "Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];

  for (var i = 0; i < bihar.length; i++) {
      var opt = document.createElement('option');
      opt.value = bihar[i];
      opt.innerHTML = bihar[i];
      select.appendChild(opt);
  }
 

  var Chhattisgarh = ["Bastar","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Jashpur","Janjgir-Champa","Korba","Koriya","Kanker","Kabirdham (formerly Kawardha)","Mahasamund",
                                            "Narayanpur","Raigarh","Rajnandgaon","Raipur","Surajpur","Surguja"];
   
  for (var i = 0; i < Chhattisgarh.length; i++) {
      var opt = document.createElement('option');
      opt.value = Chhattisgarh[i];
      opt.innerHTML = Chhattisgarh[i];
      select.appendChild(opt);
  }

  var dadra = ["Amal","Silvassa"];
  
  for (var i = 0; i < dadra.length; i++) {
      var opt = document.createElement('option');
      opt.value = dadra[i];
      opt.innerHTML = dadra[i];
      select.appendChild(opt);
  }
  
    var daman = ["Daman","Diu"];
  for (var i = 0; i < daman.length; i++) {
      var opt = document.createElement('option');
      opt.value = daman[i];
      opt.innerHTML = daman[i];
      select.appendChild(opt);
  }
  
  
    var delhi = ["Delhi","New Delhi","North Delhi","Noida","Patparganj","Sonabarsa","South Delhi","Tughlakabad"];
  
  for (var i = 0; i < delhi.length; i++) {
      var opt = document.createElement('option');
      opt.value = delhi[i];
      opt.innerHTML = delhi[i];
      select.appendChild(opt);
  }
  
    var goa = ["Chapora","Dabolim","Madgaon","Marmugao (Marmagao)","Panaji Port","Panjim","Pellet Plant Jetty/Shiroda","Talpona","Vasco da Gama"];
   
  for (var i = 0; i < goa.length; i++) {
      var opt = document.createElement('option');
      opt.value = goa[i];
      opt.innerHTML = goa[i];
      select.appendChild(opt);
  }
  
  
 
    var gujarat = ["Ahmedabad","Amreli district","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Dahod","Dang","Gandhinagar","Jamnagar","Junagadh",
                                        "Kutch","Kheda","Mehsana","Narmada","Navsari","Patan","Panchmahal","Porbandar","Rajkot","Sabarkantha","Surendranagar","Surat","Tapi","Vadodara","Valsad"];
  
  for (var i = 0; i < gujarat.length; i++) {
      var opt = document.createElement('option');
      opt.value = gujarat[i];
      opt.innerHTML = gujarat[i];
      select.appendChild(opt);
  }
  
  
  
    var haryana = ["Ambala","Bhiwani","Faridabad","Fatehabad","Gurgaon","Hissar","Jhajjar","Jind","Karnal","Kaithal",
                                            "Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamuna Nagar"];
   
  for (var i = 0; i < haryana.length; i++) {
      var opt = document.createElement('option');
      opt.value = haryana[i];
      opt.innerHTML = haryana[i];
      select.appendChild(opt); 
  }
  
  
  

    var himachal = ["Baddi","Baitalpur","Chamba","Dharamsala","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul & Spiti","Mandi","Simla","Sirmaur","Solan","Una"];
 
  for (var i = 0; i < himachal.length; i++) {
      var opt = document.createElement('option');
      opt.value = himachal[i];
      opt.innerHTML = himachal[i];
      select.appendChild(opt);
  }
  
    var jammu = ["Jammu","Leh","Rajouri","Srinagar"];

  for (var i = 0; i < jammu.length; i++) {
      var opt = document.createElement('option');
      opt.value = jammu[i];
      opt.innerHTML = jammu[i];
      select.appendChild(opt);
    }

    var jharkhand = ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribag","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu",
                                            "Ramgarh","Ranchi","Sahibganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
 
  for (var i = 0; i < jharkhand.length; i++) {
      var opt = document.createElement('option');
      opt.value = jharkhand[i];
      opt.innerHTML = jharkhand[i];
      select.appendChild(opt);
  }

    var karnataka = ["Bagalkot","Bangalore","Bangalore Urban","Belgaum","Bellary","Bidar","Bijapur","Chamarajnagar", "Chikkamagaluru","Chikkaballapur",
                                           "Chitradurga","Davanagere","Dharwad","Dakshina Kannada","Gadag","Gulbarga","Hassan","Haveri district","Kodagu",
                                           "Kolar","Koppal","Mandya","Mysore","Manipal","Raichur","Shimoga","Tumkur","Udupi","Uttara Kannada","Ramanagara","Yadgir"];

  for (var i = 0; i < karnataka.length; i++) {
      var opt = document.createElement('option');
      opt.value = karnataka[i];
      opt.innerHTML = karnataka[i];
      select.appendChild(opt);
  }
  

    var kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thrissur","Thiruvananthapuram","Wayanad"];
 
  for (var i = 0; i < kerala.length; i++) {
      var opt = document.createElement('option');
      opt.value = kerala[i];
      opt.innerHTML = kerala[i];
      select.appendChild(opt);
  }
  
  
 
    var mp = ["Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhilai","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Dewas","Dhar","Guna","Gwalior","Hoshangabad",
                                    "Indore","Itarsi","Jabalpur","Khajuraho","Khandwa","Khargone","Malanpur","Malanpuri (Gwalior)","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Pithampur","Raipur","Raisen","Ratlam",
                                    "Rewa","Sagar","Satna","Sehore","Seoni","Shahdol","Singrauli","Ujjain"];

  for (var i = 0; i < mp.length; i++) {
      var opt = document.createElement('option');
      opt.value = mp[i];
      opt.innerHTML = mp[i];
      select.appendChild(opt);
  }
 

    var maharashtra = ["Ahmednagar","Akola","Alibag","Amaravati","Arnala","Aurangabad","Aurangabad","Bandra","Bassain","Belapur","Bhiwandi","Bhusaval","Borliai-Mandla","Chandrapur","Dahanu","Daulatabad","Dighi (Pune)","Dombivali","Goa","Jaitapur","Jalgaon",
                                             "Jawaharlal Nehru (Nhava Sheva)","Kalyan","Karanja","Kelwa","Khopoli","Kolhapur","Lonavale","Malegaon","Malwan","Manori",
                                             "Mira Bhayandar","Miraj","Mumbai (ex Bombay)","Murad","Nagapur","Nagpur","Nalasopara","Nanded","Nandgaon","Nasik","Navi Mumbai","Nhave","Osmanabad","Palghar",
                                             "Panvel","Pimpri","Pune","Ratnagiri","Sholapur","Shrirampur","Shriwardhan","Tarapur","Thana","Thane","Trombay","Varsova","Vengurla","Virar","Wada"];
 
  for (var i = 0; i < maharashtra.length; i++) {
      var opt = document.createElement('option');
      opt.value = maharashtra[i];
      opt.innerHTML = maharashtra[i];
      select.appendChild(opt);
  }
  
  

    var manipur = ["Bishnupur","Churachandpur","Chandel","Imphal East","Senapati","Tamenglong","Thoubal","Ukhrul","Imphal West"];
  
  for (var i = 0; i < manipur.length; i++) {
      var opt = document.createElement('option');
      opt.value = manipur[i];
      opt.innerHTML = manipur[i];
      select.appendChild(opt);
  }
 
  
   
    var meghalaya = ["Baghamara","Balet","Barsora","Bolanganj","Dalu","Dawki","Ghasuapara","Mahendraganj","Moreh","Ryngku","Shella Bazar","Shillong"];
  
  for (var i = 0; i < meghalaya.length; i++) {
      var opt = document.createElement('option');
      opt.value = meghalaya[i];
      opt.innerHTML = meghalaya[i];
      select.appendChild(opt);
  }
  
    var mizoram = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
 
  for (var i = 0; i < mizoram.length; i++) {
      var opt = document.createElement('option');
      opt.value = mizoram[i];
      opt.innerHTML = mizoram[i];
      select.appendChild(opt);
  }
  
  
  
    var nagaland = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
 
  for (var i = 0; i < nagaland.length; i++) {
      var opt = document.createElement('option');
      opt.value = nagaland[i];
      opt.innerHTML = nagaland[i];
      select.appendChild(opt);
  }
 
    var orissa = ["Bahabal Pur","Bhubaneswar","Chandbali","Gopalpur","Jeypore","Paradip Garh","Puri","Rourkela"];
  
  for (var i = 0; i < orissa.length; i++) {
      var opt = document.createElement('option');
      opt.value = orissa[i];
      opt.innerHTML = orissa[i];
      select.appendChild(opt);
  }
 
  
    var puducherry = ["Karaikal","Mahe","Pondicherry","Yanam"];
  
  for (var i = 0; i < puducherry.length; i++) {
      var opt = document.createElement('option');
      opt.value = puducherry[i];
      opt.innerHTML = puducherry[i];
      select.appendChild(opt);
  }
  
    var punjab = ["Amritsar","Barnala","Bathinda","Firozpur","Faridkot","Fatehgarh Sahib","Fazilka","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Sri Muktsar Sahib","Pathankot",
                                        "Patiala","Rupnagar","Ajitgarh (Mohali)","Sangrur","Shahid Bhagat Singh Nagar","Tarn Taran"];

  for (var i = 0; i < punjab.length; i++) {
      var opt = document.createElement('option');
      opt.value = punjab[i];
      opt.innerHTML = punjab[i];
      select.appendChild(opt);
  }
 
    var rajasthan = ["Ajmer","Banswara","Barmer","Barmer Rail Station","Basni","Beawar","Bharatpur","Bhilwara","Bhiwadi","Bikaner","Bongaigaon","Boranada, Jodhpur","Chittaurgarh","Fazilka","Ganganagar","Jaipur","Jaipur-Kanakpura",
                                       "Jaipur-Sitapura","Jaisalmer","Jodhpur","Jodhpur-Bhagat Ki Kothi","Jodhpur-Thar","Kardhan","Kota","Munabao Rail Station","Nagaur","Rajsamand","Sawaimadhopur","Shahdol","Shimoga","Tonk","Udaipur"];
  
  for (var i = 0; i < rajasthan.length; i++) {
      var opt = document.createElement('option');
      opt.value = rajasthan[i];
      opt.innerHTML = rajasthan[i];
      select.appendChild(opt);
  }
  

    var sikkim = ["Chamurci","Gangtok"];
   
  for (var i = 0; i < sikkim.length; i++) {
      var opt = document.createElement('option');
      opt.value = sikkim[i];
      opt.innerHTML = sikkim[i];
      select.appendChild(opt);
  }
  
  

    var tn = ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Mandapam","Nagapattinam","Nilgiris","Namakkal","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Thiruvallur","Tirupur",
                                   "Tiruchirapalli","Theni","Tirunelveli","Thanjavur","Thoothukudi","Tiruvallur","Tiruvannamalai","Vellore","Villupuram","Viruthunagar"];
  
  for (var i = 0; i < tn.length; i++) {
      var opt = document.createElement('option');
      opt.value = tn[i];
      opt.innerHTML = tn[i];
      select.appendChild(opt);
  }
  

    var telangana = ["Adilabad","Hyderabad","Karimnagar","Mahbubnagar","Medak","Nalgonda","Nizamabad","Ranga Reddy","Warangal"];

  for (var i = 0; i < telangana.length; i++) {
      var opt = document.createElement('option');
      opt.value = telangana[i];
      opt.innerHTML = telangana[i];
      select.appendChild(opt);
  }

    var tripura = ["Agartala","Dhalaighat","Kailashahar","Kamalpur","Kanchanpur","Kel Sahar Subdivision","Khowai","Khowaighat","Mahurighat","Old Raghna Bazar","Sabroom","Srimantapur"];
  
  for (var i = 0; i < tripura.length; i++) {
      var opt = document.createElement('option');
      opt.value = tripura[i];
      opt.innerHTML = tripura[i];
      select.appendChild(opt);
  }
  
  

    var up = ["Agra","Allahabad","Auraiya","Banbasa","Bareilly","Berhni","Bhadohi","Dadri","Dharchula","Gandhar","Gauriphanta","Ghaziabad","Gorakhpur","Gunji",
                                    "Jarwa","Jhulaghat (Pithoragarh)","Kanpur","Katarniyaghat","Khunwa","Loni","Lucknow","Meerut","Moradabad","Muzaffarnagar","Nepalgunj Road","Pakwara (Moradabad)",
                                    "Pantnagar","Saharanpur","Sonauli","Surajpur","Tikonia","Varanasi"];
  for (var i = 0; i < up.length; i++) {
      var opt = document.createElement('option');
      opt.value = up[i];
      opt.innerHTML = up[i];
      select.appendChild(opt);
  }
  
    var uttarakhand = ["Almora","Badrinath","Bangla","Barkot","Bazpur","Chamoli","Chopra","Dehra Dun","Dwarahat","Garhwal","Haldwani","Hardwar","Haridwar","Jamal","Jwalapur","Kalsi","Kashipur","Mall",
                                           "Mussoorie","Nahar","Naini","Pantnagar","Pauri","Pithoragarh","Rameshwar","Rishikesh","Rohni","Roorkee","Sama","Saur"];
   
  for (var i = 0; i < uttarakhand.length; i++) {
      var opt = document.createElement('option');
      opt.value = uttarakhand[i];
      opt.innerHTML = uttarakhand[i];
      select.appendChild(opt);
  }
  
  
  

    var wb = ["Alipurduar","Bankura","Bardhaman","Birbhum","Cooch Behar","Dakshin Dinajpur","Darjeeling","Hooghly","Howrah",
                                    "Jalpaiguri","Kolkata","Maldah","Murshidabad","Nadia","North 24 Parganas","Paschim Medinipur","Purba Medinipur","Purulia","South 24 Parganas","Uttar Dinajpur"];

  for (var i = 0; i < wb.length; i++) {
      var opt = document.createElement('option');
      opt.value = wb[i];
      opt.innerHTML = wb[i];
      select.appendChild(opt);
  }
  document.getElementById("demo").innerHTML="changed";
}