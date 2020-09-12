import './covid-item.js';

class CovidList extends HTMLElement {
    set covids(covids) {
        this._covids = covids;
        this.render();
    }

    renderError(message) {
        this.innerHTML = `
        <style>
           .placeholder {
               font-weight: lighter;
               color: rgba(0,0,0,0.5);
               -webkit-user-select: none;
               -moz-user-select: none;
               -ms-user-select: none;
               user-select: none;
           }
       </style>
       `;
        this.innerHTML += `<h2 class="placeholder">${message}</h2>`;
    }

    render() {
        this.innerHTML = "";

        this._covids.foreach(covid => {
            const covidItemElement = document.createElement("covid-item");
            covidItemElement.covid = covid;
            this.appendChild(covidItemElement);
        })
    }

}

customElements.define("covid-list", CovidList);