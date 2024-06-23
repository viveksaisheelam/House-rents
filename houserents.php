<?php
echo "succesfully attached";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>House price</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="back">
            <div class="nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Suggestions</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.linkedin.com/in/srilaxmi-reddy-44299b272/" target="_blank"><p class="drpdwn">Srilaxmi</p></a>
                            <a class="dropdown-item" href="https://www.linkedin.com/in/preetham-sabasu-ba432225b/" target="_blank" ><p class="drpdwn">Preetham</p></a>
                            <a class="dropdown-item" href="https://www.linkedin.com/in/vivek-sai-sheelam-91a33925b/" target="_blank" ><p class="drpdwn">Vivek</p></a>
                            <a class="dropdown-item" href="https://www.linkedin.com/in/manaswini-matcha-112470270/" target="_blank"><p class="drpdwn">Manaswini</p></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content">
                <h1 style="font-family: papyrus; font-weight:bolder;">Homely Rents Insight</h1>
                <p style="font-family: cursive;">Where location meets foresight: <br>Predicting house rents accurately for your chosen neighborhoods.<br>
                Make confident rental decisions with our innovative platform tailored to your desired living areas.</p>
            </div>
                <div class="drop">
                    <form class="dropdown" method="post" action="houserents.php">
                        <select id="Location" size="1">
                            <option value="" selected="selected">-- Select location --</option>
                        </select>
                        <select id="Area" size="1">
                            <option value="" selected="selected">-- Select Area --</option>
                        </select>
                    </form>
                    <form class="cost">
                        <select id="Price" size="1">
                            <option value="">-- Select Price --</option>
                            <option value="below 10000">Below ₹10,000</option>
                            <option value="10000-20000">₹10,000-₹20,000</option>
                            <option value="20000-30000">₹20,000-₹30,000</option>
                            <option value="30000-40000">₹30,000-₹40,000</option>
                            <option value="40000-50000">₹40,000-₹50,000</option>
                        </select>
                    </form>
                </div>
                <div class="sub">
                    <form>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                <script>
                    const locationInfo = {
                        Ameerpet: ["Ameerpet", "Begumpet", "SR Nagar", "Prakash Nagar", "Punjagutta", "Balkampet"],
                        Sanathnagar: ["Sanathnagar", "BharatNagar", "Erragadda", "Borabanda", "Moti Nagar", "Nehru Nagar"],
                        Khairatabad: ["Khairtabad", "Somajiguda", "Raj Bhavan Road", "Lakdikapool", "Saifabad,A.C. Guards", "Masab Tank", "Chintal Basti"],
                        Musheerabad: ["Musheerabad","Chikkadpally","Himayatnagar","Ashok Nagar","Domalguda","Hyderguda","Ramnagar","Azamabad","Adikmet","Nallakunta","Shanker Mutt","RTC X Roads",
                                        "Gandhi Nagar","Bagh Lingampally","Vidyanagar","nayaranguda"],
                        Amberpet: ["Amberpet","Tilaknagar","Golnaka","Barkatpura","Shivam Road","Jamia Osmania","Kachiguda","Badichowdi"],
                        Nampally: ["Nampally","Abids","Aghapura","Koti","Bank Street","Boggulkunta"],
                        Secunderabad: ["Secunderabad","Chilkalguda","Kavadiguda","MG Road (James Street)","Madannapet","Minister Road","Mylargadda","Namalagundu","Padmarao Nagar","Pan bazar",
                                        "Parsigutta","Patny","Rani Gunj","RP Road","Sindhi Colony","Sitaphalmandi","Tarnaka","Warsiguda","Addagutta","Tukaramgate"],
                        Secunderabad_Cantonment: ["Secunderabad Cantonment","Bowenpally","Karkhana","Marredpally","Sikh Village","Trimulgherry","Vikrampuri"],
                        Financial_District: ["Gachibowli","Nanakramguda"],
                        HITEC_City: ["HITEC City",,"Madhapur","Kondapur","Kothaguda"],
                        Jubilee_Hills: ["Jubilee Hills","Banjara Hills","Film Nagar","Yousufguda","Srinagar colony"],
                        Kukatpally: ["Kukatpally","Allwyn Colony","Bachupally","KPHB","Nizampet","Pragathi Nagar","Moosapet","Mallampet"],
                        Serilingampally: ["Serilingampally","Chanda Nagar","Allwyn Colony","Hafeezpet","Madinaguda","Miyapur"],
                        Patancheru: ["Patancheru","BHEL Township","RC Puram","Ameenpur","Beeramguda","Kistareddypet","IDA Bollaram","Medical Devices Park, Hyderabad"],
                        Old_City: ["Afzal Gunj","Aliabad","Alijah Kotla","Asif Nagar","Azampura","Barkas","Bazarghat","Begum Bazaar","Chaderghat","Chanchalguda","Chandrayan Gutta","Chatta Bazaar","Dabirpura","Dar-ul-Shifa",
                                    "Dhoolpet","Edi Bazar","Falaknuma","Karwan","Malakpet","Moghalpura","Jahanuma","Laad Bazaar","Lal Darwaza","Madina, Hyderabad","Maharajgunj","Mehboob ki Mehendi",
                                    "Mir Alam Tank","Mozamjahi Market","Nawab Saheb Kunta","Nayapul","Noorkhan Bazar","Pisal Banda","Purana pul","Putlibowli","Rein Bazar","Shahran Market","Shah Ali Banda",
                                    "Sultan Bazar","Udden Gadda","Uppuguda","Yakutpura"],
                        Balanagar: ["Balanagar","Fateh Nagar","Ferozguda","Old Bowenpally","Hasmathpet"],     
                        Qutbullapur: ["Quthbullapur","Jeedimetla","Jagadgirigutta","Suraram","Pet Basheerabad"],      
                        Medchal: ["Kompally","Medchal","Kandlakoya"],
                        Alwal: ["Alwal","Lothkunta","Old Alwal","Macha Bollaram","Venkatapuram","Shamirpet"],
                        Malkajgiri: ["Malkajgiri","Anandbagh","Ammuguda","Gautham Nagar","Kakatiya Nagar","Vinayak Nagar","Moula-Ali","Neredmet","Old Neredmet","Safilguda","Sainikpuri","Yapral"],
                        Kapra: ["Kapra","A. S. Rao Nagar","ECIL 'X' Roads","Kamala Nagar","Kushaiguda","Cherlapally"],
                        Uppal_Kalan: ["Uppal","Habsiguda","Ramanthapur","Boduppal","Nagole","Nacharam","Mallapur"],
                        Ghatkesar: ["Ghatkesar","Peerzadiguda","Chengicherla","Pocharam","Narapally","Medipally"],
                        Dilsukhnagar: ["Dilsukhnagar","Kothapet","Gaddiannaram","Moosarambagh"],
                        LB_Nagar:["L. B. Nagar","Bairamalguda","Chintalakunta","Vanasthalipuram","Hastinapuram"],
                        Saroornagar:["Saroornagar","Badangpet","Balapur","Champapet","Jillelguda","Karmanghat","Lingojiguda","Meerpet","Sanghi Nagar","Santoshnagar"],
                        Hayathnagar: ["Hayathnagar","Ibrahim patnam"],
                        Mehdipatnam: ["Mehdipatnam","Toli chowki","Gudimalkapur","Asif Nagar","Langar Houz","Laxminagar Colony","Mallepally","Padmanabha Nagar Colony","Red Hills"],
                        Rajendranagar:["Rajendranagar","Attapur","Bandlaguda","Gandipet","Kismatpur","Narsingi","Puppalguda"],
                        Shamshabad:["Shamshabad","Rajiv Gandhi International Airport","Umdanagar"],
                    };

                    window.onload = function () {
                    const LocationSelection = document.querySelector("#Location"),
                        AreaSelection = document.querySelector("#Area");

                    AreaSelection.disabled = true;

                    const sortedLocations = Object.keys(locationInfo).sort();
                    for (let Location of sortedLocations) {
                        LocationSelection.options[LocationSelection.options.length] = new Option(Location, Location);
                    }

                    LocationSelection.onchange = (e) => {
                        AreaSelection.disabled = false;
                        AreaSelection.length = 1;

                        const sortedAreas = locationInfo[e.target.value].sort();
                        for (let Area of sortedAreas) {
                            AreaSelection.options[AreaSelection.options.length] = new Option(Area, Area);
                        }
                    };
                };
            </script>
    </body>
</html>