class SearchBar extends HTMLElement {

    connectedCallback() {
        this.render();
    }

    set clickEvent(event) {
        this._clickEvent = event;
        this.render();
    }

    get value() {
        return this.querySelector("#searchElement").value;
    }

    render() {
        this.innerHTML = `
      
        <div id="search-container" class="search-container">
            <input class="form-control mr-sm-2" placeholder="Cari Data Covid-19 di Provinsimu" id="searchElement" type="search">
            <button class="btn btn-outline-success my-2 my-sm-0" id="searchButtonElement" type="submit">search</button>
        </div>
        `;

        this.querySelector("#searchButtonElement").addEventListener("click", this._clickEvent);
    }
}

customElements.define("search-bar", SearchBar);