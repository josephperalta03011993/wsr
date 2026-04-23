<?php include 'header.php'; ?>

<main>
  <h1>Contact Us</h1>

  <div id="directory"></div>

  <style>
    .region {
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 15px;
    }

    .region-header {
      display: flex;
      align-items: center;
      cursor: pointer;
      padding: 10px;
      background: #f5f5f5;
    }

    .region-header img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
      border-radius: 50%;
      object-fit: cover;
    }

    .region-header strong {
      font-size: 16px;
    }

    .region-content {
      display: none;
      padding: 10px 25px;
    }

    .contact {
      margin-bottom: 12px;
      padding-left: 20px;
    }

    .contact p {
      margin: 3px 0;
    }
  </style>

  <script>
    const data = [
      {
        region: "Manila / Antipolo / Palawan / Quezon City Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/cf62ebb59aefa1d2856981fb77574fb9982c5fad/full/640%2C/0/default?text=Manila",
        contacts: [
          { name: "Ma. Teresa Pangilinan | WSR Manager", email: "PangilinanMC@churchofjesuschrist.org" }     
          
        ]
      },
      {
        region: "Cauayan / Laoag / Tuguegarao Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/hm9k0jognyx2gnpxst4wcu448jrokp6nbipuk1b1/full/640%2C/0/default?text=Tuguegarao",
        contacts: [
          { name: "Wilfredo Estrada, Jr. | WSR Manager", email: "WILFREDO.ESTRADA@ChurchofJesusChrist.org" },
          
        ]
      },
       {
        region: "Angeles / Urdaneta / Lingayen / Baguio Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/46910789b4c911eeaf5feeeeac1ed77e9a30ef3f/full/640%2C/0/default?text=Urdaneta",
        contacts: [
          { name: "Richard Espinosa | WSR Manager", email: "EspinosaRO@churchofjesuschrist.org" },
        ]
      },
       {
        region: "Olongapo / Cabanatuan / Quezon City North Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/cf62ebb59aefa1d2856981fb77574fb9982c5fad/full/640%2C/0/default?text=Manila",
        contacts: [
          { name: "Christian Edgardo Manrique | WSR Manager", email: "ManriqueCE@churchofjesuschrist.org" }
        ]
      },
      {
        region: "Cavite / San Pablo Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/2cr3d0ah18yg08jyhl9vxg8cte1ge96z7q4h8c98/full/640%2C/0/default?text=Alabang",
        contacts: [
          { name: "Manuel Paredes | WSR Manager", email: "ParedesM@ChurchofJesusChrist.org" }
        ]
      },
      {
        region: "Naga / Legazpi Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/ezhn7qdd7ohudw1rgatqia0vo9vi2zvpn11dznji/full/640%2C/0/default?text=Naga",
        contacts: [
          { name: "Ian Alfonso Santamaria, Jr. | WSR Manager", email: "ianalfonso@churchofjesuschrist.org" }
        ]
      },
      {
        region: "Cebu / Cebu East / Dumaguete Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/3b515c363a8c71994bd6e110cf021fc84d9c90f6/full/640%2C/0/default?text=Cebu",
        contacts: [
          { name: "Carolyn Abanggan | WSR Manager", email: "carolyn.abanggan@ChurchofJesusChrist.org" }
        ]
      },
      {
        region: "Bacolod / Iloilo Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/35152aa82a8f11ec8410eeeeac1e04a24c1edfef/full/640%2C/0/default?text=Bacolod",
        contacts: [
          { name: "Michael Adam Villanueva | WSR Manager", email: "Villanum@churchofjesuschrist.org" }
        ]
      },
      {
        region: "Cagayan de Oro / Davao / General Santos Region",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/773e752367cb5f90dd2d203fd6d390708ce0286a/full/640%2C/0/default?text=Davao",
        contacts: [
          { name: "Ronald Aban | WSR Manager", email: "raban@ChurchofJesusChrist.org" },
        ]
      },
      {
        region: "Butuan / Tacloban Region",
        regionPhoto: "https://churchofjesuschristtemples.org/assets/img/temples/tacloban-city-philippines-temple/tacloban-city-philippines-temple-55808-main.jpg?text=Tacloban",
        contacts: [
          { name: "Norman Dolorfino | WSR Manager", email: "dolorfinond@churchofjesuschrist.org" }          
        ]
      },
      {
        region: "Family Services",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/cf62ebb59aefa1d2856981fb77574fb9982c5fad/full/640%2C/0/default?text=Manila",
        contacts: [
          { name: "Nercel Cortez-Palacol | Counselor", email: "CortezNC@ChurchofJesusChrist.org" }          
        ]
      }
    ];

    const directory = document.getElementById("directory");

    data.forEach((group, index) => {
      const regionDiv = document.createElement("div");
      regionDiv.className = "region";

      regionDiv.innerHTML = `
        <div class="region-header" onclick="toggleRegion(${index})">
          <img src="${group.regionPhoto}"><strong>${group.region}</strong>
        </div>
        <div class="region-content" id="region-${index}">
          ${group.contacts.map(c => `
            <div class="contact">
              <p><strong>Name:</strong> ${c.name}</p>
              <p><strong>Email Address:</strong> 
                <a href="mailto:${c.email}">${c.email}</a>
              </p>
            </div>
          `).join("")}
        </div>
      `;

      directory.appendChild(regionDiv);
    });

    function toggleRegion(index) {
      const content = document.getElementById(`region-${index}`);
      content.style.display = content.style.display === "block" ? "none" : "block";
    }
  </script>

</main>

<?php include 'footer.php'; ?>