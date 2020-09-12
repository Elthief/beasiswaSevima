class CovidItem extends HTMLElement {

  set covid(covid) {
    this._covid = covid;
    this.render();
  }

  render() {
    this.innerHTML = `
      <style>
      .card-deck {
       max-width: 50%;
       margin: auto;
        margin-top: 20px;
      }
       .card-body {
        text-align: center;
      }
      
      </style>  
    
      <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">${this._covid.properties.Provinsi}</h5>
            <p class="card-text">Kasus Positif : ${this._covid.properties.Kasus_Posi}</p>
            <p class="card-text">Kasus Sembuh : ${this._covid.properties.Kasus_Semb}</p>
            <p class="card-text">Kasus Meninggal : ${this._covid.properties.Kasus_Meni}</p>
          </div>
        </div>
      </div> 
        `;
  }
}

customElements.define("covid-item", CovidItem);