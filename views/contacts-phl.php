<?php include 'header.php'; ?>

<main>
  <h1>Contacts</h1>

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
        region: "NCR",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/cf62ebb59aefa1d2856981fb77574fb9982c5fad/full/640%2C/0/default?text=NCR",
        contacts: [
          { name: "Ma. Teresa Pangilinan", email: "pangilinanmc@churchofjesuschrist.org" },
          { name: "Ma. Teresa Pangilinan", email: "PangilinanMC@churchofjesuschrist.org" }
        ]
      },
      {
        region: "North and Central Luzon",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/46910789b4c911eeaf5feeeeac1ed77e9a30ef3f/full/640%2C/0/default?text=NL",
        contacts: [
          { name: "Wilfredo Estrada", email: "email@example.com" },
          { name: "Richard Espinosa", email: "email@example.com" },
          { name: "Ryan Manrique", email: "email@example.com" }
        ]
      },
      {
        region: "South Luzon",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/2cr3d0ah18yg08jyhl9vxg8cte1ge96z7q4h8c98/full/640%2C/0/default?text=SL",
        contacts: [
          { name: "Manuel Paredes", email: "email@example.com" },
          { name: "Ian Santamaria", email: "email@example.com" }
        ]
      },
      {
        region: "Visayas",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/3b515c363a8c71994bd6e110cf021fc84d9c90f6/full/640%2C/0/default?text=V",
        contacts: [
          { name: "Carolyn Abanggan", email: "email@example.com" },
          { name: "WSR Manager Name", email: "email@example.com" }
        ]
      },
      {
        region: "Mindanao",
        regionPhoto: "https://www.churchofjesuschrist.org/imgs/773e752367cb5f90dd2d203fd6d390708ce0286a/full/640%2C/0/default/50?text=M",
        contacts: [
          { name: "Norman Dolorfino", email: "email@example.com" },
          { name: "WSR Manager Name", email: "email@example.com" }
        ]
      }
    ];

    const directory = document.getElementById("directory");

    data.forEach((group, index) => {
      const regionDiv = document.createElement("div");
      regionDiv.className = "region";

      regionDiv.innerHTML = `
        <div class="region-header" onclick="toggleRegion(${index})">
          <img src="${group.regionPhoto}"<strong>${group.region}</strong>
        </div>
        <div class="region-content" id="region-${index}">
          ${group.contacts.map(c => `
            <div class="contact">
              <p><strong>WSR Manager Name:</strong> ${c.name}</p>
              <p><strong>Email Address:</strong> 
                <a href="mailto:${c.email}}</a>
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