class CovidItem extends HTMLElement {

    set covid(covid) {
        this._covid = covid;
        this.render()
    }

    render() {
        this.innerHTML = `
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">${this._covid.Provinsi}</h5>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Posi}</p>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Semb}</p>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Meni}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">${this._covid.Provinsi}</h5>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Posi}</p>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Semb}</p>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Meni}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">${this._covid.Provinsi}</h5>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Posi}</p>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Semb}</p>
                    <p class="card-text">Kasus Positif : ${this._covid.Kasus_Meni}</p>
                    </div>
                </div>
                </div> ;`
    }
}

customElements.define("covid-item", CovidItem);